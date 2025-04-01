{block name='snippets-filter-active-filter'}
{if $NaviFilter->getFilterCount() > 0}
    {block name='snippets-filter-active-filter-content'}
        <div class="active-filters d-flex flex-wrap gap-2 mb-4">
            {foreach $NaviFilter->getActiveFilters() as $activeFilter}
                {assign var=activeFilterValue value=$activeFilter->getValue()}
                {assign var=activeValues value=$activeFilter->getActiveValues()}
                {if $activeFilterValue !== null}
                    {if is_array($activeValues)}
                        {foreach $activeValues as $filterOption}
                            {block name='snippets-filter-active-filter-values'}
                                <a href="{$activeFilter->getUnsetFilterURL($filterOption->getValue())}"
                                   rel="nofollow"
                                   title="{lang key='deleteFilter'}"
                                   class="btn-close-label bg-secondary filter-type-{$activeFilter->getNiceName()} snippets-filter-item js-filter-item">
                                    {if $Einstellungen.navigationsfilter.merkmal_label_anzeigen === 'Y'
                                    && $activeFilter->getNiceName() === 'Characteristic'}
                                        {$activeFilter->getFilterName()}:
                                    {/if}
                                    {$filterOption->getFrontendName()}
                                    <i class="ci-close ms-2"></i>
                                </a>
                            {/block}
                        {/foreach}
                    {else}
                        {block name='snippets-filter-active-filter-value'}
                            <a href="{$activeFilter->getUnsetFilterURL($activeFilter->getValue())}"
                               rel="nofollow"
                               title="{lang key='deleteFilter'}"
                               class="btn-close-label bg-secondary filter-type-{$activeFilter->getNiceName()} snippets-filter-item js-filter-item">
                                {if $Einstellungen.navigationsfilter.merkmal_label_anzeigen === 'Y'
                                && $activeFilter->getNiceName() === 'Characteristic'}
                                    {$activeFilter->getFilterName()}:
                                {/if}
                                {$activeValues->getFrontendName()}
                                <i class="ci-close ms-2"></i>
                            </a>
                        {/block}
                    {/if}
                {/if}
            {/foreach}
            {if $NaviFilter->getURL()->getUnsetAll() !== null}
                {block name='snippets-filter-active-filter-remove'}
                    <a href="{$NaviFilter->getURL()->getUnsetAll()}"
                       title="{lang key='removeFilters'}"
                       class="btn btn-outline-danger btn-sm snippets-filter-item-all js-filter-item">
                        <i class="ci-trash me-2"></i>{lang key='removeFilters'}
                    </a>
                {/block}
            {/if}
        </div>
    {/block}
{/if}
{/block}
