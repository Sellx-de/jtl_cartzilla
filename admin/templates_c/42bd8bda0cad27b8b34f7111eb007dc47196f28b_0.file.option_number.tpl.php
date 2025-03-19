<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:39:38
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/option_number.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33feaee4e16_37432519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42bd8bda0cad27b8b34f7111eb007dc47196f28b' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/option_number.tpl',
      1 => 1738748465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33feaee4e16_37432519 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="input-group form-counter">
    <div class="input-group-prepend">
        <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
            <span class="fas fa-minus"></span>
        </button>
    </div>
    <input class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
"
       id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
"
       value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['setting']->value->value, ENT_QUOTES, 'utf-8', true);?>
"
       placeholder="<?php echo __($_smarty_tpl->tpl_vars['setting']->value->cPlaceholder);?>
" />
    <div class="input-group-append">
        <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
            <span class="fas fa-plus"></span>
        </button>
    </div>
</div>
<?php }
}
