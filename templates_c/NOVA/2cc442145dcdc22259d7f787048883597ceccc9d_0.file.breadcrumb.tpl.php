<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31668e7b15_06665218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cc442145dcdc22259d7f787048883597ceccc9d' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/breadcrumb.tpl',
      1 => 1739261160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab31668e7b15_06665218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148834337367ab31668d4e47_37034131', 'layout-breadcrumb');
?>

<?php }
/* {block 'layout-breadcrumb-sm-back'} */
class Block_36623646667ab31668d7055_50447278 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('parent', $_smarty_tpl->tpl_vars['Brotnavi']->value[max((call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['Brotnavi']->value ))-2),0)]);
$_smarty_tpl->_assignInScope('lastVisitedProductListURL', (($tmp = $_SESSION['lastVisitedProductListURL'] ?? null)===null||$tmp==='' ? '' : $tmp));
if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKEL') ? constant('PAGE_ARTIKEL') : null) && $_smarty_tpl->tpl_vars['lastVisitedProductListURL']->value !== '' && $_smarty_tpl->tpl_vars['Brotnavi']->value[array_key_last($_smarty_tpl->tpl_vars['Brotnavi']->value)]->getID() > 0) {
$_block_plugin130 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin130, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"breadcrumb-backtolist",'href'=>(($_smarty_tpl->tpl_vars['lastVisitedProductListURL']->value).('#buy_form_')).($_smarty_tpl->tpl_vars['Brotnavi']->value[array_key_last($_smarty_tpl->tpl_vars['Brotnavi']->value)]->getID())));
$_block_repeat=true;
echo $_block_plugin130->render(array('class'=>"breadcrumb-backtolist",'href'=>(($_smarty_tpl->tpl_vars['lastVisitedProductListURL']->value).('#buy_form_')).($_smarty_tpl->tpl_vars['Brotnavi']->value[array_key_last($_smarty_tpl->tpl_vars['Brotnavi']->value)]->getID())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'goBackToList'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin130->render(array('class'=>"breadcrumb-backtolist",'href'=>(($_smarty_tpl->tpl_vars['lastVisitedProductListURL']->value).('#buy_form_')).($_smarty_tpl->tpl_vars['Brotnavi']->value[array_key_last($_smarty_tpl->tpl_vars['Brotnavi']->value)]->getID())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['parent']->value !== null) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sanitizeTitle'][0], array( array('title'=>$_smarty_tpl->tpl_vars['parent']->value->getName()),$_smarty_tpl ) );
$_prefixVariable65 = ob_get_clean();
$_block_plugin131 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin131, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>$_prefixVariable65));
$_block_repeat=true;
echo $_block_plugin131->render(array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>$_prefixVariable65), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['parent']->value->getName();?>
</span><?php $_block_repeat=false;
echo $_block_plugin131->render(array('class'=>"breadcrumb-arrow",'href'=>$_smarty_tpl->tpl_vars['parent']->value->getURLFull(),'title'=>$_prefixVariable65), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-breadcrumb-sm-back'} */
/* {block 'layout-breadcrumb-first-item'} */
class Block_128403272067ab31668dcb59_96043609 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sanitizeTitle'][0], array( array('title'=>$_smarty_tpl->tpl_vars['oItem']->value->getName()),$_smarty_tpl ) );
$_prefixVariable66 = ob_get_clean();
$_block_plugin132 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin132, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>$_prefixVariable66,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin132->render(array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>$_prefixVariable66,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['oItem']->value->getName(), ENT_QUOTES, 'utf-8', true);?>
</span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin132->render(array('class'=>"first",'router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>$_prefixVariable66,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-first-item'} */
/* {block 'layout-breadcrumb-last-item'} */
class Block_64754819067ab31668deb72_22704182 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sanitizeTitle'][0], array( array('title'=>$_smarty_tpl->tpl_vars['oItem']->value->getName()),$_smarty_tpl ) );
$_prefixVariable67 = ob_get_clean();
$_block_plugin133 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin133, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>((string)$_smarty_tpl->tpl_vars['oItem']->value->getURLFull()),'title'=>$_prefixVariable67,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin133->render(array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>((string)$_smarty_tpl->tpl_vars['oItem']->value->getURLFull()),'title'=>$_prefixVariable67,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php if ($_smarty_tpl->tpl_vars['oItem']->value->getName() !== null) {
echo $_smarty_tpl->tpl_vars['oItem']->value->getName();
} elseif (!empty($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTermWrite())) {
echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTermWrite();
}?></span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin133->render(array('class'=>"last active",'router-tag-itemprop'=>"url",'href'=>((string)$_smarty_tpl->tpl_vars['oItem']->value->getURLFull()),'title'=>$_prefixVariable67,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-last-item'} */
/* {block 'layout-breadcrumb-item'} */
class Block_176437538667ab31668e1442_62425954 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sanitizeTitle'][0], array( array('title'=>$_smarty_tpl->tpl_vars['oItem']->value->getName()),$_smarty_tpl ) );
$_prefixVariable68 = ob_get_clean();
$_block_plugin134 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbitem'][0][0] : null;
if (!is_callable(array($_block_plugin134, 'render'))) {
throw new SmartyException('block tag \'breadcrumbitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumbitem', array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>$_prefixVariable68,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"));
$_block_repeat=true;
echo $_block_plugin134->render(array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>$_prefixVariable68,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['oItem']->value->getName();?>
</span><meta itemprop="item" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->value->getURLFull();?>
" /><meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['oItem']->iteration;?>
" /><?php $_block_repeat=false;
echo $_block_plugin134->render(array('router-tag-itemprop'=>"url",'href'=>$_smarty_tpl->tpl_vars['oItem']->value->getURLFull(),'title'=>$_prefixVariable68,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"https://schema.org/ListItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-breadcrumb-item'} */
/* {block 'layout-breadcrumb-items'} */
class Block_48338034567ab31668daae1_91166542 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Brotnavi']->value, 'oItem', true);
$_smarty_tpl->tpl_vars['oItem']->iteration = 0;
$_smarty_tpl->tpl_vars['oItem']->index = -1;
$_smarty_tpl->tpl_vars['oItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oItem']->value) {
$_smarty_tpl->tpl_vars['oItem']->do_else = false;
$_smarty_tpl->tpl_vars['oItem']->iteration++;
$_smarty_tpl->tpl_vars['oItem']->index++;
$_smarty_tpl->tpl_vars['oItem']->first = !$_smarty_tpl->tpl_vars['oItem']->index;
$_smarty_tpl->tpl_vars['oItem']->last = $_smarty_tpl->tpl_vars['oItem']->iteration === $_smarty_tpl->tpl_vars['oItem']->total;
$__foreach_oItem_99_saved = $_smarty_tpl->tpl_vars['oItem'];
if ($_smarty_tpl->tpl_vars['oItem']->first) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128403272067ab31668dcb59_96043609', 'layout-breadcrumb-first-item', $this->tplIndex);
} elseif ($_smarty_tpl->tpl_vars['oItem']->last) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64754819067ab31668deb72_22704182', 'layout-breadcrumb-last-item', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176437538667ab31668e1442_62425954', 'layout-breadcrumb-item', $this->tplIndex);
}
$_smarty_tpl->tpl_vars['oItem'] = $__foreach_oItem_99_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'layout-breadcrumb-items'} */
/* {block 'layout-header-product-pagination'} */
class Block_172129170067ab31668e3915_00026860 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->kArtikel))) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sanitizeTitle'][0], array( array('title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName),$_smarty_tpl ) );
$_prefixVariable69 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'productDetails','key'=>'nextProduct'),$_smarty_tpl ) );
$_prefixVariable70=ob_get_clean();
$_block_plugin136 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin136, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_prefixVariable69,'aria'=>array("label"=>$_prefixVariable70.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))));
$_block_repeat=true;
echo $_block_plugin136->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_prefixVariable69,'aria'=>array("label"=>$_prefixVariable70.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="fa fa-chevron-right"></span><?php $_block_repeat=false;
echo $_block_plugin136->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cURLFull,'title'=>$_prefixVariable69,'aria'=>array("label"=>$_prefixVariable70.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->cName))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->kArtikel))) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sanitizeTitle'][0], array( array('title'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName),$_smarty_tpl ) );
$_prefixVariable71 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'productDetails','key'=>'previousProduct'),$_smarty_tpl ) );
$_prefixVariable72=ob_get_clean();
$_block_plugin137 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin137, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_prefixVariable71,'aria'=>array("label"=>$_prefixVariable72.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))));
$_block_repeat=true;
echo $_block_plugin137->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_prefixVariable71,'aria'=>array("label"=>$_prefixVariable72.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="fa fa-chevron-left"></span><?php $_block_repeat=false;
echo $_block_plugin137->render(array('variant'=>"link",'href'=>$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cURLFull,'title'=>$_prefixVariable71,'aria'=>array("label"=>$_prefixVariable72.": ".((string)$_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->cName))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-header-product-pagination'} */
/* {block 'layout-breadcrumb'} */
class Block_148834337367ab31668d4e47_37034131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-breadcrumb' => 
  array (
    0 => 'Block_148834337367ab31668d4e47_37034131',
  ),
  'layout-breadcrumb-sm-back' => 
  array (
    0 => 'Block_36623646667ab31668d7055_50447278',
  ),
  'layout-breadcrumb-items' => 
  array (
    0 => 'Block_48338034567ab31668daae1_91166542',
  ),
  'layout-breadcrumb-first-item' => 
  array (
    0 => 'Block_128403272067ab31668dcb59_96043609',
  ),
  'layout-breadcrumb-last-item' => 
  array (
    0 => 'Block_64754819067ab31668deb72_22704182',
  ),
  'layout-breadcrumb-item' => 
  array (
    0 => 'Block_176437538667ab31668e1442_62425954',
  ),
  'layout-header-product-pagination' => 
  array (
    0 => 'Block_172129170067ab31668e3915_00026860',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['has_boxes'][0], array( array('position'=>'left','assign'=>'hasLeftBox'),$_smarty_tpl ) );
if (!empty($_smarty_tpl->tpl_vars['Brotnavi']->value) && !$_smarty_tpl->tpl_vars['bExclusive']->value && !$_smarty_tpl->tpl_vars['bAjaxRequest']->value && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_STARTSEITE') ? constant('PAGE_STARTSEITE') : null) && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null) && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLSTATUS') ? constant('PAGE_BESTELLSTATUS') : null)) {
$_block_plugin127 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin127, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"));
$_block_repeat=true;
echo $_block_plugin127->render(array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin128 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin128, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>"auto"));
$_block_repeat=true;
echo $_block_plugin128->render(array('cols'=>"auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin129 = isset($_smarty_tpl->smarty->registered_plugins['block']['breadcrumb'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['breadcrumb'][0][0] : null;
if (!is_callable(array($_block_plugin129, 'render'))) {
throw new SmartyException('block tag \'breadcrumb\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('breadcrumb', array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"https://schema.org/BreadcrumbList"));
$_block_repeat=true;
echo $_block_plugin129->render(array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"https://schema.org/BreadcrumbList"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36623646667ab31668d7055_50447278', 'layout-breadcrumb-sm-back', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48338034567ab31668daae1_91166542', 'layout-breadcrumb-items', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin129->render(array('id'=>"breadcrumb",'itemprop'=>"breadcrumb",'itemscope'=>true,'itemtype'=>"https://schema.org/BreadcrumbList"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin128->render(array('cols'=>"auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin135 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin135, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>'navigation-arrows'));
$_block_repeat=true;
echo $_block_plugin135->render(array('class'=>'navigation-arrows'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!empty($_smarty_tpl->tpl_vars['NavigationBlaettern']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172129170067ab31668e3915_00026860', 'layout-header-product-pagination', $this->tplIndex);
}
$_block_repeat=false;
echo $_block_plugin135->render(array('class'=>'navigation-arrows'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin127->render(array('no-gutters'=>true,'class'=>"breadcrumb-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'layout-breadcrumb'} */
}
