<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:37:28
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/plugins/dzm_niuplus_companion/adminmenu/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33f684a8732_14581763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ebecc9caa54a38dd422b941996ed2848ffc0a18' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/plugins/dzm_niuplus_companion/adminmenu/template/index.tpl',
      1 => 1738751411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33f684a8732_14581763 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    window.dzm_niuplus_companion_adminBaseUrl = '<?php echo $_smarty_tpl->tpl_vars['dzm_niuplus_companion_adminBaseUrl']->value;?>
';
    window.dzm_niuplus_companion_appPath = '<?php echo $_smarty_tpl->tpl_vars['dzm_niuplus_companion_appPath']->value;?>
';
    window.dzm_niuplus_companion_productId = '<?php echo $_smarty_tpl->tpl_vars['dzm_niuplus_companion_appId']->value;?>
';
    window.dzm_niuplus_companion_appVersion = '<?php echo $_smarty_tpl->tpl_vars['dzm_niuplus_companion_appVersion']->value;?>
';
    window.dzm_niuplus_companion_isexs = <?php echo $_smarty_tpl->tpl_vars['dzm_niuplus_companion_isexs']->value;?>
;
    window.dzm_niuplus_companion_hasBundleLicense = <?php echo $_smarty_tpl->tpl_vars['dzm_niuplus_companion_hasBundleLicense']->value;?>
;
    window.dzm_niuplus_companion_bundleLicense = '<?php echo $_smarty_tpl->tpl_vars['dzm_niuplus_companion_bundleLicense']->value;?>
';
    window.dzm_niuplus_companion_current_template = '<?php echo $_smarty_tpl->tpl_vars['dzm_niuplus_companion_current_template']->value;?>
';
    window.dzm_niuplus_companion_parent_template = '<?php echo $_smarty_tpl->tpl_vars['dzm_niuplus_companion_parent_template']->value;?>
';


    window.dzm_niuplus_companion_options = new Object();
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dzm_niuplus_companion_options']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
    window.dzm_niuplus_companion_options.<?php echo $_smarty_tpl->tpl_vars['option']->value->valueID;?>
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


<div id="dzm_niuplus_companion-app">

</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dzm_niuplus_companion_assets']->value['css'], 'cssAsset');
$_smarty_tpl->tpl_vars['cssAsset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cssAsset']->value) {
$_smarty_tpl->tpl_vars['cssAsset']->do_else = false;
?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['dzm_niuplus_companion_appPath']->value;
echo $_smarty_tpl->tpl_vars['cssAsset']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['dzm_niuplus_companion_pluginVersion']->value;?>
" rel="stylesheet" />
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dzm_niuplus_companion_assets']->value['js'], 'jsAsset');
$_smarty_tpl->tpl_vars['jsAsset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jsAsset']->value) {
$_smarty_tpl->tpl_vars['jsAsset']->do_else = false;
?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dzm_niuplus_companion_appPath']->value;
echo $_smarty_tpl->tpl_vars['jsAsset']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['dzm_niuplus_companion_pluginVersion']->value;?>
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
            var $appContainer = $('#dzm_niuplus_companion-app');
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

<!--style>
    @import "../../../../templates/NIUplusChild/themes/clean-custom/clean-custom.css";
    @import "../../../../templates/NIUplusChild/themes/clean-custom/clean-custom_crit.css";
    @import "../../../../templates/NIUplusChild/themes/clean-custom/clean-custom_niu_crit.css";
</style--><?php }
}
