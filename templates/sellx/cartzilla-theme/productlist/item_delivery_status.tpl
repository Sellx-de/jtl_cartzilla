{block name='productlist-item-delivery-status'}
    <div class="delivery-status fs-sm">
        {$anzeige = $Einstellungen.artikeluebersicht.artikeluebersicht_lagerbestandsanzeige}
        {if $Artikel->inWarenkorbLegbar === $smarty.const.INWKNICHTLEGBAR_UNVERKAEUFLICH}
            <div class="text-danger">
                <i class="ci-security-close me-1"></i>{lang key='productUnsaleable' section='productDetails'}
            </div>
        {elseif $Artikel->nErscheinendesProdukt}
            <div class="text-info">
                <i class="ci-time me-1"></i>{lang key='productAvailableFrom'}: {$Artikel->Erscheinungsdatum_de}
            </div>
            {if $Einstellungen.global.global_erscheinende_kaeuflich === 'Y' && $Artikel->inWarenkorbLegbar === 1}
                <div class="text-success mt-1">
                    <i class="ci-security-check me-1"></i>{lang key='preorderPossible'}
                </div>
            {/if}
        {elseif $anzeige !== 'nichts'
        && $Einstellungen.artikeluebersicht.artikeluebersicht_lagerbestandanzeige_anzeigen !== 'N'
        && $Artikel->getBackorderString() !== ''
        && ($Artikel->cLagerKleinerNull === 'N'
        || $Einstellungen.artikeluebersicht.artikeluebersicht_lagerbestandanzeige_anzeigen === 'U')}
            <div class="text-success">
                <i class="ci-security-check me-1"></i>{$Artikel->getBackorderString()}
            </div>
        {elseif $anzeige !== 'nichts'
        && $Einstellungen.artikeluebersicht.artikeluebersicht_lagerbestandanzeige_anzeigen !== 'N'
        && $Artikel->cLagerBeachten === 'Y'
        && $Artikel->fLagerbestand <= 0
        && $Artikel->fLieferantenlagerbestand > 0
        && $Artikel->fLieferzeit > 0
        && ($Artikel->cLagerKleinerNull === 'N'
        || $Einstellungen.artikeluebersicht.artikeluebersicht_lagerbestandanzeige_anzeigen === 'U')}
            <div class="text-success">
                <i class="ci-security-check me-1"></i>{lang key='supplierStockNotice' printf=$Artikel->fLieferzeit}
            </div>
        {elseif $anzeige === 'verfuegbarkeit' || $anzeige === 'genau'}
            <div class="text-{if $Artikel->Lageranzeige->nStatus == 1}success{elseif $Artikel->Lageranzeige->nStatus == 2}warning{else}danger{/if}">
                <i class="ci-{if $Artikel->Lageranzeige->nStatus == 1}security-check{elseif $Artikel->Lageranzeige->nStatus == 2}time{else}security-close{/if} me-1"></i>{$Artikel->Lageranzeige->cLagerhinweis[$anzeige]}
            </div>
        {elseif $anzeige === 'ampel'}
            <div class="text-{if $Artikel->Lageranzeige->nStatus == 1}success{elseif $Artikel->Lageranzeige->nStatus == 2}warning{else}danger{/if}">
                <i class="ci-{if $Artikel->Lageranzeige->nStatus == 1}security-check{elseif $Artikel->Lageranzeige->nStatus == 2}time{else}security-close{/if} me-1"></i>{$Artikel->Lageranzeige->AmpelText}
            </div>
        {/if}
        {if $Artikel->cEstimatedDelivery}
            <div class="text-muted mt-1">
                <i class="ci-delivery me-1"></i>{lang key='shippingTime'}: {$Artikel->cEstimatedDelivery}
            </div>
        {/if}
    </div>
{/block}
