{block name='layout-footer'}

    {block name='layout-footer-content-all-closingtags'}

        {block name='layout-footer-aside'}
            {if !$bExclusive && $boxes.left !== null && !empty(trim(strip_tags($boxes.left)))
                && (($Einstellungen.template.theme.left_sidebar === 'Y' && $boxesLeftActive) || $smarty.const.PAGE_ARTIKELLISTE === $nSeitenTyp)}
                {block name='layout-footer-content-productlist-col-closingtag'}
                    </div>{* /col *}
                    {block name='layout-footer-sidepanel-left'}
                         <aside id="sidepanel_left" class="sidepanel-left d-print-none col-12 col-lg-4 col-xl-3 order-last order-lg-first dropdown-full-width">
                             {block name='footer-sidepanel-left-content'}{$boxes.left}{/block}
                         </aside>
                    {/block}
                {/block}
                {block name='layout-footer-content-productlist-row-closingtag'}
                    </div>{* /row *}
                {/block}
            {/if}
        {/block}

        {block name='layout-footer-content-closingtag'}
            {opcMountPoint id='opc_content' title='Default Area' inContainer=false}
            </div>{* /content *}
        {/block}

        {block name='layout-footer-content-wrapper-closingtag'}
            </div>{* /content-wrapper*}
        {/block}
    {/block}

    {block name='layout-footer-main-wrapper-closingtag'}
        </main> {* /mainwrapper *}
    {/block}

    {block name='layout-footer-content'}
        {if !$bExclusive}
            {$newsletterActive = $Einstellungen.template.footer.newsletter_footer === 'Y'
                && $Einstellungen.newsletter.newsletter_active === 'Y'}
            <footer class="footer pt-5 pb-4" {if $newsletterActive}class=" pt-5 pb-4 newsletter-active"{/if}>
                <div class="container pt-sm-2 pt-md-3 pt-lg-4">
                    <div class="row pb-5 mb-lg-3">
                        {block name='layout-footer-boxes'}
                            <div class="col-md-8 col-xl-7 pb-2 pb-md-0 mb-4 mb-md-0 mt-n3 mt-sm-0">
                                {getBoxesByPosition position='bottom' assign='footerBoxes'}
                                {if isset($footerBoxes) && count($footerBoxes) > 0}
                                    <div class="row" id="footer-boxes">
                                        {foreach $footerBoxes as $box}
                                            {if $box->isActive() && !empty($box->getRenderedContent())}
                                                <div class="col-md-4">
                                                    {$box->getRenderedContent()}
                                                </div>
                                            {/if}
                                        {/foreach}
                                    </div>
                                {/if}
                            </div>
                        {/block}
                    

                                {block name='layout-footer-newsletter'}
                                    <div class="col-md-4 offset-xl-1">
                                        {block name='layout-footer-newsletter-heading'}
                                            <h6 class="mb-4">
                                                {lang key='newsletter' section='newsletter'} {lang key='newsletterSendSubscribe' section='newsletter'}
                                            </h6>
                                        {/block}
                                        {block name='layout-footer-form'}
                                            {form class="needs-validation" method="post" action="{get_static_route id='newsletter.php'}"}
                                                {block name='layout-footer-form-content'}
                                                    {input type="hidden" name="abonnieren" value="2"}
                                                    <div class="position-relative">
                                                        <div class="input-group">
                                                            <input type="email" 
                                                                   class="form-control form-control-lg bg-transparent" 
                                                                   name="cEmail" 
                                                                   id="newsletter_email" 
                                                                   placeholder="{lang key='emailadress'}" 
                                                                   required>
                                                            <button type="submit" 
                                                                    class="btn btn-dark btn-lg" 
                                                                    aria-label="{lang key='newsletterSendSubscribe' section='newsletter'}">
                                                                <i class="ci-send"></i>
                                                            </button>
                                                        </div>
                                                        <div class="invalid-tooltip">Bitte geben Sie eine gültige E-Mail-Adresse ein!</div>
                                                    </div>
                                                    {if isset($oSpezialseiten_arr[$smarty.const.LINKTYP_DATENSCHUTZ])}
                                                        {block name='layout-footer-newsletter-info'}
                                                            <p class="form-text mt-3">
                                                                {lang key='newsletterInformedConsent' section='newsletter' printf=$oSpezialseiten_arr[$smarty.const.LINKTYP_DATENSCHUTZ]->getURL()}
                                                            </p>
                                                        {/block}
                                                    {/if}
                                                {/block}
                                                {block name='layout-footer-form-captcha'}
                                                    <div class="{if !empty($plausiArr.captcha) && $plausiArr.captcha === true} has-error{/if}">
                                                        {captchaMarkup getBody=true}
                                                    </div>
                                                {/block}
                                            {/form}
                                        {/block}
                                {/block}

                        </div>
                    </div>
                    {block name='layout-footer-additional'}
                        {if $Einstellungen.template.footer.socialmedia_footer === 'Y'}
                            <div class="d-flex justify-content-center justify-content-lg-start gap-2 mt-n2 mt-md-0">
                                {block name='layout-footer-socialmedia'}


                                        {if !empty($Einstellungen.template.footer.facebook)}
                                                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="{if strpos($Einstellungen.template.footer.facebook, 'http') !== 0}https://{/if}{$Einstellungen.template.footer.facebook}"
                                                    aria-label="{lang key='visit_us_on' section='aria' printf='Facebook'}" title="Facebook" target="_blank" rel="noopener">
                                                    <i class="ci-facebook"></i>
                                                </a>
                                        {/if}
                                        {if !empty($Einstellungen.template.footer.twitter)}
                                                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="{if strpos($Einstellungen.template.footer.twitter, 'http') !== 0}https://{/if}{$Einstellungen.template.footer.twitter}"
                                                    aria-label="{lang key='visit_us_on' section='aria' printf='Twitter'}" title="Twitter" target="_blank" rel="noopener">
                                                    <i class="ci-x"></i>
                                                </a>
                                        {/if}
                                        {if !empty($Einstellungen.template.footer.youtube)}
                                                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="{if strpos($Einstellungen.template.footer.youtube, 'http') !== 0}https://{/if}{$Einstellungen.template.footer.youtube}"
                                                    aria-label="{lang key='visit_us_on' section='aria' printf='YouTube'}" title="YouTube" target="_blank" rel="noopener">
                                                    <i class="ci-youtube"></i>
                                                </a>
                                        {/if}
                                        {if !empty($Einstellungen.template.footer.vimeo)}
                                                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="{if strpos($Einstellungen.template.footer.vimeo, 'http') !== 0}https://{/if}{$Einstellungen.template.footer.vimeo}"
                                                    aria-label="{lang key='visit_us_on' section='aria' printf='Vimeo'}"  title="Vimeo" target="_blank" rel="noopener">
                                                    <i class="ci-vimeo"></i>
                                                </a>
                                        {/if}
                                        {if !empty($Einstellungen.template.footer.pinterest)}
                                                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="{if strpos($Einstellungen.template.footer.pinterest, 'http') !== 0}https://{/if}{$Einstellungen.template.footer.pinterest}"
                                                    aria-label="{lang key='visit_us_on' section='aria' printf='Pinterest'}"  title="Pinterest" target="_blank" rel="noopener">
                                                    <i class="ci-pinterest"></i>
                                                </a>
                                        {/if}
                                        {if !empty($Einstellungen.template.footer.instagram)}
                                                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="{if strpos($Einstellungen.template.footer.instagram, 'http') !== 0}https://{/if}{$Einstellungen.template.footer.instagram}"
                                                    aria-label="{lang key='visit_us_on' section='aria' printf='Instagram'}"  title="Instagram" target="_blank" rel="noopener">
                                                    <i class="ci-instagram"></i>
                                                </a>
                                        {/if}
                                        {if !empty($Einstellungen.template.footer.whatsapp)}
                                                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="{if strpos($Einstellungen.template.footer.whatsapp, 'http') !== 0}https://{/if}{$Einstellungen.template.footer.whatsapp}"
                                                aria-label="{lang key='visit_us_on' section='aria' printf='WhatsApp'}"  title="WhatsApp" target="_blank" rel="noopener">
                                                    <i class="ci-whatsapp"></i>
                                                </a>
                                        {/if}
                                        {if !empty($Einstellungen.template.footer.skype)}
                                                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="{if strpos($Einstellungen.template.footer.skype, 'http') !== 0}https://{/if}{$Einstellungen.template.footer.skype}"
                                                    aria-label="{lang key='visit_us_on' section='aria' printf='Skype'}"  title="Skype" target="_blank" rel="noopener">
                                                    <i class="ci-skype"></i>
                                                </a>
                                        {/if}
                                        {if !empty($Einstellungen.template.footer.xing)}
                                                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="{if strpos($Einstellungen.template.footer.xing, 'http') !== 0}https://{/if}{$Einstellungen.template.footer.xing}"
                                                    aria-label="{lang key='visit_us_on' section='aria' printf='Xing'}"  title="Xing" target="_blank" rel="noopener">
                                                    <i class="ci-xing"></i>
                                                </a>
                                        {/if}
                                        {if !empty($Einstellungen.template.footer.linkedin)}
                                                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="{if strpos($Einstellungen.template.footer.linkedin, 'http') !== 0}https://{/if}{$Einstellungen.template.footer.linkedin}"
                                                    aria-label="{lang key='visit_us_on' section='aria' printf='Linkedin'}"  title="Linkedin" target="_blank" rel="noopener">
                                                    <i class="ci-linkedin"></i>
                                                </a>
                                        {/if}

                                {/block}
                            </div>
                        {/if}
                    {/block}

                
                {block name='layout-footer-copyright'}
                    
                    <div class="d-lg-flex align-items-center border-top pt-4 mt-3">
                        <div class="d-flex gap-2 gap-sm-3 justify-content-center ms-lg-auto mb-3 mb-lg-0 order-lg-2">
                            <div>
                                <img src="templates/sellx/themes/base/images/payment-methods/visa-light-mode.svg" class="d-none-dark" alt="Visa">
                                <img src="templates/sellx/themes/base/images/payment-methods/visa-dark-mode.svg" class="d-none d-block-dark" alt="Visa">
                            </div>
                            <div>
                                <img src="templates/sellx/themes/base/images/payment-methods/paypal-light-mode.svg" class="d-none-dark" alt="PayPal">
                                <img src="templates/sellx/themes/base/images/payment-methods/paypal-dark-mode.svg" class="d-none d-block-dark" alt="PayPal">
                            </div>
                            <div>
                                <img src="templates/sellx/themes/base/images/payment-methods/mastercard.svg" alt="Mastercard">
                            </div>
                            <div>
                                <img src="templates/sellx/themes/base/images/payment-methods/google-pay-light-mode.svg" class="d-none-dark" alt="Google Pay">
                                <img src="templates/sellx/themes/base/images/payment-methods/google-pay-dark-mode.svg" class="d-none d-block-dark" alt="Google Pay">
                            </div>
                            <div>
                                <img src="templates/sellx/themes/base/images/payment-methods/apple-pay-light-mode.svg" class="d-none-dark" alt="Apple Pay">
                                <img src="templates/sellx/themes/base/images/payment-methods/apple-pay-dark-mode.svg" class="d-none d-block-dark" alt="Apple Pay">
                            </div>
                        </div>
                        <div class="d-md-flex justify-content-center order-lg-1">
                            <ul class="nav justify-content-center gap-4 order-md-3 mb-4 mb-md-0" style="flex-direction: row;!important" >
                                <li class="animate-underline">
                                    <a class="nav-link fs-xs fw-normal p-0 animate-target" href="Sitemap">Sitemap</a>
                                </li>
                                <li class="animate-underline">
                                    <a class="nav-link fs-xs fw-normal p-0 animate-target" href="Login">Anmelden</a>
                                </li>
                                <li class="animate-underline">
                                    <a class="nav-link fs-xs fw-normal p-0 animate-target" href="passwort-vergessen">Passwort Vergessen</a>
                                </li>
                            </ul>
                            <div class="vr text-body-secondary opacity-25 mx-4 d-none d-md-inline-block order-md-2"></div>
                            <p class="fs-xs text-center text-lg-start mb-0 order-md-1">
                                © All rights reserved. Made with <i class="fa fa-heart fa-beat" style="color: #"></i> by 
                                <a class="text-dark-emphasis text-decoration-none d-inline-flex align-items-center" 
                                   href="https://sellx.de" 
                                   target="_blank" 
                                   rel="noreferrer">
                                    <img src="templates/sellx/themes/base/images/logo/sellx_footer.svg" 
                                         alt="Made by sellx GmbH" 
                                         class="ms-1" 
                                         style="height: 0.875em; width: auto; vertical-align: baseline;">
                                </a>
                            </p>
                        </div>
                    </div>
                {/block}
                
                {block name='layout-footer-scroll-top'}
                    {if $Einstellungen.template.theme.button_scroll_top === 'Y'}
                        {include file='snippets/scroll_top.tpl'}
                    {/if}
                {/block}
                </div>
            </footer>
        {/if}
    {/block}

    {block name='layout-footer-io-path'}
        <div id="jtl-io-path" data-path="{$ShopURL}" class="d-none"></div>
    {/block}

    {* JavaScripts *}
    {block name='layout-footer-js'}
        {$dbgBarBody}
        {captchaMarkup getBody=false}
    {/block}

    {block name='layout-footer-consent-manager'}
        {if $Einstellungen.consentmanager.consent_manager_active === 'Y' && !$isAjax && $consentItems->isNotEmpty()}
            <input id="consent-manager-show-banner" type="hidden" value="{$Einstellungen.consentmanager.consent_manager_show_banner}">
            {include file='snippets/consent_manager.tpl'}
            {inline_script}
                <script>
                    setTimeout(function() {
                        $('#consent-manager, #consent-settings-btn').removeClass('d-none');
                    }, 100)
                    document.addEventListener('consent.updated', function(e) {
                        $.post('{$ShopURLSSL}/_updateconsent', {
                                'action': 'updateconsent',
                                'jtl_token': '{$smarty.session.jtl_token}',
                                'data': e.detail
                            }
                        );
                    });
                    {if !isset($smarty.session.consents)}
                        document.addEventListener('consent.ready', function(e) {
                            document.dispatchEvent(new CustomEvent('consent.updated', { detail: e.detail }));
                        });
                    {/if}

                    window.CM = new ConsentManager({
                        version: {$smarty.session.consentVersion|default:1}
                    });
                    var trigger = document.querySelectorAll('.trigger')
                    var triggerCall = function(e) {
                        e.preventDefault();
                        let type = e.target.dataset.consent;
                        if (CM.getSettings(type) === false) {
                            CM.openConfirmationModal(type, function() {
                                let data = CM._getLocalData();
                                if (data === null ) {
                                    data = { settings: {} };
                                }
                                data.settings[type] = true;
                                document.dispatchEvent(new CustomEvent('consent.updated', { detail: data.settings }));
                            });
                        }
                    }
                    for (let i = 0; i < trigger.length; ++i) {
                        trigger[i].addEventListener('click', triggerCall)
                    }

document.addEventListener("DOMContentLoaded", function () {
    let items = document.querySelectorAll("#customCarousel .carousel-item");
    let currentIndex = 0;

    function showNextItem() {
        let currentItem = items[currentIndex];
        let nextIndex = (currentIndex + 1) % items.length;
        let nextItem = items[nextIndex];

        // 1️⃣ Blende aktuellen Text ein
        anime({
            targets: currentItem,
            opacity: [0, 1],
            duration: 1500,
            easing: "easeInOutQuad",
            begin: function () {
                currentItem.classList.add("active");
                currentItem.style.visibility = "visible"; // Sichtbar machen
            }
        });

        // 2️⃣ Nach 6 Sekunden langsam ausblenden
        setTimeout(() => {
            anime({
                targets: currentItem,
                opacity: [1, 0],
                duration: 1500,
                easing: "easeInOutQuad",
                complete: function () {
                    currentItem.classList.remove("active");
                    currentItem.style.visibility = "hidden"; // Unsichtbar machen
                }
            });
        }, 6000);

        // 3️⃣ Nach 10 Sekunden zum nächsten wechseln
        setTimeout(() => {
            currentIndex = nextIndex;
            showNextItem();
        }, 10000);
    }

    // Starte das Karussell
    showNextItem();
});
</script>

            {/inline_script}
        {/if}
    {/block}
    </body>
    </html>
{/block}
