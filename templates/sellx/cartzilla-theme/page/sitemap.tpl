{block name='page-sitemap'}
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
                            {lang key='sitemap'}
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">{lang key='sitemap'}</h1>
            </div>
        </div>
    </div>
    
    <div class="container pb-5 mb-2 mb-md-4">
        {if $Einstellungen.sitemap.sitemap_seiten_anzeigen === 'Y'}
            {block name='page-sitemap-pages'}
                {opcMountPoint id='opc_before_pages' inContainer=false}
                <div class="card border-0 shadow-lg mb-5">
                    <div class="card-header">
                        <h2 class="h5 mb-0">{lang key='sitemapSites'}</h2>
                    </div>
                    <div class="card-body">
                        {block name='page-sitemap-pages-content'}
                            <div class="row">
                                {foreach $linkgroups as $linkgroup}
                                    {if !empty($linkgroup->getName()) && $linkgroup->getName() !== 'hidden' && !empty($linkgroup->getLinks())}
                                        <div class="col-md-4 col-lg-3 mb-4">
                                            <div class="widget widget-links">
                                                {block name='page-sitemap-include-linkgroup-list'}
                                                    {include file='snippets/linkgroup_list.tpl' linkgroupIdentifier=$linkgroup->getTemplate() tplscope='sitemap'}
                                                {/block}
                                            </div>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                        {/block}
                    </div>
                </div>
            {/block}
        {/if}
        
        {if $Einstellungen.sitemap.sitemap_kategorien_anzeigen === 'Y' && isset($oKategorieliste->elemente) && $oKategorieliste->elemente|count > 0}
            {block name='page-sitemap-categories'}
                {opcMountPoint id='opc_before_categories' inContainer=false}
                <div class="card border-0 shadow-lg mb-5">
                    <div class="card-header">
                        <h2 class="h5 mb-0">{lang key='sitemapKats'}</h2>
                    </div>
                    <div class="card-body">
                        {block name='page-sitemap-categories-content'}
                            <div class="row">
                                {foreach $oKategorieliste->elemente as $oKategorie}
                                    {if $oKategorie->getChildren()|count > 0}
                                        <div class="col-md-4 col-lg-3 mb-4">
                                            <div class="widget widget-links">
                                                <h3 class="widget-title mb-2">
                                                    <a href="{$oKategorie->getURL()}" title="{$oKategorie->getName()|escape:'html'}" class="fw-medium">
                                                        {$oKategorie->getShortName()}
                                                    </a>
                                                </h3>
                                                <ul class="widget-list">
                                                    {foreach $oKategorie->getChildren() as $oSubKategorie}
                                                        <li class="widget-list-item">
                                                            <a href="{$oSubKategorie->getURL()}" title="{$oKategorie->getName()|escape:'html'}" class="widget-list-link">
                                                                {$oSubKategorie->getShortName()}
                                                            </a>
                                                        </li>
                                                        {if $oSubKategorie->getChildren()|count > 0}
                                                            <li class="widget-list-item ms-3">
                                                                <ul class="widget-list">
                                                                    {foreach $oSubKategorie->getChildren() as $oSubSubKategorie}
                                                                        <li class="widget-list-item">
                                                                            <a href="{$oSubSubKategorie->getURL()}" title="{$oSubSubKategorie->getName()|escape:'html'}" class="widget-list-link">
                                                                                {$oSubSubKategorie->getShortName()}
                                                                            </a>
                                                                        </li>
                                                                    {/foreach}
                                                                </ul>
                                                            </li>
                                                        {/if}
                                                    {/foreach}
                                                </ul>
                                            </div>
                                        </div>
                                    {/if}
                                {/foreach}
                                
                                <div class="col-md-4 col-lg-3 mb-4">
                                    <div class="widget widget-links">
                                        <h3 class="widget-title mb-2">{lang key='otherCategories'}</h3>
                                        <ul class="widget-list">
                                            {foreach $oKategorieliste->elemente as $oKategorie}
                                                {if $oKategorie->getChildren()|count == 0}
                                                    <li class="widget-list-item">
                                                        <a href="{$oKategorie->getURL()}" title="{$oKategorie->getName()|escape:'html'}" class="widget-list-link">
                                                            {$oKategorie->getShortName()}
                                                        </a>
                                                    </li>
                                                {/if}
                                            {/foreach}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        {/block}
                    </div>
                </div>
            {/block}
        {/if}
        
        {if $Einstellungen.sitemap.sitemap_hersteller_anzeigen === 'Y' && $oHersteller_arr|count > 0}
            {block name='page-sitemap-manufacturer'}
                {opcMountPoint id='opc_before_manufacturers' inContainer=false}
                <div class="card border-0 shadow-lg mb-5">
                    <div class="card-header">
                        <h2 class="h5 mb-0">{lang key='sitemapNanufacturer'}</h2>
                    </div>
                    <div class="card-body">
                        {block name='page-sitemap-manufacturer-content'}
                            <div class="row">
                                {foreach $oHersteller_arr as $oHersteller}
                                    <div class="col-md-4 col-lg-3 mb-2">
                                        <a href="{$oHersteller->getURL()}" class="text-decoration-none">
                                            {$oHersteller->getName()}
                                        </a>
                                    </div>
                                {/foreach}
                            </div>
                        {/block}
                    </div>
                </div>
            {/block}
        {/if}
        
        {if $Einstellungen.news.news_benutzen === 'Y' && $Einstellungen.sitemap.sitemap_news_anzeigen === 'Y' && !empty($oNewsMonatsUebersicht_arr) && $oNewsMonatsUebersicht_arr|count > 0}
            {block name='page-sitemap-news'}
                {opcMountPoint id='opc_before_news' inContainer=false}
                <div class="card border-0 shadow-lg mb-5">
                    <div class="card-header">
                        <h2 class="h5 mb-0">{lang key='sitemapNews'}</h2>
                    </div>
                    <div class="card-body">
                        {block name='page-sitemap-news-content'}
                            <div class="row">
                                {foreach $oNewsMonatsUebersicht_arr as $oNewsMonatsUebersicht}
                                    {if $oNewsMonatsUebersicht->oNews_arr|count > 0}
                                        <div class="col-md-4 col-lg-3 mb-4">
                                            <div class="widget widget-links">
                                                <h3 class="widget-title mb-2">
                                                    <a href="{$oNewsMonatsUebersicht->cURLFull}" class="fw-medium">
                                                        {$oNewsMonatsUebersicht->cName}
                                                    </a>
                                                </h3>
                                                <ul class="widget-list">
                                                    {foreach $oNewsMonatsUebersicht->oNews_arr as $oNews}
                                                        <li class="widget-list-item">
                                                            <a href="{$oNews->cURLFull}" class="widget-list-link">
                                                                {$oNews->cBetreff}
                                                            </a>
                                                        </li>
                                                    {/foreach}
                                                </ul>
                                            </div>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                        {/block}
                    </div>
                </div>
            {/block}
        {/if}
        
        {if $Einstellungen.news.news_benutzen === 'Y'
            && $Einstellungen.sitemap.sitemap_newskategorien_anzeigen === 'Y'
            && !empty($oNewsKategorie_arr)
            && $oNewsKategorie_arr|count > 0
        }
            {block name='page-sitemap-news-categories'}
                {opcMountPoint id='opc_before_news_categories' inContainer=false}
                <div class="card border-0 shadow-lg mb-5">
                    <div class="card-header">
                        <h2 class="h5 mb-0">{lang key='sitemapNewsCats'}</h2>
                    </div>
                    <div class="card-body">
                        {block name='page-sitemap-news-categories-content'}
                            <div class="row">
                                {foreach $oNewsKategorie_arr as $oNewsKategorie}
                                    {if $oNewsKategorie->oNews_arr|count > 0}
                                        <div class="col-md-4 col-lg-3 mb-4">
                                            <div class="widget widget-links">
                                                <h3 class="widget-title mb-2">
                                                    <a href="{$oNewsKategorie->cURLFull}" class="fw-medium">
                                                        {$oNewsKategorie->cName}
                                                    </a>
                                                </h3>
                                                <ul class="widget-list">
                                                    {foreach $oNewsKategorie->oNews_arr as $oNews}
                                                        <li class="widget-list-item">
                                                            <a href="{$oNews->cURLFull}" class="widget-list-link">
                                                                {$oNews->cBetreff}
                                                            </a>
                                                        </li>
                                                    {/foreach}
                                                </ul>
                                            </div>
                                        </div>
                                    {/if}
                                {/foreach}
                            </div>
                        {/block}
                    </div>
                </div>
            {/block}
        {/if}
    </div>
{/block}