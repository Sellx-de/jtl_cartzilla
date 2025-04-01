{block name='layout-header-nav-icons'}
        {block name='layout-header-nav-icons-include-header-nav-search'}
            {if $Einstellungen.template.header.menu_single_row !== 'Y'}
                {include file='layout/header_nav_search.tpl' tag='li'}
            {/if}
        {/block}
        <div class="dropdown">
            <button type="button" class="theme-switcher btn btn-icon btn-lg btn-outline-secondary fs-lg border-0 rounded-circle animate-scale show nav-link nav-link-custom dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" data-bs-toggle="dropdown" aria-expanded="false" role="button" aria-label="Toggle theme (light)">
              <span class="theme-icon-active d-flex animate-target">
                <i class="ci-sun"></i>
              </span>
            </button>
            <ul class="dropdown-menu" style="--cz-dropdown-min-width: 9rem" data-bs-popper="static">
              <li>
                <button type="button" class="dropdown-item active" data-bs-theme-value="light" aria-pressed="true">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="ci-sun"></i>
                  </span>
                  <span class="theme-label">Light</span>
                  <i class="item-active-indicator ci-check ms-auto"></i>
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="ci-moon"></i>
                  </span>
                  <span class="theme-label">Dark</span>
                  <i class="item-active-indicator ci-check ms-auto"></i>
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="ci-auto"></i>
                  </span>
                  <span class="theme-label">Auto</span>
                  <i class="item-active-indicator ci-check ms-auto"></i>
                </button>
              </li>
            </ul>
          </div>
        {block name='layout-header-nav-icons-include-header-shop-nav-account'}
            {include file='layout/header_shop_nav_account.tpl'}
        {/block}
        {if !($isMobile)}
            {if $Einstellungen.vergleichsliste.vergleichsliste_anzeigen === 'Y'}
                {block name='layout-header-nav-icons-include-header-shop-nav-compare'}
                    {include file='layout/header_shop_nav_compare.tpl'}
                {/block}
            {/if}
            {block name='layout-header-nav-icons-include-header-shop-nav-wish'}
                {include file='layout/header_shop_nav_wish.tpl'}
            {/block}
        {/if}
        {block name='layout-header-nav-icons-include-cart-dropdown-label'}
            {include file='basket/cart_dropdown_label.tpl'}
        {/block}

{/block}
