{block name='snippets-banner'}
    {if isset($oImageMap)}
        {container fluid=$isFluid class="{if $Einstellungen.template.theme.left_sidebar === 'Y' && $boxesLeftActive}container-plus-sidebar{/if}"}
            {opcMountPoint id='opc_before_banner'}
            <div class="position-relative rounded-3 overflow-hidden mb-4">
                {block name='snippets-banner-image'}
                    <img class="d-block w-100" src="{$oImageMap->cBildPfad}" alt="{$oImageMap->cTitel}" width="{$oImageMap->fWidth}" height="{$oImageMap->fHeight}" loading="lazy">
                {/block}
                {block name='snippets-banner-map'}
                    {foreach $oImageMap->oArea_arr as $oImageMapArea}
                        {strip}
                            <a href="{$oImageMapArea->cUrl}" class="position-absolute {$oImageMapArea->cStyle}"
                               style="left:{math equation="(100/bWidth)*posX" bWidth=$oImageMap->fWidth posX=$oImageMapArea->oCoords->x}%;top:{math equation="(100/bHeight)*posY" bHeight=$oImageMap->fHeight posY=$oImageMapArea->oCoords->y}%;width:{math equation="(100/bWidth)*aWidth" bWidth=$oImageMap->fWidth aWidth=$oImageMapArea->oCoords->w}%;height:{math equation="(100/bHeight)*aHeight" bHeight=$oImageMap->fHeight aHeight=$oImageMapArea->oCoords->h}%" 
                               title="{$oImageMapArea->cTitel|strip_tags|escape:'html'|escape:'quotes'}"}
                                {if $oImageMapArea->oArtikel || $oImageMapArea->cBeschreibung|strlen > 0}
                                    {assign var=oArtikel value=$oImageMapArea->oArtikel}
                                    <div class="card position-absolute top-0 end-0 mt-3 me-3" style="max-width: 300px;">
                                        {block name='snippets-banner-map-area-image'}
                                            {if $oArtikel !== null}
                                                <div class="card-img-top">
                                                    {include file='snippets/image.tpl' item=$oArtikel square=false}
                                                </div>
                                            {/if}
                                            <div class="card-body">
                                                {if $oImageMapArea->cBeschreibung|strlen > 0}
                                                    <p class="card-text fs-sm">
                                                        {$oImageMapArea->cBeschreibung}
                                                    </p>
                                                {/if}
                                                {if $oArtikel !== null}
                                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                                        <div class="fs-sm fw-medium text-accent">{$oArtikel->cName}</div>
                                                        <button class="btn btn-sm btn-primary">
                                                            <i class="ci-eye me-1"></i>{lang key='details'}
                                                        </button>
                                                    </div>
                                                {/if}
                                            </div>
                                        {/block}
                                    </div>
                                {/if}
                            {/link}
                        {/strip}
                    {/foreach}
                {/block}
            </div>
        {/container}
    {/if}
{/block}
