{block name='page-404'}
    <div class="container py-5 mb-lg-3">
        <div class="row justify-content-center pt-lg-4 text-center">
            <div class="col-lg-7 col-md-9">
                <img class="d-block mx-auto mb-5" src="{$ShopURL}/templates/sellx/cartzilla-theme/img/pages/404.png" width="340" alt="404 Error">
                <h1 class="h3">{lang key='notFoundTitle'}</h1>
                <h2 class="h5 fw-normal text-muted mb-4">{lang key='notFoundDesc'}</h2>
                <p class="fs-md mb-4">
                    <span class="text-primary">&larr;</span>
                    <a class="text-primary" href="{$ShopURL}">{lang key='backToHomepage'}</a>
                </p>
            </div>
        </div>
        {block name='page-404-include-sitemap'}
            {include file='page/sitemap.tpl'}
        {/block}
    </div>
{/block}
