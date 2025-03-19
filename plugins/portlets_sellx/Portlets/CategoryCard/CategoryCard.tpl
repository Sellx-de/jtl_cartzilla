{if empty($kategorienMitProdukten)}
    <p>❌ Keine Kategorien gefunden.</p>
{else}

<style>
.widget-product-title {
    display: inline-block;
    max-width: min(100%, 250px); /* Nutzt 100% der verfügbaren Breite, aber max. 250px */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}


.widget-product-title a {
    flex: 1;
    min-width: 0; /* Verhindert, dass der Link die Spalte sprengt */
}
</style>

    <section class="container container-fluid pb-4 pb-md-5">
        <div class="row">
            {foreach from=$kategorienMitProdukten item=kategorie name=categoryLoop}
                {assign var="emoji" value=""}
                {if $smarty.foreach.categoryLoop.index == 0}
                    {assign var="emoji" value="🔥"}
                {elseif $smarty.foreach.categoryLoop.index == 1}
                    {assign var="emoji" value="🎉"}
                {/if}

                <div class="col-md-4 col-sm-6 mb-2 py-3">
                    <div class="widget">
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-1">
                            <h3 class="widget-title">
                                <a href="{$kategorie.cURL}">{$kategorie.cName} {$emoji}</a>
                            </h3>

                            {if $kategorie.cName|strlen <= 12}
                                <div class="widget-title">
                                    <a class="btn btn-white btn-sm" href="{$kategorie.cURL}">
                                        Alle anzeigen<i class="ci-arrow-right mb-n1 ms-1 me-n1"></i>
                                    </a>
                                </div>
                            {/if}
                        </div>

                        {foreach from=$kategorie.produkte item=produkt}
                            <div class="d-flex align-items-center py-2 border-bottom">
                                <a class="d-block flex-shrink-0" href="{$produkt->cURL}">
                                    <img loading="lazy" alt="{$produkt->cName}" 
                                         src="{$produkt->Bilder[0]->cURLNormal|default:'https://place-hold.it/300'}" 
                                         style="width: 64px;">
                                </a>
                                <div class="ps-2 ml-3">
                                    <h6 class="widget-product-title">
                                        <a href="{$produkt->cURL}">{$produkt->cName}</a>
                                    </h6>
                                    <div class="widget-product-meta">
                                        {assign var="preisTeile" value=","|explode:{$produkt->Preise->fVKBrutto|number_format:2:",":"."}}
                                        <span class="text-accent">
                                            {$preisTeile[0]},<small>{$preisTeile[1]}&euro;</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                </div>
            {/foreach}
        </div>
    </section>
{/if}
