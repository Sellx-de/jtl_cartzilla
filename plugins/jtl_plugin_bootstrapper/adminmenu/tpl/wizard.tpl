<script src="{$jsURL}" type="text/javascript"></script>

<style>
    .option-values-wrap{ldelim}padding-left:20px;{rdelim}
    #finish-root{ldelim}padding-top:20px;{rdelim}
</style>

{if !$permissionOK}
    <div class="alert alert-danger"><i class="fa fa-warning"></i> {__('No write permissions in plugins dir')}</div>
{else}
    <section id="load-plugin">
        <form id="loadPluginForm" method="post" action="" class="form-horizontal mb-3">
            {$jtl_token}
            <h3>{__('Load existing legacy plugin')}</h3>
            <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="pathLegacy">{__('Path (relative to includes/plugins/)')}</label>
                </div>
                <input type="text" name="pathLegacy" id="pathLegacy" class="form-control">
                <div class="input-group-append">
                    <button type="submit" name="loadLegacyPlugin" value="1" class="btn btn-default"><i class="fa fa-share"></i> {__('Load plugin')}</button>
                </div>
            </div>
            <hr>
            <h3>{__('Load existing plugin')}</h3>
            <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="path">{__('Path (relative to plugins/)')}</label>
                </div>
                <input type="text" name="path" id="path" class="form-control">
                <div class="input-group-append">
                    <button type="submit" name="loadPlugin" value="1" class="btn btn-default"><i class="fa fa-share"></i> {__('Load plugin')}</button>
                </div>
            </div>
            <hr>
            <h3>{__('Create plugin zip')}</h3>
            <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="pathZip">{__('Path (relative to plugins/)')}</label>
                </div>
                <input type="text" name="pathZip" id="pathZip" class="form-control">
                <div class="input-group-append">
                    <button type="submit" name="createZip" value="1" class="btn btn-default"><i class="fa fa-share"></i> {__('Create zip file')}</button>
                </div>
            </div>
       </form>
    </section>
    <hr>
    <section id="wizard">
        <div class="page-header">
            <h3>{__('Create new plugin')}</h3>
        </div>
        <form id="bootstrapForm" method="post" action="" class="form-horizontal">
            <input type="hidden" name="createPlugin" value="1">
            {$jtl_token}
            <div id="wizardRoot">
                <ul>
                    <li class="nav-item"><a class="nav-link" href="#tab1" data-toggle="tab">{__('General')}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">{__('Hooks')}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab">{__('Language variables')}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab4" data-toggle="tab">{__('Settings')}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab5" data-toggle="tab">{__('Frontend links')}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab6" data-toggle="tab">{__('Backend links')}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab7" data-toggle="tab">{__('JavaScript')}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab8" data-toggle="tab">{__('CSS')}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab9" data-toggle="tab">{__('Boxes')}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab10" data-toggle="tab">{__('Email templates')}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab11" data-toggle="tab">{__('Widgets')}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab12" data-toggle="tab">{__('Confirm')}</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="tab1">
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right order-1" for="Name">{__('Name')}</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input{if !empty($loadedPlugin->Name)} value="{$loadedPlugin->Name}"{/if} type="text" id="Name" name="Name" class="form-control required" placeholder="My Plugin">
                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right order-1" for="PluginID">{__('ID')}</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input{if !empty($loadedPlugin->PluginID)} value="{$loadedPlugin->PluginID}"{/if} type="text" id="PluginID" name="PluginID" class="form-control required" placeholder="mycompany_my_plugin">
                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right order-1" for="Description">{__('Description')}</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input{if !empty($loadedPlugin->Description)} value="{$loadedPlugin->Description}"{/if} type="text" id="Description" name="Description" class="form-control required" placeholder="Dieses Plugin macht gar nichts">
                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right order-1" for="Author">{__('Author')}</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input{if !empty($loadedPlugin->Author)} value="{$loadedPlugin->Author}"{/if} type="text" id="Author" name="Author" class="form-control required" placeholder="Manfred Mustermann">
                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right order-1" for="URL">{__('Homepage')}</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input{if !empty($loadedPlugin->URL)} value="{$loadedPlugin->URL}"{/if} type="text" id="URL" name="URL" class="form-control required" placeholder="https://www.example.org/">
                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right order-1" for="Icon">{__('Icon (has to be placed in plugin root dir)')}</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input{if !empty($loadedPlugin->Icon)} value="{$loadedPlugin->Icon}"{/if} type="text" id="Icon" name="Icon" class="form-control" placeholder="logo.png">
                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right order-1" for="FlushTags">{__('Cache tags to be invalidated on installation')}</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input{if !empty($loadedPlugin->FlushTags)} value="{$loadedPlugin->FlushTags}"{/if} type="text" id="FlushTags" name="FlushTags" class="form-control" placeholder="CACHING_GROUP_CATEGORY, CACHING_GROUP_ARTICLE">
                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right order-1" for="ShopVersion">{__('Minimum shop version')}</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input{if !empty($loadedPlugin->MinShopVersion)} value="{$loadedPlugin->MinShopVersion}" {/if} type="text" id="ShopVersion" name="ShopVersion" class="form-control required" placeholder="5.0.0">
                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right order-1" for="ShopVersion">{__('Maximum shop version')}</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input{if !empty($loadedPlugin->MaxShopVersion)} value="{$loadedPlugin->MaxShopVersion}" {/if} type="text" id="MaxShopVersion" name="MaxShopVersion" class="form-control" placeholder="5.1.0 (optional)">
                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right order-1" for="create-table">{__('Crete migrations for existing tables (multiple separated by colon):')}</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input{if !empty($loadedPlugin->tables)} value="{$loadedPlugin->tables}"{/if} type="text" id="create-table" name="create-table" class="form-control" placeholder="xplugin_table1, xplugin_table2 (Vorher erstellen!)">
                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right order-1" for="createModels">{__('Create models?')}</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input{if !empty($loadedPlugin->createModels)} checked{/if} type="checkbox" name="createModels" id="createModels">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <button class="btn btn-primary" type="button" id="add-hook">{__('Add hook')}</button>
                        <div id="hook-selector-root">
                            {if !empty($loadedPlugin->Hooks)}
                                {foreach $loadedPlugin->Hooks as $idx => $hook}
                                    {include file=$tplPath|cat:'hookSelector.tpl' hook=$hook assign='html' idx=$idx}
                                    {$html|replace:"\\\n":''}
                                {/foreach}
                                {assign var=hook value=null}
                            {/if}
                        </div>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <button class="btn btn-primary" type="button" id="add-lang-var">{__('Add language variable')}</button>
                        <div id="lang-var-root">
                            {if !empty($loadedPlugin->LangVars)}
                                {foreach $loadedPlugin->LangVars as $idx => $langVar}
                                    {include file=$tplPath|cat:'langVar.tpl' langVar=$langVar assign='html' idx=$idx}
                                    {$html|replace:"\\\n":''}
                                {/foreach}
                                {assign var=langVar value=null}
                            {/if}
                        </div>
                    </div>
                    <div class="tab-pane" id="tab4">
                        <button class="btn btn-primary" type="button" id="add-config">{__('Add setting')}</button>
                        <div id="config-root">
                            {if !empty($loadedPlugin->Settings[0]->Settings)}
                                {foreach $loadedPlugin->Settings[0]->Settings as $idx => $setting}
                                    <pre>{var_dump($setting)}</pre>
                                    {include file=$tplPath|cat:'config.tpl' setting=$setting assign='html' idx=$idx}
                                    {$html|replace:"\\\n":''}
                                {/foreach}
                                {assign var=setting value=null}
                            {/if}
                        </div>
                    </div>
                    <div class="tab-pane" id="tab5">
                        <button class="btn btn-primary" type="button" id="add-frontend-link">{__('Add frontend link')}</button>
                        <div id="frontend-link-root">
                            {if !empty($loadedPlugin->Frontendlinks)}
                                {foreach $loadedPlugin->Frontendlinks as $idx => $frontendLink}
                                    {include file=$tplPath|cat:'frontendLink.tpl' frontendLink=$frontendLink assign='html' idx=$idx}
                                    {$html|replace:"\\\n":''}
                                {/foreach}
                                {assign var=frontendLink value=null}
                            {/if}
                        </div>
                    </div>
                    <div class="tab-pane" id="tab6">
                        <button class="btn btn-primary" type="button" id="add-backend-link">{__('Add backend link')}</button>
                        <div id="backend-link-root">
                            {if !empty($loadedPlugin->CustomLinks)}
                                {foreach $loadedPlugin->CustomLinks as $idx => $customLink}
                                    {include file=$tplPath|cat:'backendLink.tpl' customLink=$customLink assign='html' idx=$idx}
                                    {$html|replace:"\\\n":''}
                                {/foreach}
                                {assign var=customLink value=null}
                            {/if}
                        </div>
                    </div>
                    <div class="tab-pane" id="tab7">
                        <button class="btn btn-primary" type="button" id="add-javascript">{__('Add JavaScript')}</button>
                        <div id="javascript-root">
                            {if !empty($loadedPlugin->Install->JS->file)}
                                {foreach $loadedPlugin->Install->JS->file as $idx => $jsFile}
                                    {include file=$tplPath|cat:'javascript.tpl' jsFile=$jsFile assign='html' idx=$idx}
                                    {$html|replace:"\\\n":''}
                                {/foreach}
                                {assign var=jsFile value=null}
                            {/if}
                        </div>
                    </div>
                    <div class="tab-pane" id="tab8">
                        <button class="btn btn-primary" type="button" id="add-css">{__('Add CSS')}</button>
                        <div id="css-root">
                            {if !empty($loadedPlugin->Install->CSS->file)}
                                {foreach $loadedPlugin->Install->CSS->file as $idx => $cssFile}
                                    {include file=$tplPath|cat:'css.tpl' cssFile=$cssFile assign='html' idx=$idx}
                                    {$html|replace:"\\\n":''}
                                {/foreach}
                                {assign var=cssFile value=null}
                            {/if}
                        </div>
                    </div>
                    <div class="tab-pane" id="tab9">
                        <button class="btn btn-primary" type="button" id="add-box">{__('Add box')}</button>
                        <div id="box-root">
                            {if !empty($loadedPlugin->Boxes)}
                                {foreach $loadedPlugin->Boxes as $idx => $box}
                                    {include file=$tplPath|cat:'box.tpl' box=$box assign='html' idx=$idx}
                                    {$html|replace:"\\\n":''}
                                {/foreach}
                                {assign var=box value=null}
                            {/if}
                        </div>
                    </div>
                    <div class="tab-pane" id="tab10">
                        <button class="btn btn-primary" type="button" id="add-mail-template">{__('Add email template')}</button>
                        <div id="mail-template-root">
                            {if !empty($loadedPlugin->Emailtemplates)}
                                {foreach $loadedPlugin->Emailtemplates as $idx => $tpl}
                                    {include file=$tplPath|cat:'mailTemplate.tpl' tpl=$tpl assign='html' idx=$idx}
                                    {$html|replace:"\\\n":''}
                                {/foreach}
                                {assign var=tpl value=null}
                            {/if}
                        </div>
                    </div>
                    <div class="tab-pane" id="tab11">
                        <button class="btn btn-primary" type="button" id="add-widget">{__('Add widget')}</button>
                        <div id="widget-root">
                            {if !empty($loadedPlugin->Widgets)}
                                {foreach $loadedPlugin->Widgets as $idx => $widget}
                                    {include file=$tplPath|cat:'widget.tpl' widget=$widget assign='html' idx=$idx}
                                    {$html|replace:"\\\n":''}
                                {/foreach}
                                {assign var=widget value=null}
                            {/if}
                        </div>
                    </div>
                    <div class="tab-pane" id="tab12">
                        <div id="finish-root"></div>
                    </div>
                    <hr>
                    <nav>
                    <ul class="pagination pager wizard">
                        <li class="page-item previous"><a class="page-link" href="#"><i class="fa fa-angle-left"></i> {__('back')}</a></li>
                        <li class="page-item next"><a class="page-link" href="#">{__('continue')} <i class="fa fa-angle-right"></i></a></li>
                        <li class="page-item next finish" style="display:none;"><a class="page-link" href="#" id="finish-bootstrap"><i class="fa fa-share"></i> {__('Create plugin')}</a></li>
                    </ul>
                    </nav>
                </div>
            </div>
        </form>
    </section>
    <script>
        $(document).ready(function() {ldelim}
            let optionCounter = 0;
            let lastItemID = 0;
            $('#wizardRoot').bootstrapWizard({ldelim}
                onTabShow: function(tab, navigation, index) {ldelim}
                    var total = navigation.find('li').length,
                        current = index + 1,
                        root = $('#wizardRoot');
                    if (current >= total) {ldelim}
                        root.find('.pager .next').hide();
                        root.find('.pager .finish').show();
                        root.find('.pager .finish').removeClass('disabled');
                    {rdelim} else {ldelim}
                        root.find('.pager .next').show();
                        root.find('.pager .finish').hide();
                    {rdelim}
                {rdelim},
                onNext: function(tab, navigation, index) {ldelim}
                    var cancel = false,
                        focusElement = null;
                    $('#tab' + index + ' input.required:visible').each(function (idx, elem) {ldelim}
                        if (elem.value === '') {ldelim}
                            focusElement = $(elem);
                            cancel = true;
                        {rdelim}
                    {rdelim});
                    if (cancel) {ldelim}
                        alert('Bitte alle Felder ausfüllen.');
                        focusElement.focus();
                        return false;
                    {rdelim}
                {rdelim}
            {rdelim});
            $('#add-hook').click(function () {ldelim}
                $('#hook-selector-root').append('{include file=$tplPath|cat:'hookSelector.tpl'}'.replaceAll('###', lastItemID));
                ++lastItemID;
            {rdelim});
            $('#add-lang-var').click(function () {ldelim}
                $('#lang-var-root').append('{include file=$tplPath|cat:'langVar.tpl'}'.replaceAll('###', lastItemID));
                ++lastItemID;
            {rdelim});
            $('#add-config').click(function () {ldelim}
                $('#config-root').append('{include file=$tplPath|cat:'config.tpl'}'.replaceAll('###', lastItemID));
                ++lastItemID;
            {rdelim});
            $('#add-frontend-link').click(function () {ldelim}
                $('#frontend-link-root').append('{include file=$tplPath|cat:'frontendLink.tpl'}'.replaceAll('###', lastItemID));
                ++lastItemID;
            {rdelim});
            $('#add-backend-link').click(function () {ldelim}
                $('#backend-link-root').append('{include file=$tplPath|cat:'backendLink.tpl'}'.replaceAll('###', lastItemID));
                ++lastItemID;
            {rdelim});
            $('#add-javascript').click(function () {ldelim}
                $('#javascript-root').append('{include file=$tplPath|cat:'javascript.tpl'}'.replaceAll('###', lastItemID));
                ++lastItemID;
            {rdelim});
            $('#add-css').click(function () {ldelim}
                $('#css-root').append('{include file=$tplPath|cat:'css.tpl'}'.replaceAll('###', lastItemID));
                ++lastItemID;
            {rdelim});
            $('#add-box').click(function () {ldelim}
                $('#box-root').append('{include file=$tplPath|cat:'box.tpl'}'.replaceAll('###', lastItemID));
                ++lastItemID;
            {rdelim});
            $('#add-mail-template').click(function () {ldelim}
                $('#mail-template-root').append('{include file=$tplPath|cat:'mailTemplate.tpl'}'.replaceAll('###', lastItemID));
                ++lastItemID;
            {rdelim});
            $('#add-widget').click(function () {ldelim}
                $('#widget-root').append('{include file=$tplPath|cat:'widget.tpl'}'.replaceAll('###', lastItemID));
                ++lastItemID;
            {rdelim});
            $('#tab4').on('change', '.config-dropdown', function () {ldelim}
                let elem = $(this),
                    val = elem.val();
                if (val === 'selectbox' || val === 'radio') {ldelim}
                    optionCounter++;
                    $('#cfg-selectboxoptions-' + elem.data('ref')).show();
                {rdelim} else {ldelim}
                    optionCounter--;
                    elem.parent().parent().find('.option-values-wrap .option-values').html('');
                {rdelim}
            {rdelim}).on('click', '.add-option-values', function () {ldelim}
                let tpl = '{include file=$tplPath|cat:'selectRadioOptions.tpl'}'
                    .replaceAll('###', lastItemID)
                    .replaceAll('#cnt#', optionCounter.toString());
                ++lastItemID;
                $(this).parent().find('.option-values').append(tpl.split('#counter#').join(optionCounter.toString()));
            {rdelim});
            $('.tab-pane').on('click', '.remove-group', function () {ldelim}
                $(this).parent('.control-group').remove();
                return false;
            {rdelim});

            $('#finish-bootstrap').click(function () {ldelim}
                $.ajax('{$postURL}', {ldelim}
                    data: $('#bootstrapForm').serialize(),
                    type: 'POST',
                    success: function(response){ldelim}
                        let html = '',
                            i,
                            tplSuccess = '{include file=$tplPath|cat:'success.tpl'}',
                            tplError = '{include file=$tplPath|cat:'error.tpl'}';
                        if (typeof response.success !== 'undefined' && typeof response.status !== 'undefined') {ldelim}
                            if (response.success === true) {ldelim}
                                html = tplSuccess.replace('#PLUGIN#', response.status.plugin).replace('#PLUGINDIR#', response.status.plugindir);
                            {rdelim} else {ldelim}
                                for (i = 0; i < response.status.errors.length; i++) {ldelim}
                                    html += tplError.replace('#ERROR#', response.status.errors[i]);
                                {rdelim}
                            {rdelim}
                        {rdelim} else {ldelim}
                            html = tplError.replace('#ERROR#', 'Keine Antwort via Ajax erhalten.');
                        {rdelim}
                        $('#finish-root').html(html);
                    {rdelim}
                {rdelim});
            {rdelim});
        {rdelim});
    </script>
{/if}
