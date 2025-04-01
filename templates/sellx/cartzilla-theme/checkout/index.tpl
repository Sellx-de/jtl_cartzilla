{block name='checkout-index'}
    {block name='checkout-index-include-header'}
        {if !isset($bAjaxRequest) || !$bAjaxRequest}
            {include file='layout/header.tpl'}
        {/if}
    {/block}

    {block name='checkout-index-content'}
        <div class="page-title-overlap bg-dark pt-4">
            <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
                <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                            <li class="breadcrumb-item">
                                <a class="text-nowrap" href="{$ShopURL}">
                                    <i class="ci-home"></i>{lang key='home'}
                                </a>
                            </li>
                            <li class="breadcrumb-item text-nowrap">
                                <a href="{get_static_route id='warenkorb.php'}">{lang key='basket'}</a>
                            </li>
                            <li class="breadcrumb-item text-nowrap active" aria-current="page">
                                {lang key='checkout'}
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                    <h1 class="h3 text-light mb-0">{lang key='checkout'}</h1>
                </div>
            </div>
        </div>

        <div id="result-wrapper" data-wrapper="true" data-bs-wrapper="true">
            <div class="container pb-5 mb-2 mb-md-4">
                {block name='checkout-index-include-inc-steps'}
                    {include file='checkout/inc_steps.tpl'}
                {/block}
                
                {block name='checkout-index-include-extension'}
                    {include file='snippets/extension.tpl'}
                {/block}
                
                <div class="row">
                    <section class="col-lg-8">
                        <div class="bg-white rounded-3 shadow-lg p-4 mb-4">
                            {if $step === 'accountwahl'}
                                {include file='checkout/step0_login_or_register.tpl'}{*bestellvorgang_accountwahl.tpl*}
                            {elseif $step === 'edit_customer_address' || $step === 'Lieferadresse'}
                                {include file='checkout/step1_edit_customer_address.tpl'}{*bestellvorgang_unregistriert_formular.tpl*}
                            {elseif $step === 'Versand' || $step === 'Zahlung'}
                                {include file='checkout/step3_shipping_options.tpl'}{*bestellvorgang_versand.tpl*}
                            {elseif $step === 'ZahlungZusatzschritt'}
                                {include file='checkout/step4_payment_additional.tpl'}{*bestellvorgang_zahlung_zusatzschritt*}
                            {elseif $step === 'Bestaetigung'}
                                {include file='checkout/step5_confirmation.tpl'}{*bestellvorgang_bestaetigung*}
                            {/if}
                        </div>
                    </section>
                    
                    <!-- Sidebar-->
                    <aside class="col-lg-4 pt-4 pt-lg-0">
                        <div class="bg-white rounded-3 shadow-lg p-4 ms-lg-auto">
                            <div class="py-2 px-xl-2">
                                <div class="widget mb-3">
                                    <h2 class="widget-title h4 mb-3">{lang key='basket'}</h2>
                                    
                                    {if isset($smarty.session.Warenkorb->PositionenArr) && $smarty.session.Warenkorb->PositionenArr|count > 0}
                                        <div class="d-flex align-items-center pb-2 border-bottom">
                                            <span class="text-muted fs-sm me-2">{lang key='products'}:</span>
                                            <span class="fs-sm fw-medium">{$WarenkorbArtikelPositionenanzahl}</span>
                                        </div>
                                        
                                        {foreach $smarty.session.Warenkorb->PositionenArr as $oPosition}
                                            {if !$oPosition->istKonfigKind()}
                                                <div class="d-flex align-items-center py-2 border-bottom">
                                                    <a class="d-block flex-shrink-0" href="{$oPosition->Artikel->cURLFull}">
                                                        <img src="{$oPosition->Artikel->Bilder[0]->cURLKlein}" width="64" alt="{$oPosition->cName|trans}">
                                                    </a>
                                                    <div class="ps-2">
                                                        <h6 class="widget-product-title">
                                                            <a href="{$oPosition->Artikel->cURLFull}">{$oPosition->cName|trans}</a>
                                                        </h6>
                                                        <div class="widget-product-meta">
                                                            <span class="text-accent me-2">{$oPosition->cEinzelpreisLocalized[$NettoPreise]}</span>
                                                            <span class="text-muted">x {$oPosition->nAnzahl}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            {/if}
                                        {/foreach}
                                        
                                        <ul class="list-unstyled fs-sm pt-3 pb-2 border-bottom">
                                            {if $NettoPreise}
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <span class="me-2">{lang key='subtotal'} ({lang key='net'}):</span>
                                                    <span class="text-end">{$WarensummeLocalized[$NettoPreise]}</span>
                                                </li>
                                                {foreach $Steuerpositionen as $Steuerposition}
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <span class="me-2">{$Steuerposition->cName}:</span>
                                                        <span class="text-end">{$Steuerposition->cPreisLocalized}</span>
                                                    </li>
                                                {/foreach}
                                            {else}
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <span class="me-2">{lang key='subtotal'} ({lang key='gross'}):</span>
                                                    <span class="text-end">{$WarensummeLocalized[$NettoPreise]}</span>
                                                </li>
                                            {/if}
                                            
                                            {if isset($smarty.session.Versandart) && $smarty.session.Versandart}
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <span class="me-2">{lang key='shippingMethod'}:</span>
                                                    <span class="text-end">{$smarty.session.Versandart->angezeigterName|trans}</span>
                                                </li>
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <span class="me-2">{lang key='shipping'}:</span>
                                                    <span class="text-end">{$smarty.session.Versandart->cPreisLocalized}</span>
                                                </li>
                                            {/if}
                                            
                                            {if isset($smarty.session.Zahlungsart) && $smarty.session.Zahlungsart}
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <span class="me-2">{lang key='paymentMethod'}:</span>
                                                    <span class="text-end">{$smarty.session.Zahlungsart->angezeigterName|trans}</span>
                                                </li>
                                                {if $smarty.session.Zahlungsart->fAufpreis > 0}
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <span class="me-2">{lang key='surcharge'} {lang key='paymentType'}:</span>
                                                        <span class="text-end">{$smarty.session.Zahlungsart->cPreisLocalized}</span>
                                                    </li>
                                                {/if}
                                            {/if}
                                            
                                            {if $Einstellungen.global.global_steuerpos_anzeigen !== 'N' && $Steuerpositionen|count > 0}
                                                {foreach $Steuerpositionen as $Steuerposition}
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <span class="me-2">{$Steuerposition->cName}:</span>
                                                        <span class="text-end">{$Steuerposition->cPreisLocalized}</span>
                                                    </li>
                                                {/foreach}
                                            {/if}
                                            
                                            {if $Einstellungen.kaufabwicklung.warenkorb_gesamtsumme_anzeigen === 'Y'}
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <span class="me-2">{lang key='totalSum'}:</span>
                                                    <span class="text-end">{$WarenkorbGesamtsummeLocalized[$NettoPreise]}</span>
                                                </li>
                                            {/if}
                                        </ul>
                                        
                                        <div class="pt-3">
                                            <div class="accordion" id="order-options">
                                                {if $step !== 'accountwahl'}
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-header">
                                                            <a class="accordion-button collapsed" href="#promo-code" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="promo-code">
                                                                <i class="ci-discount fs-lg me-2 mt-n1"></i>{lang key='couponCode'}
                                                            </a>
                                                        </h3>
                                                        <div class="accordion-collapse collapse" id="promo-code" data-bs-parent="#order-options">
                                                            <div class="accordion-body">
                                                                {include file='checkout/coupon_form.tpl'}
                                                            </div>
                                                        </div>
                                                    </div>
                                                {/if}
                                            </div>
                                        </div>
                                    {else}
                                        <div class="alert alert-info">
                                            {lang key='emptyBasket'}
                                        </div>
                                    {/if}
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            {block name='checkout-index-script-location'}
                <script>
                    if (top.location !== self.location) {
                        top.location = self.location.href;
                    }
                </script>
            {/block}
        </div>

        {if (isset($nWarenkorb2PersMerge) && $nWarenkorb2PersMerge === 1)}
            {block name='checkout-index-script-basket-merge'}
                {inline_script}<script>
                    $(window).on('load', function() {
                        $(function() {
                            eModal.addLabel('{lang key='yes' section='global' addslashes=true}', '{lang key='no' section='global' addslashes=true}');
                            var options = {
                                message: '{lang key='basket2PersMerge' section='login' addslashes=true}',
                                label: '{lang key='yes' section='global' addslashes=true}',
                                title: '{lang key='basket' section='global' addslashes=true}'
                            };
                            eModal.confirm(options).then(
                                function() {
                                    window.location = "{get_static_route id='bestellvorgang.php'}?basket2Pers=1&token={$smarty.session.jtl_token}"
                                },
                                function() {
                                    window.location = "{get_static_route id='bestellvorgang.php'}?updatePersCart=1&token={$smarty.session.jtl_token}"
                                }
                            );
                        });
                    });
                </script>{/inline_script}
            {/block}
        {/if}
    {/block}

    {block name='checkout-index-include-footer'}
        {if !isset($bAjaxRequest) || !$bAjaxRequest}
            {include file='layout/footer.tpl'}
        {/if}
    {/block}
{/block}
