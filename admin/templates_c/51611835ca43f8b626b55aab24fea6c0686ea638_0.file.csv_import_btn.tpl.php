<?php
/* Smarty version 4.5.4, created on 2025-02-05 13:24:24
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/csv_import_btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a35878f0e101_54006422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51611835ca43f8b626b55aab24fea6c0686ea638' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/csv_import_btn.tpl',
      1 => 1738748464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a35878f0e101_54006422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('bCustomStrategy', (($tmp = $_smarty_tpl->tpl_vars['bCustomStrategy']->value ?? null)===null||$tmp==='' ? true : $tmp));
$_smarty_tpl->_assignInScope('importerType', (($tmp = $_smarty_tpl->tpl_vars['importerType']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['importerId']->value : $tmp));
echo '<script'; ?>
>
    var $form_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
 = null;
    var $fileInput_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
 = null;

    $(function ()
    {
        var $importcsvInput = $('<input>', { type: 'hidden', name: 'importcsv', value: '<?php echo $_smarty_tpl->tpl_vars['importerType']->value;?>
' });
        var $tokenInput     = $('<?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>
');

        $fileInput_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
 = $('<input>', { type: 'file', name: 'csvfile', accept: '.csv,.slf' });
        $fileInput_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
.hide();
        $fileInput_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
.on('change', function () {
            <?php if ($_smarty_tpl->tpl_vars['bCustomStrategy']->value === true) {?>
                $('#modal-<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
').modal('show');
            <?php } else { ?>
                $form_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
.submit();
            <?php }?>
        });

        $form_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
 = $(
            '<form>',
            {
                method: 'post', enctype: 'multipart/form-data',
                action: window.location.pathname
            }
        );
        $form_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
.append($importcsvInput, $fileInput_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
, $tokenInput);

        $('body').append($form_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
);
    });

    function onClickCsvImport_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
 ()
    {
        $fileInput_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
.click();
    }

    <?php if ($_smarty_tpl->tpl_vars['bCustomStrategy']->value === true) {?>
        function onModalCancel_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
 ()
        {
            $('#modal-<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
').modal('hide');
        }

        function onModalSubmit_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
 ()
        {
            $('#modal-<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
').modal('hide');
            $form_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>

                .append($('#importType-<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
'))
                .submit();
        }
    <?php }?>

    $(window).on('load', function () {
        $('#modal-<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
').detach().appendTo("body");
    })
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['bCustomStrategy']->value === true) {?>
    <div class="modal" tabindex="-1" role="dialog" id="modal-<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"><?php echo __('importCsvChooseType');?>
</h2>
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fal fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="importType-<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
" class="sr-only"><?php echo __('importCsvChooseType');?>
</label>
                    <select class="custom-select" name="importType" id="importType-<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
">
                        <option value="0"><?php echo __('importCsvType0');?>
</option>
                        <option value="1"><?php echo __('importCsvType1');?>
</option>
                        <option value="2" selected><?php echo __('importCsvType2');?>
</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="ml-auto col-sm-6 col-xl-auto">
                            <button type="button" class="btn btn-outline-primary btn-block" onclick="onModalCancel_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
();">
                                <?php echo __('cancelWithIcon');?>

                            </button>
                        </div>
                        <div class="col-sm-6 col-xl-auto">
                            <button type="button" class="btn btn-primary btn-block" onclick="onModalSubmit_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
();">
                                <i class="fa fa-upload"></i> <?php echo __('importCsv');?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>
<button type="button" class="btn btn-outline-primary btn-block" onclick="onClickCsvImport_<?php echo $_smarty_tpl->tpl_vars['importerId']->value;?>
()">
    <i class="fal fa-upload"></i> <?php echo __('importCsv');?>

</button>
<?php }
}
