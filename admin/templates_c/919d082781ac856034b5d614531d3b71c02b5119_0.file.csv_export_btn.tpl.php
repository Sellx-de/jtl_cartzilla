<?php
/* Smarty version 4.5.4, created on 2025-02-05 13:24:24
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/csv_export_btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a35878ef5588_30960652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '919d082781ac856034b5d614531d3b71c02b5119' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/csv_export_btn.tpl',
      1 => 1738748466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a35878ef5588_30960652 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    function onClickCsvExport_<?php echo $_smarty_tpl->tpl_vars['exporterId']->value;?>
 ()
    {
        window.location = window.location.pathname + '?action=csvExport&exportcsv=<?php echo $_smarty_tpl->tpl_vars['exporterId']->value;?>
&token=<?php echo $_SESSION['jtl_token'];?>
';
    }
<?php echo '</script'; ?>
>
<button type="button" class="btn btn-outline-primary btn-block" onclick="onClickCsvExport_<?php echo $_smarty_tpl->tpl_vars['exporterId']->value;?>
()">
    <i class="fa fa-download"></i> <?php echo __('exportCsv');?>

</button>
<?php }
}
