<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:10:05
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3470d6facd4_37046806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be0369022920499a438d9ba2f721083feece3653' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/error.tpl',
      1 => 1738748452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3470d6facd4_37046806 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="errorModal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorTitle"><?php echo __('error');?>
</h5>
                <button type="button" class="opc-header-btn d-none" data-dismiss="modal" aria-label="Close">
                    <i class="fa fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="errorAlert">
                    <?php echo __('somethingHappend');?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
