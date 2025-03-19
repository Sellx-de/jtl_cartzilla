<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:01:26
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/plugin_license_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab1ff6077101_53135268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b0d079971bd651ed3b246c4602f63ec377a1e0c' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/plugin_license_info.tpl',
      1 => 1738748467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab1ff6077101_53135268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('license', $_smarty_tpl->tpl_vars['data']->value->getLicense());?>
<h2><?php echo __('License');?>
</h2>
<table class="table-striped table">
    <?php if (is_a($_smarty_tpl->tpl_vars['data']->value,JTL\License\Struct\ExpiredExsLicense::class)) {?>
        <div class="alert alert-danger"><?php echo __('No license found.');?>
</div>
    <?php } else { ?>
        <tbody>
            <tr>
                <th><?php echo __('Vendor');?>
</th>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value->getVendor()->getHref();?>
" rel="noopener"><i class="fas fa-external-link"></i> <?php echo $_smarty_tpl->tpl_vars['data']->value->getVendor()->getName();?>
</a></td>
            </tr>
            <tr>
                <th><?php echo __('Key');?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['license']->value->getKey();?>
</td>
            </tr>
            <tr>
                <th><?php echo __('Date created');?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['license']->value->getCreated()->format('d.m.Y');?>
</td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['license']->value->getValidUntil() !== null) {?>
            <tr>
                <th><?php echo __('Valid until');?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['license']->value->getValidUntil()->format('d.m.Y');?>
</td>
            </tr>
            <?php } elseif ($_smarty_tpl->tpl_vars['license']->value->getSubscription()->getValidUntil() !== null) {?>
            <tr>
                <th><?php echo __('Valid until');?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['license']->value->getSubscription()->getValidUntil()->format('d.m.Y');?>
</td>
            </tr>
            <?php }?>
        </tbody>
    <?php }?>
</table>
<p class="mb-0 mt-2">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value->getLinks(), 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['link']->value->getRel() !== 'clearBinding' && $_smarty_tpl->tpl_vars['link']->value->getRel() === 'extendLicense') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getHref();?>
" rel="noopener" class="btn btn-default"><?php echo __($_smarty_tpl->tpl_vars['link']->value->getRel());?>
</a>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</p>
<?php }
}
