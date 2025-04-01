{block name='account-delete-account'}
    {block name='heading'}
        <div class="d-flex align-items-center justify-content-between mb-4 pb-2 border-bottom">
            <h5 class="mb-0">{lang key='deleteAccount' section='login'}</h5>
        </div>
    {/block}
    
    {block name='account-delete-account-alert'}
        <div class="alert alert-danger d-flex mb-4">
            <i class="ci-security-close fs-lg me-2"></i>
            <div>{lang key='reallyDeleteAccount' section='login'}</div>
        </div>
    {/block}
    
    {block name='account-delete-account-form'}
        {form id="delete_account" action="{get_static_route id='jtl.php'}" method="post" slide=true}
            {block name='account-delete-account-form-submit'}
                {input type="hidden" name="del_acc" value="1"}
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <a class="btn btn-outline-primary mt-3 mt-sm-0" href="{get_static_route id='jtl.php'}">
                        <i class="ci-arrow-left me-1"></i>{lang key='back'}
                    </a>
                    <button type="submit" class="btn btn-danger mt-3 mt-sm-0">
                        <i class="ci-trash me-1"></i>{lang key='deleteAccount' section='login'}
                    </button>
                </div>
            {/block}
        {/form}
    {/block}
{/block}
