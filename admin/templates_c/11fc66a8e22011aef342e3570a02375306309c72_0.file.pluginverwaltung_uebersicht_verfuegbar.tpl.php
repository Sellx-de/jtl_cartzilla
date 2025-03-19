<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:25:29
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_uebersicht_verfuegbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33c99b60660_19428410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11fc66a8e22011aef342e3570a02375306309c72' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_uebersicht_verfuegbar.tpl',
      1 => 1738748473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/pluginverwaltung_delete_modal.tpl' => 1,
  ),
),false)) {
function content_67a33c99b60660_19428410 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="verfuegbar" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'verfuegbar') {?> active show<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['pluginsAvailable']->value->count() > 0) {?>
        <form name="pluginverwaltung" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" id="available-plugins">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <input type="hidden" name="pluginverwaltung_uebersicht" value="1" />
            <div>
                <div class="subheading1"><?php echo __('pluginListNotInstalled');?>
</div>
                <hr class="mb-3">
                <div class="table-responsive">
                    <!-- license-modal definition -->
                    <div id="licenseModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title"><?php echo __('licensePlugin');?>
</h2>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <i class="fal fa-times"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                                                    </div>
                                <div class="modal-footer">
                                    <div class="row">
                                        <div class="ml-auto col-sm-6 col-xl-auto">
                                            <button type="button" class="btn btn-outline-primary" name="cancel" data-dismiss="modal">
                                                <i class="fa fa-close"></i>&nbsp;<?php echo __('Cancel');?>

                                            </button>
                                        </div>
                                        <div class="col-sm-6 col-xl-auto">
                                            <button type="button" class="btn btn-primary" name="ok" data-dismiss="modal">
                                                <i class="fal fa-check text-success"></i>&nbsp;<?php echo __('ok');?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-striped table-align-top">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="text-left"><?php echo __('pluginName');?>
</th>
                                <th class="text-center"><?php echo __('pluginCompatibility');?>
</th>
                                <th class="text-center"><?php echo __('pluginVersion');?>
</th>
                                <th><?php echo __('pluginFolder');?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pluginsAvailable']->value, 'listingItem');
$_smarty_tpl->tpl_vars['listingItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['listingItem']->value) {
$_smarty_tpl->tpl_vars['listingItem']->do_else = false;
?>
                            <tr class="plugin">
                                <td class="check">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" id="plugin-ext-<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();?>
" name="isExtension[]" value="<?php if ($_smarty_tpl->tpl_vars['listingItem']->value->isLegacy()) {?>0<?php } else { ?>1<?php }?>">
                                        <input class="custom-control-input plugin-license-check" type="checkbox" name="cVerzeichnis[]" id="plugin-check-<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();?>
" value="<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();?>
" />
                                        <label class="custom-control-label" for="plugin-check-<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();?>
"></label>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['listingItem']->value->isShop5Compatible() === false) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['listingItem']->value->isShop4Compatible() === false) {?>
                                            <span title="<?php echo __('dangerPluginNotCompatibleShop4');?>
" class="label text-danger" data-toggle="tooltip">
                                                <span class="icon-hover">
                                                    <span class="fal fa-exclamation-triangle"></span>
                                                    <span class="fas fa-exclamation-triangle"></span>
                                                </span>
                                            </span>
                                        <?php } else { ?>
                                            <span title="<?php echo __('dangerPluginNotCompatibleShop5');?>
" class="label text-warning" data-toggle="tooltip">
                                                <span class="icon-hover">
                                                    <span class="fal fa-exclamation-triangle"></span>
                                                    <span class="fas fa-exclamation-triangle"></span>
                                                </span>
                                            </span>
                                        <?php }?>
                                    <?php }?>
                                </td>
                                <td>
                                    <label for="plugin-check-<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();?>
"><?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getName();?>
</label>
                                    <p><small><?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDescription();?>
</small></p>
                                    <?php if ($_smarty_tpl->tpl_vars['listingItem']->value->isShop4Compatible() === false && $_smarty_tpl->tpl_vars['listingItem']->value->isShop5Compatible() === false) {?>
                                        <div class="alert alert-info"><?php echo __('dangerPluginNotCompatibleShop4');?>
</div>
                                    <?php }?>
                                </td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['listingItem']->value->displayVersionRange();?>
</td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getVersion();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer save-wrapper">
                    <div class="row">
                        <div class="col-sm-6 col-xl-auto text-left">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS4" type="checkbox" onclick="AllMessagesExcept(this.form, vLicenses);" />
                                <label class="custom-control-label" for="ALLMSGS4"><?php echo __('selectAll');?>
</label>
                            </div>
                        </div>
                        <div class="ml-auto col-sm-6 col-xl-auto">
                            <button name="deinstallieren" id="uninstall-available-plugin" type="submit" class="btn btn-danger btn-block">
                                <i class="fas fa-trash-alt"></i> <?php echo __('pluginBtnDelete');?>

                            </button>
                        </div>
                        <div class="col-sm-6 col-xl-auto">
                            <button name="installieren" type="submit" class="btn btn-primary btn-block">
                                <i class="fa fa-share"></i> <?php echo __('pluginBtnInstall');?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_delete_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('context'=>'available','selector'=>'#available-plugins','button'=>'#uninstall-available-plugin'), 0, false);
?>
    <?php } else { ?>
        <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
    <?php }?>
</div>
<?php }
}
