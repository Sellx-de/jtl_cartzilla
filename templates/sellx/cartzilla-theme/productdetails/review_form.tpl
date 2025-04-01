{block name='productdetails-review-form'}
    {block name='productdetails-review-form-include-header'}
        {include file='layout/header.tpl'}
    {/block}
    {block name='productdetails-review-form-include-extension'}
        {include file='snippets/extension.tpl'}
    {/block}

    {block name='productdetails-review-form-content'}
        <div class="container pb-5 mb-2 mb-md-4">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-4 p-xl-5">
                            {block name='productdetails-review-form-heading'}
                                <h2 class="h3 mb-4">{lang key='productRating' section='product rating'} - {$Artikel->cName}</h2>
                            {/block}
                            {block name='productdetails-review-form-form'}
                                {form action="{get_static_route id='bewertung.php'}#tab-votes" class="needs-validation" slide=true novalidate=true}
                                    {block name='productdetails-review-form-alerts'}
                                        {$alertList->displayAlertByKey('productNotBuyed')}
                                        {$alertList->displayAlertByKey('loginFirst')}
                                    {/block}
                                    {if $ratingAllowed}
                                        {block name='productdetails-review-form-form-main'}
                                            {block name='productdetails-review-form-form-info'}
                                                <div class="alert alert-info d-flex">
                                                    <i class="ci-announcement fs-lg me-2"></i>
                                                    <div>{lang key='shareYourRatingGuidelines' section='product rating'}</div>
                                                </div>
                                            {/block}
                                            <div class="row">
                                                <div class="col-md-4 mb-4">
                                                    {block name='productdetails-review-form-image-name'}
                                                        <div class="border rounded p-3 text-center">
                                                            {include file='snippets/image.tpl' item=$Artikel class='img-fluid'}
                                                            <h6 class="mt-2 mb-0 fs-sm">{$Artikel->cName}</h6>
                                                        </div>
                                                    {/block}
                                                </div>
                                                <div class="col-md-8">
                                {block name='productdetails-review-form-rating'}
                                    <div class="mb-3">
                                        <label class="form-label" for="stars">{lang key='productRating' section='product rating'}</label>
                                        <select name="nSterne" id="stars" class="form-select" required>
                                            {$ratings = [5,4,3,2,1]}
                                            {foreach $ratings as $rating}
                                                <option value="{$rating}"{if isset($oBewertung->nSterne) && (int)$oBewertung->nSterne === $rating} selected{/if}>
                                                    {$rating}
                                                    {if (int)$rating === 1}
                                                        {lang key='starSingular' section='product rating'}
                                                    {else}
                                                        {lang key='starPlural' section='product rating'}
                                                    {/if}
                                                </option>
                                            {/foreach}
                                        </select>
                                        <div class="invalid-feedback">
                                            {lang key='fillOut' section='global'}
                                        </div>
                                    </div>
                                {/block}
                                {block name='productdetails-review-form-inputs'}
                                    <div class="mb-3">
                                        <label class="form-label" for="headline">{lang key='headline' section='product rating'}</label>
                                        <input type="text" class="form-control" name="cTitel" value="{$oBewertung->cTitel|default:''}" id="headline" required>
                                        <div class="invalid-feedback">
                                            {lang key='fillOut' section='global'}
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label class="form-label" for="comment">{lang key='comment' section='product rating'}</label>
                                        <textarea class="form-control" name="cText" id="comment" rows="5" required>{$oBewertung->cText|default:""}</textarea>
                                        <div class="invalid-feedback">
                                            {lang key='fillOut' section='global'}
                                        </div>
                                    </div>
                                {/block}
                                {block name='productdetails-review-form-form-submit'}
                                    <input type="hidden" name="bfh" value="1">
                                    <input type="hidden" name="a" value="{$Artikel->kArtikel}">
                                    <button type="submit" class="btn btn-primary" name="bewerten" value="1">
                                        <i class="ci-check-circle me-1"></i>{lang key='submitRating' section='product rating'}
                                    </button>
                                {/block}
                                </div>
                                            </div>
                                        {/block}
                                    {/if}
                                {/form}
                            {/block}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/block}

    {block name='productdetails-review-form-include-footer'}
        {include file='layout/footer.tpl'}
    {/block}
{/block}
