{$idx = $idx|default:'###'}
<div class="control-group">\
    <a class="remove-group" href="#"><i class="fa fa-remove"></i></a>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="js-file-{$idx}">{__('File name')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($jsFile->name)} value="{$jsFile->name}" {/if} id="js-file-{$idx}" type="text" name="Install-JS-file-name[]" class="form-control required" placeholder="meine.datei.js">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="js-prio-{$idx}">{__('Priority')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <select name="Install-JS-file-priority[]" class="form-control required" id="js-prio-{$idx}">\
                <option{if !empty($jsFile->priority) && $jsFile->priority == 1} selected {/if} value="1">1 {__('(highest)')}</option>\
                <option{if !empty($jsFile->priority) && $jsFile->priority == 2} selected {/if} value="2">2</option>\
                <option{if !empty($jsFile->priority) && $jsFile->priority == 3} selected {/if} value="3">3</option>\
                <option{if !empty($jsFile->priority) && $jsFile->priority == 4} selected {/if} value="4">4</option>\
                <option{if empty($jsFile->priority) || $jsFile->priority == 5} selected {/if} value="5">5 {__('(default)')})</option>\
                <option{if !empty($jsFile->priority) && $jsFile->priority == 6} selected {/if} value="6">6</option>\
                <option{if !empty($jsFile->priority) && $jsFile->priority == 7} selected {/if} value="7">7</option>\
                <option{if !empty($jsFile->priority) && $jsFile->priority == 9} selected {/if} value="8">8</option>\
                <option{if !empty($jsFile->priority) && $jsFile->priority == 9} selected {/if} value="9">9</option>\
                <option{if !empty($jsFile->priority) && $jsFile->priority == 10} selected {/if} value="10">10 {__('(lowest)')}</option>\
            </select>\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="js-pos-{$idx}">{__('Position')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <select name="Install-JS-file-position[]" class="form-control required" id="js-pos-{$idx}">\
                <option{if !empty($jsFile->position) && $jsFile->position === 'body'} selected {/if} value="body">{__('Body')}</option>\
                <option{if empty($jsFile->position) || $jsFile->position === 'head'} selected {/if} value="head">{__('Head')}</option>\
            </select>\
        </div>\
    </div>\
    <hr>\
</div>\
