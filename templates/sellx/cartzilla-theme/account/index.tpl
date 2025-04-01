{block name='account-index'}
    {block name='include-header'}
        {include file='layout/header.tpl'}
    {/block}

    {block name='account-index-content'}
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
                            <li class="breadcrumb-item text-nowrap">
                                <span>{lang key='myAccount'}</span>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                    <h1 class="h3 text-light mb-0">
                        {if $step === 'login'}
                            {lang key='login'}
                        {elseif $step === 'mein Konto'}
                            {lang key='myAccount'}
                        {elseif $step === 'rechnungsdaten'}
                            {lang key='billingAddress'}
                        {elseif $step === 'lieferadressen'}
                            {lang key='shippingAddresses'}
                        {elseif $step === 'passwort aendern'}
                            {lang key='changePassword'}
                        {elseif $step === 'manageTwoFA'}
                            {lang key='twoFA'}
                        {elseif $step === 'bestellung'}
                            {lang key='orderDetails'}
                        {elseif $step === 'bestellungen'}
                            {lang key='orders'}
                        {elseif $step === 'account loeschen'}
                            {lang key='deleteAccount'}
                        {elseif $step === 'kunden_werben_kunden'}
                            {lang key='customersRecruiting'}
                        {elseif $step === 'bewertungen'}
                            {lang key='feedback'}
                        {elseif $step === 'newRMA' || $step === 'showRMA' || $step === 'rmas'}
                            {lang key='returnOrder'}
                        {else}
                            {lang key='myAccount'}
                        {/if}
                    </h1>
                </div>
            </div>
        </div>

        <div class="container pb-5 mb-2 mb-md-4">
            {if isset($smarty.get.reg)}
                {block name='account-index-alert'}
                    {alert variant="success"}
                        <i class="ci-check-circle me-2"></i>{lang key='accountCreated' section='global'}
                    {/alert}
                {/block}
            {/if}
            
            {block name='account-index-include-extension'}
                {include file='snippets/extension.tpl'}
            {/block}

            {if isset($nWarenkorb2PersMerge) && $nWarenkorb2PersMerge === 1}
                {block name='account-index-script-basket-merge'}
                    {inline_script}<script>
                        eModal.addLabel('{lang key='yes' section='global' addslashes=true}', '{lang key='no' section='global' addslashes=true}');
                        var options = {
                            message: '{lang key='basket2PersMerge' section='login' addslashes=true}',
                            label: '{lang key='yes' section='global' addslashes=true}',
                            title: '{lang key='basket' section='global' addslashes=true}'
                        };
                        eModal.confirm(options).then(
                            function() {
                                window.location = "{get_static_route id='bestellvorgang.php'}?basket2Pers=1&token={$smarty.session.jtl_token}"
                            },
                            function() {
                                window.location = "{get_static_route id='jtl.php'}?updatePersCart=1&token={$smarty.session.jtl_token}"
                            }
                        );
                    </script>{/inline_script}
                {/block}
            {/if}

            {if $step !== 'login'}
                <div class="row">
                    <!-- Sidebar-->
                    <aside class="col-lg-4 pt-4 pt-lg-0 pe-xl-5">
                        <div class="bg-white rounded-3 shadow-lg pt-1 mb-5 mb-lg-0">
                            <div class="d-md-flex justify-content-between align-items-center text-center text-md-start p-4">
                                <div class="d-md-flex align-items-center">
                                    <div class="img-thumbnail rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width: 6.375rem;">
                                        <i class="ci-user-circle display-4 text-primary"></i>
                                    </div>
                                    <div class="ps-md-3">
                                        <h3 class="fs-base mb-0">{$smarty.session.Kunde->cVorname} {$smarty.session.Kunde->cNachname}</h3>
                                        <span class="text-accent fs-sm">{$smarty.session.Kunde->cMail}</span>
                                    </div>
                                </div>
                                <a class="btn btn-primary d-lg-none mb-2 mt-3 mt-md-0" href="#account-menu" data-bs-toggle="collapse" aria-expanded="false">
                                    <i class="ci-menu me-2"></i>{lang key='myAccount'}
                                </a>
                            </div>
                            <div class="d-lg-block collapse" id="account-menu">
                                <div class="bg-secondary px-4 py-3">
                                    <h3 class="fs-sm mb-0 text-muted">{lang key='dashboard'}</h3>
                                </div>
                                <ul class="list-unstyled mb-0">
                                    <li class="border-bottom mb-0">
                                        <a class="nav-link-style d-flex align-items-center px-4 py-3 {if $step === 'mein Konto' || !$step}active{/if}" href="{get_static_route id='jtl.php'}">
                                            <i class="ci-user opacity-60 me-2"></i>{lang key='myAccount'}
                                        </a>
                                    </li>
                                    <li class="border-bottom mb-0">
                                        <a class="nav-link-style d-flex align-items-center px-4 py-3 {if $step === 'bestellungen'}active{/if}" href="{get_static_route id='jtl.php' params=['bestellungen' => 1]}">
                                            <i class="ci-bag opacity-60 me-2"></i>{lang key='orders'}
                                            <span class="fs-sm text-muted ms-auto">{count($Bestellungen)|default:0}</span>
                                        </a>
                                    </li>
                                    <li class="border-bottom mb-0">
                                        <a class="nav-link-style d-flex align-items-center px-4 py-3 {if $step === 'bewertungen'}active{/if}" href="{get_static_route id='jtl.php' params=['bewertungen' => 1]}">
                                            <i class="ci-star opacity-60 me-2"></i>{lang key='feedback'}
                                        </a>
                                    </li>
                                    {if $Einstellungen.global.global_wunschliste_anzeigen === 'Y'}
                                        <li class="border-bottom mb-0">
                                            <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{get_static_route id='wunschliste.php'}">
                                                <i class="ci-heart opacity-60 me-2"></i>{lang key='wishlist'}
                                                <span class="fs-sm text-muted ms-auto">{$smarty.session.Wunschliste->CWunschlistePos_arr|count|default:0}</span>
                                            </a>
                                        </li>
                                    {/if}
                                </ul>
                                <div class="bg-secondary px-4 py-3">
                                    <h3 class="fs-sm mb-0 text-muted">{lang key='account'}</h3>
                                </div>
                                <ul class="list-unstyled mb-0">
                                    <li class="border-bottom mb-0">
                                        <a class="nav-link-style d-flex align-items-center px-4 py-3 {if $step === 'rechnungsdaten'}active{/if}" href="{get_static_route id='jtl.php' params=['editRechnungsadresse' => 1]}">
                                            <i class="ci-location opacity-60 me-2"></i>{lang key='billingAddress'}
                                        </a>
                                    </li>
                                    <li class="border-bottom mb-0">
                                        <a class="nav-link-style d-flex align-items-center px-4 py-3 {if $step === 'lieferadressen'}active{/if}" href="{get_static_route id='jtl.php' params=['editLieferadresse' => 1]}">
                                            <i class="ci-delivery opacity-60 me-2"></i>{lang key='shippingAddresses'}
                                        </a>
                                    </li>
                                    <li class="border-bottom mb-0">
                                        <a class="nav-link-style d-flex align-items-center px-4 py-3 {if $step === 'passwort aendern'}active{/if}" href="{get_static_route id='jtl.php' params=['pass' => 1]}">
                                            <i class="ci-key opacity-60 me-2"></i>{lang key='changePassword'}
                                        </a>
                                    </li>
                                    <li class="mb-0">
                                        <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{get_static_route id='jtl.php' params=['logout' => 1]}">
                                            <i class="ci-sign-out opacity-60 me-2"></i>{lang key='logOut'}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    
                    <!-- Content-->
                    <section class="col-lg-8">
                        <div class="bg-white rounded-3 shadow-lg p-4 mb-5">
                            {opcMountPoint id='opc_before_account'}
                            {if $step === 'mein Konto'}
                                {block name='account-index-include-my-account'}
                                    {include file='account/my_account.tpl'}
                                {/block}
                            {elseif $step === 'rechnungsdaten'}
                                {block name='account-index-include-address-form'}
                                    {include file='account/address_form.tpl'}
                                {/block}
                            {elseif $step === 'lieferadressen'}
                                {block name='account-index-include-shippingaddress-form'}
                                    {include file='account/shipping_address_form.tpl'}
                                {/block}
                            {elseif $step === 'passwort aendern'}
                                {block name='account-index-include-change-password'}
                                    {include file='account/change_password.tpl'}
                                {/block}
                            {elseif $step === 'manageTwoFA'}
                                {block name='account-index-include-manage-two-fa'}
                                    {include file='account/two_fa.tpl'}
                                {/block}
                            {elseif $step === 'bestellung'}
                                {block name='account-index-include-order-details'}
                                    {include file='account/order_details.tpl'}
                                {/block}
                            {elseif $step === 'bestellungen'}
                                {block name='account-index-include-orders'}
                                    {include file='account/orders.tpl'}
                                {/block}
                            {elseif $step === 'account loeschen'}
                                {block name='account-index-include-delete-account'}
                                    {include file='account/delete_account.tpl'}
                                {/block}
                            {elseif $step === 'kunden_werben_kunden'}
                                {block name='account-index-include-customers-recruiting'}
                                    {include file='account/customers_recruiting.tpl'}
                                {/block}
                            {elseif $step === 'bewertungen'}
                                {block name='account-index-include-feedback'}
                                    {include file='account/feedback.tpl'}
                                {/block}
                            {elseif $step === 'newRMA'}
                                {block name='account-index-include-new-rma'}
                                    {if $Einstellungen.global.global_rma_enabled === 'Y'}
                                        {include file='account/rma.tpl'}
                                    {/if}
                                {/block}
                            {elseif $step === 'showRMA'}
                                {block name='account-index-include-show-rma'}
                                    {if $Einstellungen.global.global_rma_enabled === 'Y'}
                                        {include file='account/rma_summary.tpl' showButtons=false}
                                    {/if}
                                {/block}
                            {elseif $step === 'rmas'}
                                {block name='account-index-include-rmalist'}
                                    {if $Einstellungen.global.global_rma_enabled === 'Y'}
                                        {include file='account/rma_list.tpl'}
                                    {/if}
                                {/block}
                            {else}
                                {block name='account-index-include-my-account-default'}
                                    {include file='account/my_account.tpl'}
                                {/block}
                            {/if}
                        </div>
                    </section>
                </div>
            {else}
                {block name='account-index-include-login'}
                    {include file='account/login.tpl'}
                {/block}
            {/if}
        </div>
    {/block}

    {block name='account-index-include-footer'}
        {include file='layout/footer.tpl'}
    {/block}
{/block}
