<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/jtlshop/scc/src/scc/templates/dropdownitem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31662c8ac5_43569945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32567a88171f1687c4ebd757efab84ca0c704204' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/jtlshop/scc/src/scc/templates/dropdownitem.tpl',
      1 => 1739260988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab31662c8ac5_43569945 (Smarty_Internal_Template $_smarty_tpl) {
?><<?php echo $_smarty_tpl->tpl_vars['params']->value['tag']->getValue();?>

    <?php if ($_smarty_tpl->tpl_vars['params']->value['href']->hasValue()) {?>
        target="<?php echo $_smarty_tpl->tpl_vars['params']->value['target']->getValue();?>
"
        href="<?php echo $_smarty_tpl->tpl_vars['params']->value['href']->getValue();?>
"
    <?php }?>
class="dropdown-item <?php echo $_smarty_tpl->tpl_vars['params']->value['class'];
if ($_smarty_tpl->tpl_vars['params']->value['active']->getValue() === true) {?> active<?php }
if ($_smarty_tpl->tpl_vars['params']->value['disabled']->getValue() === true) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['params']->value['variant']->hasValue()) {?> list-group-item-<?php echo $_smarty_tpl->tpl_vars['params']->value['variant']->getValue();
}?>"
    <?php if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue()) {?> style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?> id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['disabled']->getValue() === true) {?> aria-disabled="true"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['rel']->hasValue()) {?>rel="<?php echo $_smarty_tpl->tpl_vars['params']->value['rel']->getValue();?>
" <?php }?>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['data']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['data']->getValue(), 'dataVal', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataVal']->value) {
$_smarty_tpl->tpl_vars['dataVal']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
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
<?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

</<?php echo $_smarty_tpl->tpl_vars['params']->value['tag']->getValue();?>
>
<?php }
}
