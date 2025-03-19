<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:22:34
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/widgets/shopinfo_version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33bea4b3a25_00481836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1dba3789c8312dd6b7f72f6e73676739b13bc4c' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/widgets/shopinfo_version.tpl',
      1 => 1738748651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33bea4b3a25_00481836 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['oSubscription']->value || $_smarty_tpl->tpl_vars['oVersion']->value) {?>
    <table class="table table-condensed table-hover table-blank">
        <tbody>
            <?php if ($_smarty_tpl->tpl_vars['oSubscription']->value) {?>
                <tr>
                    <td width="50%"><?php echo __('subscriptionValidUntil');?>
</td>
                    <td width="50%" id="subscription">
                        <?php if ($_smarty_tpl->tpl_vars['oSubscription']->value->nDayDiff < 0) {?>
                            <a href="https://jtl-url.de/subscription" target="_blank"><?php echo __('expired');?>
</a>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['oSubscription']->value->dDownloadBis_DE;?>

                        <?php }?>
                    </td>
                </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['oVersion']->value) {?>
                <tr>
                    <td colspan="2" id="version" class="h1">
                        <?php if ($_smarty_tpl->tpl_vars['bUpdateAvailable']->value) {?>
                            <span class="badge badge-info"><?php echo sprintf(__('Version %s available'),$_smarty_tpl->tpl_vars['strLatestVersion']->value);?>
</span>
                        <?php } else { ?>
                            <span class="badge badge-success"><?php echo __('shopVersionUpToDate');?>
</span>
                        <?php }?>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
<?php }
}
}
