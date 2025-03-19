<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:10:05
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/blueprint.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3470d716d03_20584393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '708ab10f089971152b6dbbc84cd94a5ca7c9ec86' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/blueprint.tpl',
      1 => 1738748452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3470d716d03_20584393 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="blueprintModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo __('Save this Portlet as a blueprint');?>
</h5>
            </div>
            <form action="javascript:void(0);" onsubmit="opc.gui.createBlueprint()">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="blueprintName"><?php echo __('Blueprint name');?>
</label>
                        <input type="text" class="form-control" id="blueprintName" name="blueprintName"
                               value="Neue Vorlage">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="opc-btn-secondary opc-small-btn" data-dismiss="modal">
                        <?php echo __('cancel');?>

                    </button>
                    <button type="submit" class="opc-btn-primary opc-small-btn" id="btnBlueprintSave">
                        <?php echo __('Save');?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
