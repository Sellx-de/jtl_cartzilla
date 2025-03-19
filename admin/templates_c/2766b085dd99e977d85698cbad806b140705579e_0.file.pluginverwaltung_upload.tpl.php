<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:25:29
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33c99bb9c34_15154398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2766b085dd99e977d85698cbad806b140705579e' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_upload.tpl',
      1 => 1738748472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/fileupload.tpl' => 1,
  ),
),false)) {
function content_67a33c99bb9c34_15154398 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'upload') {?> active show<?php }?>" id="upload">
    <form enctype="multipart/form-data">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <div class="form-group">
            <?php ob_start();
echo __('successPluginUpload');
$_prefixVariable1=ob_get_clean();
ob_start();
echo __('errorPluginUpload');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/fileupload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fileID'=>'plugin-install-upload','fileUploadUrl'=>((string)$_smarty_tpl->tpl_vars['adminURL']->value).((string)$_smarty_tpl->tpl_vars['route']->value),'fileBrowseClear'=>true,'fileUploadAsync'=>true,'fileAllowedExtensions'=>"['zip']",'fileMaxSize'=>100000,'fileOverwriteInitial'=>false,'fileShowUpload'=>true,'fileShowRemove'=>true,'fileDefaultBatchSelectedEvent'=>false,'fileSuccessMsg'=>$_prefixVariable1,'fileErrorMsg'=>$_prefixVariable2), 0, false);
?>
        </div>
        <hr>
    </form>

    <?php echo '<script'; ?>
>
        let $fi = $('#plugin-install-upload');
        
        $fi.on('fileuploaded', function(event, data, previewId, index) {
            let response = data.response;
            if (response.status === 'OK') {
                if (typeof vLicenses !== 'undefined' && typeof response.license !== 'undefined' && response.license !== null) {
                    vLicenses[response.dir_name.replace('/', '')] = response.license;
                }
                let wasActiveVerfuegbar = $('#verfuegbar').hasClass('active'),
                    wasActiveFehlerhaft = $('#fehlerhaft').hasClass('active');
                $('#verfuegbar').replaceWith(response.html.available);
                $('#fehlerhaft').replaceWith(response.html.erroneous);
                $('#aktiviert').replaceWith(response.html.enabled);
                $('a[href="#fehlerhaft"]').find('.badge').html(response.html.erroneous_count);
                $('a[href="#verfuegbar"]').find('.badge').html(response.html.available_count);
                if (wasActiveFehlerhaft) {
                    $('#fehlerhaft').addClass('active show');
                } else if (wasActiveVerfuegbar) {
                    $('#verfuegbar').addClass('active show');
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
