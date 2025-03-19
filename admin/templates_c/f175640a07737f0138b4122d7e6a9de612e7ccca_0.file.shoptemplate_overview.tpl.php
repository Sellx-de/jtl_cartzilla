<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:39:07
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/shoptemplate_overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33fcb340111_03222498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f175640a07737f0138b4122d7e6a9de612e7ccca' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/shoptemplate_overview.tpl',
      1 => 1738748468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/shoptemplate_listing_item.tpl' => 1,
  ),
),false)) {
function content_67a33fcb340111_03222498 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="shoptemplate-overview">
    <div class="alerts">
        <div class="alert alert-danger" id="alert-upload-error" style="display:none"></div>
        <div class="alert alert-success" id="alert-upload-success" style="display:none"></div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th></th>
                        <th><?php echo __('Name');?>
</th>
                        <th class="text-center"><?php echo __('status');?>
</th>
                        <th class="text-center"><?php echo __('version');?>
</th>
                        <th class="text-center"><?php echo __('shopversion');?>
</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listingItems']->value, 'listingItem');
$_smarty_tpl->tpl_vars['listingItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['listingItem']->value) {
$_smarty_tpl->tpl_vars['listingItem']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/shoptemplate_listing_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php }
}
