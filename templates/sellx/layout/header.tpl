{block name='layout-header'}
    {block name='layout-header-doctype'}<!DOCTYPE html>{/block}
    <html {block name='layout-header-html-attributes'}lang="{$meta_language}" data-bs-theme="light" itemscope {if $nSeitenTyp === $smarty.const.URLART_ARTIKEL}itemtype="https://schema.org/ItemPage"
          {elseif $nSeitenTyp === $smarty.const.URLART_KATEGORIE}itemtype="https://schema.org/CollectionPage"
          {else}itemtype="https://schema.org/WebPage"{/if}{/block}>
    {block name='layout-header-head'}
    <head>
        {block name='layout-header-head-meta'}
            <meta http-equiv="content-type" content="text/html; charset={$smarty.const.JTL_CHARSET}">
            <meta name="description" itemprop="description" content={block name='layout-header-head-meta-description'}"{$meta_description|truncate:1000:"":true}{/block}">
            {if !empty($meta_keywords)}
                <meta name="keywords" itemprop="keywords" content="{block name='layout-header-head-meta-keywords'}{$meta_keywords|truncate:255:'':true}{/block}">
            {/if}
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <link rel="icon" href="{$ShopURL}/{$templateDir}/themes/base/app-icons/favicon.ico" sizes="48x48" >
            <link rel="icon" href="{$ShopURL}/favicon.svg" sizes="any" type="image/svg+xml">
            <link rel="apple-touch-icon" href="{$ShopURL}/apple-touch-icon.png"/>
            <link rel="manifest" href="{$ShopURL}/site.webmanifest" />
            <meta name="msapplication-TileColor"
                  content="{strip}{if $Einstellungen.template.colors.primary}{$Einstellungen.template.colors.primary}
                        {elseif $Einstellungen.template.theme.theme_default === 'clear'}#f8bf00
                        {else}#1C1D2C
                  {/if}{/strip}">
            <meta name="msapplication-TileImage" content="{$ShopURL}/mstile-144x144.png">
        {/block}
        {block name='layout-header-head-theme-color'}
            <meta name="theme-color"
                  content="{strip}{if $Einstellungen.template.colors.primary}{$Einstellungen.template.colors.primary}
                        {elseif $Einstellungen.template.theme.theme_default === 'clear'}#f8bf00
                        {else}#1C1D2C
                  {/if}{/strip}">
        {/block}

        {block name='layout-header-head-resources'}
            {if empty($parentTemplateDir)}
                {$templateDir = $currentTemplateDir}
            {else}
                {$templateDir = $parentTemplateDir}
            {/if}
            {block name='layout-header-head-resources-crit-outer'}
                <style id="criticalCSS">
                    {block name='layout-header-head-resources-crit'}
                        {file_get_contents("{$currentThemeDir}{$Einstellungen.template.theme.theme_default}_crit.css")}
                    {/block}
                    {block name='layout-header-menu-single-row-css'}
                        {if (int)$Einstellungen.template.header.menu_search_width !== 0}
                            .main-search-wrapper {
                                max-width: {$Einstellungen.template.header.menu_search_width}px;
                            }
                        {/if}
                        {if (int)$Einstellungen.template.header.menu_logoheight !== 0 && $nSeitenTyp !== $smarty.const.PAGE_BESTELLVORGANG}
                            @media (min-width: 992px) {
                                header .navbar-brand img {
                                    height: {$Einstellungen.template.header.menu_logoheight}px;
                                }
                                {if $Einstellungen.template.header.menu_single_row !== 'Y'}
                                    nav.navbar {
                                        height: calc({$Einstellungen.template.header.menu_logoheight}px + 1.2rem);
                                    }
                                {/if}
                            }
                        {/if}
                    {/block}
                </style>
                
                <!-- Cartzilla Navbar CSS -->
                <link rel="stylesheet" href="{$ShopURL}/{$templateDir}/themes/default/custom-navbar.css?v={$nTemplateVersion}">
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Changa+One&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
            {/block}
            
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
        {$dbgBarHead}

        <script src="{$ShopURL}/templates/sellx/js/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>


        {if $Einstellungen.template.general.use_minify === 'N'}
            {if isset($cPluginJsHead_arr)}
                {foreach $cPluginJsHead_arr as $cJS}
                    <script defer src="{$ShopURL}/{$cJS}?v={$nTemplateVersion}"></script>
                {/foreach}
            {/if}
            {foreach $cJS_arr as $cJS}
                <script defer src="{$ShopURL}/{$cJS}?v={$nTemplateVersion}"></script>
            {/foreach}
            {foreach $cPluginJsBody_arr as $cJS}

                <script defer src="{$ShopURL}/{$cJS}?v={$nTemplateVersion}"></script>
            {/foreach}
        {else}
            {foreach $minifiedJS as $item}
                <script defer src="{$ShopURL}/{$item}"></script>
            {/foreach}
        {/if}

        {foreach $opcPageService->getCurPage()->getJsList() as $jsFile => $jsTrue}
            <script defer src="{$jsFile}"></script>
        {/foreach}

        {if file_exists($currentTemplateDirFullPath|cat:'js/custom.js')}
            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/custom.js?v={$nTemplateVersion}" as="script" crossorigin>
        {/if}

        {getUploaderLang iso=$smarty.session.currentLanguage->getIso639()|default:'' assign='uploaderLang'}

        {block name='layout-header-head-resources-preload'}
            <link href="{$ShopURL}/{$templateDir}themes/base/bootstrap/css/bootstrap-grid.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <link href="{$ShopURL}/{$templateDir}themes/base/bootstrap/css/bootstrap-reboot.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <link href="{$ShopURL}/{$templateDir}themes/base/bootstrap/css/bootstrap-utilities.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <link href="{$ShopURL}/{$templateDir}themes/base/bootstrap/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
             <link href="{$ShopURL}/{$templateDir}themes/base/css/theme.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <link href="{$ShopURL}/{$templateDir}themes/base/css/custom.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

            <link rel="preload" href="{$ShopURL}/{$templateDir}assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin>
            <link rel="preload" href="{$ShopURL}/{$templateDir}assets/fonts/inter-variable-latin-ext.woff2" as="font" type="font/woff2" crossorigin>
            <link href="{$ShopURL}/{$templateDir}assets/fonts/title.ttf" as="font" type="font/ttf" crossorigin="">
                
            <link rel="preload" href="{$ShopURL}/{$templateDir}assets/icons/cartzilla-icons.woff2" as="font" type="font/woff2" crossorigin>
            <link rel="stylesheet" href="{$ShopURL}/{$templateDir}assets/icons/cartzilla-icons.min.css">
            <link rel="preload" href="{$ShopURL}/{$templateDir}assets/fonts/fontawesome/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
            <link rel="preload" href="{$ShopURL}/{$templateDir}assets/fonts/fontawesome/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin>
        {/block}
        {block name='layout-header-head-resources-modulepreload'}
            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/app/globals.js" as="script" crossorigin>
            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/app/snippets/form-counter.js" as="script" crossorigin>
            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/app/plugins/navscrollbar.js" as="script" crossorigin>
            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/app/plugins/tabdrop.js" as="script" crossorigin>
            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/app/views/header.js" as="script" crossorigin>
            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/theme-switcher.js" as="script" crossorigin>
            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/glightbox.js" as="script" crossorigin>

            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/app/views/productdetails.js" as="script" crossorigin>
            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/components/swiper.min.js"" as="script" crossorigin>
            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/components/simplebar.min.js"" as="script" crossorigin>
            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/components/choices.min.js" as="script" crossorigin>
            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/components/nouislider.min.js" as="script" crossorigin>
            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/components/list.min.js"" as="script" crossorigin>
            <link rel="modulepreload" href="{$ShopURL}/{$templateDir}js/theme.min.js" as="script" as="script" crossorigin>

            
        {/block}
        {if !empty($oUploadSchema_arr)}
            <script defer src="{$ShopURL}/{$templateDir}js/fileinput/fileinput.min.js"></script>
            <script defer src="{$ShopURL}/{$templateDir}js/fileinput/themes/fas/theme.min.js"></script>
            <script defer src="{$ShopURL}/{$templateDir}js/fileinput/locales/{$uploaderLang}.js"></script>
            
             
        {/if}
        {if $Einstellungen.preisverlauf.preisverlauf_anzeigen === 'Y' && !empty($bPreisverlauf)}
            <script defer src="{$ShopURL}/{$templateDir}js/Chart.bundle.min.js"></script>
        {/if}
        {block name='layout-header-head-resources-datatables'}
            {if $nSeitenTyp === $smarty.const.PAGE_MEINKONTO || $nSeitenTyp === $smarty.const.PAGE_BESTELLVORGANG}
                <script defer src="{$ShopURL}/{$templateDir}js/DataTables/datatables.min.js"></script>
            {/if}
        {/block}
        <link href="{$ShopURL}/{$templateDir}css/custom.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <script type="module" src="{$ShopURL}/{$templateDir}js/app/app.js"></script>
        <script>(function(){
            // back-to-list-link mechanics

            {if $nSeitenTyp !== $smarty.const.PAGE_ARTIKEL}
                window.sessionStorage.setItem('has_starting_point', 'true');
                window.sessionStorage.removeItem('cur_product_id');
                window.sessionStorage.removeItem('product_page_visits');
                window.should_render_backtolist_link = false;
            {else}
                let has_starting_point = window.sessionStorage.getItem('has_starting_point') === 'true';
                let product_id         = Number(window.sessionStorage.getItem('cur_product_id'));
                let page_visits        = Number(window.sessionStorage.getItem('product_page_visits'));
                let no_reload          = performance.getEntriesByType('navigation')[0].type !== 'reload';

                let browseNext         = {if isset($NavigationBlaettern->naechsterArtikel->kArtikel)}
                        {$NavigationBlaettern->naechsterArtikel->kArtikel}{else}0{/if};

                let browsePrev         = {if isset($NavigationBlaettern->vorherigerArtikel->kArtikel)}
                        {$NavigationBlaettern->vorherigerArtikel->kArtikel}{else}0{/if};

                let should_render_link = true;

                if (has_starting_point === false) {
                    should_render_link = false;
                } else if (product_id === 0) {
                    product_id  = {$Artikel->kArtikel};
                    page_visits = 1;
                } else if (product_id === {$Artikel->kArtikel}) {
                    if (no_reload) {
                        page_visits ++;
                    }
                } else if (product_id === browseNext || product_id === browsePrev) {
                    product_id = {$Artikel->kArtikel};
                    page_visits ++;
                } else {
                    has_starting_point = false;
                    should_render_link = false;
                }

                window.sessionStorage.setItem('has_starting_point', has_starting_point);
                window.sessionStorage.setItem('cur_product_id', product_id);
                window.sessionStorage.setItem('product_page_visits', page_visits);
                window.should_render_backtolist_link = should_render_link;
            {/if}
        })()</script>
    </head>
    {/block}

    {has_boxes position='left' assign='hasLeftPanel'}
    {block name='layout-header-body-tag'}
        <body class="{if $Einstellungen.template.theme.button_animated === 'Y'}btn-animated{/if}
                     {if $Einstellungen.template.theme.wish_compare_animation === 'mobile'
                        || $Einstellungen.template.theme.wish_compare_animation === 'both'}wish-compare-animation-mobile{/if}
                     {if $Einstellungen.template.theme.wish_compare_animation === 'desktop'
                        || $Einstellungen.template.theme.wish_compare_animation === 'both'}wish-compare-animation-desktop{/if}
                     {if $isMobile}is-mobile{/if}
                     {if $nSeitenTyp === $smarty.const.PAGE_BESTELLVORGANG} is-checkout{/if} is-nova"
              data-page="{$nSeitenTyp}"
              {if isset($Link) && !empty($Link->getIdentifier())} id="{$Link->getIdentifier()}"{/if}>
    {/block}
    {if !$bExclusive}
        {if !$isMobile}
            {include file=$opcDir|cat:'tpl/startmenu.tpl'}
        {/if}

        {if $bAdminWartungsmodus}
            {block name='layout-header-maintenance-alert'}
                {alert show=true variant="warning" id="maintenance-mode" dismissible=true}{lang key='adminMaintenanceMode'}{/alert}
            {/block}
        {/if}
        {if $smarty.const.SAFE_MODE === true}
            {block name='layout-header-safemode-alert'}
                {alert show=true variant="warning" id="safe-mode" dismissible=true}{lang key='safeModeActive'}{/alert}
            {/block}
        {/if}

            {block name='layout-header-header'}
                    <div class="alert alert-dismissible bg-dark text-white rounded-0 py-2 m-0 fade show" style="padding-right: 9rem" data-bs-theme="dark">
                        <div class="container position-relative d-flex min-w-0">
                            <div class="d-flex flex-nowrap align-items-center g-2 w-100 min-w-0 mx-auto mt-n1" style="height: 37px;margin-left: auto;margin-right: auto">
                                {block name='layout-header-menu-single-row-top-bar-outer-include-header-top-bar'}
                                    {include file='layout/header_top_bar.tpl'}
                                {/block}
                            </div>
                        </div>
                    </div>

                <header class="navbar navbar-expand-lg navbar-sticky bg-body d-block z-fixed p-0" data-sticky-navbar='{literal}{"offset": 500}{/literal}'>
                    {block name='layout-header-include-header-menu-single-row'}
                        {include file='layout/header_menu_single_row.tpl'}
                    {/block}
                    {block name='layout-header-search'}
                        {if $Einstellungen.template.header.mobile_search_type === 'fixed'}
                            <div class="d-lg-none search-form-wrapper-fixed container-fluid container-fluid-xl order-1">
                                {include file='snippets/search_form.tpl' id='search-header-mobile-top'}
                            </div>
                        {/if}
                    {/block}
                </header>
                {block name='layout-header-search-fixed'}
                    {if $Einstellungen.template.header.mobile_search_type === 'fixed' && $isMobile}
                        <div class="container-fluid container-fluid-xl fixed-search fixed-top smoothscroll-top-search d-lg-none d-none">
                            {include file='snippets/search_form.tpl' id='search-header-mobile-fixed'}
                        </div>
                    {/if}
                {/block}
            {/block}
        {/if}

    {block name='layout-header-main-wrapper-starttag'}
        {opcMountPoint id='opc_before_main' inContainer=false}
    {/block}

    {block name='layout-header-fluid-banner'}
        {assign var=isFluidBanner value=$Einstellungen.template.theme.banner_full_width === 'Y' && isset($oImageMap)}
        {if $isFluidBanner}
            {block name='layout-header-fluid-banner-include-banner'}
                {include file='snippets/banner.tpl' isFluid=true}
            {/block}
        {/if}
        {assign var=isFluidSlider value=$Einstellungen.template.theme.slider_full_width === 'Y' && isset($oSlider) && count($oSlider->getSlides()) > 0}
        {if $isFluidSlider}
            {block name='layout-header-fluid-banner-include-slider'}
                {include file='snippets/slider.tpl' isFluid=true}
            {/block}
        {/if}
    {/block}

    {block name='layout-header-content-all-starttags'}
        {block name='layout-header-content-wrapper-starttag'}
            <div id="content-wrapper">
        {/block}

        {block name='layout-header-breadcrumb'}
            <nav class="container pt-2 pt-xxl-3 my-3 my-md-4" aria-label="breadcrumb">
                {include file='layout/breadcrumb.tpl'}
            </nav>
        {/block}

        {block name='layout-header-content-starttag'}
            <main class="content-wrapper">
        {/block}

        {if !$bExclusive && $boxes.left !== null && !empty(trim(strip_tags($boxes.left))) && (($Einstellungen.template.theme.left_sidebar === 'Y' && $boxesLeftActive) || $smarty.const.PAGE_ARTIKELLISTE === $nSeitenTyp)}
            {block name='layout-header-content-productlist-starttags'}
                <div class="container">
                    {opcMountPoint id='opc_before_heading'}
                    <h1 class="h3 pb-3 pb-lg-4">{$oNavigationsinfo->getName()}</h1>
                </div>
                <section class="container">
                        <div class="row">
                            <div class="col-lg-9">
            {/block}
        {/if}

        {block name='layout-header-alert'}
            {include file='snippets/alert_list.tpl'}
        {/block}

    {/block}{* /content-all-starttags *}
{/block}
