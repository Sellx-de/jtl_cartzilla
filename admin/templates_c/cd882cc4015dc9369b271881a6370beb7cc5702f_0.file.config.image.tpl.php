<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:46:22
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34f8e5528d0_75045475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd882cc4015dc9369b271881a6370beb7cc5702f' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.image.tpl',
      1 => 1738748452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a34f8e5528d0_75045475 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">
        <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['label'])) {
echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];
}?>
    </label>

    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['propval']->value, ENT_QUOTES, 'utf-8', true);?>
">
    <?php if (empty($_smarty_tpl->tpl_vars['propval']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('imgsrc', 'opc/gfx/upload-stub.png');?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('imgsrc', (((JTL\Shop::getURL()).('/')).((defined('STORAGE_OPC') ? constant('STORAGE_OPC') : null))).($_smarty_tpl->tpl_vars['propval']->value));?>
    <?php }?>
    <button type="button" class="image-btn" onclick="opc.selectImageProp('<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
')">
        <img src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['imgsrc']->value, ENT_QUOTES, 'utf-8', true);?>
"
             alt="Chosen image" id="preview-img-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" class="<?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['thumb'])) {?>thumb<?php }?>">
    </button>
</div>
<?php }
}
