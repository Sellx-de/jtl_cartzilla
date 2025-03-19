<?php
/* Smarty version 4.5.4, created on 2025-02-11 21:04:31
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/bilder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67abad4f120656_58504422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78a7d1a75f823bcd97761138b3d99f3d432b4181' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/bilder.tpl',
      1 => 1738748275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/config_heading.tpl' => 1,
    'file:tpl_inc/config_item.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67abad4f120656_58504422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('imageTitle'),'cBeschreibung'=>__('bilderDesc'),'cDokuURL'=>__('bilderURL')), 0, false);
?>
<div id="content">
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <input type="hidden" name="speichern" value="1">
        <div id="settings">
            <div class="card">
                <div class="card-header">
                    <div class="subheading1"><?php echo __('imageSizes');?>
</div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="list table table-border-light table-images">
                            <thead>
                            <tr>
                                <th class="text-left"><?php echo __('type');?>
</th>
                                <th class="text-center"><?php echo __('xs');?>
 <small><?php echo __('widthXHeight');?>
</small></th>
                                <th class="text-center"><?php echo __('sm');?>
 <small><?php echo __('widthXHeight');?>
</small></th>
                                <th class="text-center"><?php echo __('md');?>
 <small><?php echo __('widthXHeight');?>
</small></th>
                                <th class="text-center"><?php echo __('lg');?>
 <small><?php echo __('widthXHeight');?>
</small></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['indices']->value, 'name', false, 'idx');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idx']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                            <tr>
                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sizes']->value, 'size');
$_smarty_tpl->tpl_vars['size']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
$_smarty_tpl->tpl_vars['size']->do_else = false;
?>
                                <td class="text-center">
                                    <div class="input-group form-counter min-w-sm">
                                        <?php $_smarty_tpl->_assignInScope('optIdx', (((('bilder_').($_smarty_tpl->tpl_vars['idx']->value)).('_')).($_smarty_tpl->tpl_vars['size']->value)).('_breite'));?>
                                        <?php if (!(isset($_smarty_tpl->tpl_vars['imgConf']->value[$_smarty_tpl->tpl_vars['optIdx']->value]))) {?>
                                            <?php $_smarty_tpl->_assignInScope('optIdx', (('bilder_').($_smarty_tpl->tpl_vars['idx']->value)).('_breite'));?>
                                        <?php }?>
                                        <input size="4" class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['optIdx']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['imgConf']->value[$_smarty_tpl->tpl_vars['optIdx']->value];?>
" />
                                    </div>
                                    <span class="cross-sign text-center">x</span>
                                    <div class="input-group form-counter min-w-sm">
                                        <?php $_smarty_tpl->_assignInScope('optIdx', (((('bilder_').($_smarty_tpl->tpl_vars['idx']->value)).('_')).($_smarty_tpl->tpl_vars['size']->value)).('_hoehe'));?>
                                        <?php if (!(isset($_smarty_tpl->tpl_vars['imgConf']->value[$_smarty_tpl->tpl_vars['optIdx']->value]))) {?>
                                            <?php $_smarty_tpl->_assignInScope('optIdx', (('bilder_').($_smarty_tpl->tpl_vars['idx']->value)).('_hoehe'));?>
                                        <?php }?>
                                        <input size="4" class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['optIdx']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['imgConf']->value[$_smarty_tpl->tpl_vars['optIdx']->value];?>
" />
                                    </div>
                                </td>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value->getSubsections(), 'subsection');
$_smarty_tpl->tpl_vars['subsection']->index = -1;
$_smarty_tpl->tpl_vars['subsection']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subsection']->value) {
$_smarty_tpl->tpl_vars['subsection']->do_else = false;
$_smarty_tpl->tpl_vars['subsection']->index++;
$__foreach_subsection_3_saved = $_smarty_tpl->tpl_vars['subsection'];
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_heading.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subsection'=>$_smarty_tpl->tpl_vars['subsection']->value,'idx'=>$_smarty_tpl->tpl_vars['subsection']->index), 0, true);
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subsection']->value->getItems(), 'cnf');
$_smarty_tpl->tpl_vars['cnf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cnf']->value) {
$_smarty_tpl->tpl_vars['cnf']->do_else = false;
?>
                        <?php if (strpos($_smarty_tpl->tpl_vars['cnf']->value->getValueName(),'hoehe') === false && strpos($_smarty_tpl->tpl_vars['cnf']->value->getValueName(),'breite') === false) {?>
                            <?php if ($_smarty_tpl->tpl_vars['cnf']->value->isConfigurable()) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php }?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
$_smarty_tpl->tpl_vars['subsection'] = $__foreach_subsection_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <div class="card-footer save-wrapper">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto submit">
                        <button name="speichern" type="submit" value="<?php echo __('save');?>
" class="btn btn-primary btn-block">
                            <?php echo __('saveWithIcon');?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
