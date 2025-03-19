<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:46:22
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34f8e53c512_91349105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '011072ec028ed624ed2f8652dcc35436441330c7' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.radio.tpl',
      1 => 1738748450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a34f8e53c512_91349105 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
            <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
                data-toggle="tooltip" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['desc'] ?? null)===null||$tmp==='' ? '' : $tmp);?>
" data-placement="auto"
            <?php }?>>
        <?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>

        <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
            <i class="fas fa-info-circle fa-fw"></i>
        <?php }?>
    </label>
    <div class="radio" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['propname']->value;
$_prefixVariable1 = ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['propdesc']) ? $_smarty_tpl->tpl_vars['propdesc']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['options'] = (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['options'] ?? null)===null||$tmp==='' ? array('undefined'=>(('No \'options\' defined for property \'').($_prefixVariable1)).('\'')) : $tmp);
$_smarty_tpl->_assignInScope('propdesc', $_tmp_array);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propdesc']->value['options'], 'name', false, 'value');
$_smarty_tpl->tpl_vars['name']->index = -1;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->index++;
$__foreach_name_5_saved = $_smarty_tpl->tpl_vars['name'];
?>
            <div>
                <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['name']->index;?>
"
                       <?php if ($_smarty_tpl->tpl_vars['propval']->value == $_smarty_tpl->tpl_vars['value']->value) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>required<?php }?>>
                <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['name']->index;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</label>
            </div>
        <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['propdesc']->value['childrenFor']))) {?>
    <?php echo '<script'; ?>
>
        var selectElm = $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var option = selectElm.find(':checked').val();

        selectElm.on('change', function() {
            var option = selectElm.find(':checked').val();

            $('.childrenFor-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').collapse('hide');
            $('#childrenFor-' + option + '-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').collapse('show');
        });

        $(function() {
            $('#childrenFor-' + option + '-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').collapse('show');
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
