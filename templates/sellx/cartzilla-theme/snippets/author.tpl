{block name='snippets-author'}
    {block name='snippets-author-content'}
        <div class="d-flex align-items-center mb-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
            {block name='snippets-author-title'}
                {if !empty($oAuthor->cAvatarImgSrcFull)}
                    <img class="rounded-circle me-2" src="{$oAuthor->cAvatarImgSrcFull}" width="50" alt="{$oAuthor->cName}">
                {/if}
                <div>
                    {if $showModal|default:true}
                        <a class="author-modal text-decoration-none fw-medium" 
                           href="#" 
                           title="{$oAuthor->cName}"
                           data-bs-toggle="modal"
                           data-bs-target="#author-{$oAuthor->kContentAuthor}">
                            <span itemprop="name">{$oAuthor->cName}</span>
                        </a>
                    {else}
                        <span class="fw-medium" itemprop="name">{$oAuthor->cName}</span>
                    {/if}
                    {if isset($cDate)}
                        <div class="fs-sm text-muted">{$cDate}</div>
                    {/if}
                </div>
            {/block}
            {block name='snippets-author-modal'}
                {if $showModal|default:true}
                    <div class="modal fade" id="author-{$oAuthor->kContentAuthor}" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="d-flex align-items-center">
                                        {if !empty($oAuthor->cAvatarImgSrcFull)}
                                            <img alt="{$oAuthor->cName}" src="{$oAuthor->cAvatarImgSrcFull}" width="60" class="rounded-circle me-3">
                                            <meta itemprop="image" content="{$oAuthor->cAvatarImgSrcFull}">
                                        {/if}
                                        <h5 class="modal-title" itemprop="name">{$oAuthor->cName}</h5>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {block name='snippets-author-modal-content'}
                                        {if !empty($oAuthor->cVitaShort)}
                                            <div itemprop="description">
                                                {$oAuthor->cVitaShort}
                                            </div>
                                        {/if}
                                    {/block}
                                </div>
                            </div>
                        </div>
                    </div>
                {/if}
            {/block}
        </div>
    {/block}
    {block name='snippets-author-publisher'}
        <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization" class="d-none">
            <span itemprop="name">{$meta_publisher}</span>
            <meta itemprop="url" content="{$ShopURL}">
            <meta itemprop="logo" content="{$ShopLogoURL}">
        </div>
    {/block}
{/block}
