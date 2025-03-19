<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:22:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/exstore_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33be61a8c28_43202499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf24a5bdfd1e599c527cf12d80c7b1c3bf53d39' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/exstore_banner.tpl',
      1 => 1738748466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33be61a8c28_43202499 (Smarty_Internal_Template $_smarty_tpl) {
if ((($tmp = $_smarty_tpl->tpl_vars['useExstoreWidgetBanner']->value ?? null)===null||$tmp==='' ? false : $tmp) === true) {?>
    <a href="<?php echo __('extensionStoreURL');?>
" target="_blank">
        <img src="gfx/exstore-banner-dashboard-<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.jpg"
             alt="Extensions entdecken!" class="exstore-banner">
    </a>
<?php } else { ?>
    <a href="<?php echo __('extensionStoreURL');?>
" target="_blank">
        <picture>
            <source media="(min-width: 768px)" srcset="gfx/exstore-banner-<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.jpg">
            <img src="gfx/exstore-banner-mobile-<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.jpg" alt="Extensions entdecken!" class="exstore-banner">
        </picture>
    </a>
<?php }
}
}
