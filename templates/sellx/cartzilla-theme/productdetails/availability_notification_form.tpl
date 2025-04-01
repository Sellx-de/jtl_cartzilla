{block name='productdetails-availability-notification-form'}
    {if isset($position) && $position === 'popup'}
        {if isset($Artikelhinweise) && count($Artikelhinweise) > 0}
            {block name='productdetails-availability-notification-form-alert'}
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {foreach $Artikelhinweise as $Artikelhinweis}
                        {$Artikelhinweis}
                    {/foreach}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            {/block}
        {/if}
    {/if}
    
    {block name='productdetails-availability-notification-form-form'}
        <form action="{if !empty($Artikel->cURLFull)}{$Artikel->cURLFull}{else}{$ShopURL}/{/if}"
            method="post" id="article_availability{$Artikel->kArtikel}"
            class="needs-validation availability-notification-form"
            novalidate>
            
            {block name='productdetails-availability-notification-form-fieldset-contact'}
                <div class="mb-4">
                    {block name='productdetails-availability-notification-form-legend-contact'}
                        <h3 class="h5 mb-3">{lang key='contact'}</h3>
                    {/block}
                    
                    <div class="row">
                        {if $Einstellungen.$tplscope.benachrichtigung_abfragen_vorname !== 'N' || $Einstellungen.$tplscope.benachrichtigung_abfragen_nachname !== 'N'}
                            {block name='productdetails-availability-notification-form-name'}
                                {if $Einstellungen.$tplscope.benachrichtigung_abfragen_vorname !== 'N'}
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="article_availability{$Artikel->kArtikel}_firstName">
                                            {lang key='firstName' section='account data'}{if $Einstellungen.$tplscope.benachrichtigung_abfragen_vorname === 'O'}<span class='text-muted'> - {lang key='optional'}</span>{/if}
                                        </label>
                                        <input type="text" class="form-control" name="vorname" value="{if isset($Benachrichtigung->cVorname)}{$Benachrichtigung->cVorname}{/if}" id="article_availability{$Artikel->kArtikel}_firstName" {if $Einstellungen.$tplscope.benachrichtigung_abfragen_vorname === 'Y'}required{/if} autocomplete="given-name">
                                        <div class="invalid-feedback">
                                            {lang key='fillOut' section='global'}
                                        </div>
                                    </div>
                                {/if}
                                
                                {if $Einstellungen.$tplscope.benachrichtigung_abfragen_nachname !== 'N'}
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="article_availability{$Artikel->kArtikel}_lastName">
                                            {lang key='lastName' section='account data'}{if $Einstellungen.$tplscope.benachrichtigung_abfragen_nachname === 'O'}<span class='text-muted'> - {lang key='optional'}</span>{/if}
                                        </label>
                                        <input type="text" class="form-control" name="nachname" value="{if isset($Benachrichtigung->cNachname)}{$Benachrichtigung->cNachname}{/if}" id="article_availability{$Artikel->kArtikel}_lastName" {if $Einstellungen.$tplscope.benachrichtigung_abfragen_nachname === 'Y'}required{/if} autocomplete="family-name">
                                        <div class="invalid-feedback">
                                            {lang key='fillOut' section='global'}
                                        </div>
                                    </div>
                                {/if}
                            {/block}
                        {/if}
                        
                        {block name='productdetails-availability-notification-form-email'}
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="article_availability{$Artikel->kArtikel}_email">
                                    {lang key='email' section='account data'}
                                </label>
                                <input type="email" class="form-control" name="email" value="{if isset($Benachrichtigung->cMail)}{$Benachrichtigung->cMail}{/if}" id="article_availability{$Artikel->kArtikel}_email" required autocomplete="email">
                                <div class="invalid-feedback">
                                    {lang key='fillOut' section='global'}
                                </div>
                            </div>
                        {/block}
                    </div>
                </div>
            {/block}
            
            {block name='productdetails-availability-notification-form-fieldset-product'}
                <div class="mb-4">
                    {block name='productdetails-availability-notification-form-legend-product'}
                        <h3 class="h5 mb-3">{lang key='product'}</h3>
                    {/block}
                    
                    <div class="row">
                        {block name='productdetails-availability-notification-form-product-info'}
                            <div class="col-md-6 mb-3">
                                <div class="border rounded p-3 text-center">
                                    {include file='snippets/image.tpl' item=$Artikel class='img-fluid'}
                                    <h6 class="mt-2 mb-0 fs-sm">{$Artikel->cName}</h6>
                                </div>
                            </div>
                        {/block}
                        
                        {if $Einstellungen.$tplscope.benachrichtigung_abfragen_preis === 'Y'}
                            {block name='productdetails-availability-notification-form-price'}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="article_availability{$Artikel->kArtikel}_price">
                                        {lang key='wishPrice' section='productDetails'}
                                    </label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="wunschpreis" value="{if isset($Benachrichtigung->fWunschpreis)}{$Benachrichtigung->fWunschpreis}{/if}" id="article_availability{$Artikel->kArtikel}_price" step="0.01" required>
                                        <span class="input-group-text">{$smarty.session.Waehrung->getName()}</span>
                                        <div class="invalid-feedback">
                                            {lang key='fillOut' section='global'}
                                        </div>
                                    </div>
                                </div>
                            {/block}
                        {/if}
                    </div>
                </div>
            {/block}
            
            {block name='productdetails-availability-notification-form-include-checkbox'}
                {if isset($fehlendeAngaben_benachrichtigung)}
                    {include file='snippets/checkbox.tpl' nAnzeigeOrt=$smarty.const.CHECKBOX_ORT_FRAGE_VERFUEGBARKEIT cPlausi_arr=$fehlendeAngaben_benachrichtigung cPost_arr=null}
                {else}
                    {include file='snippets/checkbox.tpl' nAnzeigeOrt=$smarty.const.CHECKBOX_ORT_FRAGE_VERFUEGBARKEIT cPlausi_arr=null cPost_arr=null}
                {/if}
            {/block}
            
            {if (!isset($smarty.session.bAnti_spam_already_checked) || $smarty.session.bAnti_spam_already_checked !== true) &&
                isset($Einstellungen.$tplscope.benachrichtigung_abfragen_captcha) && $Einstellungen.$tplscope.benachrichtigung_abfragen_captcha !== 'N' && JTL\Session\Frontend::getCustomer()->getID() === 0}
                {block name='productdetails-availability-notification-form-captcha'}
                    <div class="mb-4 {if !empty($fehlendeAngaben_benachrichtigung.captcha)}is-invalid{/if}">
                        {captchaMarkup getBody=true}
                    </div>
                {/block}
            {/if}

            {if $Einstellungen.$tplscope.benachrichtigungkommentar_anzeigen === 'Y'}
                {block name='productdetails-availability-notification-form-comment'}
                    <div class="alert alert-info d-flex mb-4">
                        <i class="ci-announcement fs-lg me-2"></i>
                        <div>{lang key='notificationComment' section='productDetails'}</div>
                    </div>
                {/block}
            {/if}

            {block name='productdetails-availability-notification-form-submit'}
                <input type="hidden" name="a" value="{$Artikel->kArtikel}">
                <input type="hidden" name="show" value="1">
                <input type="hidden" name="benachrichtigung_verfuegbarkeit" value="1">
                <button type="submit" class="btn btn-primary" name="submit" value="1">
                    <i class="ci-bell me-2"></i>{lang key='requestNotification' section='productDetails'}
                </button>
            {/block}
        </form>
    {/block}
{/block}