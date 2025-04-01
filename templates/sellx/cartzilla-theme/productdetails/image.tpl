{block name='productdetails-image'}
    <!-- Gallery -->
    <div class="col-md-6 pb-4 pb-md-0 mb-2 mb-sm-3 mb-md-0">
        <div class="position-relative">
            {if $Artikel->Preise->rabatt > 0}
                <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-3 mt-sm-4 ms-3 ms-sm-4">{lang key='salePercentage' section='productDetails' printf=$Artikel->Preise->rabatt}</span>
            {/if}
            <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-lg bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-2 mt-sm-3 me-2 me-sm-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="{lang key='addToWishlist' section='productDetails'}" aria-label="{lang key='addToWishlist' section='productDetails'}">
                <i class="ci-heart animate-target"></i>
            </button>
            <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden mb-3 mb-sm-4 mb-md-3 mb-lg-4" href="{$Artikel->Bilder[0]->cURLGross}" data-glightbox data-gallery="product-gallery">
                <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                <div class="ratio hover-effect-target bg-body-tertiary rounded w-100" style="--cz-aspect-ratio: calc(1 * 100%)">
                    {image alt=$Artikel->Bilder[0]->cAltAttribut
                        class="w-100 h-100 object-fit-cover"
                        fluid=true
                        webp=true
                        src="{$Artikel->Bilder[0]->cURLGross}"
                    }
                </div>
            </a>
        </div>
        <div class="collapse d-md-block" id="morePictures">
            <div class="row row-cols-2 g-3 g-sm-4 g-md-3 g-lg-4 pb-3 pb-sm-4 pb-md-0">
                {foreach $Artikel->Bilder as $image}
                    {if !$image@first && $image@index < 5}
                        <div class="col">
                            <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="{$image->cURLGross}" data-glightbox data-gallery="product-gallery">
                                <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                                <div class="ratio hover-effect-target bg-body-tertiary rounded w-100" style="--cz-aspect-ratio: calc(1 * 100%)">
                                    {image alt=$image->cAltAttribut
                                        class="w-100 h-100 object-fit-cover"
                                        fluid=true
                                        lazy=true
                                        webp=true
                                        src="{$image->cURLKlein}"
                                    }
                                </div>
                            </a>
                        </div>
                    {/if}
                {/foreach}
            </div>
        </div>
        <button type="button" class="btn btn-lg btn-outline-secondary w-100 collapsed d-md-none" data-bs-toggle="collapse" data-bs-target="#morePictures" data-label-collapsed="{lang key='showMorePictures'}" data-label-expanded="{lang key='showLessPictures'}" aria-expanded="false" aria-controls="morePictures">
            <span data-collapsed-content>{lang key='showMorePictures'}</span>
            <span data-expanded-content>{lang key='showLessPictures'}</span>
            <i class="collapse-toggle-icon ci-chevron-down fs-lg ms-2 me-n2"></i>
        </button>
        
        {block name='productdetails-image-meta'}
            {foreach $Artikel->Bilder as $image}
                <meta itemprop="image" content="{$image->cURLNormal}">
            {/foreach}
        {/block}

        {block name='productdetails-image-include-product-images-modal'}
            {include file='productdetails/product_images_modal.tpl' images=$Artikel->Bilder}
        {/block}

        {block name='productdetails-image-variation-preview'}
            {if !$isMobile && isset($Artikel->Variationen) && $Artikel->Variationen|count > 0}
                {assign var=VariationsSource value='Variationen'}
                {if isset($ohneFreifeld) && $ohneFreifeld}
                    {assign var=VariationsSource value='VariationenOhneFreifeld'}
                {/if}
                {foreach name=Variationen from=$Artikel->$VariationsSource key=i item=Variation}
                    {foreach name=Variationswerte from=$Variation->Werte key=y item=Variationswert}
                        {if $Variationswert->getImage() !== null}
                            {block name='productdetails-image-variation-preview-inner'}
                                <div class="variation-image-preview d-none fade vt{$Variationswert->kEigenschaftWert}">
                                    {block name='productdetails-image-variation-preview-title'}
                                        {if $Variation->cTyp === 'IMGSWATCHES'}
                                            <div class="variation-image-preview-title">
                                                {$Variation->cName}: <span class="variation-image-preview-title-value">{$Variationswert->cName}</span>
                                            </div>
                                        {/if}
                                    {/block}
                                    {block name='productdetails-image-variation-preview-image'}
                                        {include file='snippets/image.tpl' item=$Variationswert sizes='100vw'}
                                    {/block}
                                </div>
                            {/block}
                        {/if}
                    {/foreach}
                {/foreach}
            {/if}
        {/block}
    </div>
{/block}
