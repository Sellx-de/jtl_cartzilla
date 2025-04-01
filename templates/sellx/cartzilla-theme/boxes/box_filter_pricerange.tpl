{block name='boxes-box-filter-pricerange'}
    {if !empty($oBox->getItems()->getOptions())
        && $nSeitenTyp === $smarty.const.PAGE_ARTIKELLISTE
        && !($isMobile || $Einstellungen.template.productlist.filter_placement === 'modal')}
        {block name='boxes-box-filter-pricerange-content'}
            <div id="sidebox{$oBox->getID()}" class="card mb-4 d-none d-lg-block js-price-range-box">
                <div class="card-header">
                    <h3 class="fs-base mb-0">
                        <i class="ci-money text-primary me-2"></i>
                        <a class="d-flex align-items-center justify-content-between fw-normal text-decoration-none" 
                           data-bs-toggle="collapse" 
                           href="#cllps-box{$oBox->getID()}" 
                           role="button" 
                           aria-expanded="true" 
                           aria-controls="cllps-box{$oBox->getID()}">
                            <span>{lang key='rangeOfPrices'}</span>
                            <i class="ci-arrow-down"></i>
                        </a>
                    </h3>
                </div>
                <div class="collapse show" id="cllps-box{$oBox->getID()}">
                    <div class="card-body pt-3">
                        {block name='boxes-box-filter-pricerange-include-price-slider'}
                            {include file='snippets/filter/price_slider.tpl' id='price-slider-box'}
                        {/block}
                    </div>
                </div>
            </div>
        {/block}
    {/if}
{/block}
