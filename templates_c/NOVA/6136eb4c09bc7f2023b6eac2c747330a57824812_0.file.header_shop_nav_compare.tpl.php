<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/header_shop_nav_compare.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab3166330716_02113110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6136eb4c09bc7f2023b6eac2c747330a57824812' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/header_shop_nav_compare.tpl',
      1 => 1739261160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/comparelist_dropdown.tpl' => 1,
  ),
),false)) {
function content_67ab3166330716_02113110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3224410467ab316632eb05_64121264', 'layout-header-shop-nav-compare');
?>

<?php }
/* {block 'layout-header-shop-nav-compare-link'} */
class Block_210865442767ab316632f6d7_63318755 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );
$_prefixVariable36 = ob_get_clean();
$_block_plugin54 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin54, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>'nav-link','data'=>array('toggle'=>'dropdown'),'aria'=>array('haspopup'=>'true','expanded'=>'false','label'=>$_prefixVariable36)));
$_block_repeat=true;
echo $_block_plugin54->render(array('class'=>'nav-link','data'=>array('toggle'=>'dropdown'),'aria'=>array('haspopup'=>'true','expanded'=>'false','label'=>$_prefixVariable36)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <i class="fas fa-list">
                    <span id="comparelist-badge" class="fa-sup"
                          title="<?php echo $_smarty_tpl->tpl_vars['productCount']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['productCount']->value;?>

                    </span>
                </i>
            <?php $_block_repeat=false;
echo $_block_plugin54->render(array('class'=>'nav-link','data'=>array('toggle'=>'dropdown'),'aria'=>array('haspopup'=>'true','expanded'=>'false','label'=>$_prefixVariable36)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'layout-header-shop-nav-compare-link'} */
/* {block 'layout-header-shop-nav-compare-include-comparelist-dropdown'} */
class Block_106611233267ab3166330205_72684319 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/comparelist_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-header-shop-nav-compare-include-comparelist-dropdown'} */
/* {block 'layout-header-shop-nav-compare-dropdown'} */
class Block_97724970867ab31663300d0_97538009 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="comparelist-dropdown-container" class="dropdown-menu dropdown-menu-right lg-min-w-lg">
                <div id='comparelist-dropdown-content'>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106611233267ab3166330205_72684319', 'layout-header-shop-nav-compare-include-comparelist-dropdown', $this->tplIndex);
?>

                </div>
            </div>
        <?php
}
}
/* {/block 'layout-header-shop-nav-compare-dropdown'} */
/* {block 'layout-header-shop-nav-compare'} */
class Block_3224410467ab316632eb05_64121264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-shop-nav-compare' => 
  array (
    0 => 'Block_3224410467ab316632eb05_64121264',
  ),
  'layout-header-shop-nav-compare-link' => 
  array (
    0 => 'Block_210865442767ab316632f6d7_63318755',
  ),
  'layout-header-shop-nav-compare-dropdown' => 
  array (
    0 => 'Block_97724970867ab31663300d0_97538009',
  ),
  'layout-header-shop-nav-compare-include-comparelist-dropdown' => 
  array (
    0 => 'Block_106611233267ab3166330205_72684319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('productCount', count(JTL\Session\Frontend::getCompareList()->oArtikel_arr));?>
    <li id="shop-nav-compare"
        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );?>
"
        class="nav-item dropdown<?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_VERGLEICHSLISTE') ? constant('PAGE_VERGLEICHSLISTE') : null)) {?> active<?php }?> <?php if ($_smarty_tpl->tpl_vars['productCount']->value === 0) {?>d-none<?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210865442767ab316632f6d7_63318755', 'layout-header-shop-nav-compare-link', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97724970867ab31663300d0_97538009', 'layout-header-shop-nav-compare-dropdown', $this->tplIndex);
?>

    </li>
<?php
}
}
/* {/block 'layout-header-shop-nav-compare'} */
}
