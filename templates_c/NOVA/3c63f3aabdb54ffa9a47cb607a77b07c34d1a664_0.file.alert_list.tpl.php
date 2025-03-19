<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/alert_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31668edea1_69225532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c63f3aabdb54ffa9a47cb607a77b07c34d1a664' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/alert_list.tpl',
      1 => 1739261178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab31668edea1_69225532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198992045267ab31668ec699_73746798', 'snippets-alert-list');
?>

<?php }
/* {block 'snippets-alert-list'} */
class Block_198992045267ab31668ec699_73746798 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-alert-list' => 
  array (
    0 => 'Block_198992045267ab31668ec699_73746798',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (count($_smarty_tpl->tpl_vars['alertList']->value->getAlertlist()) > 0) {?>
        <div id="alert-list" class="<?php if ((($tmp = $_smarty_tpl->tpl_vars['container']->value ?? null)===null||$tmp==='' ? true : $tmp)) {?>container <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {?>container-plus-sidebar<?php }
}?>">
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
/* {/block 'snippets-alert-list'} */
}
