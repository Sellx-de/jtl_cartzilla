{block name='productdetails-rating'}
    {if $stars > 0}
        {if isset($total) && $total > 1}
            {lang key='averageProductRating' section='product rating' assign='ratingLabelText'}
        {else}
            {lang key='productRating' section='product rating' assign='ratingLabelText'}
        {/if}
        {block name='productdetails-rating-main'}
        {if isset($link)}
            <a class="star-rating" href="{$link}#tab-votes" title="{$ratingLabelText}: {$stars}/5" aria-label={lang key='Votes'}>
        {else}
            <div class="star-rating" title="{$ratingLabelText}: {$stars}/5">
        {/if}
        {strip}
            {if $stars >= 5}
                <i class="ci-star-filled active"></i><i class="ci-star-filled active"></i><i class="ci-star-filled active"></i><i class="ci-star-filled active"></i><i class="ci-star-filled active"></i>
            {elseif $stars >= 4}
                <i class="ci-star-filled active"></i><i class="ci-star-filled active"></i><i class="ci-star-filled active"></i><i class="ci-star-filled active"></i>
                {if $stars > 4}
                    <i class="ci-star-half active"></i>
                {else}
                    <i class="ci-star"></i>
                {/if}
            {elseif $stars >= 3}
                <i class="ci-star-filled active"></i><i class="ci-star-filled active"></i><i class="ci-star-filled active"></i>
                {if $stars > 3}
                    <i class="ci-star-half active"></i><i class="ci-star"></i>
                {else}
                    <i class="ci-star"></i><i class="ci-star"></i>
                {/if}
            {elseif $stars >= 2}
                <i class="ci-star-filled active"></i><i class="ci-star-filled active"></i>
                {if $stars > 2}
                    <i class="ci-star-half active"></i><i class="ci-star"></i><i class="ci-star"></i>
                {else}
                    <i class="ci-star"></i><i class="ci-star"></i><i class="ci-star"></i>
                {/if}
            {elseif $stars >= 1}
                <i class="ci-star-filled active"></i>
                {if $stars > 1}
                    <i class="ci-star-half active"></i><i class="ci-star"></i><i class="ci-star"></i><i class="ci-star"></i>
                {else}
                    <i class="ci-star"></i><i class="ci-star"></i><i class="ci-star"></i><i class="ci-star"></i>
                {/if}
            {elseif $stars > 0}
                <i class="ci-star-half active"></i><i class="ci-star"></i><i class="ci-star"></i><i class="ci-star"></i><i class="ci-star"></i>
            {/if}
        {/strip}

        {if isset($link)}
            </a>
        {else}
            </div>
        {/if}
        {/block}
    {/if}
{/block}
