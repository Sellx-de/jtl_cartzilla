{block name='layout-header-logo'}



        {block name='layout-header-logo-logo'}
                <span itemprop="name" class="d-none">{$meta_publisher}</span>
                <meta itemprop="url" content="{$ShopHomeURL}">
                <meta itemprop="logo" content="{$ShopLogoURL}">
                {link class="navbar-brand fs-2 py-0 m-0 me-auto me-sm-n5" href=$ShopHomeURL title=$Einstellungen.global.global_shopname}
                {if isset($ShopLogoURL)}
                    {image width=180 height=50 src=$ShopLogoURL
                        alt=$Einstellungen.global.global_shopname
                        id="shop-logo"
                    }
                {else}
                    <span class="h1">{$Einstellungen.global.global_shopname}</span>
                {/if}
                {/link}
        {/block}
{/block}
