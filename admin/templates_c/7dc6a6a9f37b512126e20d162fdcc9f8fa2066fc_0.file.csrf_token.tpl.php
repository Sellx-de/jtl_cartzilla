<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/jtlshop/scc/src/scc/templates/csrf_token.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab3166244786_39860169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dc6a6a9f37b512126e20d162fdcc9f8fa2066fc' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/jtlshop/scc/src/scc/templates/csrf_token.tpl',
      1 => 1739260988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab3166244786_39860169 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" class="jtl_token" name="jtl_token" value="<?php echo $_SESSION['jtl_token'];?>
"/>
<?php }
}
