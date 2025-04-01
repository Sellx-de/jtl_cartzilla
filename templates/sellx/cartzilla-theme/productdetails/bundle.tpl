{block name='productdetails-bundle'}
    {if !empty($Products)}
        {block name='productdetails-bundle-form'}
            {form action="{if !empty($ProductMain->cURLFull)}{$ProductMain->cURLFull}{else}{$ShopURL}/{/if}" method="post" id="form_bundles" class="bundle-form jtl-validate"}
            {block name='productdetails-bundle-hidden-inputs'}
                {input type="hidden" name="a" value=$ProductMain->kArtikel}
                {input type="hidden" name="addproductbundle" value="1"}
                {input type="hidden" name="aBundle" value=$ProductKey}
            {/block}
            {block name='productdetails-bundle-include-product-slider'}
                {include file='snippets/product_slider.tpl' id='slider-partslist' productlist=$ProductMain->oStueckliste_arr title="{lang key='buyProductBundle' section='productDetails'}" showPartsList=true}
            {/block}
            {if JTL\Session\Frontend::getCustomerGroup()->mayViewPrices()}
                {block name='productdetails-bundle-form-price'}
                    <div class="d-flex flex-wrap justify-content-between align-items-center border-top pt-3 mt-3">
                        <div class="bundle-price mb-3">
                            <div class="h5 mb-0">
                                {lang key='priceForAll' section='productDetails'}:
                                <span class="text-accent">{$ProduktBundle->cPriceLocalized[$NettoPreise]}</span>
                            </div>
                            {if $ProduktBundle->fPriceDiff > 0}
                                <div class="fs-sm text-success">
                                    <i class="ci-check-circle me-1"></i>{lang key='youSave' section='productDetails'}: {$ProduktBundle->cPriceDiffLocalized[$NettoPreise]}
                                </div>
                            {/if}
                            {if $ProductMain->cLocalizedVPE}
                                <div class="fs-sm text-muted mt-1">
                                    {lang key='basePrice'}: {$ProductMain->cLocalizedVPE[$NettoPreise]}
                                </div>
                            {/if}
                        </div>
                        <div class="mb-3">
                            {block name='productdetails-bundle-form-submit'}
                                <button type="submit" class="btn btn-primary" name="inWarenkorb" value="1">
                                    <i class="ci-cart fs-lg me-2"></i>{lang key='addAllToCart'}
                                </button>
                            {/block}
                        </div>
                    </div>
                {/block}
            {/if}
            {/form}
        {/block}
    {/if}
{/block}
