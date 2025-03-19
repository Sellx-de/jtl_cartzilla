<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/header_logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31662d8d48_72216546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4e8ac48e58d2ca85ea9953604f629b7d2e39e8b' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/header_logo.tpl',
      1 => 1739261159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab31662d8d48_72216546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44498996767ab31662d7344_82646478', 'layout-header-logo');
?>

<?php }
/* {block 'layout-header-logo-navbar-toggle'} */
class Block_24821681167ab31662d7523_47656017 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <button id="burger-menu" class="burger-menu-wrapper navbar-toggler collapsed <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?>d-none<?php }?>" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <?php
}
}
/* {/block 'layout-header-logo-navbar-toggle'} */
/* {block 'layout-header-logo-logo'} */
class Block_103416093067ab31662d7b36_17242844 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="logo" class="logo-wrapper" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                <span itemprop="name" class="d-none"><?php echo $_smarty_tpl->tpl_vars['meta_publisher']->value;?>
</span>
                <meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['ShopHomeURL']->value;?>
">
                <meta itemprop="logo" content="<?php echo $_smarty_tpl->tpl_vars['ShopLogoURL']->value;?>
">
                <?php $_block_plugin31 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin31, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"navbar-brand",'href'=>$_smarty_tpl->tpl_vars['ShopHomeURL']->value,'title'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname']));
$_block_repeat=true;
echo $_block_plugin31->render(array('class'=>"navbar-brand",'href'=>$_smarty_tpl->tpl_vars['ShopHomeURL']->value,'title'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ((isset($_smarty_tpl->tpl_vars['ShopLogoURL']->value))) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('width'=>180,'height'=>50,'src'=>$_smarty_tpl->tpl_vars['ShopLogoURL']->value,'alt'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname'],'id'=>"shop-logo"),$_smarty_tpl ) );?>

                <?php } else { ?>
                    <span class="h1"><?php echo $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname'];?>
</span>
                <?php }?>
                <?php $_block_repeat=false;
echo $_block_plugin31->render(array('class'=>"navbar-brand",'href'=>$_smarty_tpl->tpl_vars['ShopHomeURL']->value,'title'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        <?php
}
}
/* {/block 'layout-header-logo-logo'} */
/* {block 'layout-header-logo'} */
class Block_44498996767ab31662d7344_82646478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-logo' => 
  array (
    0 => 'Block_44498996767ab31662d7344_82646478',
  ),
  'layout-header-logo-navbar-toggle' => 
  array (
    0 => 'Block_24821681167ab31662d7523_47656017',
  ),
  'layout-header-logo-logo' => 
  array (
    0 => 'Block_103416093067ab31662d7b36_17242844',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="toggler-logo-wrapper">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24821681167ab31662d7523_47656017', 'layout-header-logo-navbar-toggle', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103416093067ab31662d7b36_17242844', 'layout-header-logo-logo', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'layout-header-logo'} */
}
