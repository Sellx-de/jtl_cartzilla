<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:39:31
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/page/sitemap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab36f3506164_40486220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9973a73802dd2472b7b779aedc3191c76292a6c' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/page/sitemap.tpl',
      1 => 1739261170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/linkgroup_list.tpl' => 1,
  ),
),false)) {
function content_67ab36f3506164_40486220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155588178667ab36f34f53b1_59606906', 'page-sitemap');
?>

<?php }
/* {block 'page-sitemap-include-linkgroup-list'} */
class Block_94255555767ab36f34f75a0_14985164 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/linkgroup_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkgroupIdentifier'=>$_smarty_tpl->tpl_vars['linkgroup']->value->getTemplate(),'tplscope'=>'sitemap'), 0, true);
?>
                                            <?php
}
}
/* {/block 'page-sitemap-include-linkgroup-list'} */
/* {block 'page-sitemap-pages-content'} */
class Block_183654555467ab36f34f65c8_95127339 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin28->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkgroups']->value, 'linkgroup');
$_smarty_tpl->tpl_vars['linkgroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkgroup']->value) {
$_smarty_tpl->tpl_vars['linkgroup']->do_else = false;
?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['linkgroup']->value->getName()) && $_smarty_tpl->tpl_vars['linkgroup']->value->getName() !== 'hidden' && !empty($_smarty_tpl->tpl_vars['linkgroup']->value->getLinks())) {?>
                                    <?php $_block_plugin29 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin29, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin29->render(array('cols'=>12,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_block_plugin30 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin30, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('vertical'=>true));
$_block_repeat=true;
echo $_block_plugin30->render(array('vertical'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94255555767ab36f34f75a0_14985164', 'page-sitemap-include-linkgroup-list', $this->tplIndex);
?>

                                        <?php $_block_repeat=false;
echo $_block_plugin30->render(array('vertical'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin29->render(array('cols'=>12,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php $_block_repeat=false;
echo $_block_plugin28->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'page-sitemap-pages-content'} */
/* {block 'page-sitemap-pages'} */
class Block_48679979067ab36f34f57a2_84258948 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_pages','inContainer'=>false),$_smarty_tpl ) );?>

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {
echo "container-plus-sidebar";
}
$_prefixVariable15=ob_get_clean();
$_block_plugin26 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin26, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-linkgroup ".$_prefixVariable15));
$_block_repeat=true;
echo $_block_plugin26->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-linkgroup ".$_prefixVariable15), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sitemapSites'),$_smarty_tpl ) );
$_prefixVariable16 = ob_get_clean();
$_block_plugin27 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin27, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('header'=>$_prefixVariable16,'class'=>"sitemap-group"));
$_block_repeat=true;
echo $_block_plugin27->render(array('header'=>$_prefixVariable16,'class'=>"sitemap-group"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183654555467ab36f34f65c8_95127339', 'page-sitemap-pages-content', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin27->render(array('header'=>$_prefixVariable16,'class'=>"sitemap-group"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin26->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-linkgroup ".$_prefixVariable15), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'page-sitemap-pages'} */
/* {block 'page-sitemap-categories-content'} */
class Block_169098981967ab36f34f9603_98284285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin33 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin33, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin33->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oKategorieliste']->value->elemente, 'oKategorie');
$_smarty_tpl->tpl_vars['oKategorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oKategorie']->value) {
$_smarty_tpl->tpl_vars['oKategorie']->do_else = false;
?>
                                <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['oKategorie']->value->getChildren() )) > 0) {?>
                                    <?php $_block_plugin34 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin34, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin34->render(array('cols'=>12,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <ul class="list-unstyled">
                                            <li>
                                                <?php $_block_plugin35 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin35, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getURL(),'title'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['oKategorie']->value->getName(), ENT_QUOTES, 'utf-8', true),'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin35->render(array('href'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getURL(),'title'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['oKategorie']->value->getName(), ENT_QUOTES, 'utf-8', true),'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['oKategorie']->value->getShortName();?>
</strong>
                                                <?php $_block_repeat=false;
echo $_block_plugin35->render(array('href'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getURL(),'title'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['oKategorie']->value->getName(), ENT_QUOTES, 'utf-8', true),'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oKategorie']->value->getChildren(), 'oSubKategorie');
$_smarty_tpl->tpl_vars['oSubKategorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oSubKategorie']->value) {
$_smarty_tpl->tpl_vars['oSubKategorie']->do_else = false;
?>
                                                <li>
                                                    <?php $_block_plugin36 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin36, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oSubKategorie']->value->getURL(),'title'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['oKategorie']->value->getName(), ENT_QUOTES, 'utf-8', true),'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin36->render(array('href'=>$_smarty_tpl->tpl_vars['oSubKategorie']->value->getURL(),'title'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['oKategorie']->value->getName(), ENT_QUOTES, 'utf-8', true),'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php echo $_smarty_tpl->tpl_vars['oSubKategorie']->value->getShortName();?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin36->render(array('href'=>$_smarty_tpl->tpl_vars['oSubKategorie']->value->getURL(),'title'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['oKategorie']->value->getName(), ENT_QUOTES, 'utf-8', true),'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </li>
                                                <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['oSubKategorie']->value->getChildren() )) > 0) {?>
                                                    <li>
                                                        <ul class="sub-categories list-unstyled">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oSubKategorie']->value->getChildren(), 'oSubSubKategorie');
$_smarty_tpl->tpl_vars['oSubSubKategorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oSubSubKategorie']->value) {
$_smarty_tpl->tpl_vars['oSubSubKategorie']->do_else = false;
?>
                                                                <li>
                                                                    <?php $_block_plugin37 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin37, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oSubSubKategorie']->value->getURL(),'title'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['oKategorie']->value->getName(), ENT_QUOTES, 'utf-8', true),'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin37->render(array('href'=>$_smarty_tpl->tpl_vars['oSubSubKategorie']->value->getURL(),'title'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['oKategorie']->value->getName(), ENT_QUOTES, 'utf-8', true),'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['oSubSubKategorie']->value->getShortName();?>

                                                                    <?php $_block_repeat=false;
echo $_block_plugin37->render(array('href'=>$_smarty_tpl->tpl_vars['oSubSubKategorie']->value->getURL(),'title'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['oKategorie']->value->getName(), ENT_QUOTES, 'utf-8', true),'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                                </li>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </ul>
                                                    </li>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    <?php $_block_repeat=false;
echo $_block_plugin34->render(array('cols'=>12,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <?php $_block_plugin38 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin38, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin38->render(array('cols'=>12,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <ul class="list-unstyled">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oKategorieliste']->value->elemente, 'oKategorie');
$_smarty_tpl->tpl_vars['oKategorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oKategorie']->value) {
$_smarty_tpl->tpl_vars['oKategorie']->do_else = false;
?>
                                        <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['oKategorie']->value->getChildren() )) == 0) {?>
                                            <li>
                                                &nbsp;&nbsp;<?php $_block_plugin39 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin39, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getURL(),'title'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['oKategorie']->value->getName(), ENT_QUOTES, 'utf-8', true),'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin39->render(array('href'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getURL(),'title'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['oKategorie']->value->getName(), ENT_QUOTES, 'utf-8', true),'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php echo $_smarty_tpl->tpl_vars['oKategorie']->value->getShortName();?>

                                                <?php $_block_repeat=false;
echo $_block_plugin39->render(array('href'=>$_smarty_tpl->tpl_vars['oKategorie']->value->getURL(),'title'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['oKategorie']->value->getName(), ENT_QUOTES, 'utf-8', true),'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php $_block_repeat=false;
echo $_block_plugin38->render(array('cols'=>12,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo $_block_plugin33->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'page-sitemap-categories-content'} */
/* {block 'page-sitemap-categories'} */
class Block_72640868967ab36f34f8990_22179995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_categories','inContainer'=>false),$_smarty_tpl ) );?>

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {
echo "container-plus-sidebar";
}
$_prefixVariable17=ob_get_clean();
$_block_plugin31 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin31, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-categories ".$_prefixVariable17));
$_block_repeat=true;
echo $_block_plugin31->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-categories ".$_prefixVariable17), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sitemapKats'),$_smarty_tpl ) );
$_prefixVariable18 = ob_get_clean();
$_block_plugin32 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin32, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('header'=>$_prefixVariable18,'class'=>"sitemap-group"));
$_block_repeat=true;
echo $_block_plugin32->render(array('header'=>$_prefixVariable18,'class'=>"sitemap-group"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169098981967ab36f34f9603_98284285', 'page-sitemap-categories-content', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin32->render(array('header'=>$_prefixVariable18,'class'=>"sitemap-group"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin31->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-categories ".$_prefixVariable17), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'page-sitemap-categories'} */
/* {block 'page-sitemap-manufacturer-content'} */
class Block_73484840167ab36f34fe916_36862022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin42 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin42, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin42->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oHersteller_arr']->value, 'oHersteller');
$_smarty_tpl->tpl_vars['oHersteller']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oHersteller']->value) {
$_smarty_tpl->tpl_vars['oHersteller']->do_else = false;
?>
                                <?php $_block_plugin43 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin43, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'lg'=>3,'class'=>"sitemap-group-item"));
$_block_repeat=true;
echo $_block_plugin43->render(array('cols'=>12,'md'=>4,'lg'=>3,'class'=>"sitemap-group-item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_block_plugin44 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin44, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oHersteller']->value->getURL(),'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin44->render(array('href'=>$_smarty_tpl->tpl_vars['oHersteller']->value->getURL(),'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['oHersteller']->value->getName();
$_block_repeat=false;
echo $_block_plugin44->render(array('href'=>$_smarty_tpl->tpl_vars['oHersteller']->value->getURL(),'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_repeat=false;
echo $_block_plugin43->render(array('cols'=>12,'md'=>4,'lg'=>3,'class'=>"sitemap-group-item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php $_block_repeat=false;
echo $_block_plugin42->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'page-sitemap-manufacturer-content'} */
/* {block 'page-sitemap-manufacturer'} */
class Block_98194784467ab36f34fdd08_14757536 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_manufacturers','inContainer'=>false),$_smarty_tpl ) );?>

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {
echo "container-plus-sidebar";
}
$_prefixVariable19=ob_get_clean();
$_block_plugin40 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin40, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-manufacturer ".$_prefixVariable19));
$_block_repeat=true;
echo $_block_plugin40->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-manufacturer ".$_prefixVariable19), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sitemapNanufacturer'),$_smarty_tpl ) );
$_prefixVariable20 = ob_get_clean();
$_block_plugin41 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin41, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('header'=>$_prefixVariable20,'class'=>"sitemap-group"));
$_block_repeat=true;
echo $_block_plugin41->render(array('header'=>$_prefixVariable20,'class'=>"sitemap-group"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73484840167ab36f34fe916_36862022', 'page-sitemap-manufacturer-content', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin41->render(array('header'=>$_prefixVariable20,'class'=>"sitemap-group"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin40->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-manufacturer ".$_prefixVariable19), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'page-sitemap-manufacturer'} */
/* {block 'page-sitemap-news-content'} */
class Block_39576810067ab36f3500da5_25883313 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
?>

                        <?php $_block_plugin47 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin47, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin47->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsMonatsUebersicht_arr']->value, 'oNewsMonatsUebersicht');
$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->iteration = 0;
$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->value) {
$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->do_else = false;
$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->iteration++;
$__foreach_oNewsMonatsUebersicht_17_saved = $_smarty_tpl->tpl_vars['oNewsMonatsUebersicht'];
?>
                                <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->value->oNews_arr )) > 0) {?>
                                    <?php echo smarty_function_math(array('equation'=>'x-y','x'=>$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->iteration,'y'=>1,'assign'=>'i'),$_smarty_tpl);?>

                                    <?php $_block_plugin48 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin48, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin48->render(array('cols'=>12,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <strong><?php $_block_plugin49 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin49, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->value->cURLFull,'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin49->render(array('href'=>$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->value->cURLFull,'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->value->cName;
$_block_repeat=false;
echo $_block_plugin49->render(array('href'=>$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->value->cURLFull,'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></strong>
                                        <ul class="list-unstyled">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsMonatsUebersicht']->value->oNews_arr, 'oNews');
$_smarty_tpl->tpl_vars['oNews']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNews']->value) {
$_smarty_tpl->tpl_vars['oNews']->do_else = false;
?>
                                                <li>&nbsp;&nbsp;<?php $_block_plugin50 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin50, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oNews']->value->cURLFull,'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin50->render(array('href'=>$_smarty_tpl->tpl_vars['oNews']->value->cURLFull,'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['oNews']->value->cBetreff;
$_block_repeat=false;
echo $_block_plugin50->render(array('href'=>$_smarty_tpl->tpl_vars['oNews']->value->cURLFull,'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    <?php $_block_repeat=false;
echo $_block_plugin48->render(array('cols'=>12,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['oNewsMonatsUebersicht'] = $__foreach_oNewsMonatsUebersicht_17_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php $_block_repeat=false;
echo $_block_plugin47->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'page-sitemap-news-content'} */
/* {block 'page-sitemap-news'} */
class Block_4533584267ab36f3500195_83726103 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_news','inContainer'=>false),$_smarty_tpl ) );?>

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {
echo "container-plus-sidebar";
}
$_prefixVariable21=ob_get_clean();
$_block_plugin45 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin45, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-news ".$_prefixVariable21));
$_block_repeat=true;
echo $_block_plugin45->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-news ".$_prefixVariable21), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sitemapNews'),$_smarty_tpl ) );
$_prefixVariable22 = ob_get_clean();
$_block_plugin46 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin46, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('header'=>$_prefixVariable22,'class'=>"sitemap-group"));
$_block_repeat=true;
echo $_block_plugin46->render(array('header'=>$_prefixVariable22,'class'=>"sitemap-group"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39576810067ab36f3500da5_25883313', 'page-sitemap-news-content', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin46->render(array('header'=>$_prefixVariable22,'class'=>"sitemap-group"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin45->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-news ".$_prefixVariable21), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'page-sitemap-news'} */
/* {block 'page-sitemap-news-categories-content'} */
class Block_175135119467ab36f35045f5_72510304 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin53 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin53, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin53->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsKategorie_arr']->value, 'oNewsKategorie');
$_smarty_tpl->tpl_vars['oNewsKategorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNewsKategorie']->value) {
$_smarty_tpl->tpl_vars['oNewsKategorie']->do_else = false;
?>
                                <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['oNewsKategorie']->value->oNews_arr )) > 0) {?>
                                    <?php $_block_plugin54 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin54, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin54->render(array('cols'=>12,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <strong><?php $_block_plugin55 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin55, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oNewsKategorie']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin55->render(array('href'=>$_smarty_tpl->tpl_vars['oNewsKategorie']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['oNewsKategorie']->value->cName;
$_block_repeat=false;
echo $_block_plugin55->render(array('href'=>$_smarty_tpl->tpl_vars['oNewsKategorie']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></strong>
                                        <ul class="list-unstyled">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsKategorie']->value->oNews_arr, 'oNews');
$_smarty_tpl->tpl_vars['oNews']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNews']->value) {
$_smarty_tpl->tpl_vars['oNews']->do_else = false;
?>
                                                <li>
                                                    &nbsp;&nbsp;<?php $_block_plugin56 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin56, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oNews']->value->cURLFull,'class'=>"nice-deco"));
$_block_repeat=true;
echo $_block_plugin56->render(array('href'=>$_smarty_tpl->tpl_vars['oNews']->value->cURLFull,'class'=>"nice-deco"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['oNews']->value->cBetreff;
$_block_repeat=false;
echo $_block_plugin56->render(array('href'=>$_smarty_tpl->tpl_vars['oNews']->value->cURLFull,'class'=>"nice-deco"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    <?php $_block_repeat=false;
echo $_block_plugin54->render(array('cols'=>12,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php $_block_repeat=false;
echo $_block_plugin53->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'page-sitemap-news-categories-content'} */
/* {block 'page-sitemap-news-categories'} */
class Block_53824921567ab36f3503997_27429378 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_news_categories','inContainer'=>false),$_smarty_tpl ) );?>

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) {
echo "container-plus-sidebar";
}
$_prefixVariable23=ob_get_clean();
$_block_plugin51 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin51, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-news-categories ".$_prefixVariable23));
$_block_repeat=true;
echo $_block_plugin51->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-news-categories ".$_prefixVariable23), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sitemapNewsCats'),$_smarty_tpl ) );
$_prefixVariable24 = ob_get_clean();
$_block_plugin52 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin52, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('header'=>$_prefixVariable24,'class'=>"sitemap-group"));
$_block_repeat=true;
echo $_block_plugin52->render(array('header'=>$_prefixVariable24,'class'=>"sitemap-group"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175135119467ab36f35045f5_72510304', 'page-sitemap-news-categories-content', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin52->render(array('header'=>$_prefixVariable24,'class'=>"sitemap-group"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin51->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"sitemap-wrapper-news-categories ".$_prefixVariable23), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'page-sitemap-news-categories'} */
/* {block 'page-sitemap'} */
class Block_155588178667ab36f34f53b1_59606906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-sitemap' => 
  array (
    0 => 'Block_155588178667ab36f34f53b1_59606906',
  ),
  'page-sitemap-pages' => 
  array (
    0 => 'Block_48679979067ab36f34f57a2_84258948',
  ),
  'page-sitemap-pages-content' => 
  array (
    0 => 'Block_183654555467ab36f34f65c8_95127339',
  ),
  'page-sitemap-include-linkgroup-list' => 
  array (
    0 => 'Block_94255555767ab36f34f75a0_14985164',
  ),
  'page-sitemap-categories' => 
  array (
    0 => 'Block_72640868967ab36f34f8990_22179995',
  ),
  'page-sitemap-categories-content' => 
  array (
    0 => 'Block_169098981967ab36f34f9603_98284285',
  ),
  'page-sitemap-manufacturer' => 
  array (
    0 => 'Block_98194784467ab36f34fdd08_14757536',
  ),
  'page-sitemap-manufacturer-content' => 
  array (
    0 => 'Block_73484840167ab36f34fe916_36862022',
  ),
  'page-sitemap-news' => 
  array (
    0 => 'Block_4533584267ab36f3500195_83726103',
  ),
  'page-sitemap-news-content' => 
  array (
    0 => 'Block_39576810067ab36f3500da5_25883313',
  ),
  'page-sitemap-news-categories' => 
  array (
    0 => 'Block_53824921567ab36f3503997_27429378',
  ),
  'page-sitemap-news-categories-content' => 
  array (
    0 => 'Block_175135119467ab36f35045f5_72510304',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['sitemap']['sitemap_seiten_anzeigen'] === 'Y') {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48679979067ab36f34f57a2_84258948', 'page-sitemap-pages', $this->tplIndex);
?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['sitemap']['sitemap_kategorien_anzeigen'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oKategorieliste']->value->elemente)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['oKategorieliste']->value->elemente )) > 0) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72640868967ab36f34f8990_22179995', 'page-sitemap-categories', $this->tplIndex);
?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['sitemap']['sitemap_hersteller_anzeigen'] === 'Y' && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['oHersteller_arr']->value )) > 0) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98194784467ab36f34fdd08_14757536', 'page-sitemap-manufacturer', $this->tplIndex);
?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['news']['news_benutzen'] === 'Y' && $_smarty_tpl->tpl_vars['Einstellungen']->value['sitemap']['sitemap_news_anzeigen'] === 'Y' && !empty($_smarty_tpl->tpl_vars['oNewsMonatsUebersicht_arr']->value) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['oNewsMonatsUebersicht_arr']->value )) > 0) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4533584267ab36f3500195_83726103', 'page-sitemap-news', $this->tplIndex);
?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['news']['news_benutzen'] === 'Y' && $_smarty_tpl->tpl_vars['Einstellungen']->value['sitemap']['sitemap_newskategorien_anzeigen'] === 'Y' && !empty($_smarty_tpl->tpl_vars['oNewsKategorie_arr']->value) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['oNewsKategorie_arr']->value )) > 0) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53824921567ab36f3503997_27429378', 'page-sitemap-news-categories', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'page-sitemap'} */
}
