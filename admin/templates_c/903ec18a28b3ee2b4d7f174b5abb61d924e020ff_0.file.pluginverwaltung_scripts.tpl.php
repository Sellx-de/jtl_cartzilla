<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:25:29
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33c99c1d577_07415624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '903ec18a28b3ee2b4d7f174b5abb61d924e020ff' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_scripts.tpl',
      1 => 1738748474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33c99c1d577_07415624 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    var vLicenses = <?php echo (($tmp = $_smarty_tpl->tpl_vars['licenseFiles']->value ?? null)===null||$tmp==='' ? array() : $tmp);?>
;
    var pluginName;
    $(document).ready(function() {
        $('.tab-content').on('click', '#verfuegbar .plugin-license-check', function (e) {
            pluginName = $(e.currentTarget).val();
            var licensePath = vLicenses[pluginName];
            if (this.checked && typeof licensePath === 'string') { // it's checked yet, right after the click was fired
                var modal = $('#licenseModal');
                $('input[id="plugin-check-' + pluginName + '"]').attr('disabled', 'disabled'); // block the checkbox!
                modal.modal({ backdrop : 'static' }).one('hide.bs.modal', function (e) {
                    $('input[id=plugin-check-' + pluginName + ']').removeAttr('disabled');
                });
                $('#licenseModal button[name=cancel], #licenseModal .close').one('click', function() {
                    $('input[id=plugin-check-' + pluginName + ']').prop('checked', false);
                });
                $('#licenseModal button[name=ok]').one('click', function() {
                    $('input[id=plugin-check-' + pluginName + ']').prop('checked', true);
                });
                startSpinner();
                modal.find('.modal-body').load(
                    '<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/markdown',
                    { 'jtl_token' : '<?php echo $_SESSION['jtl_token'];?>
', 'path': vLicenses[pluginName] },
                    stopSpinner
                );
                modal.modal('show');
            }
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
