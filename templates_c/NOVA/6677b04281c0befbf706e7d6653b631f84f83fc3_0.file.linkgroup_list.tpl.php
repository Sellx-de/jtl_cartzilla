<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/linkgroup_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31663952f1_35412427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6677b04281c0befbf706e7d6653b631f84f83fc3' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/linkgroup_list.tpl',
      1 => 1739261178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/linkgroup_recursive.tpl' => 1,
  ),
),false)) {
function content_67ab31663952f1_35412427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109198140067ab316638e183_57029230', 'snippets-linkgroup-list');
?>

<?php }
/* {block 'snippets-linkgroup-list-links-header'} */
class Block_69903005467ab3166391bc4_12454758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin116 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin116, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['li']->value->getName(),'target'=>$_smarty_tpl->tpl_vars['li']->value->getTarget()));
$_block_repeat=true;
echo $_block_plugin116->render(array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['li']->value->getName(),'target'=>$_smarty_tpl->tpl_vars['li']->value->getTarget()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><strong class="nav-mobile-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'menuShow','printf'=>$_smarty_tpl->tpl_vars['li']->value->getName()),$_smarty_tpl ) );?>
</strong><?php $_block_repeat=false;
echo $_block_plugin116->render(array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['li']->value->getName(),'target'=>$_smarty_tpl->tpl_vars['li']->value->getTarget()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-linkgroup-list-links-header'} */
/* {block 'snippets-linkgroup-list-links-sublinks-include-linkgroups-recursive'} */
class Block_193885952067ab31663931d6_25636325 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:snippets/linkgroup_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkgroupIdentifier'=>'mega','limit'=>100,'tplscope'=>'megamenu','links'=>$_smarty_tpl->tpl_vars['subli']->value->getChildLinks(),'layout'=>'megamenu','firstChild'=>true,'mainLink'=>$_smarty_tpl->tpl_vars['subli']->value,'subCategory'=>1), 0, true);
}
}
/* {/block 'snippets-linkgroup-list-links-sublinks-include-linkgroups-recursive'} */
/* {block 'snippets-linkgroup-list-links-dropdown'} */
class Block_178942557467ab3166390a86_78244388 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="link-group-item nav-item nav-scrollbar-item dropdown dropdown-full<?php if ($_smarty_tpl->tpl_vars['activeId']->value === $_smarty_tpl->tpl_vars['li']->value->getId()) {?> active<?php }?>"><?php $_block_plugin112 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin112, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['li']->value->getName(),'class'=>"nav-link dropdown-toggle",'target'=>$_smarty_tpl->tpl_vars['li']->value->getTarget()));
$_block_repeat=true;
echo $_block_plugin112->render(array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['li']->value->getName(),'class'=>"nav-link dropdown-toggle",'target'=>$_smarty_tpl->tpl_vars['li']->value->getTarget()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="text-truncate nav-mobile-heading"><?php echo $_smarty_tpl->tpl_vars['li']->value->getName();?>
</span><?php $_block_repeat=false;
echo $_block_plugin112->render(array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['li']->value->getName(),'class'=>"nav-link dropdown-toggle",'target'=>$_smarty_tpl->tpl_vars['li']->value->getTarget()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><div class="dropdown-menu"><div class="dropdown-body"><?php $_block_plugin113 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin113, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>'subcategory-wrapper'));
$_block_repeat=true;
echo $_block_plugin113->render(array('class'=>'subcategory-wrapper'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin114 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin114, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"lg-row-lg nav"));
$_block_repeat=true;
echo $_block_plugin114->render(array('class'=>"lg-row-lg nav"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin115 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin115, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"));
$_block_repeat=true;
echo $_block_plugin115->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69903005467ab3166391bc4_12454758', 'snippets-linkgroup-list-links-header', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin115->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item dropdown d-lg-none"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['li']->value->getChildLinks(), 'subli');
$_smarty_tpl->tpl_vars['subli']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subli']->value) {
$_smarty_tpl->tpl_vars['subli']->do_else = false;
ob_start();
if ($_smarty_tpl->tpl_vars['subli']->value->getChildLinks()->count() > 0) {
echo "dropdown";
}
$_prefixVariable60=ob_get_clean();
$_block_plugin117 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin117, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item ".$_prefixVariable60));
$_block_repeat=true;
echo $_block_plugin117->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item ".$_prefixVariable60), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193885952067ab31663931d6_25636325', 'snippets-linkgroup-list-links-sublinks-include-linkgroups-recursive', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin117->render(array('lg'=>4,'xl'=>3,'class'=>"nav-item-lg-m nav-item ".$_prefixVariable60), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_block_plugin114->render(array('class'=>"lg-row-lg nav"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin113->render(array('class'=>'subcategory-wrapper'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div></div></li><?php
}
}
/* {/block 'snippets-linkgroup-list-links-dropdown'} */
/* {block 'snippets-linkgroup-list-links-navitem'} */
class Block_180369666467ab3166393de5_43583622 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['activeId']->value === $_smarty_tpl->tpl_vars['li']->value->getId()) {
echo "active";
}
$_prefixVariable61=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['tplscope']->value == 'sitemap') {
echo "nice-deco";
}
$_prefixVariable62=ob_get_clean();
$_block_plugin118 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitem'][0][0] : null;
if (!is_callable(array($_block_plugin118, 'render'))) {
throw new SmartyException('block tag \'navitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitem', array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'nofollow'=>$_smarty_tpl->tpl_vars['li']->value->getNoFollow(),'class'=>"nav-scrollbar-item ".$_prefixVariable61,'router-class'=>$_prefixVariable62,'target'=>$_smarty_tpl->tpl_vars['li']->value->getTarget()));
$_block_repeat=true;
echo $_block_plugin118->render(array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'nofollow'=>$_smarty_tpl->tpl_vars['li']->value->getNoFollow(),'class'=>"nav-scrollbar-item ".$_prefixVariable61,'router-class'=>$_prefixVariable62,'target'=>$_smarty_tpl->tpl_vars['li']->value->getTarget()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['li']->value->getName();
$_block_repeat=false;
echo $_block_plugin118->render(array('href'=>$_smarty_tpl->tpl_vars['li']->value->getURL(),'nofollow'=>$_smarty_tpl->tpl_vars['li']->value->getNoFollow(),'class'=>"nav-scrollbar-item ".$_prefixVariable61,'router-class'=>$_prefixVariable62,'target'=>$_smarty_tpl->tpl_vars['li']->value->getTarget()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-linkgroup-list-links-navitem'} */
/* {block 'snippets-linkgroup-list-links'} */
class Block_38967612067ab31663902f5_25586173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'li');
$_smarty_tpl->tpl_vars['li']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['li']->value) {
$_smarty_tpl->tpl_vars['li']->do_else = false;
if ($_smarty_tpl->tpl_vars['li']->value->getChildLinks()->count() > 0 && (isset($_smarty_tpl->tpl_vars['dropdownSupport']->value))) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178942557467ab3166390a86_78244388', 'snippets-linkgroup-list-links-dropdown', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180369666467ab3166393de5_43583622', 'snippets-linkgroup-list-links-navitem', $this->tplIndex);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'snippets-linkgroup-list-links'} */
/* {block 'snippets-linkgroup-list'} */
class Block_109198140067ab316638e183_57029230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-linkgroup-list' => 
  array (
    0 => 'Block_109198140067ab316638e183_57029230',
  ),
  'snippets-linkgroup-list-links' => 
  array (
    0 => 'Block_38967612067ab31663902f5_25586173',
  ),
  'snippets-linkgroup-list-links-dropdown' => 
  array (
    0 => 'Block_178942557467ab3166390a86_78244388',
  ),
  'snippets-linkgroup-list-links-header' => 
  array (
    0 => 'Block_69903005467ab3166391bc4_12454758',
  ),
  'snippets-linkgroup-list-links-sublinks-include-linkgroups-recursive' => 
  array (
    0 => 'Block_193885952067ab31663931d6_25636325',
  ),
  'snippets-linkgroup-list-links-navitem' => 
  array (
    0 => 'Block_180369666467ab3166393de5_43583622',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['linkgroupIdentifier']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('checkLinkParents', false);
$_smarty_tpl->_assignInScope('activeId', 0);
if ((isset($_smarty_tpl->tpl_vars['Link']->value)) && $_smarty_tpl->tpl_vars['Link']->value->getID() > 0) {
$_smarty_tpl->_assignInScope('activeId', $_smarty_tpl->tpl_vars['Link']->value->getID());
} elseif (JTL\Shop::$kLink > 0) {
$_smarty_tpl->_assignInScope('activeId', JTL\Shop::$kLink);
$_smarty_tpl->_assignInScope('Link', JTL\Shop::Container()->getLinkService()->getLinkByID($_smarty_tpl->tpl_vars['activeId']->value));
}
if (!(isset($_smarty_tpl->tpl_vars['activeParents']->value)) && $_smarty_tpl->tpl_vars['activeId']->value > 0) {
$_smarty_tpl->_assignInScope('activeParents', JTL\Shop::Container()->getLinkService()->getParentIDs($_smarty_tpl->tpl_vars['activeId']->value));
$_smarty_tpl->_assignInScope('checkLinkParents', true);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_navigation'][0], array( array('linkgroupIdentifier'=>$_smarty_tpl->tpl_vars['linkgroupIdentifier']->value,'assign'=>'links'),$_smarty_tpl ) );
if (!empty($_smarty_tpl->tpl_vars['links']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38967612067ab31663902f5_25586173', 'snippets-linkgroup-list-links', $this->tplIndex);
}?>
    <?php }
}
}
/* {/block 'snippets-linkgroup-list'} */
}
