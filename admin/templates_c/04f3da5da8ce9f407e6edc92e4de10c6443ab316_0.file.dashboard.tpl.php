<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:22:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33be6289b16_68016891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04f3da5da8ce9f407e6edc92e4de10c6443ab316' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/dashboard.tpl',
      1 => 1738748272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/widget_selector.tpl' => 1,
    'file:tpl_inc/widget_container.tpl' => 3,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67a33be6289b16_68016891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (!empty($_smarty_tpl->tpl_vars['oActiveWidget_arr']->value) || !empty($_smarty_tpl->tpl_vars['oAvailableWidget_arr']->value)) {?>
    <?php echo '<script'; ?>
 type="text/javascript">

    function addWidget(kWidget) {
        ioCall(
            'addWidget', [kWidget], function () {
                window.location.href = '<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/?kWidget=' + kWidget;
            }
        );
    }

    $(function() {
        ioCall('truncateJtllog', undefined, undefined, undefined, undefined, true);
    });
    <?php echo '</script'; ?>
>

    <div id="content" class="dashboard-wrapper">
        <div class="row p-2">
            <div class="col">
                <h1 class="content-header-headline"><?php echo __('dashboard');?>
</h1>
            </div>
            <div class="col-auto ml-auto">
                <div class="dropleft d-inline-block">
                    <button class="btn btn-link btn-lg p-0" type="button" id="helpcenter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon-hover">
                            <span class="fal fa-cog"></span>
                            <span class="fas fa-cog"></span>
                        </span>
                    </button>
                    <div id="available-widgets" class="dropdown-menu dropdown-menu-right min-w-lg" aria-labelledby="helpcenter">
                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/widget_selector.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('oAvailableWidget_arr'=>$_smarty_tpl->tpl_vars['oAvailableWidget_arr']->value), 0, false);
?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/widget_container.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('eContainer'=>'left'), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/widget_container.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('eContainer'=>'center'), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/widget_container.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('eContainer'=>'right'), 0, true);
?>
        </div>
    </div>
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('dashboard')), 0, false);
?>
    <div class="alert alert-success">
        <strong><?php echo __('noMoreInfo');?>
</strong>
    </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
