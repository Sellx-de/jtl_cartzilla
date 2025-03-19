{block name='layout-header-menu-single-row'}
    {block name='layout-header-variables'}
        {$menuScroll=$Einstellungen.template.header.menu_scroll === 'menu' && $Einstellungen.template.header.menu_single_row === 'Y'}
        {$headerWidth=$Einstellungen.template.header.header_full_width}
    {/block}
    {block name='layout-header-menu-single-row-main'}
    {if ! $isMobile}
        {block name='layout-header-menu-single-row-top-bar-outer'}
            {if $menuScroll && $Einstellungen.template.header.menu_show_topbar === 'Y'}
                <div id="header-top-bar" class="alert alert-dismissible bg-dark text-white rounded-0 py-2 px-0 m-0 fade show" style="height:40px">
                    <div class="container position-relative d-flex min-w-0">
                        <div class="row d-flex flex-nowrap align-items-center g-2 w-100 min-w-0 mx-auto" style="max-width: 616px">
                        <div class="fs-sm text-white" style="margin-top: 5px;">
                            {block name='layout-header-menu-single-row-top-bar-outer-include-header-top-bar'}
                                {include file='layout/header_top_bar.tpl'}
                            {/block}
                            </div>
                        </div>
                    </div>
                </div>
            {/if}
        {/block}
    {/if}
        {block name='layout-header-menu-single-row-nav'}
            {block name='layout-header-menu-single-row-nav-main'}
                <div class="hide-navbar container menu-search-position-{$Einstellungen.template.header.menu_search_position}">
                    {navbar toggleable=true fill=true type="expand-lg" class="row justify-content-center align-items-center-util"}
                    {block name='layout-header-top-bar-user-settings-include-language-dropdown'}
                    {include file='snippets/language_dropdown.tpl'}
                {/block}
                        {block name='layout-header-menu-single-row-logo'}
                            {col class="col-lg-4 nav-logo-wrapper order-lg-2" style="padding-left: 4rem;"}
                                {block name='layout-header-menu-single-row-logo-include-header-logo'}
                                    {include file='layout/header_logo.tpl'}
                                {/block}
                            {/col}
                        {/block}
                        {block name='layout-header-menu-single-row-nav-main-inner'}
                            {if $nSeitenTyp === $smarty.const.PAGE_BESTELLVORGANG}
                                {block name='layout-header-menu-single-row-secure-checkout'}
                                    {block name='layout-header-menu-single-row-secure-checkout-title'}
                                        {col class="secure-checkout-icon order-3"}
                                            <i class="fas fa-lock icon-mr-2"></i>{lang key='secureCheckout' section='checkout'}
                                        {/col}
                                    {/block}
                                    {block name='layout-header-menu-single-row-top-bar-inner'}
                                        {col class="secure-checkout-topbar col-auto ml-auto-util d-none d-lg-block order-4"}
                                            {include file='layout/header_top_bar.tpl'}
                                        {/col}
                                    {/block}
                                {/block}
                            {else}
                                
                                {block name='layout-header-menu-single-row-icons'}
                                    {col class="col-lg-4 nav-icons-wrapper order-lg-3" style="float:right"}
                                        {include file='layout/header_nav_icons.tpl'}
                                    {/col}
                                {/block}
                            {/if}
                        {/block}
                    {/navbar}
                </div>
            {/block}
            {block name='layout-header-menu-single-row-nav-categories'}
                {if $nSeitenTyp !== $smarty.const.PAGE_BESTELLVORGANG}
                    <div class="hide-navbar container menu-search-position-right">
                        {navbar toggleable=true fill=true type="expand-lg" class="justify-content-start {if $nSeitenTyp === $smarty.const.PAGE_BESTELLVORGANG}align-items-center-util{else}align-items-lg-end{/if}"}
                            {block name='layout-header-menu-single-row-include-categories-mega'}
                                {include file='layout/header_categories.tpl'
                                    menuMultipleRows=($Einstellungen.template.header.menu_multiple_rows === 'multiple')
                                    menuScroll=$menuScroll}
                            {/block}
                        {/navbar}
                    </div>
                {/if}
            {/block}
        {/block}
    {/block}
    {block name='layout-header-menu-single-row-scripts'}
        {if $menuScroll}
            {inline_script}
                <script>
                    (function() {
                        let timeoutSc,
                            lastScroll      = 0,
                            $topbar         = $('#header-top-bar'),
                            $navbar         = $('.hide-navbar'),
                            $home           = $('.nav-home-button'),
                            scrollTopActive = false,
                            isClosed        = false;

                        $(document).on('scroll wheel touchend', function (e) {
                            if (window.innerWidth < globals.breakpoints.lg || $('.secure-checkout-topbar').length) {
                                return;
                            }
                            window.clearTimeout(timeoutSc);
                            timeoutSc = window.setTimeout(function () {
                                let newScroll = $(this).scrollTop();
                                if (newScroll < lastScroll || $(window).scrollTop() === 0) {
                                    if ($(window).scrollTop() === 0 && (
                                            lastScroll > 100
                                            || e.type === 'touchend'
                                            || e.type === 'wheel'
                                            || scrollTopActive
                                    )) {
                                        setState('open')
                                    } else {
                                        setState('closed')
                                    }
                                } else {
                                    setState('closed')
                                }
                                lastScroll = newScroll;
                            }, 20);
                        });

                        function setState(state) {
                            if (state === 'closed') {
                                if (!isClosed) {
                                    $topbar.removeClass('show').addClass('hide'); // Entfernt "show", fügt "hide" hinzu
                                    $navbar.addClass('d-none');
                                    $home.addClass('d-lg-block');
                                    $.evo.resetForParallax();
                                }
                                isClosed = true;
                            } else if (state === 'open') {
                                if (isClosed) {
                                    $topbar.removeClass('hide').addClass('show'); // Entfernt "hide", fügt "show" hinzu
                                    $navbar.removeClass('d-none');
                                    $home.removeClass('d-lg-block');
                                    scrollTopActive = false;
                                    $.evo.resetForParallax();
                                }
                                isClosed = false;
                            }
                        }


                        $('.smoothscroll-top').on('click', function () {
                            scrollTopActive = true;
                        });
                    })();
               

document.addEventListener("DOMContentLoaded", function () {
    let items = document.querySelectorAll("#customCarousel .carousel-item");
    let currentIndex = 0;

    function showNextItem() {
        let currentItem = items[currentIndex];

        // 1️⃣ Einblenden mit Anime.js
        anime({
            targets: currentItem,
            opacity: [0, 1],
            duration: 1500,
            easing: "easeInOutQuad"
        });

        // 2️⃣ Nach 6 Sekunden langsam ausblenden
        setTimeout(() => {
            anime({
                targets: currentItem,
                opacity: [1, 0],
                duration: 1500,
                easing: "easeInOutQuad"
            });
        }, 6000);

        // 3️⃣ Nach 10 Sekunden zum nächsten wechseln
        setTimeout(() => {
            currentIndex = (currentIndex + 1) % items.length;
            showNextItem();
        }, 10000);
    }

    showNextItem();
});
</script>






            {/inline_script}
        {/if}
    {/block}
{/block}
