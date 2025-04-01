{block name='productdetails-review-item'}
    <div class="product-review pb-4 mb-4 border-bottom" id="comment{$oBewertung->kBewertung}" itemprop="review" itemscope itemtype="https://schema.org/Review">
        {block name='productdetails-review-itme-helpful'}
            {if $oBewertung->nHilfreich > 0}
                <div class="d-flex mb-3">
                    <div class="badge bg-success d-inline-block me-2">
                        <i class="ci-thumbs-up me-1"></i> {$oBewertung->nHilfreich} {lang key='from' section='product rating'} {$oBewertung->nAnzahlHilfreich}
                    </div>
                </div>
            {/if}
        {/block}
        
        <div class="d-flex mb-3">
            <div class="d-flex align-items-center me-4 pe-2">
                <div class="star-rating">
                    {for $i=1 to 5}
                        <i class="{if $i <= $oBewertung->nSterne}ci-star-filled active{else}ci-star{/if}"></i>
                    {/for}
                    <meta itemprop="ratingValue" content="{$oBewertung->nSterne}">
                    <meta itemprop="bestRating" content="5">
                    <meta itemprop="worstRating" content="1">
                </div>
            </div>
            <div>
                <h6 class="fs-sm mb-0">
                    <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <span itemprop="name">{$oBewertung->cName}</span>
                    </span>
                </h6>
                <span class="fs-ms text-muted">
                    <meta itemprop="datePublished" content="{$oBewertung->dDatum}">
                    {$oBewertung->Datum}
                </span>
            </div>
            
            {if $Einstellungen.bewertung.bewertung_hilfreich_anzeigen === 'Y'}
                {if JTL\Session\Frontend::getCustomer()->getID() > 0 && JTL\Session\Frontend::getCustomer()->getID() !== $oBewertung->kKunde}
                    <div class="ms-auto">
                        <div class="d-flex align-items-center" id="help{$oBewertung->kBewertung}">
                            <button class="btn-like {if (int)$oBewertung->rated === 1}active{/if}" type="submit" name="hilfreich_{$oBewertung->kBewertung}" title="{lang key='yes'}" data-review-id="{$oBewertung->kBewertung}">
                                <i class="ci-thumb-up"></i>
                                <span data-review-count-id="hilfreich_{$oBewertung->kBewertung}">{$oBewertung->nHilfreich}</span>
                            </button>
                            <button class="btn-dislike ms-2 {if $oBewertung->rated !== null && (int)$oBewertung->rated === 0}active{/if}" type="submit" name="nichthilfreich_{$oBewertung->kBewertung}" title="{lang key='no'}" data-review-id="{$oBewertung->kBewertung}">
                                <i class="ci-thumb-down"></i>
                                <span data-review-count-id="nichthilfreich_{$oBewertung->kBewertung}">{$oBewertung->nNichtHilfreich}</span>
                            </button>
                        </div>
                    </div>
                {/if}
            {/if}
        </div>
        
        <div class="mb-3">
            <h6 class="mb-2">{$oBewertung->cTitel}</h6>
            <p class="fs-sm mb-1" itemprop="reviewBody">{$oBewertung->cText|nl2br}</p>
            {if !empty($oBewertung->wasPurchased)}
                <div class="fs-ms text-muted">
                    <i class="ci-check-circle text-success me-1"></i>{lang key='verifiedPurchase' section='product rating'}
                </div>
            {/if}
        </div>
        
        {if !empty($oBewertung->cAntwort)}
            <div class="admin-reply bg-secondary p-3 rounded-3">
                <div class="d-flex justify-content-between mb-2">
                    <h6 class="mb-0">
                        <i class="ci-reply me-2"></i>{lang key='reply' section='product rating'} {$cShopName}:
                    </h6>
                    <span class="fs-ms text-muted">{$oBewertung->AntwortDatum}</span>
                </div>
                <p class="fs-sm mb-0">{$oBewertung->cAntwort}</p>
            </div>
        {/if}
        
        <meta itemprop="thumbnailURL" content="{$Artikel->cVorschaubildURL}">
    </div>
{/block}