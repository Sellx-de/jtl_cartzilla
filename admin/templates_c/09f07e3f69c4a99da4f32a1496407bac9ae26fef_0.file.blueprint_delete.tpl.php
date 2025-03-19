<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:10:05
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/blueprint_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3470d723cb5_42004073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09f07e3f69c4a99da4f32a1496407bac9ae26fef' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/blueprint_delete.tpl',
      1 => 1738748452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3470d723cb5_42004073 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="blueprintDeleteModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo __('Delete Blueprint?');?>
</h5>
            </div>
            <div class="modal-body">
                <p>"<span id="blueprintDeleteTitle">FOO</span>"</p>
                <p><?php echo __('templateDeleteSure');?>
</p>
            </div>
            <form action="javascript:void(0);" onsubmit="opc.gui.deleteBlueprint()">
                <div class="modal-footer">
                    <input type="hidden" id="blueprintDeleteId" name="id" value="">
                    <button type="button" class="opc-btn-secondary opc-small-btn" data-dismiss="modal">
                        <?php echo __('cancel');?>

                    </button>
                    <button type="submit" class="opc-btn-primary opc-small-btn">
                        <?php echo __('delete');?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }
}
