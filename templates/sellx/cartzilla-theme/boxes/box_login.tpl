{block name='boxes-box-login'}
    <div id="sidebox{$oBox->getID()}" class="card mb-4">
        {block name='boxes-box-login-content'}
            {$customer = JTL\Session\Frontend::getCustomer()}
            {block name='boxes-box-login-title'}
                <div class="card-header">
                    <h3 class="fs-base mb-0">
                        {if $customer->getID() === 0}
                            <i class="ci-user text-primary me-2"></i>{lang key='login'}
                        {else}
                            <i class="ci-user-circle text-primary me-2"></i>{lang key='hello'}, {$customer->cVorname}
                        {/if}
                    </h3>
                </div>
            {/block}
            
            <div class="card-body">
                {if $customer->getID() === 0}
                    {block name='boxes-box-login-form'}
                        {form action="{get_static_route id='jtl.php' secure=true}" method="post" class="needs-validation" slide=true novalidate=true}
                            {block name='boxes-box-login-form-data'}
                                {input type="hidden" name="login" value="1"}
                                <div class="mb-3">
                                    <label class="form-label" for="email-box-login-{$oBox->getID()}">{lang key='emailadress'}</label>
                                    <input class="form-control" type="email" id="email-box-login-{$oBox->getID()}" name="email" required>
                                    <div class="invalid-feedback">{lang key='fillOut'}</div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="password-box-login-{$oBox->getID()}">{lang key='password' section='account data'}</label>
                                    <div class="password-toggle">
                                        <input class="form-control" type="password" id="password-box-login-{$oBox->getID()}" name="passwort" required>
                                        <label class="password-toggle-btn" aria-label="{lang key='showPassword'}">
                                            <input class="password-toggle-check" type="checkbox">
                                            <span class="password-toggle-indicator"></span>
                                        </label>
                                        <div class="invalid-feedback">{lang key='fillOut'}</div>
                                    </div>
                                </div>
                            {/block}
                            
                            {if isset($showLoginCaptcha) && $showLoginCaptcha}
                                {block name='boxes-box-login-form-captcha'}
                                    <div class="mb-3">
                                        {captchaMarkup getBody=true}
                                    </div>
                                {/block}
                            {/if}
                            
                            {block name='boxes-box-login-form-submit'}
                                {if !empty($oRedirect->cURL)}
                                    {foreach $oRedirect->oParameter_arr as $oParameter}
                                        {input type="hidden" name=$oParameter->Name value=$oParameter->Wert}
                                    {/foreach}
                                    {input type="hidden" name="r" value=$oRedirect->nRedirect}
                                    {input type="hidden" name="cURL" value=$oRedirect->cURL}
                                {/if}
                                <button type="submit" name="speichern" value="1" class="btn btn-primary w-100">
                                    <i class="ci-sign-in me-2"></i>{lang key='login' section='checkout'}
                                </button>
                            {/block}
                            
                            {block name='boxes-box-login-form-links'}
                                <div class="d-flex flex-wrap justify-content-between mt-3">
                                    <a class="fs-sm" href="{get_static_route id='pass.php' secure=true}">
                                        {lang key='forgotPassword'}
                                    </a>
                                    <a class="fs-sm" href="{get_static_route id='registrieren.php'}">
                                        {lang key='registerNow'}
                                    </a>
                                </div>
                            {/block}
                        {/form}
                    {/block}
                {else}
                    {block name='boxes-box-login-actions'}
                        <div class="d-grid gap-2">
                            <a href="{get_static_route id='jtl.php'}" class="btn btn-outline-primary">
                                <i class="ci-user me-2"></i>{lang key='myAccount'}
                            </a>
                            <a href="{get_static_route id='jtl.php'}?logout=1&token={$smarty.session.jtl_token}" class="btn btn-primary">
                                <i class="ci-sign-out me-2"></i>{lang key='logOut'}
                            </a>
                        </div>
                    {/block}
                {/if}
            </div>
        {/block}
    </div>
{/block}
