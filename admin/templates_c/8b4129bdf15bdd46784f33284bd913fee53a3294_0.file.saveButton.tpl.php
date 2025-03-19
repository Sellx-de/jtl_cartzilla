<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:56:39
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/buttons/saveButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a343e7714221_80875124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b4129bdf15bdd46784f33284bd913fee53a3294' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/buttons/saveButton.tpl',
      1 => 1738748642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a343e7714221_80875124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('type', (($tmp = $_smarty_tpl->tpl_vars['type']->value ?? null)===null||$tmp==='' ? 'submit' : $tmp));
$_smarty_tpl->_assignInScope('name', (($tmp = $_smarty_tpl->tpl_vars['name']->value ?? null)===null||$tmp==='' ? 'saveAndContinue' : $tmp));
$_smarty_tpl->_assignInScope('value', (($tmp = $_smarty_tpl->tpl_vars['value']->value ?? null)===null||$tmp==='' ? '1' : $tmp));
$_smarty_tpl->_assignInScope('class', (($tmp = $_smarty_tpl->tpl_vars['class']->value ?? null)===null||$tmp==='' ? 'btn btn-primary btn-block' : $tmp));
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? 'save' : $tmp));
$_smarty_tpl->_assignInScope('content', ((($tmp = $_smarty_tpl->tpl_vars['content']->value ?? null)===null||$tmp==='' ? '<i class="fal fa-save"></i> ' : $tmp)).(__('save')));
$_smarty_tpl->_assignInScope('scrollFunction', (($tmp = $_smarty_tpl->tpl_vars['scrollFunction']->value ?? null)===null||$tmp==='' ? false : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['scrollFunction']->value === true) {?>
    <input type="hidden" name="scrollPosition" value="">
<?php }?>
<button type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</button>
<?php }
}
