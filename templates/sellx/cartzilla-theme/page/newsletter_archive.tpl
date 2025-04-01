{block name='page-newsletter-archive'}
    {opcMountPoint id='opc_before_newsletter' inContainer=false}
    
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item">
                            <a class="text-nowrap" href="{$ShopURL}">
                                <i class="ci-home"></i>{lang key='home'}
                            </a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">
                            {lang key='newsletterhistory'}
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">{lang key='newsletterhistory'}</h1>
            </div>
        </div>
    </div>
    
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="card border-0 shadow-lg">
            <div class="card-body p-4 p-xl-5">
                {block name='page-newsletter-archive-content'}
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>{lang key='newsletterhistorysubject'}</th>
                                    <th>{lang key='newsletterhistorydate'}</th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $oNewsletterHistory_arr as $oNewsletterHistory}
                                    <tr>
                                        <td>
                                            <a href="{$oNewsletterHistory->cURLFull}" class="text-decoration-none">
                                                <i class="ci-mail me-2 text-muted"></i>{$oNewsletterHistory->cBetreff}
                                            </a>
                                        </td>
                                        <td>
                                            <span class="text-muted fs-sm">
                                                <i class="ci-time me-2"></i>{$oNewsletterHistory->Datum}
                                            </span>
                                        </td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    </div>
                {/block}
            </div>
        </div>
    </div>
{/block}
