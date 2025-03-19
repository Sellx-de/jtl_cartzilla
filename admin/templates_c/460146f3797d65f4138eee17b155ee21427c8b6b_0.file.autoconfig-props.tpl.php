<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:46:22
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/autoconfig-props.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34f8e509001_12255174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '460146f3797d65f4138eee17b155ee21427c8b6b' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/autoconfig-props.tpl',
      1 => 1738748451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./autoconfig-props.tpl' => 3,
  ),
),false)) {
function content_67a34f8e509001_12255174 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['props']->value, 'propdesc', false, 'propname');
$_smarty_tpl->tpl_vars['propdesc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['propname']->value => $_smarty_tpl->tpl_vars['propdesc']->value) {
$_smarty_tpl->tpl_vars['propdesc']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('type', (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['type'] ?? null)===null||$tmp==='' ? 'text' : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('required', (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['required'] ?? null)===null||$tmp==='' ? false : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('width', round(((($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['width'] ?? null)===null||$tmp==='' ? 100 : $tmp))*12/100));?>
    <?php $_smarty_tpl->_assignInScope('rowWidthAccu', $_smarty_tpl->tpl_vars['rowWidthAccu']->value+$_smarty_tpl->tpl_vars['width']->value);?>

    <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['order'])) {?>
        <?php $_smarty_tpl->_assignInScope('order', "order-".((string)$_smarty_tpl->tpl_vars['propdesc']->value['order']));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('order', '');?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['instance']->value->hasProperty($_smarty_tpl->tpl_vars['propname']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('propval', $_smarty_tpl->tpl_vars['instance']->value->getProperty($_smarty_tpl->tpl_vars['propname']->value));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('propval', (($tmp = $_smarty_tpl->tpl_vars['propDesc']->value['default'] ?? null)===null||$tmp==='' ? null : $tmp));?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('constraintClasses', '');?>

    <?php if ((isset($_smarty_tpl->tpl_vars['propdesc']->value['constraintProp']))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propdesc']->value['constraintValues'], 'constraintValue');
$_smarty_tpl->tpl_vars['constraintValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['constraintValue']->value) {
$_smarty_tpl->tpl_vars['constraintValue']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('constraintClasses', ((string)$_smarty_tpl->tpl_vars['constraintClasses']->value)." constraint-".((string)$_smarty_tpl->tpl_vars['propdesc']->value['constraintProp']));?>
            <?php $_smarty_tpl->_assignInScope('constraintClasses', ((string)$_smarty_tpl->tpl_vars['constraintClasses']->value)." constraint-".((string)$_smarty_tpl->tpl_vars['propdesc']->value['constraintProp'])."-".((string)$_smarty_tpl->tpl_vars['constraintValue']->value));?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>

    <div class="col-<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['constraintClasses']->value;?>
">
        <?php if ($_smarty_tpl->tpl_vars['type']->value === 'text' || $_smarty_tpl->tpl_vars['type']->value === 'email' || $_smarty_tpl->tpl_vars['type']->value === 'password' || $_smarty_tpl->tpl_vars['type']->value === 'number' || $_smarty_tpl->tpl_vars['type']->value === 'date' || $_smarty_tpl->tpl_vars['type']->value === 'time' || $_smarty_tpl->tpl_vars['type']->value === 'password') {?>
            <div class="form-group">
                <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
                        <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
                            data-toggle="tooltip" title="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['desc'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
"
                            data-placement="auto"
                        <?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
                        <i class="fas fa-info-circle fa-fw"></i>
                    <?php }?>
                </label>
                <input type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="form-control" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
                       value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['propval']->value ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
"
                       data-input-type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"
                       <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['placeholder'])) {?>
                           placeholder="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['placeholder'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
"<?php }?>
                       <?php if ($_smarty_tpl->tpl_vars['required']->value === true) {?>required<?php }?>>
                <?php if ((isset($_smarty_tpl->tpl_vars['propdesc']->value['help']))) {?>
                    <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['propdesc']->value['help'];?>
</span>
                <?php }?>
            </div>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['opc']->value->getInputTypeTplPath($_smarty_tpl->tpl_vars['type']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['rowWidthAccu']->value >= 12) {?>
        <?php $_smarty_tpl->_assignInScope('rowWidthAccu', 0);?>

        </div><div class="row">
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['propdesc']->value['children']))) {?>
        <div id="children-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" class="col-12 collapse">
            <div class="row">
                <?php $_smarty_tpl->_subTemplateRender('file:./autoconfig-props.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('props'=>$_smarty_tpl->tpl_vars['propdesc']->value['children'],'rowWidthAccu'=>0), 0, true);
?>
            </div>
        </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['propdesc']->value['childrenFor']))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propdesc']->value['childrenFor'], 'childProps', false, 'option');
$_smarty_tpl->tpl_vars['childProps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value => $_smarty_tpl->tpl_vars['childProps']->value) {
$_smarty_tpl->tpl_vars['childProps']->do_else = false;
?>
            <div id="childrenFor-<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
                 class="col-12 collapse childrenFor-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">
                <div class="row">
                    <?php $_smarty_tpl->_subTemplateRender('file:./autoconfig-props.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('props'=>$_smarty_tpl->tpl_vars['childProps']->value,'rowWidthAccu'=>0), 0, true);
?>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
