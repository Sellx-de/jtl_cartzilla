<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:56:39
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/config_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a343e76ab147_73758297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3cf72b5c8099e7c4fc3d39c4ae12758614df88b' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/config_item.tpl',
      1 => 1738748473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/colorpicker.tpl' => 1,
    'file:snippets/einstellungen_icons.tpl' => 1,
  ),
),false)) {
function content_67a343e76ab147_73758297 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group form-row align-items-center <?php if ($_smarty_tpl->tpl_vars['cnf']->value->isHighlight() || ((isset($_smarty_tpl->tpl_vars['cSuche']->value)) && $_smarty_tpl->tpl_vars['cnf']->value->getID() == $_smarty_tpl->tpl_vars['cSuche']->value)) {?> highlight<?php }?>">
    <label class="col col-sm-4 col-form-label text-sm-right order-1" for="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
">
        <?php echo $_smarty_tpl->tpl_vars['cnf']->value->getName();
if (strpos($_smarty_tpl->tpl_vars['cnf']->value->getValueName(),'_guthaben') && $_smarty_tpl->tpl_vars['cnf']->value->getInputType() !== 'selectbox') {?> <span id="EinstellungAjax_<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
"></span><?php }?>:
    </label>
    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2 <?php if ($_smarty_tpl->tpl_vars['cnf']->value->getInputType() === 'number') {?>config-type-number<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['cnf']->value->getInputType() === 'selectbox') {?>
            <?php if ($_smarty_tpl->tpl_vars['cnf']->value->getValueName() === 'kundenregistrierung_standardland' || $_smarty_tpl->tpl_vars['cnf']->value->getValueName() === 'lieferadresse_abfragen_standardland') {?>
                <select class="custom-select" name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value->getISO();?>
" <?php if ($_smarty_tpl->tpl_vars['cnf']->value->getSetValue() == $_smarty_tpl->tpl_vars['country']->value->getISO()) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['country']->value->getName();?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php } elseif ((defined('ENABLE_EXPERIMENTAL_ROUTING_SCHEMES') ? constant('ENABLE_EXPERIMENTAL_ROUTING_SCHEMES') : null) === false && ($_smarty_tpl->tpl_vars['cnf']->value->getValueName() === 'routing_scheme' || $_smarty_tpl->tpl_vars['cnf']->value->getValueName() === 'routing_default_language')) {?>
                <select class="custom-select" name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
" disabled>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cnf']->value->getValues(), 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['value']->value->cWert === 'F') {?>
                            <option value="F" selected><?php echo $_smarty_tpl->tpl_vars['value']->value->cName;?>
</option>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php } elseif ((defined('ENABLE_RETURNS_MANAGEMENT') ? constant('ENABLE_RETURNS_MANAGEMENT') : null) === false && $_smarty_tpl->tpl_vars['cnf']->value->getValueName() === 'global_rma_enabled') {?>
                <select class="custom-select" name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
" disabled>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cnf']->value->getValues(), 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['value']->value->cWert === 'N') {?>
                            <option value="N" selected><?php echo $_smarty_tpl->tpl_vars['value']->value->cName;?>
</option>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php } else { ?>
                <select class="custom-select" name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cnf']->value->getValues(), 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value->cWert;?>
" <?php if ($_smarty_tpl->tpl_vars['cnf']->value->getSetValue() == $_smarty_tpl->tpl_vars['value']->value->cWert) {?>selected<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['value']->value->cName;?>

                        </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['cnf']->value->getInputType() === 'listbox') {?>
            <select name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
[]"
                    id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
"
                    multiple="multiple"
                    class="selectpicker custom-select combo"
                    data-selected-text-format="count > 2"
                    data-size="7">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cnf']->value->getValues(), 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value->cWert;?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cnf']->value->getSetValue(), 'setValue');
$_smarty_tpl->tpl_vars['setValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setValue']->value) {
$_smarty_tpl->tpl_vars['setValue']->do_else = false;
if ($_smarty_tpl->tpl_vars['setValue']->value->cWert == $_smarty_tpl->tpl_vars['value']->value->cWert) {?>selected<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><?php echo $_smarty_tpl->tpl_vars['value']->value->cName;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        <?php } elseif ($_smarty_tpl->tpl_vars['cnf']->value->getInputType() === 'selectkdngrp') {?>
            <select name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
[]" id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
" class="custom-select combo">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cnf']->value->getValues(), 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value->kKundengruppe;?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cnf']->value->getSetValue(), 'setValue');
$_smarty_tpl->tpl_vars['setValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setValue']->value) {
$_smarty_tpl->tpl_vars['setValue']->do_else = false;
if ($_smarty_tpl->tpl_vars['setValue']->value->cWert == $_smarty_tpl->tpl_vars['value']->value->kKundengruppe) {?>selected<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                        <?php echo $_smarty_tpl->tpl_vars['value']->value->cName;?>

                    </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        <?php } elseif ($_smarty_tpl->tpl_vars['cnf']->value->getInputType() === 'color') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:snippets/colorpicker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cpID'=>"config-".((string)$_smarty_tpl->tpl_vars['cnf']->value->getValueName()),'useAlpha'=>$_smarty_tpl->tpl_vars['cnf']->value->getValueName() === 'bilder_hintergrundfarbe','cpName'=>$_smarty_tpl->tpl_vars['cnf']->value->getValueName(),'cpValue'=>$_smarty_tpl->tpl_vars['cnf']->value->getSetValue()), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['cnf']->value->getInputType() === 'pass') {?>
            <input class="form-control" autocomplete="new-password" type="password" name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
"
                   id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
" placeholder="****" tabindex="1" />
        <?php } elseif ($_smarty_tpl->tpl_vars['cnf']->value->getInputType() === 'number') {?>
            <div class="input-group form-counter">
                <div class="input-group-prepend">
                    <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                        <span class="fas fa-minus"></span>
                    </button>
                </div>
                <input class="form-control" type="number"
                       name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
"
                       id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
"
                       value="<?php if ($_smarty_tpl->tpl_vars['cnf']->value->getSetValue() !== null) {
echo $_smarty_tpl->tpl_vars['cnf']->value->getSetValue();
}?>"
                       tabindex="1"
                        <?php if (strpos($_smarty_tpl->tpl_vars['cnf']->value->getValueName(),'_guthaben') || strpos($_smarty_tpl->tpl_vars['cnf']->value->getValueName(),'_bestandskundenguthaben') || strpos($_smarty_tpl->tpl_vars['cnf']->value->getValueName(),'_neukundenguthaben')) {?>
                            onKeyUp="setzePreisAjax(false, 'EinstellungAjax_<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
', this);"
                        <?php }?>
                />
                <div class="input-group-append">
                    <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                        <span class="fas fa-plus"></span>
                    </button>
                </div>
            </div>
        <?php } else { ?>
            <input class="form-control" type="text"
                   name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
"
                   id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
"
                   value="<?php if ($_smarty_tpl->tpl_vars['cnf']->value->getSetValue() !== null) {
echo $_smarty_tpl->tpl_vars['cnf']->value->getSetValue();
}?>"
                   <?php if (strpos($_smarty_tpl->tpl_vars['cnf']->value->getValueName(),'_guthaben') || strpos($_smarty_tpl->tpl_vars['cnf']->value->getValueName(),'_bestandskundenguthaben') || strpos($_smarty_tpl->tpl_vars['cnf']->value->getValueName(),'_neukundenguthaben')) {?>
                       onKeyUp="setzePreisAjax(false, 'EinstellungAjax_<?php echo $_smarty_tpl->tpl_vars['cnf']->value->getValueName();?>
', this);"
                   <?php }?>
                   tabindex="1" />
        <?php }?>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:snippets/einstellungen_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cnf'=>$_smarty_tpl->tpl_vars['cnf']->value), 0, false);
?>
</div>
<?php }
}
