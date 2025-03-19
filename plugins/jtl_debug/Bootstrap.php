<?php

declare(strict_types=1);

namespace Plugin\jtl_debug;

use JTL\Backend\Notification;
use JTL\Backend\NotificationEntry;
use JTL\Events\Dispatcher;
use JTL\Mail\Mail\MailInterface;
use JTL\Mail\Mailer;
use JTL\Plugin\Bootstrapper;
use JTL\Shop;
use JTL\Smarty\JTLSmarty;

/**
 * Class Bootstrap
 * @package Plugin\jtl_debug
 */
class Bootstrap extends Bootstrapper
{
    private Debugger $debugger;

    /**
     * @inheritdoc
     */
    public function boot(Dispatcher $dispatcher): void
    {
        parent::boot($dispatcher);
        if (
            Shop::isFrontend()
            && Shop::isAdmin() === false
        ) {
            return;
        }

        $this->debugger = new Debugger($this->getPlugin(), $this->getDB(), $this->getCache());
        $this->debugger->setErrorHandler(new ErrorHandler())
            ->initUserDebugger(new Util());

        if (isset($_GET['jtl-debug-session'])) {
            $dispatcher->listen('shop.hook.' . \HOOK_INDEX_NAVI_HEAD_POSTGET, function () {
                $this->debugger->getOutputAjax();
            });
        }

        if ($this->getPlugin()->getConfig()->getValue('jtl_debug_show_mail_smarty_vars') === 'Y') {
            $dispatcher->listen('shop.hook.' . \HOOK_MAIL_PRERENDER, static function (array $args) {
                /** @var Mailer $mailer */
                $mailer = $args['mailer'];
                /** @var MailInterface $mail */
                $mail = $args['mail'];
                if ($mail->getToMail() !== Shop::getSettingValue(\CONF_EMAILS, 'email_master_absender')) {
                    return;
                }
                $mailer->setRenderer(new DebugMailRenderer($mailer->getHydrator()->getSmarty()));
            });
        }

        $dispatcher->listen('shop.hook.' . \HOOK_SMARTY_INC, function (array $args) {
            /** @var JTLSmarty $smarty */
            $smarty = $args['smarty'];
            $active = $this->debugger->getIsActivated() === true;
            if (!isset($_GET['jtl-debug-session']) && $active) {
                // enable smarty debugging
                $smarty->setDebugging(true);
                // set debug template to empty file to avoid the default popup (our own logic is in hook 140)
                $smarty->setDebugTemplate($this->getPlugin()->getPaths()->getFrontendPath() . 'template/empty.tpl');
            }
            $smarty->assign('jtlDebugActive', $active)->assign('plgnJTLDebug', $this->getPlugin());
        });
        $dispatcher->listen('backend.notification', function (Notification $notification) {
            $pluginURL = \method_exists($this->getPlugin()->getPaths(), 'getBackendURL')
                ? $this->getPlugin()->getPaths()->getBackendURL()
                : Shop::getAdminURL() . '/plugin.php?kPlugin=' . $this->getPlugin()->getID();
            $entry     = new NotificationEntry(
                NotificationEntry::TYPE_DANGER,
                \__($this->getPlugin()->getMeta()->getName()),
                \__('Attention: Plugin JTL-Debug is currently active!'),
                $pluginURL
            );
            $entry->setPluginId($this->getPlugin()->getPluginID());
            $notification->addNotify($entry);
        });

        if (!isset($_GET['jtl-debug-session']) && $this->debugger->getIsActivated() === true) {
            $dispatcher->listen('shop.hook.' . \HOOK_SMARTY_OUTPUTFILTER, function (array $args) {
                $this->debugger->run($args['smarty']);
            }, 999);
        }
    }
}
