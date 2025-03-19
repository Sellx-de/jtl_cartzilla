<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/src/OPC/Portlets/Button/Button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31668b9510_69870923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d6d2261c43851f07c50f1e19dea3b4c126432a9' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/src/OPC/Portlets/Button/Button.tpl',
      1 => 1739261095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab31668b9510_69870923 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['isPreview']->value === false) {?>
    <?php $_smarty_tpl->_assignInScope('href', $_smarty_tpl->tpl_vars['instance']->value->getProperty('url'));?>
    <?php if (!empty($_smarty_tpl->tpl_vars['href']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('href', htmlspecialchars((string)$_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'utf-8', true));?>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('size') !== 'md') {?>
    <?php $_smarty_tpl->_assignInScope('size', $_smarty_tpl->tpl_vars['instance']->value->getProperty('size'));
}?>

<?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('align') === 'block') {?>
    <?php $_smarty_tpl->_assignInScope('block', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('new-tab') === true) {?>
    <?php $_smarty_tpl->_assignInScope('target', '_blank');
}?>

<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['instance']->value->getProperty('link-title'));?>

<?php if (!empty($_smarty_tpl->tpl_vars['title']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('title', htmlspecialchars((string)$_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'utf-8', true));
}?>

<div class="opc-Button <?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleClasses();?>
"
        <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('align') !== 'block') {?>
            style="text-align: <?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('align');?>
"
        <?php }?>>
    <?php $_block_plugin126 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin126, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('href'=>(($tmp = $_smarty_tpl->tpl_vars['href']->value ?? null)===null||$tmp==='' ? null : $tmp),'target'=>(($tmp = $_smarty_tpl->tpl_vars['target']->value ?? null)===null||$tmp==='' ? null : $tmp),'size'=>(($tmp = $_smarty_tpl->tpl_vars['size']->value ?? null)===null||$tmp==='' ? null : $tmp),'block'=>(($tmp = $_smarty_tpl->tpl_vars['block']->value ?? null)===null||$tmp==='' ? false : $tmp),'variant'=>$_smarty_tpl->tpl_vars['instance']->value->getProperty('style'),'title'=>(($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? null : $tmp),'class'=>$_smarty_tpl->tpl_vars['instance']->value->getAnimationClass(),'data'=>$_smarty_tpl->tpl_vars['instance']->value->getAnimationData(),'style'=>$_smarty_tpl->tpl_vars['instance']->value->getStyleString()));
$_block_repeat=true;
echo $_block_plugin126->render(array('href'=>(($tmp = $_smarty_tpl->tpl_vars['href']->value ?? null)===null||$tmp==='' ? null : $tmp),'target'=>(($tmp = $_smarty_tpl->tpl_vars['target']->value ?? null)===null||$tmp==='' ? null : $tmp),'size'=>(($tmp = $_smarty_tpl->tpl_vars['size']->value ?? null)===null||$tmp==='' ? null : $tmp),'block'=>(($tmp = $_smarty_tpl->tpl_vars['block']->value ?? null)===null||$tmp==='' ? false : $tmp),'variant'=>$_smarty_tpl->tpl_vars['instance']->value->getProperty('style'),'title'=>(($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? null : $tmp),'class'=>$_smarty_tpl->tpl_vars['instance']->value->getAnimationClass(),'data'=>$_smarty_tpl->tpl_vars['instance']->value->getAnimationData(),'style'=>$_smarty_tpl->tpl_vars['instance']->value->getStyleString()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('use-icon') === true && $_smarty_tpl->tpl_vars['instance']->value->getProperty('icon-align') === 'left') {?>
            <?php echo $_smarty_tpl->tpl_vars['portlet']->value->getFontAwesomeIcon($_smarty_tpl->tpl_vars['instance']->value->getProperty('icon'));?>

        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('label');?>


        <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('use-icon') === true && $_smarty_tpl->tpl_vars['instance']->value->getProperty('icon-align') === 'right') {?>
            <?php echo $_smarty_tpl->tpl_vars['portlet']->value->getFontAwesomeIcon($_smarty_tpl->tpl_vars['instance']->value->getProperty('icon'));?>

        <?php }?>
    <?php $_block_repeat=false;
echo $_block_plugin126->render(array('href'=>(($tmp = $_smarty_tpl->tpl_vars['href']->value ?? null)===null||$tmp==='' ? null : $tmp),'target'=>(($tmp = $_smarty_tpl->tpl_vars['target']->value ?? null)===null||$tmp==='' ? null : $tmp),'size'=>(($tmp = $_smarty_tpl->tpl_vars['size']->value ?? null)===null||$tmp==='' ? null : $tmp),'block'=>(($tmp = $_smarty_tpl->tpl_vars['block']->value ?? null)===null||$tmp==='' ? false : $tmp),'variant'=>$_smarty_tpl->tpl_vars['instance']->value->getProperty('style'),'title'=>(($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? null : $tmp),'class'=>$_smarty_tpl->tpl_vars['instance']->value->getAnimationClass(),'data'=>$_smarty_tpl->tpl_vars['instance']->value->getAnimationData(),'style'=>$_smarty_tpl->tpl_vars['instance']->value->getStyleString()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div><?php }
}
