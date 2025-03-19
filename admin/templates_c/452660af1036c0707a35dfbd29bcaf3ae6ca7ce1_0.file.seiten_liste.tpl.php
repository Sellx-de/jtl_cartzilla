<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:32:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/seiten_liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34c4e5a4bf3_12311138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '452660af1036c0707a35dfbd29bcaf3ae6ca7ce1' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/seiten_liste.tpl',
      1 => 1738748469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a34c4e5a4bf3_12311138 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['validPageTypes']->value, 'validPagetype');
$_smarty_tpl->tpl_vars['validPagetype']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['validPagetype']->value) {
$_smarty_tpl->tpl_vars['validPagetype']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['validPagetype']->value['pageID'];?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['validPagetype']->value['pageID'];
$_prefixVariable9 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['nPage']->value == $_prefixVariable9) {?>selected="selected"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['validPagetype']->value['pageID'] === 0) {?>
            <?php echo __('allPages');?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['validPagetype']->value['pageName'];?>

        <?php }?>
    </option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
