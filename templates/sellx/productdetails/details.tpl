{block name='productdetails-details'}
    {*{has_boxes position='left' assign='hasLeftBox'}*}
    {$hasLeftBox = false}
    {container class="{if $Einstellungen.template.theme.left_sidebar === 'Y' && $boxesLeftActive}container-plus-sidebar{/if}"}
        {if isset($bWarenkorbHinzugefuegt) && $bWarenkorbHinzugefuegt}
            {block name='productdetails-details-include-pushed-success'}
                {include file='productdetails/pushed_success.tpl' card=true}
            {/block}
        {else}
            {block name='productdetails-details-alert-product-note'}
                {$alertList->displayAlertByKey('productNote')}
            {/block}
        {/if}
    {/container}
    {block name='productdetails-details-form'}
        {opcMountPoint id='opc_before_buy_form' inContainer=false}
        {container class="{if $Einstellungen.template.theme.left_sidebar === 'Y' && $boxesLeftActive}container-plus-sidebar{/if}"}
            {form id="buy_form{if !empty($smarty.get.quickView)}-quickview{/if}" action=$Artikel->cURLFull class="jtl-validate"}
                {button aria=["label"=>"{lang key='addToCart'}"]
                    name="inWarenkorb"
                    variant="hidden"
                    type="submit"
                    value="{lang key='addToCart'}"
                    disabled=$Artikel->bHasKonfig && !$isConfigCorrect|default:false
                    class="js-cfg-validate btn-hidden-default"}{/button}
                
                <!-- Product gallery and details -->
                <section class="container">
                    <div class="row" id="product-offer">
                        {block name='productdetails-details-include-image'}
                            {include file='productdetails/image.tpl'}
                        {/block}
                        <!-- Product details -->
                        <div class="col-12 col-lg-6 col-md-6 product-info">
                            <div class="ps-md-4 ps-xl-5">
                                <!-- Reviews -->
                                {if ($Einstellungen.bewertung.bewertung_anzeigen === 'Y')}
                                    <a class="d-none d-md-flex align-items-center gap-2 text-decoration-none mb-3" href="#tab-votes">
                                        <div class="d-flex gap-1 fs-sm" {if $Artikel->Bewertungen->oBewertungGesamt->nAnzahl > 0}itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"{/if}>
                                            {if $Artikel->Bewertungen->oBewertungGesamt->nAnzahl > 0}
                                                <meta itemprop="ratingValue" content="{$Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt}"/>
                                                <meta itemprop="bestRating" content="5"/>
                                                <meta itemprop="worstRating" content="1"/>
                                                <meta itemprop="reviewCount" content="{$Artikel->Bewertungen->oBewertungGesamt->nAnzahl}"/>
                                                {* 1. Stern *}
                                                {if $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 1}
                                                    <i class="ci-star-filled text-warning rating-star" data-filled="true"></i>
                                                {elseif $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 0.5}
                                                    <i class="ci-star-half text-warning rating-star" data-filled="half"></i>
                                                {else}
                                                    <i class="ci-star text-body-tertiary opacity-75 rating-star" data-filled="false"></i>
                                                {/if}
                                                
                                                {* 2. Stern *}
                                                {if $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 2}
                                                    <i class="ci-star-filled text-warning rating-star" data-filled="true"></i>
                                                {elseif $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 1.5}
                                                    <i class="ci-star-half text-warning rating-star" data-filled="half"></i>
                                                {else}
                                                    <i class="ci-star text-body-tertiary opacity-75 rating-star" data-filled="false"></i>
                                                {/if}
                                                
                                                {* 3. Stern *}
                                                {if $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 3}
                                                    <i class="ci-star-filled text-warning rating-star" data-filled="true"></i>
                                                {elseif $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 2.5}
                                                    <i class="ci-star-half text-warning rating-star" data-filled="half"></i>
                                                {else}
                                                    <i class="ci-star text-body-tertiary opacity-75 rating-star" data-filled="false"></i>
                                                {/if}
                                                
                                                {* 4. Stern *}
                                                {if $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 4}
                                                    <i class="ci-star-filled text-warning rating-star" data-filled="true"></i>
                                                {elseif $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 3.5}
                                                    <i class="ci-star-half text-warning rating-star" data-filled="half"></i>
                                                {else}
                                                    <i class="ci-star text-body-tertiary opacity-75 rating-star" data-filled="false"></i>
                                                {/if}
                                                
                                                {* 5. Stern *}
                                                {if $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 5}
                                                    <i class="ci-star-filled text-warning rating-star" data-filled="true"></i>
                                                {elseif $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 4.5}
                                                    <i class="ci-star-half text-warning rating-star" data-filled="half"></i>
                                                {else}
                                                    <i class="ci-star text-body-tertiary opacity-75 rating-star" data-filled="false"></i>
                                                {/if}
                                            {else}
                                                <i class="ci-star text-body-tertiary opacity-75 rating-star" data-filled="false"></i>
                                                <i class="ci-star text-body-tertiary opacity-75 rating-star" data-filled="false"></i>
                                                <i class="ci-star text-body-tertiary opacity-75 rating-star" data-filled="false"></i>
                                                <i class="ci-star text-body-tertiary opacity-75 rating-star" data-filled="false"></i>
                                                <i class="ci-star text-body-tertiary opacity-75 rating-star" data-filled="false"></i>
                                            {/if}
                                        </div>
                                        <span class="text-body-tertiary fs-sm">
                                            {if $Artikel->Bewertungen->oBewertungGesamt->nAnzahl > 0}
                                                {$Artikel->Bewertungen->oBewertungGesamt->nAnzahl} {if $Artikel->Bewertungen->oBewertungGesamt->nAnzahl == 1}{lang key='review'}{else}{lang key='reviews'}{/if}
                                            {else}
                                                {lang key='noReviews' section='product rating'}
                                            {/if}
                                        </span>
                                    </a>
                                {/if}

                                <!-- Title -->
                                <h1 class="h3" itemprop="name">{$Artikel->cName}</h1>

                                <!-- Description -->
                                {if isset($Artikel->cKurzBeschreibung) && $Artikel->cKurzBeschreibung|strlen > 0}
                                    <p class="fs-sm mb-0" itemprop="description">{$Artikel->cKurzBeschreibung}</p>
                                    {if isset($Artikel->cBeschreibung) && $Artikel->cBeschreibung|strlen > 0}
                                        <div class="collapse" id="moreDescription">
                                            <div class="fs-sm pt-3">
                                                {$Artikel->cBeschreibung}
                                            </div>
                                        </div>
                                        <a class="d-inline-block fs-sm fw-medium text-dark-emphasis collapsed mt-1" href="#moreDescription" data-bs-toggle="collapse" aria-expanded="false" aria-controls="moreDescription" data-label-collapsed="{lang key='readMore'}" data-label-expanded="{lang key='showLess'}"></a>
                                    {/if}
                                {/if}

                                <!-- Price -->
                                <div class="h4 d-flex align-items-center my-4" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                    <meta itemprop="url" content="{$Artikel->cURLFull}"/>
                                    <meta itemprop="itemCondition" content="https://schema.org/NewCondition"/>
                                    <meta itemprop="availability" content="https://schema.org/{if $Artikel->cLagerBeachten === 'N' || $Artikel->fLagerbestand > 0}InStock{elseif $Artikel->cLagerBeachten === 'Y' && $Artikel->cLagerKleinerNull === 'Y'}InStock{else}OutOfStock{/if}"/>
                                    <link itemprop="businessFunction" href="http://purl.org/goodrelations/v1#Sell" />
                                    <meta itemprop="priceValidUntil" content="{$Artikel->dPreisVon|default:($smarty.now|date_format:'%Y-%m-%d')|date_format:'%Y-%m-%d'}"/>
                                    <meta itemprop="priceCurrency" content="{$smarty.session.Waehrung->cISO}"/>
                                    <span itemprop="price" content="{$Artikel->Preise->fVKNetto}">
                                        {if isset($Artikel->Preise->strPreisGrafik_Detail)}
                                            {$Artikel->Preise->strPreisGrafik_Detail}
                                        {else}
                                            {$Artikel->Preise->cVKLocalized[0]}
                                        {/if}
                                    </span>
                                    {if $Artikel->Preise->rabatt > 0}
                                        <del class="fs-sm fw-normal text-body-tertiary ms-2">{$Artikel->Preise->cAltPreisLocalized[0]}</del>
                                    {/if}
                                </div>

                                <!-- Hidden fields -->
                                {input type="hidden" name="inWarenkorb" value="1"}
                                {if $Artikel->kArtikelVariKombi > 0}
                                    {input type="hidden" name="aK" value=$Artikel->kArtikelVariKombi}
                                {/if}
                                {if isset($Artikel->kVariKindArtikel)}
                                    {input type="hidden" name="VariKindArtikel" value=$Artikel->kVariKindArtikel}
                                {/if}
                                {if isset($smarty.get.ek)}
                                    {input type="hidden" name="ek" value=intval($smarty.get.ek)}
                                {/if}
                                {input type="hidden" name="AktuellerkArtikel" class="current_article" name="a" value=$Artikel->kArtikel}
                                {input type="hidden" name="wke" value="1"}
                                {input type="hidden" name="kKundengruppe" value=JTL\Session\Frontend::getCustomerGroup()->getID()}
                                {input type="hidden" name="kSprache" value=JTL\Shop::getLanguageID()}

                                <!-- Variations -->
                                {if isset($Artikel->Variationen) && $Artikel->Variationen|count > 0}
                                    {foreach name=Variationen from=$Artikel->Variationen key=i item=Variation}
                                        <div class="mb-4">
                                            <label class="form-label fw-semibold pb-1 mb-2">{$Variation->cName}: <span class="text-body fw-normal" id="varOption{$Variation->kEigenschaft}"></span></label>
                                            <div class="d-flex flex-wrap gap-2" data-binded-label="#varOption{$Variation->kEigenschaft}">
                                                {foreach name=Variationswerte from=$Variation->Werte key=y item=Variationswert}
                                                    <input type="radio" class="btn-check" name="eigenschaftwert[{$Variation->kEigenschaft}]" id="var-{$Variationswert->kEigenschaftWert}" value="{$Variationswert->kEigenschaftWert}" {if $Variationswert->cName === $Variationswert->fLagerbestand}checked{/if} {if $Variationswert->notExists}disabled{/if}>
                                                    <label for="var-{$Variationswert->kEigenschaftWert}" class="btn btn-outline-secondary" data-label="{$Variationswert->cName}">
                                                        {$Variationswert->cName}
                                                    </label>
                                                {/foreach}
                                            </div>
                                        </div>
                                    {/foreach}
                                {/if}

                                <!-- Count input + Add to cart button -->
                                <div class="d-flex gap-3 pb-3 pb-lg-4 mb-3">
                                    <div class="count-input flex-shrink-0">
                                        <button type="button" class="btn btn-icon btn-lg" data-decrement aria-label="{lang key='decrementQuantity'}">
                                            <i class="ci-minus"></i>
                                        </button>
                                        <input type="number" name="anzahl" class="form-control form-control-lg" min="{if isset($Artikel->fMindestbestellmenge) && $Artikel->fMindestbestellmenge > 0}{$Artikel->fMindestbestellmenge}{else}1{/if}" value="{if isset($Artikel->fMindestbestellmenge) && $Artikel->fMindestbestellmenge > 0}{$Artikel->fMindestbestellmenge}{else}1{/if}" {if isset($Artikel->fAbnahmeintervall) && $Artikel->fAbnahmeintervall > 0}step="{$Artikel->fAbnahmeintervall}"{/if}>
                                        <button type="button" class="btn btn-icon btn-lg" data-increment aria-label="{lang key='incrementQuantity'}">
                                            <i class="ci-plus"></i>
                                        </button>
                                    </div>
                                    <button type="submit" name="inWarenkorb" class="btn btn-lg btn-dark w-100">{lang key='addToCart'}</button>
                                </div>

                                <!-- Info list -->
                                <ul class="list-unstyled gap-3 pb-3 pb-lg-4 mb-3">
                                    <li class="d-flex flex-wrap fs-sm">
                                        <span class="d-flex align-items-center fw-medium text-dark-emphasis me-2">
                                            <i class="ci-clock fs-base me-2"></i>
                                            {lang key='shippingTime'}:
                                        </span>
                                        {if isset($Artikel->cLieferzeitHTML) && $Artikel->cLieferzeitHTML}
                                            {$Artikel->cLieferzeitHTML}
                                        {else}
                                            1-3 {lang key='days'}
                                        {/if}
                                    </li>

                                    {if isset($Artikel->cArtNr) && $Artikel->cArtNr}
                                        <li class="d-flex flex-wrap fs-sm">
                                            <span class="d-flex align-items-center fw-medium text-dark-emphasis me-2">
                                                <i class="ci-tag fs-base me-2"></i>
                                                {lang key='sortProductno'}:
                                            </span>
                                            <span itemprop="sku">{$Artikel->cArtNr}</span>
                                        </li>
                                    {/if}
                                    {if isset($Artikel->cHersteller) && $Einstellungen.artikeldetails.artikeldetails_hersteller_anzeigen !== 'N'}
                                        <li class="d-flex flex-wrap fs-sm">
                                            <span class="d-flex align-items-center fw-medium text-dark-emphasis me-2">
                                                <i class="ci-tool fs-base me-2"></i>
                                                {lang key='manufacturers'}:
                                            </span>
                                            <span itemprop="brand" itemscope itemtype="https://schema.org/Brand">
                                                <span itemprop="name">{$Artikel->cHersteller}</span>
                                            </span>
                                        </li>
                                    {/if}
                                </ul>

                                <!-- Stock status -->

                                    <div class="d-flex flex-wrap justify-content-between fs-sm mb-3 stock-status-container">
                                        <span class="fw-medium text-dark-emphasis me-2"> </span>
                                        <span><span class="fw-medium text-dark-emphasis">🔥{$Artikel->fLagerbestand}</span> auf Lager!</span>
                                    </div>
                                    <div class="progress position-relative mb-4" role="progressbar" aria-label="{lang key='leftInStock'}" aria-valuenow="{$Artikel->fLagerbestand*10}" aria-valuemin="0" aria-valuemax="100" style="height: 8px; overflow: visible;">
                                        <div class="progress-bar stock-progress-bar rounded-pill" style="width: {$Artikel->fLagerbestand*10}%"></div>
                                        <div class="snail-container">
                                            <span class="snail">🐌</span>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                    
                    {block name='productdetails-details-include-config-container-details'}
                        {if $Artikel->bHasKonfig && $Einstellungen.template.productdetails.config_position === 'details'}
                            <div id="product-configurator" class="cfg-position-{$Einstellungen.template.productdetails.config_position} cfg-layout-{$Einstellungen.template.productdetails.config_layout}">
                                {include file='productdetails/config_container.tpl'}
                            </div>
                        {/if}
                    {/block}
                </section>
                
                {block name='productdetails-details-include-matrix'}
                    {include file='productdetails/matrix.tpl'}
                {/block}
            {/form}
        {/container}
    {/block}

    {block name='productdetails-details-content-not-quickview'}
        {block name='productdetails-details-include-tabs'}
            {include file='productdetails/tabs.tpl'}
        {/block}

        {if empty($smarty.get.quickView)}
            {*SLIDERS*}
            {if isset($Einstellungen.artikeldetails.artikeldetails_stueckliste_anzeigen) && $Einstellungen.artikeldetails.artikeldetails_stueckliste_anzeigen === 'Y' && isset($Artikel->oStueckliste_arr) && $Artikel->oStueckliste_arr|count > 0
            || isset($Einstellungen.artikeldetails.artikeldetails_produktbundle_nutzen) && $Einstellungen.artikeldetails.artikeldetails_produktbundle_nutzen === 'Y' && isset($Artikel->oProduktBundle_arr) && $Artikel->oProduktBundle_arr|count > 0
            || isset($Xselling->Standard->XSellGruppen) && count($Xselling->Standard->XSellGruppen) > 0
            || isset($Xselling->Kauf->Artikel) && count($Xselling->Kauf->Artikel) > 0
            || isset($oAehnlicheArtikel_arr) && count($oAehnlicheArtikel_arr) > 0}
                {container fluid=true class="{if $Einstellungen.template.theme.left_sidebar === 'Y' && $boxesLeftActive}container-plus-sidebar{/if}"}
                    {if isset($Einstellungen.artikeldetails.artikeldetails_stueckliste_anzeigen) && $Einstellungen.artikeldetails.artikeldetails_stueckliste_anzeigen === 'Y' && isset($Artikel->oStueckliste_arr) && $Artikel->oStueckliste_arr|count > 0}
                        {block name='productdetails-details-include-product-slider-partslist'}
                            <div class="partslist">
                                {lang key='listOfItems' section='global' assign='slidertitle'}
                                {include file='snippets/product_slider.tpl' id='slider-partslist' productlist=$Artikel->oStueckliste_arr title=$slidertitle showPartsList=true}
                            </div>
                        {/block}
                    {/if}

                    {if isset($Einstellungen.artikeldetails.artikeldetails_produktbundle_nutzen) && $Einstellungen.artikeldetails.artikeldetails_produktbundle_nutzen === 'Y' && isset($Artikel->oProduktBundle_arr) && $Artikel->oProduktBundle_arr|count > 0}
                        {block name='productdetails-details-include-bundle'}
                            <div class="bundle">
                                {include file='productdetails/bundle.tpl' ProductKey=$Artikel->kArtikel Products=$Artikel->oProduktBundle_arr ProduktBundle=$Artikel->oProduktBundlePrice ProductMain=$Artikel->oProduktBundleMain}
                            </div>
                        {/block}
                    {/if}
                    {if isset($Xselling->Standard) || isset($Xselling->Kauf) || isset($oAehnlicheArtikel_arr)}
                        <div class="recommendations d-print-none">
                            {block name='productdetails-details-recommendations'}
                                {if isset($Xselling->Standard->XSellGruppen) && count($Xselling->Standard->XSellGruppen) > 0}
                                    {foreach $Xselling->Standard->XSellGruppen as $Gruppe}
                                        {include file='snippets/product_slider.tpl' class='x-supplies' id='slider-xsell-group-'|cat:$Gruppe@iteration productlist=$Gruppe->Artikel title=$Gruppe->Name}
                                    {/foreach}
                                {/if}

                                {if isset($Xselling->Kauf->Artikel) && count($Xselling->Kauf->Artikel) > 0}
                                    {lang key='customerWhoBoughtXBoughtAlsoY' section='productDetails' assign='slidertitle'}
                                    {include file='snippets/product_slider.tpl' class='x-sell' id='slider-xsell' productlist=$Xselling->Kauf->Artikel title=$slidertitle}
                                {/if}

                                {if isset($oAehnlicheArtikel_arr) && count($oAehnlicheArtikel_arr) > 0}
                                    {lang key='RelatedProducts' section='productDetails' assign='slidertitle'}
                                    {include file='snippets/product_slider.tpl' class='x-related' id='slider-related' productlist=$oAehnlicheArtikel_arr title=$slidertitle}
                                {/if}
                            {/block}
                        </div>
                    {/if}
                {/container}
            {/if}
            {block name='productdetails-details-include-popups'}
                <div id="article_popups">
                    {include file='productdetails/popups.tpl'}
                </div>
            {/block}
        {/if}
    {/block}
{/block}

{* JavaScript für Bewertungssterne Hover-Effekt *}
<style>
    .rating-star {
        cursor: pointer;
        transition: all 0.2s;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('.rating-star');
        
        stars.forEach(star => {
            const fillStatus = star.getAttribute('data-filled');
            
            star.addEventListener('mouseover', function() {
                if (fillStatus === 'true') {
                    // Wenn der Stern voll gefüllt ist, beim Hover leer anzeigen
                    star.classList.remove('ci-star-filled', 'text-warning');
                    star.classList.add('ci-star', 'text-body-tertiary', 'opacity-75');
                } else if (fillStatus === 'half') {
                    // Wenn der Stern halb gefüllt ist, beim Hover voll gefüllt anzeigen
                    star.classList.remove('ci-star-half', 'text-warning');
                    star.classList.add('ci-star-filled', 'text-warning');
                } else {
                    // Wenn der Stern leer ist, beim Hover gefüllt anzeigen
                    star.classList.remove('ci-star', 'text-body-tertiary', 'opacity-75');
                    star.classList.add('ci-star-filled', 'text-warning');
                }
            });
            
            star.addEventListener('mouseout', function() {
                if (fillStatus === 'true') {
                    // Zurück zum voll gefüllten Zustand
                    star.classList.remove('ci-star', 'text-body-tertiary', 'opacity-75');
                    star.classList.add('ci-star-filled', 'text-warning');
                } else if (fillStatus === 'half') {
                    // Zurück zum halb gefüllten Zustand
                    star.classList.remove('ci-star-filled', 'text-warning');
                    star.classList.add('ci-star-half', 'text-warning');
                } else {
                    // Zurück zum leeren Zustand
                    star.classList.remove('ci-star-filled', 'text-warning');
                    star.classList.add('ci-star', 'text-body-tertiary', 'opacity-75');
                }
            });
        });
    });
</script>

<style>
    .stock-progress-bar {
        background: linear-gradient(to right, #FF4136, #FF851B, #FFDC00, #2ECC40);
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0% { opacity: 0.8; }
        50% { opacity: 1; }
        100% { opacity: 0.8; }
    }
    
.snail-container {
    position: absolute;
    top: -18px; /* Positionierung am oberen Rand der Leiste */
    left: 0;
    animation: moveSnailContainer 20s linear infinite alternate;
    width: 20px;
}

.snail {
    font-size: 16px;
    display: inline-block;
    transform: scaleX(-1); /* Standardmäßig nach links schauen */
    animation: flipSnail 40s linear infinite;
}

@keyframes moveSnailContainer {
    0% { left: 0; }
    100% { left: calc(100% - 20px); }
}

@keyframes flipSnail {
    0% { 
        transform: scaleX(-1); /* Nach links schauend (Standard) */
    }
    49.9% { 
        transform: scaleX(-1); /* Nach links schauend (Standard) */
    }
    50% { 
        transform: scaleX(1); /* Nach rechts schauend (gespiegelt) */
    }
    99.9% { 
        transform: scaleX(1); /* Nach rechts schauend (gespiegelt) */
    }
    100% {
        transform: scaleX(-1); /* Wieder zurück nach links schauend */
    }
}
</style>
