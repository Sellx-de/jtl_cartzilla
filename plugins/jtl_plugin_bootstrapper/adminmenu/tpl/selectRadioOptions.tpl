{$idx = $idx|default:'###'}
<div class="control-group">\
    <a class="remove-group" href="#"><i class="fa fa-remove"></i></a>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="opt-name-{$idx}-#cnt#">{__('Name')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input id="opt-name-{$idx}-#cnt#" type="text" name="Install-Adminmenu-Settingslink-Setting-Options-Option-#counter#[]" class="form-control required" placeholder="{__('Option X')}">\
        </div>\
    </div>\
    <div class="form-group form-row align-items-center">\
        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="opt-val-{$idx}-#cnt#">{__('Value')}</label>\
        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">\
            <input id="opt-val-{$idx}-#cnt#" type="text" name="Install-Adminmenu-Settingslink-Setting-Options-Option-value-#counter#[]" class="form-control required" placeholder="42">\
        </div>\
    </div>\
</div>\
