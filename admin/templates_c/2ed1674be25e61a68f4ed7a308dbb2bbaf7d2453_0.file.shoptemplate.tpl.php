<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:39:07
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/shoptemplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33fcb319bf8_14754270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ed1674be25e61a68f4ed7a308dbb2bbaf7d2453' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/shoptemplate.tpl',
      1 => 1738748274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/shoptemplate_detail.tpl' => 1,
    'file:tpl_inc/shoptemplate_overview.tpl' => 1,
    'file:tpl_inc/shoptemplate_upload.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67a33fcb319bf8_14754270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_assignInScope('cBeschreibung', sprintf(__('shoptemplatesDesc'),(($_smarty_tpl->tpl_vars['shopURL']->value).('/?preview')),(($_smarty_tpl->tpl_vars['shopURL']->value).('/?preview'))));
if ((isset($_smarty_tpl->tpl_vars['templateConfig']->value)) && $_smarty_tpl->tpl_vars['templateConfig']->value) {?>
    <?php ob_start();
echo __('settings');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('cTitel', (($_prefixVariable1).(': ')).($_smarty_tpl->tpl_vars['template']->value->getName()));?>
    <?php if (!empty($_smarty_tpl->tpl_vars['template']->value->getDocumentationURL())) {?>
        <?php $_smarty_tpl->_assignInScope('cDokuURL', $_smarty_tpl->tpl_vars['template']->value->getDocumentationURL());?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('cDokuURL', __('shoptemplateURL'));?>
    <?php }
} else { ?>
    <?php $_smarty_tpl->_assignInScope('cTitel', __('shoptemplates'));?>
    <?php $_smarty_tpl->_assignInScope('cDokuURL', __('shoptemplateURL'));
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>$_smarty_tpl->tpl_vars['cTitel']->value,'cBeschreibung'=>$_smarty_tpl->tpl_vars['cBeschreibung']->value,'cDokuURL'=>$_smarty_tpl->tpl_vars['cDokuURL']->value), 0, false);
?>

<style>#form_settings .fileinput-upload-button, .kv-file-upload{display:none!important;}</style>

<div id="content">
<?php if ((isset($_smarty_tpl->tpl_vars['templateConfig']->value)) && count($_smarty_tpl->tpl_vars['templateConfig']->value) > 0) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/shoptemplate_detail.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/shoptemplate_overview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/shoptemplate_upload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
