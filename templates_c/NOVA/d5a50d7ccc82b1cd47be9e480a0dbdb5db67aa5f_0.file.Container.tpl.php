<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/src/OPC/Portlets/Container/Container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31663ac524_66991779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5a50d7ccc82b1cd47be9e480a0dbdb5db67aa5f' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/src/OPC/Portlets/Container/Container.tpl',
      1 => 1739261093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab31663ac524_66991779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'containerContent' => 
  array (
    'compiled_filepath' => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates_c/NOVA/d5a50d7ccc82b1cd47be9e480a0dbdb5db67aa5f_0.file.Container.tpl.php',
    'uid' => 'd5a50d7ccc82b1cd47be9e480a0dbdb5db67aa5f',
    'call_name' => 'smarty_template_function_containerContent_208101942967ab31663a27f7_25899026',
  ),
));
ob_start();
if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('min-height')) {
echo "min-height:";
echo (string)$_smarty_tpl->tpl_vars['instance']->value->getProperty('min-height');
echo "px;";
}
$_prefixVariable63=ob_get_clean();
$_smarty_tpl->_assignInScope('style', ((string)$_smarty_tpl->tpl_vars['instance']->value->getStyleString()).";".$_prefixVariable63." position:relative;");
$_smarty_tpl->_assignInScope('class', ((('opc-Container ').($_smarty_tpl->tpl_vars['instance']->value->getAnimationClass())).(' ')).($_smarty_tpl->tpl_vars['instance']->value->getStyleClasses()));
$_smarty_tpl->_assignInScope('data', $_smarty_tpl->tpl_vars['instance']->value->getAnimationData());
$_smarty_tpl->_assignInScope('fluid', $_smarty_tpl->tpl_vars['instance']->value->getProperty('boxed') === false);?>

<?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('background-flag') === 'still' && !empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('still-src'))) {?>
    <?php $_smarty_tpl->_assignInScope('name', basename($_smarty_tpl->tpl_vars['instance']->value->getProperty('still-src')));?>
    <?php $_smarty_tpl->_assignInScope('imgAttribs', $_smarty_tpl->tpl_vars['instance']->value->getImageAttributes($_smarty_tpl->tpl_vars['instance']->value->getProperty('still-src')));?>
    <?php $_smarty_tpl->_assignInScope('style', ((string)$_smarty_tpl->tpl_vars['style']->value)." background-image:url('".((string)$_smarty_tpl->tpl_vars['imgAttribs']->value['src'])."');");
} elseif ($_smarty_tpl->tpl_vars['instance']->value->getProperty('background-flag') === 'image' && !empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('src'))) {?>
    <?php $_smarty_tpl->_assignInScope('name', basename($_smarty_tpl->tpl_vars['instance']->value->getProperty('src')));?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." parallax-window");?>
    <?php $_smarty_tpl->_assignInScope('imgAttribs', $_smarty_tpl->tpl_vars['instance']->value->getImageAttributes());?>
    <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
        <?php $_smarty_tpl->_assignInScope('style', ((string)$_smarty_tpl->tpl_vars['style']->value)." background-image:url('".((string)$_smarty_tpl->tpl_vars['imgAttribs']->value['src'])."');");?>
        <?php $_smarty_tpl->_assignInScope('style', ((string)$_smarty_tpl->tpl_vars['style']->value)." background-size:cover;");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('data', array_merge($_smarty_tpl->tpl_vars['data']->value,array('parallax'=>'scroll','z-index'=>'1','image-src'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['src'])));?>
    <?php }
} elseif ($_smarty_tpl->tpl_vars['instance']->value->getProperty('background-flag') === 'video') {?>
    <?php $_smarty_tpl->_assignInScope('style', ((string)$_smarty_tpl->tpl_vars['style']->value)." overflow:hidden;");?>
    <?php $_smarty_tpl->_assignInScope('imgAttribs', $_smarty_tpl->tpl_vars['instance']->value->getImageAttributes($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-poster')));?>
    <?php $_smarty_tpl->_assignInScope('videoPosterUrl', $_smarty_tpl->tpl_vars['imgAttribs']->value['src']);?>
    <?php $_smarty_tpl->_assignInScope('name', basename($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-src')));?>
    <?php ob_start();
echo JTL\Shop::getURL();
$_prefixVariable64=ob_get_clean();
$_smarty_tpl->_assignInScope('videoSrcUrl', $_prefixVariable64."/".((string)(defined('PFAD_MEDIA_VIDEO') ? constant('PFAD_MEDIA_VIDEO') : null)).((string)$_smarty_tpl->tpl_vars['name']->value));
}?>



<?php if ($_smarty_tpl->tpl_vars['inContainer']->value) {?>
    <div style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
             data-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"
         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'containerContent', array(), true);?>

    </div>
<?php } else { ?>
    <?php $_block_plugin119 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin119, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('style'=>$_smarty_tpl->tpl_vars['style']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'fluid'=>$_smarty_tpl->tpl_vars['fluid']->value));
$_block_repeat=true;
echo $_block_plugin119->render(array('style'=>$_smarty_tpl->tpl_vars['style']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'fluid'=>$_smarty_tpl->tpl_vars['fluid']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'containerContent', array(), true);?>

    <?php $_block_repeat=false;
echo $_block_plugin119->render(array('style'=>$_smarty_tpl->tpl_vars['style']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'fluid'=>$_smarty_tpl->tpl_vars['fluid']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* smarty_template_function_containerContent_208101942967ab31663a27f7_25899026 */
if (!function_exists('smarty_template_function_containerContent_208101942967ab31663a27f7_25899026')) {
function smarty_template_function_containerContent_208101942967ab31663a27f7_25899026(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if ($_smarty_tpl->tpl_vars['instance']->value->getProperty('background-flag') === 'video' && !empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-src'))) {?>
        <video autoplay loop playsinline muted poster="<?php echo $_smarty_tpl->tpl_vars['videoPosterUrl']->value;?>
"
               style="display: inherit; width: 100%; position: absolute; left: 0; top: 0; opacity: 0.7;">
            <?php if (!$_smarty_tpl->tpl_vars['isPreview']->value) {?>
                <source src="<?php echo $_smarty_tpl->tpl_vars['videoSrcUrl']->value;?>
" type="video/mp4">
            <?php }?>
        </video>
    <?php }?>
    <div <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>class='opc-area' data-area-id='container'<?php }?> style="position: relative;">
        <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaPreviewHtml('container');?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaFinalHtml('container');?>

        <?php }?>
    </div>
<?php
}}
/*/ smarty_template_function_containerContent_208101942967ab31663a27f7_25899026 */
}
