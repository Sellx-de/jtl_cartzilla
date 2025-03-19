<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31663e55b1_87516025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ee73fff069b4e9cee13f5e1f3b55e655babf5f7' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/snippets/video.tpl',
      1 => 1739261177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab31663e55b1_87516025 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['title']->value)) {?>
    <label><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
<?php }?>
<div class="<?php if (!empty($_smarty_tpl->tpl_vars['class']->value)) {
echo $_smarty_tpl->tpl_vars['class']->value;
}?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['responsive']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?>embed-responsive embed-responsive-16by9<?php }?>"
     <?php if (!empty($_smarty_tpl->tpl_vars['id']->value)) {?>id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['video']->value->getType() === JTL\Media\Video::TYPE_YOUTUBE) {?>
        <?php $_smarty_tpl->_assignInScope('provider', 'youtube');?>
    <?php } elseif ($_smarty_tpl->tpl_vars['video']->value->getType() === JTL\Media\Video::TYPE_VIMEO) {?>
        <?php $_smarty_tpl->_assignInScope('provider', 'vimeo');?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('provider', null);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['provider']->value === 'youtube' || $_smarty_tpl->tpl_vars['provider']->value === 'vimeo') {?>
        <iframe data-src="<?php echo $_smarty_tpl->tpl_vars['video']->value->getEmbedUrl();?>
"
                class="needs-consent <?php echo $_smarty_tpl->tpl_vars['provider']->value;?>
"
                width="<?php echo (($tmp = $_smarty_tpl->tpl_vars['video']->value->getWidth() ?? null)===null||$tmp==='' ? '100%' : $tmp);?>
"
                height="<?php echo (($tmp = $_smarty_tpl->tpl_vars['video']->value->getHeight() ?? null)===null||$tmp==='' ? 'auto' : $tmp);?>
"
                <?php if (!empty($_smarty_tpl->tpl_vars['title']->value)) {?>title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['video']->value->isAllowFullscreen()) {?>allowfullscreen<?php }?>>
        </iframe>
        <?php $_smarty_tpl->_assignInScope('previewImageUrl', $_smarty_tpl->tpl_vars['video']->value->getPreviewImageUrl());?>
        <a href="#" class="trigger give-consent give-consent-preview"
           data-consent="<?php echo $_smarty_tpl->tpl_vars['provider']->value;?>
"
           style="background-image:
                   url(<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/templates/NOVA/themes/base/images/video/preview.svg)
                   <?php if (!empty($_smarty_tpl->tpl_vars['previewImageUrl']->value)) {?>,url(<?php echo $_smarty_tpl->tpl_vars['previewImageUrl']->value;?>
);<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['provider']->value === 'youtube') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'allowConsentYouTube'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'allowConsentVimeo'),$_smarty_tpl ) );?>

            <?php }?>
        </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['video']->value->getType() === JTL\Media\Video::TYPE_FILE) {?>
        <video class="product-detail-video mw-100" controls preload="metadata"
               <?php if (!empty($_smarty_tpl->tpl_vars['video']->value->getWidth())) {?>width="<?php echo $_smarty_tpl->tpl_vars['video']->value->getWidth();?>
"<?php }?>
               <?php if (!empty($_smarty_tpl->tpl_vars['video']->value->getHeight())) {?>height="<?php echo $_smarty_tpl->tpl_vars['video']->value->getHeight();?>
"<?php }?>
               <?php if (!$_smarty_tpl->tpl_vars['video']->value->isAllowFullscreen()) {?>controlslist="nofullscreen"<?php }?>>
            <source src="<?php echo $_smarty_tpl->tpl_vars['video']->value->getEmbedUrl();?>
#t=0.001"
                    <?php if (!empty($_smarty_tpl->tpl_vars['video']->value->getFileFormat())) {?>type="video/<?php echo $_smarty_tpl->tpl_vars['video']->value->getFileFormat();?>
"<?php }?>>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'videoTagNotSupported','section'=>'errorMessages'),$_smarty_tpl ) );?>

        </video>
    <?php }?>
</div><?php }
}
