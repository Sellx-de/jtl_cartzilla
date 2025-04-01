{* nur anzeigen, wenn >1 Warenlager aktiv und Artikel ist auf Lager/im Zulauf/Ueberverkaeufe erlaubt/beachtet kein Lager *}
{block name='productdetails-warehouse'}
    {assign var=anzeige value=$Einstellungen.artikeldetails.artikel_lagerbestandsanzeige}
    {if $anzeige !== 'nichts'
        && isset($Artikel->oWarenlager_arr)
        && $Artikel->oWarenlager_arr|count > 1
        && ($Artikel->cLagerBeachten !== 'Y'
            || $Artikel->cLagerKleinerNull === 'Y'
            || $Artikel->fLagerbestand > 0
            || $Artikel->fZulauf > 0)}
        {block name='productdetails-warehouse-detail-link'}
            <div class="product-stock-info mb-3">
                <button type="button" class="btn btn-link text-accent p-0" data-bs-toggle="modal" data-bs-target="#warehouseAvailability">
                    <i class="ci-location me-2"></i>{lang key='warehouseAvailability'}
                </button>
            </div>
        {/block}
        {block name='productdetails-warehouse-modal'}
            {modal id="warehouseAvailability"
                title="{lang key='warehouseAvailability'}"
                centered=true
                size="lg"
                class="fade"}
                {block name='productdetails-warehouse-modal-content'}
                    {block name='productdetails-warehouse-modal-content-header'}
                        <div class="d-flex justify-content-between mb-3 border-bottom pb-3">
                            <div>
                                <strong>{lang key='warehouse'}</strong>
                            </div>
                            <div>
                                <strong>{lang key='status'}</strong>
                            </div>
                        </div>
                    {/block}
                    {block name='productdetails-warehouse-modal-content-items'}
                        {foreach $Artikel->oWarenlager_arr as $oWarenlager}
                            <div class="d-flex justify-content-between mb-3 {if !$oWarenlager@last}border-bottom pb-3{/if}">
                                <div>
                                    <strong>{$oWarenlager->getName()}</strong>
                                </div>
                                <div>
                                    {if $anzeige !== 'nichts'
                                    && $oWarenlager->getBackorderString($Artikel) !== ''
                                    && ($Artikel->cLagerKleinerNull === 'N'
                                       || $Einstellungen.artikeldetails.artikeldetails_lieferantenbestand_anzeigen === 'U')}
                                        <span class="text-success">{$oWarenlager->getBackorderString($Artikel)}</span>
                                    {elseif $Einstellungen.artikeldetails.artikeldetails_lieferantenbestand_anzeigen !== 'N'
                                        && $Artikel->cLagerBeachten === 'Y'
                                        && $Artikel->fLagerbestand <= 0
                                        && $Artikel->fLieferantenlagerbestand > 0
                                        && $Artikel->fLieferzeit > 0
                                        && ($Artikel->cLagerKleinerNull === 'N'
                                            && $Einstellungen.artikeldetails.artikeldetails_lieferantenbestand_anzeigen === 'I'
                                            || $Artikel->cLagerKleinerNull === 'Y'
                                            && $Einstellungen.artikeldetails.artikeldetails_lieferantenbestand_anzeigen === 'U')}
                                        <span class="text-success">{lang key='supplierStockNotice' printf=$Artikel->fLieferzeit}</span>
                                    {elseif $anzeige === 'verfuegbarkeit' || $anzeige === 'genau'}
                                        <span class="text-{if $oWarenlager->oLageranzeige->nStatus == 1}success{elseif $oWarenlager->oLageranzeige->nStatus == 2}warning{else}danger{/if}">
                                            <i class="ci-{if $oWarenlager->oLageranzeige->nStatus == 1}security-check{elseif $oWarenlager->oLageranzeige->nStatus == 2}time{else}security-close{/if} me-1"></i>
                                            {$oWarenlager->oLageranzeige->cLagerhinweis[$anzeige]}
                                        </span>
                                    {elseif $anzeige === 'ampel'}
                                        <span class="text-{if $oWarenlager->oLageranzeige->nStatus == 1}success{elseif $oWarenlager->oLageranzeige->nStatus == 2}warning{else}danger{/if}">
                                            <i class="ci-{if $oWarenlager->oLageranzeige->nStatus == 1}security-check{elseif $oWarenlager->oLageranzeige->nStatus == 2}time{else}security-close{/if} me-1"></i>
                                            {$oWarenlager->oLageranzeige->AmpelText}
                                        </span>
                                    {/if}
                                </div>
                            </div>
                        {/foreach}
                    {/block}
                {/block}
            {/modal}
        {/block}
    {/if}
{/block}
