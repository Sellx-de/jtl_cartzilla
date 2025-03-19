<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:56:39
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/einstellungen_reset_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a343e76e9fc9_29498039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '372c6df965f0d9558678e495bfcde5e5bc55212c' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/einstellungen_reset_icon.tpl',
      1 => 1738748453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a343e76e9fc9_29498039 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['account']->value->oGroup->kAdminlogingruppe === 1) {?>
    <?php if ($_smarty_tpl->tpl_vars['cnf']->value->getInputType() === 'selectbox') {?>
        <?php $_smarty_tpl->_assignInScope('defaultValue', __(((string)$_smarty_tpl->tpl_vars['cnf']->value->getValueName())."_value(".((string)$_smarty_tpl->tpl_vars['cnf']->value->getDefaultValue()).")"));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('defaultValue', $_smarty_tpl->tpl_vars['cnf']->value->getDefaultValue());?>
    <?php }?>
    <button type="button"
            name="resetSetting"
            value="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
"
            class="btn btn-link p-0 <?php if ($_smarty_tpl->tpl_vars['cnf']->value->getSetValue() === $_smarty_tpl->tpl_vars['cnf']->value->getDefaultValue()) {?>hidden<?php }?> delete-confirm btn-submit"
            title="<?php echo sprintf(__('settingReset'),$_smarty_tpl->tpl_vars['defaultValue']->value);?>
"
            data-toggle="tooltip"
            data-placement="top"
            data-modal-body="<?php echo sprintf(__('confirmResetLog'),__(((string)$_smarty_tpl->tpl_vars['cnf']->value->getValueName())."_name"),$_smarty_tpl->tpl_vars['defaultValue']->value);?>
"
            data-modal-title="<?php echo __('confirmResetLogTitle');?>
"
            data-modal-submit="<?php echo __('reset');?>
"
    >
        <span class="icon-hover">
            <span class="fal fa-refresh"></span>
            <span class="fas fa-refresh"></span>
        </span>
    </button>
<?php }
}
}
