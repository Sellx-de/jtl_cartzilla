{block name='basket-cart-offcanvas-content'}
    {$cartPositions = JTL\Session\Frontend::getCart()->PositionenArr}
    {block name='basket-cart-offcanvas-max-cart-positions'}
        {$maxCartPositions = 15}
    {/block}
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" tabindex="-1" id="offCanvasCart" aria-labelledby="offCanvasCartLabel" style="width: 500px">
        <!-- Header -->
        <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
            <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
                <h4 class="offcanvas-title" id="offCanvasCartLabel">
                    {lang section='global' key='basket'}
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            {if $cartPositions|count > 0 && !empty($WarenkorbVersandkostenfreiHinweis)}
                <p class="fs-sm">{$WarenkorbVersandkostenfreiHinweis|truncate:160:"..."}</p>
                <div class="progress w-100" role="progressbar" aria-label="Free shipping progress" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                    <div class="progress-bar bg-dark rounded-pill d-none-dark" style="width: 78%"></div>
                    <div class="progress-bar bg-light rounded-pill d-none d-block-dark" style="width: 78%"></div>
                </div>
            {/if}
        </div>

        <!-- Items -->
        <div class="offcanvas-body d-flex flex-column gap-4 pt-2">
            {if $cartPositions|count <= 0}
                {block name='basket-cart-offcanvas-hint-empty'}
                    {link class="cart-dropdown-empty"
                    href="{{get_static_route id='warenkorb.php'}}"
                    rel="nofollow"
                    title="{lang section='checkout' key='emptybasket'}"}
                        {lang section='checkout' key='emptybasket'}
                    {/link}
                {/block}
            {else}
                {block name='basket-cart-offcanvas-cart-items-content'}
                    {block name='basket-cart-offcanvas-cart-items'}
                        {foreach $cartPositions as $oPosition}
                            {if $oPosition@iteration > $maxCartPositions}
                                {break}
                            {/if}
                            {if !$oPosition->istKonfigKind()}
                                {if $oPosition->nPosTyp == $smarty.const.C_WARENKORBPOS_TYP_ARTIKEL
                                || $oPosition->nPosTyp == $smarty.const.C_WARENKORBPOS_TYP_GRATISGESCHENK}
                                    <!-- Item -->
                                    <div class="d-flex align-items-center">
                                        <a class="flex-shrink-0" href="{$oPosition->Artikel->cURLFull}" title="{$oPosition->cName|transByISO|escape:'html'}">
                                            {include file='snippets/image.tpl'
                                            fluid=false
                                            item=$oPosition->Artikel
                                            square=false
                                            srcSize='xs'
                                            class='bg-body-tertiary rounded'
                                            width='110'
                                            alt="{$oPosition->cName|transByISO|escape:'html'}"}
                                        </a>
                                        <div class="w-100 min-w-0 ps-3">
                                            <h5 class="d-flex animate-underline mb-2">
                                                <a class="d-block fs-sm fw-medium text-truncate animate-target" href="{$oPosition->Artikel->cURLFull}">
                                                    {$oPosition->cName|transByISO}
                                                </a>
                                            </h5>
                                            <div class="h6 pb-1 mb-2">
                                                {if $oPosition->istKonfigVater()}
                                                    {$oPosition->cKonfigpreisLocalized[$NettoPreise][$smarty.session.cWaehrungName]}
                                                {else}
                                                    {$oPosition->cEinzelpreisLocalized[$NettoPreise][$smarty.session.cWaehrungName]}
                                                {/if}
                                                {if $oPosition->Artikel->UVPLocalized && $oPosition->Artikel->UVPLocalized != $oPosition->cEinzelpreisLocalized[$NettoPreise][$smarty.session.cWaehrungName]}
                                                    <del class="text-body-tertiary fs-xs fw-normal">{$oPosition->Artikel->UVPLocalized}</del>
                                                {/if}
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="count-input rounded-2">
                                                    <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
                                                        <i class="ci-minus"></i>
                                                    </button>
                                                    <input type="number" class="form-control form-control-sm" value="{$oPosition->nAnzahl|replace_delim}" readonly>
                                                    <button type="button" class="btn btn-icon btn-sm" data-increment aria-label="Increment quantity">
                                                        <i class="ci-plus"></i>
                                                    </button>
                                                </div>
                                                <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="{lang key='delete'}" aria-label="{lang key='delete'}"></button>
                                            </div>
                                        </div>
                                    </div>
                                {else}
                                    <!-- Non-Article Item -->
                                    <div class="d-flex align-items-center">
                                        <div class="w-100 min-w-0">
                                            <h5 class="d-flex animate-underline mb-2">
                                                <span class="d-block fs-sm fw-medium">
                                                    {$oPosition->cName|transByISO|escape:'htmlall'}
                                                </span>
                                            </h5>
                                            <div class="h6 pb-1 mb-2">
                                                {$oPosition->cEinzelpreisLocalized[$NettoPreise][$smarty.session.cWaehrungName]}
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="count-input rounded-2">
                                                    <span class="form-control form-control-sm">{$oPosition->nAnzahl|replace_delim}x</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {/if}
                            {/if}
                        {/foreach}
                        
                        {block name='basket-cart-offcanvas-items-item-overflow-notice'}
                            {if $cartPositions|count > $maxCartPositions}
                                <div class="text-center mt-2">
                                    <p class="fs-sm">
                                        {lang key='itemOverflowNotice' section='basket' printf=((int)($cartPositions|count)-$maxCartPositions)|cat:':::'|cat:{get_static_route id='warenkorb.php'}}
                                    </p>
                                </div>
                            {/if}
                        {/block}
                    {/block}
                {/block}
            {/if}
        </div>
        
        {if $cartPositions|count > 0}
            <!-- Footer -->
            <div class="offcanvas-header flex-column align-items-start">
                <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-md-4">
                    <span class="text-light-emphasis">
                        {if empty($smarty.session.Versandart)}
                            {lang key='subtotal' section='account data'}:
                        {else}
                            {lang key='totalSum'}:
                        {/if}
                    </span>
                    <span class="h6 mb-0">{$WarensummeLocalized[0]}</span>
                </div>
                
                <div class="d-flex w-100 gap-3">
                    <a class="btn btn-lg btn-secondary w-100" href="{get_static_route id='warenkorb.php'}" title="{lang key='gotoBasket'}">
                        {lang key='gotoBasket'}
                    </a>
                    
                    <a class="btn btn-lg btn-primary w-100" href="{get_static_route id='bestellvorgang.php'}?wk=1">
                        {lang key='nextStepCheckout' section='checkout'}
                    </a>
                </div>
                
                {block name='basket-cart-offcanvas-shipping-include-free-hint'}
                    {include file='basket/freegift_hint.tpl'}
                {/block}
            </div>
        {/if}
    </div>
    {inline_script}
    <script>
        ( () => {
            // Hide the header top bar when the offCanvas cart is shown
            const offCanvasCart = document.getElementById('offCanvasCart');
            const headerTopBar  = document.getElementById('header-top-bar');
            if (headerTopBar == null) {
                return;
            }
            offCanvasCart.addEventListener('show.bs.offcanvas', event => {
                headerTopBar.style.visibility = 'hidden';
            });
            offCanvasCart.addEventListener('hidden.bs.offcanvas', event => {
                headerTopBar.style.removeProperty('visibility');
            });
        } )();
    </script>
    {/inline_script}
{/block}
