<?php
/* Smarty version 4.5.4, created on 2025-02-11 10:42:49
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/kontaktformular_betreff.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab1b99461066_85796004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83f904334e8262780af9fa5bab3ec7fadabe4cfc' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/kontaktformular_betreff.tpl',
      1 => 1738748467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
  ),
),false)) {
function content_67ab1b99461066_85796004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('contactformSubject'),'cBeschreibung'=>__('contanctformSubjectDesc')), 0, false);
?>
<div id="content">
    <form name="einstellen" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <input type="hidden" name="kKontaktBetreff" value="<?php if ((isset($_smarty_tpl->tpl_vars['Betreff']->value->kKontaktBetreff))) {
echo $_smarty_tpl->tpl_vars['Betreff']->value->kKontaktBetreff;
}?>" />
        <input type="hidden" name="betreff" value="1" />
        <div class="card">
            <div class="card-header">
                <div class="subheading1"><?php echo __('contactformSubject');?>
</div>
                <hr class="mb-n3">
            </div>
            <div class="card-body">
                <div class="settings">
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cName"><?php echo __('subject');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input type="text" class="form-control" name="cName" id="cName" value="<?php if ((isset($_smarty_tpl->tpl_vars['Betreff']->value->cName))) {
echo $_smarty_tpl->tpl_vars['Betreff']->value->cName;
}?>" tabindex="1" required />
                        </div>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('cISO', $_smarty_tpl->tpl_vars['language']->value->getIso());?>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="cName_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"><?php echo __('showedName');?>
 (<?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
):</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input type="text" class="form-control" name="cName_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
" id="cName_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['Betreffname']->value[$_smarty_tpl->tpl_vars['cISO']->value]))) {
echo $_smarty_tpl->tpl_vars['Betreffname']->value[$_smarty_tpl->tpl_vars['cISO']->value];
}?>" tabindex="2" />
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cMail"><?php echo __('mail');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input type="text" class="form-control" name="cMail" id="cMail" value="<?php if ((isset($_smarty_tpl->tpl_vars['Betreff']->value->cMail))) {
echo $_smarty_tpl->tpl_vars['Betreff']->value->cMail;
}?>" tabindex="3" required />
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cKundengruppen"><?php echo __('restrictedToCustomerGroups');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select class="selectpicker custom-select"
                                    name="cKundengruppen[]"
                                    multiple="multiple"
                                    id="cKundengruppen"
                                    data-selected-text-format="count > 2"
                                    data-size="7">
                                <option value="0" <?php if ((isset($_smarty_tpl->tpl_vars['gesetzteKundengruppen']->value[0])) && $_smarty_tpl->tpl_vars['gesetzteKundengruppen']->value[0] === true) {?>selected<?php }?>><?php echo __('allCustomerGroups');?>
</option>
                                <option data-divider="true"></option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kundengruppen']->value, 'kundengruppe');
$_smarty_tpl->tpl_vars['kundengruppe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kundengruppe']->value) {
$_smarty_tpl->tpl_vars['kundengruppe']->do_else = false;
?>
                                    <?php $_smarty_tpl->_assignInScope('kKundengruppe', $_smarty_tpl->tpl_vars['kundengruppe']->value->kKundengruppe);?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['kundengruppe']->value->kKundengruppe;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['gesetzteKundengruppen']->value[$_smarty_tpl->tpl_vars['kKundengruppe']->value]))) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['kundengruppe']->value->cName;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('multipleChoice')),$_smarty_tpl ) );?>
</div>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="nSort"><?php echo __('sortNo');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input type="number" class="form-control" name="nSort" id="nSort" value="<?php if ((isset($_smarty_tpl->tpl_vars['Betreff']->value->nSort))) {
echo $_smarty_tpl->tpl_vars['Betreff']->value->nSort;
}?>" tabindex="4" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer save-wrapper">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto">
                        <button type="button" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?tab=subjects'" class="btn btn-outline-primary btn-block">
                            <?php echo __('cancelWithIcon');?>

                        </button>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <button type="submit" value="<?php echo __('save');?>
" class="btn btn-primary btn-block">
                            <?php echo __('saveWithIcon');?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php }
}
