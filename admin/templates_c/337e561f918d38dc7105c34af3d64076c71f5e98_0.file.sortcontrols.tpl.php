<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:31:28
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/sortcontrols.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab27001462e9_92071336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '337e561f918d38dc7105c34af3d64076c71f5e98' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/sortcontrols.tpl',
      1 => 1738748472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab27001462e9_92071336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'sortControls' => 
  array (
    'compiled_filepath' => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates_c/337e561f918d38dc7105c34af3d64076c71f5e98_0.file.sortcontrols.tpl.php',
    'uid' => '337e561f918d38dc7105c34af3d64076c71f5e98',
    'call_name' => 'smarty_template_function_sortControls_168619368867ab270010a947_59276852',
  ),
));
echo '<script'; ?>
>
    function pagiResort (pagiId, nSortBy, nSortDir)
    {
        $('#' + pagiId + '_nSortByDir').val(nSortBy * 2 + nSortDir);
        $('form#' + pagiId).submit();
        return false;
    }
<?php echo '</script'; ?>
>


<?php }
/* smarty_template_function_sortControls_168619368867ab270010a947_59276852 */
if (!function_exists('smarty_template_function_sortControls_168619368867ab270010a947_59276852')) {
function smarty_template_function_sortControls_168619368867ab270010a947_59276852(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if ($_smarty_tpl->tpl_vars['pagination']->value->getSortBy() !== $_smarty_tpl->tpl_vars['nSortBy']->value) {?>
        <a href="#" onclick="return pagiResort('<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
', <?php echo $_smarty_tpl->tpl_vars['nSortBy']->value;?>
, 0);"><i class="fa fa-unsorted"></i></a>
    <?php } elseif ($_smarty_tpl->tpl_vars['pagination']->value->getSortDirSpecifier() === 'DESC') {?>
        <a href="#" onclick="return pagiResort('<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
', <?php echo $_smarty_tpl->tpl_vars['nSortBy']->value;?>
, 0);"><i class="fa fa-sort-desc"></i></a>
    <?php } elseif ($_smarty_tpl->tpl_vars['pagination']->value->getSortDirSpecifier() === 'ASC') {?>
        <a href="#" onclick="return pagiResort('<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
', <?php echo $_smarty_tpl->tpl_vars['nSortBy']->value;?>
, 1);"><i class="fa fa-sort-asc"></i></a>
    <?php }
}}
/*/ smarty_template_function_sortControls_168619368867ab270010a947_59276852 */
}
