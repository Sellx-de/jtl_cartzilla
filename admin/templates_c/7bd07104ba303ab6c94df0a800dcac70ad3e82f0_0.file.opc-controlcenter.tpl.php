<?php
/* Smarty version 4.5.4, created on 2025-02-07 10:06:40
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/opc-controlcenter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a5cd2056da80_79756080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bd07104ba303ab6c94df0a800dcac70ad3e82f0' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/opc-controlcenter.tpl',
      1 => 1738748274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 2,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67a5cd2056da80_79756080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/includes/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('opc'),'cBeschreibung'=>__('opcDesc'),'cDokuURL'=>__('opcUrl')), 0, false);
?>

<div class="tabs">
    <nav class="tabs-nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#pages"><?php echo __('opcPages');?>
</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#portlets"><?php echo __('opcPortlets');?>
</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#blueprints"><?php echo __('opcBlueprints');?>
</a>
            </li>
        </ul>
    </nav>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="pages">
            <div>
                <?php $_smarty_tpl->_assignInScope('allPages', $_smarty_tpl->tpl_vars['opcPageDB']->value->getPages());?>
                <?php if (count($_smarty_tpl->tpl_vars['allPages']->value) > 0) {?>
                    <?php $_smarty_tpl->_assignInScope('pages', array_slice($_smarty_tpl->tpl_vars['allPages']->value,$_smarty_tpl->tpl_vars['pagesPagi']->value->getFirstPageItem(),$_smarty_tpl->tpl_vars['pagesPagi']->value->getPageItemCount()));?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagesPagi']->value,'cParam_arr'=>array('tab'=>'pages')), 0, false);
?>
                    <div class="table-responsive">
                        <table class="list table">
                            <thead>
                            <tr>
                                <th></th>
                                <th><?php echo __('url');?>
</th>
                                <th><?php echo __('pageID');?>
</th>
                                <th class="text-center"><?php echo __('actions');?>
</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                                    <?php $_smarty_tpl->_assignInScope('pageIdHash', md5($_smarty_tpl->tpl_vars['page']->value->cPageId));?>
                                    <?php $_smarty_tpl->_assignInScope('publicPageRow', $_smarty_tpl->tpl_vars['opcPageDB']->value->getPublicPageRow($_smarty_tpl->tpl_vars['page']->value->cPageId));?>
                                    <tr>
                                        <td>
                                            <a href="#page-<?php echo $_smarty_tpl->tpl_vars['pageIdHash']->value;?>
" data-toggle="collapse">
                                                <i class="far fa-chevron-down rotate-180 font-size-lg" title="<?php echo __('details');?>
" data-toggle="tooltip"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;
echo $_smarty_tpl->tpl_vars['page']->value->cPageUrl;?>
" target="_blank">
                                                <span class="icon-hover">
                                                    <span class="far fa-link"></span><span class="fas fa-link"></span>
                                                </span>
                                                <?php echo $_smarty_tpl->tpl_vars['page']->value->cPageUrl;?>

                                            </a>
                                        </td>
                                        <td>
                                            <a href="#page-<?php echo $_smarty_tpl->tpl_vars['pageIdHash']->value;?>
" data-toggle="collapse">
                                                <span class="icon-hover">
                                                    <span class="far fa-info"></span><span class="fas fa-info"></span>
                                                </span>
                                                <?php echo htmlentities($_smarty_tpl->tpl_vars['page']->value->cPageId);?>

                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-link px-2 delete-confirm" title="<?php echo __('deleteDraftAll');?>
"
                                                   href="?token=<?php echo $_SESSION['jtl_token'];?>
&action=restore&pageId=<?php echo htmlentities($_smarty_tpl->tpl_vars['page']->value->cPageId);?>
"
                                                   data-toggle="tooltip"
                                                   data-modal-body="<?php echo $_smarty_tpl->tpl_vars['page']->value->cPageUrl;?>
">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-trash-alt"></span>
                                                        <span class="fas fa-trash-alt"></span>
                                                    </span>
                                                </a>
                                                <button class="btn btn-link px-2" title="<?php echo __('preview');?>
"
                                                        data-src="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;
echo $_smarty_tpl->tpl_vars['page']->value->cPageUrl;?>
"
                                                        data-toggle="modal"
                                                        data-target="#previewModal">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-eye"></span>
                                                        <span class="fas fa-eye"></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="border-top-0">
                                            <div  class="collapse" id="page-<?php echo $_smarty_tpl->tpl_vars['pageIdHash']->value;?>
">
                                            <table class="list table ">
                                                <thead>
                                                <tr>
                                                    <th><?php echo __('draft');?>
</th>
                                                    <th><?php echo __('publicFrom');?>
</th>
                                                    <th><?php echo __('publicTill');?>
</th>
                                                    <th><?php echo __('lastChange');?>
</th>
                                                    <th><?php echo __('changedNow');?>
</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opcPageDB']->value->getDrafts($_smarty_tpl->tpl_vars['page']->value->cPageId), 'draft');
$_smarty_tpl->tpl_vars['draft']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['draft']->value) {
$_smarty_tpl->tpl_vars['draft']->do_else = false;
?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['draft']->value->getName();?>
</td>
                                                        <td>
                                                            <?php if (empty($_smarty_tpl->tpl_vars['draft']->value->getPublishFrom())) {?>
                                                                <span class="text-danger"><?php echo __('unpublished');?>
</span>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['publicPageRow']->value !== null && $_smarty_tpl->tpl_vars['publicPageRow']->value->kPage == $_smarty_tpl->tpl_vars['draft']->value->getKey()) {?>
                                                                <span class="text-success">
                                                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['draft']->value->getPublishFrom(),'r');?>

                                                                </span>
                                                            <?php } else { ?>
                                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['draft']->value->getPublishFrom(),'r');?>

                                                            <?php }?>
                                                        </td>
                                                        <td>
                                                            <?php if (empty($_smarty_tpl->tpl_vars['draft']->value->getPublishTo())) {?>
                                                                <?php echo __('tillUnknown');?>

                                                            <?php } else { ?>
                                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['draft']->value->getPublishTo(),'r');?>

                                                            <?php }?>
                                                        </td>
                                                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['draft']->value->getLastModified(),'r');?>
</td>
                                                        <td>
                                                            <?php if (empty($_smarty_tpl->tpl_vars['draft']->value->getLockedBy())) {
} else {
echo $_smarty_tpl->tpl_vars['draft']->value->getLockedBy();
}?>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group float-right">
                                                                <a class="btn btn-link px-2 delete-confirm" title="<?php echo __('deleteDraft');?>
"
                                                                   href="?token=<?php echo $_SESSION['jtl_token'];?>
&action=discard&pageKey=<?php echo $_smarty_tpl->tpl_vars['draft']->value->getKey();?>
"
                                                                   data-toggle="tooltip"
                                                                   data-modal-body="<?php echo $_smarty_tpl->tpl_vars['draft']->value->getName();?>
">
                                                                    <span class="icon-hover">
                                                                        <span class="fal fa-trash-alt"></span>
                                                                        <span class="fas fa-trash-alt"></span>
                                                                    </span>
                                                                </a>
                                                                <a class="btn btn-link px-2" title="<?php echo __('edit');?>
" target="_blank"
                                                                   href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/<?php echo JTL\Router\Route::OPC;?>
?token=<?php echo $_SESSION['jtl_token'];?>
&pageKey=<?php echo $_smarty_tpl->tpl_vars['draft']->value->getKey();?>
&action=edit"
                                                                   data-toggle="tooltip">
                                                                    <span class="icon-hover">
                                                                        <span class="fal fa-edit"></span>
                                                                        <span class="fas fa-edit"></span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </tbody>
                                            </table>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagesPagi']->value,'cParam_arr'=>array('tab'=>'pages'),'isBottom'=>true), 0, true);
?>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert">
                        <?php echo __('noDataAvailable');?>

                    </div>
                <?php }?>
            </div>
        </div>
        <div class="tab-pane fade" id="portlets">
            <div>
                <div class="table-responsive">
                    <table class="list table table-striped">
                        <thead>
                        <tr>
                            <th><?php echo __('name');?>
</th>
                            <th><?php echo __('group');?>
</th>
                            <th><?php echo __('plugin');?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opc']->value->getPortletGroups(), 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value->getPortlets(), 'portlet');
$_smarty_tpl->tpl_vars['portlet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['portlet']->value) {
$_smarty_tpl->tpl_vars['portlet']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['portlet']->value->getTitle();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['portlet']->value->getGroup();?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['portlet']->value->getPluginId() > 0) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['portlet']->value->getPlugin()->getPluginID();?>

                                    <?php }?>
                                </td>
                            </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="blueprints">
            <div>
                <?php $_smarty_tpl->_assignInScope('blueprints', $_smarty_tpl->tpl_vars['opc']->value->getBlueprints());?>
                <?php if (count($_smarty_tpl->tpl_vars['blueprints']->value) > 0) {?>
                    <div class="table-responsive">
                        <table class="list table table-striped">
                            <thead>
                            <tr>
                                <th><?php echo __('name');?>
</th>
                                <th><?php echo __('portlet');?>
</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blueprints']->value, 'blueprint');
$_smarty_tpl->tpl_vars['blueprint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blueprint']->value) {
$_smarty_tpl->tpl_vars['blueprint']->do_else = false;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['blueprint']->value->getName();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['blueprint']->value->getInstance()->getPortlet()->getTitle();?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert">
                        <?php echo __('noDataAvailable');?>

                    </div>
                <?php }?>
            </div>
        </div>
    </div>

    <div id="previewModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2><?php echo __('preview');?>
</h2>
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fal fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe id="previewFrame" src="" style="zoom:0.60" width="99.6%" height="850" frameborder="0"></iframe>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><?php echo __('ok');?>
</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    $('#previewModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var frameSrc = button.data('src');

        var modal = $(this);
        modal.find('#previewFrame').attr('src', frameSrc);
    });
    $('.collapse').on('show.bs.collapse', function () {
        $('.collapse.in').collapse('hide');
    });
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
