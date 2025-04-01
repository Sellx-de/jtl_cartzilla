{block name='layout-header'}
    {block name='layout-header-doctype'}<!DOCTYPE html>{/block}
    <html {block name='layout-header-html-attributes'}lang="{$meta_language}" data-bs-theme="light" data-pwa="true" itemscope {if $nSeitenTyp === $smarty.const.URLART_ARTIKEL}itemtype="https://schema.org/ItemPage"
          {elseif $nSeitenTyp === $smarty.const.URLART_KATEGORIE}itemtype="https://schema.org/CollectionPage"
          {else}itemtype="https://schema.org/WebPage"{/if}{/block}>
    {block name='layout-header-head'}
    <head>
        {block name='layout-header-head-meta'}
            <meta charset="utf-8">
            
            <!-- Viewport -->
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
            
            <!-- SEO Meta Tags -->
            <meta name="description" itemprop="description" content={block name='layout-header-head-meta-description'}"{$meta_description|truncate:1000:"":true}{/block}">
            {if !empty($meta_keywords)}
                <meta name="keywords" itemprop="keywords" content="{block name='layout-header-head-meta-keywords'}{$meta_keywords|truncate:255:'':true}{/block}">
            {/if}
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            {$noindex = $bNoIndex === true  || (isset($Link) && $Link->getNoFollow() === true)}
            <meta name="robots" content="{if $robotsContent}{$robotsContent}{elseif $noindex}noindex{else}index, follow{/if}">

            <meta itemprop="url" content="{$cCanonicalURL}"/>
            <meta property="og:type" content="website" />
            <meta property="og:site_name" content="{$meta_title}" />
            <meta property="og:title" content="{$meta_title}" />
            <meta property="og:description" content="{$meta_description|truncate:1000:"":true}" />
            <meta property="og:url" content="{$cCanonicalURL}"/>

            {$showImage = true}
            {$navData = null}
            {if !empty($oNavigationsinfo)}
                {if $oNavigationsinfo->getCategory() !== null}
                    {$showImage = in_array($Einstellungen['navigationsfilter']['kategorie_bild_anzeigen'], ['B', 'BT'])}
                    {$navData = $oNavigationsinfo->getCategory()}
                {elseif $oNavigationsinfo->getManufacturer() !== null}
                    {$showImage = in_array($Einstellungen['navigationsfilter']['hersteller_bild_anzeigen'], ['B', 'BT'])}
                    {$navData = $oNavigationsinfo->getManufacturer()}
                {elseif $oNavigationsinfo->getCharacteristicValue() !== null}
                    {$showImage = in_array($Einstellungen['navigationsfilter']['merkmalwert_bild_anzeigen'], ['B', 'BT'])}
                    {$navData = $oNavigationsinfo->getCharacteristicValue()}
                {/if}
            {/if}

            {if $nSeitenTyp === $smarty.const.PAGE_ARTIKEL && !empty($Artikel->getImage(JTL\Media\Image::SIZE_LG))}
                <meta itemprop="image" content="{$Artikel->getImage(JTL\Media\Image::SIZE_LG)}" />
                <meta property="og:image" content="{$Artikel->getImage(JTL\Media\Image::SIZE_LG)}">
                <meta property="og:image:width" content="{$Artikel->getImageWidth(JTL\Media\Image::SIZE_LG)}" />
                <meta property="og:image:height" content="{$Artikel->getImageHeight(JTL\Media\Image::SIZE_LG)}" />
            {elseif $nSeitenTyp === $smarty.const.PAGE_NEWSDETAIL && !empty($newsItem->getImage(JTL\Media\Image::SIZE_LG))}
                <meta itemprop="image" content="{$newsItem->getImage(JTL\Media\Image::SIZE_LG)}" />
                <meta property="og:image" content="{$newsItem->getImage(JTL\Media\Image::SIZE_LG)}" />
                <meta property="og:image:width" content="{$newsItem->getImageWidth(JTL\Media\Image::SIZE_LG)}" />
                <meta property="og:image:height" content="{$newsItem->getImageHeight(JTL\Media\Image::SIZE_LG)}" />
            {elseif !empty($navData) && !empty($navData->getImage(JTL\Media\Image::SIZE_LG))}
                <meta itemprop="image" content="{$navData->getImage(JTL\Media\Image::SIZE_LG)}" />
                <meta property="og:image" content="{$navData->getImage(JTL\Media\Image::SIZE_LG)}" />
                <meta property="og:image:width" content="{$navData->getImageWidth(JTL\Media\Image::SIZE_LG)}" />
                <meta property="og:image:height" content="{$navData->getImageHeight(JTL\Media\Image::SIZE_LG)}" />
            {else}
                <meta itemprop="image" content="{$ShopLogoURL}" />
                <meta property="og:image" content="{$ShopLogoURL}" />
            {/if}
        {/block}

        <title itemprop="name">{block name='layout-header-head-title'}{$meta_title}{/block}</title>

        {if !empty($cCanonicalURL) && !$noindex}
            <link rel="canonical" href="{$cCanonicalURL}">
        {/if}

        {block name='layout-header-head-base'}{/block}

        {block name='layout-header-head-icons'}
            <!-- Webmanifest + Favicon / App icons -->
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="black">
            <link rel="manifest" href="{$ShopURL}/site.webmanifest">
            <link rel="icon" type="image/png" href="{$ShopURL}/{$templateDir}/cartzilla-theme/assets/app-icons/icon-32x32.png" sizes="32x32">
            <link rel="apple-touch-icon" href="{$ShopURL}/{$templateDir}/cartzilla-theme/assets/app-icons/icon-180x180.png">
        {/block}
        
        {block name='layout-header-head-theme-color'}
            <meta name="theme-color"
                  content="{strip}{if $Einstellungen.template.colors.primary}{$Einstellungen.template.colors.primary}
                        {elseif $Einstellungen.template.theme.theme_default === 'clear'}#f8bf00
                        {else}#1C1D2C
                  {/if}{/strip}">
        {/block}

        {block name='layout-header-head-resources'}
            <!-- Theme switcher (color modes) -->
            <script src="{$ShopURL}/{$templateDir}/cartzilla-theme/assets/js/theme-switcher.js"></script>
            
            <!-- Preloaded local web font (Inter) -->
            <link rel="preload" href="{$ShopURL}/{$templateDir}/cartzilla-theme/assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin>
            
            <!-- Font icons -->
            <link rel="preload" href="{$ShopURL}/{$templateDir}/cartzilla-theme/assets/icons/cartzilla-icons.woff2" as="font" type="font/woff2" crossorigin>
            <link rel="stylesheet" href="{$ShopURL}/{$templateDir}/cartzilla-theme/assets/icons/cartzilla-icons.min.css">
            
            <!-- Bootstrap + Theme styles -->
            <link rel="preload" href="{$ShopURL}/{$templateDir}/cartzilla-theme/assets/css/theme.min.css" as="style">
            <link rel="stylesheet" href="{$ShopURL}/{$templateDir}/cartzilla-theme/assets/css/theme.min.css" id="theme-styles">
            
            {* Original CSS *}
            {if empty($parentTemplateDir)}
                {$templateDir = $currentTemplateDir}
            {else}
                {$templateDir = $parentTemplateDir}
            {/if}
            
            {* css *}
            {if $Einstellungen.template.general.use_minify === 'N'}
                {foreach $cCSS_arr as $cCSS}
                    <link rel="preload" href="{$ShopURL}/{$cCSS}?v={$nTemplateVersion}" as="style"
                          onload="this.onload=null;this.rel='stylesheet'">
                {/foreach}
                {if isset($cPluginCss_arr)}
                    {foreach $cPluginCss_arr as $cCSS}
                        <link rel="preload" href="{$ShopURL}/{$cCSS}?v={$nTemplateVersion}" as="style"
                              onload="this.onload=null;this.rel='stylesheet'">
                    {/foreach}
                {/if}

                <noscript>
                    {foreach $cCSS_arr as $cCSS}
                        <link rel="stylesheet" href="{$ShopURL}/{$cCSS}?v={$nTemplateVersion}">
                    {/foreach}
                    {if isset($cPluginCss_arr)}
                        {foreach $cPluginCss_arr as $cCSS}
                            <link href="{$ShopURL}/{$cCSS}?v={$nTemplateVersion}" rel="stylesheet">
                        {/foreach}
                    {/if}
                </noscript>
            {else}
                <link rel="preload" href="{$ShopURL}/{$combinedCSS}" as="style" onload="this.onload=null;this.rel='stylesheet'">
                <noscript>
                    <link href="{$ShopURL}/{$combinedCSS}" rel="stylesheet">
                </noscript>
            {/if}

            {if !$isMobile && !$opc->isEditMode() && !$opc->isPreviewMode() && \JTL\Shop::isAdmin(true)}
                <link rel="preload" href="{$ShopURL}/admin/opc/css/startmenu.css" as="style"
                      onload="this.onload=null;this.rel='stylesheet'">
                <noscript>
                    <link type="text/css" href="{$ShopURL}/admin/opc/css/startmenu.css" rel="stylesheet">
                </noscript>
            {/if}
            {foreach $opcPageService->getCurPage()->getCssList($opc->isEditMode()) as $cssFile => $cssTrue}
                <link rel="preload" href="{$cssFile}" as="style" data-opc-portlet-css-link="true"
                      onload="this.onload=null;this.rel='stylesheet'">
                <noscript>
                    <link rel="stylesheet" href="{$cssFile}">
                </noscript>
            {/foreach}
            
            <!-- Cartzilla Theme Custom CSS -->
            <style>
                :root,[data-bs-theme="light"]{--cz-primary:#3E93D6;--cz-primary-rgb:62,147,214;--cz-primary-text-emphasis:#257abd;--cz-primary-bg-subtle:#ecf4fb;--cz-primary-border-subtle:#d8e9f7;}[data-bs-theme="dark"]{--cz-primary-text-emphasis:#3186c9;--cz-primary-bg-subtle:#1c2937;--cz-primary-border-subtle:#203548;}.btn-primary{--cz-btn-bg:#3E93D6;--cz-btn-border-color:#3E93D6;--cz-btn-hover-bg:#257abd;--cz-btn-hover-border-color:#257abd;--cz-btn-active-bg:#257abd;--cz-btn-active-border-color:#257abd;--cz-btn-disabled-bg:#3E93D6;--cz-btn-disabled-border-color:#3E93D6;}.btn-outline-primary{--cz-btn-color:#3E93D6;--cz-btn-border-color:#3E93D6;--cz-btn-hover-bg:#3E93D6;--cz-btn-hover-border-color:#3E93D6;--cz-btn-active-bg:#3E93D6;--cz-btn-active-border-color:#3E93D6;--cz-btn-disabled-color:#3E93D6;--cz-btn-disabled-border-color:#3E93D6;}
                :root,[data-bs-theme="dark"]{--cz-primary:#3E93D6;--cz-primary-rgb:62,147,214;--cz-primary-text-emphasis:#509EDB;--cz-primary-bg-subtle:#16212D;--cz-primary-border-subtle:#284157;}.btn-primary{--cz-btn-bg:#3E93D6;--cz-btn-border-color:#3E93D6;--cz-btn-hover-bg:#509EDB;--cz-btn-hover-border-color:#509EDB;--cz-btn-active-bg:#257ABD;--cz-btn-active-border-color:#257ABD;--cz-btn-disabled-bg:#203548;--cz-btn-disabled-border-color:#203548;}.btn-outline-primary{--cz-btn-color:#3E93D6;--cz-btn-border-color:#3E93D6;--cz-btn-hover-bg:#3E93D6;--cz-btn-hover-border-color:#3E93D6;--cz-btn-active-bg:#3186C9;--cz-btn-active-border-color:#3186C9;--cz-btn-disabled-color:#203548;--cz-btn-disabled-border-color:#203548;}
            </style>
            
            <script>
                /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
                (function (w) {
                    "use strict";
                    if (!w.loadCSS) {
                        w.loadCSS = function (){};
                    }
                    var rp = loadCSS.relpreload = {};
                    rp.support                  = (function () {
                        var ret;
                        try {
                            ret = w.document.createElement("link").relList.supports("preload");
                        } catch (e) {
                            ret = false;
                        }
                        return function () {
                            return ret;
                        };
                    })();
                    rp.bindMediaToggle          = function (link) {
                        var finalMedia = link.media || "all";

                        function enableStylesheet() {
                            if (link.addEventListener) {
                                link.removeEventListener("load", enableStylesheet);
                            } else if (link.attachEvent) {
                                link.detachEvent("onload", enableStylesheet);
                            }
                            link.setAttribute("onload", null);
                            link.media = finalMedia;
                        }

                        if (link.addEventListener) {
                            link.addEventListener("load", enableStylesheet);
                        } else if (link.attachEvent) {
                            link.attachEvent("onload", enableStylesheet);
                        }
                        setTimeout(function () {
                            link.rel   = "stylesheet";
                            link.media = "only x";
                        });
                        setTimeout(enableStylesheet, 3000);
                    };

                    rp.poly = function () {
                        if (rp.support()) {
                            return;
                        }
                        var links = w.document.getElementsByTagName("link");
                        for (var i = 0; i < links.length; i++) {
                            var link = links[i];
                            if (link.rel === "preload" && link.getAttribute("as") === "style" && !link.getAttribute("data-loadcss")) {
                                link.setAttribute("data-loadcss", true);
                                rp.bindMediaToggle(link);
                            }
                        }
                    };

                    if (!rp.support()) {
                        rp.poly();

                        var run = w.setInterval(rp.poly, 500);
                        if (w.addEventListener) {
                            w.addEventListener("load", function () {
                                rp.poly();
                                w.clearInterval(run);
                            });
                        } else if (w.attachEvent) {
                            w.attachEvent("onload", function () {
                                rp.poly();
                                w.clearInterval(run);
                            });
                        }
                    }

                    if (typeof exports !== "undefined") {
                        exports.loadCSS = loadCSS;
                    }
                    else {
                        w.loadCSS = loadCSS;
                    }
                }(typeof global !== "undefined" ? global : this));
            </script>
            {* RSS *}
            {if isset($Einstellungen.rss.rss_nutzen) && $Einstellungen.rss.rss_nutzen === 'Y'}
                <link rel="alternate" type="application/rss+xml" title="Newsfeed {$Einstellungen.global.global_shopname}"
                      href="{$ShopURL}/rss.xml">
            {/if}
            {* Languages *}
            {$languages = JTL\Session\Frontend::getLanguages()}
            {if $languages|count > 1}
                {foreach $languages as $language}
                    <link rel="alternate"
                          hreflang="{$language->getIso639()}"
                          href="{if $language->getShopDefault() === 'Y' && isset($Link) && $Link->getLinkType() === $smarty.const.LINKTYP_STARTSEITE}{$ShopURL}/{else}{$language->getUrl()}{/if}">
                    {if $language->getShopDefault() === 'Y'}
                    <link rel="alternate"
                          hreflang="x-default"
                          href="{if isset($Link) && $Link->getLinkType() === $smarty.const.LINKTYP_STARTSEITE}{$ShopURL}/{else}{$language->getUrl()}{/if}">
                    {/if}
                {/foreach}
            {/if}
        {/block}

        {if isset($Suchergebnisse) && $Suchergebnisse->getPages()->getMaxPage() > 1}
            {block name='layout-header-prev-next'}
                {if $Suchergebnisse->getPages()->getCurrentPage() > 1}
                    <link rel="prev" href="{$filterPagination->getPrev()->getURL()}">
                {/if}
                {if $Suchergebnisse->getPages()->getCurrentPage() < $Suchergebnisse->getPages()->getMaxPage()}
                    <link rel="next" href="{$filterPagination->getNext()->getURL()}">
                {/if}
            {/block}
        {/if}
        {block name='layout-header-head-resources-extension'}{/block}
    {/block}
    </head>
    {block name='layout-header-body-tag'}
    <body class="{if $Einstellungen.template.theme.theme_default === 'clear'}theme-clear{/if}">
    {/block}
    
    {block name='layout-header-body-start'}{/block}
    
    {* Shopping cart offcanvas *}
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">
        <!-- Header -->
        <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
            <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
                <h4 class="offcanvas-title" id="shoppingCartLabel">{lang key='basket'}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            {if isset($WarenkorbVersandkostenfreiHinweis) && $WarenkorbVersandkostenfreiHinweis}
                <p class="fs-sm">{lang key='buyXMoreForFreeShipping' section='checkout' printf=$WarenkorbVersandkostenfreiHinweis}</p>
                <div class="progress w-100" role="progressbar" aria-label="Free shipping progress" aria-valuenow="{$WarenkorbVersandkostenfreiProzent}" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                    <div class="progress-bar bg-dark rounded-pill d-none-dark" style="width: {$WarenkorbVersandkostenfreiProzent}%"></div>
                    <div class="progress-bar bg-light rounded-pill d-none d-block-dark" style="width: {$WarenkorbVersandkostenfreiProzent}%"></div>
                </div>
            {/if}
        </div>

        <!-- Items -->
        <div class="offcanvas-body d-flex flex-column gap-4 pt-2">
            {include file='basket/cart_dropdown_items.tpl'}
        </div>
    </div>
    
    {* Main navigation *}
    <header class="navbar navbar-expand-lg fixed-top bg-light">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="{$ShopURL}">
                <img src="{$ShopLogoURL}" alt="{$Einstellungen.global.global_shopname}" width="142">
            </a>
            
            <!-- Search -->
            <div class="d-none d-lg-flex flex-grow-1 mx-4">
                {include file='layout/header_search.tpl'}
            </div>
            
            <!-- Toolbar -->
            <div class="navbar-toolbar d-flex align-items-center order-lg-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                {if $Einstellungen.global.global_wunschliste_anzeigen === 'Y'}
                    <a class="navbar-tool d-none d-lg-flex" href="{get_static_route id='wunschliste.php'}">
                        <span class="navbar-tool-icon-box">
                            <i class="ci-heart"></i>
                            {if $smarty.session.Wunschliste->CWunschlistePos_arr|count > 0}
                                <span class="navbar-tool-badge">{$smarty.session.Wunschliste->CWunschlistePos_arr|count}</span>
                            {/if}
                        </span>
                    </a>
                {/if}
                
                <a class="navbar-tool ms-lg-3" href="#" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart">
                    <span class="navbar-tool-icon-box">
                        <i class="ci-cart"></i>
                        <span class="navbar-tool-badge">{$WarenkorbArtikelPositionenanzahl}</span>
                    </span>
                    <span class="navbar-tool-text ms-n1">{$WarenkorbGesamtsumme}</span>
                </a>
                
                {if $smarty.session.Kunde->kKunde > 0}
                    <div class="navbar-tool dropdown ms-lg-3">
                        <a class="navbar-tool-icon-box" href="{get_static_route id='jtl.php' params=['bestellvorgang' => 1]}">
                            <i class="ci-user"></i>
                        </a>
                        <a class="navbar-tool-text ms-n1" href="{get_static_route id='jtl.php' params=['bestellvorgang' => 1]}">
                            <small>{lang key='myAccount'}</small>{$smarty.session.Kunde->cVorname}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="{get_static_route id='jtl.php' params=['bestellvorgang' => 1]}" class="dropdown-item">{lang key='myAccount'}</a>
                            <a href="{get_static_route id='jtl.php' params=['bestellvorgang' => 1, 'orders' => 1]}" class="dropdown-item">{lang key='orders'}</a>
                            <div class="dropdown-divider"></div>
                            <a href="{get_static_route id='jtl.php' params=['logout' => 1]}" class="dropdown-item">{lang key='logOut'}</a>
                        </div>
                    </div>
                {else}
                    <div class="navbar-tool ms-lg-3">
                        <a class="navbar-tool-icon-box" href="{get_static_route id='jtl.php' params=['bestellvorgang' => 1]}">
                            <i class="ci-user"></i>
                        </a>
                        <div class="navbar-tool-text ms-n1">
                            <small>{lang key='login'}</small>{lang key='myAccount'}
                        </div>
                    </div>
                {/if}
            </div>
            
            <!-- Navbar collapse -->
            <div class="collapse navbar-collapse me-auto order-lg-2" id="navbarCollapse">
                <!-- Search (mobile) -->
                <div class="d-lg-none py-3">
                    {include file='layout/header_search.tpl'}
                </div>
                
                <!-- Primary menu -->
                <ul class="navbar-nav">
                    {include file='layout/header_nav_main.tpl'}
                </ul>
            </div>
        </div>
    </header>
{/block}