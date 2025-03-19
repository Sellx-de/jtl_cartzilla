<?php
/* Smarty version 4.5.4, created on 2025-02-06 11:09:16
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.row-layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a48a4c090313_52730595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c9f4963ec6529711829072e0703c64128a428b9' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.row-layout.tpl',
      1 => 1738748451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a48a4c090313_52730595 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row-layout-controls">
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
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
    <div class="row">
        <div class="col-4">
            <div class="select-wrapper">
                <select class="form-control" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[preset]">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propdesc']->value['presets'], 'preset', false, 'i');
$_smarty_tpl->tpl_vars['preset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['preset']->value) {
$_smarty_tpl->tpl_vars['preset']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" data-layout="<?php echo htmlentities(json_encode($_smarty_tpl->tpl_vars['preset']->value['layout']));?>
"
                                <?php if ($_smarty_tpl->tpl_vars['propval']->value['preset'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['preset']->value['name'];?>

                        </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <option value="-1" data-layout="<?php echo htmlentities(json_encode(array('','','','')));?>
"
                            <?php if ($_smarty_tpl->tpl_vars['propval']->value['preset'] == -1) {?>selected<?php }?>>
                        <?php echo __('Custom');?>

                    </option>
                </select>
            </div>
        </div>
        <div class="col-2">
            <input type="text" class="form-control" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-xs" placeholder="XS"
                   name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[xs]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['propval']->value['xs'], ENT_QUOTES, 'utf-8', true);?>
">
        </div>
        <div class="col-2">
            <input type="text" class="form-control" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-sm" placeholder="SM"
                   name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[sm]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['propval']->value['sm'], ENT_QUOTES, 'utf-8', true);?>
">
        </div>
        <div class="col-2">
            <input type="text" class="form-control" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-md" placeholder="MD"
                   name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[md]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['propval']->value['md'], ENT_QUOTES, 'utf-8', true);?>
">
        </div>
        <div class="col-2">
            <input type="text" class="form-control" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-lg" placeholder="LG"
                   name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[lg]" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['propval']->value['lg'], ENT_QUOTES, 'utf-8', true);?>
">
        </div>
    </div>
</div>

<label><?php echo __('preview');?>
</label>

<div class="row-layout-previews" id="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-previews">
    <div>
        <div class="layout-preview layout-preview-0"></div>
        <div><?php echo __('mobileXS');?>
</div>
    </div>
    <div>
        <div class="layout-preview layout-preview-1"></div>
        <div><?php echo __('tabletSM');?>
</div>
    </div>
    <div>
        <div class="layout-preview layout-preview-2"></div>
        <div><?php echo __('desktopMD');?>
</div>
    </div>
    <div>
        <div class="layout-preview layout-preview-3"></div>
        <div><?php echo __('desktopLG');?>
</div>
    </div>
</div>

<?php echo '<script'; ?>
>
    (function() {
        let selectElm     = $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        let previews      = $('#<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-previews');
        let configInputXS = $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-xs');
        let configInputSM = $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-sm');
        let configInputMD = $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-md');
        let configInputLG = $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-lg');

        selectElm.on('change', changeLayoutPreset);
        configInputXS.on('input', onChangeLayoutInput);
        configInputSM.on('input', onChangeLayoutInput);
        configInputMD.on('input', onChangeLayoutInput);
        configInputLG.on('input', onChangeLayoutInput);
        updateLayoutPreview();

        function onChangeLayoutInput()
        {
            selectElm.val(-1);
            updateLayoutPreview();
        }

        function changeLayoutPreset()
        {
            let optionElm = selectElm.find(':selected');
            let layout    = optionElm.data('layout');

            configInputXS.val(layout[0]);
            configInputSM.val(layout[1]);
            configInputMD.val(layout[2]);
            configInputLG.val(layout[3]);
            updateLayoutPreview();
        }

        function updateLayoutPreview()
        {
            let layouts = [
                configInputXS.val(), configInputSM.val(), configInputMD.val(), configInputLG.val(),
            ].map(l => l.split('+').map(x => parseInt(x)));

            layouts.forEach((layout, i) => {
                let previewContainer = previews.find('.layout-preview-' + i);
                previewContainer.empty();
                layout.forEach(col => {
                    if (!isNaN(col)) {
                        previewContainer.append($('<div>').css({ width: 'calc(' + (col * 100 / 12) + '% - 2px)' }));
                    }
                });
            });
        }
    })();
<?php echo '</script'; ?>
>
<?php }
}
