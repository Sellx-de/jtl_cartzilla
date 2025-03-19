<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/language_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31662d47c7_39497833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d7a3f71f32c144f89144de583e082d6aec2d1be' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/language_dropdown.tpl',
      1 => 1739261178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab31662d47c7_39497833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182157226067ab31662d0657_60160006', 'snippets-language-dropdown');
?>

<?php }
/* {block 'snippets-language-dropdown-text'} */
class Block_166247973967ab31662d1f28_65372130 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php echo mb_strtoupper((string) $_smarty_tpl->tpl_vars['language']->value->getIso639() ?? '', 'utf-8');?>

                    <?php
}
}
/* {/block 'snippets-language-dropdown-text'} */
/* {block 'snippets-language-dropdown-item'} */
class Block_66931832267ab31662d33e6_97065717 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin30 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin30, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->getUrl()),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->getIso()),'attribs'=>array("hreflang"=>$_smarty_tpl->tpl_vars['language']->value->getIso639()),'active'=>($_smarty_tpl->tpl_vars['language']->value->getId() === JTL\Shop::getLanguageID())));
$_block_repeat=true;
echo $_block_plugin30->render(array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->getUrl()),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->getIso()),'attribs'=>array("hreflang"=>$_smarty_tpl->tpl_vars['language']->value->getIso639()),'active'=>($_smarty_tpl->tpl_vars['language']->value->getId() === JTL\Shop::getLanguageID())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo mb_strtoupper((string) $_smarty_tpl->tpl_vars['language']->value->getIso639() ?? '', 'utf-8');?>

                    <?php $_block_repeat=false;
echo $_block_plugin30->render(array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->getUrl()),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->getIso()),'attribs'=>array("hreflang"=>$_smarty_tpl->tpl_vars['language']->value->getIso639()),'active'=>($_smarty_tpl->tpl_vars['language']->value->getId() === JTL\Shop::getLanguageID())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-language-dropdown-item'} */
/* {block 'snippets-language-dropdown'} */
class Block_182157226067ab31662d0657_60160006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-language-dropdown' => 
  array (
    0 => 'Block_182157226067ab31662d0657_60160006',
  ),
  'snippets-language-dropdown-text' => 
  array (
    0 => 'Block_166247973967ab31662d1f28_65372130',
  ),
  'snippets-language-dropdown-item' => 
  array (
    0 => 'Block_66931832267ab31662d33e6_97065717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('languages', JTL\Session\Frontend::getLanguages());?>
    <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['languages']->value )) > 1) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'langSelectorText', null, null);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['language']->value->getId() === JTL\Shop::getLanguageID()) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166247973967ab31662d1f28_65372130', 'snippets-language-dropdown-text', $this->tplIndex);
?>

                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['dropdownClass']->value ?? null)===null||$tmp==='' ? '' : $tmp);
$_prefixVariable15=ob_get_clean();
$_block_plugin29 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0] : null;
if (!is_callable(array($_block_plugin29, 'render'))) {
throw new SmartyException('block tag \'navitemdropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitemdropdown', array('class'=>"language-dropdown ".$_prefixVariable15,'right'=>true,'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'langSelectorText')));
$_block_repeat=true;
echo $_block_plugin29->render(array('class'=>"language-dropdown ".$_prefixVariable15,'right'=>true,'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'langSelectorText')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66931832267ab31662d33e6_97065717', 'snippets-language-dropdown-item', $this->tplIndex);
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_block_repeat=false;
echo $_block_plugin29->render(array('class'=>"language-dropdown ".$_prefixVariable15,'right'=>true,'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'langSelectorText')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
/* {/block 'snippets-language-dropdown'} */
}
