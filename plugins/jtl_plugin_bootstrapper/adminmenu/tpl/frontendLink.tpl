{$idx = $idx|default:'###'}
<div class="control-group">\
    <a class="remove-group" href="#"><i class="fa fa-remove"></i></a>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="name-{$idx}">{__('Name')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($frontendLink->Name)} value="{$frontendLink->Name}" {/if} id="name-{$idx}" type="text" name="FrontendLink-Link-Name[]" class="form-control required" placeholder="My page">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="file-{$idx}">{__('File name')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($frontendLink->Filename)} value="{$frontendLink->Filename}" {/if} id="file-{$idx}" type="text" name="FrontendLink-Link-Filename[]" class="form-control required" placeholder="my_page.php">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="tpl-{$idx}">{__('Template (leave empty when using FullScreenTemplate)')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($frontendLink->Template)} value="{$frontendLink->Template}" {/if} id="tpl-{$idx}" type="text" name="FrontendLink-Link-Template[]" class="form-control" placeholder="my_page.tpl">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="fstpl-{$idx}">{__('FullscreenTemplate? (leave empty when not using it)')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($frontendLink->FullscreenTemplate)} value="{$frontendLink->FullscreenTemplate}" {/if} id="fstpl-{$idx}" type="text" name="FrontendLink-Link-FullscreenTemplate[]" class="form-control" placeholder="my_fullscreen_page.tpl">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="vsl-{$idx}">{__('Only visible after login?')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <select name="FrontendLink-Link-VisibleAfterLogin[]" id="vsl-{$idx}" class="form-control">\
                <option{if !empty($frontendLink->VisibleAfterLogin) && $frontendLink->VisibleAfterLogin === 'Y'} selected{/if} value="Y">{__('Yes')}</option>\
                <option{if empty($frontendLink->VisibleAfterLogin) || $frontendLink->VisibleAfterLogin === 'N'} selected{/if} value="N">{__('No')}</option>\
            </select>\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="prnt-{$idx}">{__('Print button')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <select name="FrontendLink-Link-PrintButton[]" class="form-control" id="prnt-{$idx}">\
                <option{if !empty($frontendLink->PrintButton) && $frontendLink->PrintButton === 'Y'} selected{/if} value="Y">{__('Yes')}</option>\
                <option{if empty($frontendLink->PrintButton) || $frontendLink->PrintButton === 'N'} selected{/if} value="N">{__('No')}</option>\
            </select>\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="ssl-{$idx}">{__('SSL encryption')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <select name="FrontendLink-Link-SSL[]" class="form-control" id="ssl-{$idx}">\
                <option{if !isset($frontendLink->SSL) || $frontendLink->SSL === 0} selected{/if} value="0">Standard</option>\
                <option{if !empty($frontendLink->SSL) && $frontendLink->SSL === 2} selected{/if} value="2">erzwungen</option>\
            </select>\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="lgrp-{$idx}">{__('Link group')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($frontendLink->LinkGroup)} value="{$frontendLink->LinkGroup}" {/if} id="lgrp-{$idx}" type="text" name="FrontendLink-Link-LinkGroup[]" class="form-control required" placeholder="hidden">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="seo-{$idx}">{__('SEO URL')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($frontendLink->LinkLanguage[0]->Seo)} value="{$frontendLink->LinkLanguage[0]->Seo}" {/if} id="seo-{$idx}" type="text" name="FrontendLink-Link-LinkLanguage-Seo[]" class="form-control required" placeholder="Meine-tolle-Seite">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="lnkname-{$idx}">{__('Link name')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($frontendLink->LinkLanguage[0]->Name)} value="{$frontendLink->LinkLanguage[0]->Name}" {/if} id="lnkname-{$idx}" type="text" name="FrontendLink-Link-LinkLanguage-Name[]" class="form-control required" placeholder="MeineTolleSeite">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="title-{$idx}">{__('Title')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($frontendLink->LinkLanguage[0]->Title)} value="{$frontendLink->LinkLanguage[0]->Title}" {/if} id="title-{$idx}" type="text" name="FrontendLink-Link-LinkLanguage-Title[]" class="form-control required" placeholder="Meine Tolle Seite">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="metatitle-{$idx}">{__('Meta Title')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($frontendLink->LinkLanguage[0]->MetaTitle)} value="{$frontendLink->LinkLanguage[0]->MetaTitle}" {/if} id="metatitle-{$idx}" type="text" name="FrontendLink-Link-LinkLanguage-MetaTitle[]" class="form-control required" placeholder="Meine Seite">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="metakeywords-{$idx}">{__('Meta Keywords')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($frontendLink->LinkLanguage[0]->MetaKeywords)} value="{$frontendLink->LinkLanguage[0]->MetaKeywords}" {/if} id="metakeywords-{$idx}" type="text" name="FrontendLink-Link-LinkLanguage-MetaKeywords[]" class="form-control required" placeholder="Meine,Tolle,Seite">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="metadescription-{$idx}">{__('Meta Description')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($frontendLink->LinkLanguage[0]->MetaDescription)} value="{$frontendLink->LinkLanguage[0]->MetaDescription}" {/if} id="metadescription-{$idx}" type="text" name="FrontendLink-Link-LinkLanguage-MetaDescription[]" class="form-control required" placeholder="Meine Tolle Seite ist eine tolle Seite">\
        </div>\
    </div>\
    <hr>\
</div>\
