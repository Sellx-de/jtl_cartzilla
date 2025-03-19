<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:56:39
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/einstellungen_icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a343e76c2a34_98018729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f107815e451a9feedf6848341226e1d096cec55' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/einstellungen_icons.tpl',
      1 => 1738748454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/einstellungen_log_icon.tpl' => 1,
    'file:snippets/einstellungen_reset_icon.tpl' => 1,
  ),
),false)) {
function content_67a343e76c2a34_98018729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('wrapper', (($tmp = $_smarty_tpl->tpl_vars['wrapper']->value ?? null)===null||$tmp==='' ? true : $tmp));
if ($_smarty_tpl->tpl_vars['wrapper']->value) {?>
<div class="col-auto ml-sm-n4 order-2 order-sm-3 d-flex align-items-center">
<?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['cnf']->value->getDescription())) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>$_smarty_tpl->tpl_vars['cnf']->value->getDescription(),'cID'=>$_smarty_tpl->tpl_vars['cnf']->value->getValueName()),$_smarty_tpl ) );?>

    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender('file:snippets/einstellungen_log_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cnf'=>$_smarty_tpl->tpl_vars['cnf']->value), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:snippets/einstellungen_reset_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cnf'=>$_smarty_tpl->tpl_vars['cnf']->value), 0, false);
if ($_smarty_tpl->tpl_vars['wrapper']->value) {?>
</div>
<?php }
}
}
