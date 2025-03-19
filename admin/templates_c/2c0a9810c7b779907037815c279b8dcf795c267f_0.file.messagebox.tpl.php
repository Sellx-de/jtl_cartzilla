<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:10:05
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/messagebox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3470d74ec92_19192398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c0a9810c7b779907037815c279b8dcf795c267f' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/messagebox.tpl',
      1 => 1738748452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3470d74ec92_19192398 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" tabindex="-1" id="messageboxModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <div class="alert alert-info" id="messageboxAlert"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="opc-btn-primary opc-small-btn" data-dismiss="modal">
                    <?php echo __('OK');?>

                </button>
            </div>
        </div>
    </div>
</div>
<?php }
}
