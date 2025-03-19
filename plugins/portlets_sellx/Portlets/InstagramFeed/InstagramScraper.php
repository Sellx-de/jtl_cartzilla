?php declare(strict_types=1);

namespace Plugin\portlets_sellx\Portlets\InstagramFeed;

use JTL\Shop;

class InstagramScraper
{
    private string $cacheDir;
    private int $cacheTime = 3600; // 1 Stunde

    public function __construct()
    {
        $this->cacheDir = PFAD_ROOT . "cache/instagram/";
        if (!is_dir($this->cacheDir)) {
            mkdir($this->cacheDir, 0777, true);
        }
    }

    public function getInstagramPosts(string $username, int $limit = 6): array
    {
        if (empty($username)) {
            return [];
        }

        $cacheFile = "{$this->cacheDir}{$username}.json";

        // 🔹 Falls Cache existiert & aktuell ist → Cache verwenden
        if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $this->cacheTime) {
            return json_decode(file_get_contents($cacheFile), true);
        }

        $html = $this->fetchInstagramHTML($username);
        if (!$html) {
            return [];
        }

        $posts = $this->extractInstagramPosts($html, $limit);

        // 🔹 Cache speichern
        file_put_contents($cacheFile, json_encode($posts));

        return $posts;
    }

    private function fetchInstagramHTML(string $username): ?string
    {
        $url = "https://www.instagram.com/{$username}?hl=de";
        $headers = [
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36",
            "Accept-Language: en-US,en;q=0.9",
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $html = curl_exec($ch);
        curl_close($ch);

        return $html ?: null;
    }

    private function extractInstagramPosts(string $html, int $limit): array
    {
        preg_match_all('/"display_url":"(https:\\/\\/[^"]+)"/', $html, $imageMatches);
        preg_match_all('/"shortcode":"([^"]+)"/', $html, $shortcodeMatches);
        preg_match_all('/"edge_media_to_caption":{"edges":\[\{"node":{"text":"(.*?)"}}]}/', $html, $captionMatches);

        $posts = [];
        for ($i = 0; $i < min($limit, count($imageMatches[1])); $i++) {
            $posts[] = [
                'image'   => stripslashes($imageMatches[1][$i]),
                'caption' => stripslashes($captionMatches[1][$i] ?? ''),
                'url'     => "https://www.instagram.com/p/{$shortcodeMatches[1][$i]}/"
            ];
        }

        return $posts;
    }
}
