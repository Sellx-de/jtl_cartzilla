{assign var='isOnCompareList' value=false}
{foreach JTL\Session\Frontend::getCompareList()->oArtikel_arr as $product}
    {if $product->kArtikel === $Artikel->kArtikel}
        {$isOnCompareList=true}
        {break}
    {/if}
{/foreach}
{block name='snippets-comparelist-button-main'}
    <button type="button" 
            class="btn-compare btn-sm {$classes|default:''} {if $isOnCompareList}active{/if}" 
            data-product-id-cl="{$Artikel->kArtikel}"
            data-bs-toggle="tooltip"
            data-bs-placement="left"
            title="{lang key='addToCompare' section='productOverview'}"
            aria-label="{lang key='addToCompare' section='productOverview'}">
        <i class="ci-compare"></i>
    </button>
{/block}
