<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:11:26
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/selectpicker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3394ea754e1_65829025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91732811cec62b9b534d65388b46f652960385e0' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/selectpicker.tpl',
      1 => 1738748454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3394ea754e1_65829025 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module">
    
        $('.selectpicker').selectpicker({
            noneSelectedText: '<?php echo __('selectPickerNoneSelectedText');?>
',
            noneResultsText: '<?php echo __('selectPickerNoneResultsText');?>
',
            countSelectedText: '<?php echo __('selectPickerCountSelectedText');?>
',
            maxOptionsText: () => [
                '<?php echo __('selectPickerLimitReached');?>
',
                '<?php echo __('selectPickerGroupLimitReached');?>
',
            ],
            selectAllText: '<?php echo __('selectPickerSelectAllText');?>
',
            deselectAllText: '<?php echo __('selectPickerDeselectAllText');?>
',
            doneButtonText: '<?php echo __('close');?>
',
            style: ''
        });
    
<?php echo '</script'; ?>
>
<?php }
}
