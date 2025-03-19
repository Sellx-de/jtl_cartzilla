<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:39:31
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/boxes/box_comparelist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab36f34cdca9_50819154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2ecd0d8ca195de5f7d6a425307eb7742aef0671' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/boxes/box_comparelist.tpl',
      1 => 1739261159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
  ),
),false)) {
function content_67ab36f34cdca9_50819154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85763099367ab36f34c5707_98129490', 'boxes-box-comparelist');
?>

<?php }
/* {block 'boxes-box-comparelist-toggle-title'} */
class Block_176111318867ab36f34c6678_16302621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"));
$_block_repeat=true;
echo $_block_plugin14->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin14->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'boxes-box-comparelist-toggle-title'} */
/* {block 'boxes-box-comparelist-title'} */
class Block_134411460967ab36f34c7744_33836668 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="productlist-filter-headline align-items-center-util d-none d-md-flex">
                        <i class='fas fa-list icon-mr-2'></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block 'boxes-box-comparelist-title'} */
/* {block 'boxes-box-comparelist-dropdown-products-image'} */
class Block_30877993867ab36f34c93b2_78869608 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin18->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['product']->value,'square'=>false,'srcSize'=>'xs','sizes'=>'45px'), 0, true);
?>
                                                            <?php $_block_repeat=false;
echo $_block_plugin18->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-image'} */
/* {block 'boxes-box-comparelist-dropdown-products-title'} */
class Block_142010063167ab36f34c9c25_11545869 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin20->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->cName,40,'...' ));
$_block_repeat=false;
echo $_block_plugin20->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-title'} */
/* {block 'boxes-box-comparelist-dropdown-products-image-title'} */
class Block_42694772467ab36f34c8f95_26826330 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array('class'=>"align-items-center-util"));
$_block_repeat=true;
echo $_block_plugin16->render(array('class'=>"align-items-center-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin17->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30877993867ab36f34c93b2_78869608', 'boxes-box-comparelist-dropdown-products-image', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin17->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php $_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin19->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142010063167ab36f34c9c25_11545869', 'boxes-box-comparelist-dropdown-products-title', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin19->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin16->render(array('class'=>"align-items-center-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-image-title'} */
/* {block 'boxes-box-comparelist-dropdown-products-remove'} */
class Block_165463260467ab36f34ca5d4_17522773 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>"comparelist",'key'=>"removeFromCompareList"),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
ob_start();?>{<?php $_prefixVariable5=ob_get_clean();
ob_start();?>}<?php $_prefixVariable6=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>"comparelist",'key'=>"removeFromCompareList"),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
$_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLDEL,'class'=>"remove",'title'=>$_prefixVariable4,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable5.((string)$_smarty_tpl->tpl_vars['id']->value).":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable6),'aria'=>array("label"=>$_prefixVariable7)));
$_block_repeat=true;
echo $_block_plugin21->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLDEL,'class'=>"remove",'title'=>$_prefixVariable4,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable5.((string)$_smarty_tpl->tpl_vars['id']->value).":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable6),'aria'=>array("label"=>$_prefixVariable7)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <span class="fas fa-times"></span>
                                                <?php $_block_repeat=false;
echo $_block_plugin21->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLDEL,'class'=>"remove",'title'=>$_prefixVariable4,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable5.((string)$_smarty_tpl->tpl_vars['id']->value).":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable6),'aria'=>array("label"=>$_prefixVariable7)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-remove'} */
/* {block 'boxes-box-comparelist-products'} */
class Block_89716707467ab36f34c8289_28159186 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <table class="table table-vertical-middle table-striped table-img">
                                <tbody>
                                    <?php $_smarty_tpl->_assignInScope('id', htmlspecialchars((string)'"a"', ENT_QUOTES, 'utf-8', true));?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oBox']->value->getProducts(), 'product');
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$__foreach_product_1_saved = $_smarty_tpl->tpl_vars['product'];
?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->iteration > $_smarty_tpl->tpl_vars['maxItems']->value) {?>
                                            <?php break 1;?>
                                        <?php }?>
                                        <tr>
                                        <td class="w-100-util" data-id=<?php echo $_smarty_tpl->tpl_vars['product']->value->kArtikel;?>
>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42694772467ab36f34c8f95_26826330', 'boxes-box-comparelist-dropdown-products-image-title', $this->tplIndex);
?>

                                        </td>
                                        <td class="box-delete-button">
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165463260467ab36f34ca5d4_17522773', 'boxes-box-comparelist-dropdown-products-remove', $this->tplIndex);
?>

                                        </td>
                                    <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        <?php
}
}
/* {/block 'boxes-box-comparelist-products'} */
/* {block 'boxes-box-comparelist-link'} */
class Block_150352256067ab36f34cc195_48898504 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <hr class="hr-no-top">
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['vergleichsliste']['vergleichsliste_target'] === 'popup') {
echo " popup";
}
$_prefixVariable8=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'vergleichsliste.php'),$_smarty_tpl ) );
$_prefixVariable9=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['vergleichsliste']['vergleichsliste_target'] === 'blank') {
echo "_blank";
} else {
echo "_self";
}
$_prefixVariable10=ob_get_clean();
$_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"btn btn-outline-primary btn-sm btn-block".$_prefixVariable8,'href'=>$_prefixVariable9,'target'=>$_prefixVariable10,'data'=>array("modal-classes"=>"modal-fullwidth")));
$_block_repeat=true;
echo $_block_plugin22->render(array('class'=>"btn btn-outline-primary btn-sm btn-block".$_prefixVariable8,'href'=>$_prefixVariable9,'target'=>$_prefixVariable10,'data'=>array("modal-classes"=>"modal-fullwidth")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gotToCompare'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin22->render(array('class'=>"btn btn-outline-primary btn-sm btn-block".$_prefixVariable8,'href'=>$_prefixVariable9,'target'=>$_prefixVariable10,'data'=>array("modal-classes"=>"modal-fullwidth")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'boxes-box-comparelist-link'} */
/* {block 'boxes-box-comparelist-collapse'} */
class Block_185771199367ab36f34c7a76_51960940 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin15->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89716707467ab36f34c8289_28159186', 'boxes-box-comparelist-products', $this->tplIndex);
?>

                        <?php if ($_smarty_tpl->tpl_vars['itemCount']->value > 1) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150352256067ab36f34cc195_48898504', 'boxes-box-comparelist-link', $this->tplIndex);
?>

                        <?php }?>
                    <?php $_block_repeat=false;
echo $_block_plugin15->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'boxes-box-comparelist-collapse'} */
/* {block 'boxes-box-comparelist-content'} */
class Block_118713550967ab36f34c6549_09506038 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176111318867ab36f34c6678_16302621', 'boxes-box-comparelist-toggle-title', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134411460967ab36f34c7744_33836668', 'boxes-box-comparelist-title', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185771199367ab36f34c7a76_51960940', 'boxes-box-comparelist-collapse', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'boxes-box-comparelist-content'} */
/* {block 'boxes-box-comparelist-hr-end'} */
class Block_59990988367ab36f34cd479_54786669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <hr class="box-normal-hr">
            <?php
}
}
/* {/block 'boxes-box-comparelist-hr-end'} */
/* {block 'blog-preview-no-items'} */
class Block_1653706367ab36f34cd6e1_02511805 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section class="d-none box-compare" id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
"></section>
        <?php
}
}
/* {/block 'blog-preview-no-items'} */
/* {block 'boxes-box-comparelist'} */
class Block_85763099367ab36f34c5707_98129490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-comparelist' => 
  array (
    0 => 'Block_85763099367ab36f34c5707_98129490',
  ),
  'boxes-box-comparelist-content' => 
  array (
    0 => 'Block_118713550967ab36f34c6549_09506038',
  ),
  'boxes-box-comparelist-toggle-title' => 
  array (
    0 => 'Block_176111318867ab36f34c6678_16302621',
  ),
  'boxes-box-comparelist-title' => 
  array (
    0 => 'Block_134411460967ab36f34c7744_33836668',
  ),
  'boxes-box-comparelist-collapse' => 
  array (
    0 => 'Block_185771199367ab36f34c7a76_51960940',
  ),
  'boxes-box-comparelist-products' => 
  array (
    0 => 'Block_89716707467ab36f34c8289_28159186',
  ),
  'boxes-box-comparelist-dropdown-products-image-title' => 
  array (
    0 => 'Block_42694772467ab36f34c8f95_26826330',
  ),
  'boxes-box-comparelist-dropdown-products-image' => 
  array (
    0 => 'Block_30877993867ab36f34c93b2_78869608',
  ),
  'boxes-box-comparelist-dropdown-products-title' => 
  array (
    0 => 'Block_142010063167ab36f34c9c25_11545869',
  ),
  'boxes-box-comparelist-dropdown-products-remove' => 
  array (
    0 => 'Block_165463260467ab36f34ca5d4_17522773',
  ),
  'boxes-box-comparelist-link' => 
  array (
    0 => 'Block_150352256067ab36f34cc195_48898504',
  ),
  'boxes-box-comparelist-hr-end' => 
  array (
    0 => 'Block_59990988367ab36f34cd479_54786669',
  ),
  'blog-preview-no-items' => 
  array (
    0 => 'Block_1653706367ab36f34cd6e1_02511805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['vergleichsliste']['vergleichsliste_anzeigen'] === 'Y') {?>
    <?php $_smarty_tpl->_assignInScope('maxItems', $_smarty_tpl->tpl_vars['oBox']->value->getItemCount());?>
    <?php $_smarty_tpl->_assignInScope('itemCount', count($_smarty_tpl->tpl_vars['oBox']->value->getProducts()));?>
    <?php if ($_smarty_tpl->tpl_vars['itemCount']->value > 0) {?>
        <div class="box box-compare box-normal" id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118713550967ab36f34c6549_09506038', 'boxes-box-comparelist-content', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59990988367ab36f34cd479_54786669', 'boxes-box-comparelist-hr-end', $this->tplIndex);
?>

        </div>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1653706367ab36f34cd6e1_02511805', 'blog-preview-no-items', $this->tplIndex);
?>

    <?php }?>
    <?php }
}
}
/* {/block 'boxes-box-comparelist'} */
}
