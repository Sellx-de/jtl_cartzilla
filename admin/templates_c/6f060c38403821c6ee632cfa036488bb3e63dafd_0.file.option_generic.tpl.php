<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:39:38
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/option_generic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33feaf39db9_08864248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f060c38403821c6ee632cfa036488bb3e63dafd' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/option_generic.tpl',
      1 => 1738748472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33feaf39db9_08864248 (Smarty_Internal_Template $_smarty_tpl) {
?><input class="form-control" type="<?php echo $_smarty_tpl->tpl_vars['setting']->value->cType;?>
" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
"
    id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
"
    value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['setting']->value->value, ENT_QUOTES, 'utf-8', true);?>
"
    placeholder="<?php echo __($_smarty_tpl->tpl_vars['setting']->value->cPlaceholder);?>
"
    <?php if ($_smarty_tpl->tpl_vars['setting']->value->cType === 'checkbox' && $_smarty_tpl->tpl_vars['setting']->value->value === '1') {?> checked<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['step']))) {?> step="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['step'];?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['min']))) {?> min="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['min'];?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['max']))) {?> max="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['max'];?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['maxlength']))) {?> maxlength="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['maxlength'];?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['pattern']))) {?> pattern="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['pattern'];?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['step']))) {?> step="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['step'];?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['size']))) {?> size="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['size'];?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['required']))) {?> required="<?php echo $_smarty_tpl->tpl_vars['setting']->value->rawAttributes['required'];?>
"<?php }?>
/>
<?php }
}
