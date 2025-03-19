
<section class="row pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
    <div class="text-center pb-2 pb-md-3">
        <h2 class="pb-2 mb-1">
            <span class="animate-underline">
            
                <a class="animate-target text-dark-emphasis text-decoration-none" href="#!">
                <img src="https://waschi.sellx.studio/media/image/storage/opc/branding/waschguru_logo_dark.svg" class="" id="shop-logo" alt="Dukano GbR" width="180" height="50">
                </a>
            </span>
        </h2>
        <p>Finde mehr Inspiration auf unserem Instagram</p>
    </div>
    <div class="overflow-x-auto pb-3 mb-n3">
        <div class="d-flex gap-2 gap-md-3 gap-lg-4" style="min-width: 700px">
            {foreach from=$imageUrls item=url}
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
                <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                <div class="hover-effect-target ratio ratio-1x1">
                    <img src="{$url}" alt="Instagram image">
                </div>
            </a>
            {/foreach}
        </div>
    </div>
</section>

