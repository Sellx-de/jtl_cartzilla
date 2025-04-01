{block name='layout-header-top-bar'}
    {strip}
        <div id="customCarousel">
            <div class="carousel-inner text-truncate text-center" style="height: 20px;">
                {* Sprach- & Währungsumschaltung *}
                {block name='layout-header-top-bar-user-settings'}
                    {block name='layout-header-top-bar-user-settings-currency'}
                        {include file='snippets/currency_dropdown.tpl'}
                    {/block}
                {/block}

                {if isset($Einstellungen.template['top-bar'])}
                    {assign var="topbarTexts" value=[
                        $Einstellungen.template['top-bar'].topbar_text_1,
                        $Einstellungen.template['top-bar'].topbar_text_2,
                        $Einstellungen.template['top-bar'].topbar_text_3
                    ]}

                    {assign var="index" value=0}
                    {foreach $topbarTexts as $topbar}
                        {if !empty($topbar)}
                            <div class="carousel-item text-center {if $index === 0}active{/if}">
                                <p class="m-0 px-3" style="padding-right:6rem">{$topbar}</p>
                            </div>
                            {assign var="index" value=$index+1}
                        {/if}
                    {/foreach}
                {/if}
            </div>
        </div>

        {* Hinweistext in der Top-Bar *}
        {if $nSeitenTyp !== $smarty.const.PAGE_BESTELLVORGANG}
            {block name='layout-header-top-bar-note'}
                {$topbarLang = {lang key='topbarNote'}}
                {if $topbarLang !== ''}
                    {nav tag='ul' class='topbar-note nav-dividers'}
                        {navitem id="topbarNote"}{$topbarLang}{/navitem}
                    {/nav}
                {/if}
            {/block}
        {/if}
    {/strip}
{/block}
