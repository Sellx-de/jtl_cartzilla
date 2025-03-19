<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:35:48
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/kupons_bearbeiten.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab280499d465_90147599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '296489c3ad709572a9f7625c2c040f2d4725b548' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/kupons_bearbeiten.tpl',
      1 => 1738748465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:snippets/daterange_picker.tpl' => 2,
    'file:tpl_inc/searchpicker_modal.tpl' => 2,
    'file:snippets/searchpicker_button.tpl' => 2,
    'file:snippets/buttons/saveAndContinueButton.tpl' => 1,
  ),
),false)) {
function content_67ab280499d465_90147599 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['oKupon']->value->kKupon === 0) {?>
    <?php $_smarty_tpl->_assignInScope('cTitel', __('buttonNewCoupon'));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('cTitel', __('buttonModifyCoupon'));
}?>

<?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp === $_smarty_tpl->tpl_vars['couponTypes']->value['standard']) {?>
    <?php ob_start();
echo __('standardCoupon');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('cTitel', ((string)$_smarty_tpl->tpl_vars['cTitel']->value)." : ".$_prefixVariable1);
} elseif ($_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp === $_smarty_tpl->tpl_vars['couponTypes']->value['shipping']) {?>
    <?php ob_start();
echo __('shippingCoupon');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('cTitel', ((string)$_smarty_tpl->tpl_vars['cTitel']->value)." : ".$_prefixVariable2);
} elseif ($_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp === $_smarty_tpl->tpl_vars['couponTypes']->value['newCustomer']) {?>
    <?php ob_start();
echo __('newCustomerCoupon');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('cTitel', ((string)$_smarty_tpl->tpl_vars['cTitel']->value)." : ".$_prefixVariable3);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>$_smarty_tpl->tpl_vars['cTitel']->value,'cBeschreibung'=>__('couponsDesc'),'cDokuURL'=>__('couponsURL')), 0, false);
echo '<script'; ?>
>
    $(function () {
        <?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp == $_smarty_tpl->tpl_vars['couponTypes']->value['standard'] || $_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp == $_smarty_tpl->tpl_vars['couponTypes']->value['newCustomer']) {?>
            makeCurrencyTooltip('fWert');
        <?php }?>
        makeCurrencyTooltip('fMindestbestellwert');
        $('#bOpenEnd').on('change', onEternalCheckboxChange);
        onEternalCheckboxChange();
    });

    function onEternalCheckboxChange () {
        var elem = $('#bOpenEnd');
        var bOpenEnd = elem[0].checked;
        $('#dGueltigBis').prop('disabled', bOpenEnd);
        $('#dDauerTage').prop('disabled', bOpenEnd);
        if ($('#bOpenEnd').prop('checked')) {
            $('#dDauerTage').val('<?php echo __('openEnd');?>
');
            $('#dGueltigBis').val('');
        } else {
            $('#dDauerTage').val('');
        }
    }
<?php echo '</script'; ?>
>

<div id="content">
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <input type="hidden" name="kKuponBearbeiten" value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->kKupon;?>
">
        <input type="hidden" name="cKuponTyp" value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp;?>
">
        <div class="card settings">
            <div class="card-header">
                <div class="subheading1"><?php echo __('names');?>
</div>
                <hr class="mb-n3">
            </div>
            <div class="card-body">
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="cName"><?php echo __('name');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input type="text" class="form-control" name="cName" id="cName" value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cName;?>
">
                    </div>
                </div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('langCode', $_smarty_tpl->tpl_vars['language']->value->getIso());?>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cName_<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
"><?php echo __('showedName');?>
 (<?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
):</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input
                                type="text" class="form-control" name="cName_<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
"
                                id="cName_<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
"
                                value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['couponNames']->value[$_smarty_tpl->tpl_vars['langCode']->value] ?? null)===null||$tmp==='' ? '' : $tmp);?>
">
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <?php if (empty($_smarty_tpl->tpl_vars['oKupon']->value->kKupon) && (isset($_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp)) && $_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp !== $_smarty_tpl->tpl_vars['couponTypes']->value['newCustomer']) {?>
            <div class="card settings">
                <div class="card-header">
                    <div class="subheading1">
                        <label>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="couponCreation"
                                       id="couponCreation" class="checkfield"<?php if ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->cActiv)) && $_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->cActiv == 1) {?> checked<?php }?>
                                       value="1" data-toggle="collapse" data-target="#massCreationCouponsBody"
                                       aria-expanded="<?php if ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->cActiv)) && $_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->cActiv == 1) {?>true<?php } else { ?>false<?php }?>"
                                       aria-controls="massCreationCouponsBody"
                                       onchange="document.getElementById('saveAndContinueButton').disabled = this.checked;"
                                />
                                <label class="custom-control-label" for="couponCreation"><?php echo __('couponsCreation');?>
</label>
                            </div>
                        </label>
                    </div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body collapse<?php if (!empty($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon)) {?> show<?php }?>" id="massCreationCouponsBody">
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="numberOfCoupons"><?php echo __('numberCouponsDesc');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2 config-type-number">
                            <div class="input-group form-counter">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                        <span class="fas fa-minus"></span>
                                    </button>
                                </div>
                                <input class="form-control" type="number" name="numberOfCoupons" id="numberOfCoupons" min="2" step="1" <?php if ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->numberOfCoupons))) {?>value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->numberOfCoupons;?>
"<?php } else { ?>value="2"<?php }?>/>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                        <span class="fas fa-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="lowerCase"><?php echo __('lowerCaseDesc');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="lowerCase" id="lowerCase" class="checkfield" <?php if ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->lowerCase)) && $_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->lowerCase == true) {?>checked<?php } elseif ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->lowerCase)) && $_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->lowerCase == false) {?>unchecked<?php } else { ?>checked<?php }?> />
                                <label class="custom-control-label" for="lowerCase"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="upperCase"><?php echo __('upperCaseDesc');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="upperCase" id="upperCase" class="checkfield" <?php if ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->upperCase)) && $_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->upperCase == true) {?>checked<?php } elseif ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->upperCase)) && $_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->upperCase == false) {?>unchecked<?php } else { ?>checked<?php }?> />
                                <label class="custom-control-label" for="upperCase"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="numbersHash"><?php echo __('numbersHashDesc');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="numbersHash" id="numbersHash" class="checkfield" <?php if ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->numbersHash)) && $_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->numbersHash == true) {?>checked<?php } elseif ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->numbersHash)) && $_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->numbersHash == false) {?>unchecked<?php } else { ?>checked<?php }?> />
                                <label class="custom-control-label" for="numbersHash"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="hashLength"><?php echo __('hashLengthDesc');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2 config-type-number">
                            <div class="input-group form-counter">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                        <span class="fas fa-minus"></span>
                                    </button>
                                </div>
                                <input class="form-control" type="number" name="hashLength" id="hashLength" min="2" max="16" step="1" <?php if ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->hashLength))) {?>value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->hashLength;?>
"<?php } else { ?>value="2"<?php }?> />
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                        <span class="fas fa-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center">
                         <label class="col col-sm-4 col-form-label text-sm-right" for="prefixHash"><?php echo __('prefixHashDesc');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input class="form-control" type="text" name="prefixHash" id="prefixHash" placeholder="SUMMER"<?php if ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->prefixHash))) {?> value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->prefixHash;?>
"<?php }?> />
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center">
                         <label class="col col-sm-4 col-form-label text-sm-right" for="suffixHash"><?php echo __('suffixHashDesc');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input class="form-control" type="text" name="suffixHash" id="suffixHash"<?php if ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->suffixHash))) {?> value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon->suffixHash;?>
"<?php }?> />
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
        <div class="card settings">
            <div class="card-header">
                <div class="subheading1"><?php echo __('general');?>
</div>
                <hr class="mb-n3">
            </div>
            <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp === $_smarty_tpl->tpl_vars['couponTypes']->value['standard'] || $_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp === $_smarty_tpl->tpl_vars['couponTypes']->value['newCustomer']) {?>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="fWert"><?php echo __('value');?>
 (<?php echo __('gross');?>
):</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input type="text" class="form-control" name="fWert" id="fWert" value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->fWert;?>
">
                        </div>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select name="cWertTyp" id="cWertTyp" class="custom-select combo">
                                <option value="festpreis"<?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cWertTyp === 'festpreis') {?> selected<?php }?>>
                                    <?php echo __('amount');?>

                                </option>
                                <option value="prozent"<?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cWertTyp === 'prozent') {?> selected<?php }?>>
                                    %
                                </option>
                            </select>
                        </div>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3" <?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cWertTyp === 'prozent') {?> style="display: none;"<?php }?>>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getCurrencyConversionTooltipButton'][0], array( array('inputId'=>'fWert'),$_smarty_tpl ) );?>

                        </div>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="nGanzenWKRabattieren"><?php echo __('wholeWKDiscount');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select name="nGanzenWKRabattieren" id="nGanzenWKRabattieren" class="custom-select combo">
                                <option value="1"<?php if ($_smarty_tpl->tpl_vars['oKupon']->value->nGanzenWKRabattieren == 1) {?> selected<?php }?>>
                                    <?php echo __('yes');?>

                                </option>
                                <option value="0"<?php if ($_smarty_tpl->tpl_vars['oKupon']->value->nGanzenWKRabattieren == 0) {?> selected<?php }?>>
                                    <?php echo __('no');?>

                                </option>
                            </select>
                        </div>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('wholeWKDiscountHint')),$_smarty_tpl ) );?>
</div>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="kSteuerklasse"><?php echo __('taxClass');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select name="kSteuerklasse" id="kSteuerklasse" class="custom-select combo">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taxClasses']->value, 'taxClass');
$_smarty_tpl->tpl_vars['taxClass']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['taxClass']->value) {
$_smarty_tpl->tpl_vars['taxClass']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['taxClass']->value->kSteuerklasse;?>
"<?php if ((int)$_smarty_tpl->tpl_vars['oKupon']->value->kSteuerklasse === (int)$_smarty_tpl->tpl_vars['taxClass']->value->kSteuerklasse) {?> selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['taxClass']->value->cName;?>

                                    </option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp === $_smarty_tpl->tpl_vars['couponTypes']->value['shipping']) {?>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cZusatzgebuehren"><?php echo __('additionalShippingCosts');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" class="checkfield" name="cZusatzgebuehren" id="cZusatzgebuehren" value="Y"<?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cZusatzgebuehren === 'Y') {?> checked<?php }?>>
                                <label class="custom-control-label" for="cZusatzgebuehren"></label>
                            </div>
                        </div>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('additionalShippingCostsHint')),$_smarty_tpl ) );?>
</div>
                    </div>
                <?php }?>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="fMindestbestellwert"><?php echo __('minOrderValue');?>
 (<?php echo __('gross');?>
):</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input type="text" class="form-control" name="fMindestbestellwert" id="fMindestbestellwert" value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->fMindestbestellwert;?>
">
                    </div>
                    <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getCurrencyConversionTooltipButton'][0], array( array('inputId'=>'fMindestbestellwert'),$_smarty_tpl ) );?>

                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp === $_smarty_tpl->tpl_vars['couponTypes']->value['standard'] || $_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp === $_smarty_tpl->tpl_vars['couponTypes']->value['shipping']) {?>
                    <div class="form-group form-row align-items-center<?php if ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon))) {?> hidden<?php }?>" id="singleCouponCode">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cCode"><?php echo __('code');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input type="text" class="form-control" name="cCode" id="cCode"<?php if (!(isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon))) {?> value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cCode;?>
"<?php }?>>
                        </div>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('codeHint')),$_smarty_tpl ) );?>
</div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp === $_smarty_tpl->tpl_vars['couponTypes']->value['shipping']) {?>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cLieferlaender"><?php echo __('shippingCountries');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input type="text" class="form-control" name="cLieferlaender" id="cLieferlaender" value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cLieferlaender;?>
">
                        </div>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('shippingCountriesHint')),$_smarty_tpl ) );?>
</div>
                    </div>
                <?php }?>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="nVerwendungen"><?php echo __('uses');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2 config-type-number">
                        <div class="input-group form-counter">
                            <div class="input-group-prepend">
                                <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                    <span class="fas fa-minus"></span>
                                </button>
                            </div>
                            <input type="number" class="form-control" name="nVerwendungen" id="nVerwendungen" value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->nVerwendungen;?>
">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                    <span class="fas fa-plus"></span>
                                </button>
                            </div>
                        </div>
                     </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp === $_smarty_tpl->tpl_vars['couponTypes']->value['standard'] || $_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp === $_smarty_tpl->tpl_vars['couponTypes']->value['shipping']) {?>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="nVerwendungenProKunde"><?php echo __('usesPerCustomer');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2 config-type-number">
                            <div class="input-group form-counter">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                        <span class="fas fa-minus"></span>
                                    </button>
                                </div>
                                <input type="number" class="form-control" name="nVerwendungenProKunde" id="nVerwendungenProKunde" value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->nVerwendungenProKunde;?>
">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                        <span class="fas fa-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="card settings">
            <div class="card-header">
                <div class="subheading1"><?php echo __('validityPeriod');?>
</div>
                <hr class="mb-n3">
            </div>
            <div class="card-body">
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="dGueltigAb"><?php echo __('validFrom');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input type="text" class="form-control" name="dGueltigAb" id="dGueltigAb" >
                        <?php ob_start();
echo __('datepickerSeparator');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:snippets/daterange_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('datepickerID'=>"#dGueltigAb",'currentDate'=>((string)$_smarty_tpl->tpl_vars['oKupon']->value->cGueltigAbLong),'format'=>"DD.MM.YYYY",'separator'=>$_prefixVariable4,'single'=>true), 0, false);
?>
                    </div>
                    <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('validFromHelp')),$_smarty_tpl ) );?>
</div>
                </div>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="dGueltigBis"><?php echo __('validUntil');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input type="datetime" class="form-control" name="dGueltigBis" id="dGueltigBis">
                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['oKupon']->value->cGueltigBisLong !== 'open-end') {
echo (string)$_smarty_tpl->tpl_vars['oKupon']->value->cGueltigBisLong;
}
$_prefixVariable5=ob_get_clean();
ob_start();
echo __('datepickerSeparator');
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:snippets/daterange_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('datepickerID'=>"#dGueltigBis",'currentDate'=>$_prefixVariable5,'format'=>"DD.MM.YYYY",'separator'=>$_prefixVariable6,'single'=>true), 0, true);
?>
                    </div>
                    <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('validUntilHelp')),$_smarty_tpl ) );?>
</div>
                </div>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="dDauerTage"><?php echo __('periodOfValidity');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input type="text" class="form-control" name="dDauerTage" id="dDauerTage">
                    </div>
                    <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('periodOfValidityHelp')),$_smarty_tpl ) );?>
</div>
                </div>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="bOpenEnd"><?php echo __('openEnd');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" class="checkfield" name="bOpenEnd" id="bOpenEnd" value="Y"<?php if ($_smarty_tpl->tpl_vars['oKupon']->value->bOpenEnd) {?> checked<?php }?>>
                            <label class="custom-control-label" for="bOpenEnd"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card settings">
            <div class="card-header">
                <div class="subheading1"><?php echo __('restrictions');?>
</div>
                <hr class="mb-n3">
            </div>
            <div class="card-body">
                <?php ob_start();
echo __('titleChooseProducts');
$_prefixVariable7=ob_get_clean();
ob_start();
echo __('labelSearchProduct');
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/searchpicker_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('searchPickerName'=>'articlePicker','modalTitle'=>$_prefixVariable7,'searchInputLabel'=>$_prefixVariable8), 0, false);
?>
                <?php echo '<script'; ?>
>
                    $(function () {
                        articlePicker = new SearchPicker({
                            searchPickerName:  'articlePicker',
                            getDataIoFuncName: 'getProducts',
                            keyName:           'cArtNr',
                            renderItemCb:      function (item) {
                                return '<p class="list-group-item-text">' + item.cName + ' <em>(' + item.cArtNr + ')</em></p>';
                            },
                            onApply:           onApplySelectedArticles,
                            selectedKeysInit:  '<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cArtikel;?>
'.split(';').filter(function (i) { return i !== ''; })
                        });
                        onApplySelectedArticles(articlePicker.getSelection());
                    });
                    function onApplySelectedArticles(selectedArticles)
                    {
                        if (selectedArticles.length > 0) {
                            $('#articleSelectionInfo').val(selectedArticles.length + ' <?php echo __('product');?>
');
                            $('#cArtikel').val(selectedArticles.join(';') + ';');
                        } else {
                            $('#articleSelectionInfo').val('<?php echo __('all');?>
' + ' <?php echo __('products');?>
');
                            $('#cArtikel').val('');
                        }
                    }
                <?php echo '</script'; ?>
>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="articleSelectionInfo"><?php echo __('productRestrictions');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input type="text" class="form-control" readonly="readonly" id="articleSelectionInfo">
                        <input type="hidden" id="cArtikel" name="cArtikel" value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cArtikel;?>
">
                    </div>
                    <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/searchpicker_button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('target'=>'#articlePicker-modal'), 0, false);
?>
                    </div>
                </div>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="kHersteller"><?php echo __('restrictedToManufacturers');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <select multiple="multiple"
                                name="kHersteller[]"
                                id="kHersteller"
                                class="selectpicker custom-select"
                                data-selected-text-format="count > 2"
                                data-size="7"
                                data-live-search="true"
                                data-actions-box="true">
                            <option value="-1"<?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cHersteller === '-1') {?> selected<?php }?>>
                                <?php echo __('all');?>

                            </option>
                            <option data-divider="true"></option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->kHersteller;?>
"<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value->selected === true) {?> selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->cName;?>

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
                    <label class="col col-sm-4 col-form-label text-sm-right" for="kKundengruppe"><?php echo __('restrictionToCustomerGroup');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <select name="kKundengruppe" id="kKundengruppe" class="custom-select combo">
                            <option value="-1"<?php if ($_smarty_tpl->tpl_vars['oKupon']->value->kKundengruppe == -1) {?> selected<?php }?>>
                                <?php echo __('allCustomerGroups');?>

                            </option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customerGroups']->value, 'customerGroup');
$_smarty_tpl->tpl_vars['customerGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customerGroup']->value) {
$_smarty_tpl->tpl_vars['customerGroup']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['customerGroup']->value->getID();?>
"<?php if ((int)$_smarty_tpl->tpl_vars['oKupon']->value->kKundengruppe === $_smarty_tpl->tpl_vars['customerGroup']->value->getID()) {?> selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['customerGroup']->value->getName();?>

                                </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="cAktiv"><?php echo __('active');?>
:</label>
                    <span class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" class="checkfield" name="cAktiv" id="cAktiv" value="Y"<?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cAktiv === 'Y') {?> checked<?php }?>>
                            <label class="custom-control-label" for="cAktiv"></label>
                        </div>
                    </span>
                </div>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="kKategorien"><?php echo __('restrictedToCategories');?>
:</label>
                    <span class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <select multiple="multiple"
                                name="kKategorien[]"
                                id="kKategorien"
                                class="selectpicker custom-select"
                                data-selected-text-format="count > 2"
                                data-size="7"
                                data-live-search="true"
                                data-actions-box="true">
                            <option value="-1"<?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cKategorien === '-1') {?> selected<?php }?>>
                                <?php echo __('all');?>

                            </option>
                            <option data-divider="true"></option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->kKategorie;?>
"<?php if ($_smarty_tpl->tpl_vars['category']->value->selected === true) {?> selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['category']->value->cName;?>

                                </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </span>
                    <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('multipleChoice')),$_smarty_tpl ) );?>
</div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp === $_smarty_tpl->tpl_vars['couponTypes']->value['standard'] || $_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp === $_smarty_tpl->tpl_vars['couponTypes']->value['shipping']) {?>
                    <?php ob_start();
echo __('chooseCustomer');
$_prefixVariable9=ob_get_clean();
ob_start();
echo __('searchNameZipEmail');
$_prefixVariable10=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/searchpicker_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('searchPickerName'=>'customerPicker','modalTitle'=>$_prefixVariable9,'searchInputLabel'=>$_prefixVariable10), 0, true);
?>
                    <?php echo '<script'; ?>
>
                        $(function () {
                            customerPicker = new SearchPicker({
                                searchPickerName:  'customerPicker',
                                getDataIoFuncName: 'getCustomers',
                                keyName:           'kKunde',
                                renderItemCb:      renderCustomerItem,
                                onApply:           onApplySelectedCustomers,
                                selectedKeysInit:  [<?php echo implode(',',$_smarty_tpl->tpl_vars['customerIDs']->value);?>
]
                            });
                            onApplySelectedCustomers(customerPicker.getSelection());
                        });
                        function renderCustomerItem(item)
                        {
                            return '<p class="list-group-item-text">' +
                                item.cVorname + ' ' + item.cNachname + '<em>(' + item.cMail + ')</em></p>' +
                                '<p class="list-group-item-text">' +
                                item.cStrasse + ' ' + item.cHausnummer + ', ' + item.cPLZ + ' ' + item.cOrt + '</p>';
                        }
                        function onApplySelectedCustomers(selectedCustomers)
                        {
                            if (selectedCustomers.length > 0) {
                                $('#customerSelectionInfo').val(selectedCustomers.length + ' <?php echo __('customers');?>
');
                                $('#cKunden').val(selectedCustomers.join(';'));
                            } else {
                                $('#customerSelectionInfo').val('<?php echo __('all');?>
' + ' <?php echo __('customers');?>
');
                                $('#cKunden').val('-1');
                            }
                        }
                    <?php echo '</script'; ?>
>
                    <div class="form-group form-row align-items-center<?php if ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon))) {?> hidden<?php }?>" id="limitedByCustomers">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="customerSelectionInfo"><?php echo __('restrictedToCustomers');?>
:</label>
                        <span class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input type="text" class="form-control" readonly="readonly" id="customerSelectionInfo">
                            <input type="hidden" id="cKunden" name="cKunden" value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cKunden;?>
">
                        </span>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                            <?php $_smarty_tpl->_subTemplateRender('file:snippets/searchpicker_button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('target'=>'#customerPicker-modal'), 0, true);
?>
                        </div>
                    </div>
                                        <div class="form-group form-row align-items-center d-none <?php if ((isset($_smarty_tpl->tpl_vars['oKupon']->value->massCreationCoupon))) {?> hidden<?php }?>" id="informCustomers">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="informieren"><?php echo __('informCustomers');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="checkfield custom-control-input" name="informieren" id="informieren" value="Y">
                                <label class="custom-control-label" for="informieren"></label>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="card-footer save-wrapper">
            <div class="row">
                <div class="ml-auto col-sm-6 col-xl-auto">
                    <a class="btn btn-outline-primary btn-block" href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?tab=<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cKuponTyp;?>
">
                        <?php echo __('cancelWithIcon');?>

                    </a>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/buttons/saveAndContinueButton.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'saveAndContinueButton'), 0, false);
?>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <button type="submit" class="btn btn-primary btn-block" name="action" value="speichern">
                        <?php echo __('saveWithIcon');?>

                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php }
}
