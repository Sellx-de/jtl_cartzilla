{block name='boxes-box-wishlist'}
    {if $oBox->getItems()|count > 0}
        <div class="card mb-4" id="sidebox{$oBox->getID()}">
            {block name='boxes-box-wishlist-content'}
                {block name='boxes-box-wishlist-title'}
                    <div class="card-header">
                        <h3 class="fs-base mb-0">
                            <i class="ci-heart text-primary me-2"></i>
                            <a class="d-flex align-items-center justify-content-between fw-normal text-decoration-none" 
                               data-bs-toggle="collapse" 
                               href="#crd-cllps-{$oBox->getID()}" 
                               role="button" 
                               aria-expanded="true" 
                               aria-controls="crd-cllps-{$oBox->getID()}">
                                <span>{lang key='wishlist'}</span>
                                <i class="ci-arrow-down"></i>
                            </a>
                        </h3>
                    </div>
                {/block}
                
                {block name='boxes-box-wishlist-collapse'}
                    <div class="collapse show" id="crd-cllps-{$oBox->getID()}">
                        <div class="card-body pt-3">
                            {assign var=maxItems value=$oBox->getItemCount()}
                            <div class="widget">
                                {block name='boxes-box-wishlist-wishlist-items'}
                                {foreach $oBox->getItems() as $wishlistItem}
                                    {if $wishlistItem@iteration > $maxItems}{break}{/if}
                                    <div class="d-flex align-items-center py-2 border-bottom">
                                        {block name='boxes-box-wishlist-dropdown-products-image-title'}
                                            {if $oBox->getShowImages()}
                                                {block name='boxes-box-wishlist-dropdown-products-image'}
                                                    <a class="d-block flex-shrink-0" href="{$wishlistItem->getProduct()->cURLFull}" title="{$wishlistItem->getProductName()|escape:'quotes'}">
                                                        {include file='snippets/image.tpl'
                                                            item=$wishlistItem->getProduct()
                                                            square=false
                                                            srcSize='xs'
                                                            sizes='60px'
                                                            class='rounded'
                                                            width='60'
                                                        }
                                                    </a>
                                                {/block}
                                            {/if}
                                            <div class="ps-2">
                                                {block name='boxes-box-wishlist-dropdown-products-title'}
                                                    <h6 class="widget-product-title">
                                                        <a href="{$wishlistItem->getProduct()->cURLFull}" title="{$wishlistItem->getProductName()|escape:'quotes'}">
                                                            {$wishlistItem->getQty()|replace_delim} &times; {$wishlistItem->getProductName()|truncate:40:'...'}
                                                        </a>
                                                    </h6>
                                                {/block}
                                                <div class="d-flex align-items-center">
                                                    {block name='snippets-wishlist-dropdown-products-remove'}
                                                        <a href="{$wishlistItem->getURL()}" 
                                                           class="text-danger fs-sm" 
                                                           title="{lang section='login' key='wishlistremoveItem'}" 
                                                           data-name="Wunschliste.remove" 
                                                           data-toggle="product-actions" 
                                                           data-bs-toggle="product-actions"
                                                           data-value="{json_encode(['a'=>$wishlistItem->getID()])|escape:'html'}"
                                                           aria-label="{lang section='login' key='wishlistremoveItem'}">
                                                            <i class="ci-trash"></i> {lang key='delete'}
                                                        </a>
                                                    {/block}
                                                </div>
                                            </div>
                                        {/block}
                                    </div>
                                {/foreach}
                                {/block}
                                
                                {block name='boxes-box-wishlist-actions'}
                                    <div class="pt-3">
                                        <a class="btn btn-outline-primary btn-sm d-block w-100" href="{get_static_route id='wunschliste.php'}?wl={$oBox->getWishListID()}" title="{lang key='goToWishlist'}">
                                            <i class="ci-heart me-2"></i> {lang key='goToWishlist'}
                                        </a>
                                    </div>
                                {/block}
                            </div>
                        </div>
                    </div>
                {/block}
            {/block}
        </div>
    {else}
        {block name='boxes-box-wishlist-no-items'}
            <section class="d-none" id="sidebox{$oBox->getID()}"></section>
        {/block}
    {/if}
{/block}