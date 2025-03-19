<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:22:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/widgets/shopinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33be61f4b26_50644271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8317409d6cbc2525681c5a3579d2436e86ff5be1' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/widgets/shopinfo.tpl',
      1 => 1738748652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33be61f4b26_50644271 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget-custom-data">
    <table class="table table-condensed table-hover table-blank">
        <tbody>
        <tr>
            <td width="50%"><?php echo __('shopVersion');?>
</td>
            <td width="50%" id="current_shop_version"><?php echo $_smarty_tpl->tpl_vars['strFileVersion']->value;?>
 <?php if (!empty($_smarty_tpl->tpl_vars['strMinorVersion']->value)) {?>(Build: <?php echo $_smarty_tpl->tpl_vars['strMinorVersion']->value;?>
)<?php }?></td>
        </tr>
        <tr>
            <td width="50%"><?php echo __('templateVersion');?>
</td>
            <td width="50%" id="current_tpl_version"><?php echo $_smarty_tpl->tpl_vars['strTplVersion']->value;?>
</td>
        </tr>
        <tr>
            <td width="50%"><?php echo __('dbVersion');?>
</td>
            <td width="50%"><?php echo $_smarty_tpl->tpl_vars['strDBVersion']->value;?>
</td>
        </tr>
        <tr>
            <td width="50%"><?php echo __('dbLastUpdate');?>
</td>
            <td width="50%"><?php echo $_smarty_tpl->tpl_vars['strUpdated']->value;?>
</td>
        </tr>
        </tbody>
    </table>
    <div id="version_data_wrapper">
        <p class="text-center ajax_preloader update"><i class="fa fas fa-spinner fa-spin"></i> <?php echo __('loading');?>
</p>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        ioCall(
            'getShopInfo',
            ['widgets/shopinfo_version.tpl', 'version_data_wrapper'],
            undefined,
            undefined,
            undefined,
            true
        );
    });
<?php echo '</script'; ?>
>
<?php }
}
