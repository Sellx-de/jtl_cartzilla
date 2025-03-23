{$style = $instance->getProperty('listStyle')}
{$uid = $instance->getUid()}

{$displayCountSM = $instance->getProperty('displayCountSM')}
{$displayCountMD = $instance->getProperty('displayCountMD')}
{$displayCountLG = $instance->getProperty('displayCountLG')}
{$displayCountXL = $instance->getProperty('displayCountXL')}

{if $isPreview}
    <div class="opc-ProductStream" style="{$instance->getStyleString()}">
        {image alt='ProductStream' src=$portlet->getBaseUrl()|cat:'preview.'|cat:$style|cat:'.png'}
    </div>
{else}
    {$productlist = $portlet->getFilteredProducts($instance)}

    {if $style === 'list' || $style === 'gallery'}
        {if $style === 'list'}
            {$grid = '12'}
            {$eqHeightClasses = ''}
        {else}
            {$grid   = '6'}
            {$gridmd = '4'}
            {$gridxl = '3'}
            {$eqHeightClasses = 'row-eq-height row-eq-img-height'}
        {/if}
        {if $inContainer === false}
            <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
        {/if}
        {row class="$style $eqHeightClasses product-list opc-ProductStream opc-ProductStream-$style
                    {$instance->getStyleClasses()}"
            itemprop="mainEntity"
            itemscope=true
            itemtype="https://schema.org/ItemList"
            style="{$instance->getStyleString()}"}
            {foreach $productlist as $Artikel}
                {col cols={$grid} md="{if isset($gridmd)}{$gridmd}{/if}" xl="{if isset($gridxl)}{$gridxl}{/if}"
                     class="product-wrapper {if !($style === 'list' && $Artikel@last)}mb-4{/if}"
                     itemprop="itemListElement" itemscope=true itemtype="https://schema.org/Product"}
                    {if $style === 'list'}
                        {include file='productlist/item_list.tpl' tplscope=$style isOPC=true
                            idPrefix=$instance->getUid()}
                    {elseif $style === 'gallery'}
                        {include file='productlist/item_box.tpl' tplscope=$style class='animate-underline hover-effect-opacity'
                            idPrefix=$instance->getUid()}
                    {/if}
                {/col}
            {/foreach}
        {/row}
        {if $inContainer === false}
            </section>
        {/if}
    {elseif $style === 'slider' || $style === 'simpleSlider' || $style === 'box-slider'}
        <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
            <div class="d-flex align-items-center justify-content-between pt-1 pt-lg-0 pb-3 mb-2 mb-sm-3">
                <h2 class="mb-0 me-3">{if isset($instance->getProperty('headline'))}{$instance->getProperty('headline')}{else}{if $style === 'box-slider'}Trending products{else}Produkte{/if}{/if}</h2>

                <!-- Slider prev/next buttons -->
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-start rounded-circle me-1" id="product-prev-{$uid}" aria-label="Prev">
                        <i class="ci-chevron-left fs-lg animate-target"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-end rounded-circle" id="product-next-{$uid}" aria-label="Next">
                        <i class="ci-chevron-right fs-lg animate-target"></i>
                    </button>
                </div>
            </div>

            <!-- Slider -->
            <div class="swiper" data-swiper='{
                "slidesPerView": 2,
                "spaceBetween": 24,
                "loop": true,
                "navigation": {
                    "prevEl": "#product-prev-{$uid}",
                    "nextEl": "#product-next-{$uid}"
                },
                "breakpoints": {
                    "576": {
                        "slidesPerView": {$displayCountSM}
                    },
                    "768": {
                        "slidesPerView": {$displayCountMD}
                    },
                    "992": {
                        "slidesPerView": {$displayCountLG}
                    },
                    "1200": {
                        "slidesPerView": {$displayCountXL}
                    }
                }
            }'>
                <div class="swiper-wrapper">
                    {foreach $productlist as $Artikel}
                        <!-- Item -->
                        <div class="swiper-slide">
                            <div class="animate-underline hover-effect-opacity">
                                <div class="position-relative mb-3">
                                    {* Badges / Ribbons im Cartzilla-Style *}
                                    {if $Artikel->Preise->rabatt > 0}
                                        <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">-{$Artikel->Preise->rabatt}%</span>
                                    {/if}
                                    {if isset($Artikel->oSuchspecialBadge_arr) && $Artikel->oSuchspecialBadge_arr|count > 0}
                                        {foreach $Artikel->oSuchspecialBadge_arr as $oSuchspecialBadge}
                                            {if $oSuchspecialBadge->cBadge === 'Neu'}
                                                <span class="badge text-bg-info position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">{$oSuchspecialBadge->cBadge}</span>
                                            {elseif $oSuchspecialBadge->cBadge === 'Top'}
                                                <span class="badge text-bg-success position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">{$oSuchspecialBadge->cBadge}</span>
                                            {elseif $oSuchspecialBadge->cBadge === 'Sale' || $oSuchspecialBadge->cBadge === 'Aktion'}
                                                <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">{$oSuchspecialBadge->cBadge}</span>
                                            {elseif $oSuchspecialBadge->cBadge === 'Tipp'}
                                                <span class="badge text-bg-warning position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">{$oSuchspecialBadge->cBadge}</span>
                                            {else}
                                                <span class="badge text-bg-secondary position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">{$oSuchspecialBadge->cBadge}</span>
                                            {/if}
                                            {break} {* Nur das erste Badge anzeigen *}
                                        {/foreach}
                                    {/if}
                                    
                                    <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                                        <i class="ci-heart animate-target"></i>
                                    </button>
                                    <a class="d-flex bg-body-tertiary rounded p-3" href="{$Artikel->cURLFull}">
                                        <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                                            {include file='snippets/image.tpl' item=$Artikel alt=$Artikel->cName|escape:'html'
                                                square=false srcSize='sm' class='product-image'
                                                sizes='(min-width: 1300px) 15vw, (min-width: 992px) 20vw, (min-width: 768px) 34vw, 50vw'
                                            }
                                        </div>
                                    </a>
                                    {if $Artikel->Variationen|count > 0 && $style !== 'simpleSlider'}
                                        <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                                            <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                                                {foreach $Artikel->Variationen as $variation}
                                                    {if $variation@iteration <= 4}
                                                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">{$variation->cName|truncate:2:''}</span>
                                                    {/if}
                                                {/foreach}
                                                {if $Artikel->Variationen|count > 4}
                                                    <div class="nav">
                                                        <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="{$Artikel->cURLFull}">+{$Artikel->Variationen|count - 4}</a>
                                                    </div>
                                                {/if}
                                            </div>
                                        </div>
                                    {/if}
                                </div>
                                <div class="nav mb-2">
                                    <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="{$Artikel->cURLFull}">
                                        <span class="text-truncate">{$Artikel->cName}</span>
                                    </a>
                                </div>
                                <div class="h6 mb-2">
                                    {if $Artikel->Preise->rabatt > 0}
                                        {$Artikel->Preise->fVKNetto} <del class="fs-sm fw-normal text-body-tertiary">{$Artikel->Preise->alterVKNetto}</del>
                                    {else}
                                        {$Artikel->Preise->fVKNetto}
                                    {/if}
                                </div>
                                {if isset($Artikel->cFarbe) && $style !== 'simpleSlider'}
                                    <div class="position-relative">
                                        <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+{count($Artikel->Farbe)} {if count($Artikel->Farbe) > 1}Farben{else}Farbe{/if}</div>
                                        <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                                            {foreach $Artikel->Farbe as $color}
                                                <input type="radio" class="btn-check" name="colors-{$Artikel->kArtikel}" id="color-{$Artikel->kArtikel}-{$color@iteration}" {if $color@first}checked{/if}>
                                                <label for="color-{$Artikel->kArtikel}-{$color@iteration}" class="btn btn-color fs-base" style="color: {$color->cFarbwert|default:'#000000'}">
                                                    <span class="visually-hidden">{$color->cName}</span>
                                                </label>
                                            {/foreach}
                                        </div>
                                    </div>
                                {/if}
                            </div>
                        </div>
                    {/foreach}
                </div>
            </div>
        </section>
    {/if}
{/if}
