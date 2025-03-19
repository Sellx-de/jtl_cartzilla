<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:11:59
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/alert_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3396f10e9a3_67303693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40e021a38433e86c6390ff6c00ec4dea52337efa' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/alert_list.tpl',
      1 => 1738748453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3396f10e9a3_67303693 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['alertList']->value->getAlertlist())) {?>
    <div id="alert-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alertList']->value->getAlertlist(), 'alert');
$_smarty_tpl->tpl_vars['alert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['alert']->value->getShowInAlertListTemplate()) {?>
                <?php echo $_smarty_tpl->tpl_vars['alert']->value->display();?>

            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
