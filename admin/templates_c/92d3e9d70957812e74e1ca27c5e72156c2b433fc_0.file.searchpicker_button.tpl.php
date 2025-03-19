<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:35:48
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/searchpicker_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab28049f0265_65750165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92d3e9d70957812e74e1ca27c5e72156c2b433fc' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/searchpicker_button.tpl',
      1 => 1738748453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab28049f0265_65750165 (Smarty_Internal_Template $_smarty_tpl) {
?><button type="button"
        class="btn btn-link px-0"
        data-toggle="modal"
        data-target="<?php echo $_smarty_tpl->tpl_vars['target']->value;?>
"
        <?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>title="<?php echo $_smarty_tpl->tpl_vars['title']->value;
}?>">
    <span class="icon-hover">
        <span class="fal fa-edit"></span>
        <span class="fas fa-edit"></span>
    </span>
</button><?php }
}
