{block name='productdetails-download'}
<div class="row g-4">
    {foreach $Artikel->oDownload_arr as $oDownload}
        {if isset($oDownload->oDownloadSprache)}
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-header">
                        <h5 class="mb-0">{$oDownload->oDownloadSprache->getName()|default:''}</h5>
                    </div>
                    <div class="card-body">
                        {block name='productdetails-download-description'}
                            <div class="mb-3">
                                {$oDownload->oDownloadSprache->getBeschreibung()|default:''}
                            </div>
                        {/block}
                        
                        {if $oDownload->hasPreview()}
                            {block name='productdetails-download-preview'}
                                <div class="mb-3">
                                    {if $oDownload->getPreviewType() === 'music'}
                                        {block name='productdetails-download-preview-music'}
                                            <div class="rounded bg-secondary p-3">
                                                <audio controls controlsList="nodownload" preload="none" class="w-100">
                                                    <source src="{$ShopURL}/{$smarty.const.PFAD_DOWNLOADS_PREVIEW_REL}{$oDownload->cPfadVorschau}" >
                                                    Your browser does not support the audio element.
                                                </audio>
                                            </div>
                                        {/block}
                                    {elseif $oDownload->getPreviewType() === 'video'}
                                        {block name='productdetails-download-preview-video'}
                                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                                <video controls controlsList="nodownload" preload="none">
                                                    <source src="{$ShopURL}/{$smarty.const.PFAD_DOWNLOADS_PREVIEW_REL}{$oDownload->cPfadVorschau}" >
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                        {/block}
                                    {elseif $oDownload->getPreviewType() === 'image'}
                                        {block name='productdetails-download-preview-image'}
                                            <div class="rounded overflow-hidden">
                                                <img src="{$ShopURL}/{$smarty.const.PFAD_DOWNLOADS_PREVIEW_REL}{$oDownload->cPfadVorschau}" 
                                                     class="img-fluid" alt="{$oDownload->oDownloadSprache->getBeschreibung()|default:''|strip_tags}">
                                            </div>
                                        {/block}
                                    {else}
                                        {block name='productdetails-download-preview-misc'}
                                            <a href="{$ShopURL}/{$smarty.const.PFAD_DOWNLOADS_PREVIEW_REL}{$oDownload->cPfadVorschau}" 
                                               class="btn btn-outline-primary" title="{$oDownload->oDownloadSprache->getName()|default:''}" target="_blank">
                                                <i class="ci-download me-1"></i>{$oDownload->oDownloadSprache->getName()|default:''}
                                            </a>
                                        {/block}
                                    {/if}
                                </div>
                            {/block}
                        {/if}
                    </div>
                </div>
            </div>
        {/if}
    {/foreach}
</div>
{/block}
