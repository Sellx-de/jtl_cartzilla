{block name='snippets-alert'}
    <div class="alert alert-{$alert->getCssType()} alert-dismissible fade show alert-wrapper" 
         role="alert"
         {if $alert->getFadeOut()}data-fade-out="{$alert->getFadeOut()}"{/if}
         {if $alert->getKey()}data-key="{$alert->getKey()}"{/if}
         {if $alert->getId()}id="{$alert->getId()}"{/if}>
        {if $alert->getIcon()}
            <i class="ci-{if $alert->getIcon() === 'warning'}warning{elseif $alert->getIcon() === 'check'}check-circle{elseif $alert->getIcon() === 'info'}announcement{else}{$alert->getIcon()}{/if} me-2"></i>
        {/if}
        {if !empty($alert->getLinkHref()) && empty($alert->getLinkText())}
            <a href="{$alert->getLinkHref()}" class="alert-link">{$alert->getMessage()}</a>
        {elseif !empty($alert->getLinkHref()) && !empty($alert->getLinkText())}
            {$alert->getMessage()}
            <a href="{$alert->getLinkHref()}" class="alert-link">{$alert->getLinkText()}</a>
        {else}
            {$alert->getMessage()}
        {/if}
        {if $alert->getDismissable()}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {/if}
    </div>
{/block}
