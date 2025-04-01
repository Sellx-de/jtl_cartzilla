{block name='snippets-filter-price-slider'}
    {block name='snippets-filter-price-slider-content'}
        <div class="accordion-body p-0 pb-4 mb-1 mb-xl-2">
            <div class="range-slider" data-range-slider='{ldelim}"startMin": {if isset($priceRange)}{$priceRange|substr:0:(strpos($priceRange, '-'))}{else}0{/if}, "startMax": {if isset($priceRange)}{$priceRange|substr:(strpos($priceRange, '-')+1)}{else}{$priceRangeMax}{/if}, "min": 0, "max": {$priceRangeMax}, "step": 1, "tooltipPrefix": "{JTL\Session\Frontend::getCurrency()->getName()}"{rdelim}' aria-labelledby="headingPrice">
                <div class="range-slider-ui"></div>
                <div class="d-flex align-items-center">
                    <div class="position-relative w-50">
                        <i class="ci-euro-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                        <input id="{$id}-from" type="number" class="form-control form-icon-start" min="0" data-range-slider-min>
                    </div>
                    <i class="ci-minus text-body-emphasis mx-2"></i>
                    <div class="position-relative w-50">
                        <i class="ci-euro-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                        <input id="{$id}-to" type="number" class="form-control form-icon-start" min="0" data-range-slider-max>
                    </div>
                </div>
            </div>
            {input data=['id'=>'js-price-range'] type="hidden" value="{$priceRange}"}
            {input data=['id'=>'js-price-range-max'] type="hidden" value="{$priceRangeMax}"}
            {input data=['id'=>'js-price-range-id'] type="hidden" value="{$id}"}
            <div id="{$id}" class="d-none"></div>
        </div>
    {/block}
    {block name='snippets-filter-price-slider-script'}
        {inline_script}<script>
            $(window).on('load', function() {
                // Originale Funktion beibehalten aber erst nach dem das Cartzilla-Slider fertig ist
                $.evo.initPriceSlider($('.js-price-range-box'), $('#js-price-redirect').val() != 1);
                
                // Event-Handler für die Eingabefelder
                $('#{$id}-from, #{$id}-to').on('change', function() {
                    var min = parseInt($('#{$id}-from').val());
                    var max = parseInt($('#{$id}-to').val());
                    
                    // Aktualisiere den versteckten Wert für die originale Funktion
                    $('#js-price-range').val(min + '-' + max);
                    
                    // Rufe die originale Funktion auf, um den Filter anzuwenden
                    if ($('#js-price-redirect').val() != 1) {
                        $.evo.updateProductFilter();
                    } else {
                        window.location.href = '{$filterPriceLink}'.replace('__PRICE__', min + '-' + max);
                    }
                });
            });
        </script>{/inline_script}
    {/block}
{/block}
