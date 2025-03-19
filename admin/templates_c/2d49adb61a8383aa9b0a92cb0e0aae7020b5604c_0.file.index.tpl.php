<?php
/* Smarty version 4.5.4, created on 2025-02-06 17:08:41
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/plugins/dzm_opc_inheriter/adminmenu/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a4de89c00a08_57774964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d49adb61a8383aa9b0a92cb0e0aae7020b5604c' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/plugins/dzm_opc_inheriter/adminmenu/template/index.tpl',
      1 => 1738753216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a4de89c00a08_57774964 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    window.dzm_opc_inheriter_adminBaseUrl = '<?php echo $_smarty_tpl->tpl_vars['dzm_opc_inheriter_adminBaseUrl']->value;?>
';
    window.dzm_opc_inheriter_appPath = '<?php echo $_smarty_tpl->tpl_vars['dzm_opc_inheriter_appPath']->value;?>
';
    window.dzm_opc_inheriter_productId = '<?php echo $_smarty_tpl->tpl_vars['dzm_opc_inheriter_appId']->value;?>
';
    window.dzm_opc_inheriter_appVersion = '<?php echo $_smarty_tpl->tpl_vars['dzm_opc_inheriter_appVersion']->value;?>
';
    window.dzm_opc_inheriter_isexs = <?php echo $_smarty_tpl->tpl_vars['dzm_opc_inheriter_isexs']->value;?>
;

    window.dzm_opc_inheriter_hasBundleLicense = <?php echo $_smarty_tpl->tpl_vars['dzm_opc_inheriter_hasBundleLicense']->value;?>
;
    window.dzm_opc_inheriter_bundleLicense = '<?php echo $_smarty_tpl->tpl_vars['dzm_opc_inheriter_bundleLicense']->value;?>
';


    window.dzm_opc_inheriter_options = new Object();
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dzm_opc_inheriter_options']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
    window.dzm_opc_inheriter_options.<?php echo $_smarty_tpl->tpl_vars['option']->value->valueID;?>
 = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value->value ));?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    window.jtlToken = '<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
';
<?php echo '</script'; ?>
>

<div id="dzm_opc_inheriter-app">

</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dzm_opc_inheriter_assets']->value['css'], 'cssAsset');
$_smarty_tpl->tpl_vars['cssAsset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cssAsset']->value) {
$_smarty_tpl->tpl_vars['cssAsset']->do_else = false;
?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['dzm_opc_inheriter_appPath']->value;
echo $_smarty_tpl->tpl_vars['cssAsset']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['dzm_opc_inheriter_pluginVersion']->value;?>
" rel="stylesheet" />
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dzm_opc_inheriter_assets']->value['js'], 'jsAsset');
$_smarty_tpl->tpl_vars['jsAsset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jsAsset']->value) {
$_smarty_tpl->tpl_vars['jsAsset']->do_else = false;
?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dzm_opc_inheriter_appPath']->value;
echo $_smarty_tpl->tpl_vars['jsAsset']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['dzm_opc_inheriter_pluginVersion']->value;?>
"  type="text/javascript"><?php echo '</script'; ?>
>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



<?php echo '<script'; ?>
 type="text/javascript">
    window.addEventListener('DOMContentLoaded', function() {
        (function($) {
            // at this point the defered JS has been loaded
            var $appContainer = $('#dzm_opc_inheriter-app');
            $appContainer.appendTo('.backend-main');
            $('#content_wrapper').hide();
        })(jQuery);

        window.setInterval(function() {
            if(typeof CKEDITOR !== 'undefined') {
                for (let name in CKEDITOR.instances) {
                    if(CKEDITOR.instances.hasOwnProperty(name)) {
                        CKEDITOR.instances[name].destroy(true);
                    }
                }
            }
        }, 250);
    });
<?php echo '</script'; ?>
>
<?php }
}
