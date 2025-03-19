<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/extension.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31668f06f9_37251534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88a0ed30558e399531c4e0a27d3abb1cd0b4645c' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/extension.tpl',
      1 => 1739261178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/banner.tpl' => 1,
    'file:snippets/slider.tpl' => 1,
  ),
),false)) {
function content_67ab31668f06f9_37251534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146750120567ab31668eecc7_68261881', 'snippets-extension');
?>

<?php }
/* {block 'snippets-extension-include-banner'} */
class Block_142546202567ab31668ef483_16127082 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:snippets/banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isFluid'=>false), 0, false);
?>
        <?php
}
}
/* {/block 'snippets-extension-include-banner'} */
/* {block 'snippets-extension-include-slider'} */
class Block_170009583067ab31668f01f7_43259497 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:snippets/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isFluid'=>false), 0, false);
?>
        <?php
}
}
/* {/block 'snippets-extension-include-slider'} */
/* {block 'snippets-extension'} */
class Block_146750120567ab31668eecc7_68261881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-extension' => 
  array (
    0 => 'Block_146750120567ab31668eecc7_68261881',
  ),
  'snippets-extension-include-banner' => 
  array (
    0 => 'Block_142546202567ab31668ef483_16127082',
  ),
  'snippets-extension-include-slider' => 
  array (
    0 => 'Block_170009583067ab31668f01f7_43259497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('isFluidBanner', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['banner_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oImageMap']->value)));?>
    <?php if (!$_smarty_tpl->tpl_vars['isFluidBanner']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142546202567ab31668ef483_16127082', 'snippets-extension-include-banner', $this->tplIndex);
?>

    <?php }?>

    <?php $_smarty_tpl->_assignInScope('isFluidSlider', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['slider_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oSlider']->value)) && count($_smarty_tpl->tpl_vars['oSlider']->value->getSlides()) > 0);?>
    <?php if (!$_smarty_tpl->tpl_vars['isFluidSlider']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170009583067ab31668f01f7_43259497', 'snippets-extension-include-slider', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-extension'} */
}
