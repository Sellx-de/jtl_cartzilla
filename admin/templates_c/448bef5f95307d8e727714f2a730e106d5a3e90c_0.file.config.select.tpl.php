<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:46:22
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34f8e5c0918_85023289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '448bef5f95307d8e727714f2a730e106d5a3e90c' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.select.tpl',
      1 => 1738748452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a34f8e5c0918_85023289 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['propid']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('propid', $_smarty_tpl->tpl_vars['propname']->value);
}?>
<div class="form-group">
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
"
            <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
                data-toggle="tooltip" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['desc'] ?? null)===null||$tmp==='' ? '' : $tmp);?>
"
                data-placement="auto"
            <?php }?>>
        <?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>

        <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
            <i class="fas fa-info-circle fa-fw"></i>
        <?php }?>
    </label>
    <div class="select-wrapper">
        <select class="form-control" id="config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['required']->value === true) {?>required<?php }?>>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['propname']->value;
$_prefixVariable2 = ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['propdesc']) ? $_smarty_tpl->tpl_vars['propdesc']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['options'] = (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['options'] ?? null)===null||$tmp==='' ? array('undefined'=>(('No \'options\' defined for property \'').($_prefixVariable2)).('\'')) : $tmp);
$_smarty_tpl->_assignInScope('propdesc', $_tmp_array);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propdesc']->value['options'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                <?php if (is_string($_smarty_tpl->tpl_vars['label']->value)) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['propval']->value) {?>selected<?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['label']->value;?>

                    </option>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('subgroup', $_smarty_tpl->tpl_vars['label']->value);?>

                    <optgroup label="<?php echo $_smarty_tpl->tpl_vars['subgroup']->value['label'];?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subgroup']->value['options'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['propval']->value) {?>selected<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['label']->value;?>

                            </option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </optgroup>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['propdesc']->value['childrenFor']))) {?>
    <?php echo '<script'; ?>
>
        (function() {
            let selectElm = $('#config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
');
            let option = selectElm.find(':selected').val();

            selectElm.on('change', () => {
                let option = selectElm.find(':selected').val();

                $('.childrenFor-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
').collapse('hide');
                $('#childrenFor-' + option + '-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
').collapse('show');
            });

            $(() => {
                $('#childrenFor-' + option + '-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
').collapse('show');
            });
        })();
    <?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
>
    (function() {
        let propId = '<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
';
        let selectElm = $('#config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
');

        selectElm.on('change', () => {
            updateConstraints();
        });

        $(() => {
            let optionValue = selectElm.find(':selected').val();
            $(`.constraint-${ propId}`).addClass('collapse')
            $(`.constraint-${ propId}-${ optionValue}`).addClass('show')
        });

        function updateConstraints()
        {
            let optionValue = selectElm.find(':selected').val();
            $(`.constraint-${ propId}:not(.constraint-${ propId}-${ optionValue}`).collapse('hide');
            $(`.constraint-${ propId}-${ optionValue}`).collapse('show');
        }
    })();
<?php echo '</script'; ?>
><?php }
}
