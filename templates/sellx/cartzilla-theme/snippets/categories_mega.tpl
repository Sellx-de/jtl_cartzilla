{block name='snippets-categories-mega'}
    {strip}
    {block name='snippets-categories-mega-assigns'}
        {if !isset($i)}
            {assign var=i value=0}
        {/if}
        {if !isset($activeId)}
            {if $NaviFilter->hasCategory()}
                {$activeId = $NaviFilter->getCategory()->getValue()}
            {elseif $nSeitenTyp === $smarty.const.PAGE_ARTIKEL && isset($Artikel)}
                {$activeId = $Artikel->gibKategorie()}
            {elseif $nSeitenTyp === $smarty.const.PAGE_ARTIKEL && isset($smarty.session.LetzteKategorie)}
                {$activeId = $smarty.session.LetzteKategorie}
            {else}
                {$activeId = 0}
            {/if}
        {/if}
    {/block}
    {block name='snippets-categories-mega-categories'}
    {if $Einstellungen.template.megamenu.show_categories !== 'N'
        && ($Einstellungen.global.global_sichtbarkeit != 3 || \JTL\Session\Frontend::getCustomer()->getID() > 0)}
        {get_category_array categoryId=0 assign='categories'}
        {if !empty($categories)}
            {if !isset($activeParents)
            && ($nSeitenTyp === $smarty.const.PAGE_ARTIKEL || $nSeitenTyp === $smarty.const.PAGE_ARTIKELLISTE)}
                {get_category_parents categoryId=$activeId assign='activeParents'}
            {/if}
            {block name='snippets-categories-mega-categories-inner'}

             
                {foreach $categories as $category}
                    {if isset($activeParents) && is_array($activeParents) && isset($activeParents[$i])}
                        {assign var=activeParent value=$activeParents[$i]}
                    {/if}
                    {if $category->isOrphaned() === false}
                       
                            {if $category->hasChildren()}
                                {if !empty($category->getChildren())}
                                    {assign var=sub_categories value=$category->getChildren()}
                                {else}
                                    {get_category_array categoryId=$category->getID() assign='sub_categories'}
                                {/if}
<div class="mega-dropdown-column py-4 px-3">
    <div class="widget widget-links">
        <h6 class="fs-base mb-3">{$category->getName()}</h6>
        <ul class="widget-list">
            {foreach $sub_categories as $sub}
                <li class="widget-list-item">
                    <a class="widget-list-link" href="{$sub->getURL()}">{$sub->getName()}</a>
                </li>
            {/foreach}
        </ul>
        <a class="fs-sm" href="{$category->getURL()}">
            {lang key='showAll'} <i class="ci-arrow-right fs-xs ms-1"></i>
        </a>
    </div>
</div>
                            {/if}
                        
                    {/if}
                {/foreach}
            {/block}
        {/if}
    {/if}
    {/block}

    {block name='snippets-categories-mega-manufacturers'}
    {if $Einstellungen.template.megamenu.show_manufacturers !== 'N'
        && ($Einstellungen.global.global_sichtbarkeit != 3 || JTL\Session\Frontend::getCustomer()->getID() > 0)}
        {get_manufacturers assign='manufacturers'}
        {if !empty($manufacturers)}
            <div class="mega-dropdown-column pt-3 pt-sm-4 px-2 px-lg-3">
                <div class="widget widget-links">
                    <h6 class="fs-base mb-3">
                        <i class="ci-store me-2"></i>
                        {lang key='manufacturers'}
                    </h6>
                    <ul class="widget-list">
                        {foreach $manufacturers as $manufacturer}
                            <li class="widget-list-item">
                                {link href=$manufacturer->getURL()
                                    title=$manufacturer->getName()|escape:'html'
                                    class="widget-list-link"
                                    data=["manufacturer-id"=>$manufacturer->getID()]}
                                    {$manufacturer->getName()}
                                {/link}
                            </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        {/if}
    {/if}
    {/block}

    {if $Einstellungen.template.megamenu.show_pages !== 'N'}
        {block name='snippets-categories-mega-include-linkgroup-list'}
            {include file='snippets/linkgroup_list.tpl' linkgroupIdentifier='megamenu' dropdownSupport=true tplscope='megamenu'}
        {/block}
    {/if}

    {if $isMobile}
        {block name='snippets-categories-mega-top-links-hr'}
            <li class="d-lg-none"><hr></li>
        {/block}
        {block name='snippets-categories-mega-wishlist'}
        {if $Einstellungen.global.global_wunschliste_anzeigen === 'Y'}
            {navitem href="{get_static_route id='wunschliste.php'}" class="wl-nav-scrollbar-item nav-scrollbar-item"}
                {lang key='wishlist'}
                {badge id="badge-wl-count" variant="primary" class="product-count text-bg-primary"}
                    {if \JTL\Session\Frontend::getWishlist()->getID() > 0}
                        {\JTL\Session\Frontend::getWishlist()->getItems()|count}
                    {else}
                        0
                    {/if}
                {/badge}
            {/navitem}
        {/if}
        {/block}
        {block name='snippets-categories-mega-comparelist'}
        {if $Einstellungen.vergleichsliste.vergleichsliste_anzeigen === 'Y'}
            {navitem href="{get_static_route id='vergleichsliste.php'}" class="comparelist-nav-scrollbar-item nav-scrollbar-item"}
                {lang key='compare'}
                {badge id="comparelist-badge" variant="primary" class="product-count text-bg-primary"}
                    {count(JTL\Session\Frontend::getCompareList()->oArtikel_arr)}
                {/badge}
            {/navitem}
        {/if}
        {/block}
        {if $linkgroups->getLinkGroupByTemplate('Kopf') !== null}
        {block name='snippets-categories-mega-top-links'}
            {foreach $linkgroups->getLinkGroupByTemplate('Kopf')->getLinks() as $Link}
                {navitem class="nav-scrollbar-item d-lg-none" active=$Link->getIsActive() href=$Link->getURL() title=$Link->getTitle() target=$Link->getTarget()}
                    {$Link->getName()}
                {/navitem}
            {/foreach}
        {/block}
        {/if}
        {block name='layout-header-top-bar-user-settings'}
            {block name='layout-header-top-bar-user-settings-currency'}
                {if JTL\Session\Frontend::getCurrencies()|count > 1}
                    <li class="currency-nav-scrollbar-item nav-item nav-scrollbar-item dropdown dropdown-full d-lg-none">
                        {block name='layout-header-top-bar-user-settings-currency-link'}
                            {link id='currency-dropdown' href='#' title={lang key='currency'} class="nav-link dropdown-toggle" target="_self"}
                                {lang key='currency'}
                            {/link}
                        {/block}
                        {block name='layout-header-top-bar-user-settings-currency-body'}
                            <div class="dropdown-menu" data-bs-popper="static">
                                <div class="dropdown-body">
                                    {container}
                                        {row class="lg-row-lg nav"}
                                            {col lg=4 xl=3 class="nav-item-lg-m nav-item dropdown d-lg-none"}
                                                {block name='layout-header-top-bar-user-settings-currency-header'}
                                                    <strong class="nav-mobile-heading">{lang key='currency'}</strong>
                                                {/block}
                                            {/col}
                                            {foreach JTL\Session\Frontend::getCurrencies() as $currency}
                                                {col lg=4 xl=3 class='nav-item-lg-m nav-item'}
                                                    {block name='layout-header-top-bar-user-settings-currency-header-items'}
                                                        {dropdownitem href=$currency->getURLFull() rel="nofollow" active=(JTL\Session\Frontend::getCurrency()->getName() === $currency->getName())}
                                                            {$currency->getName()}
                                                        {/dropdownitem}
                                                    {/block}
                                                {/col}
                                            {/foreach}
                                        {/row}
                                    {/container}
                                </div>
                            </div>
                        {/block}
                    </li>
                {/if}
            {/block}
        {/block}
    {/if}
    {/strip}
{/block}