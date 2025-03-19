<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:29:00
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/links_action_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34b7c7cbef5_56856830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a99607f8b3216fc39098e9115666eef16b3e9fa' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/links_action_modal.tpl',
      1 => 1738748467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a34b7c7cbef5_56856830 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="areYouSureModal" class="modal fade" role="dialog" data-form-id="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><?php echo __('wantToConfirm');?>
</h2>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto">
                        <button type="button" class="btn btn-primary yes" data-dismiss="modal">
                            <?php echo __('yes');?>

                        </button>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <button type="button" class="btn btn-danger" name="cancel" data-dismiss="modal">
                            <?php echo __('no');?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    $("#areYouSureModal button.yes").on('click', function () {
        let formID = $("#areYouSureModal").attr("data-form-id");
        $("form[name='" + formID + "']").submit();
    });
<?php echo '</script'; ?>
>
<?php }
}
