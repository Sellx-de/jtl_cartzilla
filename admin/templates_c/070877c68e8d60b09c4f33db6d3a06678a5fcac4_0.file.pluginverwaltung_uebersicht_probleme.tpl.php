<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:25:29
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_uebersicht_probleme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33c99b24252_63174408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '070877c68e8d60b09c4f33db6d3a06678a5fcac4' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_uebersicht_probleme.tpl',
      1 => 1738748474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/pluginverwaltung_uninstall_modal.tpl' => 1,
  ),
),false)) {
function content_67a33c99b24252_63174408 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="probleme" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'probleme') {?> active show<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['pluginsProblematic']->value->count() > 0) {?>
    <form name="pluginverwaltung" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" id="problematic-plugins">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <input type="hidden" name="pluginverwaltung_uebersicht" value="1" />
        <div>
            <div class="subheading1"><?php echo __('pluginListProblems');?>
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
                        <th class="text-center"><?php echo __('pluginBtnLicence');?>
</th>
                        <th class="text-center">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pluginsProblematic']->value, 'plugin');
$_smarty_tpl->tpl_vars['plugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->do_else = false;
?>
                    <tr<?php if ($_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable()) {?> class="highlight"<?php }?>>
                        <td class="check">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="kPlugin[]" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
" id="plugin-problem-<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
" />
                                <label class="custom-control-label" for="plugin-problem-<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
"></label>
                            </div>
                        </td>
                        <td>
                            <label for="plugin-problem-<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
"><?php echo $_smarty_tpl->tpl_vars['plugin']->value->getName();?>
</label>
                            <?php if ($_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable()) {?>
                                <p><?php echo __('pluginUpdateExists');?>
</p>
                            <?php }?>
                        </td>
                        <td class="text-center">
                            <span class="label <?php if ($_smarty_tpl->tpl_vars['plugin']->value->getState() === JTL\Plugin\State::ACTIVATED) {?> text-success
                                    <?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value->getState() === JTL\Plugin\State::DISABLED) {?> text-warning
                                    <?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value->getState() === JTL\Plugin\State::ERRONEOUS || $_smarty_tpl->tpl_vars['plugin']->value->getState() === JTL\Plugin\State::LICENSE_KEY_INVALID) {?>} text-danger
                                    <?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value->getState() === JTL\Plugin\State::UPDATE_FAILED || $_smarty_tpl->tpl_vars['plugin']->value->getState() === JTL\Plugin\State::LICENSE_KEY_MISSING) {?> text-warning<?php }?>">
                                <?php echo __($_smarty_tpl->tpl_vars['mapper']->value->map($_smarty_tpl->tpl_vars['plugin']->value->getState()));?>

                            </span>
                        </td>
                        <td class="text-center"><?php echo (string)$_smarty_tpl->tpl_vars['plugin']->value->getVersion();
if ($_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable()) {?> <span class="error"><?php echo (string)$_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable();?>
</span><?php }?></td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['plugin']->value->getDateInstalled()->format('d.m.Y H:i');?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['plugin']->value->getDir();?>
</td>
                        <td class="text-center">
                            <?php if ($_smarty_tpl->tpl_vars['plugin']->value->hasLicenseCheck()) {?>
                                <?php if ($_smarty_tpl->tpl_vars['plugin']->value->getLicenseKey()) {?>
                                    <strong><?php echo __('pluginBtnLicence');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['plugin']->value->getLicenseKey();?>

                                    <button name="lizenzkey"
                                            type="submit"
                                            class="btn btn-link"
                                            value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
"
                                            title="<?php echo __('edit');?>
"
                                            data-toggle="tooltip">
                                        <span class="icon-hover">
                                            <span class="fal fa-edit"></span>
                                            <span class="fas fa-edit"></span>
                                        </span> <?php echo __('pluginBtnLicenceChange');?>

                                    </button>
                                <?php } else { ?>
                                    <button name="lizenzkey" type="submit" class="btn btn-link"
                                            value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
" title="<?php echo __('edit');?>
" data-toggle="tooltip">
                                        <span class="icon-hover">
                                            <span class="fal fa-edit"></span>
                                            <span class="fas fa-edit"></span>
                                        </span> <?php echo __('pluginBtnLicenceAdd');?>

                                    </button>
                                <?php }?>
                            <?php }?>
                        </td>
                        <td class="text-center">
                            <?php if ($_smarty_tpl->tpl_vars['plugin']->value->isUpdateAvailable()) {?>
                                <a onclick="ackCheck(<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getID();?>
, '#probleme'); return false;" class="btn btn-primary"><?php echo __('pluginBtnUpdate');?>
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
                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS3" type="checkbox" onclick="AllMessages(this.form);" />
                            <label class="custom-control-label" for="ALLMSGS3"><?php echo __('selectAll');?>
</label>
                        </div>
                    </div>
                    <div class="ml-auto col-sm-6 col-xl-auto">
                        <button name="deinstallieren" id="uninstall-problematic-plugin" type="submit" class="btn btn-danger btn-block">
                            <i class="fas fa-trash-alt"></i> <?php echo __('pluginBtnDeInstall');?>

                        </button>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <button name="deaktivieren" type="submit" class="btn btn-warning btn-block">
                            <?php echo __('deactivate');?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_uninstall_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('context'=>'problematic','selector'=>'#problematic-plugins','button'=>'#uninstall-problematic-plugin'), 0, false);
?>
    <?php } else { ?>
        <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
    <?php }?>
</div>
<?php }
}
