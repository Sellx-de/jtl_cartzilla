{block name='page-livesearch'}
    {if count($LivesucheTop) > 0 || count($LivesucheLast) > 0}
        {opcMountPoint id='opc_before_livesearch' inContainer=false}
        
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
                                {lang key='livesearch'}
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                    <h1 class="h3 text-light mb-0">{lang key='livesearch'}</h1>
                </div>
            </div>
        </div>
        
        <div class="container pb-5 mb-2 mb-md-4">
            <div class="row">
                {block name='page-livesearch-top-searches'}
                    <div class="col-lg-6 mb-4">
                        <div class="card border-0 shadow-lg h-100">
                            <div class="card-header">
                                <h2 class="h5 mb-0">
                                    <i class="ci-search text-primary me-2"></i>
                                    {lang key='topsearch'}{$Einstellungen.sonstiges.sonstiges_livesuche_all_top_count}
                                </h2>
                            </div>
                            <div class="card-body">
                                {if count($LivesucheTop) > 0}
                                    <div class="list-group list-group-flush">
                                        {foreach $LivesucheTop as $suche}
                                            <a href="{$suche->cURLFull}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                <span>
                                                    <i class="ci-arrow-right text-muted me-2"></i>
                                                    {$suche->cSuche}
                                                </span>
                                                <span class="badge bg-primary rounded-pill">{$suche->nAnzahlTreffer}</span>
                                            </a>
                                        {/foreach}
                                    </div>
                                {else}
                                    <div class="alert alert-info d-flex">
                                        <i class="ci-announcement fs-lg me-2"></i>
                                        <div>{lang key='noDataAvailable'}</div>
                                    </div>
                                {/if}
                            </div>
                        </div>
                    </div>
                {/block}
                
                {block name='page-livesearch-latest-searches'}
                    <div class="col-lg-6 mb-4">
                        <div class="card border-0 shadow-lg h-100">
                            <div class="card-header">
                                <h2 class="h5 mb-0">
                                    <i class="ci-time text-primary me-2"></i>
                                    {lang key='lastsearch'}
                                </h2>
                            </div>
                            <div class="card-body">
                                {if count($LivesucheLast) > 0}
                                    <div class="list-group list-group-flush">
                                        {foreach $LivesucheLast as $suche}
                                            <a href="{$suche->cURLFull}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                <span>
                                                    <i class="ci-arrow-right text-muted me-2"></i>
                                                    {$suche->cSuche}
                                                </span>
                                                <span class="badge bg-primary rounded-pill">{$suche->nAnzahlTreffer}</span>
                                            </a>
                                        {/foreach}
                                    </div>
                                {else}
                                    <div class="alert alert-info d-flex">
                                        <i class="ci-announcement fs-lg me-2"></i>
                                        <div>{lang key='noDataAvailable'}</div>
                                    </div>
                                {/if}
                            </div>
                        </div>
                    </div>
                {/block}
            </div>
        </div>
    {/if}
{/block}
