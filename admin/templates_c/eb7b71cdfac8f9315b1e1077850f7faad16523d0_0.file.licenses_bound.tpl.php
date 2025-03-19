<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:00:41
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/licenses_bound.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab1fc9e486a3_23478701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb7b71cdfac8f9315b1e1077850f7faad16523d0' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/licenses_bound.tpl',
      1 => 1738748474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/licenses_referenced_item.tpl' => 1,
    'file:tpl_inc/licenses_license.tpl' => 1,
  ),
),false)) {
function content_67ab1fc9e486a3_23478701 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="bound-licenses">
    <?php if ((isset($_smarty_tpl->tpl_vars['extendErrorMessage']->value))) {?>
        <div class="alert alert-danger">
            <?php echo __($_smarty_tpl->tpl_vars['extendErrorMessage']->value);?>

        </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['extendSuccessMessage']->value))) {?>
        <div class="alert alert-success">
            <?php echo __($_smarty_tpl->tpl_vars['extendSuccessMessage']->value);?>

        </div>
    <?php }?>
    <div class="card">
        <div class="card-header">
            <?php echo __('Bound licenses');?>

            <hr class="mb-n3">
        </div>
        <div class="card-body">
        <?php if ($_smarty_tpl->tpl_vars['licenses']->value->getActive()->count() > 0) {?>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th><?php echo __('ID');?>
/<?php echo __('Key');?>
</th>
                        <th><?php echo __('Name');?>
</th>
                        <th><?php echo __('State');?>
</th>
                        <th><?php echo __('Type');?>
</th>
                        <th><?php echo __('Validity');?>
</th>
                    </tr>
                    </thead>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['licenses']->value->getActive(), 'license');
$_smarty_tpl->tpl_vars['license']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['license']->value) {
$_smarty_tpl->tpl_vars['license']->do_else = false;
?>
                        <tr>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['license']->value->getID();?>
<br>
                                <span class="font-weight-bold"><?php echo __('Key');?>
: </span>
                                <span class="value"><?php echo $_smarty_tpl->tpl_vars['license']->value->getLicense()->getKey();?>
</span>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['license']->value->getName();?>
</td>
                            <td>
                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/licenses_referenced_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('license'=>$_smarty_tpl->tpl_vars['license']->value), 0, true);
?>
                            </td>
                            <td><?php echo __($_smarty_tpl->tpl_vars['license']->value->getLicense()->getType());?>
</td>
                            <td>
                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/licenses_license.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('license'=>$_smarty_tpl->tpl_vars['license']->value), 0, true);
?>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
            <div class="save-wrapper">
                <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array());
$_block_repeat=true;
echo $_block_plugin3->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <div class="row">
                        <div class="ml-auto col-sm-6 col-xl-auto">
                            <button class="btn btn-primary btn-block" id="install-all" name="action" value="install-all">
                                <i class="fa fa-share"></i> <?php echo __('Install all');?>

                            </button>
                        </div>
                        <div class="col-sm-6 col-xl-auto">
                            <button class="btn btn-primary btn-block" id="update-all" name="action" value="update-all">
                                <i class="fas fa-refresh"></i> <?php echo __('Update all');?>

                            </button>
                        </div>
                    </div>
                <?php $_block_repeat=false;
echo $_block_plugin3->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        <?php } else { ?>
            <p class="alert alert-info"><i class="fal fa-info-circle"></i> <?php echo __('noData');?>
</p>
        <?php }?>
        </div>
    </div>
</div>
<?php }
}
