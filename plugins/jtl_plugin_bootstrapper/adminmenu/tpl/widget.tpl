{$idx = $idx|default:'###'}
<div class="control-group">\
    <a class="remove-group" href="#"><i class="fa fa-remove"></i></a>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="wdgt-class-{$idx}">{__('Class name')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($widget->Class)} value="{$widget->Class}" {/if} id="wdgt-class-{$idx}" type="text" name="Install-AdminWidget-Widget-Class[]" class="form-control required" placeholder="ExampleClass">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="wdgt-title-{$idx}">{__('Title')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($widget->Title)} value="{$widget->Title}" {/if} id="wdgt-title-{$idx}" type="text" name="Install-AdminWidget-Widget-Title[]" class="form-control required" placeholder="Eine Überschrift">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="wdgt-descr-{$idx}">{__('Description')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($widget->Description)} value="{$widget->Description}" {/if} id="wdgt-descr-{$idx}" type="text" name="Install-AdminWidget-Widget-Description[]" class="form-control required" placeholder="Ein Beispiel-Widget">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="wdgt-tplfile-{$idx}">{__('Template file')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($widget->TemplateFile)} value="{$widget->TemplateFile}" {/if} id="wdgt-tplfile-{$idx}" type="text" name="Install-AdminWidget-Widget-TemplateFile[]" class="form-control required" placeholder="my_widget.tpl">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="wdgt-enabled-{$idx}">{__('Enabled? (1=yes, 0=no)')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input value="{if isset($widget->Active)}{$widget->Active}{else}1{/if}" id="wdgt-enabled-{$idx}" type="number" min="0" max="1" name="Install-AdminWidget-Widget-Active[]" class="form-control required" placeholder="1">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="wdgt-exp-{$idx}">{__('Expanded? (1=yes, 0=no)')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input value="{if isset($widget->Expanded)}{$widget->Expanded}{else}1{/if}" id="wdgt-exp-{$idx}" type="number" min="0" max="1" name="Install-AdminWidget-Widget-Expanded[]" class="form-control required" placeholder="1">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="wdgt-container-{$idx}">{__('Container? (center, left, right)')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input value="{if isset($widget->Container)}{$widget->Container}{else}center{/if}" id="wdgt-container-{$idx}" type="text" name="Install-AdminWidget-Widget-Container[]" class="form-control required" placeholder="center">\
        </div>\
    </div>\
    <hr>\
</div>\
