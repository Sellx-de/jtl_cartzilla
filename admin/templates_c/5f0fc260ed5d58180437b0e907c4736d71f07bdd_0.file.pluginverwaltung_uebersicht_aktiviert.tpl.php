<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:25:29
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_uebersicht_aktiviert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33c99a69e10_71321280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f0fc260ed5d58180437b0e907c4736d71f07bdd' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_uebersicht_aktiviert.tpl',
      1 => 1738748471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/pluginverwaltung_uebersicht_aktiviert_tab.tpl' => 1,
  ),
),false)) {
function content_67a33c99a69e10_71321280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_uebersicht_aktiviert_tab.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((defined('SAFE_MODE') ? constant('SAFE_MODE') : null)) {
echo '<script'; ?>
>
    
    function invalidatePlugin(pluginID, msg) {
        let notify = '<span title="<?php echo __('Plugin probably flawed');?>
 ' + msg + '" class="label text-danger" data-toggle="tooltip">'
            + '    <span class="icon-hover">'
            + '      <span class="fal fa-exclamation-triangle"></span>'
            + '      <span class="fas fa-exclamation-triangle"></span>'
            + '    </span>'
            + '</span>';
        $('[for="plugin-check-' + pluginID + '"]:first').append($(notify));
    }
    function checkPlugin(pluginID) {
        simpleAjaxCall(BACKEND_URL + 'io', {
            jtl_token: JTL_TOKEN,
            io : JSON.stringify({
                name: 'pluginTestLoading',
                params : [pluginID]
            })
        }, function (result) {
            if (!result.code || result.code !== <?php echo JTL\Plugin\InstallCode::OK;?>
) {
                invalidatePlugin(pluginID, result.message
                    ? result.message
                    : (result.error.message ? result.error.message : ''));
            }
        }, function (result) {
            invalidatePlugin(pluginID, result.responseJSON.message
                ? result.responseJSON.message
                : (result.responseJSON.error.message ? result.responseJSON.error.message : ''));
        }, undefined, true);
    }
    $('.check input').each(function () {
        let value = parseInt($(this).val());
        if (!isNaN(value)) {
            checkPlugin(value);
        }
    })
    
<?php echo '</script'; ?>
>
<?php }
}
}
