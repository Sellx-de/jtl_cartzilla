{block name='basket-cart-dropdown-label'}
    <li class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex cart-icon-dropdown nav-item dropdown {if $WarenkorbArtikelAnzahl != 0}not-empty{/if}">
        {block name='basket-cart-dropdown-label-link'}
            {if $tplConfig.template.megamenu.menu_cart_offcanvas|default:'N' === 'Y'}
                {link class='nav-link'
                href='#offCanvasCart'
                role="button"
                aria=['controls' => 'offCanvasCart', 'label' => {lang key='basket'}]
                data=['toggle' => 'offcanvas','bs-toggle' => 'offcanvas']}
                    {block name='basket-cart-dropdown-label-count'}
                        <i class='ci-shopping-bag animate-target me-1 cart-icon-dropdown-icon'>
                            {if $WarenkorbArtikelAnzahl >= 1}
                                <span class="position-absolute top-0 start-100 badge fs-xs text-bg-primary rounded-pill mt-1 ms-n4 z-2" title="{$WarenkorbArtikelAnzahl}">
                                    {$WarenkorbArtikelAnzahl}
                                </span>
                            {/if}
                        </i>
                    {/block}
                {/link}
            {else}
                {link class='nav-link' aria=['expanded' => 'false', 'label' => {lang key='basket'}] data=['toggle' => 'dropdown','bs-toggle' => 'dropdown']}
                    {block name='basket-cart-dropdown-label-count'}
                        <i class='ci-cart cart-icon-dropdown-icon'>
                            {if $WarenkorbArtikelAnzahl >= 1}
                            <span class="position-absolute top-0 start-100 badge fs-xs text-bg-primary rounded-pill mt-1 ms-n4 z-2" title="{$WarenkorbArtikelAnzahl}">
                                {$WarenkorbArtikelAnzahl}
                            </span>
                            {/if}
                        </i>
                    {/block}
                    {block name='basket-cart-dropdown-labelprice'}
                        <span class="cart-icon-dropdown-price">{$WarensummeLocalized[0]}</span>
                    {/block}
                {/link}
            {/if}
        {/block}
        {block name='basket-cart-dropdown-label-include-cart-dropdown'}
            {include file='basket/cart_dropdown.tpl'}
        {/block}
    </li>
{/block}
