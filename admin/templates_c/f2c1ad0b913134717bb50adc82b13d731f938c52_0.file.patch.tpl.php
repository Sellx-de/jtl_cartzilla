<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:22:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/widgets/patch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33be61c5d40_52621068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2c1ad0b913134717bb50adc82b13d731f938c52' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/widgets/patch.tpl',
      1 => 1738748651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33be61c5d40_52621068 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        ioCall(
            'getRemoteData',
            ['<?php echo (defined('JTLURL_GET_SHOPPATCH') ? constant('JTLURL_GET_SHOPPATCH') : null);?>
?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
',
                'oPatch_arr',
                'widgets/patch_data.tpl',
                'patch_data_wrapper'],
            undefined,
            undefined,
            undefined,
            true
        );
    });
<?php echo '</script'; ?>
>

<div class="widget-custom-data widget-patch">
    <div id="patch_data_wrapper">
        <p class="ajax_preloader"><?php echo __('loading');?>
</p>
    </div>
</div>
<?php }
}
