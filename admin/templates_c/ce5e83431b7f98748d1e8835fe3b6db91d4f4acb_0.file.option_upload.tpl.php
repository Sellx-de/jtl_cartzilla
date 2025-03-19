<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:39:38
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/option_upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33feaed0af5_14821930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce5e83431b7f98748d1e8835fe3b6db91d4f4acb' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/option_upload.tpl',
      1 => 1738748471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/fileupload.tpl' => 1,
  ),
),false)) {
function content_67a33feaed0af5_14821930 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
" value="upload-<?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
" />
<?php ob_start();
if (!empty($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['maxFileSize'])) {
echo (string)$_smarty_tpl->tpl_vars['setting']->value->rawAttributes['maxFileSize'];
} else {
echo "1000";
}
$_prefixVariable1=ob_get_clean();
ob_start();
if (!empty($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['allowedFileExtensions'])) {
echo (string)$_smarty_tpl->tpl_vars['setting']->value->rawAttributes['allowedFileExtensions'];
}
$_prefixVariable2=ob_get_clean();
ob_start();
if (!empty($_smarty_tpl->tpl_vars['setting']->value->value)) {
echo "
        '<img src=\"";
echo (string)$_smarty_tpl->tpl_vars['shopURL']->value;
echo "/templates/";
echo (string)$_smarty_tpl->tpl_vars['template']->value->getDir();
echo "/";
echo (string)$_smarty_tpl->tpl_vars['setting']->value->rawAttributes['target'];
echo (string)$_smarty_tpl->tpl_vars['setting']->value->value;
echo "?v=";
echo (string)time();
echo "\" class=\"file-preview-image\"/>'
    ";
}
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/fileupload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fileID'=>"tpl-upload-".((string)$_smarty_tpl->tpl_vars['iteration']->value),'fileName'=>"upload-".((string)$_smarty_tpl->tpl_vars['iteration']->value),'fileDeleteUrl'=>((string)$_smarty_tpl->tpl_vars['adminURL']->value)."/template?token=".((string)$_SESSION['jtl_token']),'fileExtraData'=>'{id:1}','fileMaxSize'=>$_prefixVariable1,'fileAllowedExtensions'=>$_prefixVariable2,'fileInitialPreview'=>"[
    ".$_prefixVariable3."
    ]",'fileInitialPreviewConfig'=>"["."{
        "."url: '".((string)$_smarty_tpl->tpl_vars['adminURL']->value)."/template',
        extra: "."{
                "."upload: '".((string)$_smarty_tpl->tpl_vars['template']->value->getDir())."/".((string)$_smarty_tpl->tpl_vars['setting']->value->rawAttributes['target']).((string)$_smarty_tpl->tpl_vars['setting']->value->value)."',
                id:     'upload-".((string)$_smarty_tpl->tpl_vars['iteration']->value)."',
                token:  '".((string)$_SESSION['jtl_token'])."',
                cName:  '".((string)$_smarty_tpl->tpl_vars['setting']->value->key)."'
        }
    }]"), 0, false);
}
}
