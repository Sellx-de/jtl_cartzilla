{block name='basket-cart-items'}
    {input type="submit" name="fake" class="d-none"}
    {block name='basket-cart-items-cols'}
        {$itemInfoCols=4}
        {$cols=12}
        {$mdLeft=7}
        {$mdRight=5}
        {if $Einstellungen.kaufabwicklung.bestellvorgang_einzelpreise_anzeigen !== 'Y'}
            {$itemInfoCols=$itemInfoCols+2}
        {/if}
    {/block}
    {block name='basket-cart-items-order-items'}
        {block name='basket-cart-items-order-items-header'}
            <table class="table position-relative z-2 mb-4">
                <thead>
                    <tr>
                        {if $Einstellungen.kaufabwicklung.warenkorb_produktbilder_anzeigen === 'Y'}
                            <th scope="col" class="fs-sm fw-normal py-3 ps-0"><span class="text-body">{lang key='product'}</span></th>
                        {/if}
                        {if $Einstellungen.kaufabwicklung.bestellvorgang_einzelpreise_anzeigen === 'Y'}
                            <th scope="col" class="text-body fs-sm fw-normal py-3 d-none d-xl-table-cell"><span class="text-body">{lang key="pricePerUnit" section="productDetails"}</span></th>
                        {/if}
                        <th scope="col" class="text-body fs-sm fw-normal py-3 d-none d-md-table-cell"><span class="text-body">{lang key="quantity" section="checkout"}</span></th>
                        <th scope="col" class="text-body fs-sm fw-normal py-3 d-none d-md-table-cell"><span class="text-body">{lang key="price"}</span></th>
                        <th scope="col" class="text-body fs-sm fw-normal pb-3 px-1 d-none d-md-table-cell"><div class="nav justify-content-end"><span class="text-body">Entfernen</div></span></th>
                    </tr>
                </thead>
                <tbody class="align-middle">
        {/block}
        {block name='basket-cart-items-order-items-main'}
        {foreach JTL\Session\Frontend::getCart()->PositionenArr as $oPosition}
            {if !$oPosition->istKonfigKind()}
                {$posName=$oPosition->cName|transByISO|escape:'html'}
                <tr class="cart-items-body type-{$oPosition->nPosTyp}">
                    {block name='basket-cart-items-image'}
                        {if $Einstellungen.kaufabwicklung.warenkorb_produktbilder_anzeigen === 'Y'}
                            <td class="py-3 ps-0">
                                <div class="d-flex align-items-center">
                                    {if !empty($oPosition->Artikel->cVorschaubildURL)}
                                        <a class="flex-shrink-0" href="{$oPosition->Artikel->cURLFull}" title="{$posName}">
                                            {include file='snippets/image.tpl'
                                                item=$oPosition->Artikel
                                                sizes='(min-width: 1300px) 17vw, (min-width: 992px) 15vw, 25vw'
                                                square=false
                                                width="110"
                                                alt=$posName
                                            }
                                        </a>
                                    {/if}
                                    
                                    <div class="w-100 min-w-0 ps-2 ps-xl-3">
                                        {if $oPosition->nPosTyp === $smarty.const.C_WARENKORBPOS_TYP_ARTIKEL
                                        || $oPosition->nPosTyp === $smarty.const.C_WARENKORBPOS_TYP_GRATISGESCHENK}
                                            <h5 class="d-flex animate-underline mb-2">
                                                <a class="d-block fs-sm fw-medium text-truncate animate-target" href="{$oPosition->Artikel->cURLFull}" title="{$posName}">{$oPosition->cName|transByISO}</a>
                                            </h5>
                                            
                                            <ul class="list-unstyled gap-1 fs-xs mb-0">
                                                {if $Einstellungen.kaufabwicklung.warenkorb_varianten_varikombi_anzeigen === 'Y' && isset($oPosition->WarenkorbPosEigenschaftArr) && !empty($oPosition->WarenkorbPosEigenschaftArr)}
                                                    {foreach $oPosition->WarenkorbPosEigenschaftArr as $Variation}
                                                        <li><span class="text-body-secondary">{$Variation->cEigenschaftName|transByISO}:</span> <span class="text-dark-emphasis fw-medium">{$Variation->cEigenschaftWertName|transByISO}</span></li>
                                                    {/foreach}
                                                {/if}
                                                {if !empty($oPosition->Artikel->cArtNr)}
                                                    <li><span class="text-body-secondary">{lang key='productNo'}:</span> <span class="text-dark-emphasis fw-medium">{$oPosition->Artikel->cArtNr}</span></li>
                                                {/if}
                                                {if $Einstellungen.kaufabwicklung.bestellvorgang_einzelpreise_anzeigen === 'Y'}
                                                    <li class="d-xl-none">
                                                        <span class="text-body-secondary">{lang key="pricePerUnit" section="productDetails"}:</span> 
                                                        <span class="text-dark-emphasis fw-medium">
                                                            {if $oPosition->istKonfigVater()}
                                                                {$oPosition->cKonfigpreisLocalized[$NettoPreise][$smarty.session.cWaehrungName]}
                                                            {else}
                                                                {$oPosition->cEinzelpreisLocalized[$NettoPreise][$smarty.session.cWaehrungName]}
                                                                {if $oPosition->Artikel->UVPLocalized && $oPosition->Artikel->UVPLocalized != $oPosition->cEinzelpreisLocalized[$NettoPreise][$smarty.session.cWaehrungName]}
                                                                    <del class="text-body-tertiary fw-normal">{$oPosition->Artikel->UVPLocalized}</del>
                                                                {/if}
                                                            {/if}
                                                        </span>
                                                    </li>
                                                {/if}
                                                {if $Einstellungen.artikeldetails.show_shelf_life_expiration_date === 'Y'
                                                && isset($oPosition->Artikel->dMHD) && isset($oPosition->Artikel->dMHD_de)
                                                && $oPosition->Artikel->dMHD_de !== null}
                                                    <li><span class="text-body-secondary">{lang key='productMHD'}:</span> <span class="text-dark-emphasis fw-medium">{$oPosition->Artikel->dMHD_de}</span></li>
                                                {/if}
                                                {if $oPosition->Artikel->cLocalizedVPE
                                                && $oPosition->Artikel->cVPE !== 'N'
                                                && $oPosition->nPosTyp !== $smarty.const.C_WARENKORBPOS_TYP_GRATISGESCHENK}
                                                    <li><span class="text-body-secondary">{lang key='basePrice'}:</span> <span class="text-dark-emphasis fw-medium">{$oPosition->Artikel->cLocalizedVPE[$NettoPreise]}</span></li>
                                                {/if}
                                                {if $Einstellungen.kaufabwicklung.bestellvorgang_lieferstatus_anzeigen === 'Y' && $oPosition->cLieferstatus|transByISO}
                                                    <li><span class="text-body-secondary">{lang key='deliveryStatus'}:</span> <span class="text-dark-emphasis fw-medium">{$oPosition->cLieferstatus|transByISO}</span></li>
                                                {/if}
                                                {if !empty($oPosition->cHinweis)}
                                                    <li class="text-info">{$oPosition->cHinweis}</li>
                                                {/if}
                                                {if $oPosition->Artikel->cHersteller && $Einstellungen.artikeldetails.artikeldetails_hersteller_anzeigen != "N"}
                                                    <li><span class="text-body-secondary">{lang key='manufacturer' section='productDetails'}</span>: <span class="text-dark-emphasis fw-medium">{$oPosition->Artikel->cHersteller}</span></li>
                                                {/if}
                                            </ul>
                                            
                                            {if $oPosition->nPosTyp === $smarty.const.C_WARENKORBPOS_TYP_ARTIKEL}
                                                <div class="count-input rounded-2 d-md-none mt-3">
                                                    {if $oPosition->istKonfigVater()}
                                                        {lang key="quantity" section="checkout"}: {$oPosition->nAnzahl|replace_delim} {if !empty($oPosition->Artikel->cEinheit)}{$oPosition->Artikel->cEinheit}{/if}
                                                        {link class="btn btn-outline-secondary configurepos btn-block btn-sm"
                                                        href="{$ShopURL}/?a={$oPosition->kArtikel}&ek={$oPosition@index}"}
                                                            <i class="fa fa-cogs icon-mr-2"></i>{lang key='configure'}
                                                        {/link}
                                                    {else}
                                                        {if $oPosition->Artikel->fMindestbestellmenge}
                                                            {assign var=mindestbestellmenge value=$oPosition->Artikel->fMindestbestellmenge}
                                                        {else}
                                                            {assign var=mindestbestellmenge value=0}
                                                        {/if}
                                                        <button type="button" class="btn btn-sm btn-icon" data-decrement aria-label="Decrement quantity">
                                                            <i class="ci-minus"></i>
                                                        </button>
                                                        <input type="number" class="form-control form-control-sm" value="{$oPosition->nAnzahl|replace_delim}" 
                                                            min="{$mindestbestellmenge}"
                                                            max="{$oPosition->Artikel->FunktionsAttribute[$smarty.const.FKT_ATTRIBUT_MAXBESTELLMENGE]|default:''}"
                                                            required="{($oPosition->Artikel->fAbnahmeintervall > 0)}"
                                                            step="{if $oPosition->Artikel->cTeilbar === 'Y' && $oPosition->Artikel->fAbnahmeintervall == 0}any{elseif $oPosition->Artikel->fAbnahmeintervall > 0}{$oPosition->Artikel->fAbnahmeintervall}{else}1{/if}"
                                                            id="quantity[{$oPosition@index}]" name="anzahl[{$oPosition@index}]"
                                                            aria-label="{lang key='quantity'}"
                                                            data-decimals="{getDecimalLength quantity=$oPosition->Artikel->fAbnahmeintervall}"
                                                            data-product-id="{if isset($oPosition->Artikel->kVariKindArtikel)}{$oPosition->Artikel->kVariKindArtikel}{else}{$oPosition->Artikel->kArtikel}{/if}"
                                                            readonly
                                                        >
                                                        <button type="button" class="btn btn-sm btn-icon" data-increment aria-label="Increment quantity">
                                                            <i class="ci-plus"></i>
                                                        </button>
                                                    {/if}
                                                </div>
                                            {/if}
                                        {else}
                                            {$oPosition->cName|transByISO}{if isset($oPosition->discountForArticle)}{$oPosition->discountForArticle|transByISO}{/if}
                                            {if isset($oPosition->cArticleNameAffix)}
                                                {if is_array($oPosition->cArticleNameAffix)}
                                                    <ul class="list-unstyled gap-1 fs-xs mb-0">
                                                        {foreach $oPosition->cArticleNameAffix as $cArticleNameAffix}
                                                            <li>{$cArticleNameAffix|transByISO}</li>
                                                        {/foreach}
                                                    </ul>
                                                {else}
                                                    <ul class="list-unstyled gap-1 fs-xs mb-0">
                                                        <li>{$oPosition->cArticleNameAffix|transByISO}</li>
                                                    </ul>
                                                {/if}
                                            {/if}
                                            {if !empty($oPosition->cHinweis)}
                                                <small class="text-info notice">{$oPosition->cHinweis}</small>
                                            {/if}
                                        {/if}
                                    </div>
                                </div>
                            </td>
                        {/if}
                    {/block}
                    
                    {block name='basket-cart-items-price-single'}
                        {if $Einstellungen.kaufabwicklung.bestellvorgang_einzelpreise_anzeigen === 'Y'}
                            <td class="h6 py-3 d-none d-xl-table-cell">
                                {if $oPosition->nPosTyp === $smarty.const.C_WARENKORBPOS_TYP_ARTIKEL
                                && (!$oPosition->istKonfigVater() || !isset($oPosition->oKonfig_arr) || $oPosition->oKonfig_arr|count === 0)}
                                    {$oPosition->cEinzelpreisLocalized[$NettoPreise][$smarty.session.cWaehrungName]}
                                    {if $oPosition->Artikel->UVPLocalized && $oPosition->Artikel->UVPLocalized != $oPosition->cEinzelpreisLocalized[$NettoPreise][$smarty.session.cWaehrungName]}
                                        <del class="text-body-tertiary fs-xs fw-normal">{$oPosition->Artikel->UVPLocalized}</del>
                                    {/if}
                                {/if}
                            </td>
                        {/if}
                    {/block}
                    
                    {block name='basket-cart-items-quantity-outer'}
                        <td class="py-3 d-none d-md-table-cell">
                            {if $oPosition->nPosTyp === $smarty.const.C_WARENKORBPOS_TYP_ARTIKEL}
                                {if $oPosition->istKonfigVater()}
                                    <div>
                                        {lang key="quantity" section="checkout"}: {$oPosition->nAnzahl|replace_delim} {if !empty($oPosition->Artikel->cEinheit)}{$oPosition->Artikel->cEinheit}{/if}
                                        {link class="btn btn-outline-secondary configurepos btn-sm"
                                        href="{$ShopURL}/?a={$oPosition->kArtikel}&ek={$oPosition@index}"}
                                            <i class="fa fa-cogs icon-mr-2"></i>{lang key='configure'}
                                        {/link}
                                    </div>
                                {else}
                                    {if $oPosition->Artikel->fMindestbestellmenge}
                                        {assign var=mindestbestellmenge value=$oPosition->Artikel->fMindestbestellmenge}
                                    {else}
                                        {assign var=mindestbestellmenge value=0}
                                    {/if}
                                    <div class="count-input">
                                        <button type="button" class="btn btn-icon" data-decrement aria-label="Decrement quantity">
                                            <i class="ci-minus"></i>
                                        </button>
                                        <input type="number" class="form-control" value="{$oPosition->nAnzahl|replace_delim}" 
                                            min="{$mindestbestellmenge}"
                                            max="{$oPosition->Artikel->FunktionsAttribute[$smarty.const.FKT_ATTRIBUT_MAXBESTELLMENGE]|default:''}"
                                            required="{($oPosition->Artikel->fAbnahmeintervall > 0)}"
                                            step="{if $oPosition->Artikel->cTeilbar === 'Y' && $oPosition->Artikel->fAbnahmeintervall == 0}any{elseif $oPosition->Artikel->fAbnahmeintervall > 0}{$oPosition->Artikel->fAbnahmeintervall}{else}1{/if}"
                                            id="quantity[{$oPosition@index}]" name="anzahl[{$oPosition@index}]"
                                            aria-label="{lang key='quantity'}"
                                            data-decimals="{getDecimalLength quantity=$oPosition->Artikel->fAbnahmeintervall}"
                                            data-product-id="{if isset($oPosition->Artikel->kVariKindArtikel)}{$oPosition->Artikel->kVariKindArtikel}{else}{$oPosition->Artikel->kArtikel}{/if}"
                                            readonly
                                        >
                                        <button type="button" class="btn btn-icon" data-increment aria-label="Increment quantity">
                                            <i class="ci-plus"></i>
                                        </button>
                                    </div>
                                {/if}
                            {elseif $oPosition->nPosTyp === $smarty.const.C_WARENKORBPOS_TYP_GRATISGESCHENK}
                                {input name="anzahl[{$oPosition@index}]" type="hidden" value="1"}
                                1
                            {/if}
                        </td>
                    {/block}
                    
                    {block name='basket-cart-items-order-items-price-net'}
                        <td class="h6 py-3 d-none d-md-table-cell">
                            {if $oPosition->istKonfigVater()}
                                {$oPosition->cKonfigpreisLocalized[$NettoPreise][$smarty.session.cWaehrungName]}
                            {else}
                                {$oPosition->cGesamtpreisLocalized[$NettoPreise][$smarty.session.cWaehrungName]}
                            {/if}
                        </td>
                    {/block}
                    
                    <td class="text-end py-3 px-0">
                        <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="{lang key='delete'}" aria-label="{lang key='delete'}"></button>
                    </td>
                </tr>
            {/if}
        {/foreach}
                </tbody>
            </table>
        {/block}
    {/block}
{/block}
