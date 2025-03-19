<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:46:22
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.color.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34f8e584ee8_51761745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf73033b9181890d6624cf838d3c1cbb66aac712' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.color.tpl',
      1 => 1738748451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a34f8e584ee8_51761745 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['propid']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('propid', $_smarty_tpl->tpl_vars['propname']->value);
}?>
<div class="form-group no-pb">
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
"
            <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
                data-toggle="tooltip" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['desc'] ?? null)===null||$tmp==='' ? '' : $tmp);?>
"
                data-placement="auto"
            <?php }?>>
        <?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>

        <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
            <i class="fas fa-info-circle fa-fw"></i>
        <?php }?>
    </label>
    <input type="text" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
           value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['propval']->value ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
"
           <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>required<?php }?> id="config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
" autocomplete="off"
           placeholder="<?php echo __('Default colour');?>
">
    <?php echo '<script'; ?>
 type="module">
        import { enableColorpicker } from "./opc/js/colorpicker.js";
        enableColorpicker($('#config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
')[0]);
    <?php echo '</script'; ?>
>
</div><?php }
}
