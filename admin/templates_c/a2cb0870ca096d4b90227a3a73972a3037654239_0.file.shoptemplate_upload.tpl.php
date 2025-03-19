<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:39:07
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/shoptemplate_upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33fcb390f35_02671814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2cb0870ca096d4b90227a3a73972a3037654239' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/shoptemplate_upload.tpl',
      1 => 1738748464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/fileupload.tpl' => 1,
  ),
),false)) {
function content_67a33fcb390f35_02671814 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card" id="upload">
    <div class="card-header"><?php echo __('uploadTemplateHeading');?>
</div>
    <div class="card-body">
        <form enctype="multipart/form-data">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <div class="form-group">
                <?php ob_start();
echo __('successTemplateUpload');
$_prefixVariable2=ob_get_clean();
ob_start();
echo __('errorTemplateUpload');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/fileupload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fileID'=>'template-install-upload','fileUploadUrl'=>((string)$_smarty_tpl->tpl_vars['adminURL']->value).((string)$_smarty_tpl->tpl_vars['route']->value),'fileBrowseClear'=>true,'fileUploadAsync'=>true,'fileAllowedExtensions'=>"['zip']",'fileMaxSize'=>100000,'fileOverwriteInitial'=>false,'filePreview'=>false,'fileShowUpload'=>true,'fileShowRemove'=>true,'fileDefaultBatchSelectedEvent'=>false,'fileSuccessMsg'=>$_prefixVariable2,'fileErrorMsg'=>$_prefixVariable3), 0, false);
?>
            </div>
            <hr>
        </form>
    </div>

    <?php echo '<script'; ?>
>
        let $fi = $('#template-install-upload');
        
        $fi.on('fileuploaded', function(event, data, previewId, index) {
            let response = data.response;
            if (response.status === 'OK' && response.html) {
                let replace = $(response.html.id);
                if (replace.length > 0) {
                    replace.html(response.html.content);
                }
            }
            $fi.fileinput('reset');
            $fi.fileinput('clear');
            $fi.fileinput('refresh');
            $fi.fileinput('enable');
        });
        
    <?php echo '</script'; ?>
>
</div>
<?php }
}
