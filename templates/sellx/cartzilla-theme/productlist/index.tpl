{block name='productlist-index'}
    {block name='productlist-index-include-header'}
        {include file='layout/header.tpl'}
    {/block}

    {block name='productlist-index-content'}
        <div class="page-title-overlap bg-dark pt-4">
            <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
                {block name='productlist-index-title'}
                    <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                                <li class="breadcrumb-item">
                                    <a class="text-nowrap" href="{$ShopURL}">
                                        <i class="ci-home"></i>{lang key='home'}
                                    </a>
                                </li>
                                {foreach $Brotnavi as $oItem}
                                    <li class="breadcrumb-item text-nowrap">
                                        {if $oItem->getURL() !== null && !$oItem@last}
                                            <a href="{$oItem->getURL()}">{$oItem->getName()}</a>
                                        {else}
                                            <span>{$oItem->getName()}</span>
                                        {/if}
                                    </li>
                                {/foreach}
                            </ol>
                        </nav>
                    </div>
                    <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                        <h1 class="h3 text-light mb-0">{$oNavigationsinfo->getName()}</h1>
                    </div>
                {/block}
            </div>
        </div>

        <div class="container pb-5 mb-2 mb-md-4">
            <div class="row">
                <!-- Sidebar-->
                <aside class="col-lg-4">
                    {block name='productlist-index-sidebar'}
                        {include file='productlist/sidebar.tpl'}
                    {/block}
                </aside>
                
                <!-- Content -->
                <section class="col-lg-8">
                    {block name='productlist-index-products'}
                        {if !empty($oNavigationsinfo->getImageURL())}
                            <div class="d-flex justify-content-center mb-4">
                                <img class="img-fluid" src="{$oNavigationsinfo->getImageURL()}" alt="{$oNavigationsinfo->getName()}">
                            </div>
                        {/if}
                        
                        {if !empty($oNavigationsinfo->getDescription())}
                            <div class="mb-4">
                                {$oNavigationsinfo->getDescription()}
                            </div>
                        {/if}
                        
                        {include file='productlist/header.tpl'}
                        
                        {if $Suchergebnisse->getProducts()|count > 0}
                            <div class="row g-3 mb-4">
                                {foreach $Suchergebnisse->getProducts() as $Artikel}
                                    <div class="col-md-4 col-6">
                                        {include file='productlist/item_box.tpl'}
                                    </div>
                                {/foreach}
                            </div>
                            
                            {include file='productlist/footer.tpl'}
                        {else}
                            {lang key='noFilterResults'}
                        {/if}
                    {/block}
                </section>
            </div>
        </div>
    {/block}

    {block name='productlist-index-include-footer'}
        {include file='layout/footer.tpl'}
    {/block}
{/block}