<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:19:39
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/admin/templates/bootstrap/snippets/alert_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab324be797d9_48961978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a4664d48157b45e159f185be05258b7ae14068e' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/admin/templates/bootstrap/snippets/alert_list.tpl',
      1 => 1739261212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab324be797d9_48961978 (Smarty_Internal_Template $_smarty_tpl) {
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
