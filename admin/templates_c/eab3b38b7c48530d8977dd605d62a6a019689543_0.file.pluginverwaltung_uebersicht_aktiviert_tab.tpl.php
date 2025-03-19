<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:25:29
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_uebersicht_aktiviert_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33c99ab2a31_19658033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eab3b38b7c48530d8977dd605d62a6a019689543' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_uebersicht_aktiviert_tab.tpl',
      1 => 1738748465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/pluginverwaltung_uninstall_modal.tpl' => 1,
  ),
),false)) {
function content_67a33c99ab2a31_19658033 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="aktiviert" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'aktiviert') {?> active show<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['pluginsInstalled']->value->count() > 0) {?>
        <form name="pluginverwaltung" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" id="enabled-plugins">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <input type="hidden" name="pluginverwaltung_uebersicht" value="1" />
            <div>
                <div class="subheading1"><?php echo __('pluginListInstalled');?>
</div>
                <hr class="mb-3">
                <div class="table-responsive">
                    <table class="table table-striped table-align-top">
                        <thead>
                        <tr>
                            <th></th>
                            <th class="text-left"><?php echo __('pluginName');?>
</th>
                            <th class="text-center"><?php echo __('pluginVersion');?>
</th>
                            <th class="text-center"><?php echo __('pluginCompatibility');?>
</th>
                            <th class="text-center"><?php echo __('pluginInstalled');?>
</th>
                            <th><?php echo __('pluginFolder');?>
</th>
                            <th class="text-center"><?php echo __('pluginEditLocales');?>
</th>
                            <th class="text-center"><?php echo __('pluginEditLinkgrps');?>
</th>
                            <th class="text-center"><?php echo __('pluginBtnLicence');?>
</th>
                            <th class="text-center"><?php echo __('actions');?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pluginsInstalled']->value, 'plugin');
$_smarty_tpl->tpl_vars['plugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->do_else = false;
?>
                            <tr<?php if ($_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable()) {?> class="highlight"<?php }?>>
                                <td class="check">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="kPlugin[]" id="plugin-check-<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
" />
                                        <label class="custom-control-label" for="plugin-check-<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
"></label>
                                    </div>
                                </td>
                                <td>
                                    <label for="plugin-check-<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
"><?php echo $_smarty_tpl->tpl_vars['plugin']->value->getName();?>
</label>
                                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value->getMinShopVersion()->greaterThan($_smarty_tpl->tpl_vars['shopVersion']->value)) {?>
                                        <span title="<?php echo __('dangerMinShopVersion');?>
" class="label text-danger" data-toggle="tooltip">
                                            <span class="icon-hover">
                                                <span class="fal fa-exclamation-triangle"></span>
                                                <span class="fas fa-exclamation-triangle"></span>
                                            </span>
                                        </span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value->getMaxShopVersion()->greaterThan('0.0.0') && $_smarty_tpl->tpl_vars['plugin']->value->getMaxShopVersion()->smallerThan($_smarty_tpl->tpl_vars['shopVersion']->value)) {?>
                                        <span title="<?php echo __('dangerMaxShopVersion');?>
" class="label text-danger" data-toggle="tooltip">
                                            <span class="icon-hover">
                                                <span class="fal fa-exclamation-triangle"></span>
                                                <span class="fas fa-exclamation-triangle"></span>
                                            </span>
                                        </span>
                                    <?php }?>
                                </td>
                                <td class="text-center plugin-version">
                                    <?php echo (string)$_smarty_tpl->tpl_vars['plugin']->value->getVersion();
if ($_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable()) {?> <span class="badge update-available"><?php echo (string)$_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable();?>
</span><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value->isShop5Compatible() === false) {?>
                                        <span title="<?php echo __('dangerPluginNotCompatibleShop5');?>
" class="label text-warning"><i class="fal fa-exclamation-triangle"></i></span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value->isShop5Compatible() === false && $_smarty_tpl->tpl_vars['p']->value->isShop4Compatible() === false) {?>
                                        <span title="<?php echo __('dangerPluginNotCompatibleShop4');?>
" class="label text-warning"><i class="fal fa-exclamation-triangle"></i></span>
                                    <?php }?>
                                </td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['plugin']->value->displayVersionRange();?>
</td>
                                <td class="text-center plugin-install-date"><?php echo $_smarty_tpl->tpl_vars['plugin']->value->getDateInstalled()->format('d.m.Y H:i');?>
</td>
                                <td class="plugin-folder">
                                    <?php echo $_smarty_tpl->tpl_vars['plugin']->value->getDir();?>

                                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value->supportsHashCheck() === false) {?>
                                        <span title="<?php echo __('File check unsupported');?>
" class="label text-info" data-toggle="tooltip">
                                            <span class="fal fa-circle"></span>
                                        </span>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('modified', $_smarty_tpl->tpl_vars['plugin']->value->getModifiedFiles());?>
                                        <?php if (count($_smarty_tpl->tpl_vars['modified']->value) === 0) {?>
                                            <span title="<?php echo __('No modified files');?>
" class="label text-success" data-toggle="tooltip">
                                                <span class="fal fa-check-circle"></span>
                                            </span>
                                        <?php } else { ?>
                                            <span title="<?php echo __('Modified files:');?>
 <?php echo implode(', ',$_smarty_tpl->tpl_vars['modified']->value);?>
" class="label text-danger" data-toggle="tooltip">
                                                <span class="fal fa-times-circle"></span>
                                            </span>
                                        <?php }?>
                                    <?php }?>
                                </td>
                                <td class="text-center plugin-lang-vars">
                                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value->getLangVarCount() > 0) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?pluginverwaltung_uebersicht=1&sprachvariablen=1&kPlugin=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
&token=<?php echo $_SESSION['jtl_token'];?>
"
                                           class="btn btn-link"
                                           title="<?php echo __('modify');?>
"
                                           data-toggle="tooltip">
                                           <span class="icon-hover">
                                                <span class="fal fa-edit"></span>
                                                <span class="fas fa-edit"></span>
                                            </span>
                                        </a>
                                    <?php }?>
                                </td>
                                <td class="text-center plugin-frontend-links">
                                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value->getLinkCount() > 0) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/links?kPlugin=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
"
                                           class="btn btn-link"
                                           title="<?php echo __('modify');?>
"
                                           data-toggle="tooltip">
                                            <span class="icon-hover">
                                                <span class="fal fa-edit"></span>
                                                <span class="fas fa-edit"></span>
                                            </span>
                                        </a>
                                    <?php }?>
                                </td>
                                <td class="text-center plugin-license">
                                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value->hasLicenseCheck()) {?>
                                        <button name="lizenzkey" type="submit" title="<?php echo __('modify');?>
"
                                                class="btn btn-link" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
" data-toggle="tooltip">
                                            <span class="icon-hover">
                                                <span class="fal fa-edit"></span>
                                                <span class="fas fa-edit"></span>
                                            </span>
                                        </button>
                                    <?php }?>
                                </td>
                                <td class="text-center plugin-config">
                                    <?php $_smarty_tpl->_assignInScope('btnGroup', false);?>
                                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value->getOptionsCount() > 0 || $_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable()) {?>
                                        <?php $_smarty_tpl->_assignInScope('btnGroup', true);?>
                                    <?php }?>
                                    <div class="btn-group">
                                        <?php if ($_smarty_tpl->tpl_vars['plugin']->value->getOptionsCount() > 0) {?>
                                            <a class="btn btn-link px-1" href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/<?php echo JTL\Router\Route::PLUGIN;?>
/<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
" title="<?php echo __('settings');?>
" data-toggle="tooltip">
                                                <span class="icon-hover">
                                                    <span class="fal fa-cogs"></span>
                                                    <span class="fas fa-cogs"></span>
                                                </span>
                                            </a>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value->getLicenseMD() || $_smarty_tpl->tpl_vars['plugin']->value->getReadmeMD()) {?>
                                            <a class="btn btn-link px-1" href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/<?php echo JTL\Router\Route::PLUGIN;?>
/<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
" title="<?php echo __('docu');?>
" data-toggle="tooltip">
                                                <span class="icon-hover">
                                                    <span class="fal fa-copy"></span>
                                                    <span class="fas fa-copy"></span>
                                                </span>
                                            </a>
                                                                                    <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable()) {?>
                                            <a onclick="ackCheck(<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
);return false;" class="btn btn-link px-1" title="<?php echo __('pluginBtnUpdate');?>
" data-toggle="tooltip">
                                                <span class="icon-hover">
                                                    <span class="fal fa-refresh"></span>
                                                    <span class="fas fa-refresh"></span>
                                                </span>
                                            </a>
                                        <?php }?>
                                    </div>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer save-wrapper save">
                    <div class="row">
                        <div class="col-sm-6 col-xl-auto text-left">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS1" type="checkbox" onclick="AllMessages(this.form);" />
                                <label class="custom-control-label" for="ALLMSGS1"><?php echo __('selectAll');?>
</label>
                            </div>
                        </div>
                        <div class="ml-auto col-sm-6 col-xl-auto">
                            <button id="uninstall-enabled-plugin" name="deinstallieren" type="submit" class="btn btn-danger btn-block">
                                <i class="fas fa-trash-alt"></i> <?php echo __('pluginBtnDeInstall');?>

                            </button>
                        </div>
                        <div class="col-sm-6 col-xl-auto">
                            <button name="deaktivieren" type="submit" class="btn btn-warning btn-block">
                                <i class="fa fa-close"></i> <?php echo __('deactivate');?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php } else { ?>
        <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_uninstall_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('context'=>'enabled','selector'=>'#enabled-plugins','button'=>'#uninstall-enabled-plugin'), 0, false);
}
}
