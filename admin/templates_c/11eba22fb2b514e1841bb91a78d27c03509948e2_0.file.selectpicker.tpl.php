<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/admin/templates/bootstrap/snippets/selectpicker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab316623c0a4_05617157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11eba22fb2b514e1841bb91a78d27c03509948e2' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/admin/templates/bootstrap/snippets/selectpicker.tpl',
      1 => 1739261212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab316623c0a4_05617157 (Smarty_Internal_Template $_smarty_tpl) {
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
