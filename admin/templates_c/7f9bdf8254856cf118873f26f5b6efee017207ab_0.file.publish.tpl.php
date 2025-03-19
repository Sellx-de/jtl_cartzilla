<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:10:05
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/publish.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3470d6dd1d4_66841959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f9bdf8254856cf118873f26f5b6efee017207ab' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/publish.tpl',
      1 => 1738748452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3470d6dd1d4_66841959 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" tabindex="-1" id="publishModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo __('draftPublic');?>
</h5>
                <button type="button" class="opc-header-btn" data-toggle="tooltip" data-dismiss="modal"
                        data-placement="bottom">
                    <i class="fa fas fa-times"></i>
                </button>
            </div>
            <form action="javascript:void(0);" onsubmit="opc.gui.publish()">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="draftName"><?php echo __('draftName');?>
</label>
                        <input type="text" class="form-control opc-control" id="draftName" name="draftName"
                               value="">
                    </div>
                    <div class="form-group">
                        <input type="radio" id="checkPublishNot" name="scheduleStrategy"
                               onchange="opc.gui.onChangePublishStrategy()">
                        <label for="checkPublishNot">
                            <?php echo __('publishNot');?>

                        </label>
                    </div>
                    <div class="form-group">
                        <input type="radio" id="checkPublishNow" name="scheduleStrategy"
                               onchange="opc.gui.onChangePublishStrategy()">
                        <label for="checkPublishNow">
                            <?php echo __('publishImmediately');?>

                        </label>
                    </div>
                    <div style="display:flex;">
                        <div class="form-group" style="width:50%">
                            <input type="radio" id="checkPublishSchedule" name="scheduleStrategy"
                                   onchange="opc.gui.onChangePublishStrategy()">
                            <label for="checkPublishSchedule">
                                <?php echo __('selectDate');?>

                            </label>
                        </div>
                        <div class="form-group" style="width:50%">
                            <input type="checkbox" id="checkPublishInfinite"
                                   onchange="opc.gui.onChangePublishInfinite()">
                            <label for="checkPublishInfinite">
                                <?php echo __('indefinitePeriodOfTime');?>

                            </label>
                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="form-group" style="width:50%;padding-right:16px">
                            <label for="publishFrom"><?php echo __('publicFrom');?>
</label>
                            <input type="text" class="form-control opc-control datetimepicker-input" id="publishFrom"
                                   name="publishFrom" data-toggle="datetimepicker" data-target="#publishFrom">
                        </div>
                        <div class="form-group" style="width:50%">
                            <label for="publishTo"><?php echo __('publicTill');?>
</label>
                            <input type="text" class="form-control opc-control datetimepicker-input" id="publishTo"
                                   name="publishTo" data-toggle="datetimepicker" data-target="#publishTo">
                        </div>
                    </div>
                    <div id="customerVisibilities">
                        <label><?php echo __('restrictedToCustomerGroups');?>
</label>
                        <div class="form-group">
                            <input type="checkbox" id="checkAllCustomerGroups"
                                   onchange="opc.gui.onChangeCheckAllCustomerGroups()">
                            <label for="checkAllCustomerGroups"><?php echo __('allCustomerGroups');?>
</label>
                        </div>
                        <div class="d-flex flex-wrap" style="column-gap: 16px;" id="customerGroups">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opc']->value->getCustomerGroups(), 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                <div class="form-group flex-fill">
                                    <input type="checkbox" id="customerGroup<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
"
                                           onchange="opc.gui.onChangeCheckCustomerGroup()">
                                    <label for="customerGroup<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value->name;?>
</label>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="opc-btn-secondary opc-small-btn" data-dismiss="modal"
                            id="btnCancelPublish">
                        <?php echo __('cancel');?>

                    </button>
                    <button type="submit" class="opc-btn-primary opc-small-btn" id="btnApplyPublish">
                        <?php echo __('apply');?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
