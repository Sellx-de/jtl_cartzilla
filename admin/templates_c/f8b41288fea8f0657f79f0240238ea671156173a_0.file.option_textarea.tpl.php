<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:39:38
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/option_textarea.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33feaf1b4b9_84631516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8b41288fea8f0657f79f0240238ea671156173a' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/option_textarea.tpl',
      1 => 1738748466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33feaf1b4b9_84631516 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
    <textarea style="<?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->textareaAttributes['Resizable']))) {?>resize:<?php echo $_smarty_tpl->tpl_vars['setting']->value->textareaAttributes['Resizable'];
}?>;max-width:800%;width:100%"
          name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
"
          <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->textareaAttributes['Cols']))) {?>cols="<?php echo $_smarty_tpl->tpl_vars['setting']->value->textareaAttributes['Cols'];?>
"<?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->textareaAttributes['Rows']))) {?>rows="<?php echo $_smarty_tpl->tpl_vars['setting']->value->textareaAttributes['Rows'];?>
"<?php }?>
          id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
"
          class="form-control<?php if ((isset($_smarty_tpl->tpl_vars['setting']->value->textareaAttributes['Class']))) {?> <?php echo $_smarty_tpl->tpl_vars['setting']->value->textareaAttributes['Class'];
}?>"
          placeholder="<?php echo __($_smarty_tpl->tpl_vars['setting']->value->cPlaceholder);?>
"
    ><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['setting']->value->value, ENT_QUOTES, 'utf-8', true);?>
</textarea>
</div>
<?php }
}
