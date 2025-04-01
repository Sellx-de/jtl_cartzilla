{block name='newsletter-index'}
    {block name='newsletter-index-include-header'}
        {include file='layout/header.tpl'}
    {/block}

    {block name='newsletter-index-content'}
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
                                {if !empty($Link->getTitle())}
                                    {$Link->getTitle()}
                                {else}
                                    {lang key='newsletter'}
                                {/if}
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                    <h1 class="h3 text-light mb-0">
                        {if !empty($Link->getTitle())}
                            {$Link->getTitle()}
                        {else}
                            {lang key='newsletter'}
                        {/if}
                    </h1>
                </div>
            </div>
        </div>
        
        <div class="container pb-5 mb-2 mb-md-4">
            {block name='newsletter-index-include-extension'}
                {include file='snippets/extension.tpl'}
            {/block}
            
            {assign var=cPost_arr value=$cPost_arr|default:[]}
            
            {block name='newsletter-index-link-content'}
                {if !empty($Link->getContent())}
                    {opcMountPoint id='opc_before_newsletter_content' inContainer=false}
                    <div class="mb-4">
                        {$Link->getContent()}
                    </div>
                {/if}
            {/block}
            
            {if $cOption === 'eintragen'}
                {if empty($bBereitsAbonnent)}
                    {block name='newsletter-index-newsletter-subscribe-form'}
                        {opcMountPoint id='opc_before_newsletter_subscribe' inContainer=false}
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card border-0 shadow-lg">
                                    <div class="card-body p-4 p-xl-5">
                                        {block name='newsletter-index-newsletter-subscribe-subheading'}
                                            <h2 class="h4 mb-3">{lang key='newsletterSubscribe' section='newsletter'}</h2>
                                        {/block}
                                        {block name='newsletter-index-newsletter-subscribe-desc'}
                                            <p class="text-muted mb-4">{lang key='newsletterSubscribeDesc' section='newsletter'}</p>
                                        {/block}
                                        {form method="post" action="{get_static_route id='newsletter.php'}" role="form" class="needs-validation" slide=true novalidate=true}
                                        {block name='newsletter-index-newsletter-subscribe-form-content'}
                                            <fieldset>
                                                {if !empty($oPlausi->cPost_arr.cEmail)}
                                                    {assign var=inputVal_email value=$oPlausi->cPost_arr.cEmail}
                                                {elseif !empty($oKunde->cMail)}
                                                    {assign var=inputVal_email value=$oKunde->cMail}
                                                {/if}
                                                {block name='newsletter-index-form-email'}
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">{lang key='newsletteremail' section='newsletter'}</label>
                                                        <input type="email" class="form-control" id="email" name="cEmail" value="{$inputVal_email|default:''}" required>
                                                        <div class="invalid-feedback">{lang key='fillOut'}</div>
                                                    </div>
                                                {/block}
                                                
                                                {assign var=plausiArr value=$oPlausi->nPlausi_arr|default:[]}
                                                {if (!isset($smarty.session.bAnti_spam_already_checked) || $smarty.session.bAnti_spam_already_checked !== true) &&
                                                isset($Einstellungen.newsletter.newsletter_sicherheitscode) && $Einstellungen.newsletter.newsletter_sicherheitscode !== 'N' && JTL\Session\Frontend::getCustomer()->getID() === 0}
                                                    {block name='newsletter-index-form-captcha'}
                                                        <div class="mb-3">
                                                            {captchaMarkup getBody=true}
                                                        </div>
                                                    {/block}
                                                {/if}
                                                
                                                {hasCheckBoxForLocation nAnzeigeOrt=$nAnzeigeOrt cPlausi_arr=$plausiArr cPost_arr=$cPost_arr bReturn="bHasCheckbox"}
                                                {if $bHasCheckbox}
                                                    {block name='newsletter-index-form-include-checkbox'}
                                                        <div class="mb-3">
                                                            {include file='snippets/checkbox.tpl' nAnzeigeOrt=$nAnzeigeOrt cPlausi_arr=$plausiArr cPost_arr=$cPost_arr}
                                                        </div>
                                                    {/block}
                                                {/if}

                                                {block name='newsletter-index-newsletter-subscribe-form-content-submit'}
                                                    <div class="d-flex justify-content-end">
                                                        <input type="hidden" name="abonnieren" value="1">
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="ci-send me-2"></i>{lang key='newsletterSendSubscribe' section='newsletter'}
                                                        </button>
                                                    </div>
                                                    
                                                    {if isset($oSpezialseiten_arr[$smarty.const.LINKTYP_DATENSCHUTZ])}
                                                        <div class="form-text mt-3">
                                                            {lang key='newsletterInformedConsent' section='newsletter' printf=$oSpezialseiten_arr[$smarty.const.LINKTYP_DATENSCHUTZ]->getURL()}
                                                        </div>
                                                    {/if}
                                                {/block}
                                            </fieldset>
                                        {/block}
                                        {/form}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/block}
                {/if}

                {block name='newsletter-index-newsletter-unsubscribe-form'}
                    {opcMountPoint id='opc_before_newsletter_unsubscribe' inContainer=false}
                    <div class="row mt-5">
                        <div class="col-lg-8">
                            <div class="card border-0 shadow-lg">
                                <div class="card-body p-4 p-xl-5">
                                    {block name='newsletter-index-newsletter-unsubscribe-subheading'}
                                        <h2 class="h4 mb-3">{lang key='newsletterUnsubscribe' section='newsletter'}</h2>
                                    {/block}
                                    {block name='newsletter-index-newsletter-unsubscribe-desc'}
                                        <p class="text-muted mb-4">{lang key='newsletterUnsubscribeDesc' section='newsletter'}</p>
                                    {/block}
                                    {form method="post" action="{get_static_route id='newsletter.php'}" name="newsletterabmelden" class="needs-validation" slide=true novalidate=true}
                                    {block name='newsletter-index-newsletter-unsubscribe-form-content'}
                                        <fieldset>
                                            <div class="mb-3">
                                                <label for="checkOut" class="form-label">{lang key='newsletteremail' section='newsletter'}</label>
                                                <input type="email" class="form-control" id="checkOut" name="cEmail" value="{$oKunde->cMail|default:''}" required>
                                                <div class="invalid-feedback">{lang key='fillOut'}</div>
                                            </div>
                                            <input type="hidden" name="abmelden" value="1">
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="ci-close me-2"></i>{lang key='newsletterSendUnsubscribe' section='newsletter'}
                                                </button>
                                            </div>
                                        </fieldset>
                                    {/block}
                                    {/form}
                                </div>
                            </div>
                        </div>
                    </div>
                {/block}
            {elseif $cOption === 'anzeigen'}
                <div class="row">
                    <div class="col-lg-10">
                        <div class="card border-0 shadow-lg">
                            <div class="card-body p-4 p-xl-5">
                                {if isset($oNewsletterHistory) && $oNewsletterHistory->kNewsletterHistory > 0}
                                    {block name='newsletter-index-newsletter-history'}
                                        {block name='newsletter-index-newsletter-history-heading'}
                                            <h2 class="h4 mb-4">{lang key='newsletterhistory' section='global'}</h2>
                                        {/block}
                                        {block name='newsletter-index-newsletter-history-content'}
                                            <div id="newsletterContent">
                                                <div class="mb-4">
                                                    <div class="mb-2">
                                                        <strong>{lang key='newsletterdraftsubject' section='newsletter'}:</strong> {$oNewsletterHistory->cBetreff}
                                                    </div>
                                                    <div class="text-muted">
                                                        {lang key='newsletterdraftdate' section='newsletter'}: {$oNewsletterHistory->Datum}
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <h3 class="h5 mb-3">{lang key='newsletterHtml' section='newsletter'}</h3>
                                                    <div class="border p-3 rounded">
                                                        {$oNewsletterHistory->cHTMLStatic|replace:'src="http://':'src="//'}
                                                    </div>
                                                </div>
                                            </div>
                                        {/block}
                                    {/block}
                                {else}
                                    {block name='newsletter-index-alert'}
                                        <div class="alert alert-danger d-flex">
                                            <i class="ci-announcement fs-lg me-2"></i>
                                            <div>{lang key='noEntriesAvailable' section='global'}</div>
                                        </div>
                                    {/block}
                                {/if}
                            </div>
                        </div>
                    </div>
                </div>
            {/if}
        </div>
    {/block}

    {block name='newsletter-index-include-footer'}
        {include file='layout/footer.tpl'}
    {/block}
{/block}