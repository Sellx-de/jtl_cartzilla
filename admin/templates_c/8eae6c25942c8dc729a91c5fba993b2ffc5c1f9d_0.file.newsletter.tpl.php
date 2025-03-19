<?php
/* Smarty version 4.5.4, created on 2025-02-05 13:24:39
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/newsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a35887124ca3_68161707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8eae6c25942c8dc729a91c5fba993b2ffc5c1f9d' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/newsletter.tpl',
      1 => 1738748268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/newsletter_uebersicht.tpl' => 1,
    'file:tpl_inc/newsletter_vorlage_erstellen.tpl' => 1,
    'file:tpl_inc/newsletter_vorlage_std_erstellen.tpl' => 1,
    'file:tpl_inc/newsletter_anzeigen.tpl' => 1,
    'file:tpl_inc/newsletter_vorlagenvorschau_vorbereitung.tpl' => 1,
    'file:tpl_inc/newsletter_vorlagenvorschau.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67a35887124ca3_68161707 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['step']->value !== 'vorlage_vorschau') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if ($_smarty_tpl->tpl_vars['step']->value === 'uebersicht') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/newsletter_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'vorlage_erstellen') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/newsletter_vorlage_erstellen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'vorlage_std_erstellen') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/newsletter_vorlage_std_erstellen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'history_anzeigen') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/newsletter_anzeigen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'vorlage_vorschau_iframe') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/newsletter_vorlagenvorschau_vorbereitung.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'vorlage_vorschau') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/newsletter_vorlagenvorschau.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if ($_smarty_tpl->tpl_vars['step']->value !== 'vorlage_vorschau') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
