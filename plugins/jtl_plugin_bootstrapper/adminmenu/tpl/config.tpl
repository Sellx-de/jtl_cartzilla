{$idx = $idx|default:'###'}
<div class="control-group config">\
    <a class="remove-group" href="#"><i class="fa fa-remove"></i></a>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="cfg-name-{$idx}">{__('Name')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($setting->Name)} value="{$setting->Name}" {/if} id="cfg-name-{$idx}" type="text" name="Settingslink-Setting-Name[]" class="form-control required" placeholder="{__('Option no. x')}">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="cfg-cfgname-{$idx}">{__('Config name')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($setting->ValueName)} value="{$setting->ValueName}" {/if} id="cfg-cfgname-{$idx}" type="text" name="Settingslink-Setting-ValueName[]" class="form-control required" placeholder="my_option_x">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="cfg-descr-{$idx}">{__('Description')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($setting->Description)} value="{$setting->Description}" {/if} id="cfg-descr-{$idx}" type="text" name="Settingslink-Setting-Description[]" class="form-control required" placeholder="{__('Example description')}">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="cfg-init-{$idx}">{__('Initial value')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($setting->initialValue)} value="{$setting->initialValue}" {/if} id="cfg-init-{$idx}" type="text" name="Settingslink-Setting-initialValue[]" class="form-control required" placeholder="42">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="cfg-type-{$idx}">{__('Type')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <select data-ref="{$idx}" class="config-dropdown form-control" name="Settingslink-Setting-type[]" id="cfg-type-{$idx}">\
                <option{if !empty($setting->type) && $setting->type === 'text'} selected{/if} value="text">Text</option>\
                <option{if !empty($setting->type) && $setting->type === 'selectbox'} selected{/if} value="selectbox">{__('Selectbox')}</option>\
                <option{if !empty($setting->type) && $setting->type === 'textarea'} selected{/if} value="textarea">{__('Textarea')}</option>\
                <option{if !empty($setting->type) && $setting->type === 'checkbox'} selected{/if} value="checkbox">{__('Checkbox')}</option>\
                <option{if !empty($setting->type) && $setting->type === 'radio'} selected{/if} value="radio">{__('Radio')}</option>\
                <option{if !empty($setting->type) && $setting->type === 'colorpicker'} selected{/if} value="colorpicker">{__('Colorpicker')}</option>\
                <option{if !empty($setting->type) && $setting->type === 'email'} selected{/if} value="email">{__('Email')}</option>\
                <option{if !empty($setting->type) && $setting->type === 'date'} selected{/if} value="date">{__('Date')}</option>\
                <option{if !empty($setting->type) && $setting->type === 'range'} selected{/if} value="range">{__('Range')}</option>\
                <option{if !empty($setting->type) && $setting->type === 'week'} selected{/if} value="week">{__('Week')}</option>\
                <option{if !empty($setting->type) && $setting->type === 'time'} selected{/if} value="time">{__('Time')}</option>\
                <option{if !empty($setting->type) && $setting->type === 'tel'} selected{/if} value="tel">{__('Tel')}</option>\
                <option{if !empty($setting->type) && $setting->type === 'url'} selected{/if} value="url">{__('URL')}</option>\
            </select>\
        </div>\
    </div>\
    <div class="option-values-wrap" style="display:none;" id="cfg-selectboxoptions-{$idx}">\
        <div class="form-group form-row align-items-center">\
            <label class="col col-sm-4 col-form-label text-sm-right order-1" for="opt-name-{$idx}-#cnt#">{__('OptionsSource')}</label>\
            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
                <input id="cfg-optionssrc-{$idx}" type="text" name="Settingslink-Setting-OptionsSource[]" class="form-control required" placeholder="source.php">\
            </div>\
        </div>\
        <hr>\
        <button class="add-option-values btn btn-primary" type="button">{__('Add item')}</button>\
        <div class="option-values"></div>\
        <hr>\
    </div>\
    <hr>\
</div>\
