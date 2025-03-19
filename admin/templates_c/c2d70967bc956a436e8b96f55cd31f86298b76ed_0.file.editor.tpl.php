<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:10:03
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3470b6466a2_63932291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2d70967bc956a436e8b96f55cd31f86298b76ed' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/editor.tpl',
      1 => 1738748258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./sidebar.tpl' => 1,
    'file:./modals/publish.tpl' => 1,
    'file:./modals/loader.tpl' => 1,
    'file:./modals/error.tpl' => 1,
    'file:./modals/config.tpl' => 1,
    'file:./modals/blueprint.tpl' => 1,
    'file:./modals/blueprint_delete.tpl' => 1,
    'file:./modals/tour.tpl' => 1,
    'file:./modals/restore_unsaved.tpl' => 1,
    'file:./modals/messagebox.tpl' => 1,
    'file:./tutorials.tpl' => 1,
  ),
),false)) {
function content_67a3470b6466a2_63932291 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['opc']->value->getAdminLangTag();?>
">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo __('onPageComposer');?>
</title>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adminUrl']->value;?>
/opc/css/dependencies.bundle.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateUrl']->value;?>
css/typeaheadjs.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateUrl']->value;?>
css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adminUrl']->value;?>
/opc/css/editor.css">

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['adminUrl']->value;?>
/opc/js/dependencies.bundle.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateUrl']->value;?>
js/searchpicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateUrl']->value;?>
js/moment-with-locales.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateUrl']->value;?>
js/tempusdominus-bootstrap-4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['shopUrl']->value;?>
/includes/libs/tinymce/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="module">
        import { OPC } from "<?php echo $_smarty_tpl->tpl_vars['adminUrl']->value;?>
/opc/js/OPC.js";

        window.opc = new OPC({
            jtlToken:    '<?php echo $_SESSION['jtl_token'];?>
',
            shopUrl:     '<?php echo $_smarty_tpl->tpl_vars['shopUrl']->value;?>
',
            adminUrl:    '<?php echo $_smarty_tpl->tpl_vars['adminUrl']->value;?>
',
            pageKey:     <?php echo $_smarty_tpl->tpl_vars['pageKey']->value;?>
,
            error:       <?php echo json_encode($_smarty_tpl->tpl_vars['error']->value);?>
,
            messages:    <?php echo json_encode($_smarty_tpl->tpl_vars['opc']->value->getEditorMessages());?>
,
        });

        opc.init();
    <?php echo '</script'; ?>
>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opc']->value->getPortletInitScriptUrls(), 'scriptUrl');
$_smarty_tpl->tpl_vars['scriptUrl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['scriptUrl']->value) {
$_smarty_tpl->tpl_vars['scriptUrl']->do_else = false;
?>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scriptUrl']->value;?>
"><?php echo '</script'; ?>
>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</head>
<body>
    <div id="opc">
        <?php $_smarty_tpl->_subTemplateRender("file:./sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageName'=>$_smarty_tpl->tpl_vars['page']->value->getName()), 0, false);
?>

        <div id="resizer"></div>

        <div id="iframePanel">
            <iframe id="iframe"></iframe>
        </div>

        <div id="previewPanel" style="display: none">
            <iframe id="previewFrame" name="previewFrame"></iframe>
            <form action="" target="previewFrame" method="post" id="previewForm">
                <input type="hidden" name="opcPreviewMode" value="yes">
                <input type="hidden" name="pageData" value="" id="previewPageDataInput">
            </form>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:./modals/publish.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./modals/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./modals/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./modals/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./modals/blueprint.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./modals/blueprint_delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./modals/tour.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./modals/restore_unsaved.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./modals/messagebox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div id="portletToolbar" class="opc-portlet-toolbar" style="display:none">
            <button type="button" class="opc-toolbar-btn opc-label" id="portletLabel"></button>
            <button type="button" class="opc-toolbar-btn" id="btnConfig" title="<?php echo __('editSettings');?>
">
                <i class="fas fa-pen"></i>
            </button>
            <button type="button" class="opc-toolbar-btn" id="btnClone" title="<?php echo __('copySelect');?>
">
                <i class="far fa-clone"></i>
            </button>
            <button type="button" class="opc-toolbar-btn" id="btnBlueprint" title="<?php echo __('saveTemplate');?>
">
                <i class="far fa-star"></i>
            </button>
            <button type="button" class="opc-toolbar-btn" id="btnParent" title="<?php echo __('goUp');?>
">
                <i class="fas fa-level-up-alt"></i>
            </button>
            <button type="button" class="opc-toolbar-btn" id="btnTrash" title="<?php echo __('deleteSelect');?>
">
                <i class="fas fa-trash"></i>
            </button>
        </div>

        <div id="portletPreviewLabel" class="opc-label" style="display:none"></div>

        <div id="dropTargetBlueprint" class="opc-droptarget" style="display:none">
            <div class="opc-droptarget-hover">
                <img src="<?php echo $_smarty_tpl->tpl_vars['shopUrl']->value;?>
/<?php echo (defined('PFAD_ADMIN') ? constant('PFAD_ADMIN') : null);?>
opc/gfx/icon-drop-target.svg"
                     class="opc-droptarget-icon" alt="Drop Target">
                <span><?php echo __('dropPortletHere');?>
</span>
                <i class="opc-droptarget-info fas fa-info-circle" data-toggle="tooltip" data-placement="left"></i>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:./tutorials.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</body>
</html>
<?php }
}
