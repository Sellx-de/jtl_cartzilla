{block name='productdetails-stock'}
    {assign var=anzeige value=$Einstellungen.artikeldetails.artikel_lagerbestandsanzeige}
    <div class="delivery-status mb-4">
    {block name='productdetails-stock-stock-info'}
        <div class="d-flex flex-wrap">
            {if !isset($shippingTime)}
                {block name='productdetails-stock-shipping-time'}
                    <div class="me-3 mb-2">
                        {block name='productdetails-stock-availability'}
                            {if $Artikel->inWarenkorbLegbar === $smarty.const.INWKNICHTLEGBAR_UNVERKAEUFLICH}
                                <div class="fs-sm text-danger">
                                    <i class="ci-security-close me-1"></i>{lang key='productUnsaleable' section='productDetails'}
                                </div>
                            {elseif !$Artikel->nErscheinendesProdukt}
                                {block name='productdetails-stock-include-stock-status'}
                                    {include file='snippets/stock_status.tpl' currentProduct=$Artikel}
                                {/block}
                            {else}
                                {if $anzeige === 'verfuegbarkeit' || $anzeige === 'genau' && $Artikel->fLagerbestand > 0}
                                    <div class="fs-sm text-{if $Artikel->Lageranzeige->nStatus == 1}success{elseif $Artikel->Lageranzeige->nStatus == 2}warning{else}danger{/if}">
                                        <i class="ci-{if $Artikel->Lageranzeige->nStatus == 1}security-check{elseif $Artikel->Lageranzeige->nStatus == 2}time{else}security-close{/if} me-1"></i>{$Artikel->Lageranzeige->cLagerhinweis[$anzeige]}
                                    </div>
                                {elseif $anzeige === 'ampel' && $Artikel->fLagerbestand > 0}
                                    <div class="fs-sm text-{if $Artikel->Lageranzeige->nStatus == 1}success{elseif $Artikel->Lageranzeige->nStatus == 2}warning{else}danger{/if}">
                                        <i class="ci-{if $Artikel->Lageranzeige->nStatus == 1}security-check{elseif $Artikel->Lageranzeige->nStatus == 2}time{else}security-close{/if} me-1"></i>{$Artikel->Lageranzeige->AmpelText}
                                    </div>
                                {/if}
                            {/if}
                        {/block}
                        {* rich snippet availability *}
                        {block name='productdetails-stock-rich-availability'}
                            {if $Artikel->cLagerBeachten === 'N' || $Artikel->fLagerbestand > 0 || $Artikel->cLagerKleinerNull === 'Y'}
                                <link itemprop="availability" href="https://schema.org/InStock" />
                            {elseif $Artikel->nErscheinendesProdukt && $Artikel->Erscheinungsdatum_de !== '00.00.0000' && $Einstellungen.global.global_erscheinende_kaeuflich === 'Y'}
                                <link itemprop="availability" href="https://schema.org/PreOrder" />
                            {elseif $Artikel->cLagerBeachten === 'Y' && $Artikel->cLagerKleinerNull === 'N' && $Artikel->fLagerbestand <= 0}
                                <link itemprop="availability" href="https://schema.org/OutOfStock" />
                            {/if}
                        {/block}
                        {if isset($Artikel->cLieferstatus) && ($Einstellungen.artikeldetails.artikeldetails_lieferstatus_anzeigen === 'Y' ||
                        ($Einstellungen.artikeldetails.artikeldetails_lieferstatus_anzeigen === 'L' && $Artikel->fLagerbestand == 0 && $Artikel->cLagerBeachten === 'Y') ||
                        ($Einstellungen.artikeldetails.artikeldetails_lieferstatus_anzeigen === 'A' && ($Artikel->fLagerbestand > 0 || $Artikel->cLagerKleinerNull === 'Y' || $Artikel->cLagerBeachten !== 'Y')))}
                            {block name='productdetails-stock-delivery-status'}
                                <div class="fs-sm text-muted">
                                    {lang key='deliveryStatus'}: {$Artikel->cLieferstatus}
                                </div>
                            {/block}
                        {/if}
                    </div>
                {/block}
            {/if}
            {if !isset($availability)}
            {block name='productdetails-stock-estimated-delivery'}
                {if $Artikel->cEstimatedDelivery}
                    {getCountry iso=$shippingCountry assign='selectedCountry'}
                    <div class="me-3 mb-2">
                        <div class="fs-sm">
                            {if !isset($shippingTime)}<span class="text-muted">{lang key='shippingTime'}:</span>{/if}
                            <span class="text-{if $Artikel->Lageranzeige->nStatus == 1}success{elseif $Artikel->Lageranzeige->nStatus == 2}warning{else}danger{/if}">
                                {$Artikel->cEstimatedDelivery}
                                <a class="ms-1 text-decoration-none"
                                   tabindex="0" role="button"
                                    {if isset($oSpezialseiten_arr[$smarty.const.LINKTYP_VERSAND])}
                                        data-bs-toggle="popover"
                                        data-bs-trigger="focus"
                                        data-bs-placement="top"
                                        data-bs-content="{if $selectedCountry !== null}{lang key='shippingInformation' section='productDetails' assign=silv}{sprintf($silv, $selectedCountry->getName(), $oSpezialseiten_arr[$smarty.const.LINKTYP_VERSAND]->getURL(), $oSpezialseiten_arr[$smarty.const.LINKTYP_VERSAND]->getURL())}{/if}"
                                    {/if}>
                                    <i class="ci-info-circle"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                {/if}
            {/block}
            {/if}
        </div>
    {/block}
    </div>
{/block}
