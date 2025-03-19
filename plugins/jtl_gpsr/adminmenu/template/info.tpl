<div class="subheading1">{__('JTL GPSR - Angaben zur Produktsicherheit')}</div>
<hr>
<p>{__('Beschreibung der Angaben zur Produktsicherheit')}</p>
<form name="presentations" method="post" action="{$adminURL}{$route}" enctype="multipart/form-data">
    {$jtl_token}
    <input type="hidden" name="kPlugin" value="{$kPlugin}">
    <input type="hidden" name="kPluginAdminMenu" value="{$kPluginAdminMenu}">
    <div class="save-wrapper">
        <div class="row">
            <div class="ml-auto col-sm-6 col-xl-auto">
                <button type="submit" name="task" value="resetAllSettings" class="btn btn-danger btn-block btn-reset-all">
                    <i class="fas fa-refresh"></i> {__('reset')}
                </button>
            </div>
        </div>
    </div>
</form>
