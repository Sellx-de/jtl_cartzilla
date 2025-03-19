{$idx = $idx|default:'###'}
<div class="control-group">\
    <a class="remove-group" href="#"><i class="fa fa-remove"></i></a>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="mt-name-{$idx}">{__('Name')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($tpl->Name)} value="{$tpl->Name}" {/if} id="mt-name-{$idx}" type="text" name="Install-Emailtemplate-Template-Name[]" class="form-control required" placeholder="MeinMailTemplate">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="mt-descr-{$idx}">{__('Description')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($tpl->Description)} value="{$tpl->Description}" {/if} id="mt-descr-{$idx}" type="text" name="Install-Emailtemplate-Template-Description[]" class="form-control required" placeholder="Beschreibung für mein Template">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="mt-type-{$idx}">{__('Type')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($tpl->Type)} value="{$tpl->Type}" {/if} id="mt-type-{$idx}" type="text" name="Install-Emailtemplate-Template-Type[]" class="form-control required" placeholder="text/html">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="mt-mid-{$idx}">{__('Module-ID (no underscores)')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($tpl->ModulId)} value="{$tpl->ModulId}" {/if} id="mt-mid-{$idx}" type="text" name="Install-Emailtemplate-Template-ModulId[]" class="form-control required">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="mt-enabled-{$idx}">{__('Enabled')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <select class="config-dropdown form-control" id="mt-enabled-{$idx}" name="Install-Emailtemplate-Template-Active[]">\
                <option{if empty($tpl->Active) || $tpl->Active === 'Y'} selected {/if} value="Y">{__('Yes')}</option>\
                <option{if !empty($tpl->Active) && $tpl->Active === 'N'} selected {/if} value="N">{__('No')}</option>\
            </select>\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="mt-akz-{$idx}">{__('Add AKZ?')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <select class="config-dropdown form-control" id="mt-akz-{$idx}" name="Install-Emailtemplate-Template-AKZ[]">\
                <option{if isset($tpl->AKZ) && $tpl->AKZ === 1} selected {/if} value="1">{__('Yes')}</option>\
                <option{if !isset($tpl->AKZ) || $tpl->AKZ === 0} selected {/if} value="0">{__('No')}</option>\
            </select>\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="mt-agb-{$idx}">{__('Add AGB?')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <select class="config-dropdown form-control" id="mt-agb-{$idx}" name="Install-Emailtemplate-Template-AGB[]">\
                <option{if isset($tpl->AGB) && $tpl->AGB === 1} selected {/if} value="1">{__('Yes')}</option>\
                <option{if !isset($tpl->AGB) || $tpl->AGB === 0} selected {/if} value="0">{__('No')}</option>\
            </select>\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="mt-wrb-{$idx}">{__('Add WRB?')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <select class="config-dropdown form-control" id="mt-wrb-{$idx}" name="Install-Emailtemplate-Template-WRB[]">\
                <option{if isset($tpl->WRB) && $tpl->WRB === 1} selected {/if} value="1">{__('Yes')}</option>\
                <option{if !isset($tpl->WRB) || $tpl->WRB === 0} selected {/if} value="0">{__('No')}</option>\
            </select>\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="mt-mwrf-{$idx}">{__('Add MWRF?')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <select class="config-dropdown form-control" id="mt-mwrf-{$idx}" name="Install-Emailtemplate-Template-nWRBForm[]">\
                <option{if isset($tpl->nWRBForm) && $tpl->nWRBForm === 1} selected {/if} value="1">{__('Yes')}</option>\
                <option{if !isset($tpl->nWRBForm) || $tpl->nWRBForm === 0} selected {/if} value="0">{__('No')}</option>\
            </select>\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="mt-subject-{$idx}">{__('Subject')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($tpl->TemplateLanguage[0]->Subject)} value="{$tpl->TemplateLanguage[0]->Subject}" {/if} id="mt-subject-{$idx}" type="text" name="Install-Emailtemplate-Template-TemplateLanguage-Subject[]" class="form-control required" placeholder="Mein Betreff">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="mt-html-{$idx}">{__('Content (HTML)')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <textarea name="Install-Emailtemplate-Template-TemplateLanguage-ContentHtml[]" id="mt-html-{$idx}" class="form-control required">{if !empty($tpl->TemplateLanguage[0]->ContentHtml)}{$tpl->TemplateLanguage[0]->ContentHtml}{/if}</textarea>\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="mt-text-{$idx}">{__('Content (text)')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <textarea name="Install-Emailtemplate-Template-TemplateLanguage-ContentText[]" id="mt-text-{$idx}" class="form-control required">{if !empty($tpl->TemplateLanguage[0]->ContentText)}{$tpl->TemplateLanguage[0]->ContentText}{/if}</textarea>\
        </div>\
    </div>\
    <hr>\
</div>\
