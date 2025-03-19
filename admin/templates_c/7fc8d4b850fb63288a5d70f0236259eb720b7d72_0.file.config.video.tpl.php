<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:46:22
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34f8e572383_81913806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fc8d4b850fb63288a5d70f0236259eb720b7d72' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.video.tpl',
      1 => 1738748451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a34f8e572383_81913806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('previewVidUrl', (($tmp = $_smarty_tpl->tpl_vars['propval']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['portlet']->value->getDefaultPreviewImageUrl() : $tmp));?>

<div class='form-group'>
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>
</label>
    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['propval']->value, ENT_QUOTES, 'utf-8', true);?>
">
    <button type="button" class="btn btn-default video-btn" onclick="opc.selectVideoProp('<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
')">
        <video width="300" height="160" controlsList="nodownload" id="cont-preview-vid-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">
            <source src="<?php echo $_smarty_tpl->tpl_vars['previewVidUrl']->value;?>
" id="preview-vid-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" type="video/mp4">
            <?php echo __('videoTagNotSupported');?>

        </video>
    </button>
</div><?php }
}
