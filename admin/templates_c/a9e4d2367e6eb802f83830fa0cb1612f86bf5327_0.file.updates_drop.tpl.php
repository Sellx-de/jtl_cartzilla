<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:22:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/updates_drop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33be639e543_46697201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9e4d2367e6eb802f83830fa0cb1612f86bf5327' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/updates_drop.tpl',
      1 => 1738748467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33be639e543_46697201 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['licenseItemUpdates']->value)) && $_smarty_tpl->tpl_vars['licenseItemUpdates']->value->count() > 0) {?>
    <?php $_smarty_tpl->_assignInScope('notifyTypes', array(0=>'info',1=>'warning',2=>'danger'));?>
    <a href="#" class="nav-link text-primary px-2" data-toggle="dropdown">
        <span class="fa-layers fa-fw has-notify-icon stack-refresh">
            <span class="fas fa-refresh"></span>
            <span class="fa-stack">
                <span class="fas fa-circle fa-stack-2x text-warning"></span>
                <strong class="fa-stack-1x"><?php echo $_smarty_tpl->tpl_vars['licenseItemUpdates']->value->count();?>
</strong>
            </span>
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg" role="main">
        <span class="dropdown-header"><?php echo __('Updates available');?>
</span>
        <div class="dropdown-divider"></div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['licenseItemUpdates']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <div class="dropdown-item-text">
                <span class="icon-text-indent">
                    <div><i class="fa fa-circle text-info" aria-hidden="true"></i></div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/<?php echo JTL\Router\Route::LICENSE;?>
#license-item-<?php echo $_smarty_tpl->tpl_vars['item']->value->getID();?>
">
                        <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
 </span> <span class="badge badge-info">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->getReferencedItem()->getInstalledVersion();?>
 &rarr; <?php echo $_smarty_tpl->tpl_vars['item']->value->getReferencedItem()->getMaxInstallableVersion();?>

                        </span>
                    </a>
                </span>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
