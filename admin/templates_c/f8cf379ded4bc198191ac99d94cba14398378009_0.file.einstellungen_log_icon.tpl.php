<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:56:39
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/einstellungen_log_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a343e76d4f91_12217317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8cf379ded4bc198191ac99d94cba14398378009' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/einstellungen_log_icon.tpl',
      1 => 1738748454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a343e76d4f91_12217317 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['account']->value->oGroup->kAdminlogingruppe === 1) {?>
    <button class="btn btn-link px-1 py-0 setting-changelog"
        title="<?php echo __('settingLogTitle');?>
"
        data-toggle="tooltip"
        data-placement="top"
        data-setting-name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
"
        data-name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getName();?>
"
        data-id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getID();?>
"
        type="button"
    >
        <span class="icon-hover">
            <span class="fal fa-history"></span>
            <span class="fas fa-history"></span>
        </span>
    </button>
<?php }
}
}
