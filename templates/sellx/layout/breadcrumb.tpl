{block name='layout-breadcrumb'}
    {strip}
        {if !empty($Brotnavi) && !$bExclusive && !$bAjaxRequest && $nSeitenTyp !== $smarty.const.PAGE_STARTSEITE && $nSeitenTyp !== $smarty.const.PAGE_BESTELLVORGANG && $nSeitenTyp !== $smarty.const.PAGE_BESTELLSTATUS}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    {foreach $Brotnavi as $oItem}
                        {if $oItem@first}
                            {block name='layout-breadcrumb-first-item'}
                                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <a href="{$oItem->getURLFull()}" itemprop="item">
                                        <span itemprop="name">Home</span>
                                    </a>
                                    <meta itemprop="position" content="{$oItem@iteration}" />
                                </li>
                            {/block}
                        {elseif $oItem@last}
                            {block name='layout-breadcrumb-last-item'}
                                <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
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
                                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
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
        {/if}
    {/strip}
{/block}
