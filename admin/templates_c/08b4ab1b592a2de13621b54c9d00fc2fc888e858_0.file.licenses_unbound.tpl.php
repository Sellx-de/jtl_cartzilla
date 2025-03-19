<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:00:41
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/licenses_unbound.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab1fc9e95751_27581665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08b4ab1b592a2de13621b54c9d00fc2fc888e858' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/licenses_unbound.tpl',
      1 => 1738748469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab1fc9e95751_27581665 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="unbound-licenses">
    <?php if ((isset($_smarty_tpl->tpl_vars['bindErrorMessage']->value))) {?>
        <div class="alert alert-danger">
            <?php echo __($_smarty_tpl->tpl_vars['bindErrorMessage']->value);?>

        </div>
    <?php }?>
    <div class="card">
        <div class="card-header">
            <?php echo __('Unbound licenses');?>

            <hr class="mb-n3">
        </div>
        <div class="card-body">
        <?php if ($_smarty_tpl->tpl_vars['licenses']->value->getUnbound()->count() > 0) {?>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th><?php echo __('ID');?>
</th>
                        <th><?php echo __('Name');?>
</th>
                        <th><?php echo __('Type');?>
</th>
                        <th><?php echo __('Developer');?>
</th>
                        <th><?php echo __('Action');?>
</th>
                    </tr>
                    </thead>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['licenses']->value->getUnbound(), 'license');
$_smarty_tpl->tpl_vars['license']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['license']->value) {
$_smarty_tpl->tpl_vars['license']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['license']->value->getID();?>
</td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['license']->value->getName();?>

                                <?php $_smarty_tpl->_assignInScope('textLinks', array());?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['license']->value->getLinks(), 'link', true);
$_smarty_tpl->tpl_vars['link']->iteration = 0;
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
$_smarty_tpl->tpl_vars['link']->iteration++;
$_smarty_tpl->tpl_vars['link']->last = $_smarty_tpl->tpl_vars['link']->iteration === $_smarty_tpl->tpl_vars['link']->total;
$__foreach_link_2_saved = $_smarty_tpl->tpl_vars['link'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['link']->value->getRel() === 'itemDetails' || $_smarty_tpl->tpl_vars['link']->value->getRel() === 'documentation') {?>
                                        <?php $_smarty_tpl->_assignInScope('btn', array('rel'=>$_smarty_tpl->tpl_vars['link']->value->getRel(),'href'=>$_smarty_tpl->tpl_vars['link']->value->getHref()));?>
                                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['textLinks']) ? $_smarty_tpl->tpl_vars['textLinks']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['btn']->value;
$_smarty_tpl->_assignInScope('textLinks', $_tmp_array);?>
                                    <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php if (count($_smarty_tpl->tpl_vars['textLinks']->value) > 0) {?>
                                    <p class="links small mb-0">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['textLinks']->value, 'link', true);
$_smarty_tpl->tpl_vars['link']->iteration = 0;
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
$_smarty_tpl->tpl_vars['link']->iteration++;
$_smarty_tpl->tpl_vars['link']->last = $_smarty_tpl->tpl_vars['link']->iteration === $_smarty_tpl->tpl_vars['link']->total;
$__foreach_link_3_saved = $_smarty_tpl->tpl_vars['link'];
?>
                                            <a class="text-link" rel="noopener" href="<?php echo $_smarty_tpl->tpl_vars['link']->value['href'];?>
" title="<?php echo __($_smarty_tpl->tpl_vars['link']->value['rel']);?>
">
                                                <?php echo __($_smarty_tpl->tpl_vars['link']->value['rel']);?>

                                            </a><?php if (!$_smarty_tpl->tpl_vars['link']->last) {?> | <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </p>
                                <?php }?>
                            </td>
                            <td><?php echo __($_smarty_tpl->tpl_vars['license']->value->getLicense()->getType());?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['license']->value->getVendor()->getHref();?>
" rel="noopener"><?php echo $_smarty_tpl->tpl_vars['license']->value->getVendor()->getName();?>
</a></td>
                            <td>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['license']->value->getLinks(), 'link', true);
$_smarty_tpl->tpl_vars['link']->iteration = 0;
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
$_smarty_tpl->tpl_vars['link']->iteration++;
$_smarty_tpl->tpl_vars['link']->last = $_smarty_tpl->tpl_vars['link']->iteration === $_smarty_tpl->tpl_vars['link']->total;
$__foreach_link_4_saved = $_smarty_tpl->tpl_vars['link'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['link']->value->getRel() === 'setBinding') {?>
                                        <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('class'=>'set-binding-form','style'=>'display:inline-block'));
$_block_repeat=true;
echo $_block_plugin4->render(array('class'=>'set-binding-form','style'=>'display:inline-block'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <input type="hidden" name="action" value="setbinding">
                                            <input type="hidden" name="url" value="<?php echo $_smarty_tpl->tpl_vars['link']->value->getHref();?>
">
                                            <input type="hidden" name="method" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['link']->value->getMethod() ?? null)===null||$tmp==='' ? 'POST' : $tmp);?>
">
                                            <button type="submit" class="btn btn-sm btn-default set-binding"
                                                    data-link="<?php echo $_smarty_tpl->tpl_vars['link']->value->getHref();?>
" href="#" title="<?php echo __($_smarty_tpl->tpl_vars['link']->value->getRel());?>
">
                                                <i class="fa fa-link"></i> <?php echo __($_smarty_tpl->tpl_vars['link']->value->getRel());?>

                                            </button>
                                        <?php $_block_repeat=false;
echo $_block_plugin4->render(array('class'=>'set-binding-form','style'=>'display:inline-block'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
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
