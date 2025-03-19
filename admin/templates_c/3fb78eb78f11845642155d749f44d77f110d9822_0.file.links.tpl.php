<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:29:00
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34b7c640413_82647948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fb78eb78f11845642155d749f44d77f110d9822' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/links.tpl',
      1 => 1738748276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/links_uebersicht.tpl' => 1,
    'file:tpl_inc/links_neue_linkgruppe.tpl' => 1,
    'file:tpl_inc/links_neuer_link.tpl' => 1,
    'file:tpl_inc/links_loesch_confirm.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67a34b7c640413_82647948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['step']->value === 'uebersicht') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'neue Linkgruppe') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_neue_linkgruppe.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'neuer Link') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_neuer_link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'linkgruppe_loeschen_confirm') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_loesch_confirm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
