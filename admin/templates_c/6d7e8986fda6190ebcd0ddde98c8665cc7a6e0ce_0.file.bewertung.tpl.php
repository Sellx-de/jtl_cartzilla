<?php
/* Smarty version 4.5.4, created on 2025-02-05 13:24:24
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/bewertung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a35878e60986_82570734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d7e8986fda6190ebcd0ddde98c8665cc7a6e0ce' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/bewertung.tpl',
      1 => 1738748274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/bewertung_uebersicht.tpl' => 1,
    'file:tpl_inc/bewertung_editieren.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67a35878e60986_82570734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['step']->value === 'bewertung_uebersicht') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/bewertung_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'bewertung_editieren') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/bewertung_editieren.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
