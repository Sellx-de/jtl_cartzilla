<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:39:38
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/option_select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33feaeb3245_87054882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89a682f6f4c31cf5bec92ff533711bad15ee50f9' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/option_select.tpl',
      1 => 1738748474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33feaeb3245_87054882 (Smarty_Internal_Template $_smarty_tpl) {
?><select class="custom-select" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
" id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setting']->value->options, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->value;?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value->value == $_smarty_tpl->tpl_vars['setting']->value->value) {?>selected="selected"<?php }?>><?php echo __($_smarty_tpl->tpl_vars['option']->value->name);?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<?php }
}
