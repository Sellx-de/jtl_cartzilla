<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:36:01
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/filtertools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab28112cca11_02949064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd17b7e7c72677e0960b24ae0e794c684e1ed4fe6' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/filtertools.tpl',
      1 => 1738748469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/daterange_picker.tpl' => 1,
  ),
),false)) {
function content_67ab28112cca11_02949064 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['cParam_arr']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('cParam_arr', array());
}?>

<div class="toolbar">
    <form method="get">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cParam_arr']->value, 'cParamValue', false, 'cParamName');
$_smarty_tpl->tpl_vars['cParamValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cParamName']->value => $_smarty_tpl->tpl_vars['cParamValue']->value) {
$_smarty_tpl->tpl_vars['cParamValue']->do_else = false;
?>
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['cParamName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cParamValue']->value;?>
">
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div class="form-row align-items-end">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oFilter']->value->getFields(), 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value->getType() === 'text') {?>
                    <?php if ($_smarty_tpl->tpl_vars['field']->value->isCustomTestOp()) {?>
                        <div class="col-md-6 col-lg-3 col-xl-2">
                            <div class="form-group">
                                <label for="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['field']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value->getTitle();?>
:</label>
                                <select class="custom-select"
                                        name="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['field']->value->getId();?>
_op"
                                        id="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['field']->value->getId();?>
_op">
                                    <?php if ($_smarty_tpl->tpl_vars['field']->value->getDataType() == 0) {?>
                                        <option value="1"<?php if ($_smarty_tpl->tpl_vars['field']->value->getTestOp() == 1) {?> selected<?php }?>><?php echo __('contains');?>
</option>
                                        <option value="2"<?php if ($_smarty_tpl->tpl_vars['field']->value->getTestOp() == 2) {?> selected<?php }?>><?php echo __('startsWith');?>
</option>
                                        <option value="3"<?php if ($_smarty_tpl->tpl_vars['field']->value->getTestOp() == 3) {?> selected<?php }?>><?php echo __('endsWith');?>
</option>
                                        <option value="4"<?php if ($_smarty_tpl->tpl_vars['field']->value->getTestOp() == 4) {?> selected<?php }?>><?php echo __('isEqual');?>
</option>
                                        <option value="9"<?php if ($_smarty_tpl->tpl_vars['field']->value->getTestOp() == 9) {?> selected<?php }?>><?php echo __('isNotEqual');?>
</option>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->getDataType() == 1) {?>
                                        <option value="4"<?php if ($_smarty_tpl->tpl_vars['field']->value->getTestOp() == 4) {?> selected<?php }?>>=</option>
                                        <option value="9"<?php if ($_smarty_tpl->tpl_vars['field']->value->getTestOp() == 9) {?> selected<?php }?>>!=</option>
                                        <option value="5"<?php if ($_smarty_tpl->tpl_vars['field']->value->getTestOp() == 5) {?> selected<?php }?>>&lt;</option>
                                        <option value="6"<?php if ($_smarty_tpl->tpl_vars['field']->value->getTestOp() == 6) {?> selected<?php }?>>&gt;</option>
                                        <option value="7"<?php if ($_smarty_tpl->tpl_vars['field']->value->getTestOp() == 7) {?> selected<?php }?>>&lt;=</option>
                                        <option value="8"<?php if ($_smarty_tpl->tpl_vars['field']->value->getTestOp() == 8) {?> selected<?php }?>>&gt;=</option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-2">
                            <div class="form-group">
                    <?php } else { ?>
                        <div class="col-md-6 col-lg-3 col-xl-2">
                            <div class="form-group">
                                <label for="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['field']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value->getTitle();?>
:</label>
                    <?php }?>
                                <input type="<?php if ($_smarty_tpl->tpl_vars['field']->value->getDataType() == 1) {?>number<?php } else { ?>text<?php }?>"
                                       class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['field']->value->getId();?>
"
                                       id="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['field']->value->getId();?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['field']->value->getValue();?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value->getTitle();?>
"
                                       <?php if ($_smarty_tpl->tpl_vars['field']->value->getTitleLong() !== '') {?>data-toggle="tooltip"
                                       data-placement="bottom" title="<?php echo $_smarty_tpl->tpl_vars['field']->value->getTitleLong();?>
"<?php }?>>
                            </div>
                        </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->getType() === 'select') {?>
                    <div class="col-md-6 col-lg-3 col-xl-2">
                        <div class="form-group">
                            <label for="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['field']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value->getTitle();?>
:</label>
                            <select class="custom-select"
                                    name="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['field']->value->getId();?>
"
                                    id="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['field']->value->getId();?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['field']->value->getTitleLong() !== '') {?>data-toggle="tooltip"
                                    data-placement="bottom" title="<?php echo $_smarty_tpl->tpl_vars['field']->value->getTitleLong();?>
"<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['field']->value->reloadOnChange) {?>onchange="$('#<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_btn_filter').click()"<?php }?>>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value->getOptions(), 'oOption', false, 'i');
$_smarty_tpl->tpl_vars['oOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['oOption']->value) {
$_smarty_tpl->tpl_vars['oOption']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value == (int)$_smarty_tpl->tpl_vars['field']->value->getValue()) {?> selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['oOption']->value->getTitle();?>

                                    </option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->getType() === 'daterange') {?>
                    <div class="col-md-6 col-lg-3 col-xl-2">
                        <div class="form-group">
                            <label for="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['field']->value->getId();?>
"><?php echo __($_smarty_tpl->tpl_vars['field']->value->getTitle());?>
:</label>
                            <input type="text"  class="form-control"
                                   name="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['field']->value->getId();?>
"
                                   id="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['field']->value->getId();?>
">
                            <?php ob_start();
echo __('datepickerSeparator');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:snippets/daterange_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('datepickerID'=>"#".((string)$_smarty_tpl->tpl_vars['oFilter']->value->getId())."_".((string)$_smarty_tpl->tpl_vars['field']->value->getId()),'currentDate'=>((string)$_smarty_tpl->tpl_vars['field']->value->getValue()),'format'=>"DD.MM.YYYY",'separator'=>$_prefixVariable1), 0, true);
?>
                        </div>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="col-md-auto">
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary btn-block" name="action" value="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_filter"
                            title="<?php echo __('useFilter');?>
" id="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_btn_filter">
                        <i class="fal fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_resetfilter"
                            title="<?php echo __('resetFilter');?>
" id="<?php echo $_smarty_tpl->tpl_vars['oFilter']->value->getId();?>
_btn_resetfilter">
                        <i class="fa fa-eraser"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php }
}
