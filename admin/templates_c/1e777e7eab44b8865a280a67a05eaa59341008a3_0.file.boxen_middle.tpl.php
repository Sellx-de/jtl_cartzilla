<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:32:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/boxen_middle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34c4e6a2ec5_09065796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e777e7eab44b8865a280a67a05eaa59341008a3' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/boxen_middle.tpl',
      1 => 1738748472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/box_single.tpl' => 3,
  ),
),false)) {
function content_67a34c4e6a2ec5_09065796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'containerSection' => 
  array (
    'compiled_filepath' => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates_c/1e777e7eab44b8865a280a67a05eaa59341008a3_0.file.boxen_middle.tpl.php',
    'uid' => '1e777e7eab44b8865a280a67a05eaa59341008a3',
    'call_name' => 'smarty_template_function_containerSection_8959922867a34c4e673077_78280823',
  ),
));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['oBoxenContainer']->value['top'])) && $_smarty_tpl->tpl_vars['oBoxenContainer']->value['top'] === true) {?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'containerSection', array('direction'=>'top','directionName'=>__('sectionTop'),'oBox_arr'=>$_smarty_tpl->tpl_vars['oBoxenTop_arr']->value,'oContainer_arr'=>$_smarty_tpl->tpl_vars['oContainerTop_arr']->value), true);?>

<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['oBoxenContainer']->value['bottom'])) && $_smarty_tpl->tpl_vars['oBoxenContainer']->value['bottom'] === true) {?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'containerSection', array('direction'=>'bottom','directionName'=>__('sectionBottom'),'oBox_arr'=>$_smarty_tpl->tpl_vars['oBoxenBottom_arr']->value,'oContainer_arr'=>$_smarty_tpl->tpl_vars['oContainerBottom_arr']->value), true);?>

<?php }
}
/* smarty_template_function_containerSection_8959922867a34c4e673077_78280823 */
if (!function_exists('smarty_template_function_containerSection_8959922867a34c4e673077_78280823')) {
function smarty_template_function_containerSection_8959922867a34c4e673077_78280823(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/includes/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
     <div class="col-md-12">
        <div class="card">
            <form action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post">
                <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                <div class="card-header">
                    <div class="subheading1"><?php echo $_smarty_tpl->tpl_vars['directionName']->value;?>
</div>
                    <hr class="mb-3">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="box_show" id="box_<?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
_show" value="1"
                           <?php if ((isset($_smarty_tpl->tpl_vars['bBoxenAnzeigen']->value[$_smarty_tpl->tpl_vars['direction']->value])) && $_smarty_tpl->tpl_vars['bBoxenAnzeigen']->value[$_smarty_tpl->tpl_vars['direction']->value]) {?>checked<?php }?>>
                        <label class="custom-control-label" for="box_<?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
_show"><?php echo __('showContainer');?>
</label>
                    </div>
                </div>
                <div class="card-body">
                <?php if (count($_smarty_tpl->tpl_vars['oBox_arr']->value) > 0) {?>
                    <div class="table-responsive">
                        <table class="table table-hover table-align-top">
                            <thead>
                                <tr>
                                    <th><?php echo __('boxTitle');?>
</th>
                                    <th><?php echo __('boxType');?>
</th>
                                    <th><?php echo __('boxLabel');?>
</th>
                                    <th><?php echo __('status');?>
</th>
                                    <th><?php echo __('sorting');?>
</th>
                                    <th class="text-center"><?php echo __('actions');?>
</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oBox_arr']->value, 'oBox');
$_smarty_tpl->tpl_vars['oBox']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oBox']->value) {
$_smarty_tpl->tpl_vars['oBox']->do_else = false;
?>
                                    <?php $_smarty_tpl->_assignInScope('disabled', ((int)$_smarty_tpl->tpl_vars['nPage']->value !== 0 && $_smarty_tpl->tpl_vars['oBox']->value->getAvailableForPage() !== 0 && $_smarty_tpl->tpl_vars['oBox']->value->getAvailableForPage() !== (int)$_smarty_tpl->tpl_vars['nPage']->value));?>
                                    <?php if ($_smarty_tpl->tpl_vars['oBox']->value->getBaseType() === (defined('BOX_CONTAINER') ? constant('BOX_CONTAINER') : null)) {?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/box_single.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('oBox'=>$_smarty_tpl->tpl_vars['oBox']->value,'nPage'=>$_smarty_tpl->tpl_vars['nPage']->value,'position'=>$_smarty_tpl->tpl_vars['direction']->value,'borderTop'=>true,'disabled'=>$_smarty_tpl->tpl_vars['disabled']->value), 0, true);
?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oBox']->value->getChildren(), 'oContainerBox', true);
$_smarty_tpl->tpl_vars['oContainerBox']->iteration = 0;
$_smarty_tpl->tpl_vars['oContainerBox']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oContainerBox']->value) {
$_smarty_tpl->tpl_vars['oContainerBox']->do_else = false;
$_smarty_tpl->tpl_vars['oContainerBox']->iteration++;
$_smarty_tpl->tpl_vars['oContainerBox']->last = $_smarty_tpl->tpl_vars['oContainerBox']->iteration === $_smarty_tpl->tpl_vars['oContainerBox']->total;
$__foreach_oContainerBox_16_saved = $_smarty_tpl->tpl_vars['oContainerBox'];
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/box_single.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('oBox'=>$_smarty_tpl->tpl_vars['oContainerBox']->value,'nPage'=>$_smarty_tpl->tpl_vars['nPage']->value,'position'=>$_smarty_tpl->tpl_vars['direction']->value,'borderBottom'=>$_smarty_tpl->tpl_vars['oContainerBox']->last,'disabled'=>$_smarty_tpl->tpl_vars['disabled']->value), 0, true);
?>
                                        <?php
$_smarty_tpl->tpl_vars['oContainerBox'] = $__foreach_oContainerBox_16_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/box_single.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('oBox'=>$_smarty_tpl->tpl_vars['oBox']->value,'nPage'=>$_smarty_tpl->tpl_vars['nPage']->value,'position'=>$_smarty_tpl->tpl_vars['direction']->value,'disabled'=>$_smarty_tpl->tpl_vars['disabled']->value), 0, true);
?>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-header py-1">
                        <input type="hidden" name="position" value="<?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
" />
                        <input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['nPage']->value;?>
" />
                        <input type="hidden" name="action" value="resort" />
                        <div class="row">
                            <div class="ml-auto col-sm-6 col-xl-auto ">
                                <button type="submit" value="aktualisieren" class="btn btn-primary btn-block">
                                    <?php echo __('saveWithIcon');?>

                                </button>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert">
                        <?php echo smarty_modifier_replace(__('noBoxesAvailableFor'),'%s',$_smarty_tpl->tpl_vars['directionName']->value);?>

                    </div>
                <?php }?>
                </div>
            </form>
            <div class="card-footer mb-5">
                <form name="newBox_<?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post" class="form-horizontal">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="newBox_<?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
"><?php echo __('new');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select id="newBox_<?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
" name="item" class="custom-select">
                                <option value="" selected="selected"><?php echo __('pleaseSelect');?>
</option>
                                <optgroup label="Container">
                                    <option value="0"><?php echo __('newContainer');?>
</option>
                                </optgroup>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oVorlagen_arr']->value, 'oVorlagen');
$_smarty_tpl->tpl_vars['oVorlagen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oVorlagen']->value) {
$_smarty_tpl->tpl_vars['oVorlagen']->do_else = false;
?>
                                    <optgroup label="<?php echo $_smarty_tpl->tpl_vars['oVorlagen']->value->cName;?>
">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oVorlagen']->value->oVorlage_arr, 'oVorlage');
$_smarty_tpl->tpl_vars['oVorlage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oVorlage']->value) {
$_smarty_tpl->tpl_vars['oVorlage']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['oVorlage']->value->kBoxvorlage;?>
"><?php echo $_smarty_tpl->tpl_vars['oVorlage']->value->cName;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </optgroup>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="container_<?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
"><?php echo __('inContainer');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select id="container_<?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
" name="container" class="custom-select">
                                <option value="0">Standard</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oContainer_arr']->value, 'oContainer');
$_smarty_tpl->tpl_vars['oContainer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oContainer']->value) {
$_smarty_tpl->tpl_vars['oContainer']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['oContainer']->value->kBox;?>
">Container #<?php echo $_smarty_tpl->tpl_vars['oContainer']->value->kBox;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right"></label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <button type="submit" value="einfügen" class="btn btn-primary">
                                <i class="fa fa-level-down"></i> <?php echo __('insert');?>

                            </button>
                        </div>
                    </div>
                    <input type="hidden" name="position" value="<?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
" />
                    <input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['nPage']->value;?>
" />
                    <input type="hidden" name="action" value="new" />
                </form>
            </div><!-- .card-footer -->
        </div><!-- .boxContainer.panel -->
    </div><!-- .boxCenter -->
<?php
}}
/*/ smarty_template_function_containerSection_8959922867a34c4e673077_78280823 */
}
