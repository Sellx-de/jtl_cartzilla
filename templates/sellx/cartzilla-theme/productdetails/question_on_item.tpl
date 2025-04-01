{block name='productdetails-question-on-item'}
    {if isset($fehlendeAngaben_fragezumprodukt)}
        {$fehlendeAngaben = $fehlendeAngaben_fragezumprodukt}
    {/if}
    {if isset($position) && $position === 'popup'}
        {if count($Artikelhinweise) > 0}
            {block name='productdetails-question-on-item-alert'}
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {foreach $Artikelhinweise as $Artikelhinweis}
                        {$Artikelhinweis}
                    {/foreach}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            {/block}
        {/if}
    {/if}
    
    {block name='productdetails-question-on-item-form'}
        <form action="{if !empty($Artikel->cURLFull)}{$Artikel->cURLFull}{if $Einstellungen.artikeldetails.artikeldetails_fragezumprodukt_anzeigen === 'Y'}#tab-questionOnItem{/if}{else}{$ShopURL}/{/if}"
            method="post"
            id="article_question"
            class="needs-validation"
            novalidate>
            
            {block name='productdetails-question-on-item-form-fieldset-contact'}
                <div class="mb-4">
                    {block name='productdetails-question-on-item-form-legend-contact'}
                        <h3 class="h5 mb-3">{lang key='contact'}</h3>
                    {/block}
                    
                    <div class="row">
                        {if $Einstellungen.artikeldetails.produktfrage_abfragen_anrede !== 'N'}
                            {block name='productdetails-question-on-item-form-salutation'}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="salutation">
                                        {lang key='salutation' section='account data'}{if $Einstellungen.artikeldetails.produktfrage_abfragen_anrede === 'O'}<span class='text-muted'> - {lang key='optional'}</span>{/if}
                                    </label>
                                    <select class="form-select" name="anrede" id="salutation" autocomplete="honorific-prefix" {if $Einstellungen.artikeldetails.produktfrage_abfragen_anrede === 'Y'}required{/if}>
                                        <option value="" {if $Einstellungen.artikeldetails.produktfrage_abfragen_anrede === 'Y'}disabled{/if} selected>
                                            {if $Einstellungen.artikeldetails.produktfrage_abfragen_anrede === 'Y'}{lang key='salutation' section='account data'}{else}{lang key='noSalutation'}{/if}
                                        </option>
                                        <option value="w" {if isset($Anfrage->cAnrede) && $Anfrage->cAnrede === 'w'}selected="selected"{/if}>{lang key='salutationW'}</option>
                                        <option value="m" {if isset($Anfrage->cAnrede) && $Anfrage->cAnrede === 'm'}selected="selected"{/if}>{lang key='salutationM'}</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        {lang key='fillOut' section='global'}
                                    </div>
                                </div>
                            {/block}
                        {/if}

                        {if $Einstellungen.artikeldetails.produktfrage_abfragen_vorname !== 'N' || $Einstellungen.artikeldetails.produktfrage_abfragen_nachname !== 'N'}
                            {block name='productdetails-question-on-item-form-name'}
                                {if $Einstellungen.artikeldetails.produktfrage_abfragen_vorname !== 'N'}
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="firstName">
                                            {lang key='firstName' section='account data'}{if $Einstellungen.artikeldetails.produktfrage_abfragen_vorname === 'O'}<span class='text-muted'> - {lang key='optional'}</span>{/if}
                                        </label>
                                        <input type="text" class="form-control" name="vorname" value="{if isset($Anfrage->cVorname)}{$Anfrage->cVorname}{/if}" id="firstName" {if $Einstellungen.artikeldetails.produktfrage_abfragen_vorname === 'Y'}required{/if} autocomplete="given-name">
                                        <div class="invalid-feedback">
                                            {lang key='fillOut' section='global'}
                                        </div>
                                    </div>
                                {/if}
                                
                                {if $Einstellungen.artikeldetails.produktfrage_abfragen_nachname !== 'N'}
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="lastName">
                                            {lang key='lastName' section='account data'}{if $Einstellungen.artikeldetails.produktfrage_abfragen_nachname === 'O'}<span class='text-muted'> - {lang key='optional'}</span>{/if}
                                        </label>
                                        <input type="text" class="form-control" name="nachname" value="{if isset($Anfrage->cNachname)}{$Anfrage->cNachname}{/if}" id="lastName" {if $Einstellungen.artikeldetails.produktfrage_abfragen_nachname === 'Y'}required{/if} autocomplete="family-name">
                                        <div class="invalid-feedback">
                                            {lang key='fillOut' section='global'}
                                        </div>
                                    </div>
                                {/if}
                            {/block}
                        {/if}

                        {if $Einstellungen.artikeldetails.produktfrage_abfragen_firma !== 'N'}
                            {block name='productdetails-question-on-item-form-firm'}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="company">
                                        {lang key='firm' section='account data'}{if $Einstellungen.artikeldetails.produktfrage_abfragen_firma === 'O'}<span class='text-muted'> - {lang key='optional'}</span>{/if}
                                    </label>
                                    <input type="text" class="form-control" name="firma" value="{if isset($Anfrage->cFirma)}{$Anfrage->cFirma}{/if}" id="company" {if $Einstellungen.artikeldetails.produktfrage_abfragen_firma === 'Y'}required{/if} autocomplete="organization">
                                    <div class="invalid-feedback">
                                        {lang key='fillOut' section='global'}
                                    </div>
                                </div>
                            {/block}
                        {/if}

                        {block name='productdetails-question-on-item-form-email'}
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="question_email">
                                    {lang key='email' section='account data'}
                                </label>
                                <input type="email" class="form-control" name="email" value="{if isset($Anfrage->cMail)}{$Anfrage->cMail}{/if}" id="question_email" required autocomplete="email">
                                <div class="invalid-feedback">
                                    {lang key='fillOut' section='global'}
                                </div>
                            </div>
                        {/block}
                        
                        {if $Einstellungen.artikeldetails.produktfrage_abfragen_tel !== 'N' || $Einstellungen.artikeldetails.produktfrage_abfragen_mobil !== 'N'}
                            {block name='productdetails-question-on-item-form-mobil'}
                                {if $Einstellungen.artikeldetails.produktfrage_abfragen_tel !== 'N'}
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="tel">
                                            {lang key='tel' section='account data'}{if $Einstellungen.artikeldetails.produktfrage_abfragen_tel === 'O'}<span class='text-muted'> - {lang key='optional'}</span>{/if}
                                        </label>
                                        <input type="tel" class="form-control" name="tel" value="{if isset($Anfrage->cTel)}{$Anfrage->cTel}{/if}" id="tel" {if $Einstellungen.artikeldetails.produktfrage_abfragen_tel === 'Y'}required{/if} autocomplete="home tel">
                                        <div class="invalid-feedback">
                                            {lang key='fillOut' section='global'}
                                        </div>
                                    </div>
                                {/if}

                                {if $Einstellungen.artikeldetails.produktfrage_abfragen_mobil !== 'N'}
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="mobile">
                                            {lang key='mobile' section='account data'}{if $Einstellungen.artikeldetails.produktfrage_abfragen_mobil === 'O'}<span class='text-muted'> - {lang key='optional'}</span>{/if}
                                        </label>
                                        <input type="tel" class="form-control" name="mobil" value="{if isset($Anfrage->cMobil)}{$Anfrage->cMobil}{/if}" id="mobile" {if $Einstellungen.artikeldetails.produktfrage_abfragen_mobil === 'Y'}required{/if} autocomplete="mobile tel">
                                        <div class="invalid-feedback">
                                            {lang key='fillOut' section='global'}
                                        </div>
                                    </div>
                                {/if}
                            {/block}
                        {/if}

                        {if $Einstellungen.artikeldetails.produktfrage_abfragen_fax !== 'N'}
                            {block name='productdetails-question-on-item-form-fax'}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="fax">
                                        {lang key='fax' section='account data'}{if $Einstellungen.artikeldetails.produktfrage_abfragen_fax === 'O'}<span class='text-muted'> - {lang key='optional'}</span>{/if}
                                    </label>
                                    <input type="tel" class="form-control" name="fax" value="{if isset($Anfrage->cFax)}{$Anfrage->cFax}{/if}" id="fax" {if $Einstellungen.artikeldetails.produktfrage_abfragen_fax === 'Y'}required{/if} autocomplete="fax tel">
                                    <div class="invalid-feedback">
                                        {lang key='fillOut' section='global'}
                                    </div>
                                </div>
                            {/block}
                        {/if}
                    </div>
                </div>
            {/block}
            
            {block name='productdetails-question-on-item-form-fieldset-product-question'}
                <div class="mb-4">
                    {block name='productdetails-question-on-item-form-legend-product-question'}
                        <h3 class="h5 mb-3">{lang key='productQuestion' section='productDetails'}</h3>
                    {/block}
                    
                    {block name='productdetails-question-on-item-form-textarea'}
                        <div class="mb-3">
                            <label class="form-label" for="question">
                                {lang key='question' section='productDetails'}
                            </label>
                            <textarea class="form-control {if isset($fehlendeAngaben_fragezumprodukt.nachricht) && $fehlendeAngaben_fragezumprodukt.nachricht > 0}is-invalid{/if}" 
                                name="nachricht" id="question" rows="5" required>{if isset($Anfrage)}{$Anfrage->cNachricht}{/if}</textarea>
                            <div class="invalid-feedback">
                                {lang key='fillOut' section='global'}
                            </div>
                        </div>
                    {/block}
                    
                    {block name='productdetails-question-on-item-form-include-checkbox'}
                        {if isset($fehlendeAngaben_fragezumprodukt)}
                            {include file='snippets/checkbox.tpl' nAnzeigeOrt=$smarty.const.CHECKBOX_ORT_FRAGE_ZUM_PRODUKT cPlausi_arr=$fehlendeAngaben_fragezumprodukt cPost_arr=null}
                        {else}
                            {include file='snippets/checkbox.tpl' nAnzeigeOrt=$smarty.const.CHECKBOX_ORT_FRAGE_ZUM_PRODUKT cPlausi_arr=null cPost_arr=null}
                        {/if}
                    {/block}
                </div>
            {/block}
            
            {if (!isset($smarty.session.bAnti_spam_already_checked) || $smarty.session.bAnti_spam_already_checked !== true) &&
                isset($Einstellungen.artikeldetails.produktfrage_abfragen_captcha) && $Einstellungen.artikeldetails.produktfrage_abfragen_captcha !== 'N' && JTL\Session\Frontend::getCustomer()->getID() === 0}
                {block name='productdetails-question-on-item-form-captcha'}
                    <div class="mb-4 {if !empty($fehlendeAngaben_fragezumprodukt.captcha)}is-invalid{/if}">
                        {captchaMarkup getBody=true}
                    </div>
                {/block}
            {/if}

            {if $Einstellungen.artikeldetails.artikeldetails_fragezumprodukt_anzeigen === 'P' && isset($oSpezialseiten_arr[$smarty.const.LINKTYP_DATENSCHUTZ])}
                {block name='productdetails-question-on-item-form-privacy'}
                    <p class="fs-sm text-muted mb-4">
                        <a href="{$oSpezialseiten_arr[$smarty.const.LINKTYP_DATENSCHUTZ]->getURL()}" class="text-decoration-underline" target="_blank">
                            {lang key='privacyNotice'}
                        </a>
                    </p>
                {/block}
            {/if}

            {block name='productdetails-question-on-item-form-submit'}
                <input type="hidden" name="a" value="{$Artikel->kArtikel}">
                <input type="hidden" name="show" value="1">
                <input type="hidden" name="fragezumprodukt" value="1">
                <button type="submit" class="btn btn-primary" name="submit" value="1">
                    <i class="ci-send me-2"></i>{lang key='sendQuestion' section='productDetails'}
                </button>
            {/block}
        </form>
    {/block}
{/block}