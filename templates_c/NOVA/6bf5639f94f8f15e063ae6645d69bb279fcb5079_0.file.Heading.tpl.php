<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/src/OPC/Portlets/Heading/Heading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31668a16c3_13018097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bf5639f94f8f15e063ae6645d69bb279fcb5079' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/src/OPC/Portlets/Heading/Heading.tpl',
      1 => 1739261093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab31668a16c3_13018097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('htag', ('h').($_smarty_tpl->tpl_vars['instance']->value->getProperty('level')));?>

<<?php echo $_smarty_tpl->tpl_vars['htag']->value;?>
 style="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleString();?>
 text-align:<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('align');?>
"
         class="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getAnimationClass();?>
 <?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleClasses();?>
"
         <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAnimationDataAttributeString();?>
>
    <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['instance']->value->getProperty('text'), ENT_QUOTES, 'utf-8', true);?>

</<?php echo $_smarty_tpl->tpl_vars['htag']->value;?>
><?php }
}
