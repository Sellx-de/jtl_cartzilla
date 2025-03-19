<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:56:39
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/config_heading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a343e7672c59_53940890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4b408d1dcbad66617dae61faab9b559c2dc6a61' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/config_heading.tpl',
      1 => 1738748467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a343e7672c59_53940890 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="config-card-wrapper">
<div class="card">
    <div class="card-header">
        <span class="subheading1" id="<?php echo $_smarty_tpl->tpl_vars['subsection']->value->getValueName();?>
">
            <?php echo $_smarty_tpl->tpl_vars['subsection']->value->getName();?>

            <?php if (!empty($_smarty_tpl->tpl_vars['subsection']->value->cSektionsPfad)) {?>
                <span class="path float-right">
                    <strong><?php echo __('settingspath');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['cnf']->value->subsection;?>

                </span>
            <?php }?>
        </span>
        <hr class="mb-n3">
    </div>
    <div class="card-body">
<?php }
}
