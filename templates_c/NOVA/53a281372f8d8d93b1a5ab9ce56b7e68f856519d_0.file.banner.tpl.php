<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31668f7b81_88859636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53a281372f8d8d93b1a5ab9ce56b7e68f856519d' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/banner.tpl',
      1 => 1739261177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
  ),
),false)) {
function content_67ab31668f7b81_88859636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8231331567ab31668f1373_09678807', 'snippets-banner');
?>

<?php }
/* {block 'snippets-banner-image'} */
class Block_171218394167ab31668f1f96_51471385 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('fluid'=>true,'lazy'=>true,'src'=>$_smarty_tpl->tpl_vars['oImageMap']->value->cBildPfad,'alt'=>$_smarty_tpl->tpl_vars['oImageMap']->value->cTitel,'width'=>$_smarty_tpl->tpl_vars['oImageMap']->value->fWidth,'height'=>$_smarty_tpl->tpl_vars['oImageMap']->value->fHeight),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'snippets-banner-image'} */
/* {block 'snippets-banner-map-area-image'} */
class Block_174512300167ab31668f6905_44756455 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="snippets-banner-image"><?php if ($_smarty_tpl->tpl_vars['oArtikel']->value !== null) {
$_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['oArtikel']->value,'square'=>false), 0, true);
}?></div><?php if (strlen((string) $_smarty_tpl->tpl_vars['oImageMapArea']->value->cBeschreibung) > 0) {?><p class="snippets-banner-desc"><?php echo $_smarty_tpl->tpl_vars['oImageMapArea']->value->cBeschreibung;?>
</p><?php }
}
}
/* {/block 'snippets-banner-map-area-image'} */
/* {block 'snippets-banner-map'} */
class Block_137677112967ab31668f27a3_73392428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oImageMap']->value->oArea_arr, 'oImageMapArea');
$_smarty_tpl->tpl_vars['oImageMapArea']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oImageMapArea']->value) {
$_smarty_tpl->tpl_vars['oImageMapArea']->do_else = false;
?>
                        <?php ob_start();
echo smarty_function_math(array('equation'=>"(100/bWidth)*posX",'bWidth'=>$_smarty_tpl->tpl_vars['oImageMap']->value->fWidth,'posX'=>$_smarty_tpl->tpl_vars['oImageMapArea']->value->oCoords->x),$_smarty_tpl);
$_prefixVariable74=ob_get_clean();
ob_start();
echo smarty_function_math(array('equation'=>"(100/bHeight)*posY",'bHeight'=>$_smarty_tpl->tpl_vars['oImageMap']->value->fHeight,'posY'=>$_smarty_tpl->tpl_vars['oImageMapArea']->value->oCoords->y),$_smarty_tpl);
$_prefixVariable75=ob_get_clean();
ob_start();
echo smarty_function_math(array('equation'=>"(100/bWidth)*aWidth",'bWidth'=>$_smarty_tpl->tpl_vars['oImageMap']->value->fWidth,'aWidth'=>$_smarty_tpl->tpl_vars['oImageMapArea']->value->oCoords->w),$_smarty_tpl);
$_prefixVariable76=ob_get_clean();
ob_start();
echo smarty_function_math(array('equation'=>"(100/bHeight)*aHeight",'bHeight'=>$_smarty_tpl->tpl_vars['oImageMap']->value->fHeight,'aHeight'=>$_smarty_tpl->tpl_vars['oImageMapArea']->value->oCoords->h),$_smarty_tpl);
$_prefixVariable77=ob_get_clean();
ob_start();
echo preg_replace("%(?<!\\\\)'%", "\'", (string)htmlspecialchars((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_tags' ][ 0 ], array( $_smarty_tpl->tpl_vars['oImageMapArea']->value->cTitel )), ENT_QUOTES, 'utf-8', true));
$_prefixVariable78=ob_get_clean();
$_block_plugin139 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin139, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oImageMapArea']->value->cUrl,'class'=>"area ".((string)$_smarty_tpl->tpl_vars['oImageMapArea']->value->cStyle),'style'=>"left:".$_prefixVariable74."%;top:".$_prefixVariable75."%;width:".$_prefixVariable76."%;height:".$_prefixVariable77."%",'title'=>$_prefixVariable78));
$_block_repeat=true;
echo $_block_plugin139->render(array('href'=>$_smarty_tpl->tpl_vars['oImageMapArea']->value->cUrl,'class'=>"area ".((string)$_smarty_tpl->tpl_vars['oImageMapArea']->value->cStyle),'style'=>"left:".$_prefixVariable74."%;top:".$_prefixVariable75."%;width:".$_prefixVariable76."%;height:".$_prefixVariable77."%",'title'=>$_prefixVariable78), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['oImageMapArea']->value->oArtikel || strlen((string) $_smarty_tpl->tpl_vars['oImageMapArea']->value->cBeschreibung) > 0) {
$_smarty_tpl->_assignInScope('oArtikel', $_smarty_tpl->tpl_vars['oImageMapArea']->value->oArtikel);?><div class="area-desc"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174512300167ab31668f6905_44756455', 'snippets-banner-map-area-image', $this->tplIndex);
?>
</div><?php }
$_block_repeat=false;
echo $_block_plugin139->render(array('href'=>$_smarty_tpl->tpl_vars['oImageMapArea']->value->cUrl,'class'=>"area ".((string)$_smarty_tpl->tpl_vars['oImageMapArea']->value->cStyle),'style'=>"left:".$_prefixVariable74."%;top:".$_prefixVariable75."%;width:".$_prefixVariable76."%;height:".$_prefixVariable77."%",'title'=>$_prefixVariable78), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
}
/* {/block 'snippets-banner-map'} */
/* {block 'snippets-banner'} */
class Block_8231331567ab31668f1373_09678807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-banner' => 
  array (
    0 => 'Block_8231331567ab31668f1373_09678807',
  ),
  'snippets-banner-image' => 
  array (
    0 => 'Block_171218394167ab31668f1f96_51471385',
  ),
  'snippets-banner-map' => 
  array (
    0 => 'Block_137677112967ab31668f27a3_73392428',
  ),
  'snippets-banner-map-area-image' => 
  array (
    0 => 'Block_174512300167ab31668f6905_44756455',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['oImageMap']->value))) {?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {
echo "container-plus-sidebar";
}
$_prefixVariable73=ob_get_clean();
$_block_plugin138 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin138, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['isFluid']->value,'class'=>$_prefixVariable73));
$_block_repeat=true;
echo $_block_plugin138->render(array('fluid'=>$_smarty_tpl->tpl_vars['isFluid']->value,'class'=>$_prefixVariable73), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_banner'),$_smarty_tpl ) );?>

            <div class="banner snippets-banner">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171218394167ab31668f1f96_51471385', 'snippets-banner-image', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137677112967ab31668f27a3_73392428', 'snippets-banner-map', $this->tplIndex);
?>

            </div>
        <?php $_block_repeat=false;
echo $_block_plugin138->render(array('fluid'=>$_smarty_tpl->tpl_vars['isFluid']->value,'class'=>$_prefixVariable73), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
/* {/block 'snippets-banner'} */
}
