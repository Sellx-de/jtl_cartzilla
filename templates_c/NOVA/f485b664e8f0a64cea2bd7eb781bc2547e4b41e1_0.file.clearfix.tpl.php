<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/jtlshop/scc/src/scc/templates/clearfix.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31663cb0e1_98837051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f485b664e8f0a64cea2bd7eb781bc2547e4b41e1' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/jtlshop/scc/src/scc/templates/clearfix.tpl',
      1 => 1739260988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab31663cb0e1_98837051 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['params']->value['visible-size']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('visibleSize', $_smarty_tpl->tpl_vars['params']->value['visible-size']->getValue());?>
    <?php if ($_smarty_tpl->tpl_vars['visibleSize']->value === 'xs') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', 'sm');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['visibleSize']->value === 'sm') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', 'md');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['visibleSize']->value === 'md') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', 'lg');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['visibleSize']->value === 'lg') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', 'xl');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['visibleSize']->value === 'xl') {?>
        <?php $_smarty_tpl->_assignInScope('nextSize', null);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['visibleSize']->value === 'xs') {?>
        <div class="clearfix d-block d-<?php echo $_smarty_tpl->tpl_vars['nextSize']->value;?>
-none"></div>
    <?php } elseif (!empty($_smarty_tpl->tpl_vars['nextSize']->value)) {?>
        <div class="clearfix d-none d-<?php echo $_smarty_tpl->tpl_vars['visibleSize']->value;?>
-block d-<?php echo $_smarty_tpl->tpl_vars['nextSize']->value;?>
-none"></div>
    <?php } else { ?>
        <div class="clearfix d-none d-<?php echo $_smarty_tpl->tpl_vars['visibleSize']->value;?>
-block"></div>
    <?php }
} else { ?>
    <div class="clearfix"></div>
<?php }
}
}
