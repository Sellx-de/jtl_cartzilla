{block name='productdetails-mediafile'}
    {if !empty($Artikel->oMedienDatei_arr)}
        {assign var=mp3List value=false}
        {assign var=titles value=false}
        <div class="row g-4">
        {foreach $Artikel->oMedienDatei_arr as $oMedienDatei}
            {if ($mediaType->name == $oMedienDatei->cMedienTyp && $oMedienDatei->cAttributTab|strlen == 0)
            || ($oMedienDatei->cAttributTab|strlen > 0 && $mediaType->name == $oMedienDatei->cAttributTab)}
                {if $oMedienDatei->nErreichbar == 0}
                    {block name='productdetails-mediafilealert'}
                        <div class="col-12">
                            <div class="alert alert-danger">
                                <i class="ci-close-circle me-2"></i>{lang key='noMediaFile' section='errorMessages'}
                            </div>
                        </div>
                    {/block}
                {else}
                    {assign var=cName value=$oMedienDatei->cName}
                    {assign var=titles value=$titles|cat:$cName}
                    {if !$oMedienDatei@last}
                        {assign var=titles value=$titles|cat:'|'}
                    {/if}

                    {* Images *}
                    {if $oMedienDatei->nMedienTyp === 1}
                        {block name='productdetails-mediafile-images'}
                            {$cMediaAltAttr = ""}
                            {if isset($oMedienDatei->oMedienDateiAttribut_arr) && $oMedienDatei->oMedienDateiAttribut_arr|count > 0}
                                {foreach $oMedienDatei->oMedienDateiAttribut_arr as $oAttribut}
                                    {if $oAttribut->cName === 'img_alt'}
                                        {assign var=cMediaAltAttr value=$oAttribut->cWert}
                                    {/if}
                                {/foreach}
                            {/if}
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 border-0 shadow">
                                    <div class="card-img-top">
                                        <img src="{if !empty($oMedienDatei->cPfad)}{$ShopURL}/{$smarty.const.PFAD_MEDIAFILES}{$oMedienDatei->cPfad}{elseif !empty($oMedienDatei->cURL)}{$oMedienDatei->cURL}{/if}" 
                                             class="img-fluid" alt="{$cMediaAltAttr}">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{$oMedienDatei->cName}</h5>
                                        <p class="card-text">{$oMedienDatei->cBeschreibung}</p>
                                    </div>
                                </div>
                            </div>
                        {/block}
                        
                    {* Audio *}
                    {elseif $oMedienDatei->nMedienTyp === 2}
                        {if $oMedienDatei->cName|strlen > 1}
                            {block name='productdetails-mediafile-audio'}
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            <h5 class="mb-0">{$oMedienDatei->cName}</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                {$oMedienDatei->cBeschreibung}
                                            </div>
                                            
                                            {if $oMedienDatei->cPfad|strlen > 1 || $oMedienDatei->cURL|strlen > 1}
                                                {assign var=audiosrc value=$oMedienDatei->cURL}
                                                {if $oMedienDatei->cPfad|strlen > 1}
                                                    {assign var=audiosrc value=$ShopURL|cat:'/':$smarty.const.PFAD_MEDIAFILES:$oMedienDatei->cPfad}
                                                {/if}
                                                {if $audiosrc|strlen > 1}
                                                    <div class="rounded bg-secondary p-3">
                                                        <audio controls controlsList="nodownload" class="w-100">
                                                            <source src="{$audiosrc}" type="audio/mpeg">
                                                            {lang key='audioTagNotSupported' section='errorMessages'}
                                                        </audio>
                                                    </div>
                                                {/if}
                                            {/if}
                                        </div>
                                    </div>
                                </div>
                            {/block}
                        {/if}

                    {* Video *}
                    {elseif $oMedienDatei->nMedienTyp === 3}
                        {block name='productdetails-mediafile-video'}
                            {if ($oMedienDatei->videoType === 'mp4'
                            || $oMedienDatei->videoType === 'webm'
                            || $oMedienDatei->videoType === 'ogg')}
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            <h5 class="mb-0">{$oMedienDatei->cName}</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                {$oMedienDatei->cBeschreibung}
                                            </div>
                                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                                {include 'snippets/video.tpl' video=$oMedienDatei->video}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {else}
                                <div class="col-12">
                                    <div class="alert alert-warning">
                                        <i class="ci-announcement me-2"></i>{lang key='videoTypeNotSupported' section='errorMessages'}
                                    </div>
                                </div>
                            {/if}
                        {/block}
                        
                    {* Sonstiges *}
                    {elseif $oMedienDatei->nMedienTyp === 4}
                        {block name='productdetails-mediafile-misc'}
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow">
                                    <div class="card-header">
                                        <h5 class="mb-0">{$oMedienDatei->cName}</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            {$oMedienDatei->cBeschreibung}
                                        </div>
                                        
                                        {if !empty($oMedienDatei->video)}
                                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                                {include 'snippets/video.tpl' video=$oMedienDatei->video class='yt-container'}
                                            </div>
                                        {else}
                                            {if isset($oMedienDatei->oEmbed) && $oMedienDatei->oEmbed->code}
                                                <div class="embed-responsive">
                                                    {$oMedienDatei->oEmbed->code}
                                                </div>
                                            {/if}
                                            {if !empty($oMedienDatei->cPfad)}
                                                <div class="mt-3">
                                                    <a href="{$ShopURL}/{$smarty.const.PFAD_MEDIAFILES}{$oMedienDatei->cPfad}" 
                                                       class="btn btn-outline-primary" target="_blank">
                                                        <i class="ci-download me-1"></i>{$oMedienDatei->cName}
                                                    </a>
                                                </div>
                                            {elseif !empty($oMedienDatei->cURL)}
                                                <div class="mt-3">
                                                    <a href="{$oMedienDatei->cURL}" class="btn btn-outline-primary" target="_blank">
                                                        <i class="ci-external-link me-1"></i>{$oMedienDatei->cName}
                                                    </a>
                                                </div>
                                            {/if}
                                        {/if}
                                    </div>
                                </div>
                            </div>
                        {/block}
                        
                    {* PDF *}
                    {elseif $oMedienDatei->nMedienTyp == 5}
                        {block name='productdetails-mediafile-pdf'}
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow">
                                    <div class="card-header">
                                        <h5 class="mb-0">{$oMedienDatei->cName}</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            {$oMedienDatei->cBeschreibung}
                                        </div>
                                        
                                        {if !empty($oMedienDatei->cPfad)}
                                            <a href="{$ShopURL}/{$smarty.const.PFAD_MEDIAFILES}{$oMedienDatei->cPfad}" 
                                               class="btn btn-outline-primary" target="_blank">
                                                <i class="ci-document me-1"></i>{$oMedienDatei->cName}
                                            </a>
                                        {elseif !empty($oMedienDatei->cURL)}
                                            <a href="{$oMedienDatei->cURL}" class="btn btn-outline-primary" target="_blank">
                                                <i class="ci-document me-1"></i>{$oMedienDatei->cName}
                                            </a>
                                        {/if}
                                    </div>
                                </div>
                            </div>
                        {/block}
                    {/if}
                {/if}
            {/if}
        {/foreach}
        </div>
    {/if}
{/block}