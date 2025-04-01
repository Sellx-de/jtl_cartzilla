{block name='contact-index'}
    {block name='contact-index-include-header'}
        {include file='layout/header.tpl'}
    {/block}
    {block name='contact-index-content'}
        <main class="content-wrapper">
            <!-- Page Title with Background Image -->
            <section class="position-relative bg-body-tertiary py-4">
                <img src="templates/sellx/themes/base/images/contact/title-bg.png"
                     class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip"
                     alt="{lang key='contact' section='contact'}">
                <div class="container position-relative z-2 py-4 py-md-5 my-lg-3 my-xl-4 my-xxl-5">
                    <div class="row pt-lg-2 pb-2 pb-sm-3 pb-lg-4">
                        <div class="col-9 col-md-8 col-lg-6">
                            <h1 class="display-4 mb-lg-4">{$Spezialcontent->titel|default:{lang key='contact' section='contact'}}</h1>
                            <p class="mb-0">{lang key='contactInfo' section='contact'}</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Info Section -->
            <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5 mb-n3">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 pt-lg-2 pt-xl-0">

                    <!-- Store Location -->
<div class="col">
    <div class="d-flex align-items-center">
        <i class="ci-map-pin fs-lg text-dark-emphasis"></i>
        <h3 class="h6 ps-2 ms-1 mb-0">{lang key='store_location' section='contact'}</h3>
    </div>
    <hr class="text-dark-emphasis opacity-50 my-3 my-md-4">
    <ul class="list-unstyled">
        <li>{lang key='store_address' section='contact'}</li>
    </ul>
</div>

                    <!-- Phones -->
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <i class="ci-phone-outgoing fs-lg text-dark-emphasis"></i>
                            <h3 class="h6 ps-2 ms-1 mb-0">{lang key='call_us' section='contact'}</h3>
                        </div>
                        <hr class="text-dark-emphasis opacity-50 my-3 my-md-4">
                        <ul class="list-unstyled">
                            <li>{lang key='customers' section='contact'}</li>
                        </ul>
                    </div>

                    <!-- Emails -->
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <i class="ci-mail fs-lg text-dark-emphasis"></i>
                            <h3 class="h6 ps-2 ms-1 mb-0">{lang key='send_message' section='contact'}</h3>
                        </div>
                        <hr class="text-dark-emphasis opacity-50 my-3 my-md-4">
                        <ul class="list-unstyled">
                            <li>{lang key='email' section='contact'}</li>
                        </ul>
                    </div>

                    <!-- Working Hours -->
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <i class="ci-clock fs-lg text-dark-emphasis"></i>
                            <h3 class="h6 ps-2 ms-1 mb-0">{lang key='working_hours' section='contact'}</h3>
                        </div>
                        <hr class="text-dark-emphasis opacity-50 my-3 my-md-4">
                        <ul class="list-unstyled">
                            <li>{lang key='opening_hours' section='contact'}</li>
                        </ul>
                    </div>
                </div>
            </section>

 <!-- Contact Form Section -->
            <section class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card border-0 shadow-sm p-4">
                            <h2 class="h5">{lang key='contactForm' section='contact'}</h2>
                            {form name="contact" action="{get_static_route id='kontakt.php'}" method="post" class="contact-form jtl-validate"}

                                {block name='contact-index-name'}
                                    <div class="row g-3">
                                        {if $Einstellungen.kontakt.kontakt_abfragen_vorname !== 'N'}
                                            <div class="col-md-6">
                                                <label for="firstName" class="form-label">{lang key='firstName' section='account data'}</label>
                                                <input type="text" class="form-control input-small" id="firstName" name="vorname" value="{$Vorgaben->cVorname}" required>
                                            </div>
                                        {/if}
                                        {if $Einstellungen.kontakt.kontakt_abfragen_nachname !== 'N'}
                                            <div class="col-md-6">
                                                <label for="lastName" class="form-label">{lang key='lastName' section='account data'}</label>
                                                <input type="text" class="form-control input-small" id="lastName" name="nachname" value="{$Vorgaben->cNachname}" required>
                                            </div>
                                        {/if}
                                    </div>
                                {/block}

                                {block name='contact-index-email'}
                                    <div class="mt-3">
                                        <label for="email" class="form-label">{lang key='email' section='account data'}</label>
                                        <input type="email" class="form-control input-small" id="email" name="email" value="{$Vorgaben->cMail}" required>
                                    </div>
                                {/block}

                                {block name='contact-index-subject'}
                                    <div class="mt-3">
                                        <label for="subject" class="form-label">{lang key='subject' section='contact'}</label>
                                        <select class="form-select input-small" id="subject" name="subject" required>
                                            <option value="" disabled selected>{lang key='subject' section='contact'}</option>
                                            {foreach $betreffs as $betreff}
                                                <option value="{$betreff->kKontaktBetreff}" {if $Vorgaben->kKontaktBetreff == $betreff->kKontaktBetreff}selected{/if}>
                                                    {$betreff->AngezeigterName}
                                                </option>
                                            {/foreach}
                                        </select>
                                    </div>
                                {/block}

                                {block name='contact-index-message'}
                                    <div class="mt-3">
                                        <label for="message" class="form-label">{lang key='message' section='contact'}</label>
                                        <textarea class="form-control input-large" id="message" name="nachricht" rows="10" style="min-height: 150px !important;" required>{$Vorgaben->cNachricht}</textarea>
                                    </div>
                                {/block}

                                {if (!isset($smarty.session.bAnti_spam_already_checked) || $smarty.session.bAnti_spam_already_checked !== true)}
                                    {block name='contact-index-captcha'}
                                        <div class="mt-4">
                                            {captchaMarkup getBody=true}
                                        </div>
                                    {/block}
                                {/if}

                                {block name='contact-index-submit'}
                                    <div class="mt-4 text-start">
                                        <button type="submit" class="btn btn-primary btn-sm">{lang key='sendMessage' section='contact'}</button>
                                    </div>
                                {/block}

                            {/form}
                        </div>
                    </div>
                </div>
            </section>
        </main>
    {/block}
{/block}









    {block name='contact-index-footer'}
        {include file='layout/footer.tpl'}
    {/block}
{/block}
