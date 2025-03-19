<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:31:41
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/kuponstatistik.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab270ddca829_28934217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad11ed723a0a59d018e107072392be43ab45c9a8' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/kuponstatistik.tpl',
      1 => 1738748273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/kuponstatistik_uebersicht.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67ab270ddca829_28934217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['step']->value === 'kuponstatistik_uebersicht') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/kuponstatistik_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
