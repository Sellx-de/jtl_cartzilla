<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/jtlshop/scc/src/scc/templates/input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31662f8432_28104078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a55a41afe12817be610f431362f9d74c4770170' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/jtlshop/scc/src/scc/templates/input.tpl',
      1 => 1739260987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab31662f8432_28104078 (Smarty_Internal_Template $_smarty_tpl) {
?><input
    type="<?php echo $_smarty_tpl->tpl_vars['params']->value['type']->getValue();?>
"
    class="form-control <?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();
if ($_smarty_tpl->tpl_vars['params']->value['size-class']->hasValue()) {?> form-control-<?php echo $_smarty_tpl->tpl_vars['params']->value['size-class']->getValue();
}?>"
    <?php if ($_smarty_tpl->tpl_vars['params']->value['placeholder']->hasValue()) {?>placeholder="<?php echo $_smarty_tpl->tpl_vars['params']->value['placeholder']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['readonly']->getValue() === true) {?> readonly<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?> id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['required']->getValue() === true) {?> required<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['disabled']->getValue() === true) {?> disabled<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue()) {?>style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['value']->hasValue()) {?>value="<?php echo $_smarty_tpl->tpl_vars['params']->value['value']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['min']->hasValue()) {?>min="<?php echo $_smarty_tpl->tpl_vars['params']->value['min']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['max']->hasValue() && !empty($_smarty_tpl->tpl_vars['params']->value['max']->getValue())) {?>max="<?php echo $_smarty_tpl->tpl_vars['params']->value['max']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['size']->hasValue()) {?>size="<?php echo $_smarty_tpl->tpl_vars['params']->value['size']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['maxlength']->hasValue()) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['params']->value['maxlength']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['step']->hasValue()) {?>step="<?php echo $_smarty_tpl->tpl_vars['params']->value['step']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['name']->hasValue()) {?>name="<?php echo $_smarty_tpl->tpl_vars['params']->value['name']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['autocomplete']->hasValue() && !empty($_smarty_tpl->tpl_vars['params']->value['autocomplete']->getValue())) {?>autocomplete="<?php echo $_smarty_tpl->tpl_vars['params']->value['autocomplete']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {?>role="<?php echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?> title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['aria']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['aria']->getValue(), 'ariaVal', false, 'ariaKey');
$_smarty_tpl->tpl_vars['ariaVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ariaKey']->value => $_smarty_tpl->tpl_vars['ariaVal']->value) {
$_smarty_tpl->tpl_vars['ariaVal']->do_else = false;
?>aria-<?php echo $_smarty_tpl->tpl_vars['ariaKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['ariaVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['data']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['data']->getValue(), 'dataVal', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataVal']->value) {
$_smarty_tpl->tpl_vars['dataVal']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['attribs']->hasValue()) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['attribs']->getValue(), 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
>
<?php }
}
