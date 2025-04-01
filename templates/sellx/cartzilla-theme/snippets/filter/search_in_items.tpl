{block name='snippets-filter-search-in-items'}
    {if (int)$Einstellungen.template.productlist.filter_search_count < $itemCount}
        <div class="position-relative">
            {block name='snippets-filter-search-in-items-input'}
                <input type="text" class="form-control form-control-sm filter-search pe-5" 
                       placeholder="{lang key='filterSearchPlaceholder' section='productOverview' printf=$name}">
            {/block}
            {block name='snippets-filter-search-in-items-icon'}
                <i class="ci-search position-absolute top-50 end-0 translate-middle-y me-3"></i>
            {/block}
            {block name='snippets-filter-search-in-items-clear'}
                <span class="form-clear position-absolute top-50 end-0 translate-middle-y me-3 d-none">
                    <i class="ci-close"></i>
                </span>
            {/block}
        </div>
    {/if}
{/block}
