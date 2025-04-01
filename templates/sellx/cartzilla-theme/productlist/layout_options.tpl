{block name='productlist-layout-options'}
    {if isset($oErweiterteDarstellung->nDarstellung)
    && $Einstellungen.artikeluebersicht.artikeluebersicht_erw_darstellung === 'Y'
    && empty($AktuelleKategorie->getCategoryFunctionAttribute('darstellung'))
    && $navid === 'header'}
        <div class="btn-group" role="group">
            {block name='productlist-layout-options-quare'}
                <a href="{$oErweiterteDarstellung->cURL_arr[$smarty.const.ERWDARSTELLUNG_ANSICHT_LISTE]}"
                    id="ed_list"
                    class="btn btn-outline-primary btn-sm ed list{if $oErweiterteDarstellung->nDarstellung === $smarty.const.ERWDARSTELLUNG_ANSICHT_LISTE} active{/if}"
                    role="button"
                    title="{lang key='list' section='productOverview'}"
                    aria-label="{lang key='list' section='productOverview'}"
                >
                    <i class="ci-view-list d-none d-md-inline-block"></i><i class="ci-view-grid d-inline-block d-md-none"></i>
                </a>
            {/block}
            {block name='productlist-layout-options-list'}
                <a href="{$oErweiterteDarstellung->cURL_arr[$smarty.const.ERWDARSTELLUNG_ANSICHT_GALERIE]}"
                    id="ed_gallery"
                    class="btn btn-outline-primary btn-sm ed gallery{if $oErweiterteDarstellung->nDarstellung === $smarty.const.ERWDARSTELLUNG_ANSICHT_GALERIE} active{/if}"
                    role="button"
                    title="{lang key='gallery' section='productOverview'}"
                    aria-label="{lang key='gallery' section='productOverview'}"
                >
                    <i class="ci-view-grid"></i>
                </a>
            {/block}
        </div>
    {/if}
{/block}
