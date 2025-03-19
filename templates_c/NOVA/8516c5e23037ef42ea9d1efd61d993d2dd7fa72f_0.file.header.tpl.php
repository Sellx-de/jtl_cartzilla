<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab3166296eb9_35080217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8516c5e23037ef42ea9d1efd61d993d2dd7fa72f' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/layout/header.tpl',
      1 => 1739261160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header_top_bar.tpl' => 2,
    'file:layout/header_menu_single_row.tpl' => 1,
    'file:layout/header_logo.tpl' => 1,
    'file:layout/header_nav_icons.tpl' => 1,
    'file:layout/header_categories.tpl' => 1,
    'file:snippets/search_form.tpl' => 2,
    'file:snippets/banner.tpl' => 1,
    'file:snippets/slider.tpl' => 1,
    'file:layout/breadcrumb.tpl' => 1,
    'file:snippets/alert_list.tpl' => 1,
  ),
),false)) {
function content_67ab3166296eb9_35080217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111153068467ab316626fbe8_39407611', 'layout-header');
?>

<?php }
/* {block 'layout-header-doctype'} */
class Block_70538820567ab316626fda7_15777555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html><?php
}
}
/* {/block 'layout-header-doctype'} */
/* {block 'layout-header-html-attributes'} */
class Block_73338053367ab3166270023_04923592 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
lang="<?php echo $_smarty_tpl->tpl_vars['meta_language']->value;?>
" itemscope <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('URLART_ARTIKEL') ? constant('URLART_ARTIKEL') : null)) {?>itemtype="https://schema.org/ItemPage"
          <?php } elseif ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('URLART_KATEGORIE') ? constant('URLART_KATEGORIE') : null)) {?>itemtype="https://schema.org/CollectionPage"
          <?php } else { ?>itemtype="https://schema.org/WebPage"<?php }
}
}
/* {/block 'layout-header-html-attributes'} */
/* {block 'layout-header-head-meta-description'} */
class Block_149409795067ab3166270db2_51452512 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
"<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta_description']->value,1000,'',true ));
}
}
/* {/block 'layout-header-head-meta-description'} */
/* {block 'layout-header-head-meta-keywords'} */
class Block_75986838367ab3166271515_02006561 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta_keywords']->value,255,'',true ));
}
}
/* {/block 'layout-header-head-meta-keywords'} */
/* {block 'layout-header-head-meta'} */
class Block_123549009167ab3166270ab7_91462994 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <meta http-equiv="content-type" content="text/html; charset=<?php echo (defined('JTL_CHARSET') ? constant('JTL_CHARSET') : null);?>
">
            <meta name="description" itemprop="description" content=<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149409795067ab3166270db2_51452512', 'layout-header-head-meta-description', $this->tplIndex);
?>
">
            <?php if (!empty($_smarty_tpl->tpl_vars['meta_keywords']->value)) {?>
                <meta name="keywords" itemprop="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75986838367ab3166271515_02006561', 'layout-header-head-meta-keywords', $this->tplIndex);
?>
">
            <?php }?>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <?php $_smarty_tpl->_assignInScope('noindex', $_smarty_tpl->tpl_vars['bNoIndex']->value === true || ((isset($_smarty_tpl->tpl_vars['Link']->value)) && $_smarty_tpl->tpl_vars['Link']->value->getNoFollow() === true));?>
            <meta name="robots" content="<?php if ($_smarty_tpl->tpl_vars['robotsContent']->value) {
echo $_smarty_tpl->tpl_vars['robotsContent']->value;
} elseif ($_smarty_tpl->tpl_vars['noindex']->value) {?>noindex<?php } else { ?>index, follow<?php }?>">

            <meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['cCanonicalURL']->value;?>
"/>
            <meta property="og:type" content="website" />
            <meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
" />
            <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
" />
            <meta property="og:description" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta_description']->value,1000,'',true ));?>
" />
            <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['cCanonicalURL']->value;?>
"/>

            <?php $_smarty_tpl->_assignInScope('showImage', true);?>
            <?php $_smarty_tpl->_assignInScope('navData', null);?>
            <?php if (!empty($_smarty_tpl->tpl_vars['oNavigationsinfo']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCategory() !== null) {?>
                    <?php $_smarty_tpl->_assignInScope('showImage', in_array($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['kategorie_bild_anzeigen'],array('B','BT')));?>
                    <?php $_smarty_tpl->_assignInScope('navData', $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCategory());?>
                <?php } elseif ($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getManufacturer() !== null) {?>
                    <?php $_smarty_tpl->_assignInScope('showImage', in_array($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['hersteller_bild_anzeigen'],array('B','BT')));?>
                    <?php $_smarty_tpl->_assignInScope('navData', $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getManufacturer());?>
                <?php } elseif ($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCharacteristicValue() !== null) {?>
                    <?php $_smarty_tpl->_assignInScope('showImage', in_array($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['merkmalwert_bild_anzeigen'],array('B','BT')));?>
                    <?php $_smarty_tpl->_assignInScope('navData', $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCharacteristicValue());?>
                <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKEL') ? constant('PAGE_ARTIKEL') : null) && !empty($_smarty_tpl->tpl_vars['Artikel']->value->getImage(JTL\Media\Image::SIZE_LG))) {?>
                <meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->getImage(JTL\Media\Image::SIZE_LG);?>
" />
                <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->getImage(JTL\Media\Image::SIZE_LG);?>
">
                <meta property="og:image:width" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->getImageWidth(JTL\Media\Image::SIZE_LG);?>
" />
                <meta property="og:image:height" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->getImageHeight(JTL\Media\Image::SIZE_LG);?>
" />
            <?php } elseif ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_NEWSDETAIL') ? constant('PAGE_NEWSDETAIL') : null) && !empty($_smarty_tpl->tpl_vars['newsItem']->value->getImage(JTL\Media\Image::SIZE_LG))) {?>
                <meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['newsItem']->value->getImage(JTL\Media\Image::SIZE_LG);?>
" />
                <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['newsItem']->value->getImage(JTL\Media\Image::SIZE_LG);?>
" />
                <meta property="og:image:width" content="<?php echo $_smarty_tpl->tpl_vars['newsItem']->value->getImageWidth(JTL\Media\Image::SIZE_LG);?>
" />
                <meta property="og:image:height" content="<?php echo $_smarty_tpl->tpl_vars['newsItem']->value->getImageHeight(JTL\Media\Image::SIZE_LG);?>
" />
            <?php } elseif (!empty($_smarty_tpl->tpl_vars['navData']->value) && !empty($_smarty_tpl->tpl_vars['navData']->value->getImage(JTL\Media\Image::SIZE_LG))) {?>
                <meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['navData']->value->getImage(JTL\Media\Image::SIZE_LG);?>
" />
                <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['navData']->value->getImage(JTL\Media\Image::SIZE_LG);?>
" />
                <meta property="og:image:width" content="<?php echo $_smarty_tpl->tpl_vars['navData']->value->getImageWidth(JTL\Media\Image::SIZE_LG);?>
" />
                <meta property="og:image:height" content="<?php echo $_smarty_tpl->tpl_vars['navData']->value->getImageHeight(JTL\Media\Image::SIZE_LG);?>
" />
            <?php } else { ?>
                <meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['ShopLogoURL']->value;?>
" />
                <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['ShopLogoURL']->value;?>
" />
            <?php }?>
        <?php
}
}
/* {/block 'layout-header-head-meta'} */
/* {block 'layout-header-head-title'} */
class Block_81222391667ab31662775f1_18143350 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['meta_title']->value;
}
}
/* {/block 'layout-header-head-title'} */
/* {block 'layout-header-head-base'} */
class Block_134819849467ab3166277bb6_29823704 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'layout-header-head-base'} */
/* {block 'layout-header-head-icons'} */
class Block_117926624067ab3166277d83_98208073 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/favicon.ico" sizes="48x48" >
            <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/favicon.svg" sizes="any" type="image/svg+xml">
            <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/apple-touch-icon.png"/>
            <link rel="manifest" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/site.webmanifest" />
            <meta name="msapplication-TileColor"
                  content="<?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['colors']['primary']) {
echo $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['colors']['primary'];
} elseif ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['theme_default'] === 'clear') {?>#f8bf00<?php } else { ?>#1C1D2C<?php }?>">
            <meta name="msapplication-TileImage" content="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/mstile-144x144.png">
        <?php
}
}
/* {/block 'layout-header-head-icons'} */
/* {block 'layout-header-head-theme-color'} */
class Block_124181120367ab31662789e9_47879173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <meta name="theme-color"
                  content="<?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['colors']['primary']) {
echo $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['colors']['primary'];
} elseif ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['theme_default'] === 'clear') {?>#f8bf00<?php } else { ?>#1C1D2C<?php }?>">
        <?php
}
}
/* {/block 'layout-header-head-theme-color'} */
/* {block 'layout-header-head-resources-crit'} */
class Block_132430763767ab3166279ae8_35908664 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php echo file_get_contents(((string)$_smarty_tpl->tpl_vars['currentThemeDir']->value).((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['theme_default'])."_crit.css");?>

                    <?php
}
}
/* {/block 'layout-header-head-resources-crit'} */
/* {block 'layout-header-menu-single-row-css'} */
class Block_32471275667ab316627a130_05228816 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ((int)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_search_width'] !== 0) {?>
                            .main-search-wrapper {
                                max-width: <?php echo $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_search_width'];?>
px;
                            }
                        <?php }?>
                        <?php if ((int)$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_logoheight'] !== 0 && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?>
                            @media (min-width: 992px) {
                                header .navbar-brand img {
                                    height: <?php echo $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_logoheight'];?>
px;
                                }
                                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_single_row'] !== 'Y') {?>
                                    nav.navbar {
                                        height: calc(<?php echo $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_logoheight'];?>
px + 1.2rem);
                                    }
                                <?php }?>
                            }
                        <?php }?>
                    <?php
}
}
/* {/block 'layout-header-menu-single-row-css'} */
/* {block 'layout-header-head-resources-crit-outer'} */
class Block_137638046367ab31662799d0_54710345 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <style id="criticalCSS">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132430763767ab3166279ae8_35908664', 'layout-header-head-resources-crit', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32471275667ab316627a130_05228816', 'layout-header-menu-single-row-css', $this->tplIndex);
?>

                </style>
            <?php
}
}
/* {/block 'layout-header-head-resources-crit-outer'} */
/* {block 'layout-header-head-resources'} */
class Block_158470336567ab31662793a8_62005241 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (empty($_smarty_tpl->tpl_vars['parentTemplateDir']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('templateDir', $_smarty_tpl->tpl_vars['currentTemplateDir']->value);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('templateDir', $_smarty_tpl->tpl_vars['parentTemplateDir']->value);?>
            <?php }?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137638046367ab31662799d0_54710345', 'layout-header-head-resources-crit-outer', $this->tplIndex);
?>

                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['general']['use_minify'] === 'N') {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cCSS_arr']->value, 'cCSS');
$_smarty_tpl->tpl_vars['cCSS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cCSS']->value) {
$_smarty_tpl->tpl_vars['cCSS']->do_else = false;
?>
                    <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cCSS']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
" as="style"
                          onload="this.onload=null;this.rel='stylesheet'">
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ((isset($_smarty_tpl->tpl_vars['cPluginCss_arr']->value))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cPluginCss_arr']->value, 'cCSS');
$_smarty_tpl->tpl_vars['cCSS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cCSS']->value) {
$_smarty_tpl->tpl_vars['cCSS']->do_else = false;
?>
                        <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cCSS']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
" as="style"
                              onload="this.onload=null;this.rel='stylesheet'">
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>

                <noscript>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cCSS_arr']->value, 'cCSS');
$_smarty_tpl->tpl_vars['cCSS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cCSS']->value) {
$_smarty_tpl->tpl_vars['cCSS']->do_else = false;
?>
                        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cCSS']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
">
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['cPluginCss_arr']->value))) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cPluginCss_arr']->value, 'cCSS');
$_smarty_tpl->tpl_vars['cCSS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cCSS']->value) {
$_smarty_tpl->tpl_vars['cCSS']->do_else = false;
?>
                            <link href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cCSS']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
" rel="stylesheet">
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </noscript>
            <?php } else { ?>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['combinedCSS']->value;?>
" as="style" onload="this.onload=null;this.rel='stylesheet'">
                <noscript>
                    <link href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['combinedCSS']->value;?>
" rel="stylesheet">
                </noscript>
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value && !$_smarty_tpl->tpl_vars['opc']->value->isEditMode() && !$_smarty_tpl->tpl_vars['opc']->value->isPreviewMode() && JTL\Shop::isAdmin(true)) {?>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/admin/opc/css/startmenu.css" as="style"
                      onload="this.onload=null;this.rel='stylesheet'">
                <noscript>
                    <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/admin/opc/css/startmenu.css" rel="stylesheet">
                </noscript>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opcPageService']->value->getCurPage()->getCssList($_smarty_tpl->tpl_vars['opc']->value->isEditMode()), 'cssTrue', false, 'cssFile');
$_smarty_tpl->tpl_vars['cssTrue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->value => $_smarty_tpl->tpl_vars['cssTrue']->value) {
$_smarty_tpl->tpl_vars['cssTrue']->do_else = false;
?>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
" as="style" data-opc-portlet-css-link="true"
                      onload="this.onload=null;this.rel='stylesheet'">
                <noscript>
                    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
">
                </noscript>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php echo '<script'; ?>
>
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
            <?php echo '</script'; ?>
>
                        <?php if ((isset($_smarty_tpl->tpl_vars['Einstellungen']->value['rss']['rss_nutzen'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['rss']['rss_nutzen'] === 'Y') {?>
                <link rel="alternate" type="application/rss+xml" title="Newsfeed <?php echo $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_shopname'];?>
"
                      href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/rss.xml">
            <?php }?>
                        <?php $_smarty_tpl->_assignInScope('languages', JTL\Session\Frontend::getLanguages());?>
            <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['languages']->value )) > 1) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                    <link rel="alternate"
                          hreflang="<?php echo $_smarty_tpl->tpl_vars['language']->value->getIso639();?>
"
                          href="<?php if ($_smarty_tpl->tpl_vars['language']->value->getShopDefault() === 'Y' && (isset($_smarty_tpl->tpl_vars['Link']->value)) && $_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_STARTSEITE') ? constant('LINKTYP_STARTSEITE') : null)) {
echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php } else {
echo $_smarty_tpl->tpl_vars['language']->value->getUrl();
}?>">
                    <?php if ($_smarty_tpl->tpl_vars['language']->value->getShopDefault() === 'Y') {?>
                    <link rel="alternate"
                          hreflang="x-default"
                          href="<?php if ((isset($_smarty_tpl->tpl_vars['Link']->value)) && $_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_STARTSEITE') ? constant('LINKTYP_STARTSEITE') : null)) {
echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php } else {
echo $_smarty_tpl->tpl_vars['language']->value->getUrl();
}?>">
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        <?php
}
}
/* {/block 'layout-header-head-resources'} */
/* {block 'layout-header-prev-next'} */
class Block_49423609267ab3166280fc4_72505309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getCurrentPage() > 1) {?>
                    <link rel="prev" href="<?php echo $_smarty_tpl->tpl_vars['filterPagination']->value->getPrev()->getURL();?>
">
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getCurrentPage() < $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage()) {?>
                    <link rel="next" href="<?php echo $_smarty_tpl->tpl_vars['filterPagination']->value->getNext()->getURL();?>
">
                <?php }?>
            <?php
}
}
/* {/block 'layout-header-prev-next'} */
/* {block 'layout-header-head-resources-preload'} */
class Block_86522567167ab3166284614_00753929 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['theme_default'] === 'dark') {?>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fonts/poppins/Poppins-Light.ttf" as="font" crossorigin/>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fonts/poppins/Poppins-Regular.ttf" as="font" crossorigin/>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fonts/poppins/Poppins-SemiBold.ttf" as="font" crossorigin/>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fonts/raleway/Raleway-Bold.ttf" as="font" crossorigin/>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fonts/raleway/Raleway-Medium.ttf" as="font" crossorigin/>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fonts/raleway/Raleway-Regular.ttf" as="font" crossorigin/>
            <?php } else { ?>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fonts/opensans/open-sans-600.woff2" as="font" crossorigin/>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fonts/opensans/open-sans-regular.woff2" as="font" crossorigin/>
                <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fonts/montserrat/Montserrat-SemiBold.woff2" as="font" crossorigin/>
            <?php }?>
            <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fontawesome/webfonts/fa-solid-900.woff2" as="font" crossorigin/>
            <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
themes/base/fontawesome/webfonts/fa-regular-400.woff2" as="font" crossorigin/>
        <?php
}
}
/* {/block 'layout-header-head-resources-preload'} */
/* {block 'layout-header-head-resources-modulepreload'} */
class Block_5429163167ab3166285685_88237456 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <link rel="modulepreload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/app/globals.js" as="script" crossorigin>
            <link rel="modulepreload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/app/snippets/form-counter.js" as="script" crossorigin>
            <link rel="modulepreload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/app/plugins/navscrollbar.js" as="script" crossorigin>
            <link rel="modulepreload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/app/plugins/tabdrop.js" as="script" crossorigin>
            <link rel="modulepreload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/app/views/header.js" as="script" crossorigin>
            <link rel="modulepreload" href="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/app/views/productdetails.js" as="script" crossorigin>
        <?php
}
}
/* {/block 'layout-header-head-resources-modulepreload'} */
/* {block 'layout-header-head-resources-datatables'} */
class Block_156830206067ab31662868a1_99906054 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_MEINKONTO') ? constant('PAGE_MEINKONTO') : null) || $_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?>
                <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/DataTables/datatables.min.js"><?php echo '</script'; ?>
>
            <?php }?>
        <?php
}
}
/* {/block 'layout-header-head-resources-datatables'} */
/* {block 'layout-header-head'} */
class Block_155608529967ab3166270993_55971248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <head>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123549009167ab3166270ab7_91462994', 'layout-header-head-meta', $this->tplIndex);
?>


        <title itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81222391667ab31662775f1_18143350', 'layout-header-head-title', $this->tplIndex);
?>
</title>

        <?php if (!empty($_smarty_tpl->tpl_vars['cCanonicalURL']->value) && !$_smarty_tpl->tpl_vars['noindex']->value) {?>
            <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['cCanonicalURL']->value;?>
">
        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134819849467ab3166277bb6_29823704', 'layout-header-head-base', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117926624067ab3166277d83_98208073', 'layout-header-head-icons', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124181120367ab31662789e9_47879173', 'layout-header-head-theme-color', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158470336567ab31662793a8_62005241', 'layout-header-head-resources', $this->tplIndex);
?>


        <?php if ((isset($_smarty_tpl->tpl_vars['Suchergebnisse']->value)) && $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage() > 1) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49423609267ab3166280fc4_72505309', 'layout-header-prev-next', $this->tplIndex);
?>

        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['dbgBarHead']->value;?>


        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/jquery-3.7.1.min.js"><?php echo '</script'; ?>
>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['general']['use_minify'] === 'N') {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['cPluginJsHead_arr']->value))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cPluginJsHead_arr']->value, 'cJS');
$_smarty_tpl->tpl_vars['cJS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cJS']->value) {
$_smarty_tpl->tpl_vars['cJS']->do_else = false;
?>
                    <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cJS']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
"><?php echo '</script'; ?>
>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cJS_arr']->value, 'cJS');
$_smarty_tpl->tpl_vars['cJS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cJS']->value) {
$_smarty_tpl->tpl_vars['cJS']->do_else = false;
?>
                <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cJS']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
"><?php echo '</script'; ?>
>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cPluginJsBody_arr']->value, 'cJS');
$_smarty_tpl->tpl_vars['cJS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cJS']->value) {
$_smarty_tpl->tpl_vars['cJS']->do_else = false;
?>
                <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cJS']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
"><?php echo '</script'; ?>
>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['minifiedJS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo '</script'; ?>
>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opcPageService']->value->getCurPage()->getJsList(), 'jsTrue', false, 'jsFile');
$_smarty_tpl->tpl_vars['jsTrue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jsFile']->value => $_smarty_tpl->tpl_vars['jsTrue']->value) {
$_smarty_tpl->tpl_vars['jsTrue']->do_else = false;
?>
            <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>
"><?php echo '</script'; ?>
>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if (file_exists(($_smarty_tpl->tpl_vars['currentTemplateDirFullPath']->value).('js/custom.js'))) {?>
            <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentTemplateDir']->value;?>
js/custom.js?v=<?php echo $_smarty_tpl->tpl_vars['nTemplateVersion']->value;?>
"><?php echo '</script'; ?>
>
        <?php }?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getUploaderLang'][0], array( array('iso'=>(($tmp = $_SESSION['currentLanguage']->getIso639() ?? null)===null||$tmp==='' ? '' : $tmp),'assign'=>'uploaderLang'),$_smarty_tpl ) );?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86522567167ab3166284614_00753929', 'layout-header-head-resources-preload', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5429163167ab3166285685_88237456', 'layout-header-head-resources-modulepreload', $this->tplIndex);
?>

        <?php if (!empty($_smarty_tpl->tpl_vars['oUploadSchema_arr']->value)) {?>
            <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/fileinput/fileinput.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/fileinput/themes/fas/theme.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/fileinput/locales/<?php echo $_smarty_tpl->tpl_vars['uploaderLang']->value;?>
.js"><?php echo '</script'; ?>
>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['preisverlauf']['preisverlauf_anzeigen'] === 'Y' && !empty($_smarty_tpl->tpl_vars['bPreisverlauf']->value)) {?>
            <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/Chart.bundle.min.js"><?php echo '</script'; ?>
>
        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156830206067ab31662868a1_99906054', 'layout-header-head-resources-datatables', $this->tplIndex);
?>

        <?php echo '<script'; ?>
 type="module" src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['templateDir']->value;?>
js/app/app.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>(function(){
            // back-to-list-link mechanics

            <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_ARTIKEL') ? constant('PAGE_ARTIKEL') : null)) {?>
                window.sessionStorage.setItem('has_starting_point', 'true');
                window.sessionStorage.removeItem('cur_product_id');
                window.sessionStorage.removeItem('product_page_visits');
                window.should_render_backtolist_link = false;
            <?php } else { ?>
                let has_starting_point = window.sessionStorage.getItem('has_starting_point') === 'true';
                let product_id         = Number(window.sessionStorage.getItem('cur_product_id'));
                let page_visits        = Number(window.sessionStorage.getItem('product_page_visits'));
                let no_reload          = performance.getEntriesByType('navigation')[0].type !== 'reload';

                let browseNext         = <?php if ((isset($_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->kArtikel))) {?>
                        <?php echo $_smarty_tpl->tpl_vars['NavigationBlaettern']->value->naechsterArtikel->kArtikel;
} else { ?>0<?php }?>;

                let browsePrev         = <?php if ((isset($_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->kArtikel))) {?>
                        <?php echo $_smarty_tpl->tpl_vars['NavigationBlaettern']->value->vorherigerArtikel->kArtikel;
} else { ?>0<?php }?>;

                let should_render_link = true;

                if (has_starting_point === false) {
                    should_render_link = false;
                } else if (product_id === 0) {
                    product_id  = <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;?>
;
                    page_visits = 1;
                } else if (product_id === <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;?>
) {
                    if (no_reload) {
                        page_visits ++;
                    }
                } else if (product_id === browseNext || product_id === browsePrev) {
                    product_id = <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;?>
;
                    page_visits ++;
                } else {
                    has_starting_point = false;
                    should_render_link = false;
                }

                window.sessionStorage.setItem('has_starting_point', has_starting_point);
                window.sessionStorage.setItem('cur_product_id', product_id);
                window.sessionStorage.setItem('product_page_visits', page_visits);
                window.should_render_backtolist_link = should_render_link;
            <?php }?>
        })()<?php echo '</script'; ?>
>
    </head>
    <?php
}
}
/* {/block 'layout-header-head'} */
/* {block 'layout-header-body-tag'} */
class Block_140302214367ab3166288af5_17988058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <body class="<?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['button_animated'] === 'Y') {?>btn-animated<?php }?>
                     <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['wish_compare_animation'] === 'mobile' || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['wish_compare_animation'] === 'both') {?>wish-compare-animation-mobile<?php }?>
                     <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['wish_compare_animation'] === 'desktop' || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['wish_compare_animation'] === 'both') {?>wish-compare-animation-desktop<?php }?>
                     <?php if ($_smarty_tpl->tpl_vars['isMobile']->value) {?>is-mobile<?php }?>
                     <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?> is-checkout<?php }?> is-nova"
              data-page="<?php echo $_smarty_tpl->tpl_vars['nSeitenTyp']->value;?>
"
              <?php if ((isset($_smarty_tpl->tpl_vars['Link']->value)) && !empty($_smarty_tpl->tpl_vars['Link']->value->getIdentifier())) {?> id="<?php echo $_smarty_tpl->tpl_vars['Link']->value->getIdentifier();?>
"<?php }?>>
    <?php
}
}
/* {/block 'layout-header-body-tag'} */
/* {block 'layout-header-maintenance-alert'} */
class Block_112359293367ab316628aa05_61409658 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('show'=>true,'variant'=>"warning",'id'=>"maintenance-mode",'dismissible'=>true));
$_block_repeat=true;
echo $_block_plugin17->render(array('show'=>true,'variant'=>"warning",'id'=>"maintenance-mode",'dismissible'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'adminMaintenanceMode'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin17->render(array('show'=>true,'variant'=>"warning",'id'=>"maintenance-mode",'dismissible'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-maintenance-alert'} */
/* {block 'layout-header-safemode-alert'} */
class Block_140221665567ab316628b3d4_19800243 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('show'=>true,'variant'=>"warning",'id'=>"safe-mode",'dismissible'=>true));
$_block_repeat=true;
echo $_block_plugin18->render(array('show'=>true,'variant'=>"warning",'id'=>"safe-mode",'dismissible'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'safeModeActive'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin18->render(array('show'=>true,'variant'=>"warning",'id'=>"safe-mode",'dismissible'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-safemode-alert'} */
/* {block 'layout-header-branding-top-bar'} */
class Block_93002208967ab316628c945_64677288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="header-top-bar" class="d-none topbar-wrapper <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_single_row'] === 'Y') {?>full-width-mega<?php }?> <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['header_full_width'] === 'Y') {?>is-fullwidth<?php }?> d-lg-flex">
                        <div class="<?php if ($_smarty_tpl->tpl_vars['headerWidth']->value === 'B') {?>container<?php } else { ?>container-fluid <?php if ($_smarty_tpl->tpl_vars['headerWidth']->value === 'N') {?>container-fluid-xl<?php }
}?> d-lg-flex flex-row-reverse">
                            <?php $_smarty_tpl->_subTemplateRender('file:layout/header_top_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        </div>
                    </div>
                <?php
}
}
/* {/block 'layout-header-branding-top-bar'} */
/* {block 'layout-header-include-header-menu-single-row'} */
class Block_56886590767ab316628e300_54917919 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:layout/header_menu_single_row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-header-include-header-menu-single-row'} */
/* {block 'layout-header-category-nav-logo'} */
class Block_33361507167ab316628ec81_37753441 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:layout/header_logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'layout-header-category-nav-logo'} */
/* {block 'layout-header-secure-checkout-title'} */
class Block_174784465567ab316628fa46_59576228 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <i class="fas fa-lock icon-mr-2"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'secureCheckout','section'=>'checkout'),$_smarty_tpl ) );?>

                                            <?php
}
}
/* {/block 'layout-header-secure-checkout-title'} */
/* {block 'layout-header-secure-include-header-top-bar'} */
class Block_193517737567ab316628fd88_03387779 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_smarty_tpl->_subTemplateRender('file:layout/header_top_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            <?php
}
}
/* {/block 'layout-header-secure-include-header-top-bar'} */
/* {block 'layout-header-secure-checkout'} */
class Block_58026577667ab316628f930_06899286 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <div class="secure-checkout-icon ml-auto-util ml-lg-0">
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174784465567ab316628fa46_59576228', 'layout-header-secure-checkout-title', $this->tplIndex);
?>

                                        </div>
                                        <div class="secure-checkout-topbar ml-auto-util d-none d-lg-block">
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193517737567ab316628fd88_03387779', 'layout-header-secure-include-header-top-bar', $this->tplIndex);
?>

                                        </div>
                                    <?php
}
}
/* {/block 'layout-header-secure-checkout'} */
/* {block 'layout-header-branding-shop-nav'} */
class Block_187773257767ab31662901a8_90817952 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:layout/header_nav_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php
}
}
/* {/block 'layout-header-branding-shop-nav'} */
/* {block 'layout-header-include-categories-mega'} */
class Block_154177640367ab3166290475_76669726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:layout/header_categories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menuMultipleRows'=>false), 0, false);
?>
                                    <?php
}
}
/* {/block 'layout-header-include-categories-mega'} */
/* {block 'layout-header-category-nav'} */
class Block_54464847367ab316628eb79_12238331 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33361507167ab316628ec81_37753441', 'layout-header-category-nav-logo', $this->tplIndex);
?>

                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {
echo "align-items-center-util";
} else {
echo "align-items-lg-end";
}
$_prefixVariable12=ob_get_clean();
$_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['navbar'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navbar'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'render'))) {
throw new SmartyException('block tag \'navbar\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navbar', array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable12));
$_block_repeat=true;
echo $_block_plugin19->render(array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58026577667ab316628f930_06899286', 'layout-header-secure-checkout', $this->tplIndex);
?>

                                <?php } else { ?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187773257767ab31662901a8_90817952', 'layout-header-branding-shop-nav', $this->tplIndex);
?>


                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154177640367ab3166290475_76669726', 'layout-header-include-categories-mega', $this->tplIndex);
?>

                                <?php }?>
                            <?php $_block_repeat=false;
echo $_block_plugin19->render(array('toggleable'=>true,'fill'=>true,'type'=>"expand-lg",'class'=>"justify-content-start ".$_prefixVariable12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'layout-header-category-nav'} */
/* {block 'layout-header-container-inner'} */
class Block_57900964967ab316628e6b2_78004228 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="<?php if ($_smarty_tpl->tpl_vars['headerWidth']->value === 'B') {?>container<?php } else { ?>container-fluid <?php if ($_smarty_tpl->tpl_vars['headerWidth']->value === 'N') {?>container-fluid-xl<?php }
}?>">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54464847367ab316628eb79_12238331', 'layout-header-category-nav', $this->tplIndex);
?>

                        </div>
                    <?php
}
}
/* {/block 'layout-header-container-inner'} */
/* {block 'layout-header-search'} */
class Block_13901450267ab3166290b40_40095259 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['mobile_search_type'] === 'fixed') {?>
                        <div class="d-lg-none search-form-wrapper-fixed container-fluid container-fluid-xl order-1">
                            <?php $_smarty_tpl->_subTemplateRender('file:snippets/search_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'search-header-mobile-top'), 0, false);
?>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'layout-header-search'} */
/* {block 'layout-header-search-fixed'} */
class Block_4839834467ab31662911a1_04179524 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['mobile_search_type'] === 'fixed' && $_smarty_tpl->tpl_vars['isMobile']->value) {?>
                    <div class="container-fluid container-fluid-xl fixed-search fixed-top smoothscroll-top-search d-lg-none d-none">
                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/search_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'search-header-mobile-fixed'), 0, true);
?>
                    </div>
                <?php }?>
            <?php
}
}
/* {/block 'layout-header-search-fixed'} */
/* {block 'layout-header-header'} */
class Block_137776210467ab316628ba98_61840857 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_assignInScope('headerWidth', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['header_full_width']);?>
            <?php if ((($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_scroll'] !== 'menu' && $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_single_row'] === 'Y') || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_single_row'] === 'N') && $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_show_topbar'] === 'Y' && $_smarty_tpl->tpl_vars['nSeitenTyp']->value !== (defined('PAGE_BESTELLVORGANG') ? constant('PAGE_BESTELLVORGANG') : null)) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93002208967ab316628c945_64677288', 'layout-header-branding-top-bar', $this->tplIndex);
?>

            <?php }?>
            <header class="d-print-none <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_single_row'] === 'Y') {?>full-width-mega<?php }?>
                        <?php if ((!$_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['mobile_search_type'] !== 'fixed') && $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_scroll'] !== 'none') {?>sticky-top<?php }?>
                        fixed-navbar theme-<?php echo $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['theme_default'];?>
"
                    id="jtl-nav-wrapper">
                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['header']['menu_single_row'] === 'Y') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56886590767ab316628e300_54917919', 'layout-header-include-header-menu-single-row', $this->tplIndex);
?>

                <?php } else { ?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57900964967ab316628e6b2_78004228', 'layout-header-container-inner', $this->tplIndex);
?>

                <?php }?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13901450267ab3166290b40_40095259', 'layout-header-search', $this->tplIndex);
?>

            </header>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4839834467ab31662911a1_04179524', 'layout-header-search-fixed', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'layout-header-header'} */
/* {block 'layout-header-main-wrapper-starttag'} */
class Block_11156991467ab3166291a27_72516770 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <main id="main-wrapper" class="<?php if ($_smarty_tpl->tpl_vars['bExclusive']->value) {?> exclusive<?php }
if ($_smarty_tpl->tpl_vars['hasLeftPanel']->value) {?> aside-active<?php }?>">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_main','inContainer'=>false),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'layout-header-main-wrapper-starttag'} */
/* {block 'layout-header-fluid-banner-include-banner'} */
class Block_185394224867ab3166292695_55497555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:snippets/banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isFluid'=>true), 0, false);
?>
            <?php
}
}
/* {/block 'layout-header-fluid-banner-include-banner'} */
/* {block 'layout-header-fluid-banner-include-slider'} */
class Block_20332633067ab31662932e4_65942928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:snippets/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isFluid'=>true), 0, false);
?>
            <?php
}
}
/* {/block 'layout-header-fluid-banner-include-slider'} */
/* {block 'layout-header-fluid-banner'} */
class Block_54080463967ab3166292009_58816000 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_assignInScope('isFluidBanner', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['banner_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oImageMap']->value)));?>
        <?php if ($_smarty_tpl->tpl_vars['isFluidBanner']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185394224867ab3166292695_55497555', 'layout-header-fluid-banner-include-banner', $this->tplIndex);
?>

        <?php }?>
        <?php $_smarty_tpl->_assignInScope('isFluidSlider', $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['slider_full_width'] === 'Y' && (isset($_smarty_tpl->tpl_vars['oSlider']->value)) && count($_smarty_tpl->tpl_vars['oSlider']->value->getSlides()) > 0);?>
        <?php if ($_smarty_tpl->tpl_vars['isFluidSlider']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20332633067ab31662932e4_65942928', 'layout-header-fluid-banner-include-slider', $this->tplIndex);
?>

        <?php }?>
    <?php
}
}
/* {/block 'layout-header-fluid-banner'} */
/* {block 'layout-header-content-wrapper-starttag'} */
class Block_130361650067ab31662938c7_19477229 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper"
                 class="<?php if (($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) || (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value) {?>has-left-sidebar container-fluid container-fluid-xl<?php }?>
                 <?php if ((defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value) {?>is-item-list<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['isFluidBanner']->value || $_smarty_tpl->tpl_vars['isFluidSlider']->value) {?> has-fluid<?php }?>">
        <?php
}
}
/* {/block 'layout-header-content-wrapper-starttag'} */
/* {block 'layout-header-breadcrumb'} */
class Block_163055426467ab3166294500_79029728 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>(($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) || (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value || ((isset($_smarty_tpl->tpl_vars['Link']->value)) && $_smarty_tpl->tpl_vars['Link']->value->getIsFluid())),'class'=>"breadcrumb-container"));
$_block_repeat=true;
echo $_block_plugin20->render(array('fluid'=>(($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) || (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value || ((isset($_smarty_tpl->tpl_vars['Link']->value)) && $_smarty_tpl->tpl_vars['Link']->value->getIsFluid())),'class'=>"breadcrumb-container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_block_repeat=false;
echo $_block_plugin20->render(array('fluid'=>(($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) || (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value || ((isset($_smarty_tpl->tpl_vars['Link']->value)) && $_smarty_tpl->tpl_vars['Link']->value->getIsFluid())),'class'=>"breadcrumb-container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'layout-header-breadcrumb'} */
/* {block 'layout-header-content-starttag'} */
class Block_15526934767ab3166295284_96616885 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content">
        <?php
}
}
/* {/block 'layout-header-content-starttag'} */
/* {block 'layout-header-content-productlist-starttags'} */
class Block_138052464467ab3166296644_60022876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="row justify-content-lg-end">
                    <div class="col-lg-8 col-xl-9 ml-auto-util ">
            <?php
}
}
/* {/block 'layout-header-content-productlist-starttags'} */
/* {block 'layout-header-alert'} */
class Block_142276531567ab31662968d0_09872646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:snippets/alert_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'layout-header-alert'} */
/* {block 'layout-header-content-all-starttags'} */
class Block_41100835367ab31662937a5_80679414 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130361650067ab31662938c7_19477229', 'layout-header-content-wrapper-starttag', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163055426467ab3166294500_79029728', 'layout-header-breadcrumb', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15526934767ab3166295284_96616885', 'layout-header-content-starttag', $this->tplIndex);
?>


        <?php if (!$_smarty_tpl->tpl_vars['bExclusive']->value && $_smarty_tpl->tpl_vars['boxes']->value['left'] !== null && !empty(trim(strip_tags($_smarty_tpl->tpl_vars['boxes']->value['left']))) && (($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['theme']['left_sidebar'] === 'Y' && $_smarty_tpl->tpl_vars['boxesLeftActive']->value) || (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) === $_smarty_tpl->tpl_vars['nSeitenTyp']->value)) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138052464467ab3166296644_60022876', 'layout-header-content-productlist-starttags', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142276531567ab31662968d0_09872646', 'layout-header-alert', $this->tplIndex);
?>


    <?php
}
}
/* {/block 'layout-header-content-all-starttags'} */
/* {block 'layout-header'} */
class Block_111153068467ab316626fbe8_39407611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header' => 
  array (
    0 => 'Block_111153068467ab316626fbe8_39407611',
  ),
  'layout-header-doctype' => 
  array (
    0 => 'Block_70538820567ab316626fda7_15777555',
  ),
  'layout-header-html-attributes' => 
  array (
    0 => 'Block_73338053367ab3166270023_04923592',
  ),
  'layout-header-head' => 
  array (
    0 => 'Block_155608529967ab3166270993_55971248',
  ),
  'layout-header-head-meta' => 
  array (
    0 => 'Block_123549009167ab3166270ab7_91462994',
  ),
  'layout-header-head-meta-description' => 
  array (
    0 => 'Block_149409795067ab3166270db2_51452512',
  ),
  'layout-header-head-meta-keywords' => 
  array (
    0 => 'Block_75986838367ab3166271515_02006561',
  ),
  'layout-header-head-title' => 
  array (
    0 => 'Block_81222391667ab31662775f1_18143350',
  ),
  'layout-header-head-base' => 
  array (
    0 => 'Block_134819849467ab3166277bb6_29823704',
  ),
  'layout-header-head-icons' => 
  array (
    0 => 'Block_117926624067ab3166277d83_98208073',
  ),
  'layout-header-head-theme-color' => 
  array (
    0 => 'Block_124181120367ab31662789e9_47879173',
  ),
  'layout-header-head-resources' => 
  array (
    0 => 'Block_158470336567ab31662793a8_62005241',
  ),
  'layout-header-head-resources-crit-outer' => 
  array (
    0 => 'Block_137638046367ab31662799d0_54710345',
  ),
  'layout-header-head-resources-crit' => 
  array (
    0 => 'Block_132430763767ab3166279ae8_35908664',
  ),
  'layout-header-menu-single-row-css' => 
  array (
    0 => 'Block_32471275667ab316627a130_05228816',
  ),
  'layout-header-prev-next' => 
  array (
    0 => 'Block_49423609267ab3166280fc4_72505309',
  ),
  'layout-header-head-resources-preload' => 
  array (
    0 => 'Block_86522567167ab3166284614_00753929',
  ),
  'layout-header-head-resources-modulepreload' => 
  array (
    0 => 'Block_5429163167ab3166285685_88237456',
  ),
  'layout-header-head-resources-datatables' => 
  array (
    0 => 'Block_156830206067ab31662868a1_99906054',
  ),
  'layout-header-body-tag' => 
  array (
    0 => 'Block_140302214367ab3166288af5_17988058',
  ),
  'layout-header-maintenance-alert' => 
  array (
    0 => 'Block_112359293367ab316628aa05_61409658',
  ),
  'layout-header-safemode-alert' => 
  array (
    0 => 'Block_140221665567ab316628b3d4_19800243',
  ),
  'layout-header-header' => 
  array (
    0 => 'Block_137776210467ab316628ba98_61840857',
  ),
  'layout-header-branding-top-bar' => 
  array (
    0 => 'Block_93002208967ab316628c945_64677288',
  ),
  'layout-header-include-header-menu-single-row' => 
  array (
    0 => 'Block_56886590767ab316628e300_54917919',
  ),
  'layout-header-container-inner' => 
  array (
    0 => 'Block_57900964967ab316628e6b2_78004228',
  ),
  'layout-header-category-nav' => 
  array (
    0 => 'Block_54464847367ab316628eb79_12238331',
  ),
  'layout-header-category-nav-logo' => 
  array (
    0 => 'Block_33361507167ab316628ec81_37753441',
  ),
  'layout-header-secure-checkout' => 
  array (
    0 => 'Block_58026577667ab316628f930_06899286',
  ),
  'layout-header-secure-checkout-title' => 
  array (
    0 => 'Block_174784465567ab316628fa46_59576228',
  ),
  'layout-header-secure-include-header-top-bar' => 
  array (
    0 => 'Block_193517737567ab316628fd88_03387779',
  ),
  'layout-header-branding-shop-nav' => 
  array (
    0 => 'Block_187773257767ab31662901a8_90817952',
  ),
  'layout-header-include-categories-mega' => 
  array (
    0 => 'Block_154177640367ab3166290475_76669726',
  ),
  'layout-header-search' => 
  array (
    0 => 'Block_13901450267ab3166290b40_40095259',
  ),
  'layout-header-search-fixed' => 
  array (
    0 => 'Block_4839834467ab31662911a1_04179524',
  ),
  'layout-header-main-wrapper-starttag' => 
  array (
    0 => 'Block_11156991467ab3166291a27_72516770',
  ),
  'layout-header-fluid-banner' => 
  array (
    0 => 'Block_54080463967ab3166292009_58816000',
  ),
  'layout-header-fluid-banner-include-banner' => 
  array (
    0 => 'Block_185394224867ab3166292695_55497555',
  ),
  'layout-header-fluid-banner-include-slider' => 
  array (
    0 => 'Block_20332633067ab31662932e4_65942928',
  ),
  'layout-header-content-all-starttags' => 
  array (
    0 => 'Block_41100835367ab31662937a5_80679414',
  ),
  'layout-header-content-wrapper-starttag' => 
  array (
    0 => 'Block_130361650067ab31662938c7_19477229',
  ),
  'layout-header-breadcrumb' => 
  array (
    0 => 'Block_163055426467ab3166294500_79029728',
  ),
  'layout-header-content-starttag' => 
  array (
    0 => 'Block_15526934767ab3166295284_96616885',
  ),
  'layout-header-content-productlist-starttags' => 
  array (
    0 => 'Block_138052464467ab3166296644_60022876',
  ),
  'layout-header-alert' => 
  array (
    0 => 'Block_142276531567ab31662968d0_09872646',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70538820567ab316626fda7_15777555', 'layout-header-doctype', $this->tplIndex);
?>

    <html <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73338053367ab3166270023_04923592', 'layout-header-html-attributes', $this->tplIndex);
?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155608529967ab3166270993_55971248', 'layout-header-head', $this->tplIndex);
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['has_boxes'][0], array( array('position'=>'left','assign'=>'hasLeftPanel'),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140302214367ab3166288af5_17988058', 'layout-header-body-tag', $this->tplIndex);
?>

    <?php if (!$_smarty_tpl->tpl_vars['bExclusive']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['opcDir']->value).('tpl/startmenu.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['bAdminWartungsmodus']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112359293367ab316628aa05_61409658', 'layout-header-maintenance-alert', $this->tplIndex);
?>

        <?php }?>
        <?php if ((defined('SAFE_MODE') ? constant('SAFE_MODE') : null) === true) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140221665567ab316628b3d4_19800243', 'layout-header-safemode-alert', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137776210467ab316628ba98_61840857', 'layout-header-header', $this->tplIndex);
?>

    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11156991467ab3166291a27_72516770', 'layout-header-main-wrapper-starttag', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54080463967ab3166292009_58816000', 'layout-header-fluid-banner', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41100835367ab31662937a5_80679414', 'layout-header-content-all-starttags', $this->tplIndex);
}
}
/* {/block 'layout-header'} */
}
