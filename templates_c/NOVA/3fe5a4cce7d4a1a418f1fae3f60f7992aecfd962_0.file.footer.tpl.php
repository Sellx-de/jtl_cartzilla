<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31669286f4_58533190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fe5a4cce7d4a1a418f1fae3f60f7992aecfd962' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/footer.tpl',
      1 => 1739261160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/scroll_top.tpl' => 1,
    'file:snippets/consent_manager.tpl' => 1,
  ),
),false)) {
function content_67ab31669286f4_58533190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1926994667ab316690f112_65675578', 'layout-footer');
?>

<?php }
/* {block 'footer-sidepanel-left-content'} */
class Block_204804575167ab31669102e9_06900715 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['boxes']->value['left'];
}
}
/* {/block 'footer-sidepanel-left-content'} */
/* {block 'layout-footer-sidepanel-left'} */
class Block_154174891467ab31669101e3_73839866 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                         <aside id="sidepanel_left" class="sidepanel-left d-print-none col-12 col-lg-4 col-xl-3 order-last order-lg-first dropdown-full-width">
                             <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204804575167ab31669102e9_06900715', 'footer-sidepanel-left-content', $this->tplIndex);
?>

                         </aside>
                    <?php
}
}
/* {/block 'layout-footer-sidepanel-left'} */
/* {block 'layout-footer-content-productlist-col-closingtag'} */
class Block_79862310267ab3166910088_17290936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    </div>                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154174891467ab31669101e3_73839866', 'layout-footer-sidepanel-left', $this->tplIndex);
?>

                <?php
}
}
/* {/block 'layout-footer-content-productlist-col-closingtag'} */
/* {block 'layout-footer-content-productlist-row-closingtag'} */
class Block_205260614967ab31669107f1_04258531 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    </div>                <?php
}
}
/* {/block 'layout-footer-content-productlist-row-closingtag'} */
/* {block 'layout-footer-aside'} */
class Block_212893973267ab316690f3a1_44968591 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!$_smarty_tpl->tpl_vars['bExclusive']->value && $_smarty_tpl->tpl_vars['boxes']->value['left'] !== null && !empty(trim(strip_tags($_smarty_tpl->tpl_vars['boxes']->value['left']))) && (($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) || (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value)) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79862310267ab3166910088_17290936', 'layout-footer-content-productlist-col-closingtag', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205260614967ab31669107f1_04258531', 'layout-footer-content-productlist-row-closingtag', $this->tplIndex);
?>

            <?php }?>
        <?php
}
}
/* {/block 'layout-footer-aside'} */
/* {block 'layout-footer-content-closingtag'} */
class Block_155131756167ab3166910b79_70630203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_content','title'=>'Default Area','inContainer'=>false),$_smarty_tpl ) );?>

            </div>        <?php
}
}
/* {/block 'layout-footer-content-closingtag'} */
/* {block 'layout-footer-content-wrapper-closingtag'} */
class Block_176536610267ab3166910f81_81134306 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            </div>        <?php
}
}
/* {/block 'layout-footer-content-wrapper-closingtag'} */
/* {block 'layout-footer-content-all-closingtags'} */
class Block_24314055267ab316690f282_29547823 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212893973267ab316690f3a1_44968591', 'layout-footer-aside', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155131756167ab3166910b79_70630203', 'layout-footer-content-closingtag', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176536610267ab3166910f81_81134306', 'layout-footer-content-wrapper-closingtag', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'layout-footer-content-all-closingtags'} */
/* {block 'layout-footer-main-wrapper-closingtag'} */
class Block_39530101367ab3166911308_63780434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        </main>     <?php
}
}
/* {/block 'layout-footer-main-wrapper-closingtag'} */
/* {block 'layout-footer-newsletter-heading'} */
class Block_163512388667ab3166912565_61801838 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <div class="h2 newsletter-footer-heading">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newsletter','section'=>'newsletter'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newsletterSendSubscribe','section'=>'newsletter'),$_smarty_tpl ) );?>

                                        </div>
                                    <?php
}
}
/* {/block 'layout-footer-newsletter-heading'} */
/* {block 'layout-footer-newsletter-info'} */
class Block_126650913267ab3166912d65_75832610 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <p class="info">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newsletterInformedConsent','section'=>'newsletter','printf'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]->getURL()),$_smarty_tpl ) );?>

                                        </p>
                                    <?php
}
}
/* {/block 'layout-footer-newsletter-info'} */
/* {block 'layout-footer-form-content'} */
class Block_155337920567ab3166913a36_58066329 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"abonnieren",'value'=>"2"),$_smarty_tpl ) );?>

                                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable86=ob_get_clean();
$_block_plugin152 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin152, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-sr-only'=>$_prefixVariable86,'class'=>"newsletter-email-wrapper"));
$_block_repeat=true;
echo $_block_plugin152->render(array('label-sr-only'=>$_prefixVariable86,'class'=>"newsletter-email-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_block_plugin153 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroup'][0][0] : null;
if (!is_callable(array($_block_plugin153, 'render'))) {
throw new SmartyException('block tag \'inputgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroup', array());
$_block_repeat=true;
echo $_block_plugin153->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable87=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable88 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"email",'name'=>"cEmail",'id'=>"newsletter_email",'placeholder'=>$_prefixVariable87,'aria'=>array('label'=>$_prefixVariable88)),$_smarty_tpl ) );?>

                                                        <?php $_block_plugin154 = isset($_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inputgroupaddon'][0][0] : null;
if (!is_callable(array($_block_plugin154, 'render'))) {
throw new SmartyException('block tag \'inputgroupaddon\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inputgroupaddon', array('append'=>true));
$_block_repeat=true;
echo $_block_plugin154->render(array('append'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                            <?php $_block_plugin155 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin155, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>'submit','variant'=>'secondary','class'=>'min-w-sm'));
$_block_repeat=true;
echo $_block_plugin155->render(array('type'=>'submit','variant'=>'secondary','class'=>'min-w-sm'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newsletterSendSubscribe','section'=>'newsletter'),$_smarty_tpl ) );?>

                                                            <?php $_block_repeat=false;
echo $_block_plugin155->render(array('type'=>'submit','variant'=>'secondary','class'=>'min-w-sm'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php $_block_repeat=false;
echo $_block_plugin154->render(array('append'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php $_block_repeat=false;
echo $_block_plugin153->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin152->render(array('label-sr-only'=>$_prefixVariable86,'class'=>"newsletter-email-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'layout-footer-form-content'} */
/* {block 'layout-footer-form-captcha'} */
class Block_169208511667ab3166914f34_61627912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <div class="<?php if (!empty($_smarty_tpl->tpl_vars['plausiArr']->value['captcha']) && $_smarty_tpl->tpl_vars['plausiArr']->value['captcha'] === true) {?> has-error<?php }?>">
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['captchaMarkup'][0], array( array('getBody'=>true),$_smarty_tpl ) );?>

                                                </div>
                                            <?php
}
}
/* {/block 'layout-footer-form-captcha'} */
/* {block 'layout-footer-form'} */
class Block_46151893567ab31669135d2_22370894 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'newsletter.php'),$_smarty_tpl ) );
$_prefixVariable85=ob_get_clean();
$_block_plugin151 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin151, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('methopd'=>"post",'action'=>$_prefixVariable85));
$_block_repeat=true;
echo $_block_plugin151->render(array('methopd'=>"post",'action'=>$_prefixVariable85), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155337920567ab3166913a36_58066329', 'layout-footer-form-content', $this->tplIndex);
?>

                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169208511667ab3166914f34_61627912', 'layout-footer-form-captcha', $this->tplIndex);
?>

                                        <?php $_block_repeat=false;
echo $_block_plugin151->render(array('methopd'=>"post",'action'=>$_prefixVariable85), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'layout-footer-form'} */
/* {block 'layout-footer-newsletter'} */
class Block_133666348867ab3166912141_02190856 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_block_plugin148 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin148, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"newsletter-footer"));
$_block_repeat=true;
echo $_block_plugin148->render(array('class'=>"newsletter-footer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_block_plugin149 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin149, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'lg'=>6));
$_block_repeat=true;
echo $_block_plugin149->render(array('cols'=>12,'lg'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163512388667ab3166912565_61801838', 'layout-footer-newsletter-heading', $this->tplIndex);
?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]))) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126650913267ab3166912d65_75832610', 'layout-footer-newsletter-info', $this->tplIndex);
?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin149->render(array('cols'=>12,'lg'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_plugin150 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin150, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'lg'=>6));
$_block_repeat=true;
echo $_block_plugin150->render(array('cols'=>12,'lg'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46151893567ab31669135d2_22370894', 'layout-footer-form', $this->tplIndex);
?>

                                <?php $_block_repeat=false;
echo $_block_plugin150->render(array('cols'=>12,'lg'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin148->render(array('class'=>"newsletter-footer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <hr>
                        <?php
}
}
/* {/block 'layout-footer-newsletter'} */
/* {block 'layout-footer-boxes'} */
class Block_10499706967ab3166915ac6_05666954 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getBoxesByPosition'][0], array( array('position'=>'bottom','assign'=>'footerBoxes'),$_smarty_tpl ) );?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['footerBoxes']->value)) && count($_smarty_tpl->tpl_vars['footerBoxes']->value) > 0) {?>
                            <?php $_block_plugin156 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin156, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('id'=>'footer-boxes'));
$_block_repeat=true;
echo $_block_plugin156->render(array('id'=>'footer-boxes'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footerBoxes']->value, 'box');
$_smarty_tpl->tpl_vars['box']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['box']->value) {
$_smarty_tpl->tpl_vars['box']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['box']->value->isActive() && !empty($_smarty_tpl->tpl_vars['box']->value->getRenderedContent())) {?>
                                        <?php $_block_plugin157 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin157, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'sm'=>6,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin157->render(array('cols'=>12,'sm'=>6,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo $_smarty_tpl->tpl_vars['box']->value->getRenderedContent();?>

                                        <?php $_block_repeat=false;
echo $_block_plugin157->render(array('cols'=>12,'sm'=>6,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php $_block_repeat=false;
echo $_block_plugin156->render(array('id'=>'footer-boxes'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                    <?php
}
}
/* {/block 'layout-footer-boxes'} */
/* {block 'layout-footer-socialmedia'} */
class Block_42758006467ab3166917704_83158560 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin159 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin159, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'class'=>"footer-additional-wrapper col-auto mx-auto"));
$_block_repeat=true;
echo $_block_plugin159->render(array('cols'=>12,'class'=>"footer-additional-wrapper col-auto mx-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <ul class="list-unstyled">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook'],'http') !== 0) {
echo "https://";
}
$_prefixVariable89=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Facebook'),$_smarty_tpl ) );
$_prefixVariable90=ob_get_clean();
$_block_plugin160 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin160, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable89.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook']),'class'=>"btn-icon-secondary btn-facebook btn btn-sm",'aria'=>array('label'=>$_prefixVariable90),'title'=>"Facebook",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin160->render(array('href'=>$_prefixVariable89.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook']),'class'=>"btn-icon-secondary btn-facebook btn btn-sm",'aria'=>array('label'=>$_prefixVariable90),'title'=>"Facebook",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <span class="fab fa-facebook-f fa-fw fa-lg"></span>
                                                <?php $_block_repeat=false;
echo $_block_plugin160->render(array('href'=>$_prefixVariable89.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['facebook']),'class'=>"btn-icon-secondary btn-facebook btn btn-sm",'aria'=>array('label'=>$_prefixVariable90),'title'=>"Facebook",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['twitter'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['twitter'],'http') !== 0) {
echo "https://";
}
$_prefixVariable91=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Twitter'),$_smarty_tpl ) );
$_prefixVariable92=ob_get_clean();
$_block_plugin161 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin161, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable91.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['twitter']),'class'=>"btn-icon-secondary btn-twitter btn btn-sm",'aria'=>array('label'=>$_prefixVariable92),'title'=>"Twitter",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin161->render(array('href'=>$_prefixVariable91.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['twitter']),'class'=>"btn-icon-secondary btn-twitter btn btn-sm",'aria'=>array('label'=>$_prefixVariable92),'title'=>"Twitter",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-twitter fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin161->render(array('href'=>$_prefixVariable91.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['twitter']),'class'=>"btn-icon-secondary btn-twitter btn btn-sm",'aria'=>array('label'=>$_prefixVariable92),'title'=>"Twitter",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['youtube'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['youtube'],'http') !== 0) {
echo "https://";
}
$_prefixVariable93=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'YouTube'),$_smarty_tpl ) );
$_prefixVariable94=ob_get_clean();
$_block_plugin162 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin162, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable93.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['youtube']),'class'=>"btn-icon-secondary btn-youtube btn btn-sm",'aria'=>array('label'=>$_prefixVariable94),'title'=>"YouTube",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin162->render(array('href'=>$_prefixVariable93.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['youtube']),'class'=>"btn-icon-secondary btn-youtube btn btn-sm",'aria'=>array('label'=>$_prefixVariable94),'title'=>"YouTube",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-youtube fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin162->render(array('href'=>$_prefixVariable93.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['youtube']),'class'=>"btn-icon-secondary btn-youtube btn btn-sm",'aria'=>array('label'=>$_prefixVariable94),'title'=>"YouTube",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['vimeo'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['vimeo'],'http') !== 0) {
echo "https://";
}
$_prefixVariable95=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Vimeo'),$_smarty_tpl ) );
$_prefixVariable96=ob_get_clean();
$_block_plugin163 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin163, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable95.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['vimeo']),'class'=>"btn-icon-secondary btn-vimeo btn btn-sm",'aria'=>array('label'=>$_prefixVariable96),'title'=>"Vimeo",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin163->render(array('href'=>$_prefixVariable95.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['vimeo']),'class'=>"btn-icon-secondary btn-vimeo btn btn-sm",'aria'=>array('label'=>$_prefixVariable96),'title'=>"Vimeo",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-vimeo-v fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin163->render(array('href'=>$_prefixVariable95.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['vimeo']),'class'=>"btn-icon-secondary btn-vimeo btn btn-sm",'aria'=>array('label'=>$_prefixVariable96),'title'=>"Vimeo",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['pinterest'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['pinterest'],'http') !== 0) {
echo "https://";
}
$_prefixVariable97=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Pinterest'),$_smarty_tpl ) );
$_prefixVariable98=ob_get_clean();
$_block_plugin164 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin164, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable97.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['pinterest']),'class'=>"btn-icon-secondary btn-pinterest btn btn-sm",'aria'=>array('label'=>$_prefixVariable98),'title'=>"Pinterest",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin164->render(array('href'=>$_prefixVariable97.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['pinterest']),'class'=>"btn-icon-secondary btn-pinterest btn btn-sm",'aria'=>array('label'=>$_prefixVariable98),'title'=>"Pinterest",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-pinterest-p fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin164->render(array('href'=>$_prefixVariable97.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['pinterest']),'class'=>"btn-icon-secondary btn-pinterest btn btn-sm",'aria'=>array('label'=>$_prefixVariable98),'title'=>"Pinterest",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['instagram'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['instagram'],'http') !== 0) {
echo "https://";
}
$_prefixVariable99=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Instagram'),$_smarty_tpl ) );
$_prefixVariable100=ob_get_clean();
$_block_plugin165 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin165, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable99.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['instagram']),'class'=>"btn-icon-secondary btn-instagram btn btn-sm",'aria'=>array('label'=>$_prefixVariable100),'title'=>"Instagram",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin165->render(array('href'=>$_prefixVariable99.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['instagram']),'class'=>"btn-icon-secondary btn-instagram btn btn-sm",'aria'=>array('label'=>$_prefixVariable100),'title'=>"Instagram",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-instagram fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin165->render(array('href'=>$_prefixVariable99.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['instagram']),'class'=>"btn-icon-secondary btn-instagram btn btn-sm",'aria'=>array('label'=>$_prefixVariable100),'title'=>"Instagram",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['tiktok'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['tiktok'],'http') !== 0) {
echo "https://";
}
$_prefixVariable101=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'TikTok'),$_smarty_tpl ) );
$_prefixVariable102=ob_get_clean();
$_block_plugin166 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin166, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable101.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['tiktok']),'class'=>"btn-icon-secondary btn-instagram btn btn-sm",'aria'=>array('label'=>$_prefixVariable102),'title'=>"TikTok",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin166->render(array('href'=>$_prefixVariable101.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['tiktok']),'class'=>"btn-icon-secondary btn-instagram btn btn-sm",'aria'=>array('label'=>$_prefixVariable102),'title'=>"TikTok",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-tiktok fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin166->render(array('href'=>$_prefixVariable101.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['tiktok']),'class'=>"btn-icon-secondary btn-instagram btn btn-sm",'aria'=>array('label'=>$_prefixVariable102),'title'=>"TikTok",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['skype'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['skype'],'http') !== 0) {
echo "https://";
}
$_prefixVariable103=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Skype'),$_smarty_tpl ) );
$_prefixVariable104=ob_get_clean();
$_block_plugin167 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin167, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable103.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['skype']),'class'=>"btn-icon-secondary btn-skype btn btn-sm",'aria'=>array('label'=>$_prefixVariable104),'title'=>"Skype",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin167->render(array('href'=>$_prefixVariable103.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['skype']),'class'=>"btn-icon-secondary btn-skype btn btn-sm",'aria'=>array('label'=>$_prefixVariable104),'title'=>"Skype",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-skype fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin167->render(array('href'=>$_prefixVariable103.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['skype']),'class'=>"btn-icon-secondary btn-skype btn btn-sm",'aria'=>array('label'=>$_prefixVariable104),'title'=>"Skype",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['xing'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['xing'],'http') !== 0) {
echo "https://";
}
$_prefixVariable105=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Xing'),$_smarty_tpl ) );
$_prefixVariable106=ob_get_clean();
$_block_plugin168 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin168, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable105.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['xing']),'class'=>"btn-icon-secondary btn-xing btn btn-sm",'aria'=>array('label'=>$_prefixVariable106),'title'=>"Xing",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin168->render(array('href'=>$_prefixVariable105.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['xing']),'class'=>"btn-icon-secondary btn-xing btn btn-sm",'aria'=>array('label'=>$_prefixVariable106),'title'=>"Xing",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-xing fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin168->render(array('href'=>$_prefixVariable105.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['xing']),'class'=>"btn-icon-secondary btn-xing btn btn-sm",'aria'=>array('label'=>$_prefixVariable106),'title'=>"Xing",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['linkedin'])) {?>
                                            <li>
                                                <?php ob_start();
if (strpos($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['linkedin'],'http') !== 0) {
echo "https://";
}
$_prefixVariable107=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visit_us_on','section'=>'aria','printf'=>'Linkedin'),$_smarty_tpl ) );
$_prefixVariable108=ob_get_clean();
$_block_plugin169 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin169, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable107.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['linkedin']),'class'=>"btn-icon-secondary btn-linkedin btn btn-sm",'aria'=>array('label'=>$_prefixVariable108),'title'=>"Linkedin",'target'=>"_blank",'rel'=>"noopener"));
$_block_repeat=true;
echo $_block_plugin169->render(array('href'=>$_prefixVariable107.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['linkedin']),'class'=>"btn-icon-secondary btn-linkedin btn btn-sm",'aria'=>array('label'=>$_prefixVariable108),'title'=>"Linkedin",'target'=>"_blank",'rel'=>"noopener"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <i class="fab fa-linkedin-in fa-fw fa-lg"></i>
                                                <?php $_block_repeat=false;
echo $_block_plugin169->render(array('href'=>$_prefixVariable107.((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['linkedin']),'class'=>"btn-icon-secondary btn-linkedin btn btn-sm",'aria'=>array('label'=>$_prefixVariable108),'title'=>"Linkedin",'target'=>"_blank",'rel'=>"noopener"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            </li>
                                        <?php }?>
                                        </ul>
                                    <?php $_block_repeat=false;
echo $_block_plugin159->render(array('cols'=>12,'class'=>"footer-additional-wrapper col-auto mx-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-footer-socialmedia'} */
/* {block 'layout-footer-additional'} */
class Block_178465664967ab31669171c1_82511664 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['socialmedia_footer'] === 'Y') {?>
                            <?php $_block_plugin158 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin158, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"footer-social-media"));
$_block_repeat=true;
echo $_block_plugin158->render(array('class'=>"footer-social-media"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42758006467ab3166917704_83158560', 'layout-footer-socialmedia', $this->tplIndex);
?>

                            <?php $_block_repeat=false;
echo $_block_plugin158->render(array('class'=>"footer-social-media"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>                        <?php }?>
                    <?php
}
}
/* {/block 'layout-footer-additional'} */
/* {block 'footer-vat-notice'} */
class Block_130624297767ab31669235d9_42643421 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <span class="small">* <?php echo $_smarty_tpl->tpl_vars['footnoteVat']->value;
if ((isset($_smarty_tpl->tpl_vars['footnoteShipping']->value))) {
echo $_smarty_tpl->tpl_vars['footnoteShipping']->value;
}?></span>
                        <?php
}
}
/* {/block 'footer-vat-notice'} */
/* {block 'layout-footer-copyright-copyright'} */
class Block_15426116467ab3166924066_14582002 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin172 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin172, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin172->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['meta_copyright']->value)) {?>
                                            <span class="icon-mr-2" itemprop="copyrightHolder">&copy; <?php echo $_smarty_tpl->tpl_vars['meta_copyright']->value;?>
</span>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_zaehler_anzeigen'] === 'Y') {?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'counter'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['Besucherzaehler']->value;?>

                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_fusszeilehinweis'])) {?>
                                            <span class="ml-2"><?php echo $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_fusszeilehinweis'];?>
</span>
                                        <?php }?>
                                    <?php $_block_repeat=false;
echo $_block_plugin172->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-footer-copyright-copyright'} */
/* {block 'layout-footer-copyright-brand'} */
class Block_34966264767ab3166925094_13189535 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['button_scroll_top'] === 'Y') {
echo " pr-md-8";
}
$_prefixVariable109=ob_get_clean();
$_block_plugin173 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin173, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>"auto",'class'=>"ml-auto-util".$_prefixVariable109,'id'=>"system-credits"));
$_block_repeat=true;
echo $_block_plugin173->render(array('cols'=>12,'md'=>"auto",'class'=>"ml-auto-util".$_prefixVariable109,'id'=>"system-credits"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            Powered by <?php $_block_plugin174 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin174, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>"https://jtl-url.de/jtlshop",'class'=>"text-white text-decoration-underline",'title'=>"JTL-Shop",'target'=>"_blank",'rel'=>"noopener nofollow"));
$_block_repeat=true;
echo $_block_plugin174->render(array('href'=>"https://jtl-url.de/jtlshop",'class'=>"text-white text-decoration-underline",'title'=>"JTL-Shop",'target'=>"_blank",'rel'=>"noopener nofollow"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>JTL-Shop<?php $_block_repeat=false;
echo $_block_plugin174->render(array('href'=>"https://jtl-url.de/jtlshop",'class'=>"text-white text-decoration-underline",'title'=>"JTL-Shop",'target'=>"_blank",'rel'=>"noopener nofollow"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin173->render(array('cols'=>12,'md'=>"auto",'class'=>"ml-auto-util".$_prefixVariable109,'id'=>"system-credits"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'layout-footer-copyright-brand'} */
/* {block 'layout-footer-copyright'} */
class Block_128641765267ab3166923b61_61912348 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="copyright">
                        <?php $_block_plugin170 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin170, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>true));
$_block_repeat=true;
echo $_block_plugin170->render(array('fluid'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_plugin171 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin171, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin171->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_assignInScope('isBrandFree', JTL\Shop::isBrandfree());?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15426116467ab3166924066_14582002', 'layout-footer-copyright-copyright', $this->tplIndex);
?>

                                <?php if (!$_smarty_tpl->tpl_vars['isBrandFree']->value) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34966264767ab3166925094_13189535', 'layout-footer-copyright-brand', $this->tplIndex);
?>

                                <?php }?>
                            <?php $_block_repeat=false;
echo $_block_plugin171->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo $_block_plugin170->render(array('fluid'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php
}
}
/* {/block 'layout-footer-copyright'} */
/* {block 'layout-footer-scroll-top'} */
class Block_3654423667ab3166926058_04088968 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['button_scroll_top'] === 'Y') {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/scroll_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php }?>
                <?php
}
}
/* {/block 'layout-footer-scroll-top'} */
/* {block 'layout-footer-content'} */
class Block_48525267367ab3166911510_78100847 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!$_smarty_tpl->tpl_vars['bExclusive']->value) {?>
            <?php $_smarty_tpl->_assignInScope('newsletterActive', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['footer']['newsletter_footer'] === 'Y' && $_smarty_tpl->tpl_vars['Einstellungen']->value['newsletter']['newsletter_active'] === 'Y');?>
            <footer id="footer" <?php if ($_smarty_tpl->tpl_vars['newsletterActive']->value) {?>class="newsletter-active"<?php }?>>
                <?php $_block_plugin147 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin147, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"d-print-none"));
$_block_repeat=true;
echo $_block_plugin147->render(array('class'=>"d-print-none"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['newsletterActive']->value) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133666348867ab3166912141_02190856', 'layout-footer-newsletter', $this->tplIndex);
?>

                    <?php }?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10499706967ab3166915ac6_05666954', 'layout-footer-boxes', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178465664967ab31669171c1_82511664', 'layout-footer-additional', $this->tplIndex);
?>
                    <div class="footnote-vat">
                        <?php if ($_smarty_tpl->tpl_vars['NettoPreise']->value == 1) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'footnoteExclusiveVat','assign'=>'footnoteVat'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'footnoteInclusiveVat','assign'=>'footnoteVat'),$_smarty_tpl ) );?>

                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {?>
                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandhinweis'] === 'zzgl') {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'footnoteExclusiveShipping','printf'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL(),'assign'=>'footnoteShipping'),$_smarty_tpl ) );?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandhinweis'] === 'inkl') {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'footnoteInclusiveShipping','printf'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL(),'assign'=>'footnoteShipping'),$_smarty_tpl ) );?>

                            <?php }?>
                        <?php }?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130624297767ab31669235d9_42643421', 'footer-vat-notice', $this->tplIndex);
?>

                    </div>
                <?php $_block_repeat=false;
echo $_block_plugin147->render(array('class'=>"d-print-none"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128641765267ab3166923b61_61912348', 'layout-footer-copyright', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3654423667ab3166926058_04088968', 'layout-footer-scroll-top', $this->tplIndex);
?>

            </footer>
        <?php }?>
    <?php
}
}
/* {/block 'layout-footer-content'} */
/* {block 'layout-footer-io-path'} */
class Block_155370541567ab3166926851_15246368 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="jtl-io-path" data-path="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
" class="d-none"></div>
    <?php
}
}
/* {/block 'layout-footer-io-path'} */
/* {block 'layout-footer-js'} */
class Block_108759650567ab3166926b08_17266643 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo $_smarty_tpl->tpl_vars['dbgBarBody']->value;?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['captchaMarkup'][0], array( array('getBody'=>false),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'layout-footer-js'} */
/* {block 'layout-footer-consent-manager'} */
class Block_174190204467ab3166926e94_64550842 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['consentmanager']['consent_manager_active'] === 'Y' && !$_smarty_tpl->tpl_vars['isAjax']->value && $_smarty_tpl->tpl_vars['consentItems']->value->isNotEmpty()) {?>
            <input id="consent-manager-show-banner" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Einstellungen']->value['consentmanager']['consent_manager_show_banner'];?>
">
            <?php $_smarty_tpl->_subTemplateRender('file:snippets/consent_manager.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_block_plugin175 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0] : null;
if (!is_callable($_block_plugin175)) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin175(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php echo '<script'; ?>
>
                    setTimeout(function() {
                        $('#consent-manager, #consent-settings-btn').removeClass('d-none');
                    }, 100)
                    document.addEventListener('consent.updated', function(e) {
                        $.post('<?php echo $_smarty_tpl->tpl_vars['ShopURLSSL']->value;?>
/_updateconsent', {
                                'action': 'updateconsent',
                                'jtl_token': '<?php echo $_SESSION['jtl_token'];?>
',
                                'data': e.detail
                            }
                        );
                    });
                    <?php if (!(isset($_SESSION['consents']))) {?>
                        document.addEventListener('consent.ready', function(e) {
                            document.dispatchEvent(new CustomEvent('consent.updated', { detail: e.detail }));
                        });
                    <?php }?>

                    window.CM = new ConsentManager({
                        version: <?php echo (($tmp = $_SESSION['consentVersion'] ?? null)===null||$tmp==='' ? 1 : $tmp);?>

                    });
                    var trigger = document.querySelectorAll('.trigger')
                    var triggerCall = function(e) {
                        e.preventDefault();
                        let type = e.target.dataset.consent;
                        if (CM.getSettings(type) === false) {
                            CM.openConfirmationModal(type, function() {
                                let data = CM._getLocalData();
                                if (data === null ) {
                                    data = { settings: {} };
                                }
                                data.settings[type] = true;
                                document.dispatchEvent(new CustomEvent('consent.updated', { detail: data.settings }));
                            });
                        }
                    }
                    for (let i = 0; i < trigger.length; ++i) {
                        trigger[i].addEventListener('click', triggerCall)
                    }
                <?php echo '</script'; ?>
>
            <?php $_block_repeat=false;
echo $_block_plugin175(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php
}
}
/* {/block 'layout-footer-consent-manager'} */
/* {block 'layout-footer'} */
class Block_1926994667ab316690f112_65675578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-footer' => 
  array (
    0 => 'Block_1926994667ab316690f112_65675578',
  ),
  'layout-footer-content-all-closingtags' => 
  array (
    0 => 'Block_24314055267ab316690f282_29547823',
  ),
  'layout-footer-aside' => 
  array (
    0 => 'Block_212893973267ab316690f3a1_44968591',
  ),
  'layout-footer-content-productlist-col-closingtag' => 
  array (
    0 => 'Block_79862310267ab3166910088_17290936',
  ),
  'layout-footer-sidepanel-left' => 
  array (
    0 => 'Block_154174891467ab31669101e3_73839866',
  ),
  'footer-sidepanel-left-content' => 
  array (
    0 => 'Block_204804575167ab31669102e9_06900715',
  ),
  'layout-footer-content-productlist-row-closingtag' => 
  array (
    0 => 'Block_205260614967ab31669107f1_04258531',
  ),
  'layout-footer-content-closingtag' => 
  array (
    0 => 'Block_155131756167ab3166910b79_70630203',
  ),
  'layout-footer-content-wrapper-closingtag' => 
  array (
    0 => 'Block_176536610267ab3166910f81_81134306',
  ),
  'layout-footer-main-wrapper-closingtag' => 
  array (
    0 => 'Block_39530101367ab3166911308_63780434',
  ),
  'layout-footer-content' => 
  array (
    0 => 'Block_48525267367ab3166911510_78100847',
  ),
  'layout-footer-newsletter' => 
  array (
    0 => 'Block_133666348867ab3166912141_02190856',
  ),
  'layout-footer-newsletter-heading' => 
  array (
    0 => 'Block_163512388667ab3166912565_61801838',
  ),
  'layout-footer-newsletter-info' => 
  array (
    0 => 'Block_126650913267ab3166912d65_75832610',
  ),
  'layout-footer-form' => 
  array (
    0 => 'Block_46151893567ab31669135d2_22370894',
  ),
  'layout-footer-form-content' => 
  array (
    0 => 'Block_155337920567ab3166913a36_58066329',
  ),
  'layout-footer-form-captcha' => 
  array (
    0 => 'Block_169208511667ab3166914f34_61627912',
  ),
  'layout-footer-boxes' => 
  array (
    0 => 'Block_10499706967ab3166915ac6_05666954',
  ),
  'layout-footer-additional' => 
  array (
    0 => 'Block_178465664967ab31669171c1_82511664',
  ),
  'layout-footer-socialmedia' => 
  array (
    0 => 'Block_42758006467ab3166917704_83158560',
  ),
  'footer-vat-notice' => 
  array (
    0 => 'Block_130624297767ab31669235d9_42643421',
  ),
  'layout-footer-copyright' => 
  array (
    0 => 'Block_128641765267ab3166923b61_61912348',
  ),
  'layout-footer-copyright-copyright' => 
  array (
    0 => 'Block_15426116467ab3166924066_14582002',
  ),
  'layout-footer-copyright-brand' => 
  array (
    0 => 'Block_34966264767ab3166925094_13189535',
  ),
  'layout-footer-scroll-top' => 
  array (
    0 => 'Block_3654423667ab3166926058_04088968',
  ),
  'layout-footer-io-path' => 
  array (
    0 => 'Block_155370541567ab3166926851_15246368',
  ),
  'layout-footer-js' => 
  array (
    0 => 'Block_108759650567ab3166926b08_17266643',
  ),
  'layout-footer-consent-manager' => 
  array (
    0 => 'Block_174190204467ab3166926e94_64550842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24314055267ab316690f282_29547823', 'layout-footer-content-all-closingtags', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39530101367ab3166911308_63780434', 'layout-footer-main-wrapper-closingtag', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48525267367ab3166911510_78100847', 'layout-footer-content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155370541567ab3166926851_15246368', 'layout-footer-io-path', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108759650567ab3166926b08_17266643', 'layout-footer-js', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174190204467ab3166926e94_64550842', 'layout-footer-consent-manager', $this->tplIndex);
?>

    </body>
    </html>
<?php
}
}
/* {/block 'layout-footer'} */
}
