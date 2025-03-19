<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/header_nav_icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31662ebb15_83267176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf68e19121c240b6dcef65bbc7bd7aa4a2278847' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/header_nav_icons.tpl',
      1 => 1739261160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header_nav_search.tpl' => 1,
    'file:snippets/currency_dropdown.tpl' => 1,
    'file:snippets/language_dropdown.tpl' => 1,
    'file:layout/header_shop_nav_account.tpl' => 1,
    'file:layout/header_shop_nav_compare.tpl' => 1,
    'file:layout/header_shop_nav_wish.tpl' => 1,
    'file:basket/cart_dropdown_label.tpl' => 1,
  ),
),false)) {
function content_67ab31662ebb15_83267176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161091130867ab31662e8d94_77623687', 'layout-header-nav-icons');
?>

<?php }
/* {block 'layout-header-nav-icons-include-header-nav-search'} */
class Block_137383552167ab31662e9257_48033962 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_single_row'] !== 'Y') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/header_nav_search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tag'=>'li'), 0, false);
?>
            <?php }?>
        <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-nav-search'} */
/* {block 'layout-header-nav-icons-include-currency-dropdown'} */
class Block_199120866167ab31662e9981_88675845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_show_topbar'] === 'N' && !$_smarty_tpl->tpl_vars['isMobile']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:snippets/currency_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php
}
}
/* {/block 'layout-header-nav-icons-include-currency-dropdown'} */
/* {block 'layout-header-nav-icons-include-language-dropdown'} */
class Block_201199786767ab31662ea0b3_13189210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_show_topbar'] === 'Y') {
echo "d-lg-none";
}
$_prefixVariable16=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/language_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dropdownClass'=>"d-flex ".$_prefixVariable16), 0, false);
?>
        <?php
}
}
/* {/block 'layout-header-nav-icons-include-language-dropdown'} */
/* {block 'layout-header-nav-icons-include-header-shop-nav-account'} */
class Block_155216613567ab31662ea866_17493131 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:layout/header_shop_nav_account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-shop-nav-account'} */
/* {block 'layout-header-nav-icons-include-header-shop-nav-compare'} */
class Block_142455856567ab31662eaf74_68572019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:layout/header_shop_nav_compare.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-shop-nav-compare'} */
/* {block 'layout-header-nav-icons-include-header-shop-nav-wish'} */
class Block_162013480467ab31662eb2f0_37056198 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:layout/header_shop_nav_wish.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'layout-header-nav-icons-include-header-shop-nav-wish'} */
/* {block 'layout-header-nav-icons-include-cart-dropdown-label'} */
class Block_127317708767ab31662eb663_98215368 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:basket/cart_dropdown_label.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'layout-header-nav-icons-include-cart-dropdown-label'} */
/* {block 'layout-header-nav-icons'} */
class Block_161091130867ab31662e8d94_77623687 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-nav-icons' => 
  array (
    0 => 'Block_161091130867ab31662e8d94_77623687',
  ),
  'layout-header-nav-icons-include-header-nav-search' => 
  array (
    0 => 'Block_137383552167ab31662e9257_48033962',
  ),
  'layout-header-nav-icons-include-currency-dropdown' => 
  array (
    0 => 'Block_199120866167ab31662e9981_88675845',
  ),
  'layout-header-nav-icons-include-language-dropdown' => 
  array (
    0 => 'Block_201199786767ab31662ea0b3_13189210',
  ),
  'layout-header-nav-icons-include-header-shop-nav-account' => 
  array (
    0 => 'Block_155216613567ab31662ea866_17493131',
  ),
  'layout-header-nav-icons-include-header-shop-nav-compare' => 
  array (
    0 => 'Block_142455856567ab31662eaf74_68572019',
  ),
  'layout-header-nav-icons-include-header-shop-nav-wish' => 
  array (
    0 => 'Block_162013480467ab31662eb2f0_37056198',
  ),
  'layout-header-nav-icons-include-cart-dropdown-label' => 
  array (
    0 => 'Block_127317708767ab31662eb663_98215368',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_block_plugin32 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin32, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"));
$_block_repeat=true;
echo $_block_plugin32->render(array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137383552167ab31662e9257_48033962', 'layout-header-nav-icons-include-header-nav-search', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199120866167ab31662e9981_88675845', 'layout-header-nav-icons-include-currency-dropdown', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201199786767ab31662ea0b3_13189210', 'layout-header-nav-icons-include-language-dropdown', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155216613567ab31662ea866_17493131', 'layout-header-nav-icons-include-header-shop-nav-account', $this->tplIndex);
?>

        <?php if (!($_smarty_tpl->tpl_vars['isMobile']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['vergleichsliste']['vergleichsliste_anzeigen'] === 'Y') {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142455856567ab31662eaf74_68572019', 'layout-header-nav-icons-include-header-shop-nav-compare', $this->tplIndex);
?>

            <?php }?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162013480467ab31662eb2f0_37056198', 'layout-header-nav-icons-include-header-shop-nav-wish', $this->tplIndex);
?>

        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127317708767ab31662eb663_98215368', 'layout-header-nav-icons-include-cart-dropdown-label', $this->tplIndex);
?>

    <?php $_block_repeat=false;
echo $_block_plugin32->render(array('id'=>"shop-nav",'right'=>true,'class'=>"nav-right order-lg-last nav-icons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-header-nav-icons'} */
}
