{block name='boxes-box-last-seen'}
    {lang key='lastViewed' assign='boxtitle'}
    <div class="card mb-4" id="sidebox{$oBox->getID()}">
        {block name='boxes-box-last-seen-content'}
            {block name='boxes-box-last-seen-title'}
                <div class="card-header">
                    <h3 class="fs-base mb-0">
                        <i class="ci-eye text-primary me-2"></i>
                        {$boxtitle}
                    </h3>
                </div>
            {/block}
            
            {block name='boxes-box-last-seen-content-wrapper'}
                <div class="card-body">
                    {foreach $oBox->getProducts() as $product}
                        <div class="d-flex align-items-center mb-3">
                            {block name='boxes-box-last-seen-image-link'}
                                <a class="d-block flex-shrink-0" href="{$product->cURLFull}">
                                    {include file='snippets/image.tpl'
                                        item=$product
                                        srcSize='sm'
                                        sizes='60px'
                                        class='rounded'
                                        width='60'
                                    }
                                </a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title">
                                        <a href="{$product->cURLFull}">{$product->cKurzbezeichnung}</a>
                                    </h6>
                                    <div class="widget-product-meta">
                                        {include file='productdetails/price.tpl' Artikel=$product tplscope='box'}
                                    </div>
                                </div>
                            {/block}
                        </div>
                    {/foreach}
                </div>
            {/block}
        {/block}
    </div>
{/block}
