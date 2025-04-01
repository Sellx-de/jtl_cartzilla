{block name='layout-header-menu-single-row'}
    {block name='layout-header-variables'}
        {$menuScroll=$Einstellungen.template.header.menu_scroll === 'menu' && $Einstellungen.template.header.menu_single_row === 'Y'}
        {$headerWidth=$Einstellungen.template.header.header_full_width}
    {/block}
    {block name='layout-header-menu-single-row-main'}
        {block name='layout-header-menu-single-row-nav'}
            {block name='layout-header-menu-single-row-nav-main'}
                <div class="container py-2 py-lg-3">
                    {block name='layout-header-top-bar-user-settings-include-language-dropdown'}
                    <div class="d-flex align-items-center gap-3">
                        {include file='snippets/language_dropdown.tpl'}
                        </div>
                    {/block}
                        {block name='layout-header-menu-single-row-logo'}
                                {block name='layout-header-menu-single-row-logo-include-header-logo'}
                                    {include file='layout/header_logo.tpl'}
                                {/block}
                        {/block}
                        {block name='layout-header-menu-single-row-nav-main-inner'}
                                {block name='layout-header-menu-single-row-icons'}
                                    <div class="d-flex align-items-center gap-3">
                                        {include file='layout/header_nav_icons.tpl'}
                                    </div>
                                {/block}
                        {/block}
                </div>
            {/block}
            {block name='layout-header-menu-single-row-nav-categories'}
                {if $nSeitenTyp !== $smarty.const.PAGE_BESTELLVORGANG}
                    <div class="offcanvas-body pt-1 pb-3 py-lg-0">
        <div class="container pb-lg-2 px-0 px-lg-3">
                            {block name='layout-header-menu-single-row-include-categories-mega'}
                                {include file='layout/header_categories.tpl'
                                    menuMultipleRows=($Einstellungen.template.header.menu_multiple_rows === 'multiple')
                                    menuScroll=$menuScroll}
                            {/block}
                        </div>
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
