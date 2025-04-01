<div data-tnt-template=page/manufacturers.tpl></div>{block name='page-manufacturers'}
    {opcMountPoint id='opc_before_manufacturers' inContainer=false}
    
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
                            {lang key='manufacturers'}
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">{lang key='manufacturers'}</h1>
            </div>
        </div>
    </div>
    
    {block name='page-manufacturers-content'}
        <div class="container pb-5 mb-2 mb-md-4">
            <div class="row">
                {foreach $oHersteller_arr as $mft}
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card border-0 shadow">
                            <a href="{$mft->getURL()}" title="{$mft->getMetaTitle()|escape:'html'}" class="card-img-top">
                                {include file='snippets/image.tpl'
                                    lazy=($mft@iteration > 8)
                                    item=$mft
                                    sizes='(min-width: 1300px) 25vw, (min-width: 992px) 34vw, 50vw'
                                    alt=$mft->getName()|escape:'html'
                                    class='card-img-top'
                                }
                            </a>
                            <div class="card-body text-center">
                                <h3 class="h6 mb-0">
                                    <a href="{$mft->getURL()}" title="{$mft->getMetaTitle()|escape:'html'}" class="stretched-link">
                                        {$mft->getName()}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    {/block}
{/block}
