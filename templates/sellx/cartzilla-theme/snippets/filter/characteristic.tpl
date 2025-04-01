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
                        {link href="{if !empty($attributeValue->getURL())}{$attributeValue->getURL()}{else}#{/if}"
                            title="{if $showFilterCount}{$attributeValue->getValue()|escape:'html'}: {$attributeValue->getCount()}{else}{$attributeValue->getValue()|escape:'html'}{/if}"
                            data=["toggle"=>"tooltip","bs-toggle"=>"tooltip", "placement"=>"top", "boundary"=>"window"]
                            class="{if $attributeValue->isActive()}active{/if} filter-item"
                            rel="nofollow"
                        }
                            {image lazy=true  webp=true
                                src=$attributeImageURL
                                alt=$attributeValue->getValue()|escape:'html'
                                class="vmiddle filter-img"
                            }
                            <span class="d-none filter-item-value">
                                {$attributeValue->getValue()|escape:'html'}
                            </span>
                        {/link}
                    {/block}
                {else}
                    {block name='snippets-filter-characteristics-nav-else'}
                        {link href="{if !empty($attributeValue->getURL())}{$attributeValue->getURL()}{else}#{/if}"
                            title="{if $showFilterCount}{$attributeValue->getValue()|escape:'html'}: {$attributeValue->getCount()}{else}{$attributeValue->getValue()|escape:'html'}{/if}"
                            class="{if $attributeValue->isActive()}active{/if} filter-item"
                            rel="nofollow"
                        }
                            <div class="box-link-wrapper">
                                {if !empty($attributeImageURL)}
                                    {image lazy=true webp=true
                                        src=$attributeImageURL
                                        alt=$attributeValue->getValue()|escape:'html'
                                        class="vmiddle filter-img"
                                    }
                                {/if}
                                <span class="word-break filter-item-value">
                                    {$attributeValue->getValue()|escape:'html'}
                                </span>
                                {if $showFilterCount}
                                    {badge variant="outline-secondary"}{$attributeValue->getCount()}{/badge}
                                {/if}
                            </div>
                        {/link}
                    {/block}
                {/if}
            {/block}
        {/if}
    {/foreach}
    {if !$is_dropdown && $limit != -1 && $Merkmal->getOptions()|count > $limit}
        {block name='snippets-filter-characteristics-more-bottom'}
                </div>
            </div>
            <div class="snippets-filter-show-all">
                {button variant="link"
                    data=["toggle"=> "collapse","bs-toggle"=> "collapse", "target"=>"#box-collps-filter-attribute-{$Merkmal->getValue()}","bs-target"=>"#box-collps-filter-attribute-{$Merkmal->getValue()}"]}
                    {lang key='showAll'}
                {/button}
            </div>
        {/block}
    {/if}
    {if $Merkmal->getData('cTyp') === 'BILD'}
        </div>
    {/if}
    </div>
{/block}
