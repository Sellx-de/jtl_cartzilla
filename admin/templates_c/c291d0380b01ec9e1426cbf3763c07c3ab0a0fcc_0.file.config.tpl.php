<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:10:05
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3470d7094b9_35815021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c291d0380b01ec9e1426cbf3763c07c3ab0a0fcc' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/config.tpl',
      1 => 1738748452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3470d7094b9_35815021 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="configModal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="configModalTitle">
                    <?php echo __('editPortletPrefix');?>

                    <span id="configPortletName"></span>
                    <?php echo __('editPortletPostfix');?>

                </h5>
                <button type="button" class="opc-header-btn" data-toggle="tooltip" data-dismiss="modal"
                        data-placement="bottom">
                    <i class="fa fas fa-times"></i>
                </button>
            </div>
            <form id="configForm" action="javascript:void(0);" onsubmit="opc.gui.saveConfig()">
                <div class="modal-body" id="configModalBody"></div>
                <div class="modal-footer" id="stdConfigButtons">
                    <button type="button" class="opc-btn-secondary opc-small-btn" data-dismiss="modal">
                        <?php echo __('cancel');?>

                    </button>
                    <button type="submit" class="opc-btn-primary opc-small-btn" id="configSave">
                        <?php echo __('Save');?>

                    </button>
                </div>
                <div class="modal-footer" id="missingConfigButtons">
                    <button type="submit" class="opc-btn-primary opc-small-btn"  data-dismiss="modal">
                        <?php echo __('OK');?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
