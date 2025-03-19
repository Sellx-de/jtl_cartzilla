<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:39:31
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/boxes/box_filter_pricerange.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab36f34b5146_00192343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4478ad9957af232a2983b3405c09c8d4ad663e9' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/boxes/box_filter_pricerange.tpl',
      1 => 1739261158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/filter/price_slider.tpl' => 1,
  ),
),false)) {
function content_67ab36f34b5146_00192343 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9614665067ab36f34b16d1_27410406', 'boxes-box-filter-pricerange');
?>

<?php }
/* {block 'boxes-box-filter-pricerange-include-price-slider'} */
class Block_197130115967ab36f34b44b4_94563449 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/filter/price_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'price-slider-box'), 0, false);
?>
                    <?php
}
}
/* {/block 'boxes-box-filter-pricerange-include-price-slider'} */
/* {block 'boxes-box-filter-pricerange-hr'} */
class Block_19587402467ab36f34b4b21_81280402 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <hr class="box-filter-hr">
                <?php
}
}
/* {/block 'boxes-box-filter-pricerange-hr'} */
/* {block 'boxes-box-filter-pricerange-content'} */
class Block_110374964167ab36f34b2713_03798551 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
" class="box box-filter-price d-none d-lg-block js-price-range-box">
                <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin3->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span class="text-truncate">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'rangeOfPrices'),$_smarty_tpl ) );?>

                    </span>
                <?php $_block_repeat=false;
echo $_block_plugin3->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('class'=>"box-filter-price-collapse",'id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>true));
$_block_repeat=true;
echo $_block_plugin4->render(array('class'=>"box-filter-price-collapse",'id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197130115967ab36f34b44b4_94563449', 'boxes-box-filter-pricerange-include-price-slider', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin4->render(array('class'=>"box-filter-price-collapse",'id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19587402467ab36f34b4b21_81280402', 'boxes-box-filter-pricerange-hr', $this->tplIndex);
?>

            </div>
        <?php
}
}
/* {/block 'boxes-box-filter-pricerange-content'} */
/* {block 'boxes-box-filter-pricerange'} */
class Block_9614665067ab36f34b16d1_27410406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-filter-pricerange' => 
  array (
    0 => 'Block_9614665067ab36f34b16d1_27410406',
  ),
  'boxes-box-filter-pricerange-content' => 
  array (
    0 => 'Block_110374964167ab36f34b2713_03798551',
  ),
  'boxes-box-filter-pricerange-include-price-slider' => 
  array (
    0 => 'Block_197130115967ab36f34b44b4_94563449',
  ),
  'boxes-box-filter-pricerange-hr' => 
  array (
    0 => 'Block_19587402467ab36f34b4b21_81280402',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['oBox']->value->getItems()->getOptions()) && $_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) && !($_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_placement'] === 'modal')) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110374964167ab36f34b2713_03798551', 'boxes-box-filter-pricerange-content', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'boxes-box-filter-pricerange'} */
}
