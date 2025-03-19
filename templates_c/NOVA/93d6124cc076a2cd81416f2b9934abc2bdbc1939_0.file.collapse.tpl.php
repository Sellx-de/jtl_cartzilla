<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/jtlshop/scc/src/scc/templates/collapse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab3166254e99_29434310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93d6124cc076a2cd81416f2b9934abc2bdbc1939' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/jtlshop/scc/src/scc/templates/collapse.tpl',
      1 => 1739260987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab3166254e99_29434310 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['params']->value['clip-text']->hasValue()) {?>
    <<?php echo $_smarty_tpl->tpl_vars['params']->value['tag']->getValue();?>
 id="clip-text-<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
">
    <?php echo $_smarty_tpl->tpl_vars['params']->value['clip-text']->getValue();?>

    </<?php echo $_smarty_tpl->tpl_vars['params']->value['tag']->getValue();?>
>
<?php }?>
<<?php echo $_smarty_tpl->tpl_vars['params']->value['tag']->getValue();?>

class="collapse <?php if ($_smarty_tpl->tpl_vars['params']->value['is-nav']->getValue() === true) {?> navbar-collapse<?php }
if ($_smarty_tpl->tpl_vars['params']->value['button-label-show']->hasValue() && $_smarty_tpl->tpl_vars['params']->value['button-label-hide']->hasValue()) {?> collapse-with-button<?php }
if ($_smarty_tpl->tpl_vars['params']->value['clip-text']->hasValue()) {?> collapse-with-clip<?php }
echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();
if ($_smarty_tpl->tpl_vars['params']->value['visible']->getValue() === true) {?> show<?php }?>"
<?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?>id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }
if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue()) {?>style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style']->getValue();?>
"<?php }
if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }
if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }
if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }
if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }
if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {?>role="<?php echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();?>
"<?php }
if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?> title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
"<?php }
if ($_smarty_tpl->tpl_vars['params']->value['aria']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['aria']->getValue(), 'ariaVal', false, 'ariaKey');
$_smarty_tpl->tpl_vars['ariaVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ariaKey']->value => $_smarty_tpl->tpl_vars['ariaVal']->value) {
$_smarty_tpl->tpl_vars['ariaVal']->do_else = false;
?>aria-<?php echo $_smarty_tpl->tpl_vars['ariaKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['ariaVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }
if ($_smarty_tpl->tpl_vars['params']->value['data']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['data']->getValue(), 'dataVal', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataVal']->value) {
$_smarty_tpl->tpl_vars['dataVal']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }
if ($_smarty_tpl->tpl_vars['params']->value['attribs']->hasValue()) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['attribs']->getValue(), 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
>
<?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

</<?php echo $_smarty_tpl->tpl_vars['params']->value['tag']->getValue();?>
>
<?php if ($_smarty_tpl->tpl_vars['params']->value['button-label-show']->hasValue() && $_smarty_tpl->tpl_vars['params']->value['button-label-hide']->hasValue()) {?>
    <a class="<?php echo $_smarty_tpl->tpl_vars['params']->value['button-label-class']->getValue();?>
" data-toggle="collapse" href="#<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"
       role="button" aria-expanded="<?php if ($_smarty_tpl->tpl_vars['params']->value['visible']->getValue() === true) {?>true<?php } else { ?>false<?php }?>" aria-controls="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"
       data-label-show="<?php echo $_smarty_tpl->tpl_vars['params']->value['button-label-show']->getValue();?>
"
       data-label-hide="<?php echo $_smarty_tpl->tpl_vars['params']->value['button-label-hide']->getValue();?>
">
        <?php if ($_smarty_tpl->tpl_vars['params']->value['visible']->getValue() === true) {?>
            <?php echo $_smarty_tpl->tpl_vars['params']->value['button-label-hide']->getValue();?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['params']->value['button-label-show']->getValue();?>

        <?php }?>
    </a>
<?php }
}
}
