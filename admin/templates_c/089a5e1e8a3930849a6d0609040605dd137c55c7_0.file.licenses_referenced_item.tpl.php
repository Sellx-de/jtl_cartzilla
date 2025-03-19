<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:00:47
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/licenses_referenced_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab1fcf5e2b59_01305293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '089a5e1e8a3930849a6d0609040605dd137c55c7' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/licenses_referenced_item.tpl',
      1 => 1738748466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab1fcf5e2b59_01305293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('referencedItem', $_smarty_tpl->tpl_vars['license']->value->getReferencedItem());?>
<div id="license-item-<?php echo $_smarty_tpl->tpl_vars['license']->value->getID();?>
-<?php echo $_smarty_tpl->tpl_vars['license']->value->getLicense()->getType();?>
">
    <?php if ($_smarty_tpl->tpl_vars['license']->value->isInApp()) {?>
        <?php $_smarty_tpl->_assignInScope('avail', $_smarty_tpl->tpl_vars['license']->value->getReleases()->getAvailable());?>
        <?php if ($_smarty_tpl->tpl_vars['avail']->value !== null) {?>
            <span class="item-available badge badge-info">
                <?php echo __('Version %s available',$_smarty_tpl->tpl_vars['avail']->value->getVersion());?>

            </span>
        <?php }?>
        <p class="mb-0 mt-2"><?php echo sprintf(__('Managed by %s'),$_smarty_tpl->tpl_vars['license']->value->getParent()->getName());?>
</p>
    <?php } elseif ($_smarty_tpl->tpl_vars['referencedItem']->value !== null) {?>
        <?php $_smarty_tpl->_assignInScope('licData', $_smarty_tpl->tpl_vars['license']->value->getLicense());?>
        <?php $_smarty_tpl->_assignInScope('subscription', $_smarty_tpl->tpl_vars['licData']->value->getSubscription());?>
        <?php $_smarty_tpl->_assignInScope('disabled', $_smarty_tpl->tpl_vars['licData']->value->isExpired() || ($_smarty_tpl->tpl_vars['subscription']->value->isExpired() && !$_smarty_tpl->tpl_vars['subscription']->value->canBeUsed()) || (!$_smarty_tpl->tpl_vars['referencedItem']->value->isFilesMissing() && !$_smarty_tpl->tpl_vars['referencedItem']->value->canBeUpdated()));?>
        <?php $_smarty_tpl->_assignInScope('avail', $_smarty_tpl->tpl_vars['license']->value->getReleases()->getAvailable());?>
        <?php if ((isset($_smarty_tpl->tpl_vars['licenseErrorMessage']->value))) {?>
            <div class="alert alert-danger">
                <?php echo __($_smarty_tpl->tpl_vars['licenseErrorMessage']->value);?>

            </div>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('installedVersion', $_smarty_tpl->tpl_vars['referencedItem']->value->getInstalledVersion());?>
        <?php if ($_smarty_tpl->tpl_vars['installedVersion']->value === null || $_smarty_tpl->tpl_vars['referencedItem']->value->isFilesMissing()) {?>
            <?php if ($_smarty_tpl->tpl_vars['avail']->value === null) {?>
                <?php $_smarty_tpl->_assignInScope('disabled', true);?>
                <i class="far fa-circle"></i> <span class="badge badge-danger"><?php echo __('No version available');?>
</span>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['avail']->value->getPhpVersionOK() === JTL\License\Struct\Release::PHP_VERSION_LOW) {?>
                    <?php $_smarty_tpl->_assignInScope('disabled', true);?>
                    <span class="badge badge-danger"><?php echo __('PHP version too low');?>
</span><br>
                <?php } elseif ($_smarty_tpl->tpl_vars['avail']->value->getPhpVersionOK() === JTL\License\Struct\Release::PHP_VERSION_HIGH) {?>
                    <?php $_smarty_tpl->_assignInScope('disabled', true);?>
                    <span class="badge badge-danger"><?php echo __('PHP version too high');?>
</span><br>
                <?php }?>
                <i class="far fa-circle"></i> <span class="item-available badge badge-info">
                    <?php echo __('Version %s available',$_smarty_tpl->tpl_vars['avail']->value->getVersion());?>

                </span>
            <?php }?>
            <?php ob_start();
if (!$_smarty_tpl->tpl_vars['disabled']->value) {
echo " install-item-form";
}
$_prefixVariable1=ob_get_clean();
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('method'=>"post",'class'=>"mt-2".$_prefixVariable1));
$_block_repeat=true;
echo $_block_plugin1->render(array('method'=>"post",'class'=>"mt-2".$_prefixVariable1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['referencedItem']->value->isFilesMissing()) {?>
                    <input type="hidden" name="exs-id" value="<?php echo $_smarty_tpl->tpl_vars['license']->value->getExsID();?>
">
                    <input type="hidden" name="action" value="update">
                <?php } else { ?>
                    <input type="hidden" name="action" value="install">
                <?php }?>
                <input type="hidden" name="item-type" value="<?php echo $_smarty_tpl->tpl_vars['license']->value->getType();?>
">
                <input type="hidden" name="item-id" value="<?php echo $_smarty_tpl->tpl_vars['license']->value->getID();?>
">
                <input type="hidden" name="license-type" value="<?php echo $_smarty_tpl->tpl_vars['license']->value->getLicense()->getType();?>
">
                <div class="btn-group">
                    <button<?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?> disabled<?php }?> class="btn btn-default btn-sm install-item" name="action" value="install">
                        <i class="fa fa-share"></i> <?php echo __('Install');?>

                    </button>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['license']->value->getLinks(), 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['link']->value->getRel() === 'itemDetails') {?>
                            <a class="btn btn-default btn-sm" target="_blank" rel="noopener" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getHref();?>
#tab-changelog">
                                <i class="fas fa-bullhorn"></i> <?php echo __('Changelog');?>

                            </a>
                            <?php break 1;?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php $_block_repeat=false;
echo $_block_plugin1->render(array('method'=>"post",'class'=>"mt-2".$_prefixVariable1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php } else { ?>
            <i class="far fa-check-circle"></i> <?php echo $_smarty_tpl->tpl_vars['installedVersion']->value;
if ($_smarty_tpl->tpl_vars['referencedItem']->value->isActive() === false) {?> <?php echo __('(disabled)');
}?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['referencedItem']->value->hasUpdate()) {?>
            <span class="update-available badge badge-success">
                <?php echo __('Update to version %s available',$_smarty_tpl->tpl_vars['referencedItem']->value->getMaxInstallableVersion());?>

            </span>
            <?php if ($_smarty_tpl->tpl_vars['referencedItem']->value->canBeUpdated() === false) {?>
                <?php if ($_smarty_tpl->tpl_vars['avail']->value !== null && $_smarty_tpl->tpl_vars['avail']->value->getPhpVersionOK() === JTL\License\Struct\Release::PHP_VERSION_LOW) {?>
                    <span class="badge badge-danger"><?php echo __('PHP version too low');?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['avail']->value !== null && $_smarty_tpl->tpl_vars['avail']->value->getPhpVersionOK() === JTL\License\Struct\Release::PHP_VERSION_HIGH) {?>
                    <span class="badge badge-danger"><?php echo __('PHP version too high');?>
</span>
                <?php }?>
                <?php if (($_smarty_tpl->tpl_vars['licData']->value->isExpired() || $_smarty_tpl->tpl_vars['subscription']->value->isExpired()) && !$_smarty_tpl->tpl_vars['referencedItem']->value->isReleaseAvailable()) {?>
                    <span class="badge badge-danger"><?php echo __('License expired');?>
</span>
                <?php } elseif (!$_smarty_tpl->tpl_vars['referencedItem']->value->isShopVersionOK()) {?>
                    <span class="badge badge-danger"><?php echo __('Shop version not compatible');?>
</span>
                <?php }?>
            <?php }?>
            <?php ob_start();
if (!$_smarty_tpl->tpl_vars['disabled']->value) {
echo " update-item-form";
}
$_prefixVariable2=ob_get_clean();
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('method'=>"post",'class'=>"mt-2".$_prefixVariable2));
$_block_repeat=true;
echo $_block_plugin2->render(array('method'=>"post",'class'=>"mt-2".$_prefixVariable2), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="item-type" value="<?php echo $_smarty_tpl->tpl_vars['license']->value->getType();?>
">
                <input type="hidden" name="license-type" value="<?php echo $_smarty_tpl->tpl_vars['license']->value->getLicense()->getType();?>
">
                <input type="hidden" name="item-id" value="<?php echo $_smarty_tpl->tpl_vars['license']->value->getID();?>
">
                <input type="hidden" name="exs-id" value="<?php echo $_smarty_tpl->tpl_vars['license']->value->getExsID();?>
">
                <div class="btn-group">
                    <button<?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?> disabled<?php }?> class="btn btn-default btn-sm update-item" name="action" value="update">
                        <i class="fas fa-refresh"></i> <?php echo __('Update');?>

                    </button>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['license']->value->getLinks(), 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['link']->value->getRel() === 'itemDetails') {?>
                            <a class="btn btn-default btn-sm" target="_blank" rel="noopener" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getHref();?>
#tab-changelog">
                                <i class="fas fa-bullhorn"></i> <?php echo __('Changelog');?>

                            </a>
                            <?php break 1;?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php $_block_repeat=false;
echo $_block_plugin2->render(array('method'=>"post",'class'=>"mt-2".$_prefixVariable2), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php } else { ?>
        <i class="far fa-circle"></i>
    <?php }?>
</div>
<?php }
}
