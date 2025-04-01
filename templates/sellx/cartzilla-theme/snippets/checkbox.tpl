{block name='snippets-checkbox'}
    {if empty($cPost_arr)}
        {assign var=cPost_arr value=null}
    {/if}
    {if empty($cPost_arr)}
        {assign var=cPost_arr value=$smarty.post}
    {/if}

    {getCheckBoxForLocation nAnzeigeOrt=$nAnzeigeOrt cPlausi_arr=$cPlausi_arr cPost_arr=$cPost_arr assign='checkboxes'}
    {if !empty($checkboxes)}
        {block name='snippets-checkbox-checkboxes'}
            {foreach $checkboxes as $cb}
                <div class="form-check mb-3">
                    {block name='snippets-checkbox-checkbox'}
                        {if $cb->identifier!=='RightOfWithdrawalOfDownloadItems' || ($cb->identifier==='RightOfWithdrawalOfDownloadItems' && (isset($hasDownloads) && $hasDownloads === true))}
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   id="{if isset($cIDPrefix)}{$cIDPrefix}_{/if}{$cb->cID}" 
                                   name="{$cb->cID}" 
                                   {if $cb->nPflicht === 1}required{/if}
                                   {if $cb->isActive}checked{/if}>
                            <label class="form-check-label" for="{if isset($cIDPrefix)}{$cIDPrefix}_{/if}{$cb->cID}">
                                {block name='snippets-checkbox-checkbox-name'}
                                   {nl2br($cb->cName)}
                                {/block}
                                {if !empty($cb->cLinkURL)}
                                    {block name='snippets-checkbox-checkbox-more-link'}
                                        <span class='moreinfo'>
                                            (<a href="{$cb->cLinkURL}" class="text-decoration-underline popup checkbox-popup">{lang key='read' section='account data'}</a>)
                                        </span>
                                    {/block}
                                {/if}
                                {if empty($cb->nPflicht)}
                                    {block name='snippets-checkbox-checkbox-optional'}
                                        <span class='text-muted'> - {lang key='optional'}</span>
                                    {/block}
                                {/if}
                            </label>
                            {if !empty($cb->cBeschreibung)}
                                <div class="form-text">{$cb->cBeschreibung}</div>
                            {/if}
                        {/if}
                    {/block}
                </div>
            {/foreach}
        {/block}
    {/if}
{/block}
