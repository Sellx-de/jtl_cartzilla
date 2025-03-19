<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:10:05
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3470d7329b2_15689607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c75a3385a7e65580074085264914228e9553c9c2' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/modals/tour.tpl',
      1 => 1738748452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3470d7329b2_15689607 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="tourModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo __('help');?>
</h5>
                <button type="button" class="opc-header-btn" data-toggle="tooltip" data-dismiss="modal"
                        data-placement="bottom">
                    <i class="fa fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <p><?php echo __('noteInfoInGuide');?>
</p>
                <div class="card" onclick="opc.tutorial.startTour(0)">
                    <div class="card-header"><?php echo __('generalIntroduction');?>
</div>
                    <div class="card-body"><?php echo __('getToKnowComposer');?>
</div>
                </div>
                <div class="card" onclick="opc.tutorial.startTour(1)">
                    <div class="card-header"><?php echo __('animation');?>
</div>
                    <div class="card-body"><?php echo __('noteMovementOnPage');?>
</div>
                </div>
                <div class="card" onclick="opc.tutorial.startTour(2)">
                    <div class="card-header"><?php echo __('templates');?>
</div>
                    <div class="card-body"><?php echo __('noteSaveAsTemplate');?>
</div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
