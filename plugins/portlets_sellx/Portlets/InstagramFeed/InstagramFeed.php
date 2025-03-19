<?php declare(strict_types=1);

namespace Plugin\portlets_sellx\Portlets\InstagramFeed;

use JTL\OPC\Portlet;
use JTL\Smarty\JTLSmarty;
use JTL\Shop;

class InstagramFeed extends Portlet
{
    public function getFinalHtml(\JTL\OPC\PortletInstance $instance, bool $inContainer = true): string
    {
        $smarty = Shop::Smarty();
        $imageUrls = $this->fetchInstagramImages();

        // 🔹 Template-Pfad definieren
        $templatePath = __DIR__ . '/InstagramFeed.tpl';

        // 🔹 Debug-Log für den Template-Pfad
        error_log("[InstagramFeed] Verwende Template-Pfad: $templatePath", 3, PFAD_ROOT . 'jtldebug.log');

        return $smarty->assign('imageUrls', $imageUrls)
                      ->fetch($templatePath);
    }

    private function fetchInstagramImages(): array
    {
        $imageDir = __DIR__ . '/scripts/instagram_images/';

        if (!is_dir($imageDir)) {
            error_log("[InstagramFeed] ❌ Verzeichnis fehlt: $imageDir", 3, PFAD_ROOT . 'jtldebug.log');
            return [];
        }

        $files = glob($imageDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
        usort($files, fn($a, $b) => filemtime($b) - filemtime($a));
        $imageUrls = array_slice($files, 0, 5);

        $shopUrl = Shop::getURL();
        return array_map(fn($file) => $shopUrl . '/plugins/portlets_sellx/Portlets/InstagramFeed/scripts/instagram_images/' . basename($file), $imageUrls);
    }
}
