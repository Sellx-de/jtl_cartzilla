<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:32:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/searchpicker_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34c4e58e481_78190040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97eb88955fd6cd2ff3ac40bb4bef0cb965852737' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/searchpicker_modal.tpl',
      1 => 1738748464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a34c4e58e481_78190040 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['searchPickerName']->value;?>
-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['modalTitle']->value;?>
</h2>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <label for="<?php echo $_smarty_tpl->tpl_vars['searchPickerName']->value;?>
-search-input" class="sr-only">
                        <?php echo $_smarty_tpl->tpl_vars['searchInputLabel']->value;?>
:
                    </label>
                    <input type="text" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['searchPickerName']->value;?>
-search-input" placeholder="<?php echo __('search');?>
"
                           autocomplete="off">
                    <span class="input-group-append">
                        <button type="button" class="btn btn-default" id="<?php echo $_smarty_tpl->tpl_vars['searchPickerName']->value;?>
-reset-btn"
                                title="<?php echo __('deleteInput');?>
">
                            <i class="fa fa-eraser"></i>
                        </button>
                    </span>
                </div>
                <p id="<?php echo $_smarty_tpl->tpl_vars['searchPickerName']->value;?>
-list-title"></p>
                <div class="list-group" id="<?php echo $_smarty_tpl->tpl_vars['searchPickerName']->value;?>
-result-list" style="max-height:500px;overflow:auto;">
                </div>
                <div id="<?php echo $_smarty_tpl->tpl_vars['searchPickerName']->value;?>
-list-footer"></div>
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-link" id="<?php echo $_smarty_tpl->tpl_vars['searchPickerName']->value;?>
-select-all-btn">
                        <i class="fal fa-check-square"></i>
                        <?php echo __('selectAllShown');?>

                    </button>
                    <button type="button" class="btn btn-sm btn-link" id="<?php echo $_smarty_tpl->tpl_vars['searchPickerName']->value;?>
-unselect-all-btn">
                        <i class="fa fa-square"></i>
                        <?php echo __('unselectAllShown');?>

                    </button>
                </div>
            </div>
            <div class="modal-footer text-right">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto mb-2">
                        <button type="button" class="btn btn-outline-primary btn-block" data-dismiss="modal" id="<?php echo $_smarty_tpl->tpl_vars['searchPickerName']->value;?>
-cancel-btn">
                            <?php echo __('cancelWithIcon');?>

                        </button>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal" id="<?php echo $_smarty_tpl->tpl_vars['searchPickerName']->value;?>
-apply-btn">
                            <i class="fa fa-save"></i>
                            <?php echo __('apply');?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden" data-name="foundEntries"><?php echo __('foundEntries');?>
</div>
    <div class="hidden" data-name="noEntriesSelected"><?php echo __('noEntriesSelected');?>
</div>
    <div class="hidden" data-name="allSelectedEntries"><?php echo __('allSelectedEntries');?>
</div>
    <div class="hidden" data-name="searchPending"><?php echo __('searchPending');?>
</div>
</div><?php }
}
