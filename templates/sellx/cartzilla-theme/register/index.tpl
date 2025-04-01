{block name='register-index'}
    {block name='register-index-header'}
        {include file='layout/header.tpl'}
    {/block}

    {block name='register-index-content'}
        <div class="d-lg-flex">
            <!-- Registration form + Footer -->
            <div class="d-flex flex-column min-vh-100 w-100 py-4 mx-auto me-lg-5" style="max-width: 526px">
                <!-- Logo -->
                <header class="navbar px-0 pb-4 mt-n2 mt-sm-0 mb-2 mb-md-3 mb-lg-4">
                    <a href="{$ShopURL}" class="navbar-brand pt-0">
                        <span class="d-flex flex-shrink-0 text-primary me-2">
                            <img src="{$ShopLogoURL}" width="36" height="36">
                        </span>
                        {$Einstellungen.global.global_shopname}
                    </a>
                </header>

                {if $step === 'formular'}
                    {if isset($checkout) && $checkout == 1}
                        {block name='register-index-include-inc-steps'}
                            {include file='checkout/inc_steps.tpl'}
                        {/block}
                        {block name='register-index-heading'}
                            {if JTL\Session\Frontend::getCustomer()->getID() > 0}
                                {lang key='changeBillingAddress' section='account data' assign='panel_heading'}
                            {else}
                                {lang key='createNewAccount' section='account data' assign='panel_heading'}
                            {/if}
                        {/block}
                    {/if}
                    
                    {block name='register-index-include-extension'}
                        {include file='snippets/extension.tpl'}
                    {/block}
                    
                    {if !isset($checkout) && JTL\Session\Frontend::getCustomer()->getID() === 0}
                        {opcMountPoint id='opc_before_heading'}
                        {block name='register-index-new-customer-heading'}
                            <h1 class="h2 mt-auto">{lang key='createNewAccount' section='account data'}</h1>
                        {/block}
                    {/if}
                    
                    <div class="nav fs-sm mb-4">
                        {lang key='alreadyHaveAccount'}
                        <a class="nav-link text-decoration-underline p-0 ms-2" href="{get_static_route id='jtl.php' params=['bestellvorgang' => 1]}">
                            {lang key='login'}
                        </a>
                    </div>
                    
                    {block name='register-index-alert'}
                        {if !empty($fehlendeAngaben)}
                            {alert variant="danger"}{lang key='mandatoryFieldNotification' section='errorMessages'}{/alert}
                        {/if}
                        {if isset($fehlendeAngaben.email_vorhanden) && $fehlendeAngaben.email_vorhanden == 1}
                            {alert variant="danger"}{lang key='emailAlreadyExists' section='account data'}{/alert}
                        {/if}
                        {if isset($fehlendeAngaben.formular_zeit) && $fehlendeAngaben.formular_zeit == 1}
                            {alert variant="danger"}{lang key='formToFast' section='account data'}{/alert}
                        {/if}
                    {/block}
                    
                    {block name='register-index-new-customer'}
                        <div id="panel-register-form">
                            {block name='register-index-include-form'}
                                {opcMountPoint id='opc_before_form'}
                                {include file='register/form.tpl'}
                                {opcMountPoint id='opc_after_form'}
                            {/block}
                        </div>
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
                {elseif $step === 'formular eingegangen'}
                    {block name='register-index-account-created'}
                        {opcMountPoint id='opc_before_heading' inContainer=false}
                        <div class="text-center">
                            <div class="mb-4 text-success">
                                <i class="ci-check-circle display-3"></i>
                            </div>
                            <h1 class="h3 mb-4">{lang key='accountCreated'}</h1>
                            {opcMountPoint id='opc_after_heading'}
                            <p class="fs-md mb-4">{lang key='activateAccountDesc'}</p>
                            <a class="btn btn-primary" href="{$ShopURL}">{lang key='backToHomepage'}</a>
                        </div>
                        
                        <!-- Footer -->
                        <footer class="mt-auto">
                            <div class="nav mb-4">
                                <a class="nav-link text-decoration-underline p-0" href="{get_static_route id='kontakt.php'}">{lang key='contact'}</a>
                            </div>
                            <p class="fs-xs mb-0">
                                &copy; {$smarty.now|date_format:'%Y'} {$Einstellungen.global.global_shopname}. {lang key='allRightsReserved'}.
                            </p>
                        </footer>
                    {/block}
                {/if}
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

    {block name='register-index-footer'}
        {include file='layout/footer.tpl'}
    {/block}
{/block}
