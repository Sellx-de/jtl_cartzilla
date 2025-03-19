<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:11:26
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/includes/vendor/jtlshop/scc/src/scc/templates/csrf_token.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3394eab3470_59840074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eea0bf886762a3c4415e2644851f5064e1420729' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/includes/vendor/jtlshop/scc/src/scc/templates/csrf_token.tpl',
      1 => 1738749238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3394eab3470_59840074 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" class="jtl_token" name="jtl_token" value="<?php echo $_SESSION['jtl_token'];?>
"/>
<?php }
}
