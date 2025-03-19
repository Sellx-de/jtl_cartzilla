<?php
/* Smarty version 4.5.4, created on 2025-02-06 08:57:32
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a46b6caffe79_57879926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e68ccd2c735355aac99dfc365856492d30c99d78' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.icon.tpl',
      1 => 1738748451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a46b6caffe79_57879926 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>
</label>
    <div id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-picker">
        <div id="iconpicker-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" class="iconpickerly" data-placement="inline" style="display: none"></div>
    </div>
    <input type="hidden" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['propval']->value, ENT_QUOTES, 'utf-8', true);?>
">
    <?php echo '<script'; ?>
>
        $(() => {
            let iconpicker = $('#iconpicker-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');

            iconpicker.iconpicker();
            iconpicker.find('.popover-title i').attr('class', <?php echo json_encode($_smarty_tpl->tpl_vars['propval']->value);?>
);
            iconpicker.data('iconpicker').setSourceValue(<?php echo json_encode($_smarty_tpl->tpl_vars['propval']->value);?>
);
            iconpicker.data('iconpicker').update();
            iconpicker.show();

            iconpicker.on('iconpickerSelected', e => {
                let faClass = e.iconpickerValue;
                $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').val(faClass);
                iconpicker.find('.popover-title i').attr('class', faClass);
            });
        });
    <?php echo '</script'; ?>
>
</div>
<?php }
}
