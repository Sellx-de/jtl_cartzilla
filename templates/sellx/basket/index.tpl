{block name='basket-index'}
    {block name='basket-index-include-header'}
        {include file='layout/header.tpl'}
    {/block}

    {block name='basket-index-content'}
        {get_static_route id='warenkorb.php' assign='cartURL'}
        
        <!-- Page content -->

            <!-- Items in the cart + Order summary -->
            <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
                {opcMountPoint id='opc_before_heading'}
                {block name='basket-index-heading'}
                    <h1 class="h3 mb-4">
                        {lang key='basket'} {if $WarenkorbArtikelAnzahl > 0}
                            ({$WarenkorbArtikelAnzahl} {lang key='products'})
                        {/if}
                    </h1>
                {/block}
                
                {block name='basket-index-include-extension'}
                    {include file='snippets/extension.tpl'}
                {/block}

                <div class="row">
                    {if ($Warenkorb->PositionenArr|count > 0)}
                        {block name='basket-index-main'}
                            <!-- Items list -->
                            <div class="col-lg-8">
                                <div class="pe-lg-2 pe-xl-3 me-xl-3">
                                    {* Freier Versand Fortschrittsbalken *}
                                    {if !empty($WarenkorbVersandkostenfreiHinweis)}
                                        <p class="fs-sm">{$WarenkorbVersandkostenfreiHinweis}</p>
                                        <div class="progress w-100 overflow-visible mb-4" role="progressbar" aria-label="Free shipping progress" aria-valuenow="{if isset($WarenkorbVersandkostenfreiProzent)}{$WarenkorbVersandkostenfreiProzent}{else}0{/if}" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                                            <div class="progress-bar bg-warning rounded-pill position-relative overflow-visible" style="width: {if isset($WarenkorbVersandkostenfreiProzent)}{$WarenkorbVersandkostenfreiProzent}{else}0{/if}%; height: 4px">
                                                <div class="position-absolute top-50 end-0 d-flex align-items-center justify-content-center translate-middle-y bg-body border border-warning rounded-circle me-n1" style="width: 1.5rem; height: 1.5rem">
                                                    <i class="ci-star-filled text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                    {/if}
                                    
                                    {block name='basket-index-basket'}
                                        {opcMountPoint id='opc_before_basket'}
                                        <div class="basket_wrapper">
                                            {block name='basket-index-basket-items'}
                                                {block name='basket-index-form-cart'}
                                                    {form id="cart-form" method="post" action=$cartURL class="jtl-validate" slide=true}
                                                        {button name="fake" variant="hidden" type="submit" class="btn-hidden-default"}{/button}
                                                        {input type="hidden" name="wka" value="1"}
                                                        
                                                        <!-- Table of items -->
                                                        <div class="basket-items">
                                                            {block name='basket-index-include-order-items'}
                                                                {include file='basket/cart_items.tpl'}
                                                            {/block}
                                                        </div>
                                                        
                                                        {block name='basket-index-include-uploads'}
                                                            {include file='snippets/uploads.tpl' tplscope='basket'}
                                                        {/block}
                                                    {/form}
                                                {/block}

                                                {if $Einstellungen.kaufabwicklung.warenkorb_versandermittlung_anzeigen === 'Y'}
                                                    {block name='basket-index-form-shipping-calc'}
                                                        {opcMountPoint id='opc_before_shipping_calculator'}
                                                        {form id="basket-shipping-estimate-form" class="shipping-calculator-form mt-4" method="post" action="{$cartURL}#basket-shipping-estimate-form" slide=true}
                                                            {block name='basket-index-include-shipping-calculator'}
                                                                {include file='snippets/shipping_calculator.tpl' checkout=true hrAtEnd=false}
                                                            {/block}
                                                        {/form}
                                                    {/block}
                                                {/if}

                                                <div class="nav position-relative z-2 mb-4 mb-lg-0">
                                                    <a class="nav-link animate-underline px-0" href="{get_static_route id='index.php'}">
                                                        <i class="ci-chevron-left fs-lg me-1"></i>
                                                        <span class="animate-target">{lang key="continueShopping" section="checkout"}</span>
                                                    </a>
                                                </div>
                                                
                                                {if $freeGifts->count() > 0}
                                                    {block name='basket-index-freegifts-content'}
                                                        {$selectedFreegift=0}
                                                        {foreach JTL\Session\Frontend::getCart()->PositionenArr as $oPosition}
                                                            {if $oPosition->nPosTyp === $smarty.const.C_WARENKORBPOS_TYP_GRATISGESCHENK}
                                                                {$selectedFreegift=$oPosition->Artikel->kArtikel}
                                                            {/if}
                                                        {/foreach}
                                                        <div class="mt-4 pt-3 border-top">
                                                            {block name='basket-index-freegifts-heading'}
                                                                <h3 class="h4 mb-3" id="freeGiftsHeading">
                                                                    {if !empty($oSpezialseiten_arr) && isset($oSpezialseiten_arr[$smarty.const.LINKTYP_GRATISGESCHENK])}
                                                                        <a href="{$oSpezialseiten_arr[$smarty.const.LINKTYP_GRATISGESCHENK]->getURL()}" title="{lang key='freeGiftFromOrderValueBasket'}">
                                                                            {lang key='freeGiftFromOrderValueBasket'}
                                                                        </a>
                                                                    {else}
                                                                        {lang key='freeGiftFromOrderValueBasket'}
                                                                    {/if}
                                                                </h3>
                                                            {/block}
                                                            
                                                            {block name='basket-index-form-freegift'}
                                                                {form method="post" name="freegift" action=$cartURL class="text-center-util" slide=true}
                                                                    {block name='basket-index-freegifts'}
                                                                        {$additional = ''}
                                                                        {if $freeGifts->count() < 3}{$additional = ' slider-no-preview'}{/if}
                                                                        <div id="freegift" class="slick-smooth-loading carousel carousel-arrows-inside slick-lazy slick-type-half{$additional}" data-slick-type="slider-half">
                                                                            {include file='snippets/slider_items.tpl' items=$freeGifts type='freegift'}
                                                                        </div>
                                                                    {/block}
                                                                    
                                                                    {block name='basket-index-freegifts-form-submit'}
                                                                        {input type="hidden" name="gratis_geschenk" value="1"}
                                                                        {input name="gratishinzufuegen" type="hidden" value="{lang key='addToCart'}"}
                                                                    {/block}
                                                                {/form}
                                                            {/block}
                                                        </div>
                                                    {/block}
                                                {/if}
                                            {/block}

                                            {opcMountPoint id='opc_before_xselling'}
                                            {if !empty($xselling->Kauf) && count($xselling->Kauf->Artikel) > 0}
                                                {block name='basket-index-basket-xsell'}
                                                    {lang key='basketCustomerWhoBoughtXBoughtAlsoY' assign='panelTitle'}
                                                    {block name='basket-index-include-product-slider'}
                                                        {include file='snippets/product_slider.tpl' productlist=$xselling->Kauf->Artikel title=$panelTitle tplscope='half'}
                                                    {/block}
                                                {/block}
                                            {/if}
                                            {opcMountPoint id='opc_after_xselling'}
                                        </div>
                                    {/block}
                                </div>
                            </div>
                        {/block}

                        {block name='basket-index-side'}
                            <!-- Order summary (sticky sidebar) -->
                            <aside class="col-lg-4" style="margin-top: -100px">
                                <div class="position-sticky top-0" style="padding-top: 100px">
                                    <!-- Order summary -->
                                    <div class="bg-body-tertiary rounded-5 p-4 mb-3">
                                        <div class="p-sm-2 p-lg-0 p-xl-2">
                                            {block name='basket-index-side-heading'}
                                                <h5 class="border-bottom pb-4 mb-4">{lang key="orderOverview" section="account data"}</h5>
                                            {/block}
                                            
                                            <ul class="list-unstyled fs-sm gap-3 mb-0">
                                                {block name='basket-index-price-tax'}
                                                    <!-- Subtotal -->
                                                    <li class="d-flex justify-content-between">
                                                        {lang key='subtotal' section='account data'} ({$WarenkorbArtikelAnzahl} {lang key='products'}):
                                                        <span class="text-dark-emphasis fw-medium">{$WarensummeLocalized[0]}</span>
                                                    </li>
                                                    
                                                    {* MwSt *}
                                                    {if $NettoPreise}
                                                        {block name='basket-index-price-net'}
                                                            <li class="d-flex justify-content-between">
                                                                {lang key='vat'}:
                                                                <span class="text-dark-emphasis fw-medium">{$WarensummeLocalized[$NettoPreise]}</span>
                                                            </li>
                                                        {/block}
                                                    {/if}
                                                    
                                                    {* Steuern *}
                                                    {if $Einstellungen.global.global_steuerpos_anzeigen !== 'N' && $Steuerpositionen|count > 0}
                                                        {block name='basket-index-tax'}
                                                            {foreach $Steuerpositionen as $Steuerposition}
                                                                <li class="d-flex justify-content-between">
                                                                    {$Steuerposition->cName}:
                                                                    <span class="text-dark-emphasis fw-medium">{$Steuerposition->cPreisLocalized}</span>
                                                                </li>
                                                            {/foreach}
                                                        {/block}
                                                    {/if}
                                                    
                                                    <!-- Savings/Discounts -->
                                                    {if isset($Warenkorb->PositionenArr) && count($Warenkorb->PositionenArr) > 0}
                                                        {foreach $Warenkorb->PositionenArr as $Pos}
                                                            {if $Pos->nPosTyp == C_WARENKORBPOS_TYP_GUTSCHEIN && $Pos->nTyp == $KUPON_TYP_STANDARD}
                                                                <li class="d-flex justify-content-between">
                                                                    {lang key='couponValue' section='checkout'}:
                                                                    <span class="text-danger fw-medium">{$Pos->cPreisLocalized}</span>
                                                                </li>
                                                            {/if}
                                                        {/foreach}
                                                    {/if}
                                                    
                                                    {* Guthaben *}
                                                    {if isset($smarty.session.Bestellung->GuthabenNutzen) && $smarty.session.Bestellung->GuthabenNutzen == 1}
                                                        {block name='basket-index-credit'}
                                                            <li class="d-flex justify-content-between">
                                                                {lang key='useCredit' section='account data'}:
                                                                <span class="text-danger fw-medium">{$smarty.session.Bestellung->GutscheinLocalized}</span>
                                                            </li>
                                                        {/block}
                                                    {/if}
                                                    
                                                    <!-- Shipping -->
                                                    <li class="d-flex justify-content-between">
                                                        {lang key='shipping' section='checkout'}
                                                        <span class="text-dark-emphasis fw-medium">{lang key='shippinglater' section='checkout'}</span>
                                                    </li>
                                                {/block}
                                            </ul>
                                            
                                            <div class="border-top pt-4 mt-4">
                                                {block name='basket-index-price-sticky'}
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <span class="fs-sm">{lang key='estimatedtotal' section='custom'}:</span>
                                                        <span class="h5 mb-0">{$WarensummeLocalized[0]}</span>
                                                    </div>
                                                {/block}
                                                
                                                {block name='basket-index-shipping'}
                                                    {if $favourableShippingString !== ''}
                                                        <small class="d-block mt-5 mb-3">{$favourableShippingString}</small>
                                                    {/if}
                                                {/block}
                                                
                                                {* Checkout Button *}
                                                {block name='basket-index-proceed-button'}
                                                    <a class="btn btn-lg btn-primary mt-5 w-100" id="cart-checkout-btn" href="{get_static_route id='bestellvorgang.php'}?wk=1">
                                                        {lang key='nextStepCheckout' section='checkout'}
                                                        <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
                                                    </a>
                                                {/block}
                                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Coupon input section -->
                                    {if $Einstellungen.kaufabwicklung.warenkorb_kupon_anzeigen === 'Y'}
                                        {block name='basket-index-coupon'}
                                            <div class="accordion bg-body-tertiary rounded-5 p-4">
                                                <div class="accordion-item border-0">
                                                    <h3 class="accordion-header" id="promoCodeHeading">
                                                        <button type="button" class="accordion-button animate-underline collapsed py-0 ps-sm-2 ps-lg-0 ps-xl-2" data-bs-toggle="collapse" data-bs-target="#coupon-form" aria-expanded="false" aria-controls="coupon-form">
                                                            <i class="ci-percent fs-xl me-2"></i>
                                                            <span class="animate-target me-2">{lang key='useCoupon' section='checkout'}</span>
                                                        </button>
                                                    </h3>
                                                    <div class="accordion-collapse collapse" id="coupon-form" aria-labelledby="promoCodeHeading">
                                                        <div class="accordion-body pt-3 pb-2 ps-sm-2 px-lg-0 px-xl-2">
                                                            {if $KuponMoeglich == 1}
                                                                {block name='basket-index-coupon-available'}
                                                                    {block name='basket-index-coupon-form'}
                                                                        {form class="jtl-validate needs-validation d-flex gap-2" id="basket-coupon-form" method="post" action=$cartURL slide=true}
                                                                            {input aria=["label"=>"{lang key='couponCode' section='account data'}"] type="text" name="Kuponcode" id="couponCode" class="form-control" maxlength="32" placeholder="{lang key='couponCodePlaceholder' section='checkout'}" required=true}
                                                                            {button type="submit" value=1 variant="primary"}{lang key='couponSubmit' section='checkout'}{/button}
                                                                        {/form}
                                                                    {/block}
                                                                {/block}
                                                            {else}
                                                                {block name='basket-index-coupon-unavailable'}
                                                                    {lang key='couponUnavailable' section='checkout'}
                                                                {/block}
                                                            {/if}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {/block}
                                    {/if}
                                    
                                    {* Versandhinweise Box - Optional basierend auf Einstellungen *}
                                    {if !empty($WarenkorbVersandkostenfreiHinweis) || $Einstellungen.kaufabwicklung.warenkorb_gesamtgewicht_anzeigen === 'Y'}
                                        <div class="bg-body-tertiary rounded-5 p-4 mt-3">
                                            <div class="p-sm-2 p-lg-0 p-xl-2">
                                                {if !empty($WarenkorbVersandkostenfreiHinweis)}
                                                    {block name='basket-index-alert'}
                                                        <div class="mb-3">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <i class="ci-delivery fs-lg text-primary me-2"></i>
                                                                <span class="fw-medium">{lang key='shippingInfo' section='login'}</span>
                                                            </div>
                                                            <p class="fs-sm mb-0">{$WarenkorbVersandkostenfreiHinweis}</p>
                                                        </div>
                                                    {/block}
                                                {/if}
                                                
                                                {block name='basket-index-shipping-include-free-hint'}
                                                    {include file='basket/freegift_hint.tpl'}
                                                {/block}
                                                
                                                {* Gesamtgewicht *}
                                                {if $Einstellungen.kaufabwicklung.warenkorb_gesamtgewicht_anzeigen === 'Y'}
                                                    {block name='basket-index-notice-weight'}
                                                        <div class="d-flex align-items-center">
                                                            <i class="ci-scale fs-lg text-primary me-2"></i>
                                                            <span class="fs-sm">{lang key='cartTotalWeight' section='basket' printf=$WarenkorbGesamtgewicht}</span>
                                                        </div>
                                                    {/block}
                                                {/if}
                                            </div>
                                        </div>
                                    {/if}
                                </div>
                            </aside>
                        {/block}
                    {else}
                        {* Leerer Warenkorb - Cartzilla Style *}
                        {block name='basket-index-cart-empty'}
                            <div class="col-12">
                                <div class="text-center py-5 my-4 bg-body-tertiary rounded-5">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-body rounded-circle mb-4" style="width: 5rem; height: 5rem;">
                                        <i class="ci-basket fs-1 text-primary"></i>
                                    </div>
                                    {block name='basket-index-alert-empty'}
                                        <h3 class="mb-3">{lang key='emptybasket' section='checkout'}</h3>
                                        <p class="fs-sm mb-4">{lang key='yourbasketisempty' section='checkout'}</p>
                                    {/block}
                                    {block name='basket-index-empty-continue-shopping'}
                                        <a href="{$ShopURL}" class="btn btn-primary">
                                            <i class="ci-cart fs-sm me-1"></i>
                                            {lang key='continueShopping' section='checkout'}
                                        </a>
                                    {/block}
                                </div>
                            </div>
                        {/block}
                    {/if}
                </div>
            </section>
    {/block}

    {block name='basket-index-include-footer'}
        {include file='layout/footer.tpl'}
    {/block}
{/block}
