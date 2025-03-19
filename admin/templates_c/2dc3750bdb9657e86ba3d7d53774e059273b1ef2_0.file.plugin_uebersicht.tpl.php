<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:36:57
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/plugin_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33f49618863_87671978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dc3750bdb9657e86ba3d7d53774e059273b1ef2' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/plugin_uebersicht.tpl',
      1 => 1738748465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/dbupdater_status.tpl' => 1,
    'file:tpl_inc/dbupdater_scripts.tpl' => 1,
  ),
),false)) {
function content_67a33f49618863_87671978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('cPlugin', __('plugin'));
if ($_smarty_tpl->tpl_vars['oPlugin']->value !== null) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>(($_smarty_tpl->tpl_vars['cPlugin']->value).(': ')).($_smarty_tpl->tpl_vars['oPlugin']->value->getMeta()->getName()),'pluginMeta'=>$_smarty_tpl->tpl_vars['oPlugin']->value->getMeta()), 0, false);
}?>
<div id="content">
    <div class="container2">
        <div id="update-status">
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/dbupdater_status.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('migrationURL'=>($_smarty_tpl->tpl_vars['adminURL']->value).($_smarty_tpl->tpl_vars['route']->value),'pluginID'=>$_smarty_tpl->tpl_vars['oPlugin']->value->getID(),'hasPendingMigrations'=>(($tmp = $_smarty_tpl->tpl_vars['updatesAvailable']->value ?? null)===null||$tmp==='' ? false : $tmp)), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/dbupdater_scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <?php $_smarty_tpl->_assignInScope('hasActiveMenuTab', false);?>
        <?php $_smarty_tpl->_assignInScope('hasActiveMenuItem', false);?>
        <div class="tabs" id="tabs-<?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getPluginID();?>
">
            <?php if ($_smarty_tpl->tpl_vars['oPlugin']->value !== null && $_smarty_tpl->tpl_vars['oPlugin']->value->getAdminMenu()->getItems()->count() > 0) {?>
                <nav class="tabs-nav">
                    <ul class="nav nav-tabs" role="tablist">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oPlugin']->value->getAdminMenu()->getItems()->toArray(), 'menuItem');
$_smarty_tpl->tpl_vars['menuItem']->index = -1;
$_smarty_tpl->tpl_vars['menuItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->do_else = false;
$_smarty_tpl->tpl_vars['menuItem']->index++;
$__foreach_menuItem_3_saved = $_smarty_tpl->tpl_vars['menuItem'];
?>
                            <li class="tab-<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->id;?>
 nav-item">
                                <a class="tab-link-<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->id;?>
 nav-link <?php if (($_smarty_tpl->tpl_vars['defaultTabbertab']->value === -1 && $_smarty_tpl->tpl_vars['menuItem']->index === 0) || ($_smarty_tpl->tpl_vars['defaultTabbertab']->value > -1 && ($_smarty_tpl->tpl_vars['defaultTabbertab']->value === $_smarty_tpl->tpl_vars['menuItem']->value->id || $_smarty_tpl->tpl_vars['defaultTabbertab']->value === $_smarty_tpl->tpl_vars['menuItem']->value->name))) {?> <?php $_smarty_tpl->_assignInScope('hasActiveMenuTab', true);?>active<?php }?>" data-toggle="tab" role="tab" href="#plugin-tab-<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->id;?>
">
                                    <?php echo __($_smarty_tpl->tpl_vars['menuItem']->value->displayName);?>

                                </a>
                            </li>
                        <?php
$_smarty_tpl->tpl_vars['menuItem'] = $__foreach_menuItem_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </nav>
                <div class="tab-content">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oPlugin']->value->getAdminMenu()->getItems()->toArray(), 'menuItem');
$_smarty_tpl->tpl_vars['menuItem']->index = -1;
$_smarty_tpl->tpl_vars['menuItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->do_else = false;
$_smarty_tpl->tpl_vars['menuItem']->index++;
$__foreach_menuItem_4_saved = $_smarty_tpl->tpl_vars['menuItem'];
?>
                        <div id="plugin-tab-<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->id;?>
" class="settings tab-pane fade <?php if (($_smarty_tpl->tpl_vars['defaultTabbertab']->value === -1 && $_smarty_tpl->tpl_vars['menuItem']->index === 0) || $_smarty_tpl->tpl_vars['defaultTabbertab']->value > -1 && ($_smarty_tpl->tpl_vars['defaultTabbertab']->value === $_smarty_tpl->tpl_vars['menuItem']->value->id || $_smarty_tpl->tpl_vars['defaultTabbertab']->value === $_smarty_tpl->tpl_vars['menuItem']->value->name)) {?> <?php $_smarty_tpl->_assignInScope('hasActiveMenuItem', true);?>active show<?php }?>">
                            <?php echo $_smarty_tpl->tpl_vars['menuItem']->value->html;?>

                        </div>
                    <?php
$_smarty_tpl->tpl_vars['menuItem'] = $__foreach_menuItem_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php } else { ?>
                <div class="alert alert-info" role="alert">
                    <i class="fal fa-info-circle"></i> <?php echo __('noPluginDataAvailable');?>

                </div>
            <?php }?>
        </div>
    </div>
</div>
<?php }
}
