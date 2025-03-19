<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:46:22
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.hint.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34f8e562e16_19006490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc1975402ec185b86313907e89c6b565cc615bb9' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.hint.tpl',
      1 => 1738748450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a34f8e562e16_19006490 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-<?php echo (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['class'] ?? null)===null||$tmp==='' ? 'primary' : $tmp);?>
" role="alert">
    <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['text'])) {?>
        <?php echo $_smarty_tpl->tpl_vars['propdesc']->value['text'];?>

    <?php } else { ?>
        Assign hint text for property '<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
' with the 'text' field in getPropertyDesc()!
    <?php }?>
</div><?php }
}
