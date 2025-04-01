{block name='account-change-password'}
    {block name='account-change-password-heading'}
        <div class="d-flex align-items-center justify-content-between mb-4 pb-2 border-bottom">
            <h5 class="mb-0">{lang key='changePassword' section='login'}</h5>
        </div>
    {/block}
    
    {block name='account-change-password-change-password-form'}
        {block name='account-change-password-alert'}
            <div class="alert alert-info d-flex">
                <i class="ci-announcement fs-lg me-2"></i>
                <div>{lang key='changePasswordDesc' section='login'}</div>
            </div>
        {/block}
        
        {block name='account-change-password-form-password'}
            {form id="password" action="{get_static_route id='jtl.php'}" method="post" class="needs-validation" slide=true novalidate=true}
                {block name='account-change-password-form-password-content'}
                    <div class="row gx-4 gy-3">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="currentPassword">{lang key='currentPassword' section='login'}<span class="text-danger">*</span></label>
                                <div class="password-toggle">
                                    <input class="form-control" type="password" name="altesPasswort" id="currentPassword" required autocomplete="current-password">
                                    <label class="password-toggle-btn" aria-label="{lang key='showPassword'}">
                                        <input class="password-toggle-check" type="checkbox">
                                        <span class="password-toggle-indicator"></span>
                                    </label>
                                    <div class="invalid-feedback">{lang key='fillOut'}</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="newPassword">{lang key='newPassword' section='login'}<span class="text-danger">*</span></label>
                                <div class="password-toggle">
                                    <input class="form-control" type="password" name="neuesPasswort1" id="newPassword" required autocomplete="new-password">
                                    <label class="password-toggle-btn" aria-label="{lang key='showPassword'}">
                                        <input class="password-toggle-check" type="checkbox">
                                        <span class="password-toggle-indicator"></span>
                                    </label>
                                    <div class="invalid-feedback">{lang key='fillOut'}</div>
                                </div>
                                {block name='account-change-password-include-password-check'}
                                    {include file='snippets/password_check.tpl' id='#newPassword' loadScript=true}
                                {/block}
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="newPasswordRpt">{lang key='newPasswordRpt' section='login'}<span class="text-danger">*</span></label>
                                <div class="password-toggle">
                                    <input class="form-control" type="password" name="neuesPasswort2" id="newPasswordRpt" required autocomplete="new-password">
                                    <label class="password-toggle-btn" aria-label="{lang key='showPassword'}">
                                        <input class="password-toggle-check" type="checkbox">
                                        <span class="password-toggle-indicator"></span>
                                    </label>
                                    <div class="invalid-feedback">{lang key='fillOut'}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {block name='account-change-password-form-submit'}
                        <div class="d-flex flex-wrap justify-content-between align-items-center mt-4">
                            <a class="btn btn-outline-primary mt-3 mt-sm-0" href="{get_static_route id='jtl.php'}">
                                <i class="ci-arrow-left me-1"></i>{lang key='back'}
                            </a>
                            {input type="hidden" name="pass_aendern" value="1"}
                            <button type="submit" class="btn btn-primary mt-3 mt-sm-0">
                                <i class="ci-key me-1"></i>{lang key='changePassword' section='login'}
                            </button>
                        </div>
                    {/block}
                {/block}
            {/form}
        {/block}
    {/block}
{/block}
