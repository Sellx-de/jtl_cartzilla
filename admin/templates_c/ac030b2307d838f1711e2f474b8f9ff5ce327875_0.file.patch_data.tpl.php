<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:22:34
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/widgets/patch_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33bea87d087_36058898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac030b2307d838f1711e2f474b8f9ff5ce327875' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/widgets/patch_data.tpl',
      1 => 1738748651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33bea87d087_36058898 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['oPatch_arr']->value) > 0) {?>
    <ul class="linklist">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oPatch_arr']->value, 'oPatch');
$_smarty_tpl->tpl_vars['oPatch']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oPatch']->value) {
$_smarty_tpl->tpl_vars['oPatch']->do_else = false;
?>
        <li>
            <?php if (strlen((string) $_smarty_tpl->tpl_vars['oPatch']->value->cIconURL) > 0) {?>
                <img src="<?php echo urldecode($_smarty_tpl->tpl_vars['oPatch']->value->cIconURL);?>
" alt="" title="<?php echo $_smarty_tpl->tpl_vars['oPatch']->value->cTitle;?>
" />
            <?php }?>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['oPatch']->value->cURL;?>
" title="<?php echo $_smarty_tpl->tpl_vars['oPatch']->value->cTitle;?>
" target="_blank" rel="noopener">
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPatch']->value->cTitle,50,'...' ));?>

                <?php echo $_smarty_tpl->tpl_vars['oPatch']->value->cDescription;?>

            </a></p>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php } else { ?>
    <div class="alert alert-info"><?php echo __('noPatchesATM');?>
</div>
<?php }
}
}
