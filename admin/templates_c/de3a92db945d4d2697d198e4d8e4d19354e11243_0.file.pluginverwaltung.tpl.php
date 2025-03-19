<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:25:29
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/pluginverwaltung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33c99a01ab4_79158180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de3a92db945d4d2697d198e4d8e4d19354e11243' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/pluginverwaltung.tpl',
      1 => 1738748274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/pluginverwaltung_uebersicht.tpl' => 1,
    'file:tpl_inc/pluginverwaltung_sprachvariablen.tpl' => 1,
    'file:tpl_inc/pluginverwaltung_lizenzkey.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67a33c99a01ab4_79158180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['pluginNotFound']->value === true) {?>
<div class="alert alert-danger"><?php echo __('pluginNotFound');?>
</div>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['step']->value === 'pluginverwaltung_uebersicht') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['step']->value === 'pluginverwaltung_sprachvariablen') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_sprachvariablen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['step']->value === 'pluginverwaltung_lizenzkey') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_lizenzkey.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
