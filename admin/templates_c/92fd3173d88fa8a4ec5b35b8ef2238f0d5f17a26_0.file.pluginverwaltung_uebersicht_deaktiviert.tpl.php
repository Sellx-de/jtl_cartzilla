<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:25:29
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_uebersicht_deaktiviert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33c99afc3c1_16604873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92fd3173d88fa8a4ec5b35b8ef2238f0d5f17a26' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_uebersicht_deaktiviert.tpl',
      1 => 1738748470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/pluginverwaltung_uninstall_modal.tpl' => 1,
  ),
),false)) {
function content_67a33c99afc3c1_16604873 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="deaktiviert" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'deaktiviert') {?> active show<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['pluginsDisabled']->value->count() > 0) {?>
        <form name="pluginverwaltung" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" id="disbled-plugins">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <input type="hidden" name="pluginverwaltung_uebersicht" value="1" />
            <div>
                <div class="subheading1"><?php echo __('pluginListNotActivated');?>
</div>
                <hr class="mb-3">
                <div class="table-responsive">
                    <table class="table table-striped table-align-top">
                        <thead>
                        <tr>
                            <th></th>
                            <th class="text-left"><?php echo __('pluginName');?>
</th>
                            <th class="text-center"><?php echo __('status');?>
</th>
                            <th class="text-center"><?php echo __('pluginVersion');?>
</th>
                            <th class="text-center"><?php echo __('pluginInstalled');?>
</th>
                            <th><?php echo __('pluginFolder');?>
</th>
                            <th class="text-center">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pluginsDisabled']->value, 'plugin');
$_smarty_tpl->tpl_vars['plugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->do_else = false;
?>
                            <tr <?php if ($_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable()) {?>class="highlight"<?php }?>>
                                <td class="check">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="kPlugin[]" id="plugin-check-<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
" />
                                        <label class="custom-control-label" for="plugin-check-<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
"></label>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value->isShop5Compatible() === false) {?>
                                        <span title="<?php echo __('dangerPluginNotCompatibleShop5');?>
" class="label text-warning" data-toggle="tooltip">
                                            <span class="icon-hover">
                                                <span class="fal fa-exclamation-triangle"></span>
                                                <span class="fas fa-exclamation-triangle"></span>
                                            </span>
                                        </span>
                                    <?php }?>
                                </td>
                                <td>
                                    <label for="plugin-check-<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
"><?php echo $_smarty_tpl->tpl_vars['plugin']->value->getName();?>
</label>
                                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable()) {?>
                                        <p><?php echo __('pluginUpdateExists');?>
</p>
                                    <?php }?>
                                </td>
                                <td class="text-center plugin-status">
                                    <span class="text-nowrap">
                                        <span class="label <?php if ($_smarty_tpl->tpl_vars['plugin']->value->getState() === JTL\Plugin\State::ACTIVATED) {?> text-success
                                                <?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value->getState() === JTL\Plugin\State::DISABLED) {?> text-warning
                                                <?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value->getState() === JTL\Plugin\State::ERRONEOUS || $_smarty_tpl->tpl_vars['plugin']->value->getState() === JTL\Plugin\State::LICENSE_KEY_INVALID) {?>} text-danger
                                                <?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value->getState() === JTL\Plugin\State::UPDATE_FAILED || $_smarty_tpl->tpl_vars['plugin']->value->getState() === JTL\Plugin\State::LICENSE_KEY_MISSING) {?> text-warning<?php }?>">
                                            <?php echo $_smarty_tpl->tpl_vars['mapper']->value->map($_smarty_tpl->tpl_vars['plugin']->value->getState());?>

                                        </span>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPluginItems']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['p']->value->getID() === $_smarty_tpl->tpl_vars['plugin']->value->getPluginID()) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['p']->value->isShop5Compatible() === false) {?>
                                                    <span title="<?php echo __('dangerPluginNotCompatibleShop5');?>
" class="label text-warning"><i class="fal fa-exclamation-triangle"></i></span>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['p']->value->isShop5Compatible() === false && $_smarty_tpl->tpl_vars['p']->value->isShop4Compatible() === false) {?>
                                                    <span title="<?php echo __('dangerPluginNotCompatibleShop4');?>
" class="label text-warning"><i class="fal fa-exclamation-triangle"></i></span>
                                                <?php }?>
                                                <?php break 1;?>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </span>
                                </td>
                                <td class="text-center plugin-version"><?php echo (string)$_smarty_tpl->tpl_vars['plugin']->value->getVersion();
if ($_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable()) {?> <span class="label text-success update-info"><?php echo (string)$_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable();?>
</span><?php }?></td>
                                <td class="text-center plugin-install-date"><?php echo $_smarty_tpl->tpl_vars['plugin']->value->getDateInstalled()->format('d.m.Y H:i');?>
</td>
                                <td class="plugin-folder"><?php echo $_smarty_tpl->tpl_vars['plugin']->value->getDir();?>
</td>
                                <td class="text-center">
                                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable()) {?>
                                        <a onclick="ackCheck(<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
, 'deaktiviert'); return false;"
                                           class="btn btn-link"
                                           title="<?php echo __('pluginBtnUpdate');?>
"
                                           data-toggle="tooltip">
                                            <span class="icon-hover">
                                                <span class="fal fa-refresh"></span>
                                                <span class="fas fa-refresh"></span>
                                            </span>
                                        </a>
                                    <?php }?>
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
                                <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS2" type="checkbox" onclick="AllMessages(this.form);" />
                                <label class="custom-control-label" for="ALLMSGS2"><?php echo __('selectAll');?>
</label>
                            </div>
                        </div>
                        <div class="ml-auto col-sm-6 col-xl-auto">
                            <button name="deinstallieren" id="uninstall-disabled-plugin" type="submit" class="btn btn-danger btn-block">
                                <i class="fas fa-trash-alt"></i> <?php echo __('pluginBtnDeInstall');?>

                            </button>
                        </div>
                        <div class="col-sm-6 col-xl-auto">
                            <button name="aktivieren" type="submit" class="btn btn-primary btn-block">
                                <i class="fa fa-share"></i> <?php echo __('activate');?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_uninstall_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('context'=>'disabled','selector'=>'#disbled-plugins','button'=>'#uninstall-disabled-plugin'), 0, false);
?>
    <?php } else { ?>
        <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
    <?php }?>
</div>
<?php }
}
