<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/scroll_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab316692faa9_61137271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df9798835faf40758ffc65f45024b626645449b4' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/scroll_top.tpl',
      1 => 1739261178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab316692faa9_61137271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16638765867ab316692f594_08838716', 'snippets-scroll-top');
?>

<?php }
/* {block 'snippets-scroll-top-main'} */
class Block_145749263467ab316692f759_44660506 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="smoothscroll-top go-to-top scroll-to-top">
            <span class="scroll-top-inner">
                <i class="fas fa-2x fa-chevron-up"></i>
            </span>
        </div>
    <?php
}
}
/* {/block 'snippets-scroll-top-main'} */
/* {block 'snippets-scroll-top'} */
class Block_16638765867ab316692f594_08838716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-scroll-top' => 
  array (
    0 => 'Block_16638765867ab316692f594_08838716',
  ),
  'snippets-scroll-top-main' => 
  array (
    0 => 'Block_145749263467ab316692f759_44660506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145749263467ab316692f759_44660506', 'snippets-scroll-top-main', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-scroll-top'} */
}
