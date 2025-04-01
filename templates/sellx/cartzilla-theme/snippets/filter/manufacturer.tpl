{block name='snippets-filter-manufacturer'}
    {$limit = $Einstellungen.template.productlist.filter_max_options}
    {$collapseInit = false}
    <div class="filter-search-wrapper mb-3">
    {block name='snippets-filter-manufacturer-include-search-in-items'}
        {include file='snippets/filter/search_in_items.tpl' itemCount=count($filter->getOptions()) name=$filter->getFrontendName()}
    {/block}
    {if $Einstellungen.navigationsfilter.hersteller_anzeigen_als === 'B'}
        <div class="d-flex flex-wrap gap-2 mt-2">
    {/if}
    {foreach $filter->getOptions() as $filterOption}
        {assign var=filterIsActive value=$filterOption->isActive() || $NaviFilter->getFilterValue($filter->getClassName()) === $filterOption->getValue()}
        {if $limit != -1 && $filterOption@iteration > $limit && !$collapseInit}
            {block name='snippets-filter-manufacturer-more-top'}
                <div class="collapse {if $filter->isActive()} show{/if}" id="box-collps-filter{$filter->getNiceName()}" aria-expanded="false" role="button">
                    <div class="{if $Einstellungen.navigationsfilter.hersteller_anzeigen_als === 'B'}d-flex flex-wrap gap-2{else}list-group list-group-flush{/if}">
                {$collapseInit = true}
            {/block}
        {/if}
        {block name='snippets-filter-manufacturer-item'}
            {if $Einstellungen.navigationsfilter.hersteller_anzeigen_als == 'B'}
                {$tooltip = ["toggle"=>"tooltip","bs-toggle"=>"tooltip", "placement"=>"top", "boundary"=>"window"]}
            {else}
                {$tooltip = []}
            {/if}
            <a href="{if !empty($filterOption->getURL())}{$filterOption->getURL()}{else}#{/if}"
               title="{$filterOption->getName()|escape:'html'}: {$filterOption->getCount()}"
               {if $Einstellungen.navigationsfilter.hersteller_anzeigen_als == 'B'}
               data-bs-toggle="tooltip"
               data-bs-placement="top"
               data-bs-boundary="window"
               {/if}
               class="{if $Einstellungen.navigationsfilter.hersteller_anzeigen_als == 'B'}position-relative{else}list-group-item list-group-item-action d-flex justify-content-between align-items-center{/if} filter-item {if $filterOption->isActive()}active{/if}"
               rel="nofollow">
                {if $Einstellungen.navigationsfilter.hersteller_anzeigen_als == 'B'}
                    {block name='snippets-filter-manufacturer-item-image'}
                        <div class="filter-option {if $filterOption->isActive()}border-primary{/if}">
                            <img src="{$filterOption->getData('cBildpfadKlein')}"
                                 alt="{$filterOption->getName()|escape:'html'}"
                                 class="filter-img"
                                 loading="lazy">
                            {if $filterOption->isActive()}
                                <div class="position-absolute top-0 end-0 mt-1 me-1">
                                    <span class="badge rounded-pill bg-primary"><i class="ci-check"></i></span>
                                </div>
                            {/if}
                        </div>
                        <span class="d-none filter-item-value">{$filterOption->getName()}</span>
                    {/block}
                {elseif $Einstellungen.navigationsfilter.hersteller_anzeigen_als === 'BT'}
                    {block name='snippets-filter-manufacturer-item-image-text'}
                        <div class="d-flex align-items-center">
                            {if $filterOption->isActive()}
                                <i class="ci-check-circle text-primary me-2"></i>
                            {else}
                                <i class="ci-circle me-2"></i>
                            {/if}
                            <img src="{$filterOption->getData('cBildpfadKlein')}" 
                                 alt="{$filterOption->getName()|escape:'html'}" 
                                 class="me-2" 
                                 width="20" height="20"
                                 loading="lazy">
                            <span class="filter-item-value">{$filterOption->getName()}</span>
                        </div>
                        <span class="badge rounded-pill bg-secondary">{$filterOption->getCount()}</span>
                    {/block}
                {elseif $Einstellungen.navigationsfilter.hersteller_anzeigen_als === 'T'}
                    {block name='snippets-filter-manufacturer-item-text'}
                        <div class="d-flex align-items-center">
                            {if $filterIsActive === true}
                                <i class="ci-check-circle text-primary me-2"></i>
                            {else}
                                <i class="ci-circle me-2"></i>
                            {/if}
                            <span class="filter-item-value">{$filterOption->getName()}</span>
                        </div>
                        <span class="badge rounded-pill bg-secondary">{$filterOption->getCount()}</span>
                    {/block}
                {/if}
            </a>
        {/block}
    {/foreach}
    {if $limit != -1 && $filter->getOptions()|count > $limit}
        {block name='snippets-filter-manufacturer-more-bottom'}
                </div>
            </div>
            <div class="text-center mt-3">
                <button type="button" class="btn btn-sm btn-outline-primary"
                    data-bs-toggle="collapse" 
                    data-bs-target="#box-collps-filter{$filter->getNiceName()}">
                    <i class="ci-arrow-down me-2"></i>{lang key='showAll'}
                </button>
            </div>
        {/block}
    {/if}
    {if $Einstellungen.navigationsfilter.hersteller_anzeigen_als === 'B'}
        </div>
    {/if}
    </div>
{/block}