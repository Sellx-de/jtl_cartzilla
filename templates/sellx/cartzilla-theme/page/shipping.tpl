{block name='page-shipping'}
    {if isset($Einstellungen.global.global_versandermittlung_anzeigen)
        && $Einstellungen.global.global_versandermittlung_anzeigen === 'Y'}
        {opcMountPoint id='opc_before_shipping' inContainer=false}
        
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
                                {lang key='shipping'}
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                    <h1 class="h3 text-light mb-0">{lang key='shipping'}</h1>
                </div>
            </div>
        </div>
        
        {if !isset($smarty.get.shipping_calculator)
            || (isset($smarty.get.shipping_calculator) && $smarty.get.shipping_calculator !== "0")}
            <div class="container pb-5 mb-2 mb-md-4">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card border-0 shadow-lg">
                            <div class="card-body p-4 p-xl-5">
                                <h2 class="h4 mb-4">{lang key='shippingCalculator'}</h2>
                                
                                {if JTL\Session\Frontend::getCart()->PositionenArr|count > 0}
                                    {block name='page-shipping-form'}
                                        {form method="post"
                                            action="{if isset($oSpezialseiten_arr[$smarty.const.LINKTYP_VERSAND])}{$oSpezialseiten_arr[$smarty.const.LINKTYP_VERSAND]->getURL()}{else}{$ShopURL}/{/if}{if $bExclusive}?exclusive_content=1{/if}"
                                            class="needs-validation shipping-calculator-form"
                                            id="shipping-calculator-form"
                                            slide=true
                                            novalidate=true}
                                            {input type="hidden" name="s" value=$Link->getID()}
                                            {block name='page-shipping-include-shipping-calculator'}
                                                {include file='snippets/shipping_calculator.tpl' checkout=false}
                                            {/block}
                                        {/form}
                                    {/block}
                                {else}
                                    {block name='page-shipping-note'}
                                        <div class="alert alert-info d-flex">
                                            <i class="ci-announcement fs-lg me-2"></i>
                                            <div>{lang key='estimateShippingCostsNote' section='global'}</div>
                                        </div>
                                    {/block}
                                {/if}
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card border-0 shadow-lg">
                            <div class="card-body p-4 p-xl-5">
                                <h3 class="h5 mb-3">{lang key='shippingInformation'}</h3>
                                <p class="text-muted mb-0">{lang key='shippingInformationText'}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {/if}
        {opcMountPoint id='opc_after_shipping' inContainer=false}
    {/if}
{/block}
