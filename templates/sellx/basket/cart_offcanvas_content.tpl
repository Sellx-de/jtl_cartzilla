{block name='basket-cart-offcanvas-content'}
    {$cartPositions = JTL\Session\Frontend::getCart()->PositionenArr}
    {block name='basket-cart-offcanvas-max-cart-positions'}
        {$maxCartPositions = 15}
    {/block}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offCanvasCart" aria-labelledby="offCanvasCartLabel">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offCanvasCartLabel">
                {lang section='global' key='basket'}
            </h2>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
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
                            <div class="table-responsive">
                                {block name='basket-cart-offcanvas-cart-items-table'}
                                    <table class="table dropdown-cart-items">
                                        <tbody>
                                        {block name='basket-cart-offcanvas-cart-item'}
                                            {foreach $cartPositions as $oPosition}
                                                {if $oPosition@iteration > $maxCartPositions}
                                                    {break}
                                                {/if}
                                                {if !$oPosition->istKonfigKind()}
                                                    {if $oPosition->nPosTyp == $smarty.const.C_WARENKORBPOS_TYP_ARTIKEL
                                                    || $oPosition->nPosTyp == $smarty.const.C_WARENKORBPOS_TYP_GRATISGESCHENK}
                                                        <tr>
                                                            <td>
                                                                {formrow}
                                                                {block name='basket-cart-offcanvas-cart-item-item-image'}
                                                                    {col class="col-auto"}
                                                                    {link href=$oPosition->Artikel->cURLFull title=$oPosition->cName|transByISO|escape:'html'}
                                                                        {include file='snippets/image.tpl'
                                                                        fluid=false
                                                                        item=$oPosition->Artikel
                                                                        square=false
                                                                        srcSize='xs'
                                                                        sizes='50px'
                                                                        class='img-sm img-aspect-ratio'}
                                                                    {/link}
                                                                    {/col}
                                                                {/block}
                                                                {block name='basket-cart-offcanvas-cart-item-item-link'}
                                                                    {col class="col-auto"}
                                                                    {$oPosition->nAnzahl|replace_delim}x
                                                                    {/col}
                                                                    {col}
                                                                    {link href=$oPosition->Artikel->cURLFull title=$oPosition->cName|transByISO|escape:'html'}
                                                                    {$oPosition->cName|transByISO}
                                                                    {/link}
                                                                    {/col}
                                                                {/block}
                                                                {/formrow}
                                                            </td>
                                                            {block name='basket-cart-offcanvas-cart-item-item-price'}
                                                                <td class="text-right-util text-nowrap-util">
                                                                    {if $oPosition->istKonfigVater()}
                                                                        {$oPosition->cKonfigpreisLocalized[$NettoPreise][$smarty.session.cWaehrungName]}
                                                                    {else}
                                                                        {$oPosition->cEinzelpreisLocalized[$NettoPreise][$smarty.session.cWaehrungName]}
                                                                    {/if}
                                                                </td>
                                                            {/block}
                                                        </tr>
                                                    {else}
                                                        <tr>
                                                            {block name='basket-cart-offcanvas-cart-item-no-item-count'}
                                                                <td>
                                                                    {formrow}
                                                                    {col class="col-auto"}{/col}
                                                                    {col class="col-auto"}
                                                                    {$oPosition->nAnzahl|replace_delim}x
                                                                    {/col}
                                                                    {col}
                                                                    {$oPosition->cName|transByISO|escape:'htmlall'}
                                                                    {/col}
                                                                    {/formrow}
                                                                </td>
                                                            {/block}
                                                            {block name='basket-cart-offcanvas-cart-item-noitem-price'}
                                                                <td class="text-right-util text-nowrap-util">
                                                                    {$oPosition->cEinzelpreisLocalized[$NettoPreise][$smarty.session.cWaehrungName]}
                                                                </td>
                                                            {/block}
                                                        </tr>
                                                    {/if}
                                                {/if}
                                            {/foreach}
                                        {/block}
                                        </tbody>
                                    </table>
                                {/block}
                                {block name='basket-cart-offcanvas-items-item-overflow-notice'}
                                    {if $cartPositions|count > $maxCartPositions}
                                        <hr>
                                        <div class="item-overflow-notice">
                                            {lang key='itemOverflowNotice' section='basket' printf=((int)($cartPositions|count)-$maxCartPositions)|cat:':::'|cat:{get_static_route id='warenkorb.php'}}
                                        </div>
                                        <hr>
                                    {/if}
                                {/block}
                            </div>
                        {/block}
                    {/block}
                {/if}
            </div>
        </div>
        {if $cartPositions|count > 0}
            <div class="offcanvas-footer">
                {block name='basket-cart-offcanvas-cart-items-body'}
                    <div class="dropdown-body">
                        {block name='basket-cart-offcanvas-total'}
                            <ul class="list-unstyled">
                                {if $NettoPreise}
                                    {block name='basket-cart-offcanvas-cart-item-net'}
                                        <li class="cart-dropdown-total-item">
                                            {if empty($smarty.session.Versandart)}
                                                {lang key='subtotal' section='account data'}
                                            {else}
                                                {lang key='totalSum'}
                                            {/if} ({lang key='net'}) <span class="cart-dropdown-total-item-price">{$WarensummeLocalized[$NettoPreise]}</span>
                                        </li>
                                    {/block}
                                {/if}
                                {if $Einstellungen.global.global_steuerpos_anzeigen !== 'N' && isset($Steuerpositionen) && $Steuerpositionen|count > 0}
                                    {block name='basket-cart-offcanvas-cart-item-tax'}
                                        {foreach $Steuerpositionen as $Steuerposition}
                                            <li class="cart-dropdown-total-item">
                                                {$Steuerposition->cName}
                                                <span class="cart-dropdown-total-item-price">{$Steuerposition->cPreisLocalized}</span>
                                            </li>
                                        {/foreach}
                                    {/block}
                                {/if}
                                {block name='basket-cart-offcanvas-cart-item-total'}
                                    <li class="font-weight-bold-util">
                                        {if empty($smarty.session.Versandart)}
                                            {lang key='subtotal' section='account data'}
                                        {else}
                                            {lang key='totalSum'}
                                        {/if}: <span class="cart-dropdown-total-item-price">{$WarensummeLocalized[0]}</span>
                                    </li>
                                {/block}
                                {block name='basket-cart-offcanvas-cart-item-favourable-shipping'}
                                    {if $favourableShippingString !== ''}
                                        <li class="cart-dropdown-total-item">{$favourableShippingString}</li>
                                    {/if}
                                {/block}
                            </ul>
                        {/block}
                        {block name='basket-cart-offcanvas-buttons'}
                            {row class="cart-dropdown-buttons gy-3"}
                            {col cols=12 lg=6}
                            {button variant="outline-primary" type="link" block=true  size="sm" href="{get_static_route id='bestellvorgang.php'}?wk=1" class="cart-dropdown-next"}
                            {lang key='nextStepCheckout' section='checkout'}
                            {/button}
                            {/col}
                            {col cols=12 lg=6}
                            {button variant="primary" type="link" block=true  size="sm" title="{lang key='gotoBasket'}" href="{get_static_route id='warenkorb.php'}"}
                            {lang key='gotoBasket'}
                            {/button}
                            {/col}
                            {/row}
                        {/block}
                        {if !empty($WarenkorbVersandkostenfreiHinweis)}
                            {block name='basket-cart-offcanvas-shipping-free-hint'}
                                <hr>
                                <div class="cart-dropdown-shipping-notice font-size-sm">
                                    <div class="font-weight-bold">
                                        {if !empty($oSpezialseiten_arr) && isset($oSpezialseiten_arr[$smarty.const.LINKTYP_VERSAND])}
                                            <a href="{$oSpezialseiten_arr[$smarty.const.LINKTYP_VERSAND]->getURL()}"
                                               title="{lang key='shippingInfo' section='login'}"><i class="fas fa-truck text-dark mr-1"></i>
                                            </a>
                                        {else}
                                            <i class="fas fa-truck text-dark mr-1"></i>
                                        {/if}
                                        <span>{lang key='shippingInfo' section='login'}</span>
                                    </div>
                                    {$WarenkorbVersandkostenfreiHinweis|truncate:160:"..."}
                                </div>
                            {/block}
                        {/if}
                        {block name='basket-cart-offcanvas-shipping-include-free-hint'}
                            {include file='basket/freegift_hint.tpl'}
                        {/block}
                    </div>
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
