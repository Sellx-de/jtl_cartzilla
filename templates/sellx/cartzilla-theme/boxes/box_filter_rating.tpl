{block name='boxes-box-filter-rating'}
    {if $nSeitenTyp === $smarty.const.PAGE_ARTIKELLISTE
        && !($isMobile || $Einstellungen.template.productlist.filter_placement === 'modal')}
        <div id="sidebox{$oBox->getID()}" class="card mb-4 d-none d-lg-block">
            <div class="card-header">
                <h3 class="fs-base mb-0">
                    <i class="ci-star text-primary me-2"></i>
                    <a class="d-flex align-items-center justify-content-between fw-normal text-decoration-none" 
                       data-bs-toggle="collapse" 
                       href="#cllps-box{$oBox->getID()}" 
                       role="button" 
                       aria-expanded="{if $oBox->getItems()->isActive() || $Einstellungen.template.productlist.filter_items_always_visible === 'Y'}true{else}false{/if}" 
                       aria-controls="cllps-box{$oBox->getID()}">
                        <span>{lang key='Votes'}</span>
                        <i class="ci-arrow-down"></i>
                    </a>
                </h3>
            </div>
            <div class="collapse {if $oBox->getItems()->isActive() || $Einstellungen.template.productlist.filter_items_always_visible === 'Y'}show{/if}" id="cllps-box{$oBox->getID()}">
                <div class="card-body pt-3">
                    {block name='boxes-box-filter-rating-content'}
                        {include file='snippets/filter/genericFilterItem.tpl' filter=$oBox->getItems()}
                    {/block}
                </div>
            </div>
        </div>
    {/if}
{/block}
