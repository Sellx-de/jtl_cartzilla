{$idx = $idx|default:'###'}
<div class="control-group">\
    <a class="remove-group" href="#"><i class="fa fa-remove"></i></a>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="bl-name-{$idx}">{__('Name')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($customLink->Name)} value="{$customLink->Name}" {/if} id="bl-name-{$idx}" type="text" name="Install-Adminmenu-Customlink-Name[]" class="form-control required" placeholder="{__('My tab')}">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="bl-tpl-{$idx}">{__('Template name')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($customLink->Filename)} value="{$customLink->Filename}" {/if} id="bl-tpl-{$idx}" type="text" name="Install-Adminmenu-Customlink-Filename[]" class="form-control required" placeholder="my_plugin_backend_tab.tpl">\
        </div>\
    </div>\
    <hr>\
</div>\
