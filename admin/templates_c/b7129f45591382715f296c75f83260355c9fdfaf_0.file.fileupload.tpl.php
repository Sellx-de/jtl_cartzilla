<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:25:29
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/fileupload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33c99c09c49_94045802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7129f45591382715f296c75f83260355c9fdfaf' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/fileupload.tpl',
      1 => 1738748469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33c99c09c49_94045802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('fileIDFull', ('#').($_smarty_tpl->tpl_vars['fileID']->value));
ob_start();
if ((isset($_smarty_tpl->tpl_vars['fileShowUpload']->value)) && $_smarty_tpl->tpl_vars['fileShowUpload']->value === true) {
echo "true";
} else {
echo "false";
}
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('fileShowUpload', $_prefixVariable3);
ob_start();
if ((isset($_smarty_tpl->tpl_vars['fileShowRemove']->value)) && $_smarty_tpl->tpl_vars['fileShowRemove']->value === true) {
echo "true";
} else {
echo "false";
}
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('fileShowRemove', $_prefixVariable4);
ob_start();
if ((isset($_smarty_tpl->tpl_vars['fileShowCancel']->value)) && $_smarty_tpl->tpl_vars['fileShowCancel']->value === true) {
echo "true";
} else {
echo "false";
}
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_assignInScope('fileShowCancel', $_prefixVariable5);
ob_start();
if ((isset($_smarty_tpl->tpl_vars['fileShowClose']->value)) && $_smarty_tpl->tpl_vars['fileShowClose']->value === false) {
echo "false";
} else {
echo "true";
}
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_assignInScope('fileShowClose', $_prefixVariable6);
ob_start();
if ((isset($_smarty_tpl->tpl_vars['fileUploadAsync']->value)) && $_smarty_tpl->tpl_vars['fileUploadAsync']->value === true) {
echo "true";
} else {
echo "false";
}
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_assignInScope('fileUploadAsync', $_prefixVariable7);
ob_start();
if ((isset($_smarty_tpl->tpl_vars['fileOverwriteInitial']->value)) && $_smarty_tpl->tpl_vars['fileOverwriteInitial']->value === false) {
echo "false";
} else {
echo "true";
}
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->_assignInScope('fileOverwriteInitial', $_prefixVariable8);
ob_start();
if ((isset($_smarty_tpl->tpl_vars['filePreview']->value)) && $_smarty_tpl->tpl_vars['filePreview']->value === false) {
echo "false";
} else {
echo "true";
}
$_prefixVariable9=ob_get_clean();
$_smarty_tpl->_assignInScope('filePreview', $_prefixVariable9);
$_smarty_tpl->_assignInScope('fileIsSingle', (($tmp = $_smarty_tpl->tpl_vars['fileIsSingle']->value ?? null)===null||$tmp==='' ? true : $tmp));
$_smarty_tpl->_assignInScope('fileSuccessMsg', (($tmp = $_smarty_tpl->tpl_vars['fileSuccessMsg']->value ?? null)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('fileErrorMsg', (($tmp = $_smarty_tpl->tpl_vars['fileErrorMsg']->value ?? null)===null||$tmp==='' ? false : $tmp));
ob_start();
if ((isset($_smarty_tpl->tpl_vars['initialPreviewShowDelete']->value)) && $_smarty_tpl->tpl_vars['initialPreviewShowDelete']->value === true) {
echo "true";
} else {
echo "false";
}
$_prefixVariable10=ob_get_clean();
$_smarty_tpl->_assignInScope('initialPreviewShowDelete', $_prefixVariable10);?>
<input class="custom-file-input <?php echo (($tmp = $_smarty_tpl->tpl_vars['fileClass']->value ?? null)===null||$tmp==='' ? '' : $tmp);?>
"
       type="file"
       name="<?php if ((isset($_smarty_tpl->tpl_vars['fileName']->value))) {
echo $_smarty_tpl->tpl_vars['fileName']->value;
} else {
echo $_smarty_tpl->tpl_vars['fileID']->value;
}?>"
       id="<?php echo $_smarty_tpl->tpl_vars['fileID']->value;?>
"
       tabindex="1"
       <?php if ((($tmp = $_smarty_tpl->tpl_vars['fileRequired']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?>required<?php }?>
       <?php if (!$_smarty_tpl->tpl_vars['fileIsSingle']->value) {?>multiple<?php }?>/>

<?php if ($_smarty_tpl->tpl_vars['fileSuccessMsg']->value) {?>
    <div id="<?php echo $_smarty_tpl->tpl_vars['fileID']->value;?>
-upload-success" class="alert alert-success d-none mt-3">
        <?php echo $_smarty_tpl->tpl_vars['fileSuccessMsg']->value;?>

    </div>
<?php }
if ($_smarty_tpl->tpl_vars['fileErrorMsg']->value) {?>
    <div id="<?php echo $_smarty_tpl->tpl_vars['fileID']->value;?>
-upload-error" class="alert alert-danger d-none mt-3"><?php echo $_smarty_tpl->tpl_vars['fileErrorMsg']->value;?>
</div>
<?php }
echo '<script'; ?>
>
    (function () {
        let $file = $('<?php echo $_smarty_tpl->tpl_vars['fileIDFull']->value;?>
'),
            $fileSuccess = $('<?php echo $_smarty_tpl->tpl_vars['fileIDFull']->value;?>
-upload-success'),
            $fileError = $('<?php echo $_smarty_tpl->tpl_vars['fileIDFull']->value;?>
-upload-error');

        $file.fileinput({
            <?php if ((isset($_smarty_tpl->tpl_vars['fileUploadUrl']->value))) {?>
            uploadUrl: '<?php echo $_smarty_tpl->tpl_vars['fileUploadUrl']->value;?>
',
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['fileDeleteUrl']->value))) {?>
            deleteUrl: '<?php echo $_smarty_tpl->tpl_vars['fileDeleteUrl']->value;?>
',
            <?php }?>
            showClose: <?php echo $_smarty_tpl->tpl_vars['fileShowClose']->value;?>
,
            autoOrientImage: false,
            showUpload: <?php echo $_smarty_tpl->tpl_vars['fileShowUpload']->value;?>
,
            showRemove: <?php echo $_smarty_tpl->tpl_vars['fileShowRemove']->value;?>
,
            showCancel: <?php echo $_smarty_tpl->tpl_vars['fileShowCancel']->value;?>
,
            cancelClass: 'btn btn-outline-primary',
            uploadClass: 'btn btn-outline-primary',
            removeClass: 'btn btn-outline-primary',
            uploadAsync: <?php echo $_smarty_tpl->tpl_vars['fileUploadAsync']->value;?>
,
            showPreview: <?php echo $_smarty_tpl->tpl_vars['filePreview']->value;?>
,
            initialPreviewShowDelete: <?php echo $_smarty_tpl->tpl_vars['initialPreviewShowDelete']->value;?>
,
            fileActionSettings: {
                showZoom: false,
                showRemove: false,
                showDrag: false,
                showRotate: false,
            },
            uploadExtraData:
            <?php if ((isset($_smarty_tpl->tpl_vars['fileExtraData']->value))) {?>
                <?php echo $_smarty_tpl->tpl_vars['fileExtraData']->value;?>

            <?php } else { ?>
                { jtl_token: '<?php echo $_SESSION['jtl_token'];?>
' }
            <?php }?>,
            allowedFileExtensions:
            <?php if (empty($_smarty_tpl->tpl_vars['fileAllowedExtensions']->value)) {?>
                ['jpg', 'jpeg', 'jpe', 'gif', 'png', 'bmp', 'svg', 'webp']
            <?php } elseif (is_array($_smarty_tpl->tpl_vars['fileAllowedExtensions']->value)) {?>
                ["<?php echo implode('","',$_smarty_tpl->tpl_vars['fileAllowedExtensions']->value);?>
"]
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fileAllowedExtensions']->value;?>

            <?php }?>,
            overwriteInitial: <?php echo $_smarty_tpl->tpl_vars['fileOverwriteInitial']->value;?>
,
            <?php if ($_smarty_tpl->tpl_vars['fileIsSingle']->value) {?>
            initialPreviewCount: 1,
            <?php }?>
            theme: 'fas',
            language: '<?php echo mb_substr($_smarty_tpl->tpl_vars['language']->value,0,2);?>
',
            browseOnZoneClick: true,
            <?php if (!(isset($_smarty_tpl->tpl_vars['fileMaxSize']->value)) || $_smarty_tpl->tpl_vars['fileMaxSize']->value) {?>
            maxFileSize: <?php echo (($tmp = $_smarty_tpl->tpl_vars['fileMaxSize']->value ?? null)===null||$tmp==='' ? 6000 : $tmp);?>
,
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['fileIsSingle']->value) {?>
            maxFilesNum: 1,
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['filePreview']->value !== 'false') {?>
            initialPreviewConfig: <?php if ((isset($_smarty_tpl->tpl_vars['fileInitialPreviewConfig']->value))) {
echo $_smarty_tpl->tpl_vars['fileInitialPreviewConfig']->value;
} else { ?>[]<?php }?>,
            initialPreview: <?php if ((isset($_smarty_tpl->tpl_vars['fileInitialPreview']->value))) {
echo $_smarty_tpl->tpl_vars['fileInitialPreview']->value;
} else { ?>[]<?php }?>,
            <?php }?>
            showConsoleLogs: false,
        });

        <?php if ((($tmp = $_smarty_tpl->tpl_vars['fileDefaultBrowseEvent']->value ?? null)===null||$tmp==='' ? true : $tmp)) {?>
        $file.on("filebrowse", function (event, files) {
            <?php if ((($tmp = $_smarty_tpl->tpl_vars['fileBrowseClear']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?>
                $file.fileinput('clear');
            <?php }?>
            $fileSuccess.addClass('d-none');
            $fileError.addClass('d-none');
        });
        <?php }?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['fileDefaultBatchSelectedEvent']->value ?? null)===null||$tmp==='' ? true : $tmp)) {?>
        $file.on("filebatchselected", function (event, files) {
            if ($file.fileinput('getFilesCount') > 0) {
                $file.fileinput("upload");
            }
        });
        <?php }?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['fileDefaultUploadSuccessEvent']->value ?? null)===null||$tmp==='' ? true : $tmp)) {?>
        $file.on('filebatchuploadsuccess', function (event, data) {
            if (data.response.status === 'OK') {
                $fileSuccess.removeClass('d-none');
            } else {
                $fileError.removeClass('d-none');
            }
        });
        <?php }?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['fileDefaultUploadErrorEvent']->value ?? null)===null||$tmp==='' ? true : $tmp)) {?>
        $file.on('fileuploaderror, fileerror', function (event, data, msg) {
            $fileError.removeClass('d-none');
            $fileError.append('<p style="margin-top:20px">' + msg + '</p>')
        });
        <?php }?>
        $file.on('fileuploaded', function(event, data) {
            let response = data.response;
            if (response.status === 'OK') {
                <?php if ($_smarty_tpl->tpl_vars['fileSuccessMsg']->value) {?>
                    $fileSuccess.removeClass('d-none');
                <?php }?>
            } else {
                if (typeof response.errorMessage !== 'undefined' && response.errorMessage.length > 0) {
                    $fileError.html('<p style="margin-top:20px">' + response.errorMessage + '</p>')
                }
                $fileError.removeClass('d-none');
            }
        });
    }());
<?php echo '</script'; ?>
>
<?php }
}
