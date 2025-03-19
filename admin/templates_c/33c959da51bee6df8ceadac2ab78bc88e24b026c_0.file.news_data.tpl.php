<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:22:34
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/widgets/news_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33beaccb180_72534951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33c959da51bee6df8ceadac2ab78bc88e24b026c' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/widgets/news_data.tpl',
      1 => 1738748652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33beaccb180_72534951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/includes/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (is_object($_smarty_tpl->tpl_vars['oNews_arr']->value) && !empty($_smarty_tpl->tpl_vars['oNews_arr']->value->channel->item)) {?>
    <ul class="linklist">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNews_arr']->value->channel->item, 'oNews');
$_smarty_tpl->tpl_vars['oNews']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNews']->value) {
$_smarty_tpl->tpl_vars['oNews']->do_else = false;
?><li><p><a class="" href="<?php echo urldecode($_smarty_tpl->tpl_vars['oNews']->value->link);?>
" target="_blank" rel="noopener"><span class="date label label-default pull-right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oNews']->value->pubDate,'d.m.Y');?>
</span><?php echo $_smarty_tpl->tpl_vars['oNews']->value->title;?>
</a></p></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php } else { ?>
    <div class="widget-container"><div class="alert alert-error"><?php echo __('noDataAvailable');?>
</div></div>
<?php }
}
}
