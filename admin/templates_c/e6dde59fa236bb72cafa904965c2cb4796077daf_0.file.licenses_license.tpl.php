<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:00:47
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/licenses_license.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab1fcf6213f9_99470254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6dde59fa236bb72cafa904965c2cb4796077daf' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/licenses_license.tpl',
      1 => 1738748470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab1fcf6213f9_99470254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('licData', $_smarty_tpl->tpl_vars['license']->value->getLicense());
$_smarty_tpl->_assignInScope('subscription', $_smarty_tpl->tpl_vars['licData']->value->getSubscription());
if ($_smarty_tpl->tpl_vars['subscription']->value->isExpired() && $_smarty_tpl->tpl_vars['subscription']->value->getValidUntil() !== null) {?>
    <span class="badge badge-danger">
        <?php echo __('Subscription expired on %s',$_smarty_tpl->tpl_vars['subscription']->value->getValidUntil()->format('d.m.Y'));?>

    </span>
<?php } elseif ($_smarty_tpl->tpl_vars['licData']->value->isExpired()) {?>
    <span class="badge badge-danger"><?php echo __('License expired on %s',$_smarty_tpl->tpl_vars['licData']->value->getValidUntil()->format('d.m.Y'));?>
</span>
<?php } elseif ($_smarty_tpl->tpl_vars['subscription']->value->isExpired() === false && $_smarty_tpl->tpl_vars['subscription']->value->getValidUntil() !== null) {?>
    <?php if ($_smarty_tpl->tpl_vars['subscription']->value->getDaysRemaining() < 28) {?>
        <span class="badge badge-warning">
            <?php if ($_smarty_tpl->tpl_vars['licData']->value->getType() === 'test') {?>
                <?php echo __('Warning: License only valid until %s',$_smarty_tpl->tpl_vars['licData']->value->getValidUntil()->format('d.m.Y'));?>

            <?php } else { ?>
                <?php echo __('Warning: Subscription only valid until %s',$_smarty_tpl->tpl_vars['subscription']->value->getValidUntil()->format('d.m.Y'));?>

            <?php }?>
        </span>
    <?php } else { ?>
        <span class="badge badge-success">
            <?php echo __('Subscription valid until %s',$_smarty_tpl->tpl_vars['subscription']->value->getValidUntil()->format('d.m.Y'));?>

        </span>
    <?php }
} elseif ($_smarty_tpl->tpl_vars['licData']->value->getValidUntil() !== null) {?>
    <?php if ($_smarty_tpl->tpl_vars['licData']->value->getDaysRemaining() < 28) {?>
        <span class="badge badge-warning">
            <?php echo __('Warning: License only valid until %s',$_smarty_tpl->tpl_vars['licData']->value->getValidUntil()->format('d.m.Y'));?>

        </span>
    <?php } else { ?>
        <span class="badge badge-success">
            <?php echo __('License valid until %s',$_smarty_tpl->tpl_vars['licData']->value->getValidUntil()->format('d.m.Y'));?>

        </span>
    <?php }
} else { ?>
    <span class="badge badge-success"><?php echo __('Valid');?>
</span>
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['license']->value->getLinks(), 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['link']->value->getRel() === 'extendLicense' && ($_smarty_tpl->tpl_vars['license']->value->hasSubscription() || $_smarty_tpl->tpl_vars['license']->value->hasLicense())) {?>
        <p class="mt-2 mb-0">
            <?php $_smarty_tpl->_assignInScope('title', __('extendLicense'));?>
            <?php if ($_smarty_tpl->tpl_vars['licData']->value->getType() === 'test') {?>
                <?php $_smarty_tpl->_assignInScope('title', __('extendTestLicense'));?>
            <?php } elseif ($_smarty_tpl->tpl_vars['license']->value->hasSubscription()) {?>
                <?php $_smarty_tpl->_assignInScope('title', __('extendSubscription'));?>
            <?php }?>
            <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('class'=>'extend-license-form mt-2'));
$_block_repeat=true;
echo $_block_plugin3->render(array('class'=>'extend-license-form mt-2'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <input type="hidden" name="action" value="extendLicense">
                <input type="hidden" name="url" value="<?php echo $_smarty_tpl->tpl_vars['link']->value->getHref();?>
">
                <input type="hidden" name="method" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['link']->value->getMethod() ?? null)===null||$tmp==='' ? 'POST' : $tmp);?>
">
                <input type="hidden" name="exsid" value="<?php echo $_smarty_tpl->tpl_vars['license']->value->getExsID();?>
">
                <input type="hidden" name="key" value="<?php echo $_smarty_tpl->tpl_vars['license']->value->getLicense()->getKey();?>
">
                <button type="submit" class="btn btn-sm btn-primary extend-license"
                        data-link="<?php echo $_smarty_tpl->tpl_vars['link']->value->getHref();?>
"
                        href="#"
                        title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
                    <i class="fa fa-link"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </button>
            <?php $_block_repeat=false;
echo $_block_plugin3->render(array('class'=>'extend-license-form mt-2'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </p>
    <?php } elseif ($_smarty_tpl->tpl_vars['link']->value->getRel() === 'upgradeLicense') {?>
        <p class="mt-2 mb-0">
        <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('class'=>'upgrade-license-form mt-2'));
$_block_repeat=true;
echo $_block_plugin4->render(array('class'=>'upgrade-license-form mt-2'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <input type="hidden" name="action" value="upgradeLicense">
            <input type="hidden" name="url" value="<?php echo $_smarty_tpl->tpl_vars['link']->value->getHref();?>
">
            <input type="hidden" name="method" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['link']->value->getMethod() ?? null)===null||$tmp==='' ? 'POST' : $tmp);?>
">
            <input type="hidden" name="exsid" value="<?php echo $_smarty_tpl->tpl_vars['license']->value->getExsID();?>
">
            <input type="hidden" name="key" value="<?php echo $_smarty_tpl->tpl_vars['license']->value->getLicense()->getKey();?>
">
            <button type="submit" class="btn btn-sm btn-primary upgrade-license"
                    data-link="<?php echo $_smarty_tpl->tpl_vars['link']->value->getHref();?>
"
                    href="#"
                    title="<?php echo __($_smarty_tpl->tpl_vars['link']->value->getRel());?>
">
                <i class="fa fa-link"></i> <?php echo __($_smarty_tpl->tpl_vars['link']->value->getRel());?>

            </button>
        <?php $_block_repeat=false;
echo $_block_plugin4->render(array('class'=>'upgrade-license-form mt-2'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </p>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
