{block name='layout-header-nav-search'}
    {block name='layout-header-nav-search-search'}
        <{$tag|default:'div'} class="search-box" id="search">
            <form action="{$ShopURL}/search/" method="get" class="position-relative">
                <div class="input-group">
                    <input class="form-control form-control-lg" type="search" id="search-header" name="qs" 
                        placeholder="{lang key='search'}" autocomplete="off" aria-label="{lang key='search'}">
                    <button type="submit" class="btn btn-secondary px-3" aria-label="{lang key='search'}">
                        <i class="ci-search"></i>
                    </button>
                </div>
            </form>
        </{$tag|default:'div'}>
    {/block}
    
    {* Offcanvas search for mobile/tablet *}
    {block name='layout-header-nav-search-offcanvas'}
        <div class="offcanvas offcanvas-top" id="searchBox" data-bs-backdrop="static" tabindex="-1">
            <div class="offcanvas-header border-bottom p-0 py-lg-1">
                <form class="container d-flex align-items-center" action="{$ShopURL}/search/" method="get">
                    <input type="search" name="qs" class="form-control form-control-lg fs-lg border-0 rounded-0 py-3 ps-0" 
                           placeholder="{lang key='findProduct'}" data-autofocus="offcanvas">
                    <button type="reset" class="btn-close fs-lg" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </form>
            </div>
            <div class="offcanvas-body px-0">
                <div class="container text-center">
                    <svg class="text-body-tertiary opacity-60 mb-4" xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 512 512" fill="currentColor"><path d="M340.115,361.412l-16.98-16.98c-34.237,29.36-78.733,47.098-127.371,47.098C87.647,391.529,0,303.883,0,195.765S87.647,0,195.765,0s195.765,87.647,195.765,195.765c0,48.638-17.738,93.134-47.097,127.371l16.98,16.98l11.94-11.94c5.881-5.881,15.415-5.881,21.296,0l112.941,112.941c5.881,5.881,5.881,15.416,0,21.296l-45.176,45.176c-5.881,5.881-15.415,5.881-21.296,0L328.176,394.648c-5.881-5.881-5.881-15.416,0-21.296L340.115,361.412z M195.765,361.412c91.484,0,165.647-74.163,165.647-165.647S287.249,30.118,195.765,30.118S30.118,104.28,30.118,195.765S104.28,361.412,195.765,361.412z M360.12,384l91.645,91.645l23.88-23.88L384,360.12L360.12,384z M233.034,233.033c5.881-5.881,15.415-5.881,21.296,0c5.881,5.881,5.881,15.416,0,21.296c-32.345,32.345-84.786,32.345-117.131,0c-5.881-5.881-5.881-15.415,0-21.296c5.881-5.881,15.416-5.881,21.296,0C179.079,253.616,212.45,253.616,233.034,233.033zM135.529,180.706c-12.475,0-22.588-10.113-22.588-22.588c0-12.475,10.113-22.588,22.588-22.588c12.475,0,22.588,10.113,22.588,22.588C158.118,170.593,148.005,180.706,135.529,180.706z M256,180.706c-12.475,0-22.588-10.113-22.588-22.588c0-12.475,10.113-22.588,22.588-22.588s22.588,10.113,22.588,22.588C278.588,170.593,268.475,180.706,256,180.706z"/></svg>
                    <h6 class="mb-2">{lang key='yourSearchResultsWillAppearHere'}</h6>
                    <p class="fs-sm mb-0">{lang key='startTypingInSearchField'}</p>
                </div>
            </div>
        </div>
    {/block}
{/block}
