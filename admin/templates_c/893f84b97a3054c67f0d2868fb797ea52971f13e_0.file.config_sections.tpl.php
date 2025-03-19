<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:56:39
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/config_sections.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a343e765f7d0_84878739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '893f84b97a3054c67f0d2868fb797ea52971f13e' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/config_sections.tpl',
      1 => 1738748466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/config_heading.tpl' => 1,
    'file:tpl_inc/config_item.tpl' => 1,
    'file:tpl_inc/config_footer.tpl' => 1,
  ),
),false)) {
function content_67a343e765f7d0_84878739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('skipHeading', (($tmp = $_smarty_tpl->tpl_vars['skipHeading']->value ?? null)===null||$tmp==='' ? false : $tmp));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['section']->value->hasSectionMarkup()) {?>
        <?php echo $_smarty_tpl->tpl_vars['section']->value->getSectionMarkup();?>

    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value->getSubsections(), 'subsection');
$_smarty_tpl->tpl_vars['subsection']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subsection']->value) {
$_smarty_tpl->tpl_vars['subsection']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['subsection']->value->show() === true) {?>
            <?php if (!$_smarty_tpl->tpl_vars['skipHeading']->value && $_smarty_tpl->tpl_vars['subsection']->value->getShownItemsCount() > 0) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_heading.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subsection'=>$_smarty_tpl->tpl_vars['subsection']->value), 0, true);
?>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subsection']->value->getItems(), 'cnf');
$_smarty_tpl->tpl_vars['cnf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cnf']->value) {
$_smarty_tpl->tpl_vars['cnf']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['cnf']->value->isConfigurable() && $_smarty_tpl->tpl_vars['cnf']->value->getShowDefault() > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cnf'=>$_smarty_tpl->tpl_vars['cnf']->value), 0, true);
?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if (!$_smarty_tpl->tpl_vars['skipHeading']->value && $_smarty_tpl->tpl_vars['subsection']->value->getShownItemsCount() > 0) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
