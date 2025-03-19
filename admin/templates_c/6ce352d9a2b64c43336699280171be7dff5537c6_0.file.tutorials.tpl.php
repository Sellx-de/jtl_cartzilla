<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:10:05
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/tutorials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3470d75c759_48798781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ce352d9a2b64c43336699280171be7dff5537c6' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/tutorials.tpl',
      1 => 1738748258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3470d75c759_48798781 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="tutorials">
    <div id="tutBackdrop"></div>
    <div id="tutBackdrop2"></div>
    <div id="tutBackdrop3"></div>
    <div id="tutBox">
        <div id="tutboxHeader" class="modal-header">
            <h5 id="tutboxTitle">Hello</h5>
            <button type="button" class="opc-header-btn" onclick="opc.tutorial.stopTutorial()">
                <i class="fa fas fa-times"></i>
            </button>
        </div>
        <div id="tutboxContent">Text</div>
        <div id="tutboxFooter">
            <button type="button" id="tutboxNext" class="opc-btn-primary opc-mini-btn opc-float-right"
                    onclick="opc.tutorial.goNextStep()">
                <span id="tutboxNextLabel">
                    <?php echo __('Next');?>

                    <i class="fas fa-chevron-right"></i>
                </span>
                <span id="tutboxDoneLabel" style="display: none">
                    <i class="fas fa-check"></i>
                    <?php echo __('Done');?>

                </span>
            </button>
            <button type="button" id="tutboxPrev" class="opc-btn-secondary opc-mini-btn opc-float-right"
                    onclick="opc.tutorial.goPrevStep()">
                <i class="fas fa-chevron-left"></i>
                <?php echo __('Back');?>

            </button>
        </div>
    </div>
</div><?php }
}
