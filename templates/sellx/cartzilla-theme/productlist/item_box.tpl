{block name='productlist-item-box'}
    <div class="card product-card">
        {block name='productlist-item-box-image'}
            <div class="product-card-actions d-flex align-items-center">
                {if $Artikel->Preise->Sonderpreis_aktiv && $Einstellungen.artikeluebersicht.artikeluebersicht_sonderpreis_label_anzeigen === 'Y'}
                    <span class="badge bg-danger">
                        {lang key='specialOffer' section='global'}
                    </span>
                {/if}
                {if $Artikel->nErscheinendesProdukt}
                    <span class="badge bg-info">
                        {lang key='productAvailableFrom'}: {$Artikel->Erscheinungsdatum_de}
                    </span>
                {elseif $Artikel->oPreisVPEWert !== null && $Artikel->oPreisVPEWert->anzeigen == 1 && $Artikel->nVariationsAufpreisVorhanden == 0}
                    <span class="badge bg-info">
                        {$Artikel->oPreisVPEWert->cPreisVPEWert} {lang key='vpePer'} {$Artikel->oPreisVPEWert->cVPEEinheit}
                    </span>
                {/if}
                
                <div class="d-flex align-items-center ms-auto">
                    {if $Einstellungen.global.global_wunschliste_anzeigen === 'Y' && $Einstellungen.artikeluebersicht.artikeluebersicht_wishlist_anzeigen === 'Y'}
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="{lang key='addToWishlist'}" onclick="addToWishlist({$Artikel->kArtikel})">
                            <i class="ci-heart"></i>
                        </button>
                    {/if}
                </div>
            </div>
            <a class="card-img-top d-block overflow-hidden" href="{$Artikel->cURLFull}">
                <img src="{$Artikel->Bilder[0]->cURLKlein}" alt="{$Artikel->cName}">
            </a>
        {/block}
        
        <div class="card-body py-2">
            {block name='productlist-item-box-caption'}
                <a class="product-meta d-block fs-xs pb-1" href="{$Artikel->cCategoryURLFull}">
                    {foreach $Artikel->oKategorie_arr as $oKategorie}
                        {if $oKategorie@first}
                            {$oKategorie->cName}
                        {/if}
                    {/foreach}
                </a>
                <h3 class="product-title fs-sm">
                    <a href="{$Artikel->cURLFull}">{$Artikel->cName}</a>
                </h3>
                <div class="d-flex justify-content-between">
                    <div class="product-price">
                        {if $Artikel->Preise->fVKNetto == 0 && $Artikel->bHasKonfig}
                            <span class="fs-sm">{lang key='priceStarting'}: </span>
                        {/if}
                        
                        {if $Artikel->Preise->rabatt > 0}
                            <span class="text-accent me-1">
                                {$Artikel->Preise->cPreisHTML}
                            </span>
                            <del class="fs-sm text-muted">
                                {$Artikel->Preise->PreisBerechnet->cStreichpreisLocalized[$NettoPreise]}
                            </del>
                        {else}
                            <span class="text-accent">
                                {$Artikel->Preise->cPreisHTML}
                            </span>
                        {/if}
                    </div>
                    
                    {if $Artikel->Bewertungen->oBewertungGesamt->nAnzahl > 0}
                        <div class="star-rating">
                            <i class="{if $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 1}ci-star-filled active{else}ci-star{/if}"></i>
                            <i class="{if $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 2}ci-star-filled active{else}ci-star{/if}"></i>
                            <i class="{if $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 3}ci-star-filled active{else}ci-star{/if}"></i>
                            <i class="{if $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 4}ci-star-filled active{else}ci-star{/if}"></i>
                            <i class="{if $Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt >= 5}ci-star-filled active{else}ci-star{/if}"></i>
                        </div>
                    {/if}
                </div>
            {/block}
        </div>
        
        {block name='productlist-item-box-actions'}
            <div class="card-body card-body-hidden">
                {if $Artikel->inWarenkorbLegbar === 1}
                    <form action="{get_static_route id='warenkorb.php'}" method="post" class="form form-basket">
                        {$jtl_token}
                        <input type="hidden" name="anzahl" value="1">
                        <input type="hidden" name="a" value="{$Artikel->kArtikel}">
                        <button type="submit" class="btn btn-primary btn-sm d-block w-100 mb-2">
                            <i class="ci-cart fs-sm me-1"></i>{lang key='addToCart'}
                        </button>
                    </form>
                {else}
                    <div class="btn btn-secondary btn-sm d-block w-100 mb-2">
                        {lang key='productOutOfStock'}
                    </div>
                {/if}
                
                <div class="text-center">
                    <a class="nav-link-style fs-ms" href="{$Artikel->cURLFull}">
                        <i class="ci-eye align-middle me-1"></i>{lang key='details'}
                    </a>
                </div>
            </div>
        {/block}
    </div>
{/block}