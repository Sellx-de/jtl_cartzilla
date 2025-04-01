{block name='account-my-account'}
    {block name='heading'}
        <div class="d-flex align-items-center justify-content-between mb-4 pb-2 border-bottom">
            <h5 class="mb-0">{lang key='welcome' section='login'}, {$Kunde->cVorname}!</h5>
            {if $Kunde->cGuthaben > 0}
                <div class="fs-sm">
                    <span class="badge bg-success rounded-pill">{lang key='yourMoneyOnAccount' section='login'}: {$Kunde->cGuthabenLocalized}</span>
                </div>
            {/if}
        </div>
    {/block}
    {opcMountPoint id='opc_before_account_page'}
    {block name='account-my-account-head-data'}
        <p class="mb-4 pb-2">{lang key='myAccountDesc' section='login'}</p>
    {/block}
    
    {block name='account-my-account-account-data'}
        <div class="row g-4">
            <!-- Personal Data -->
            <div class="col-md-6">
                {block name='account-my-account-billing-address'}
                    <div class="card border-0 shadow">
                        <div class="card-header bg-secondary py-3">
                            {block name='account-my-account-billing-address-header'}
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">
                                        <i class="ci-user text-primary me-2"></i>{lang key='myPersonalData'}
                                    </h5>
                                    <a href="{$cCanonicalURL}?editRechnungsadresse=1" class="btn btn-sm btn-primary">
                                        <i class="ci-edit me-1"></i>{lang key='edit'}
                                    </a>
                                </div>
                            {/block}
                        </div>
                        {block name='account-my-account-billing-address-body'}
                            <div class="card-body">
                                <div class="fs-sm">
                                    <p class="mb-2">
                                        <strong>{lang key='billingAdress' section='account data'}</strong><br>
                                        {$Kunde->cStrasse} {$Kunde->cHausnummer}<br>
                                        {$Kunde->cPLZ} {$Kunde->cOrt}<br>
                                        {$Kunde->cLand}
                                    </p>
                                    <p class="mb-2">
                                        <strong>{lang key='email' section='account data'}</strong><br>
                                        {$Kunde->cMail}
                                    </p>
                                    <p class="mb-0">
                                        <strong>{lang key='password' section='account data'}</strong><br>
                                        <a href="{get_static_route id='jtl.php' params=['pass' => 1]}" class="btn btn-sm btn-outline-primary mt-1">
                                            <i class="ci-key me-1"></i>{lang key='changePassword' section='login'}
                                        </a>
                                    </p>
                                    {if $twoFAEnabled === true}
                                        <p class="mb-0 mt-2">
                                            <strong>{lang key='twoFactorAuthentication' section='account data'}</strong><br>
                                            <a href="{get_static_route id='jtl.php' params=['twofa' => 1]}" class="btn btn-sm btn-outline-primary mt-1">
                                                <i class="ci-security-check me-1"></i>{lang key='manageTwoFA' section='account data'}
                                            </a>
                                        </p>
                                    {/if}
                                </div>
                            </div>
                        {/block}
                    </div>
                {/block}
            </div>
            
            <!-- Shipping Addresses -->
            <div class="col-md-6">
                {block name='account-my-account-shipping-address-shipping-address'}
                    <div class="card border-0 shadow h-100">
                        <div class="card-header bg-secondary py-3">
                            {block name='account-my-account-shipping-address-header'}
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">
                                        <i class="ci-delivery text-primary me-2"></i>{lang key='myShippingAddresses'}
                                    </h5>
                                    <a href="{$cCanonicalURL}?editLieferadresse=1" class="btn btn-sm btn-primary">
                                        <i class="ci-edit me-1"></i>{lang key='edit'}
                                    </a>
                                </div>
                            {/block}
                        </div>
                        {block name='account-my-account-shipping-address-body'}
                            <div class="card-body">
                                {if count($Lieferadressen) > 0}
                                    {block name='account-my-account-shipping-addresses'}
                                        <div class="fs-sm">
                                            {foreach $Lieferadressen as $lieferadresse}
                                                <div class="d-flex justify-content-between align-items-start mb-3 pb-3 {if !$lieferadresse@last}border-bottom{/if}">
                                                    <div>
                                                        {if $lieferadresse->cFirma}
                                                            <strong>{$lieferadresse->cFirma}</strong><br>
                                                        {/if}
                                                        {$lieferadresse->cVorname} {$lieferadresse->cNachname}<br>
                                                        {$lieferadresse->cStrasse} {$lieferadresse->cHausnummer}<br>
                                                        {$lieferadresse->cPLZ} {$lieferadresse->cOrt}<br>
                                                        {$lieferadresse->cLand}
                                                    </div>
                                                    {if $lieferadresse->nIstStandardLieferadresse > 0}
                                                        <span class="badge bg-info">{lang key='standard'}</span>
                                                    {/if}
                                                </div>
                                            {/foreach}
                                        </div>
                                    {/block}
                                {else}
                                    {block name='account-my-account-shipping-address-no-data'}
                                        <p>{lang key='youHaveNoShippingAddress' section='rma'}</p>
                                        <a class="btn btn-sm btn-outline-primary" href="{$cCanonicalURL}?editLieferadresse=1">
                                            <i class="ci-add me-1"></i>{lang key='createNewShippingAdress' section='account data'}
                                        </a>
                                    {/block}
                                {/if}
                            </div>
                        {/block}
                    </div>
                {/block}
            </div>
            
            <!-- Orders -->
            <div class="col-md-6">
                {block name='account-my-account-orders-content'}
                    <div class="card border-0 shadow h-100">
                        <div class="card-header bg-secondary py-3">
                            {block name='account-my-account-orders-content-header'}
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">
                                        <i class="ci-bag text-primary me-2"></i>{lang key='myOrders'}
                                    </h5>
                                    <a href="{$cCanonicalURL}?bestellungen=1" class="btn btn-sm btn-primary">
                                        <i class="ci-arrow-right me-1"></i>{lang key='showAll'}
                                    </a>
                                </div>
                            {/block}
                        </div>
                        <div class="card-body">
                            {if count($Bestellungen) > 0}
                                {block name='account-my-account-orders-body'}
                                    <div class="fs-sm">
                                        {foreach $Bestellungen as $order}
                                            <div class="d-flex justify-content-between align-items-start mb-3 pb-3 {if !$order@last}border-bottom{/if}">
                                                <div>
                                                    <span class="fw-medium">{lang key='order'} #{$order->cBestellNr}</span><br>
                                                    <span class="text-muted">{$order->dBestelldatum|date_format:"%d.%m.%Y"}</span><br>
                                                    <span class="badge {if $order->cStatus|intval == 5}bg-success{elseif $order->cStatus|intval == 3}bg-info{elseif $order->cStatus|intval == 4}bg-warning{else}bg-secondary{/if} mt-1">
                                                        {$order->Status}
                                                    </span>
                                                </div>
                                                <a href="{$cCanonicalURL}?bestellung={$order->kBestellung}" class="btn btn-sm btn-outline-primary">
                                                    <i class="ci-eye me-1"></i>{lang key='showOrder'}
                                                </a>
                                            </div>
                                        {/foreach}
                                    </div>
                                {/block}
                            {else}
                                {block name='account-my-account-orders-content-nodata'}
                                    <p>{lang key='noOrdersYet' section='account data'}</p>
                                {/block}
                            {/if}
                        </div>
                    </div>
                {/block}
            </div>
            
            <!-- Wishlist -->
            {if $Einstellungen.global.global_wunschliste_anzeigen === 'Y'}
                <div class="col-md-6">
                    {block name='account-my-account-wishlist-content'}
                        <div class="card border-0 shadow h-100">
                            <div class="card-header bg-secondary py-3">
                                {block name='account-my-account-wishlist-header'}
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">
                                            <i class="ci-heart text-primary me-2"></i>{lang key='myWishlists'}
                                        </h5>
                                        <a href="{get_static_route id='wunschliste.php'}" class="btn btn-sm btn-primary">
                                            <i class="ci-arrow-right me-1"></i>{lang key='showAll'}
                                        </a>
                                    </div>
                                {/block}
                            </div>
                            <div class="card-body">
                                {if count($oWunschliste_arr) > 0}
                                    {block name='account-my-account-wishlists'}
                                        <div class="fs-sm">
                                            {get_static_route id='wunschliste.php' assign='wlSlug'}
                                            {foreach $oWunschliste_arr as $wishlist}
                                                <div class="d-flex justify-content-between align-items-start mb-3 pb-3 {if !$wishlist@last}border-bottom{/if}">
                                                    <div>
                                                        <a href="{$wlSlug}?wl={$wishlist->getID()}" class="fw-medium">{$wishlist->getName()}</a><br>
                                                        <span class="text-muted">{$wishlist->getProductCount()} {lang key='products'}</span><br>
                                                        <span class="badge {if $wishlist->isPublic()}bg-success{else}bg-secondary{/if} mt-1">
                                                            {if $wishlist->isPublic()}{lang key='public'}{else}{lang key='private'}{/if}
                                                        </span>
                                                    </div>
                                                    <a href="{$wlSlug}?wl={$wishlist->getID()}" class="btn btn-sm btn-outline-primary">
                                                        <i class="ci-eye me-1"></i>{lang key='show'}
                                                    </a>
                                                </div>
                                            {/foreach}
                                        </div>
                                    {/block}
                                {else}
                                    {block name='account-my-account-wishlist-no-data'}
                                        <p>{lang key='noWishlist' section='account data'}</p>
                                    {/block}
                                {/if}
                            </div>
                        </div>
                    {/block}
                </div>
            {/if}
            
            <!-- Returns -->
            {if $Einstellungen.global.global_rma_enabled === 'Y'}
                <div class="col-md-6">
                    {block name='account-my-account-rma'}
                        <div class="card border-0 shadow h-100">
                            <div class="card-header bg-secondary py-3">
                                {block name='account-my-account-rma-header'}
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">
                                            <i class="ci-return text-primary me-2"></i>{lang key='myReturns' section='rma'}
                                        </h5>
                                        <div>
                                            <a href="{$cCanonicalURL}?newRMA=0" class="btn btn-sm btn-success me-2">
                                                <i class="ci-add me-1"></i>{lang key='createRetoure' section='rma'}
                                            </a>
                                            {if count($rmas) > 0}
                                                <a href="{$cCanonicalURL}?returns=1" class="btn btn-sm btn-primary">
                                                    <i class="ci-arrow-right me-1"></i>{lang key='showAll'}
                                                </a>
                                            {/if}
                                        </div>
                                    </div>
                                {/block}
                            </div>
                            <div class="card-body">
                                {if count($rmas) > 0}
                                    {block name='account-my-account-rma-body'}
                                        <div class="fs-sm">
                                            {foreach $rmas as $rma}
                                                <div class="d-flex justify-content-between align-items-start mb-3 pb-3 {if !$rma@last}border-bottom{/if}">
                                                    <div>
                                                        <span class="fw-medium">{$rma->createDate|date_format:"%d.%m.%Y"}</span><br>
                                                        <span class="text-muted">{lang key='product'}: {$rma->getRMAItems()|count|default:0}</span><br>
                                                        <span class="badge bg-{$rmaService->getStatus($rma)->class} mt-1">{$rmaService->getStatus($rma)->text}</span>
                                                    </div>
                                                    <a href="{$cCanonicalURL}?showRMA={$rma->id}" class="btn btn-sm btn-outline-primary">
                                                        <i class="ci-eye me-1"></i>{lang key='show'}
                                                    </a>
                                                </div>
                                            {/foreach}
                                        </div>
                                    {/block}
                                {else}
                                    {block name='account-my-account-rma-no-data'}
                                        <p>{lang key='rmaNoItems' section='rma'}</p>
                                        <a class="btn btn-sm btn-outline-primary" href="{$cCanonicalURL}?newRMA=0">
                                            <i class="ci-add me-1"></i>{lang key='createRetoure' section='rma'}
                                        </a>
                                    {/block}
                                {/if}
                            </div>
                        </div>
                    {/block}
                </div>
            {/if}
            
            <!-- Compare List -->
            {if $Einstellungen.vergleichsliste.vergleichsliste_anzeigen === 'Y'}
                <div class="col-md-6">
                    {block name='account-my-account-comparelist'}
                        <div class="card border-0 shadow h-100">
                            <div class="card-header bg-secondary py-3">
                                {block name='account-my-account-comparelist-header'}
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">
                                            <i class="ci-scale text-primary me-2"></i>{lang key='myCompareList'}
                                        </h5>
                                        <a href="{get_static_route id='vergleichsliste.php'}" class="btn btn-sm btn-primary">
                                            <i class="ci-arrow-right me-1"></i>{lang key='showAll'}
                                        </a>
                                    </div>
                                {/block}
                            </div>
                            <div class="card-body">
                                {block name='account-my-account-comparelist-body'}
                                    <p>
                                        {if count($compareList->oArtikel_arr) > 0}
                                            {lang key='compareListItemCount' section='account data' printf=count($compareList->oArtikel_arr)}
                                        {else}
                                            {lang key='compareListNoItems'}
                                        {/if}
                                    </p>
                                    <a class="btn btn-sm btn-outline-primary" href="{get_static_route id='vergleichsliste.php'}">
                                        <i class="ci-arrow-right me-1"></i>{lang key='goToCompareList' section='comparelist'}
                                    </a>
                                {/block}
                            </div>
                        </div>
                    {/block}
                </div>
            {/if}
        </div>
    {/block}
    
    {opcMountPoint id='opc_after_account_page'}

    {block name='account-my-account-include-downloads'}
        {include file='account/downloads.tpl'}
    {/block}

    {block name='account-my-account-actions'}
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 pt-4 border-top">
            <a href="{get_static_route id='jtl.php' params=['del' => 1]}" class="btn btn-outline-danger mb-3 mb-sm-0">
                <i class="ci-trash me-2"></i>{lang key='deleteAccount' section='login'}
            </a>
            <a href="{get_static_route id='jtl.php'}?logout=1" class="btn btn-primary">
                <i class="ci-sign-out me-2"></i>{lang key='logOut'}
            </a>
        </div>
    {/block}
{/block}