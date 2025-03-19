<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:39:31
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab36f34ec924_61309553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e55407c1396b92470bc41c3b651ca7c62a842ba9' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/alert.tpl',
      1 => 1739261178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab36f34ec924_61309553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184399069267ab36f34e9521_48083433', 'snippets-alert');
?>

<?php }
/* {block 'snippets-alert'} */
class Block_184399069267ab36f34e9521_48083433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-alert' => 
  array (
    0 => 'Block_184399069267ab36f34e9521_48083433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getCssType();
$_prefixVariable11 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getFadeOut();
$_prefixVariable12 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getKey();
$_prefixVariable13 = ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['alert']->value->getId()) {
echo (string)$_smarty_tpl->tpl_vars['alert']->value->getId();
}
$_prefixVariable14=ob_get_clean();
$_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('variant'=>$_prefixVariable11,'data'=>array("fade-out"=>$_prefixVariable12,"key"=>$_prefixVariable13),'id'=>$_prefixVariable14,'class'=>"alert-wrapper"));
$_block_repeat=true;
echo $_block_plugin23->render(array('variant'=>$_prefixVariable11,'data'=>array("fade-out"=>$_prefixVariable12,"key"=>$_prefixVariable13),'id'=>$_prefixVariable14,'class'=>"alert-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['alert']->value->getIcon()) {?>
            <i class="fas fa-<?php if ($_smarty_tpl->tpl_vars['alert']->value->getIcon() === 'warning') {?>exclamation-triangle<?php } else {
echo $_smarty_tpl->tpl_vars['alert']->value->getIcon();
}?>"></i>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['alert']->value->getDismissable()) {?><div class="close">&times;</div><?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['alert']->value->getLinkHref()) && empty($_smarty_tpl->tpl_vars['alert']->value->getLinkText())) {?>
            <?php $_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin24, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()));
$_block_repeat=true;
echo $_block_plugin24->render(array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();
$_block_repeat=false;
echo $_block_plugin24->render(array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['alert']->value->getLinkHref()) && !empty($_smarty_tpl->tpl_vars['alert']->value->getLinkText())) {?>
            <?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>

            <?php $_block_plugin25 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin25, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()));
$_block_repeat=true;
echo $_block_plugin25->render(array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['alert']->value->getLinkText();
$_block_repeat=false;
echo $_block_plugin25->render(array('href'=>$_smarty_tpl->tpl_vars['alert']->value->getLinkHref()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>

        <?php }?>
    <?php $_block_repeat=false;
echo $_block_plugin23->render(array('variant'=>$_prefixVariable11,'data'=>array("fade-out"=>$_prefixVariable12,"key"=>$_prefixVariable13),'id'=>$_prefixVariable14,'class'=>"alert-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-alert'} */
}
