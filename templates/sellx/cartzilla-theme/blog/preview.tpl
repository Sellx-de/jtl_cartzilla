{block name='blog-preview'}
    {$title = $newsItem->getTitle()|escape:'quotes'}
    <div itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting" class="card blog-card h-100">
        <meta itemprop="mainEntityOfPage" content="{$newsItem->getURL()}">
        {block name='blog-preview-news-header'}
            {if !empty($newsItem->getPreviewImage())}
                {block name='blog-preview-news-image'}
                    <a class="blog-card-img-top" href="{$newsItem->getURL()}" title="{$title}">
                        <div class="card-img-top">
                            {include file='snippets/image.tpl'
                                item =$newsItem
                                square = false
                                sizes = '(min-width: 1300px) 25vw, (min-width: 992px) 38vw, (min-width: 768px) 55vw, 100vw'
                                alt="{$title} - {$newsItem->getMetaTitle()|escape:'quotes'}"}
                        </div>
                        <meta itemprop="image" content="{$imageBaseURL}{$newsItem->getPreviewImage()}">
                    </a>
                {/block}
            {/if}
        {/block}
        
        {block name='blog-preview-news-body'}
            <div class="card-body">
                {assign var=dDate value=$newsItem->getDateValidFrom()->format('Y-m-d')}
                {block name='blog-preview-author'}
                    <div class="d-flex align-items-center fs-sm mb-2">
                        <a class="blog-entry-meta-link" href="#">
                            <div class="blog-entry-author-ava">
                                {if $newsItem->getAuthor() !== null}
                                    {block name='blog-preview-include-author'}
                                        <i class="ci-user"></i>
                                        {$newsItem->getAuthor()->getName()}
                                    {/block}
                                {else}
                                    <div itemprop="author publisher" itemscope itemtype="https://schema.org/Organization" class="d-none">
                                        <span itemprop="name">{$meta_publisher}</span>
                                        <meta itemprop="url" content="{$ShopURL}">
                                        <meta itemprop="logo" content="{$ShopLogoURL}">
                                    </div>
                                    <i class="ci-user"></i> {$meta_publisher}
                                {/if}
                            </div>
                        </a>
                        <span class="blog-entry-meta-divider"></span>
                        <time itemprop="dateModified" class="d-none">{$newsItem->getDateCreated()->format('Y-m-d')}</time>
                        <time itemprop="datePublished" datetime="{$dDate}" class="fs-sm text-muted">
                            <i class="ci-time"></i> {$newsItem->getDateValidFrom()->format('d.m.Y')}
                        </time>
                        
                        {if isset($Einstellungen.news.news_kommentare_nutzen) && $Einstellungen.news.news_kommentare_nutzen === 'Y'}
                            {block name='blog-preview-comments'}
                                <span class="blog-entry-meta-divider"></span>
                                <a class="blog-entry-meta-link text-nowrap" href="{$newsItem->getURL()|cat:'#comments'}">
                                    <i class="ci-message"></i> {$newsItem->getCommentCount()}
                                </a>
                            {/block}
                        {/if}
                    </div>
                {/block}
                
                {block name='blog-preview-heading'}
                    <h2 class="h5 blog-entry-title">
                        <a href="{$newsItem->getURL()}" itemprop="url headline">{$title}</a>
                    </h2>
                {/block}
                
                {block name='blog-preview-text'}
                    <div class="fs-sm" itemprop="description">
                        {$newsItem->getPreview()|strip_tags|truncate:150:"..."}
                    </div>
                {/block}
                
                {block name='blog-preview-categories'}
                    {if $newsItem->getCategoryID() > 0}
                        <div class="mt-3 pt-3 border-top">
                            <div class="d-flex align-items-center">
                                <div class="fs-xs text-muted me-2">{lang key='newsCategorie' section='news'}:</div>
                                <a class="badge bg-secondary fs-xs text-decoration-none" href="{$newsItem->getCategoryURL()}">{$newsItem->getCategoryName()}</a>
                            </div>
                        </div>
                    {/if}
                {/block}
            </div>
            
            <div class="card-footer border-top-0 pt-0">
                <a class="btn btn-outline-primary btn-sm" href="{$newsItem->getURL()}">
                    {lang key='readMore'} <i class="ci-arrow-right ms-1"></i>
                </a>
            </div>
        {/block}
    </div>
{/block}