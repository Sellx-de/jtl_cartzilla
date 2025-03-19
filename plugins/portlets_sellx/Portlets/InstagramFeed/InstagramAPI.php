<?php declare(strict_types=1);

namespace Plugin\portlets_sellx\Portlets\InstagramFeed;

use instagrapi\Client;

class InstagramAPI
{
    private Client $cl;

    public function __construct(string $username, string $password)
    {
        $this->cl = new Client();
        try {
            $this->cl->login($username, $password);
        } catch (\Exception $e) {
            error_log('Instagram Login-Fehler: ' . $e->getMessage());
        }
    }

    public function getLatestImages(string $username, int $amount = 5): array
    {
        try {
            $user_id = $this->cl->user_id_from_username($username);
            $medias  = $this->cl->user_medias($user_id, $amount);
            $images  = [];

            foreach ($medias as $media) {
                if ($media->media_type === 1) {
                    $images[] = $media->thumbnail_url;
                }
            }

            return $images;
        } catch (\Exception $e) {
            error_log('Instagram API Fehler: ' . $e->getMessage());
            return [];
        }
    }
}
