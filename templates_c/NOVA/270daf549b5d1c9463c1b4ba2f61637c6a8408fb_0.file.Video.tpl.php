<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/src/OPC/Portlets/Video/Video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31663dff84_69347185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '270daf549b5d1c9463c1b4ba2f61637c6a8408fb' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/src/OPC/Portlets/Video/Video.tpl',
      1 => 1739261094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/video.tpl' => 1,
  ),
),false)) {
function content_67ab31663dff84_69347185 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
    <div <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAttributeString();?>
 class="opc-Video" style="position: relative">
        <?php if (!empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-responsive'))) {?>
            <?php $_smarty_tpl->_assignInScope('style', 'width:100%;');?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('style', 'width:');?>
            <?php $_smarty_tpl->_assignInScope('style', ($_smarty_tpl->tpl_vars['style']->value).($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-width')));?>
            <?php $_smarty_tpl->_assignInScope('style', ($_smarty_tpl->tpl_vars['style']->value).('px;height:'));?>
            <?php $_smarty_tpl->_assignInScope('style', ($_smarty_tpl->tpl_vars['style']->value).($_smarty_tpl->tpl_vars['instance']->value->getProperty('video-height')));?>
            <?php $_smarty_tpl->_assignInScope('style', ($_smarty_tpl->tpl_vars['style']->value).('px;'));?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('src', $_smarty_tpl->tpl_vars['portlet']->value->getPreviewImageUrl($_smarty_tpl->tpl_vars['instance']->value));?>

        <?php if ($_smarty_tpl->tpl_vars['src']->value !== null && $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-vendor') === 'youtube') {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('src'=>$_smarty_tpl->tpl_vars['src']->value,'alt'=>'YouTube Video','fluid'=>true,'style'=>$_smarty_tpl->tpl_vars['style']->value),$_smarty_tpl ) );?>

            <div class="give-consent-preview"
                 style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
background-image: url(<?php echo $_smarty_tpl->tpl_vars['portlet']->value->getPreviewOverlayUrl();?>
)"></div>
        <?php } elseif ($_smarty_tpl->tpl_vars['src']->value !== null && $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-vendor') === 'vimeo') {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('src'=>$_smarty_tpl->tpl_vars['src']->value,'alt'=>'Vimeo Video','fluid'=>true,'style'=>$_smarty_tpl->tpl_vars['style']->value),$_smarty_tpl ) );?>

            <div class="give-consent-preview"
                 style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
background-image: url(<?php echo $_smarty_tpl->tpl_vars['portlet']->value->getPreviewOverlayUrl();?>
)"></div>
        <?php } else { ?>
            <div>
                <i class="fas fa-film"></i>
                <span><?php echo __('Video');?>
</span>
            </div>
        <?php }?>
    </div>
<?php } else { ?>
    <div id="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getUid();?>
" <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAttributeString();?>
 class="opc-Video <?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleClasses();?>
">
        <?php $_smarty_tpl->_subTemplateRender('file:snippets/video.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->tpl_vars['instance']->value->video,'title'=>htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['instance']->value->getProperty('video-title') ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true),'class'=>'opc-Video-iframe-wrapper','responsive'=>$_smarty_tpl->tpl_vars['instance']->value->getProperty('video-responsive')), 0, false);
?>
    </div>
<?php }
}
}
