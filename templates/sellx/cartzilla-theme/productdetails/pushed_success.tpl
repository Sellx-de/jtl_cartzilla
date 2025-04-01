{block name='productdetails-pushed-success'}
    <div id="pushed-success" class="{if $card}card border-0 shadow-lg{/if}">
        {if isset($zuletztInWarenkorbGelegterArtikel)}
            {assign var=pushedArtikel value=$zuletztInWarenkorbGelegterArtikel}
        {else}
            {assign var=pushedArtikel value=$Artikel}
        {/if}
        {assign var=showXSellingCart value=isset($Xselling->Kauf) && count($Xselling->Kauf->Artikel) > 0}
        
        {if $card}
            {block name='productdetails-pushed-success-cart-note-heading'}
                <div class="card-header bg-success text-white">
                    <div class="d-flex align-items-center">
                        <i class="ci-check-circle fs-lg me-2"></i>
                        {if isset($cartNote)}
                            <span>{$cartNote}</span>
                        {else}
                            <span>{lang key='productSuccessfullyAddedToCart'}</span>
                        {/if}
                    </div>
                </div>
            {/block}
            <div class="card-body">
        {/if}

        <div class="row">
            {block name='productdetails-pushed-success-product-cell'}
                <div class="col-md-{if $showXSellingCart}6{else}12{/if} mb-4">
                    {block name='productdetails-pushed-success-product-cell-content'}
                        <div class="d-sm-flex align-items-center border-bottom pb-4 mb-4">
                            <div class="me-sm-4 mb-3 mb-sm-0" style="width: 10rem;">
                                {block name='productdetails-pushed-success-product-cell-image'}
                                    {include file='snippets/image.tpl'
                                        item=$pushedArtikel
                                        square=false
                                        class='img-fluid'
                                        srcSize='sm'}
                                {/block}
                            </div>
                            <div class="w-100">
                                {block name='productdetails-pushed-success-product-cell-subheading'}
                                    <h3 class="h5 mb-2">{$pushedArtikel->cName}</h3>
                                {/block}
                                
                                {block name='productdetails-pushed-success-product-cell-details'}
                                    <div class="fs-sm">
                                        <div class="mb-2">
                                            <span class="text-muted me-2">{lang key='productNo'}:</span>
                                            <span>{$pushedArtikel->cArtNr}</span>
                                        </div>
                                        
                                        {if !empty($pushedArtikel->cHersteller)}
                                            <div class="mb-2">
                                                <span class="text-muted me-2">{lang key='manufacturer' section='productDetails'}:</span>
                                                <span>{$pushedArtikel->cHersteller}</span>
                                            </div>
                                        {/if}
                                        
                                        {if !empty($pushedArtikel->oMerkmale_arr)}
                                            <div class="mb-2">
                                                <span class="text-muted me-2">{lang key='characteristics' section='comparelist'}:</span>
                                                <span>
                                                    {block name='productdetails-pushed-success-characteristics'}
                                                        {foreach $pushedArtikel->oMerkmale_arr as $characteristic}
                                                            {$characteristic->getName()|escape:'html'}
                                                            {if $characteristic@index === 10 && !$characteristic@last}&hellip;{break}{/if}
                                                            {if !$characteristic@last}, {/if}
                                                        {/foreach}
                                                    {/block}
                                                </span>
                                            </div>
                                        {/if}
                                        
                                        {block name='productdetails-pushed-success-mhd'}
                                            {if $Einstellungen.artikeldetails.show_shelf_life_expiration_date === 'Y'
                                            && isset($pushedArtikel->dMHD)
                                            && isset($pushedArtikel->dMHD_de)}
                                                <div class="mb-2">
                                                    <span class="text-muted me-2">{lang key='productMHDTool'}:</span>
                                                    <span>{$pushedArtikel->dMHD_de}</span>
                                                </div>
                                            {/if}
                                        {/block}
                                        
                                        {if $Einstellungen.artikeluebersicht.artikeluebersicht_gewicht_anzeigen === 'Y' && isset($pushedArtikel->cGewicht) && $pushedArtikel->fGewicht > 0}
                                            <div class="mb-2">
                                                <span class="text-muted me-2">{lang key='shippingWeight'}:</span>
                                                <span>{$pushedArtikel->cGewicht} {lang key='weightUnit'}</span>
                                            </div>
                                        {/if}
                                        
                                        {if $Einstellungen.artikeluebersicht.artikeluebersicht_artikelgewicht_anzeigen === 'Y' && isset($pushedArtikel->cArtikelgewicht) && $pushedArtikel->fArtikelgewicht > 0}
                                            <div class="mb-2">
                                                <span class="text-muted me-2">{lang key='productWeight'}:</span>
                                                <span>{$pushedArtikel->cArtikelgewicht} {lang key='weightUnit'}</span>
                                            </div>
                                        {/if}
                                        
                                        {if $Einstellungen.bewertung.bewertung_anzeigen === 'Y' && (int)$pushedArtikel->fDurchschnittsBewertung !== 0}
                                            <div class="mb-2">
                                                <span class="text-muted me-2">{lang key='ratingAverage'}:</span>
                                                <span>
                                                    {block name='productdetails-pushed-success-include-rating'}
                                                        {include file='productdetails/rating.tpl' stars=$pushedArtikel->fDurchschnittsBewertung}
                                                    {/block}
                                                </span>
                                            </div>
                                        {/if}
                                    </div>
                                {/block}
                            </div>
                        </div>
                    {/block}
                    
                    {block name='productdetails-pushed-success-product-cell-links'}
                        <div class="d-flex flex-wrap">
                            {$lastVisitedProductListURL = $smarty.session.lastVisitedProductListURL|default:$cCanonicalURL}
                            {$productID = $pushedArtikel->kArtikel}
                            {if $pushedArtikel->kVaterArtikel > 0}
                                {$productID = $pushedArtikel->kVaterArtikel}
                            {/if}
                            <a href="{$lastVisitedProductListURL|cat:'#buy_form_'|cat:$productID}" 
                               class="btn btn-outline-primary me-3 mb-3" 
                               data-dismiss="{if !$card}modal{/if}" 
                               aria-label="Close">
                                <i class="ci-arrow-left me-1"></i> {lang key='continueShopping' section='checkout'}
                            </a>
                            <a href="{get_static_route id='warenkorb.php'}" 
                               class="btn btn-primary mb-3">
                                <i class="ci-cart me-1"></i> {lang key='gotoBasket'}
                            </a>
                        </div>
                    {/block}
                </div>
            {/block}
            
            {block name='productdetails-pushed-success-x-sell'}
                {if $showXSellingCart}
                    <div class="col-md-6 mb-4">
                        <div class="border-bottom pb-4 mb-4">
                            {block name='productdetails-pushed-success-x-sell-heading'}
                                <h3 class="h5 pb-2 mb-4">{lang key='customerWhoBoughtXBoughtAlsoY' section='productDetails'}</h3>
                            {/block}
                            
                            {block name='productdetails-pushed-success-include-product-slider'}
                                {include file='snippets/product_slider.tpl' id='' productlist=$Xselling->Kauf->Artikel title='' tplscope='half'}
                            {/block}
                        </div>
                    </div>
                {/if}
            {/block}
        </div>
        
        {if $card}</div>{/if}
    </div>
{/block}