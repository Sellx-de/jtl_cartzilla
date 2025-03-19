<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:11:59
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/seite_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3396f12c391_74847897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c4b1fe3b789c8251366dd5df2461d949aac4f07' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/seite_header.tpl',
      1 => 1738748472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3396f12c391_74847897 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-header card-widget">
    <div class="row">
        <div class="col card-header">
            <h1 class="content-header-headline <?php if ((isset($_smarty_tpl->tpl_vars['cBeschreibung']->value)) && strlen((string) $_smarty_tpl->tpl_vars['cBeschreibung']->value) == 0) {?>nospacing<?php }?>"><?php if (strlen((string) $_smarty_tpl->tpl_vars['cTitel']->value) > 0) {
echo $_smarty_tpl->tpl_vars['cTitel']->value;
} else {
echo __('unknown');
}?></h1>
        </div>
        <div class="col-auto ml-auto">
            <?php if ($_smarty_tpl->tpl_vars['wizardDone']->value) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/favs" class="btn btn-link btn-lg" data-toggle="tooltip" data-container="body" data-placement="left" title="<?php echo __('addToFavourites');?>
" id="fav-add">
                    <span class="fal fa-star"></span>
                </a>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['cDokuURL']->value)) && strlen((string) $_smarty_tpl->tpl_vars['cDokuURL']->value) > 0) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['cDokuURL']->value;?>
" target="_blank" class="btn btn-link btn-lg" data-toggle="tooltip"
                   data-container="body" data-placement="left" title="<?php echo __('goToDocu');?>
">
                    <span class="fal fa-map-signs"></span>
                </a>
            <?php }?>
        </div>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['cBeschreibung']->value)) && strlen((string) $_smarty_tpl->tpl_vars['cBeschreibung']->value) > 0) {?>
        <div class="description <?php if ((isset($_smarty_tpl->tpl_vars['cClass']->value))) {
echo $_smarty_tpl->tpl_vars['cClass']->value;
}?>">
            <?php if ((isset($_smarty_tpl->tpl_vars['onClick']->value))) {?><a href="#" onclick="<?php echo $_smarty_tpl->tpl_vars['onClick']->value;?>
"><?php }
echo $_smarty_tpl->tpl_vars['cBeschreibung']->value;
if ((isset($_smarty_tpl->tpl_vars['onClick']->value))) {?></a><?php }?>
        </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['pluginMeta']->value))) {?>
        <div class="card-body body-hidden">
        <p><strong><?php echo __('pluginAuthor');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['pluginMeta']->value->getAuthor();?>
</p>
        <p><strong><?php echo __('pluginHomepage');?>
:</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['pluginMeta']->value->getURL();?>
" target="_blank" rel="noopener"><i class="fa fa-external-link"></i> <?php echo __($_smarty_tpl->tpl_vars['pluginMeta']->value->getURL());?>
</a></p>
        <p><strong><?php echo __('pluginVersion');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['pluginMeta']->value->getVersion();?>
</p>
        <p><strong><?php echo __('description');?>
:</strong> <?php echo __($_smarty_tpl->tpl_vars['pluginMeta']->value->getDescription());?>
</p>
        </div>
    <?php }?>
</div>
<?php }
}
