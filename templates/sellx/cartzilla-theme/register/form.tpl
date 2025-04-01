{block name='register-form'}
    {form action="{get_static_route id='registrieren.php'}" class="needs-validation register-form" slide=true novalidate=true}
        {block name='register-form-content'}
            {block name='register-form-include-customer-account'}
                {include file='register/form/customer_account.tpl'}
            {/block}
            
            {if isset($checkout) && $checkout === 1}
                {block name='register-form-hr'}
                    <hr class="my-4">
                {/block}
                {block name='register-form-include-inc-shipping-address'}
                    {include file='checkout/inc_shipping_address.tpl'}
                {/block}
            {/if}
            
            {block name='register-form-submit'}
                {if isset($oSpezialseiten_arr[$smarty.const.LINKTYP_DATENSCHUTZ])}
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="privacy-policy" required>
                        <label class="form-check-label" for="privacy-policy">
                            {lang key='privacyConsent'} 
                            <a href="{$oSpezialseiten_arr[$smarty.const.LINKTYP_DATENSCHUTZ]->getURL()}" class="popup text-decoration-underline">
                                {lang key='privacyNotice'}
                            </a>
                        </label>
                        <div class="invalid-feedback">{lang key='privacyConsentRequired'}</div>
                    </div>
                {/if}
                
                {input type="hidden" name="checkout" value=$checkout|default:''}
                {input type="hidden" name="form" value="1"}
                {input type="hidden" name="editRechnungsadresse" value=$editRechnungsadresse}
                {opcMountPoint id='opc_before_submit'}
                
                {block name='register-form-submit-button'}
                    <button type="submit" class="btn btn-lg btn-primary w-100 submit_once">
                        {lang key='sendCustomerData' section='account data'}
                    </button>
                {/block}
            {/block}
        {/block}
    {/form}
{/block}
