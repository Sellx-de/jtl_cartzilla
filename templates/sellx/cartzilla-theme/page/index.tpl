{block name='page-index'}
    {block name='page-index-include-selection-wizard'}
        {include file='selectionwizard/index.tpl'}
    {/block}

    {if isset($StartseiteBoxen) && $StartseiteBoxen|count > 0}
        {assign var=moreLink value=null}
        {assign var=moreTitle value=null}

        {opcMountPoint id='opc_before_boxes' inContainer=false}

        {block name='page-index-boxes'}
            <div class="container pb-5 mb-md-3">
                {foreach $StartseiteBoxen as $Box}
                    {if isset($Box->Artikel->elemente) && count($Box->Artikel->elemente) > 0 && isset($Box->cURL)}
                        {if $Box->name === 'TopAngebot'}
                            {lang key='topOffer' assign='title'}
                            {lang key='showAllTopOffers' assign='moreTitle'}
                        {elseif $Box->name === 'Sonderangebote'}
                            {lang key='specialOffer' assign='title'}
                            {lang key='showAllSpecialOffers' assign='moreTitle'}
                        {elseif $Box->name === 'NeuImSortiment'}
                            {lang key='newProducts' assign='title'}
                            {lang key='showAllNewProducts'  assign='moreTitle'}
                        {elseif $Box->name === 'Bestseller'}
                            {lang key='bestsellers' assign='title'}
                            {lang key='showAllBestsellers' assign='moreTitle'}
                        {/if}
                        {assign var=moreLink value=$Box->cURL}
                        {block name='page-index-include-product-slider'}
                            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
                                <h2 class="h3 mb-0 pt-3 me-2">{$title}</h2>
                                <div class="pt-3">
                                    <a class="btn btn-outline-accent btn-sm" href="{$moreLink}">
                                        {$moreTitle}<i class="ci-arrow-right ms-1 me-n1"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="tns-carousel tns-controls-static tns-controls-outside">
                                <div class="tns-carousel-inner" data-carousel-options='{"items": 2, "controls": true, "nav": true, "autoHeight": true, "responsive": {"0":{"items":1},"500":{"items":2, "gutter": 18},"768":{"items":3, "gutter": 20}, "1100":{"items":4, "gutter": 30}}}'>
                                    {include file='snippets/product_slider.tpl'
                                        productlist=$Box->Artikel->elemente
                                        title=$title
                                        hideOverlays=true
                                        moreLink=$moreLink
                                        moreTitle=$moreTitle
                                        titleContainer=false}
                                </div>
                            </div>
                        {/block}
                    {/if}
                {/foreach}
            </div>
        {/block}
    {/if}

    {block name='page-index-additional-content'}
        {if isset($oNews_arr) && $oNews_arr|count > 0}
            {opcMountPoint id='opc_before_news' inContainer=false}
            
            <section class="container pb-5 mb-md-3">
                {block name='page-index-subheading-news'}
                    <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
                        <h2 class="h3 mb-0 pt-3 me-2">{lang key='news' section='news'}</h2>
                        <div class="pt-3">
                            <a class="btn btn-outline-accent btn-sm" href="{get_static_route id='news.php'}">
                                {lang key='showAll'}<i class="ci-arrow-right ms-1 me-n1"></i>
                            </a>
                        </div>
                    </div>
                {/block}
                
                {block name='page-index-news'}
                    <div class="row" itemprop="about" itemscope itemtype="https://schema.org/Blog">
                        {foreach $oNews_arr as $newsItem}
                            <div class="col-md-4 mb-4">
                                <article class="card">
                                    {if !empty($newsItem->getPreviewImage())}
                                        <a class="card-img-top" href="{$newsItem->getURL()}">
                                            {include file='snippets/image.tpl'
                                                item=$newsItem
                                                square=false
                                                sizes='(min-width: 1300px) 25vw, (min-width: 992px) 38vw, (min-width: 768px) 55vw, 100vw'
                                                alt="{$newsItem->getTitle()|escape:'html'}"
                                            }
                                        </a>
                                    {/if}
                                    <div class="card-body">
                                        <h2 class="h5 nav-heading mb-3">
                                            <a href="{$newsItem->getURL()}">{$newsItem->getTitle()}</a>
                                        </h2>
                                        <p class="fs-sm text-muted">{$newsItem->getPreview()|strip_tags|truncate:120:"..."}</p>
                                        <div class="d-flex align-items-center justify-content-between mt-3">
                                            <a class="btn-link fs-sm" href="{$newsItem->getURL()}">
                                                {lang key='readMore'}<i class="ci-arrow-right fs-xs ms-1"></i>
                                            </a>
                                            <span class="fs-xs text-muted">
                                                <i class="ci-time me-1"></i>{$newsItem->getDateValidFrom()->format('d.m.Y')}
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        {/foreach}
                    </div>
                {/block}
            </section>
        {/if}
    {/block}
{/block}
