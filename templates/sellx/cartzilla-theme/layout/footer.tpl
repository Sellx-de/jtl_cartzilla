{block name='layout-footer'}
    {block name='layout-footer-content'}
        <footer class="footer bg-dark pt-5">
            <div class="container">
                <div class="row pb-2">
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget-links widget-light pb-2 mb-4">
                            <h3 class="widget-title text-light">{lang key='shop'}</h3>
                            <ul class="widget-list">
                                {include file='layout/footer_nav.tpl'}
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget-links widget-light pb-2 mb-4">
                            <h3 class="widget-title text-light">{lang key='account'}</h3>
                            <ul class="widget-list">
                                {if $smarty.session.Kunde->kKunde > 0}
                                    <li class="widget-list-item">
                                        <a class="widget-list-link" href="{get_static_route id='jtl.php' params=['bestellvorgang' => 1]}">{lang key='myAccount'}</a>
                                    </li>
                                    <li class="widget-list-item">
                                        <a class="widget-list-link" href="{get_static_route id='jtl.php' params=['bestellvorgang' => 1, 'orders' => 1]}">{lang key='orders'}</a>
                                    </li>
                                    <li class="widget-list-item">
                                        <a class="widget-list-link" href="{get_static_route id='jtl.php' params=['logout' => 1]}">{lang key='logOut'}</a>
                                    </li>
                                {else}
                                    <li class="widget-list-item">
                                        <a class="widget-list-link" href="{get_static_route id='jtl.php' params=['bestellvorgang' => 1]}">{lang key='login'}</a>
                                    </li>
                                    <li class="widget-list-item">
                                        <a class="widget-list-link" href="{get_static_route id='registrieren.php'}">{lang key='register'}</a>
                                    </li>
                                {/if}
                                {if $Einstellungen.global.global_wunschliste_anzeigen === 'Y'}
                                    <li class="widget-list-item">
                                        <a class="widget-list-link" href="{get_static_route id='wunschliste.php'}">{lang key='wishlist'}</a>
                                    </li>
                                {/if}
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget pb-2 mb-4">
                            <h3 class="widget-title text-light pb-1">{lang key='newsletterSubscribe'}</h3>
                            <form class="subscription-form validate" action="{get_static_route id='newsletter.php'}" method="post" name="newsletter" target="_self" novalidate>
                                {$jtl_token}
                                <div class="input-group flex-nowrap">
                                    <i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                                    <input class="form-control rounded-start" type="email" name="cEmail" placeholder="{lang key='emailadress'}" required>
                                    <button class="btn btn-primary" type="submit" name="subscribe">{lang key='newsletterSendSubscribe'}</button>
                                </div>
                                <div class="form-text text-light opacity-50">{lang key='newsletterInformedConsent'}</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-5 bg-darker">
                <div class="container">
                    <div class="row pb-3">
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="d-flex">
                                <i class="ci-rocket text-primary" style="font-size: 2.25rem;"></i>
                                <div class="ps-3">
                                    <h6 class="fs-base text-light mb-1">{lang key='fastDelivery'}</h6>
                                    <p class="mb-0 fs-ms text-light opacity-50">{lang key='fastDeliveryDesc'}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="d-flex">
                                <i class="ci-currency-exchange text-primary" style="font-size: 2.25rem;"></i>
                                <div class="ps-3">
                                    <h6 class="fs-base text-light mb-1">{lang key='moneyBackGuarantee'}</h6>
                                    <p class="mb-0 fs-ms text-light opacity-50">{lang key='moneyBackGuaranteeDesc'}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="d-flex">
                                <i class="ci-support text-primary" style="font-size: 2.25rem;"></i>
                                <div class="ps-3">
                                    <h6 class="fs-base text-light mb-1">{lang key='customerSupport'}</h6>
                                    <p class="mb-0 fs-ms text-light opacity-50">{lang key='customerSupportDesc'}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="d-flex">
                                <i class="ci-card text-primary" style="font-size: 2.25rem;"></i>
                                <div class="ps-3">
                                    <h6 class="fs-base text-light mb-1">{lang key='securePayment'}</h6>
                                    <p class="mb-0 fs-ms text-light opacity-50">{lang key='securePaymentDesc'}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="hr-light mb-5">
                    <div class="row pb-2">
                        <div class="col-md-6 text-center text-md-start mb-4">
                            <div class="text-nowrap mb-4">
                                <a class="d-inline-block align-middle mt-n1 me-3" href="{$ShopURL}">
                                    <img class="d-block" src="{$ShopLogoURL}" width="142" alt="{$Einstellungen.global.global_shopname}">
                                </a>
                            </div>
                            <div class="widget widget-links widget-light">
                                <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                                    {include file='layout/footer_nav_legal.tpl'}
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 text-center text-md-end mb-4">
                            <div class="mb-3">
                                {foreach $oZahlungsarten as $oZahlungsart}
                                    {if $oZahlungsart->cBild}
                                        <img class="d-inline-block align-middle me-2 my-2" src="{$ShopURL}/{$oZahlungsart->cBild}" width="36" alt="{$oZahlungsart->cName}">
                                    {/if}
                                {/foreach}
                            </div>
                            <div class="mb-4">
                                {foreach $oVersandarten as $oVersandart}
                                    {if $oVersandart->cBild}
                                        <img class="d-inline-block align-middle me-2 my-2" src="{$ShopURL}/{$oVersandart->cBild}" width="36" alt="{$oVersandart->cName}">
                                    {/if}
                                {/foreach}
                            </div>
                        </div>
                    </div>
                    <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">
                        © {$smarty.now|date_format:'%Y'} {$Einstellungen.global.global_shopname}. {lang key='allRightsReserved'}.
                    </div>
                </div>
            </div>
        </footer>
    {/block}
    
    {* Back to top button *}
    <a class="btn-scroll-top" href="#top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon ci-arrow-up"></i>
    </a>
    
    {* Cookie consent *}
    {if $Einstellungen.consentmanager.consent_manager_active === 'Y' && !$bExclConsentManager}
        {include file='layout/consent_manager.tpl'}
    {/if}
    
    {* Scripts *}
    {block name='layout-footer-js'}
        {if $Einstellungen.template.general.use_minify === 'N'}
            {foreach $cJS_arr as $cJS}
                <script defer src="{$ShopURL}/{$cJS}?v={$nTemplateVersion}"></script>
            {/foreach}
            {if isset($cPluginJS_arr)}
                {foreach $cPluginJS_arr as $cJS}
                    <script defer src="{$ShopURL}/{$cJS}?v={$nTemplateVersion}"></script>
                {/foreach}
            {/if}
        {else}
            <script defer src="{$ShopURL}/{$combinedJS}?v={$nTemplateVersion}"></script>
        {/if}
        
        {* Bootstrap + Theme scripts *}
        <script src="{$ShopURL}/{$templateDir}/cartzilla-theme/assets/js/theme.min.js"></script>
    {/block}
    
    {if isset($Einstellungen.template.general.google_analytics) && $Einstellungen.template.general.google_analytics !== '' && !$isAjax && !$isMobile}
        {googleAnalytics accountId=$Einstellungen.template.general.google_analytics action='view'}
    {/if}
    
    {if isset($Einstellungen.template.general.google_tagmanager) && $Einstellungen.template.general.google_tagmanager !== '' && !$isAjax}
        {googleTagmanager containerID=$Einstellungen.template.general.google_tagmanager action='view'}
    {/if}
    
    {if isset($Einstellungen.template.general.facebook_pixel) && $Einstellungen.template.general.facebook_pixel !== '' && !$isAjax}
        {facebookPixel pixelId=$Einstellungen.template.general.facebook_pixel action='view'}
    {/if}
{/block}