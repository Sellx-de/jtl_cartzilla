{$idx = $idx|default:'###'}
<div class="control-group">\
    <a class="remove-group" href="#"><i class="fa fa-remove"></i></a>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="bx-name-{$idx}">{__('Name')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($box->Name)} value="{$box->Name}" {/if} id="bx-name-{$idx}" type="text" name="Install-Boxes-Box-Name[]" class="form-control required" placeholder="{__('My great box')}">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="bx-tpl-{$idx}">{__('Template file')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($box->TemplateFile)} value="{$box->TemplateFile}" {/if} id="bx-tpl-{$idx}" type="text" name="Install-Boxes-Box-TemplateFile[]" class="form-control required" placeholder="my_box.tpl">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="bx-ptype-{$idx}">{__('Enable on page types (0 for all page types)')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if isset($box->Available)} value="{$box->Available}" {/if} id="bx-ptype-{$idx}" type="text" name="Install-Boxes-Box-Available[]" class="form-control required" placeholder="0">\
        </div>\
    </div>\
    <hr>\
</div>\
