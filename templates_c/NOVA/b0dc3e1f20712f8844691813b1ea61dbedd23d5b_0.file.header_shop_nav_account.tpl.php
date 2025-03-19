<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/header_shop_nav_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab3166317315_24413145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0dc3e1f20712f8844691813b1ea61dbedd23d5b' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/header_shop_nav_account.tpl',
      1 => 1739261160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab3166317315_24413145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152089548467ab316630e050_64787637', 'layout-header-shop-nav-account');
?>

<?php }
/* {block 'layout-header-nav-account-form-email'} */
class Block_116429631867ab316630f877_47151652 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable24 = ob_get_clean();
$_block_plugin41 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin41, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"email_quick",'label'=>$_prefixVariable24));
$_block_repeat=true;
echo $_block_plugin41->render(array('label-for'=>"email_quick",'label'=>$_prefixVariable24), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"email",'name'=>"email",'id'=>"email_quick",'size-class'=>"sm",'placeholder'=>" ",'required'=>true,'autocomplete'=>"email"),$_smarty_tpl ) );?>

                                    <?php $_block_repeat=false;
echo $_block_plugin41->render(array('label-for'=>"email_quick",'label'=>$_prefixVariable24), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-email'} */
/* {block 'layout-header-nav-account-form-password'} */
class Block_165770585667ab3166310392_10284496 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'password'),$_smarty_tpl ) );
$_prefixVariable25 = ob_get_clean();
$_block_plugin42 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin42, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"password_quick",'label'=>$_prefixVariable25,'class'=>"account-icon-dropdown-pass"));
$_block_repeat=true;
echo $_block_plugin42->render(array('label-for'=>"password_quick",'label'=>$_prefixVariable25,'class'=>"account-icon-dropdown-pass"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"password",'name'=>"passwort",'id'=>"password_quick",'size-class'=>"sm",'required'=>true,'placeholder'=>" ",'autocomplete'=>"current-password"),$_smarty_tpl ) );?>

                                    <?php $_block_repeat=false;
echo $_block_plugin42->render(array('label-for'=>"password_quick",'label'=>$_prefixVariable25,'class'=>"account-icon-dropdown-pass"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-password'} */
/* {block 'layout-header-nav-account-form-captcha'} */
class Block_93775698967ab3166310ec3_04417446 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['showLoginCaptcha']->value)) && $_smarty_tpl->tpl_vars['showLoginCaptcha']->value) {?>
                                        <?php $_block_plugin43 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin43, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('class'=>"simple-captcha-wrapper"));
$_block_repeat=true;
echo $_block_plugin43->render(array('class'=>"simple-captcha-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['captchaMarkup'][0], array( array('getBody'=>true),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin43->render(array('class'=>"simple-captcha-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php }?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-captcha'} */
/* {block 'layout-header-shop-nav-account-form-submit'} */
class Block_106635562267ab3166311729_41411654 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin44 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin44, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array());
$_block_repeat=true;
echo $_block_plugin44->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"login",'value'=>"1"),$_smarty_tpl ) );?>

                                        <?php if (!empty($_smarty_tpl->tpl_vars['oRedirect']->value->cURL)) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oRedirect']->value->oParameter_arr, 'oParameter');
$_smarty_tpl->tpl_vars['oParameter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oParameter']->value) {
$_smarty_tpl->tpl_vars['oParameter']->do_else = false;
?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>$_smarty_tpl->tpl_vars['oParameter']->value->Name,'value'=>$_smarty_tpl->tpl_vars['oParameter']->value->Wert),$_smarty_tpl ) );?>

                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"r",'value'=>$_smarty_tpl->tpl_vars['oRedirect']->value->nRedirect),$_smarty_tpl ) );?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"cURL",'value'=>$_smarty_tpl->tpl_vars['oRedirect']->value->cURL),$_smarty_tpl ) );?>

                                        <?php }?>
                                        <?php $_block_plugin45 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin45, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"));
$_block_repeat=true;
echo $_block_plugin45->render(array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'login'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin45->render(array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin44->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-shop-nav-account-form-submit'} */
/* {block 'layout-header-shop-nav-account-form-content'} */
class Block_46162963767ab316630f754_44380903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <fieldset id="quick-login">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116429631867ab316630f877_47151652', 'layout-header-nav-account-form-email', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165770585667ab3166310392_10284496', 'layout-header-nav-account-form-password', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93775698967ab3166310ec3_04417446', 'layout-header-nav-account-form-captcha', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106635562267ab3166311729_41411654', 'layout-header-shop-nav-account-form-submit', $this->tplIndex);
?>

                            </fieldset>
                        <?php
}
}
/* {/block 'layout-header-shop-nav-account-form-content'} */
/* {block 'layout-header-nav-account-link-forgot-password'} */
class Block_164656881567ab3166313753_89678624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'pass.php'),$_smarty_tpl ) );
$_prefixVariable26=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'forgotPassword'),$_smarty_tpl ) );
$_prefixVariable27=ob_get_clean();
$_block_plugin46 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin46, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable26,'rel'=>"nofollow",'title'=>$_prefixVariable27));
$_block_repeat=true;
echo $_block_plugin46->render(array('href'=>$_prefixVariable26,'rel'=>"nofollow",'title'=>$_prefixVariable27), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'forgotPassword'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin46->render(array('href'=>$_prefixVariable26,'rel'=>"nofollow",'title'=>$_prefixVariable27), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'layout-header-nav-account-link-forgot-password'} */
/* {block 'layout-header-nav-account-link-register'} */
class Block_106899571967ab3166314072_36819226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="dropdown-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newHere'),$_smarty_tpl ) );?>

                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'registrieren.php'),$_smarty_tpl ) );
$_prefixVariable28=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'registerNow'),$_smarty_tpl ) );
$_prefixVariable29=ob_get_clean();
$_block_plugin47 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin47, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable28,'rel'=>"nofollow",'title'=>$_prefixVariable29));
$_block_repeat=true;
echo $_block_plugin47->render(array('href'=>$_prefixVariable28,'rel'=>"nofollow",'title'=>$_prefixVariable29), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'registerNow'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin47->render(array('href'=>$_prefixVariable28,'rel'=>"nofollow",'title'=>$_prefixVariable29), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php
}
}
/* {/block 'layout-header-nav-account-link-register'} */
/* {block 'layout-header-shop-nav-account-logged-out'} */
class Block_59965257967ab316630f0f9_08098717 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="dropdown-body lg-min-w-lg">
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable23=ob_get_clean();
$_block_plugin40 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin40, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>$_prefixVariable23,'method'=>"post",'class'=>"jtl-validate",'slide'=>true));
$_block_repeat=true;
echo $_block_plugin40->render(array('action'=>$_prefixVariable23,'method'=>"post",'class'=>"jtl-validate",'slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46162963767ab316630f754_44380903', 'layout-header-shop-nav-account-form-content', $this->tplIndex);
?>

                    <?php $_block_repeat=false;
echo $_block_plugin40->render(array('action'=>$_prefixVariable23,'method'=>"post",'class'=>"jtl-validate",'slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164656881567ab3166313753_89678624', 'layout-header-nav-account-link-forgot-password', $this->tplIndex);
?>

                </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106899571967ab3166314072_36819226', 'layout-header-nav-account-link-register', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'layout-header-shop-nav-account-logged-out'} */
/* {block 'layout-header-shop-nav-account-logged-in'} */
class Block_194348360167ab3166314b20_55877217 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true,'assign'=>'secureAccountURL'),$_smarty_tpl ) );?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable30=ob_get_clean();
$_block_plugin48 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin48, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_smarty_tpl->tpl_vars['secureAccountURL']->value,'title'=>$_prefixVariable30));
$_block_repeat=true;
echo $_block_plugin48->render(array('href'=>$_smarty_tpl->tpl_vars['secureAccountURL']->value,'title'=>$_prefixVariable30), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin48->render(array('href'=>$_smarty_tpl->tpl_vars['secureAccountURL']->value,'title'=>$_prefixVariable30), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable31=ob_get_clean();
$_block_plugin49 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin49, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."?bestellungen=1",'title'=>$_prefixVariable31));
$_block_repeat=true;
echo $_block_plugin49->render(array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."?bestellungen=1",'title'=>$_prefixVariable31), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myOrders'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin49->render(array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."?bestellungen=1",'title'=>$_prefixVariable31), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable32=ob_get_clean();
$_block_plugin50 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin50, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."?editRechnungsadresse=1",'title'=>$_prefixVariable32));
$_block_repeat=true;
echo $_block_plugin50->render(array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."?editRechnungsadresse=1",'title'=>$_prefixVariable32), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myPersonalData'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin50->render(array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."?editRechnungsadresse=1",'title'=>$_prefixVariable32), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable33=ob_get_clean();
$_block_plugin51 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin51, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."?editLieferadresse=1",'title'=>$_prefixVariable33));
$_block_repeat=true;
echo $_block_plugin51->render(array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."?editLieferadresse=1",'title'=>$_prefixVariable33), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myShippingAddresses'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin51->render(array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."?editLieferadresse=1",'title'=>$_prefixVariable33), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_wunschliste_anzeigen'] === 'Y') {?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable34=ob_get_clean();
$_block_plugin52 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin52, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."#my-wishlists",'title'=>$_prefixVariable34));
$_block_repeat=true;
echo $_block_plugin52->render(array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."#my-wishlists",'title'=>$_prefixVariable34), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myWishlists'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin52->render(array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."#my-wishlists",'title'=>$_prefixVariable34), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dropdowndivider'][0], array( array(),$_smarty_tpl ) );?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'logOut'),$_smarty_tpl ) );
$_prefixVariable35=ob_get_clean();
$_block_plugin53 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin53, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."?logout=1",'title'=>$_prefixVariable35,'class'=>"account-icon-dropdown-logout"));
$_block_repeat=true;
echo $_block_plugin53->render(array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."?logout=1",'title'=>$_prefixVariable35,'class'=>"account-icon-dropdown-logout"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'logOut'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin53->render(array('href'=>((string)$_smarty_tpl->tpl_vars['secureAccountURL']->value)."?logout=1",'title'=>$_prefixVariable35,'class'=>"account-icon-dropdown-logout"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-shop-nav-account-logged-in'} */
/* {block 'layout-header-shop-nav-account'} */
class Block_152089548467ab316630e050_64787637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-shop-nav-account' => 
  array (
    0 => 'Block_152089548467ab316630e050_64787637',
  ),
  'layout-header-shop-nav-account-logged-out' => 
  array (
    0 => 'Block_59965257967ab316630f0f9_08098717',
  ),
  'layout-header-shop-nav-account-form-content' => 
  array (
    0 => 'Block_46162963767ab316630f754_44380903',
  ),
  'layout-header-nav-account-form-email' => 
  array (
    0 => 'Block_116429631867ab316630f877_47151652',
  ),
  'layout-header-nav-account-form-password' => 
  array (
    0 => 'Block_165770585667ab3166310392_10284496',
  ),
  'layout-header-nav-account-form-captcha' => 
  array (
    0 => 'Block_93775698967ab3166310ec3_04417446',
  ),
  'layout-header-shop-nav-account-form-submit' => 
  array (
    0 => 'Block_106635562267ab3166311729_41411654',
  ),
  'layout-header-nav-account-link-forgot-password' => 
  array (
    0 => 'Block_164656881567ab3166313753_89678624',
  ),
  'layout-header-nav-account-link-register' => 
  array (
    0 => 'Block_106899571967ab3166314072_36819226',
  ),
  'layout-header-shop-nav-account-logged-in' => 
  array (
    0 => 'Block_194348360167ab3166314b20_55877217',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable21 = ob_get_clean();
ob_start();
if (JTL\Session\Frontend::getCustomer()->getID() === 0) {
echo "<span class=\"fas fa-user\"></span>";
} else {
echo "<span class=\"fas fa-user-check\"></span>";
}
$_prefixVariable22=ob_get_clean();
$_block_plugin39 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0] : null;
if (!is_callable(array($_block_plugin39, 'render'))) {
throw new SmartyException('block tag \'navitemdropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitemdropdown', array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable21),'no-caret'=>true,'right'=>true,'text'=>$_prefixVariable22,'class'=>"account-icon-dropdown"));
$_block_repeat=true;
echo $_block_plugin39->render(array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable21),'no-caret'=>true,'right'=>true,'text'=>$_prefixVariable22,'class'=>"account-icon-dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (JTL\Session\Frontend::getCustomer()->getID() === 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59965257967ab316630f0f9_08098717', 'layout-header-shop-nav-account-logged-out', $this->tplIndex);
?>

        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194348360167ab3166314b20_55877217', 'layout-header-shop-nav-account-logged-in', $this->tplIndex);
?>

        <?php }?>
    <?php $_block_repeat=false;
echo $_block_plugin39->render(array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable21),'no-caret'=>true,'right'=>true,'text'=>$_prefixVariable22,'class'=>"account-icon-dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-header-shop-nav-account'} */
}
