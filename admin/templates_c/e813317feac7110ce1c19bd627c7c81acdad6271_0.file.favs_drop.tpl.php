<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:22:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/favs_drop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33be6386f45_26329587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e813317feac7110ce1c19bd627c7c81acdad6271' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/favs_drop.tpl',
      1 => 1738748471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33be6386f45_26329587 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="#" class="btn btn-primary favorites dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    <span class="fas fa-star mr-0 mr-lg-2"></span>
    <span class="d-none d-lg-inline-block"><?php echo __('favorites');?>
</span>
</a>
<div class="dropdown-menu dropdown-menu-right" role="main">
    <?php if ((isset($_smarty_tpl->tpl_vars['favorites']->value)) && is_array($_smarty_tpl->tpl_vars['favorites']->value) && count($_smarty_tpl->tpl_vars['favorites']->value) > 0) {?>
        <span class="dropdown-header"><?php echo __('favouritesHeader');?>
</span>
        <div class="dropdown-divider"></div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['favorites']->value, 'favorite');
$_smarty_tpl->tpl_vars['favorite']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['favorite']->value) {
$_smarty_tpl->tpl_vars['favorite']->do_else = false;
?>
            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['favorite']->value->cAbsUrl;?>
" rel="<?php echo $_smarty_tpl->tpl_vars['favorite']->value->kAdminfav;?>
"<?php if ($_smarty_tpl->tpl_vars['favorite']->value->bExtern) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['favorite']->value->cTitel;
if ($_smarty_tpl->tpl_vars['favorite']->value->bExtern) {?> <i class="fa fa-external-link"></i><?php }?></a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <div class="dropdown-divider"></div>
    <?php }?>
    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/favs"><i class="fa fa-pencil mr-1"></i> <?php echo __('manageFavorites');?>
</a>
</div>
<?php }
}
