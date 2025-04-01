{block name='productlist-item-details'}
    <dl class="row mb-0 fs-sm">
    {block name='productlist-item-details-product-number'}
        <dt class="col-sm-6 text-sm-end">{lang key='productNo'}:</dt>
        <dd class="col-sm-6">{$Artikel->cArtNr}</dd>
    {/block}
    {if count($Artikel->Variationen) > 0}
        {block name='productlist-item-details-variations'}
            <dt class="col-sm-6 text-sm-end">{lang key='variationsIn' section='productOverview'}:</dt>
            <dd class="col-sm-6">
                <ul class="list-unstyled mb-0">
                    {foreach $Artikel->Variationen as $variation}
                        <li>{$variation->cName}</li>
                        {if $variation@index === 3 && !$variation@last}
                            <li>&hellip;</li>
                            {break}
                        {/if}
                    {/foreach}
                </ul>
            </dd>
        {/block}
    {/if}
    {if !empty($Artikel->cBarcode)
    && ($Einstellungen.artikeldetails.gtin_display === 'lists'
    || $Einstellungen.artikeldetails.gtin_display === 'always')}
        {block name='productlist-item-details-gtin'}
            {dt class="col-sm-6 text-sm-end"}{lang key='ean'}:{/col}
            {dd class="col-sm-6"}{$Artikel->cBarcode}{/col}
        {/block}
    {/if}
    {if !empty($Artikel->cHAN)
    && ($Einstellungen.artikeldetails.han_display === 'lists'
    || $Einstellungen.artikeldetails.han_display === 'always')}
        {block name='productlist-item-details-han'}
            {dt class="col-sm-6 text-sm-end"}{lang key='han'}:{/col}
            {dd class="col-sm-6"}{$Artikel->cHAN}{/col}
        {/block}
    {/if}
    {if !empty($Artikel->cISBN)
    && ($Einstellungen.artikeldetails.isbn_display === 'L'
    || $Einstellungen.artikeldetails.isbn_display === 'DL')}
        {block name='productlist-item-details-isbn'}
            {dt class="col-sm-6 text-sm-end"}{lang key='isbn'}:{/col}
            {dd class="col-sm-6"}{$Artikel->cISBN}{/col}
        {/block}
    {/if}


    {if $Einstellungen.artikeluebersicht.artikeluebersicht_hersteller_anzeigen !== 'N' && !empty($Artikel->cHersteller)}
        {block name='productlist-item-details-manufacturer'}
            {dt class="col-sm-6 text-sm-end"}{lang key='manufacturer' section='productDetails'}:{/col}
            {col tag='dd' cols=6 itemprop='manufacturer' itemscope=true itemtype='https://schema.org/Organization'}
                {link href="{if !empty($Artikel->cHerstellerHomepage)}{$Artikel->cHerstellerHomepage}{else}{$Artikel->cHerstellerURL}{/if}"
                    class="text-decoration-none-util"
                    itemprop="url"
                    target="{if !empty($Artikel->cHerstellerHomepage)}_blank{else}_self{/if}"}
                    {if ($Einstellungen.artikeluebersicht.artikeluebersicht_hersteller_anzeigen === 'BT'
                        || $Einstellungen.artikeluebersicht.artikeluebersicht_hersteller_anzeigen === 'B')
                        && !empty($Artikel->cHerstellerBildKlein)
                    }
                        {image webp=true lazy=true fluid=true
                            src=$Artikel->cHerstellerBildURLKlein
                            srcset="{$Artikel->cHerstellerBildURLKlein} {$Artikel->manufacturerImageWidthSM}w,
                                    {$Artikel->cHerstellerBildURLNormal} {$Artikel->manufacturerImageWidthMD}w"
                            alt=$Artikel->cHersteller|escape:'html'
                            sizes="25px"
                            class="img-xs"}
                        <meta itemprop="image" content="{$ShopURL}/{$Artikel->cHerstellerBildKlein}">
                    {/if}
                    {if ($Einstellungen.artikeluebersicht.artikeluebersicht_hersteller_anzeigen === 'BT'
                    || $Einstellungen.artikeluebersicht.artikeluebersicht_hersteller_anzeigen === 'Y')
                    && !empty($Artikel->cHersteller)}
                        <span itemprop="name">{$Artikel->cHersteller}</span>
                    {/if}
                {/link}
            {/col}
        {/block}
    {/if}

    {if !empty($Artikel->cUNNummer) && !empty($Artikel->cGefahrnr)
    && ($Einstellungen.artikeldetails.adr_hazard_display === 'L'
    || $Einstellungen.artikeldetails.adr_hazard_display === 'DL')}
        {block name='productlist-item-details-hazard'}
            {dt class="col-sm-6 text-sm-end"}{lang key='adrHazardSign'}:{/col}
            {dd class="col-sm-6"}
                <table class="adr-table">
                    <tr>
                        <td>{$Artikel->cGefahrnr}</td>
                    </tr>
                    <tr>
                        <td>{$Artikel->cUNNummer}</td>
                    </tr>
                </table>
            {/col}
        {/block}
    {/if}
    {if $Einstellungen.artikeldetails.show_shelf_life_expiration_date === 'Y'
    && isset($Artikel->dMHD)
    && isset($Artikel->dMHD_de)}
        {block name='productlist-item-details-mhd'}
            {col tag='dt' cols=6 title="{lang key='productMHDTool'}"}{lang key='productMHD'}:{/col}
            {dd class="col-sm-6"}{$Artikel->dMHD_de}{/col}
        {/block}
    {/if}
    {if $Einstellungen.artikeluebersicht.artikeluebersicht_gewicht_anzeigen === 'Y' && isset($Artikel->cGewicht) && $Artikel->fGewicht > 0}
        {block name='productlist-item-details-shipping-weight'}
            {dt class="col-sm-6 text-sm-end"}{lang key='shippingWeight'}:{/col}
            {dd class="col-sm-6"}{$Artikel->cGewicht} {lang key='weightUnit'}{/col}
        {/block}
    {/if}
    {if $Einstellungen.artikeluebersicht.artikeluebersicht_artikelgewicht_anzeigen === 'Y' && isset($Artikel->cArtikelgewicht) && $Artikel->fArtikelgewicht > 0}
        {block name='productlist-item-details-product-weight'}
            {dt class="col-sm-6 text-sm-end"}{lang key='productWeight'}:{/col}
            {dd class="col-sm-6"}{$Artikel->cArtikelgewicht} {lang key='weightUnit'}{/col}
        {/block}
    {/if}
    {if $Einstellungen.artikeluebersicht.artikeluebersicht_artikelintervall_anzeigen === 'Y' && $Artikel->fAbnahmeintervall > 0}
        {block name='productlist-item-details-intervall'}
            {dt class="col-sm-6 text-sm-end"}{lang key='purchaseIntervall' section='productOverview'}:{/col}
            {dd class="col-sm-6"}{$Artikel->fAbnahmeintervall} {$Artikel->cEinheit}{/col}
        {/block}
    {/if}
    {if $Einstellungen.bewertung.bewertung_anzeigen === 'Y' && $Artikel->fDurchschnittsBewertung > 0}
        {block name='productlist-item-details-rating'}
            {dt class="col-sm-6 text-sm-end"}{lang key='ratingAverage'}:{/col}
            {dd class="col-sm-6"}
            {block name='productlist-item-details-include-rating'}
                {include file='productdetails/rating.tpl' stars=$Artikel->fDurchschnittsBewertung link=$Artikel->cURLFull}
            {/block}
            {/col}
        {/block}
    {/if}
    </dl>
{/block}
