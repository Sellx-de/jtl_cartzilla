<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:01:25
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/plugins/jtl_gpsr/adminmenu/template/info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab1ff5efa176_08478377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc4242193d77cdbcdf360fafde3e0f0998863de7' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/plugins/jtl_gpsr/adminmenu/template/info.tpl',
      1 => 1739268050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab1ff5efa176_08478377 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="subheading1"><?php echo __('JTL GPSR - Angaben zur Produktsicherheit');?>
</div>
<hr>
<p><?php echo __('Beschreibung der Angaben zur Produktsicherheit');?>
</p>
<form name="presentations" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" enctype="multipart/form-data">
    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

    <input type="hidden" name="kPlugin" value="<?php echo $_smarty_tpl->tpl_vars['kPlugin']->value;?>
">
    <input type="hidden" name="kPluginAdminMenu" value="<?php echo $_smarty_tpl->tpl_vars['kPluginAdminMenu']->value;?>
">
    <div class="save-wrapper">
        <div class="row">
            <div class="ml-auto col-sm-6 col-xl-auto">
                <button type="submit" name="task" value="resetAllSettings" class="btn btn-danger btn-block btn-reset-all">
                    <i class="fas fa-refresh"></i> <?php echo __('reset');?>

                </button>
            </div>
        </div>
    </div>
</form>

<?php echo '<script'; ?>
>
    function swapOptions($select, options) {
        $select.children('option').remove();
        $.each(options, function(offset, optionObject) {
            if (optionObject.hasOwnProperty('cWert') && optionObject.hasOwnProperty('cName')) {
                $select.append($("<option></option>")
                    .attr('value', optionObject.cWert)
                    .text(optionObject.cName));
            }
        });
    }

    $(window).on('load', function() {
        $('#gpsr_templatefile_productdetails').on('change', function () {
            ioCall(
                'getTemplateBlocks', ['<?php echo $_smarty_tpl->tpl_vars['detailConstant']->value;?>
', $(this).val()],
                function (templateBlocks) {
                    swapOptions($('#gpsr_templateblock_productdetails'), templateBlocks);
                }
            );
        });
        $('#gpsr_templatefile_productlist').on('change', function () {
            ioCall(
                'getTemplateBlocks', ['<?php echo $_smarty_tpl->tpl_vars['listConstant']->value;?>
', $(this).val()],
                function (templateBlocks) {
                    swapOptions($('#gpsr_templateblock_productlist'), templateBlocks);
                }
            );
        });
        $('#plugin-tab-<?php echo $_smarty_tpl->tpl_vars['infoTabId']->value;?>
 form').on('submit', function () {
            return (window.confirm('<?php echo __('Wollen Sie alle Einstellungen auf Standardwerte zurücksetzen?');?>
'));
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
