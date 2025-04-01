{block name='snippets-filter-characteristic'}
    {$is_dropdown = ($Merkmal->cTyp === 'SELECTBOX')}
    {$limit = $Einstellungen.template.productlist.filter_max_options}
    {$collapseInit = false}
    {$showFilterCount = $Einstellungen.navigationsfilter.merkmalfilter_trefferanzahl_anzeigen !== 'N'
        && !($Einstellungen.navigationsfilter.merkmalfilter_trefferanzahl_anzeigen === 'E' && $Merkmal->getData('isMultiSelect'))}
    <div class="filter-search-wrapper mb-3">
    {block name='snippets-filter-characteristic-include-search-in-items'}
        {include file='snippets/filter/search_in_items.tpl' itemCount=count($Merkmal->getOptions()) name=$Merkmal->getName()}
    {/block}
    {if $Merkmal->getData('cTyp') === 'BILD'}
        <div class="d-flex flex-wrap gap-2 mt-2">
    {/if}
    {foreach $Merkmal->getOptions() as $attributeValue}
        {$attributeImageURL = null}
        {if ($Merkmal->getData('cTyp') === 'BILD' || $Merkmal->getData('cTyp') === 'BILD-TEXT')}
            {$attributeImageURL = $attributeValue->getImage(\JTL\Media\Image::SIZE_XS)}
            {if strpos($attributeImageURL, $smarty.const.BILD_KEIN_ARTIKELBILD_VORHANDEN) !== false
                || strpos($attributeImageURL, $smarty.const.BILD_KEIN_MERKMALWERTBILD_VORHANDEN) !== false}
                {$attributeImageURL = null}
            {/if}
        {/if}
        {if $is_dropdown}
            {block name='snippets-filter-characteristics-dropdown'}
                <a class="dropdown-item d-flex justify-content-between align-items-center {if $attributeValue->isActive()}active{/if} filter-item"
                   href="{if !empty($attributeValue->getURL())}{$attributeValue->getURL()}{else}#{/if}"
                   title="{if $Merkmal->getData('cTyp') === 'BILD'}{$attributeValue->getValue()|escape:'html'}{/if}">
                    <div class="d-flex align-items-center">
                        {if $attributeValue->isActive()}
                            <i class="ci-check-circle text-primary me-2"></i>
                        {else}
                            <i class="ci-circle me-2"></i>
                        {/if}
                        {if !empty($attributeImageURL)}
                            <img src="{$attributeImageURL}" 
                                 alt="{$attributeValue->getValue()|escape:'html'}" 
                                 class="me-2" 
                                 width="20" height="20">
                        {/if}
                        <span class="filter-item-value">{$attributeValue->getValue()|escape:'html'}</span>
                    </div>
                    {if $showFilterCount}
                        <span class="badge rounded-pill bg-secondary">{$attributeValue->getCount()}</span>
                    {/if}
                </a>
            {/block}
        {else}
            {if $limit != -1 && $attributeValue@iteration > $limit && !$collapseInit}
                {block name='snippets-filter-characteristics-more-top'}
                    <div class="collapse {if $Merkmal->isActive()} show{/if}" id="box-collps-filter-attribute-{$Merkmal->getValue()}" aria-expanded="false" role="button">
                        <div class="{if $Merkmal->getData('cTyp') === 'BILD'}d-flex flex-wrap gap-2{else}list-group list-group-flush{/if}">
                    {$collapseInit = true}
                {/block}
            {/if}
            {block name='snippets-filter-characteristics-nav'}
                {if {$Merkmal->getData('cTyp')} === 'TEXT'}
                    {block name='snippets-filter-characteristics-nav-text'}
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {if $attributeValue->isActive()}active{/if} filter-item"
                           href="{if !empty($attributeValue->getURL())}{$attributeValue->getURL()}{else}#{/if}"
                           title="{$attributeValue->getValue()|escape:'html'}"
                           rel="nofollow">
                            <div class="d-flex align-items-center">
                                {if $attributeValue->isActive()}
                                    <i class="ci-check-circle text-primary me-2"></i>
                                {else}
                                    <i class="ci-circle me-2"></i>
                                {/if}
                                {if !empty($attributeImageURL)}
                                    <img src="{$attributeImageURL}" 
                                         alt="{$attributeValue->getValue()|escape:'html'}" 
                                         class="me-2" 
                                         width="20" height="20">
                                {/if}
                                <span class="filter-item-value">{$attributeValue->getValue()|escape:'html'}</span>
                            </div>
                            {if $showFilterCount}
                                <span class="badge rounded-pill bg-secondary">{$attributeValue->getCount()}</span>
                            {/if}
                        </a>
                    {/block}
                {elseif $Merkmal->getData('cTyp') === 'BILD' && $attributeImageURL !== null}
                    {block name='snippets-filter-characteristics-nav-image'}
                        <a href="{if !empty($attributeValue->getURL())}{$attributeValue->getURL()}{else}#{/if}"
                           title="{if $showFilterCount}{$attributeValue->getValue()|escape:'html'}: {$attributeValue->getCount()}{else}{$attributeValue->getValue()|escape:'html'}{/if}"
                           data-bs-toggle="tooltip"
                           data-bs-placement="top"
                           data-bs-boundary="window"
                           class="position-relative {if $attributeValue->isActive()}active{/if} filter-item"
                           rel="nofollow">
                            <div class="filter-option {if $attributeValue->isActive()}border-primary{/if}">
                                <img src="{$attributeImageURL}"
                                     alt="{$attributeValue->getValue()|escape:'html'}"
                                     class="filter-img"
                                     loading="lazy">
                                {if $attributeValue->isActive()}
                                    <div class="position-absolute top-0 end-0 mt-1 me-1">
                                        <span class="badge rounded-pill bg-primary"><i class="ci-check"></i></span>
                                    </div>
                                {/if}
                            </div>
                            <span class="d-none filter-item-value">
                                {$attributeValue->getValue()|escape:'html'}
                            </span>
                        </a>
                    {/block}
                {else}
                    {block name='snippets-filter-characteristics-nav-else'}
                        <a href="{if !empty($attributeValue->getURL())}{$attributeValue->getURL()}{else}#{/if}"
                           title="{if $showFilterCount}{$attributeValue->getValue()|escape:'html'}: {$attributeValue->getCount()}{else}{$attributeValue->getValue()|escape:'html'}{/if}"
                           class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {if $attributeValue->isActive()}active{/if} filter-item"
                           rel="nofollow">
                            <div class="d-flex align-items-center">
                                {if $attributeValue->isActive()}
                                    <i class="ci-check-circle text-primary me-2"></i>
                                {else}
                                    <i class="ci-circle me-2"></i>
                                {/if}
                                {if !empty($attributeImageURL)}
                                    <img src="{$attributeImageURL}" 
                                         alt="{$attributeValue->getValue()|escape:'html'}" 
                                         class="me-2" 
                                         width="20" height="20"
                                         loading="lazy">
                                {/if}
                                <span class="filter-item-value">
                                    {$attributeValue->getValue()|escape:'html'}
                                </span>
                            </div>
                            {if $showFilterCount}
                                <span class="badge rounded-pill bg-secondary">{$attributeValue->getCount()}</span>
                            {/if}
                        </a>
                    {/block}
                {/if}
            {/block}
        {/if}
    {/foreach}
    {if !$is_dropdown && $limit != -1 && $Merkmal->getOptions()|count > $limit}
        {block name='snippets-filter-characteristics-more-bottom'}
                </div>
            </div>
            <div class="text-center mt-3">
                <button type="button" class="btn btn-sm btn-outline-primary"
                    data-bs-toggle="collapse" 
                    data-bs-target="#box-collps-filter-attribute-{$Merkmal->getValue()}">
                    <i class="ci-arrow-down me-2"></i>{lang key='showAll'}
                </button>
            </div>
        {/block}
    {/if}
    {if $Merkmal->getData('cTyp') === 'BILD'}
        </div>
    {/if}
    </div>
{/block}
