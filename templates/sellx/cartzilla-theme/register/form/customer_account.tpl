{block name='register-form-customer-account'}
    {block name='register-form-customer-account-include-inc-billing-address-form'}
        {include file='checkout/inc_billing_address_form.tpl'}
    {/block}
    {block name='register-form-customer-account-content'}
        {if !$editRechnungsadresse}
            <div class="border-top my-4"></div>
            <div class="row">
                {block name='register-form-customer-account-unreg'}
                    <div class="col-12 col-md-4">
                        {if !JTL\Session\Frontend::getCart()->hasDigitalProducts() && isset($checkout)
                            && $Einstellungen.kaufabwicklung.bestellvorgang_unregistriert === 'Y'}
                            <div class="form-check mb-4">
                                <input type="hidden" name="unreg_form" value="1">
                                <input class="form-check-input" type="checkbox" id="checkout_create_account_unreg"
                                    name="unreg_form"
                                    value="0"
                                    {if $unregForm !== 1 && !empty($fehlendeAngaben)}checked{/if}
                                    data-bs-toggle="collapse" data-bs-target="#create_account_data">
                                <label class="form-check-label" for="checkout_create_account_unreg">
                                    {lang key='createNewAccount' section='account data'}
                                </label>
                            </div>
                        {else}
                            <input type="hidden" name="unreg_form" value="0">
                        {/if}
                    </div>
                {/block}
                {block name='register-form-customer-account-password'}
                    <div class="col-12 col-md-8">
                        <div id="create_account_data" class="collapse {if empty($checkout)
                        || JTL\Session\Frontend::getCart()->hasDigitalProducts()
                        || $Einstellungen.kaufabwicklung.bestellvorgang_unregistriert === 'N'
                        || ($unregForm !== 1 && !empty($fehlendeAngaben))}show{/if}">
                            <div class="row">
                                {block name='register-form-customer-account-password-first'}
                                    <div class="col-12 col-md-6">
                                        <div class="mb-3 {if isset($fehlendeAngaben.pass_zu_kurz) || isset($fehlendeAngaben.pass_ungleich) || isset($fehlendeAngaben.pass_zu_lang)} has-error{/if}">
                                            <label class="form-label" for="password">
                                                {lang key='password' section='account data'}
                                            </label>
                                            <div class="password-toggle">
                                                <input type="password"
                                                    class="form-control"
                                                    id="password"
                                                    required
                                                    value=""
                                                    name="pass"
                                                    aria-autocomplete="none"
                                                    autocomplete="new-password"
                                                    maxlength="255"
                                                    {if $unregForm === 1}disabled{/if}
                                                >
                                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                                    <input class="password-toggle-check" type="checkbox">
                                                    <span class="password-toggle-indicator"></span>
                                                </label>
                                            </div>
                                            {if isset($fehlendeAngaben.pass_zu_kurz)}
                                                <div class="invalid-feedback d-block">
                                                    {lang key='passwordTooShort' section='account data' printf=$Einstellungen.kunden.kundenregistrierung_passwortlaenge}
                                                </div>
                                            {/if}
                                            {if isset($fehlendeAngaben.pass_zu_lang)}
                                                <div class="invalid-feedback d-block">
                                                    {lang key='passwordTooLong' section='account data'}
                                                </div>
                                            {/if}
                                        </div>
                                    </div>
                                {/block}
                                {block name='register-form-customer-account-password-repeat'}
                                    <div class="col-12 col-md-6">
                                        <div class="mb-3 {if isset($fehlendeAngaben.pass_ungleich)} has-error{/if}">
                                            <label class="form-label" for="password2">
                                                {lang key='passwordRepeat' section='account data'}
                                            </label>
                                            <div class="password-toggle">
                                                <input type="password"
                                                    class="form-control"
                                                    id="password2"
                                                    required
                                                    value=""
                                                    name="pass2"
                                                    aria-autocomplete="none"
                                                    autocomplete="new-password"
                                                    maxlength="255"
                                                    {if $unregForm === 1}disabled{/if}
                                                >
                                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                                    <input class="password-toggle-check" type="checkbox">
                                                    <span class="password-toggle-indicator"></span>
                                                </label>
                                            </div>
                                            {if isset($fehlendeAngaben.pass_ungleich)}
                                                <div class="invalid-feedback d-block">
                                                    {lang key='passwordsMustBeEqual' section='account data'}
                                                </div>
                                            {/if}
                                        </div>
                                    </div>
                                {/block}
                            </div>
                        </div>
                    </div>
                {/block}
            </div>
        {/if}
    {/block}
{/block}