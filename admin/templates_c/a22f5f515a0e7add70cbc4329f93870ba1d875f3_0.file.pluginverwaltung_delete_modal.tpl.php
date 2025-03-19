<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:25:43
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_delete_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33ca76ff877_79978890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a22f5f515a0e7add70cbc4329f93870ba1d875f3' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_delete_modal.tpl',
      1 => 1738748464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33ca76ff877_79978890 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="uninstall-<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
-modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><?php echo __('deletePluginFilesHeading');?>
</h2>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto submit">
                        <button type="button" class="delete-plugindata-yes btn btn-danger btn-bock">
                            <i class="fa fa-close"></i>&nbsp;<?php echo __('deletePluginDataYes');?>

                        </button>
                    </div>
                    <div class="col-sm-6 col-xl-auto submit">
                        <button type="button" class="btn btn-primary" name="cancel" data-dismiss="modal">
                            <?php echo __('cancelWithIcon');?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    $(document).ready(function () {
        let disModal = $('#uninstall-<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
-modal');
        $('<?php echo $_smarty_tpl->tpl_vars['button']->value;?>
').on('click', function () {
            disModal.modal('show');
            return false;
        });
        $('#uninstall-<?php echo $_smarty_tpl->tpl_vars['context']->value;?>
-modal .delete-plugindata-yes').on('click', function () {
            disModal.modal('hide');
            uninstall();
        });

        function uninstall() {
            let data = $('<?php echo $_smarty_tpl->tpl_vars['selector']->value;?>
').serialize();
            data += '&uninstall=1&delete-data=1&delete-files=1&delete=1';
            $('<?php echo $_smarty_tpl->tpl_vars['selector']->value;?>
 input[type=checkbox]:checked').each(function (i, ele) {
                const name = $(ele).attr('value');
                data += '&ext[' + name + ']=' + $('#plugin-ext-' + name).val();
            });
            simpleAjaxCall('<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
', data, function () {
                location.reload();
            });
            return false;
        }
    });
<?php echo '</script'; ?>
>
<?php }
}
