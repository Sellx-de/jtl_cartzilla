<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:25:29
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_uebersicht_fehlerhaft.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33c99ba18c7_31759902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0600484c584a8cb638d4186e3cf14d34736dac6' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_uebersicht_fehlerhaft.tpl',
      1 => 1738748470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/pluginverwaltung_delete_modal.tpl' => 1,
  ),
),false)) {
function content_67a33c99ba18c7_31759902 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="fehlerhaft" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'fehlerhaft') {?> active show<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['pluginsErroneous']->value->count() > 0) {?>
        <form name="pluginverwaltung" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" id="erroneous-plugins">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <input type="hidden" name="pluginverwaltung_uebersicht" value="1" />
            <div>
                <div class="subheading1"><?php echo __('pluginListNotInstalledAndError');?>
</div>
                <hr class="mb-3">
                <div class="table-responsive">
                    <table class="table table-striped table-align-top">
                        <thead>
                        <tr>
                            <th></th>
                            <th class="text-left"><?php echo __('pluginName');?>
</th>
                            <th class="text-center"><?php echo __('pluginErrorCode');?>
</th>
                            <th class="text-center"><?php echo __('pluginVersion');?>
</th>
                            <th class="text-center"><?php echo __('pluginCompatibility');?>
</th>
                            <th><?php echo __('pluginFolder');?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pluginsErroneous']->value, 'listingItem');
$_smarty_tpl->tpl_vars['listingItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['listingItem']->value) {
$_smarty_tpl->tpl_vars['listingItem']->do_else = false;
?>
                            <tr>
                                <td class="check">
                                    <div class="custom-control custom-checkbox">
                                        <input type="hidden" id="plugin-ext-<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();?>
" name="isExtension[]" value="<?php if ($_smarty_tpl->tpl_vars['listingItem']->value->isLegacy()) {?>0<?php } else { ?>1<?php }?>">
                                        <input type="hidden" name="kPlugin[]" value="<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getID();?>
">
                                        <input class="custom-control-input" type="checkbox" name="cVerzeichnis[]" id="plugin-err-check-<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();?>
" value="<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();?>
" />
                                        <label class="custom-control-label" for="plugin-err-check-<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();?>
"></label>
                                    </div>
                                </td>
                                <td>
                                    <label for="plugin-err-check-<?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDir();?>
"><?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getName();?>
</label>
                                    <p><small><?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getDescription();?>
</small></p>
                                </td>
                                <td class="text-center">
                                    <p>
                                        <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getErrorCode();?>
</span>
                                        <?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getErrorMessage();?>

                                    </p>
                                </td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['listingItem']->value->getVersion();?>
</td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['listingItem']->value->displayVersionRange();?>
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
                                <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS5" type="checkbox" onclick="AllMessagesExcept(this.form, []);" />
                                <label class="custom-control-label" for="ALLMSGS5"><?php echo __('selectAll');?>
</label>
                            </div>
                        </div>
                        <div class="ml-auto col-sm-6 col-xl-auto">
                            <button name="deinstallieren" id="uninstall-erroneous-plugin" type="submit" class="btn btn-danger btn-block">
                                <i class="fas fa-trash-alt"></i> <?php echo __('pluginBtnDelete');?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_delete_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('context'=>'erroneous','selector'=>'#erroneous-plugins','button'=>'#uninstall-erroneous-plugin'), 0, false);
?>
    <?php } else { ?>
        <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
    <?php }?>
</div>
<?php }
}
