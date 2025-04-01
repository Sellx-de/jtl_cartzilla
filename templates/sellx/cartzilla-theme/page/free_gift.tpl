{block name='page-free-gift'}
    {opcMountPoint id='opc_before_free_gift' inContainer=false}
    
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item">
                            <a class="text-nowrap" href="{$ShopURL}">
                                <i class="ci-home"></i>{lang key='home'}
                            </a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">
                            {lang key='freeGifts'}
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">{lang key='freeGifts'}</h1>
            </div>
        </div>
    </div>
    
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="card border-0 shadow-lg mb-4">
            <div class="card-body p-4 p-xl-5">
                <div class="alert alert-info d-flex">
                    <i class="ci-gift fs-lg me-2"></i>
                    <div>{lang key='freeGiftFromOrderValue'}</div>
                </div>
                
                {if !empty($freeGifts)}
                    {opcMountPoint id='opc_before_free_gift_list'}
                    <div class="row mt-4">
                        {block name='page-freegift-freegifts'}
                            {foreach $freeGifts as $freeGiftProduct}
                                {$basketValue = $freeGiftProduct->availableFrom - $freeGiftProduct->getStillMissingAmount()}
                                {$isFreeGiftAvailableNow = $basketValue >= $freeGiftProduct->availableFrom}
                                <div class="col-sm-6 col-md-4 mb-4">
                                    <div class="card h-100 border-0 shadow">
                                        {block name='page-freegift-freegift-image'}
                                            <a href="{$freeGiftProduct->getProduct()->cURLFull|cat:'?isfreegift=1'}" class="card-img-top">
                                                {include file='snippets/image.tpl'
                                                    item=$freeGiftProduct->getProduct()
                                                    square=false
                                                    srcSize='sm'
                                                    sizes='(min-width: 1300px) 25vw, (min-width: 992px) 34vw, 50vw'
                                                    class='card-img-top'
                                                }
                                            </a>
                                        {/block}
                                        <div class="card-body text-center">
                                            {block name='page-freegift-freegift-link'}
                                                <h3 class="h6 mb-2">
                                                    <a href="{$freeGiftProduct->getProduct()->cURLFull|cat:'?isfreegift=1'}" class="stretched-link">
                                                        {$freeGiftProduct->getProduct()->cName}
                                                    </a>
                                                </h3>
                                                {block name='page-freegift-freegift-info'}
                                                    <div class="text-muted fs-sm">
                                                        {lang key='freeGiftFrom1'}
                                                        <span class="fw-medium">{$freeGiftProduct->getProduct()->cBestellwert}</span>
                                                        {lang key='freeGiftFrom2'}
                                                    </div>
                                                {/block}
                                            {/block}
                                        </div>
                                        <div class="card-footer border-0 pt-0 text-center">
                                            <div class="badge bg-{if $isFreeGiftAvailableNow}success{else}warning{/if} mb-3">
                                                {if $isFreeGiftAvailableNow}
                                                    <i class="ci-check-circle me-1"></i>{lang key='freeGiftAvailable'}
                                                {else}
                                                    <i class="ci-time me-1"></i>{lang key='stillMissing'}: {$freeGiftProduct->getStillMissingAmount()|currency}
                                                {/if}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/foreach}
                        {/block}
                    </div>
                {/if}
            </div>
        </div>
    </div>
{/block}
