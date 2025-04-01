{block name='layout-breadcrumb'}
    {strip}
        {if !empty($Brotnavi) && !$bExclusive && !$bAjaxRequest && $nSeitenTyp !== $smarty.const.PAGE_STARTSEITE && $nSeitenTyp !== $smarty.const.PAGE_BESTELLVORGANG && $nSeitenTyp !== $smarty.const.PAGE_BESTELLSTATUS}
            <div class="page-title-overlap bg-dark pt-4">
                <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
                    <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start" itemscope itemtype="https://schema.org/BreadcrumbList">
                                {foreach $Brotnavi as $oItem}
                                    {if $oItem@first}
                                        {block name='layout-breadcrumb-first-item'}
                                            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                                <a class="text-nowrap" href="{$oItem->getURLFull()}" itemprop="item">
                                                    <i class="ci-home"></i><span itemprop="name">Home</span>
                                                </a>
                                                <meta itemprop="position" content="{$oItem@iteration}" />
                                            </li>
                                        {/block}
                                    {elseif $oItem@last}
                                        {block name='layout-breadcrumb-last-item'}
                                            <li class="breadcrumb-item text-nowrap active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                                <span itemprop="name">
                                                    {if $oItem->getName() !== null}
                                                        {$oItem->getName()}
                                                    {elseif !empty($Suchergebnisse->getSearchTermWrite())}
                                                        {$Suchergebnisse->getSearchTermWrite()}
                                                    {/if}
                                                </span>
                                                <meta itemprop="item" content="{$oItem->getURLFull()}" />
                                                <meta itemprop="position" content="{$oItem@iteration}" />
                                            </li>
                                        {/block}
                                    {else}
                                        {block name='layout-breadcrumb-item'}
                                            <li class="breadcrumb-item text-nowrap" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                                <a href="{$oItem->getURLFull()}" itemprop="item">
                                                    <span itemprop="name">{$oItem->getName()|escape:'html'}</span>
                                                </a>
                                                <meta itemprop="position" content="{$oItem@iteration}" />
                                            </li>
                                        {/block}
                                    {/if}
                                {/foreach}
                            </ol>
                        </nav>
                    </div>
                    <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                        <h1 class="h3 text-light mb-0">
                            {if $oItem->getName() !== null}
                                {$oItem->getName()}
                            {elseif !empty($Suchergebnisse->getSearchTermWrite())}
                                {$Suchergebnisse->getSearchTermWrite()}
                            {/if}
                        </h1>
                    </div>
                </div>
            </div>
        {/if}
    {/strip}
{/block}
