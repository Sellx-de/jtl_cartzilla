<?php declare(strict_types=1);

namespace Plugin\jtl_plugin_bootstrapper;

use JTL\Helpers\Form;
use JTL\Helpers\Request;
use JTL\Plugin\Bootstrapper;
use JTL\Smarty\JTLSmarty;
use JTL\Shop;

/**
 * Class Bootstrap
 * @package Plugin\jtl_plugin_bootstrapper
 */
class Bootstrap extends Bootstrapper
{
    /**
     * @inheritdoc
     */
    public function renderAdminMenuTab(string $tabName, int $menuID, JTLSmarty $smarty): string
    {
        if ($tabName !== 'Bootstrap') {
            return parent::renderAdminMenuTab($tabName, $menuID, $smarty);
        }
        $plugin       = $this->getPlugin();
        $bootStrapper = new PluginBootstrapper($plugin, $smarty, $this->getDB(), false);
        $loadedPlugin = false;
        if (!empty($_POST) && Form::validateToken()) {
            if (Request::postInt('createPlugin') === 1) {
                $status = $bootStrapper->bootstrap($_POST)->create()->getResponse();
                \header('Content-Type: application/json');
                die(\json_encode(['success' => \count($status['errors']) === 0, 'status' => $status]));
            }
            if (Request::postInt('loadLegacyPlugin') === 1) {
                $loadedPlugin = $bootStrapper->loadPlugin(Request::postVar('pathLegacy'), true);
                if ($loadedPlugin === false) {
                    Shop::Container()->getAlertService()->addError(
                        \__('Invalid path.'),
                        'invalidPathMsg'
                    );
                }
            } elseif (Request::postInt('loadPlugin') === 1) {
                $loadedPlugin = $bootStrapper->loadPlugin(Request::postVar('path'));
                if ($loadedPlugin === false) {
                    Shop::Container()->getAlertService()->addError(
                        \__('Invalid path.'),
                        'invalidPathMsg'
                    );
                }
            } elseif (Request::postInt('createZip') === 1) {
                if ($bootStrapper->createZipFile(Request::postVar('pathZip')) === false) {
                    Shop::Container()->getAlertService()->addError(
                        \__('Could not create zip file.'),
                        'errorZipMsg'
                    );
                }
            }
        }
        $tplPath = $plugin->getPaths()->getAdminPath() . 'tpl/';

        return $smarty->assign('permissionOK', \is_writable(\PFAD_ROOT . \PLUGIN_DIR))
            ->assign('postURL', $plugin->getPaths()->getBackendURL())
            ->assign('hookList', $bootStrapper->getHookList())
            ->assign('tplPath', $tplPath)
            ->assign('jsURL', $plugin->getPaths()->getAdminURL() . 'js/jquery.bootstrap.wizard.min.js')
            ->assign('loadedPlugin', $loadedPlugin)
            ->fetch($tplPath . 'wizard.tpl');
    }
}
