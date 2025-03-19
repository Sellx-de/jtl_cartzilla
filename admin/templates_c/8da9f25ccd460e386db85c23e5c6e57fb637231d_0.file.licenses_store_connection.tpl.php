<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:00:41
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/licenses_store_connection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab1fc9dedfb4_35379824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8da9f25ccd460e386db85c23e5c6e57fb637231d' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/licenses_store_connection.tpl',
      1 => 1738748468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab1fc9dedfb4_35379824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/includes/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div>
    <div class="card">
        <?php if ((isset($_smarty_tpl->tpl_vars['setToken']->value)) && $_smarty_tpl->tpl_vars['setToken']->value === true) {?>
            <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array());
$_block_repeat=true;
echo $_block_plugin1->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <input type="hidden" name="action" value="savetoken">
                <div class="card-header">
                    <div class="heading-body">
                        <?php echo __('Enter token');?>

                    </div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <div class="sub-heading">Token</div>
                    <textarea class="form-control" name="token"></textarea>
                    <div class="sub-heading">Code</div>
                    <input type="text" class="form-control" name="code" />
                </div>
                <div class="save-wrapper">
                    <button class="btn btn-primary"><i class="fa fa-save"></i> <?php echo __('save');?>
</button>
                </div>
            <?php $_block_repeat=false;
echo $_block_plugin1->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php } else { ?>
            <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array());
$_block_repeat=true;
echo $_block_plugin2->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="card-header">
                    <div class="heading-body">
                        <?php echo __('Overview');?>

                    </div>
                    <div class="heading-right">
                        <?php if ($_smarty_tpl->tpl_vars['hasAuth']->value) {?>
                            <button name="action" value="revoke" class="btn btn-default">
                                <?php $_smarty_tpl->_assignInScope('accountName', (($tmp = $_smarty_tpl->tpl_vars['tokenOwner']->value->email ?? null)===null||$tmp==='' ? ((($_smarty_tpl->tpl_vars['tokenOwner']->value->given_name).(' ')).($_smarty_tpl->tpl_vars['tokenOwner']->value->family_name)) : $tmp));?>
                                <i class="fas fa-unlink"></i> <?php if ($_smarty_tpl->tpl_vars['tokenOwner']->value !== null) {?> <?php echo sprintf(__('unlink from %s'),$_smarty_tpl->tpl_vars['accountName']->value);?>

                                    <?php } else { ?> <?php echo __('unlink');
}?>
                            </button>
                        <?php }?>
                    </div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php if ($_smarty_tpl->tpl_vars['hasAuth']->value) {?>
                            <div class="col-md-4 border-right">
                                <div class="text-center">
                                    <h2><?php echo $_smarty_tpl->tpl_vars['licenseItemUpdates']->value->count();?>
</h2>
                                    <p><?php echo __('updates available');?>
</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-right">
                                <div class="text-center">
                                    <h2><?php echo $_smarty_tpl->tpl_vars['licenses']->value->count();?>
</h2>
                                    <p><?php echo __('Licensed items');?>
</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <h2><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['lastUpdate']->value,"d.m.Y H:i:s");?>
</h2>
                                    <p><?php echo __('last update');?>
</p>
                                    <button class="btn btn-default btn-block" id="recheck" name="action" value="recheck">
                                        <i class="fas fa-refresh"></i> <?php echo __('Refresh');?>

                                    </button>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="col-12">
                                <div class="alert alert-default" role="alert"><?php echo __('storeNotLinkedDesc');?>
</div>
                            </div>
                            <div class="col-sm-6 col-xl-auto mb-2">
                                <button name="action" value="redirect" class="btn btn-primary btn-block">
                                    <i class="fas fa-link"></i> <?php echo __('storeLink');?>

                                </button>
                            </div>
                            <div class="col-sm-6 col-xl-auto mb-2">
                                <button name="action" value="entertoken" class="btn btn-secondary btn-block">
                                    <?php echo __('Manually enter token');?>

                                </button>
                            </div>
                            <div class="col-sm-6 col-xl-auto ml-auto mb-2">
                                <a href="<?php echo __('extensionStoreURL');?>
" class="btn btn-outline-primary btn-block ml-auto" target="_blank">
                                    <?php echo __('btnExploreExtensionStore');?>

                                </a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php $_block_repeat=false;
echo $_block_plugin2->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    </div>
</div>
<?php }
}
