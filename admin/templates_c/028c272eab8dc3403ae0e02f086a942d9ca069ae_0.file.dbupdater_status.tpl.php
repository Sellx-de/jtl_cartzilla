<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:36:57
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/dbupdater_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33f49680590_49133260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '028c272eab8dc3403ae0e02f086a942d9ca069ae' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/dbupdater_status.tpl',
      1 => 1738748469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33f49680590_49133260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'migration_list' => 
  array (
    'compiled_filepath' => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates_c/028c272eab8dc3403ae0e02f086a942d9ca069ae_0.file.dbupdater_status.tpl.php',
    'uid' => '028c272eab8dc3403ae0e02f086a942d9ca069ae',
    'call_name' => 'smarty_template_function_migration_list_200093891167a33f49628231_14453164',
  ),
));
?>

<?php $_smarty_tpl->_assignInScope('migrationURL', (($tmp = $_smarty_tpl->tpl_vars['migrationURL']->value ?? null)===null||$tmp==='' ? ((($_smarty_tpl->tpl_vars['adminURL']->value).('/')).(JTL\Router\Route::DBUPDATER)) : $tmp));
$_smarty_tpl->_assignInScope('pluginID', (($tmp = $_smarty_tpl->tpl_vars['pluginID']->value ?? null)===null||$tmp==='' ? null : $tmp));
if ($_smarty_tpl->tpl_vars['pluginID']->value === null) {?>
    <form name="updateForm" method="post" id="form-update">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <input type="hidden" name="update" value="1" />
        <?php if ($_smarty_tpl->tpl_vars['updatesAvailable']->value) {?>
            <div class="alert alert-warning">
                <h4><i class="fal fa-exclamation-triangle"></i> <?php echo __('dbUpdate');?>
 <?php if ($_smarty_tpl->tpl_vars['hasDifferentVersions']->value) {
echo __('fromVersion');?>
 <?php echo $_smarty_tpl->tpl_vars['currentDatabaseVersion']->value;?>
 <?php echo __('toVersion');?>
 <?php echo $_smarty_tpl->tpl_vars['currentFileVersion']->value;
}?> <?php echo __('required');?>
.</h4>
                <?php echo __('infoUpdateNow');?>

            </div>
            <div id="btn-update-group" class="row">
                <div class="col-sm-6 col-xl-auto mb-3">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?action=update" class="btn btn-success btn-block" data-callback="update"><i class="fa fa-flash"></i> <?php echo __('buttonUpdateNow');?>
</a>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <button id="backup-button" type="button" class="btn btn-outline-primary btn-block dropdown-toggle ladda-button" data-size="l" data-style="zoom-out" data-spinner-color="#000" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="ladda-label m-auto"><?php echo __('saveCopy');?>
 &nbsp; <i class="fa fa-caret-down"></i></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="ml-3"><a href="<?php echo $_smarty_tpl->tpl_vars['migrationURL']->value;?>
?action=backup" data-callback="backup"><i class="fa fa-cloud-download"></i> &nbsp; <?php echo __('putOnServer');?>
</a></li>
                        <li class="ml-3"><a href="<?php echo $_smarty_tpl->tpl_vars['migrationURL']->value;?>
?action=backup&download" data-callback="backup" data-download="true"><i class="fa fa-download"></i> &nbsp;<?php echo __('download');?>
</a></li>
                    </ul>
                </div>
            </div>
        <?php } else { ?>
            <div class="alert alert-success h4">
                <p class="text-center">
                    <?php echo sprintf(__('dbUpToDate'),$_smarty_tpl->tpl_vars['currentDatabaseVersion']->value);?>

                </p>
            </div>
        <?php }?>
    </form>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['manager']->value)) && is_object($_smarty_tpl->tpl_vars['manager']->value)) {?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'migration_list', array('manager'=>$_smarty_tpl->tpl_vars['manager']->value,'filter'=>2,'title'=>__('openMigrations'),'url'=>$_smarty_tpl->tpl_vars['migrationURL']->value,'plugin'=>$_smarty_tpl->tpl_vars['pluginID']->value,'hasPendingMigrations'=>(($tmp = $_smarty_tpl->tpl_vars['updatesAvailable']->value ?? null)===null||$tmp==='' ? true : $tmp)), true);?>

    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'migration_list', array('manager'=>$_smarty_tpl->tpl_vars['manager']->value,'filter'=>1,'title'=>__('successfullMigrations'),'url'=>$_smarty_tpl->tpl_vars['migrationURL']->value,'plugin'=>$_smarty_tpl->tpl_vars['pluginID']->value), true);?>

<?php }
}
/* smarty_template_function_migration_list_200093891167a33f49628231_14453164 */
if (!function_exists('smarty_template_function_migration_list_200093891167a33f49628231_14453164')) {
function smarty_template_function_migration_list_200093891167a33f49628231_14453164(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('manager'=>null,'title'=>'','filter'=>0,'plugin'=>null,'hidden'=>true,'hasPendingMigrations'=>false), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/includes/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
     <div class="card card-widget">
        <div class="card-header">
            <?php if (strlen((string) $_smarty_tpl->tpl_vars['title']->value) > 0) {?>
                <h4><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
                <hr class="mb-5">
            <?php }?>
        </div>
        <div class="card-body<?php if ($_smarty_tpl->tpl_vars['hidden']->value && !$_smarty_tpl->tpl_vars['hasPendingMigrations']->value) {?> body-hidden<?php }?>">
            <div class="table-responsive">
                <table class="table table-striped table-align-top">
                    <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th width="60%"><?php echo __('migration');?>
</th>
                        <th width="25%" class="text-center"><?php if ($_smarty_tpl->tpl_vars['filter']->value !== 2) {
echo __('executed');
}?></th>
                        <th width="10%" class="text-center"></th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $_smarty_tpl->_assignInScope('migrationIndex', 1);?>
                      <?php $_smarty_tpl->_assignInScope('executedMigrations', $_smarty_tpl->tpl_vars['manager']->value->getExecutedMigrations());?>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['manager']->value->getMigrations()), 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
                          <?php $_smarty_tpl->_assignInScope('executed', in_array($_smarty_tpl->tpl_vars['m']->value->getId(),$_smarty_tpl->tpl_vars['executedMigrations']->value));?>
                          <?php if ($_smarty_tpl->tpl_vars['filter']->value === 0 || ($_smarty_tpl->tpl_vars['filter']->value === 1 && $_smarty_tpl->tpl_vars['executed']->value) || ($_smarty_tpl->tpl_vars['filter']->value === 2 && !$_smarty_tpl->tpl_vars['executed']->value)) {?>
                              <tr>
                                  <td><?php echo $_smarty_tpl->tpl_vars['migrationIndex']->value++;?>
</td>
                                  <td>
                                    <?php echo $_smarty_tpl->tpl_vars['m']->value->getDescription();?>
<br>
                                    <?php if ($_smarty_tpl->tpl_vars['m']->value->getCreated()) {?>
                                      <small class="text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value->getCreated(),'d.m.Y - H:i:s');?>
&nbsp;&nbsp;</small>
                                    <?php }?>
                                    <small class="text-muted"><i class="fa fa-file-code-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['m']->value->getName();?>
</small>
                                  </td>
                                  <td class="text-center"><span class="migration-created"><?php if ($_smarty_tpl->tpl_vars['executed']->value) {?><i class="fal fa-check text-success" aria-hidden="true"></i> <?php }
if ($_smarty_tpl->tpl_vars['m']->value->getExecuted()) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value->getExecuted(),"d.m.Y - H:i:s");
}?></span></td>
                                  <td class="text-center">
                                      <a <?php if ($_smarty_tpl->tpl_vars['executed']->value) {?>style="display:none"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?action=migration"
                                         data-callback="migration"
                                         data-dir="up"
                                         data-id="<?php echo $_smarty_tpl->tpl_vars['m']->value->getId();?>
"
                                         data-plugin="<?php if ($_smarty_tpl->tpl_vars['plugin']->value !== null) {
echo $_smarty_tpl->tpl_vars['plugin']->value;
} else { ?>null<?php }?>"
                                         class="btn btn-success btn-sm" <?php if ($_smarty_tpl->tpl_vars['executed']->value) {?>disabled="disabled"<?php }?>>
                                          <i class="fa fa-arrow-up"></i>
                                      </a>
                                      <a <?php if (!$_smarty_tpl->tpl_vars['executed']->value) {?>style="display:none"<?php }?>
                                         href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?action=migration"
                                         data-callback="migration"
                                         data-dir="down"
                                         data-id="<?php echo $_smarty_tpl->tpl_vars['m']->value->getId();?>
"
                                         data-plugin="<?php if ($_smarty_tpl->tpl_vars['plugin']->value !== null) {
echo $_smarty_tpl->tpl_vars['plugin']->value;
} else { ?>null<?php }?>"
                                         class="btn btn-warning btn-sm" <?php if (!$_smarty_tpl->tpl_vars['executed']->value) {?>disabled="disabled"<?php }?>>
                                          <i class="fa fa-arrow-down"></i>
                                      </a>
                                  </td>
                              </tr>
                          <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
}}
/*/ smarty_template_function_migration_list_200093891167a33f49628231_14453164 */
}
