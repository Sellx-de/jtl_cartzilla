<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/header_shop_nav_wish.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab316633fc18_73717210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4368a1b94f24eac686e51ba62e2800cbafba20a' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/header_shop_nav_wish.tpl',
      1 => 1739261160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/wishlist_dropdown.tpl' => 1,
  ),
),false)) {
function content_67ab316633fc18_73717210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98921523067ab316633d8f1_55051069', 'layout-header-shop-nav-wish');
?>

<?php }
/* {block 'layout-header-shop-nav-wish-link'} */
class Block_149873287367ab316633e9f0_56499914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wishlist'),$_smarty_tpl ) );
$_prefixVariable42 = ob_get_clean();
$_block_plugin62 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin62, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable42),'data'=>array('toggle'=>'dropdown')));
$_block_repeat=true;
echo $_block_plugin62->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable42),'data'=>array('toggle'=>'dropdown')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <i class="fas fa-heart">
                        <span id="badge-wl-count" class="fa-sup <?php if ($_smarty_tpl->tpl_vars['wlCount']->value === 0) {?> d-none<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['wlCount']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['wlCount']->value;?>

                        </span>
                    </i>
                <?php $_block_repeat=false;
echo $_block_plugin62->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable42),'data'=>array('toggle'=>'dropdown')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-shop-nav-wish-link'} */
/* {block 'layout-header-shop-nav-wish-include-wishlist-dropdown'} */
class Block_195369272567ab316633f690_40720320 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:snippets/wishlist_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'layout-header-shop-nav-wish-include-wishlist-dropdown'} */
/* {block 'layout-header-shop-nav-wish-dropdown'} */
class Block_91076387667ab316633f561_97175819 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="nav-wishlist-collapse" class="dropdown-menu dropdown-menu-right lg-min-w-lg">
                    <div id="wishlist-dropdown-container">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195369272567ab316633f690_40720320', 'layout-header-shop-nav-wish-include-wishlist-dropdown', $this->tplIndex);
?>

                    </div>
                </div>
            <?php
}
}
/* {/block 'layout-header-shop-nav-wish-dropdown'} */
/* {block 'layout-header-shop-nav-wish'} */
class Block_98921523067ab316633d8f1_55051069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-shop-nav-wish' => 
  array (
    0 => 'Block_98921523067ab316633d8f1_55051069',
  ),
  'layout-header-shop-nav-wish-link' => 
  array (
    0 => 'Block_149873287367ab316633e9f0_56499914',
  ),
  'layout-header-shop-nav-wish-dropdown' => 
  array (
    0 => 'Block_91076387667ab316633f561_97175819',
  ),
  'layout-header-shop-nav-wish-include-wishlist-dropdown' => 
  array (
    0 => 'Block_195369272567ab316633f690_40720320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['wishlists']->value) && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_wunschliste_anzeigen'] === 'Y') {?>
        <?php $_smarty_tpl->_assignInScope('wlCount', 0);?>
        <?php if (JTL\Session\Frontend::getWishlist()->getID() > 0) {?>
            <?php $_smarty_tpl->_assignInScope('wlCount', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( JTL\Session\Frontend::getWishlist()->getItems() )));?>
        <?php }?>
        <li id='shop-nav-wish'
            class="nav-item dropdown <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_WUNSCHLISTE') ? constant('PAGE_WUNSCHLISTE') : null)) {?> active<?php }?>">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149873287367ab316633e9f0_56499914', 'layout-header-shop-nav-wish-link', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91076387667ab316633f561_97175819', 'layout-header-shop-nav-wish-dropdown', $this->tplIndex);
?>

        </li>
    <?php }
}
}
/* {/block 'layout-header-shop-nav-wish'} */
}
