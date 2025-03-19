<?php

use JTL\Shop;
use JTL\Plugin\Admin\PluginAdmin;
use JTL\Plugin\Bootstrapper;
use JTL\Smarty\JTLSmarty;
header('Content-Type: application/json');
echo json_encode(['debug' => 'Adminmenu wurde geladen']);
exit();

class Adminmenu extends Bootstrapper
{
    public function init()
    {
        $this->registerAdminMenu();
    }

    private function registerAdminMenu()
    {
        if (isset($_POST['action']) && $_POST['action'] === 'save_settings') {
            $this->saveSettings();
        }

        /** @var JTLSmarty $smarty */
        $smarty = Shop::Smarty();
        $settings = $this->getSettings();

        $smarty->assign('settings', $settings);
    }

    private function saveSettings()
    {
        checkAdminLogin(); // Nur eingeloggte Admins dürfen speichern
        $pluginAdmin = PluginAdmin::getInstance('portlets_sellx');

        $pluginAdmin->saveSetting('instagram_username', $_POST['settings']['instagram_username']);
        $pluginAdmin->saveSetting('instagram_password', $_POST['settings']['instagram_password']);
        $pluginAdmin->saveSetting('instagram_image_count', $_POST['settings']['instagram_image_count']);

        Shop::Container()->getAlertService()->addAlert(
            'success',
            'Einstellungen gespeichert!',
            'instagram-settings-saved'
        );

        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    private function getSettings()
    {
        $pluginAdmin = PluginAdmin::getInstance('portlets_sellx');

        return [
            'instagram_username' => $pluginAdmin->getSettingValue('instagram_username'),
            'instagram_password' => $pluginAdmin->getSettingValue('instagram_password'),
            'instagram_image_count' => $pluginAdmin->getSettingValue('instagram_image_count')
        ];
    }
}
