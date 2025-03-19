{function footer_content}
    {inline_script}
        var jtl_debug = {ldelim}{rdelim};
        jtl_debug.jtl_lang_var_search_results = '{$plgnJTLDebug->getLocalization()->getTranslation('search_results')}';
        jtl_debug.enableSmartyDebugParam      = '{$plgnJTLDebug->getConfig()->getValue('jtl_debug_query_string')}';
        jtl_debug.getDebugSessionParam        = 'jtl-debug-session';
    {/inline_script}

    {if $plgnJTLDebug->getConfig()->getValue('jtl_debug_show_text_links') === 'Y'}
        <a id="jtl-debug-show" class="btn btn-primary" href="#">{$plgnJTLDebug->getLocalization()->getTranslation('textlink_show')}</a>
    {/if}

    <div id="jtl-debug-content">
        <div class="jtl-debug-search">
            {if $plgnJTLDebug->getConfig()->getValue('jtl_debug_show_text_links') === 'Y'}
                <a id="jtl-debug-hide" class="btn btn-default"  href="#">{$plgnJTLDebug->getLocalization()->getTranslation('textlink_hide')}</a>
            {/if}
            <input type="text" id="jtl-debug-searchbox" placeholder="{$plgnJTLDebug->getLocalization()->getTranslation('enter_search_term')}" aria-label="{$plgnJTLDebug->getLocalization()->getTranslation('enter_search_term')}" />
            <span id="jtl-debug-search-results"></span>
            <span id="jtl-debug-info-area">Fetching debug objects...</span>
        </div>
    </div>
{/function}
{block name="footer-js" append}
    {if isset($jtlDebugActive) && $jtlDebugActive === true}{call footer_content}{/if}
{/block}
{block name="layout-footer-js" append}
    {if isset($jtlDebugActive) && $jtlDebugActive === true}{call footer_content}{/if}
{/block}
