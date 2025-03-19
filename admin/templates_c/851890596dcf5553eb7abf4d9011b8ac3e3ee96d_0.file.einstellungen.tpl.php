<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:56:39
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/einstellungen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a343e76087c7_54354169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '851890596dcf5553eb7abf4d9011b8ac3e3ee96d' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/einstellungen.tpl',
      1 => 1738748268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/einstellungen_uebersicht.tpl' => 1,
    'file:tpl_inc/einstellungen_bearbeiten.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67a343e76087c7_54354169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['step']->value === 'uebersicht') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/einstellungen_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'einstellungen bearbeiten') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/einstellungen_bearbeiten.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
