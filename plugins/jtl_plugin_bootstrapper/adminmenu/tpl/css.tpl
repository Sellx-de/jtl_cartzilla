{$idx = $idx|default:'###'}
<div class="control-group">\
    <a class="remove-group" href="#"><i class="fa fa-remove"></i></a>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="css-file-{$idx}">{__('File name')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input{if !empty($cssFile->name)} value="{$cssFile->name}" {/if} id="css-file-{$idx}" type="text" name="Install-CSS-file-name[]" class="form-control required" placeholder="mycss.css">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="css-prio-{$idx}">{__('Priority')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <select name="Install-CSS-file-priority[]" class="form-control required" id="css-prio-{$idx}">\
                <option{if !empty($cssFile->priority) && $cssFile->priority == 1} selected {/if} value="1">1 {__('(highest)')}</option>\
                <option{if !empty($cssFile->priority) && $cssFile->priority == 2} selected {/if} value="2">2</option>\
                <option{if !empty($cssFile->priority) && $cssFile->priority == 3} selected {/if} value="3">3</option>\
                <option{if !empty($cssFile->priority) && $cssFile->priority == 4} selected {/if} value="4">4</option>\
                <option{if empty($cssFile->priority) || $cssFile->priority == 5} selected {/if} value="5">5 (Standard)</option>\
                <option{if !empty($cssFile->priority) && $cssFile->priority == 6} selected {/if} value="6">6</option>\
                <option{if !empty($cssFile->priority) && $cssFile->priority == 7} selected {/if} value="7">7</option>\
                <option{if !empty($cssFile->priority) && $cssFile->priority == 9} selected {/if} value="8">8</option>\
                <option{if !empty($cssFile->priority) && $cssFile->priority == 9} selected {/if} value="9">9</option>\
                <option{if !empty($cssFile->priority) && $cssFile->priority == 10} selected {/if} value="10">10 {__('(lowest)')}</option>\
            </select>\
        </div>\
    </div>\
    <hr>\
</div>\
