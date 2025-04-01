{block name='blog-overview'}
    {block name='blog-overview-heading'}
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
                            <li class="breadcrumb-item text-nowrap">
                                <span>{lang key='news' section='news'}</span>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                    <h1 class="h3 text-light mb-0">{lang key='news' section='news'}</h1>
                </div>
            </div>
        </div>
        {opcMountPoint id='opc_before_heading' inContainer=false}
    {/block}

    {block name='blog-overview-include-extension'}
        {include file='snippets/extension.tpl'}
    {/block}
    {opcMountPoint id='opc_before_filter' inContainer=false}
    <div class="container pb-5 mb-2 mb-md-4">
        {block name='filter'}
            <div class="row">
                <div class="col-lg-12 mb-4">
                    {get_static_route id='news.php' assign=routeURL}
                    {block name='blog-overview-form'}
                        {form id="frm_filter" name="frm_filter" action=$routeURL slide=true}
                            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4 mb-4 border-bottom">
                                <div class="d-flex align-items-center mb-3 mb-sm-0">
                                    {block name='blog-overview-form-sort'}
                                        <select name="nSort" class="form-select onchangeSubmit me-2" aria-label="{lang key='newsSort' section='news'}">
                                            <option value="-1"{if $nSort === -1} selected{/if}>{lang key='newsSort' section='news'}</option>
                                            <option value="1"{if $nSort === 1} selected{/if}>{lang key='newsSortDateDESC' section='news'}</option>
                                            <option value="2"{if $nSort === 2} selected{/if}>{lang key='newsSortDateASC' section='news'}</option>
                                            <option value="3"{if $nSort === 3} selected{/if}>{lang key='newsSortHeadlineASC' section='news'}</option>
                                            <option value="4"{if $nSort === 4} selected{/if}>{lang key='newsSortHeadlineDESC' section='news'}</option>
                                            <option value="5"{if $nSort === 5} selected{/if}>{lang key='newsSortCommentsDESC' section='news'}</option>
                                            <option value="6"{if $nSort === 6} selected{/if}>{lang key='newsSortCommentsASC' section='news'}</option>
                                        </select>
                                    {/block}
                                    {block name='blog-overview-form-date'}
                                        <select name="cDatum" class="form-select onchangeSubmit" aria-label="{lang key='newsDateFilter' section='news'}">
                                            <option value="-1"{if $cDatum == -1} selected{/if}>{lang key='newsDateFilter' section='news'}</option>
                                            {if !empty($oDatum_arr)}
                                                {foreach $oDatum_arr as $oDatum}
                                                    <option value="{$oDatum->cWert}"{if $cDatum == $oDatum->cWert} selected{/if}>{$oDatum->cName}</option>
                                                {/foreach}
                                            {/if}
                                        </select>
                                    {/block}
                                </div>
                                    {lang key='newsCategorie' section='news' assign='cCurrentKategorie'}
                                    {if $oNewsCat->getID() > 0}
                                        {assign var=kNewsKategorie value=$oNewsCat->getID()}
                                    {else}
                                        {assign var=kNewsKategorie value=$kNewsKategorie|default:0}
                                    {/if}
                                    {block name='blog-overview-form-categories'}
                                        <select name="nNewsKat" class="form-select onchangeSubmit ms-2" aria-label="{lang key='newsCategorie' section='news'}">
                                            <option value="-1"{if $kNewsKategorie === -1} selected{/if}>{lang key='newsCategorie' section='news'}</option>
                                            {if !empty($oNewsKategorie_arr)}
                                                {assign var=selectedCat value=$kNewsKategorie}
                                                {block name='blog-overview-include-newscategories-recursive'}
                                                    {include file='snippets/newscategories_recursive.tpl' i=0 selectedCat=$selectedCat}
                                                {/block}
                                            {/if}
                                        </select>
                                    {/block}
                                    
                                    {block name='blog-overview-form-items'}
                                        <select name="{$oPagination->getId()}_nItemsPerPage"
                                            id="{$oPagination->getId()}_nItemsPerPage"
                                            class="form-select onchangeSubmit ms-2"
                                            aria-label="{lang key='newsPerSite' section='news'}">
                                            <option value="-1" {if $oPagination->getItemsPerPage() == 0} selected{/if}>
                                                {lang key='showAll'}
                                            </option>
                                            {foreach $oPagination->getItemsPerPageOptions() as $nItemsPerPageOption}
                                                <option value="{$nItemsPerPageOption}"{if $oPagination->getItemsPerPage() == $nItemsPerPageOption} selected{/if}>
                                                    {$nItemsPerPageOption}
                                                </option>
                                            {/foreach}
                                        </select>
                                    {/block}
                        {/form}
                    {/block}
                {/col}
                {col cols=12 sm="auto" class="blog-overview-pagination"}
                    {block name='blog-overview-include-pagination-top'}
                        {include file='snippets/pagination.tpl' oPagination=$oPagination cThisUrl='news.php' parts=['pagi'] noWrapper=true}
                    {/block}
                {/col}
            </div>
        </div>
        {/block}
        {block name='blog-overview-category'}
            {if $noarchiv === 1}
                {block name='blog-overview-alert-no-archive'}
                    <div class="alert alert-info d-flex">
                        <i class="ci-announcement fs-lg me-2"></i>
                        <div>{lang key='noNewsArchiv' section='news'}</div>
                    </div>
                {/block}
            {elseif !empty($newsItems)}
                <div id="newsContent" itemprop="mainEntity" itemscope itemtype="https://schema.org/Blog">
                    {if $oNewsCat->getID() > 0}
                        {block name='blog-overview-subheading'}
                            {opcMountPoint id='opc_before_news_category_heading'}
                            <div class="d-flex align-items-center justify-content-between mb-4 pb-2 border-bottom">
                                <h2 class="h4 mb-0">{$oNewsCat->getName()}</h2>
                            </div>
                        {/block}
                        {block name='blog-overview-preview-image'}
                            <div class="row mb-5">
                                {if !empty($oNewsCat->getPreviewImage())}
                                    <div class="col-md-8">
                                        <div class="fs-md">{$oNewsCat->getDescription()}</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="rounded-3 overflow-hidden">
                                            {include file='snippets/image.tpl' item=$oNewsCat square=false center=true}
                                        </div>
                                    </div>
                                {else}
                                    <div class="col-12">
                                        <div class="fs-md">{$oNewsCat->getDescription()}</div>
                                    </div>
                                {/if}
                            </div>
                        {/block}
                    {/if}
                    {opcMountPoint id='opc_before_news_list'}
                    {block name='blog-overview-previews'}
                        <div class="row">
                            {foreach $newsItems as $newsItem}
                                <div class="col-sm-6 col-lg-4 mb-4">
                                    {block name='blog-overview-include-preview'}
                                        {include file='blog/preview.tpl'}
                                    {/block}
                                </div>
                            {/foreach}
                        </div>
                    {/block}
                </div>
                {opcMountPoint id='opc_after_news_list'}
                {block name='blog-overview-include-pagination-bottom'}
                    <div class="d-flex justify-content-center mt-4">
                        {include file='snippets/pagination.tpl' oPagination=$oPagination cThisUrl='news.php' parts=['pagi']}
                    </div>
                {/block}
            {/if}
        {/block}
    </div>
{/block}
