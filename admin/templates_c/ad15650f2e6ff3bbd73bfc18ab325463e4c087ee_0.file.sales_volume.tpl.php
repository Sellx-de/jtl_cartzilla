<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:22:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/widgets/sales_volume.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33be6111ff0_13359265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad15650f2e6ff3bbd73bfc18ab325463e4c087ee' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/widgets/sales_volume.tpl',
      1 => 1738748651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/linechart_inc.tpl' => 1,
  ),
),false)) {
function content_67a33be6111ff0_13359265 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget-custom-data">
    <div class="widget-custom-data">
        <?php if ($_smarty_tpl->tpl_vars['linechart']->value) {?>
            <?php ob_start();
echo __('sales');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/linechart_inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linechart'=>$_smarty_tpl->tpl_vars['linechart']->value,'headline'=>'','id'=>'linechart_sales_volume','width'=>'100%','height'=>'320px','ylabel'=>$_prefixVariable2,'href'=>false,'ymin'=>0,'legend'=>false), 0, false);
?>
        <?php } else { ?>
            <div class="widget-container"><div class="alert alert-info"><?php echo __('noStatisticsThisMonth');?>
</div></div>
        <?php }?>
    </div>
</div>
<?php }
}
