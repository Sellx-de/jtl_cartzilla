{block name='snippets-language-dropdown'}
    {$languages = JTL\Session\Frontend::getLanguages()}
    {if $languages|count > 0}
        {capture langSelectorText}
            {foreach $languages as $language}
                {if $language->getId() === JTL\Shop::getLanguageID()}
                    {block name='snippets-language-dropdown-text'}
                        <img src="templates/sellx/themes/base/images/flags/{$language->getIso639()}.png" class="flex-shrink-0 me-2" width="20" alt="{$language->getIso()}">

                    {/block}
                {/if}
            {/foreach}
        {/capture}
        {navitemdropdown
        class="col col-lg-7 dropdown d-none d-md-block nav"
        right=true
        text=$smarty.capture.langSelectorText}
            {foreach $languages as $language}
                {block name='snippets-language-dropdown-item'}
                    {dropdownitem href="{$language->getUrl()}"
    class="link-lang"
    data=["iso"=>$language->getIso()]
    attribs=["hreflang"=>$language->getIso639()]
    active=($language->getId() === JTL\Shop::getLanguageID())}
    
    <img src="templates/sellx/themes/base/images/flags/{$language->getIso639()}.png" class="flex-shrink-0 me-2" width="20" alt="{$language->getIso()}"> {lang key={$language->getIso639()} section='custom'}
    

{/dropdownitem}

                {/block}
            {/foreach}
        {/navitemdropdown}
    {/if}
{/block}
