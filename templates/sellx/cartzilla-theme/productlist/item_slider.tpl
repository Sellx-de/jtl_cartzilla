{block name='productlist-item-slider'}
    <div class="card product-card">
        {block name='productlist-item-slider-link'}
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
                {if isset($Artikel->Bilder[0]->cAltAttribut)}
                    {assign var=alt value=$Artikel->Bilder[0]->cAltAttribut|truncate:60}
                {else}
                    {assign var=alt value=$Artikel->cName}
                {/if}
                {block name='productlist-item-slider-image'}
                    {if $tplscope === 'half'}
                        {$imgSizes = '(min-width: 1300px) 19vw, (min-width: 992px) 29vw, 50vw'}
                    {elseif $tplscope === 'slider'}
                        {$imgSizes = '(min-width: 1300px) 15vw, (min-width: 992px) 20vw, (min-width: 768px) 34vw, 50vw'}
                    {elseif $tplscope === 'box'}
                        {$imgSizes = '(min-width: 1300px) 25vw, (min-width: 992px) 34vw, (min-width: 768px) 100vw, 50vw'}
                    {/if}
                    {include file='snippets/image.tpl' item=$Artikel
                        square=false
                        srcSize='sm'
                        class='product-image'
                        sizes=$imgSizes|default:'100vw'
                    }
                {/block}
                {if $tplscope !== 'box'}
                    <meta itemprop="image" content="{$Artikel->Bilder[0]->cURLNormal}">
                    <meta itemprop="url" content="{$Artikel->cURLFull}">
                {/if}
            </a>
        {/block}
        
        <div class="card-body py-2">
            {block name='productlist-item-slider-caption'}
                {if empty($noCaptionSlider)}
                    {block name='productlist-item-slider-caption-short-desc'}
                        <a class="product-meta d-block fs-xs pb-1" href="{$Artikel->cCategoryURLFull}">
                            {foreach $Artikel->oKategorie_arr as $oKategorie}
                                {if $oKategorie@first}
                                    {$oKategorie->cName}
                                {/if}
                            {/foreach}
                        </a>
                        <h3 class="product-title fs-sm">
                            <a href="{$Artikel->cURLFull}">
                                {if isset($showPartsList) && $showPartsList === true && isset($Artikel->fAnzahl_stueckliste)}
                                    {block name='productlist-item-slider-caption-bundle'}
                                        {$Artikel->fAnzahl_stueckliste}x
                                    {/block}
                                {/if}
                                <span {if $tplscope !== 'box'}itemprop="name"{/if}>{$Artikel->cKurzbezeichnung}</span>
                            </a>
                        </h3>
                    {/block}
                    
                    <div class="d-flex justify-content-between">
                        {block name='productlist-item-slider-include-price'}
                            <div class="product-price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                {include file='productdetails/price.tpl' Artikel=$Artikel tplscope=$tplscope}
                            </div>
                        {/block}
                        
                        {if $tplscope === 'box'}
                            {if $Einstellungen.bewertung.bewertung_anzeigen === 'Y' && $Artikel->fDurchschnittsBewertung > 0}
                                {block name='productlist-item-slider-include-rating'}
                                    <div class="star-rating">
                                        <i class="{if $Artikel->fDurchschnittsBewertung >= 1}ci-star-filled active{else}ci-star{/if}"></i>
                                        <i class="{if $Artikel->fDurchschnittsBewertung >= 2}ci-star-filled active{else}ci-star{/if}"></i>
                                        <i class="{if $Artikel->fDurchschnittsBewertung >= 3}ci-star-filled active{else}ci-star{/if}"></i>
                                        <i class="{if $Artikel->fDurchschnittsBewertung >= 4}ci-star-filled active{else}ci-star{/if}"></i>
                                        <i class="{if $Artikel->fDurchschnittsBewertung >= 5}ci-star-filled active{else}ci-star{/if}"></i>
                                    </div>
                                {/block}
                            {/if}
                        {/if}
                    </div>
                {/if}
            {/block}
        </div>
        
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
    </div>
{/block}
