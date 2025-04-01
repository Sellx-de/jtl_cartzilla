{block name='snippets-filter-search'}
    {$limit = $Einstellungen.template.productlist.filter_max_options}
    {$collapseInit = false}
    {foreach $NaviFilter->searchFilterCompat->getOptions() as $searchFilter}
        {if $limit != -1 && $searchFilter@iteration > $limit && !$collapseInit}
            {block name='snippets-filter-search-more-top'}
                <div class="collapse {if $NaviFilter->searchFilterCompat->isActive()} show{/if}" id="box-collps-filter{$NaviFilter->searchFilterCompat->getNiceName()}" aria-expanded="false" role="button">
                    <div class="list-group list-group-flush">
                {$collapseInit = true}
            {/block}
        {/if}
        {block name='snippets-filter-search-navitem'}
            <a rel="nofollow"
               href="{$searchFilter->getURL()}"
               class="list-group-item list-group-item-action d-flex justify-content-between align-items-center filter-item {if $searchFilter->isActive()}active{/if}">
                <div class="d-flex align-items-center">
                    {if $searchFilter->isActive()}
                        <i class="ci-check-circle text-primary me-2"></i>
                    {else}
                        <i class="ci-circle me-2"></i>
                    {/if}
                    <span>{$searchFilter->getName()}</span>
                </div>
                <span class="badge rounded-pill bg-secondary">{$searchFilter->getCount()}</span>
            </a>
        {/block}
    {/foreach}
    {if $limit != -1 && $NaviFilter->searchFilterCompat->getOptions()|count > $limit}
        {block name='snippets-filter-search-more-bottom'}
                </div>
            </div>
            <div class="text-center mt-3">
                <button type="button" class="btn btn-sm btn-outline-primary"
                    data-bs-toggle="collapse" 
                    data-bs-target="#box-collps-filter{$NaviFilter->searchFilterCompat->getNiceName()}">
                    <i class="ci-arrow-down me-2"></i>{lang key='showAll'}
                </button>
            </div>
        {/block}
    {/if}
{/block}
