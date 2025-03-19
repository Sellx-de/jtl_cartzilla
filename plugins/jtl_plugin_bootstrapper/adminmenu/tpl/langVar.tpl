{$idx = $idx|default:'###'}
<div class="control-group">\
    <a class="remove-group" href="#"><i class="fa fa-remove"></i></a>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="lv-name-{$idx}">{__('Name')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($langVar->Name)} value="{$langVar->Name}" {/if} id="lv-name-{$idx}" type="text" name="Locales-Variable-Name[]" class="form-control required" placeholder="my_lang_var_x">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="lv-description-{$idx}">{__('Description')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($langVar->Description)} value="{$langVar->Description}" {/if} id="lv-description-{$idx}" type="text" name="Locales-Variable-Description[]" class="form-control required" placeholder="{__('My description')}">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="lv-tde-{$idx}">{__('Value (german)')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($langVar->Values.GER)} value="{$langVar->Values.GER}" {/if} id="lv-tde-{$idx}" type="text" name="Locales-Variable.GER[]" class="form-control required" placeholder="{__('German translation')}">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="lv-ten-{$idx}">{__('Value (english)')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($langVar->Values.ENG)} value="{$langVar->Values.ENG}" {/if} id="lv-ten-{$idx}" type="text" name="Locales-Variable.ENG[]" class="form-control required" placeholder="{__('English translation')}">\
        </div>\
    </div>\
    <hr>\
</div>\
