<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:39:31
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/boxes/box_filter_search_special.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab36f34ae854_40397618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1de41d4a5cb47ce162cf02529671ada6eddcdf6' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/boxes/box_filter_search_special.tpl',
      1 => 1739261159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/filter/genericFilterItem.tpl' => 1,
  ),
),false)) {
function content_67ab36f34ae854_40397618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29485599367ab36f34a71e3_40217520', 'boxes-box-filter-search-special');
?>

<?php }
/* {block 'boxes-box-filter-search-special-content'} */
class Block_207315744167ab36f34ad1b0_45214122 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/filter/genericFilterItem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter'=>$_smarty_tpl->tpl_vars['ssf']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'boxes-box-filter-search-special-content'} */
/* {block 'boxes-box-filter-search-special-hr'} */
class Block_111151907467ab36f34ae1b4_73469883 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <hr class="box-filter-hr">
                <?php
}
}
/* {/block 'boxes-box-filter-search-special-hr'} */
/* {block 'boxes-box-filter-search-special'} */
class Block_29485599367ab36f34a71e3_40217520 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-filter-search-special' => 
  array (
    0 => 'Block_29485599367ab36f34a71e3_40217520',
  ),
  'boxes-box-filter-search-special-content' => 
  array (
    0 => 'Block_207315744167ab36f34ad1b0_45214122',
  ),
  'boxes-box-filter-search-special-hr' => 
  array (
    0 => 'Block_111151907467ab36f34ae1b4_73469883',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('ssf', $_smarty_tpl->tpl_vars['NaviFilter']->value->getSearchSpecialFilter());?>
    <?php if ($_smarty_tpl->tpl_vars['bBoxenFilterNach']->value && $_smarty_tpl->tpl_vars['ssf']->value->getVisibility() !== JTL\Filter\Visibility::SHOW_NEVER && $_smarty_tpl->tpl_vars['ssf']->value->getVisibility() !== JTL\Filter\Visibility::SHOW_CONTENT && (!empty($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchSpecialFilterOptions()) || $_smarty_tpl->tpl_vars['ssf']->value->isInitialized()) && !($_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_placement'] === 'modal')) {?>
        <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null)) {?>
            <div id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
" class="box box-filter-special d-none d-lg-block">
                <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin1->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span class="text-truncate">
                        <?php echo $_smarty_tpl->tpl_vars['ssf']->value->getFrontendName();?>

                    </span>
                <?php $_block_repeat=false;
echo $_block_plugin1->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>$_smarty_tpl->tpl_vars['ssf']->value->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y'));
$_block_repeat=true;
echo $_block_plugin2->render(array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>$_smarty_tpl->tpl_vars['ssf']->value->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207315744167ab36f34ad1b0_45214122', 'boxes-box-filter-search-special-content', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin2->render(array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>$_smarty_tpl->tpl_vars['ssf']->value->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111151907467ab36f34ae1b4_73469883', 'boxes-box-filter-search-special-hr', $this->tplIndex);
?>

            </div>
        <?php }?>
    <?php }
}
}
/* {/block 'boxes-box-filter-search-special'} */
}
