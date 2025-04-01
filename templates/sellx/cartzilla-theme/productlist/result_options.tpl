{block name='productlist-result-options'}
    {assign var=show_filters value=(count($NaviFilter->getAvailableContentFilters()) > 0
    && ($Einstellungen.artikeluebersicht.suchfilter_anzeigen_ab == 0
        || $NaviFilter->getSearchResults()->getProductCount() >= $Einstellungen.artikeluebersicht.suchfilter_anzeigen_ab))
    || $NaviFilter->getFilterCount() > 0}
    <div id="result-options">
        {row}
        {block name='productlist-result-options-filter-link'}
            {col cols=12 md=4 class="filter-collapsible-control order-1 order-md-0 d-flex"}
                {if $show_filters}
                    {block name='productlist-result-options-filter-link-filter'}
                        <button id="js-filters" type="button" 
                            class="btn btn-outline-primary btn-sm text-nowrap me-2"
                            data-bs-toggle="{if !empty($filterPlacement)}{$filterPlacement}{else}modal{/if}" 
                            data-bs-target="#collapseFilter"
                            aria-expanded="false"
                            aria-controls="collapseFilter">
                            <i class="ci-filter{if $NaviFilter->getFilterCount() > 0} text-primary{/if} me-1"></i>
                            {if $filterPlacement === 'collapse'}{lang key='filterAndSort'}{else}{lang key='filter'}{/if}
                        </button>
                    {/block}
                {/if}
                {if !empty($filterPlacement) && !$filterPlacement === "collapse"}
                    {block name='productlist-result-options-filter-include-layout-options'}
                        {include file='productlist/layout_options.tpl'}
                    {/block}
                {/if}
            {/col}
        {/block}
        {/row}

        {block name='productlist-result-options-filter-collapsible'}
            {if $show_filters}
                {if !empty($filterPlacement) && $filterPlacement === 'collapse'}
                    {collapse id="collapseFilter"
                        class="productlist-filter js-collapse-filter"
                        aria=["expanded" => "false"]}
                    {/collapse}
                {else}
                    <div class="modal fade" id="collapseFilter" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{lang key='filterAndSort'}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body js-collapse-filter">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">{lang key='close'}</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">{lang key='applyFilter'}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                {/if}
            {/if}
        {/block}
    </div>
{/block}
