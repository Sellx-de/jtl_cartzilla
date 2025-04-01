{block name='account-login'}
    <div class="d-lg-flex">
        <!-- Login form + Footer -->
        <div class="d-flex flex-column min-vh-100 w-100 py-4 mx-auto me-lg-5" style="max-width: 416px">
            <!-- Logo -->
            <header class="navbar px-0 pb-4 mt-n2 mt-sm-0 mb-2 mb-md-3 mb-lg-4">
                <a href="{$ShopURL}" class="navbar-brand pt-0">
                    <span class="d-flex flex-shrink-0 text-primary me-2">
                        <img src="{$ShopLogoURL}" width="36" height="36">
                    </span>
                    {$Einstellungen.global.global_shopname}
                </a>
            </header>

            {block name='account-login-heading'}
                <h1 class="h2 mt-auto">{if !empty($oRedirect->cName)}{$oRedirect->cName}{else}{lang key='loginTitle' section='login'}{/if}</h1>
            {/block}
            
            <div class="nav fs-sm mb-4">
                {lang key='newHere'}
                <a class="nav-link text-decoration-underline p-0 ms-2" href="{get_static_route id='registrieren.php'}">
                    {lang key='registerNow'}
                </a>
            </div>

            {if !$bCookieErlaubt}
                {block name='account-login-alert-no-cookie'}
                    {alert variant="danger" class="d-none" id="no-cookies-warning"}
                        <strong>{lang key='noCookieHeader' section='errorMessages'}</strong>
                        <p>
                            {lang key='noCookieDesc' section='errorMessages' assign='noCookieDesc'}
                            {sprintf($noCookieDesc, $ShopURL)}
                        </p>
                    {/alert}
                {/block}
                {block name='account-login-script-no-cookie'}
                    {inline_script}<script>
                       $(function() {
                           if (navigator.cookieEnabled === false) {
                               $('#no-cookies-warning').show();
                           }
                       });
                    </script>{/inline_script}
                {/block}
            {elseif !$alertNote}
                {block name='account-login-alert'}
                    {alert variant="info"}
                        {lang key='loginDesc' section='login'}
                        {if isset($oRedirect->cName) && $oRedirect->cName}{lang key='redirectDesc1'} {$oRedirect->cName} {lang key='redirectDesc2'}.{/if}
                    {/alert}
                {/block}
            {/if}
            
            {block name='account-login-form'}
                {opcMountPoint id='opc_before_login'}
                {form id="login_form" action="{get_static_route id='jtl.php'}" method="post" role="form" class="needs-validation" slide=true novalidate=true}
                    {if $showTwoFAForm|default:false}
                        {include file='snippets/two_fa_login.tpl'}
                    {else}
                        <div class="position-relative mb-4">
                            <input type="email" class="form-control form-control-lg" name="email" placeholder="{lang key='emailadress'}" required autocomplete="email">
                            <div class="invalid-tooltip bg-transparent py-0">{lang key='fillOut'}</div>
                        </div>
                        <div class="mb-4">
                            <div class="password-toggle">
                                <input type="password" class="form-control form-control-lg" name="passwort" placeholder="{lang key='password' section='account data'}" required autocomplete="current-password">
                                <div class="invalid-tooltip bg-transparent py-0">{lang key='fillOut'}</div>
                                <label class="password-toggle-button fs-lg" aria-label="{lang key='showPassword'}">
                                    <input type="checkbox" class="btn-check">
                                </label>
                            </div>
                        </div>

                        {if isset($showLoginCaptcha) && $showLoginCaptcha}
                            {block name='account-login-form-submit-captcha'}
                                <div class="mb-4">
                                    {captchaMarkup getBody=true}
                                </div>
                            {/block}
                        {/if}

                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check me-2">
                                <input type="checkbox" class="form-check-input" id="remember-me">
                                <label for="remember-me" class="form-check-label">{lang key='rememberLogin'}</label>
                            </div>
                            <div class="nav">
                                <a class="nav-link animate-underline p-0" href="{get_static_route id='pass.php'}">
                                    <span class="animate-target">{lang key='forgotPassword'}</span>
                                </a>
                            </div>
                        </div>

                        {block name='account-login-form-submit'}
                            <input type="hidden" name="login" value="1">
                            {if !empty($oRedirect->cURL)}
                                {foreach $oRedirect->oParameter_arr as $oParameter}
                                    <input type="hidden" name="{$oParameter->Name}" value="{$oParameter->Wert}">
                                {/foreach}
                                <input type="hidden" name="r" value="{$oRedirect->nRedirect}">
                                <input type="hidden" name="cURL" value="{$oRedirect->cURL}">
                            {/if}
                            {block name='account-login-form-submit-button'}
                                <button type="submit" value="1" class="btn btn-lg btn-primary w-100">
                                    {lang key='login' section='checkout'}
                                </button>
                            {/block}
                        {/block}
                    {/if}
                {/form}
            {/block}

            <!-- Footer -->
            <footer class="mt-auto">
                <div class="nav mb-4">
                    <a class="nav-link text-decoration-underline p-0" href="{get_static_route id='kontakt.php'}">{lang key='contact'}</a>
                </div>
                <p class="fs-xs mb-0">
                    &copy; {$smarty.now|date_format:'%Y'} {$Einstellungen.global.global_shopname}. {lang key='allRightsReserved'}.
                </p>
            </footer>
        </div>

        <!-- Cover image visible on screens > 992px wide (lg breakpoint) -->
        <div class="d-none d-lg-block w-100 py-2 ms-auto" style="max-width: 900px;">
            <div class="d-flex flex-column justify-content-center align-items-center h-100 rounded-5 overflow-hidden">
                <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark" style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
                <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark" style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
                <div class="ratio position-relative z-2" style="--cz-aspect-ratio: calc(1030 / 1032 * 100%); max-width: 500px; margin-top: -20px;">
                    <img src="{$ShopLogoURL}" alt="{$Einstellungen.global.global_shopname}" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
{/block}