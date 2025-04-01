{block name='register-form-customer-login'}
    {block name='register-form-customer-login-email'}
        <div class="mb-3">
            <label class="form-label" for="login_email">{lang key='email' section='account data'}</label>
            <input type="email"
                name="email"
                id="login_email"
                class="form-control"
                placeholder="{lang key='emailPlaceholder'}"
                required
                autocomplete="email"
                value=""
            >
            <div class="invalid-feedback">{lang key='emailRequired'}</div>
        </div>
    {/block}
    {block name='register-form-customer-login-password'}
        <div class="mb-3">
            <label class="form-label" for="login_password">{lang key='password' section='account data'}</label>
            <div class="password-toggle">
                <input type="password"
                    name="passwort"
                    id="login_password"
                    class="form-control"
                    placeholder="{lang key='passwordPlaceholder'}"
                    required
                    autocomplete="current-password"
                    value=""
                >
                <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox">
                    <span class="password-toggle-indicator"></span>
                </label>
                <div class="invalid-feedback">{lang key='passwordRequired'}</div>
            </div>
        </div>
    {/block}
    {if isset($showLoginCaptcha) && $showLoginCaptcha}
        {block name='register-form-customer-login-captcha'}
            <div class="mb-3">
                <div class="captcha-wrapper">
                    {captchaMarkup getBody=true}
                </div>
            </div>
        {/block}
    {/if}

    {block name='register-form-customer-login-submit'}
        <div class="mb-3">
            <input type="hidden" name="login" value="1">
            <input type="hidden" name="wk" value="{if isset($one_step_wk)}{$one_step_wk}{else}0{/if}">
            {if !empty($oRedirect->cURL)}
                {foreach $oRedirect->oParameter_arr as $oParameter}
                    <input type="hidden" name="{$oParameter->Name}" value="{$oParameter->Wert}">
                {/foreach}
                <input type="hidden" name="r" value="{$oRedirect->nRedirect}">
                <input type="hidden" name="cURL" value="{$oRedirect->cURL}">
            {/if}
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="mb-3">
                    {block name='register-form-customer-forgot'}
                        <a class="fs-sm" href="{get_static_route id='pass.php'}">
                            {lang key='forgotPassword'}
                        </a>
                    {/block}
                </div>
                <div class="mb-3">
                    {block name='register-form-customer-submit'}
                        <button type="submit" class="btn btn-primary">
                            <i class="ci-sign-in me-2 ms-n21"></i>{lang key='login' section='checkout'}
                        </button>
                    {/block}
                </div>
            </div>
        </div>
    {/block}
{/block}
