<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:10:05
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/draftstatus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3470d6c87d7_53913669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7efee6d852c36b8d3cc39178ae15363be2d830f0' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/draftstatus.tpl',
      1 => 1738748257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3470d6c87d7_53913669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/includes/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('draftStatus', $_smarty_tpl->tpl_vars['page']->value->getStatus());
if ($_smarty_tpl->tpl_vars['draftStatus']->value === 0) {?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value->getPublishTo() === null) {?>
        <span class="opc-public"><?php echo __('activeSince');?>
</span>
        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->getPublishFrom(),'d.m.Y - H:i');?>

    <?php } else { ?>
        <span class="opc-public"><?php echo __('activeUntil');?>
</span>
        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->getPublishTo(),'d.m.Y - H:i');?>

    <?php }
} elseif ($_smarty_tpl->tpl_vars['draftStatus']->value === 1) {?>
    <span class="opc-planned"><?php echo __('scheduledFor');?>
</span>
    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->getPublishFrom(),'d.m.Y - H:i');?>

<?php } elseif ($_smarty_tpl->tpl_vars['draftStatus']->value === 2) {?>
    <span class="opc-status-draft"><?php echo __('notScheduled');?>
</span>
<?php } elseif ($_smarty_tpl->tpl_vars['draftStatus']->value === 3) {?>
    <span class="opc-backdate"><?php echo __('expiredOn');?>
</span>
    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value->getPublishTo(),'d.m.Y - H:i');?>

<?php }
}
}
