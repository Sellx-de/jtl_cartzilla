{block name='layout-header-categories'}
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
    
            <div class="position-relative d-lg-flex align-items-center justify-content-between">
                
                <!-- Categories mega menu -->
                <div class="navbar-nav">
                    <div class="dropdown position-static pb-lg-2">
                        <button type="button" class="nav-link animate-underline fw-semibold text-uppercase ps-0" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">
                            <i class="ci-menu fs-lg me-2"></i>
                            <span class="animate-target">Kategorien</span>
                        </button>
                        <div class="dropdown-menu w-100 p-4 px-xl-5 position-absolute" style="--cz-dropdown-spacer: .75rem; z-index: 1030;">
                            
                            <!-- Nav tabs -->
                            <ul class="navbar-nav position-relative me-xl-n5" role="tablist">
                                {get_category_array categoryId=0 assign='mainCategories'}
                                {if !empty($mainCategories)}
                                    {foreach $mainCategories as $mainCategory}
                                        <li class="nav-item" role="presentation">
                                            <button type="button" class="nav-link text-uppercase {if $mainCategory@first}active{/if}" 
                                                   id="category-tab-{$mainCategory->getID()}" 
                                                   data-bs-toggle="tab" 
                                                   data-bs-target="#category-tab-pane-{$mainCategory->getID()}" 
                                                   role="tab" 
                                                   aria-controls="category-tab-pane-{$mainCategory->getID()}" 
                                                   aria-selected="{if $mainCategory@first}true{else}false{/if}">
                                                {$mainCategory->getName()}
                                            </button>
                                        </li>
                                    {/foreach}
                                {/if}
                                
                                {* Manufacturers tab *}
                                {if $Einstellungen.template.megamenu.show_manufacturers !== 'N'}
                                    <li class="nav-item" role="presentation">
                                        <button type="button" class="nav-link text-uppercase" 
                                               id="manufacturers-tab" 
                                               data-bs-toggle="tab" 
                                               data-bs-target="#manufacturers-tab-pane" 
                                               role="tab" 
                                               aria-controls="manufacturers-tab-pane" 
                                               aria-selected="false">
                                            Hersteller
                                        </button>
                                    </li>
                                {/if}
                            </ul>
                            
                            <!-- Tab panes -->
                            <div class="tab-content pb-xl-4">
                                {* Categories tabs *}
                                {if !empty($mainCategories)}
                                    {foreach $mainCategories as $mainCategory}
                                        <div class="tab-pane fade{if $mainCategory@first} show active{/if}" 
                                             id="category-tab-pane-{$mainCategory->getID()}" 
                                             role="tabpanel" 
                                             aria-labelledby="category-tab-{$mainCategory->getID()}">
                                            <div class="row g-4">
                                                {include file='snippets/categories_mega.tpl' mainCategory=$mainCategory}
                                                
                                                {* Promo image for category - optional *}
                                                <div class="col-lg-4 d-none d-lg-block" data-bs-theme="light">
                                                    <div class="position-relative d-flex flex-column h-100 rounded-4 overflow-hidden p-4">
                                                        <div class="position-relative d-flex flex-column justify-content-between h-100 z-2 pt-xl-2 ps-xl-2">
                                                            <div class="h4 lh-base">{$mainCategory->getName()}<br>Kollektion</div>
                                                            <div>
                                                                <a class="btn btn-sm btn-dark stretched-link" href="{$mainCategory->getURL()}" data-bs-theme="light">Jetzt kaufen</a>
                                                            </div>
                                                        </div>
                                                        {if $mainCategory->getImage()}
                                                            <img src="{$mainCategory->getImage()}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="{$mainCategory->getName()}">
                                                        {/if}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {/foreach}
                                {/if}

                                {* Manufacturers tab *}
                                {if $Einstellungen.template.megamenu.show_manufacturers !== 'N'}
                                    <div class="tab-pane fade" id="manufacturers-tab-pane" role="tabpanel" aria-labelledby="manufacturers-tab">
                                        <div class="row g-4">
                                            {get_manufacturers assign='manufacturers'}
                                            {if !empty($manufacturers)}
                                                {foreach $manufacturers as $manufacturer}
                                                    <div class="col-lg-3">
                                                        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none" href="{$manufacturer->getURL()}">
                                                            <span class="animate-target">{$manufacturer->getName()}</span>
                                                        </a>
                                                    </div>
                                                {/foreach}
                                            {/if}
                                        </div>
                                    </div>
                                {/if}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navbar nav -->
                <ul class="nav nav-underline justify-content-lg-center mt-n2 mt-lg-0 mb-4">
                    {* Hauptnavigation *}
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="{$ShopURL}">Home</a>
                    </li>
                    <li class="nav-item dropdown pb-lg-2 me-lg-n1 me-xl-0 position-relative">
                        <a class="nav-link dropdown-toggle" href="{$ShopURL}/Shop" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu position-absolute" style="--cz-dropdown-spacer: .75rem; z-index: 1030;">
                            {if !empty($mainCategories)}
                                {foreach $mainCategories as $mainCategory}
                                    <li class="d-flex w-100 pt-1">
                                        <a class="dropdown-item" href="{$mainCategory->getURL()}">{$mainCategory->getName()}</a>
                                    </li>
                                {/foreach}
                            {/if}
                        </ul>
                    </li>
                    {if isset($smarty.session.Kunde) && $smarty.session.Kunde->kKunde > 0}
                        <li class="nav-item dropdown pb-lg-2 me-lg-n1 me-xl-0">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Mein Konto</a>
                            <ul class="dropdown-menu" style="--cz-dropdown-spacer: .75rem">
                                <li><a class="dropdown-item" href="{$ShopURL}/jtl.php?bestellungen=1">Bestellungen</a></li>
                                <li><a class="dropdown-item" href="{$ShopURL}/jtl.php?wllist=1">Wunschliste</a></li>
                                <li><a class="dropdown-item" href="{$ShopURL}/jtl.php?bewertungen=1">Meine Bewertungen</a></li>
                                <li><a class="dropdown-item" href="{$ShopURL}/jtl.php?editRechnungsadresse=1">Persönliche Daten</a></li>
                                <li><a class="dropdown-item" href="{$ShopURL}/jtl.php?editLieferadresse=1">Adressen</a></li>
                            </ul>
                        </li>
                    {else}
                        <li class="nav-item pb-lg-2 me-lg-n1 me-xl-0">
                            <a class="nav-link" href="{$ShopURL}/jtl.php?login=1">Anmelden</a>
                        </li>
                    {/if}
                    <li class="nav-item pb-lg-2 me-lg-n2 me-xl-0">
                        <a class="nav-link" href="{$ShopURL}/kontakt.php">Kontakt</a>
                    </li>
                    
                    {if $menuScroll|default:false}
                        {block name='layout-header-jtl-header-include-include-categories-mega-home'}
                            <li class="nav-home-button nav-item nav-scrollbar-item d-none">
                                {link class="nav-link" href=$ShopURL title=$Einstellungen.global.global_shopname}
                                    <span class="fas fa-home"></span>
                                {/link}
                            </li>
                        {/block}
                    {/if}
                </ul>
                
                <!-- Search toggle visible on screens > 991px wide (lg breakpoint) -->
                <button type="button" class="btn btn-outline-secondary justify-content-start w-100 px-3 mb-lg-2 ms-3 d-none d-lg-inline-flex" style="max-width: 240px" data-bs-toggle="offcanvas" data-bs-target="#searchBox" aria-controls="searchBox">
                    <i class="ci-search fs-base ms-n1 me-2"></i>
                    <span class="text-body-tertiary fw-normal">Suchen</span>
                </button>
            
    </div>


{/block}