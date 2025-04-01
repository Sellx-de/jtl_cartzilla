{block name='snippets-comparelist-dropdown'}
    {block name='snippets-comparelist-dropdown-products'}
        <div class="widget-cart-item py-2 border-bottom">
            {if JTL\Session\Frontend::getCompareList()->oArtikel_arr|count > 0}
                {$baseURL = $ShopURL|cat:'/?'|cat:$smarty.const.QUERY_PARAM_COMPARELIST_PRODUCT|cat:'='}
                <div class="widget-cart-body">
                    {foreach JTL\Session\Frontend::getCompareList()->oArtikel_arr as $product}
                        {block name='snippets-comparelist-dropdown-products-body'}
                            <div class="d-flex align-items-center py-2">
                                {block name='snippets-comparelist-dropdown-products-image'}
                                    <a class="d-block flex-shrink-0" href="{$product->cURLFull}">
                                        <img src="{$product->image->cURLMini}" 
                                             width="64" 
                                             alt="{$product->cName}">
                                    </a>
                                {/block}
                                <div class="ps-2">
                                    {block name='snippets-comparelist-dropdown-products-title'}
                                        <h6 class="widget-product-title">
                                            <a href="{$product->cURLFull}">{$product->cName}</a>
                                        </h6>
                                    {/block}
                                </div>
                                <div class="ms-auto">
                                    {block name='snippets-comparelist-dropdown-products-remove'}
                                        <a href="{$baseURL}{$product->kArtikel}"
                                           class="btn btn-link btn-sm text-danger"
                                           title="{lang section="comparelist" key="removeFromCompareList"}"
                                           data-name="Vergleichsliste.remove"
                                           data-bs-toggle="product-actions"
                                           data-value="{ldelim}{'"a"'|escape:'html'}:{$product->kArtikel}{rdelim}">
                                            <i class="ci-close"></i>
                                        </a>
                                    {/block}
                                </div>
                            </div>
                        {/block}
                    {/foreach}
                </div>
            {/if}
        </div>
    {/block}
    {block name='snippets-comparelist-dropdown-hint'}
        <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
            {if JTL\Session\Frontend::getCompareList()->oArtikel_arr|count <= 1}
                {block name='snippets-comparelist-dropdown-more-than-one'}
                    <div class="fs-sm text-muted py-2">{lang key='productNumberHint' section='comparelist'}</div>
                {/block}
            {else}
                {block name='snippets-comparelist-dropdown-hint-to-compare'}
                    <a class="btn btn-primary btn-sm d-block w-100" 
                       id='nav-comparelist-goto'
                       href="{get_static_route id='vergleichsliste.php'}">
                        <i class="ci-arrow-right fs-xs me-1"></i>
                        {lang key='gotToCompare'}
                    </a>
                {/block}
            {/if}
        </div>
    {/block}
{/block}
