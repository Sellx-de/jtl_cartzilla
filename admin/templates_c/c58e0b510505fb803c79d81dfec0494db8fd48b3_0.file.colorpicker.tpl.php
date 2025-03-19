<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:39:38
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/colorpicker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33feaf02536_43682151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c58e0b510505fb803c79d81dfec0494db8fd48b3' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/colorpicker.tpl',
      1 => 1738748454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33feaf02536_43682151 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="input-group" id="<?php echo $_smarty_tpl->tpl_vars['cpID']->value;?>
-group">
    <input type="text" class="form-control colorpicker-input"
           name="<?php echo $_smarty_tpl->tpl_vars['cpName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cpValue']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['cpID']->value;?>
"
           autocomplete="off">
    <span class="input-group-append">
        <span class="input-group-text colorpicker-input-addon">
            <i></i>
        </span>
    </span>
</div>
<?php echo '<script'; ?>
>
    $('#<?php echo $_smarty_tpl->tpl_vars['cpID']->value;?>
-group').colorpicker({
        format: 'rgba',
        fallbackColor: 'rgb(255, 255, 255)',
        autoInputFallback: true,
        useAlpha: <?php if ((($tmp = $_smarty_tpl->tpl_vars['useAlpha']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?>true<?php } else { ?>false<?php }?>
    });
<?php echo '</script'; ?>
>
<?php }
}
