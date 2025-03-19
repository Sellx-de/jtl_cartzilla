<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:10:05
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/restore_unsaved.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3470d740cd8_56600285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bf46ab513eb3a324a9937907852fe56f655aaa2' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/restore_unsaved.tpl',
      1 => 1738748453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3470d740cd8_56600285 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" tabindex="-1" id="restoreUnsavedModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo __('restoreChanges');?>
</h5>
            </div>
            <div class="modal-body">
                <div class="alert alert-info" id="errorAlert">
                    <?php echo __('restoreUnsaved');?>

                </div>
            </div>
            <form action="javascript:void(0);" onsubmit="opc.gui.restoreUnsaved()">
                <div class="modal-footer">
                    <button type="button" class="opc-btn-secondary opc-small-btn" data-dismiss="modal"
                            onclick="opc.gui.noRestoreUnsaved()">
                        <?php echo __('noCurrent');?>

                    </button>
                    <button type="submit" class="opc-btn-primary opc-small-btn">
                        <?php echo __('yesRestore');?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }
}
