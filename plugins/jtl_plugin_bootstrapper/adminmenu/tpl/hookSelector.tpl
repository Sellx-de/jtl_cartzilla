{$idx = $idx|default:'###'}
<div class="control-group">\
    <a class="remove-group" href="#"><i class="fa fa-remove"></i></a>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="hookIDs-{$idx}">{__('Hook')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <select name="Install-Hooks-Hook-ID[]" class="form-control" id="hookIDs-{$idx}">\
                {strip}
                {foreach $hookList as $hookData}
                    <option{if !empty($hook->id) && $hook->id == $hookData.2} selected{/if} value="{$hookData.2}">{$hookData.1} ({$hookData.2})</option>\
                {/foreach}
                {/strip}
            </select>\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="hookFile-{$idx}">{__('Priority')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input value="{if isset($hook->priority)}{$hook->priority}{else}5{/if}" id="hookFile-{$idx}" type="number" name="Install-Hooks-Priority[]" class="form-control required" placeholder=0 (niedrigste) - 9 (höchste)">\
        </div>\
    </div>\
    <hr>\
</div>\
