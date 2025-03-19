<?php
/* Smarty version 4.5.4, created on 2025-02-11 10:42:44
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/kontaktformular.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab1b941a3528_77829680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfb796d6d247fd52ba57e1ba9bf1d7f15e931082' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/kontaktformular.tpl',
      1 => 1738748275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/kontaktformular_uebersicht.tpl' => 1,
    'file:tpl_inc/kontaktformular_betreff.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67ab1b941a3528_77829680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['step']->value === 'uebersicht') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/kontaktformular_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'betreff') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/kontaktformular_betreff.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
