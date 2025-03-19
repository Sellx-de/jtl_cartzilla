<?php declare(strict_types=1);
/**
 * @package Plugin\{$pluginID}
 * @author  {$author}
 */

namespace Plugin\{$pluginID};

use JTL\Events\Dispatcher;
{if $links|count > 0}
use JTL\Link\LinkInterface;
{/if}
use JTL\Plugin\Bootstrapper;
use JTL\Smarty\JTLSmarty;

/**
 * Class Bootstrap
 * @package Plugin\{$pluginID}
 */
class Bootstrap extends Bootstrapper
{
{if $hooks|count > 0}
    /**
     * @inheritdoc
     */
    public function boot(Dispatcher $dispatcher): void
    {
        parent::boot($dispatcher);
        $plugin = $this->getPlugin();
        $db     = $this->getDB();
        $cache  = $this->getCache();
{foreach $hooks as $hook}
        $dispatcher->listen('shop.hook.' .\{$hook['const']}, function ($args) use ($plugin, $db, $cache) {
            // implement me
{if $hook['priority'] !== 5}
        }, {$hook['priority']});
{else}
        });
{/if}
{/foreach}
    }
{/if}
{if $links|count > 0}

    /**
     * @inheritdoc
     */
    public function prepareFrontend(LinkInterface $link, JTLSmarty $smarty): bool
    {
        parent::prepareFrontend($link, $smarty);
{foreach $links as $link}
        if ($link->getTemplate() === '{$link.Template}') {
            // do something
        }
{/foreach}

        return true;
    }
{/if}
{if $adminTabs|count > 0}

    /**
     * @inheritdoc
     */
    public function renderAdminMenuTab(string $tabName, int $menuID, JTLSmarty $smarty): string
    {
        $tplPath = $this->getPlugin()->getPaths()->getAdminPath() . 'templates/';
        $smarty->assign('backendURL', $this->getPlugin()->getPaths()->getBackendURL());
{foreach $adminTabs as $i => $tab}
{$file = $tab.Filename}
{if empty($file)}{$file = 'tab'|cat:$i+1|cat:'.tpl'}{/if}
        if ($tabName === '{$tab.Name}') {
            return $smarty->assign('example_var1', 123)
                ->assign('example_var2', 'Hello world!')
                ->fetch($tplPath . '{$file}');
        }
{/foreach}

        return parent::renderAdminMenuTab($tabName, $menuID, $smarty);
    }
{/if}
}
