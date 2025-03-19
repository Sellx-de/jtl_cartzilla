<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:31:28
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/kupons_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab27000f5003_62164145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72b52e4e11ae883d608d6484d3baaf76a0db0d3d' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/kupons_uebersicht.tpl',
      1 => 1738748467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/sortcontrols.tpl' => 1,
    'file:tpl_inc/filtertools.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 2,
    'file:tpl_inc/csv_export_btn.tpl' => 1,
    'file:tpl_inc/csv_import_btn.tpl' => 1,
  ),
),false)) {
function content_67ab27000f5003_62164145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'kupons_uebersicht_tab' => 
  array (
    'compiled_filepath' => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates_c/72b52e4e11ae883d608d6484d3baaf76a0db0d3d_0.file.kupons_uebersicht.tpl.php',
    'uid' => '72b52e4e11ae883d608d6484d3baaf76a0db0d3d',
    'call_name' => 'smarty_template_function_kupons_uebersicht_tab_127342222967ab2700073417_53946707',
  ),
));
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('coupons'),'cBeschreibung'=>__('couponsDesc'),'cDokuURL'=>__('couponsURL')), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/sortcontrols.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div id="content">
    <div class="tabs">
        <nav class="tabs-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value === $_smarty_tpl->tpl_vars['couponTypes']->value['standard']) {?> active<?php }?>" data-toggle="tab" role="tab" href="#<?php echo $_smarty_tpl->tpl_vars['couponTypes']->value['standard'];?>
" aria-expanded="false">
                        <?php echo __('standardCoupon');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value === $_smarty_tpl->tpl_vars['couponTypes']->value['shipping']) {?> active<?php }?>" data-toggle="tab" role="tab" href="#<?php echo $_smarty_tpl->tpl_vars['couponTypes']->value['shipping'];?>
" aria-expanded="false">
                        <?php echo __('shippingCoupon');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value === $_smarty_tpl->tpl_vars['couponTypes']->value['newCustomer']) {?> active<?php }?>" data-toggle="tab" role="tab" href="#<?php echo $_smarty_tpl->tpl_vars['couponTypes']->value['newCustomer'];?>
" aria-expanded="false">
                        <?php echo __('newCustomerCoupon');?>

                    </a>
                </li>
            </ul>
        </nav>
        <div class="tab-content">
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'kupons_uebersicht_tab', array('cKuponTyp'=>$_smarty_tpl->tpl_vars['couponTypes']->value['standard'],'cKuponTypName'=>'standardCoupon','oKupon_arr'=>$_smarty_tpl->tpl_vars['oKuponStandard_arr']->value,'nKuponCount'=>$_smarty_tpl->tpl_vars['nKuponStandardCount']->value,'pagination'=>$_smarty_tpl->tpl_vars['oPaginationStandard']->value,'oFilter'=>$_smarty_tpl->tpl_vars['oFilterStandard']->value), true);?>

            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'kupons_uebersicht_tab', array('cKuponTyp'=>$_smarty_tpl->tpl_vars['couponTypes']->value['shipping'],'cKuponTypName'=>'shippingCoupon','oKupon_arr'=>$_smarty_tpl->tpl_vars['oKuponVersandkupon_arr']->value,'nKuponCount'=>$_smarty_tpl->tpl_vars['nKuponVersandCount']->value,'pagination'=>$_smarty_tpl->tpl_vars['oPaginationVersandkupon']->value,'oFilter'=>$_smarty_tpl->tpl_vars['oFilterVersand']->value), true);?>

            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'kupons_uebersicht_tab', array('cKuponTyp'=>$_smarty_tpl->tpl_vars['couponTypes']->value['newCustomer'],'cKuponTypName'=>'newCustomerCoupon','oKupon_arr'=>$_smarty_tpl->tpl_vars['oKuponNeukundenkupon_arr']->value,'nKuponCount'=>$_smarty_tpl->tpl_vars['nKuponNeukundenCount']->value,'pagination'=>$_smarty_tpl->tpl_vars['oPaginationNeukundenkupon']->value,'oFilter'=>$_smarty_tpl->tpl_vars['oFilterNeukunden']->value), true);?>

        </div>
    </div>
</div>
<?php }
/* smarty_template_function_kupons_uebersicht_tab_127342222967ab2700073417_53946707 */
if (!function_exists('smarty_template_function_kupons_uebersicht_tab_127342222967ab2700073417_53946707')) {
function smarty_template_function_kupons_uebersicht_tab_127342222967ab2700073417_53946707(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <div id="<?php echo $_smarty_tpl->tpl_vars['cKuponTyp']->value;?>
" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['tab']->value === $_smarty_tpl->tpl_vars['cKuponTyp']->value) {?> active show<?php }?>">
        <div>
            <?php if ($_smarty_tpl->tpl_vars['nKuponCount']->value > 0) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/filtertools.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('oFilter'=>$_smarty_tpl->tpl_vars['oFilter']->value,'cParam_arr'=>array('tab'=>$_smarty_tpl->tpl_vars['cKuponTyp']->value)), 0, false);
?>
            <?php }?>
            <?php if (count($_smarty_tpl->tpl_vars['oKupon_arr']->value) > 0) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'cParam_arr'=>array('tab'=>$_smarty_tpl->tpl_vars['cKuponTyp']->value)), 0, false);
?>
            <?php }?>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                <input type="hidden" name="cKuponTyp" id="cKuponTyp_<?php echo $_smarty_tpl->tpl_vars['cKuponTyp']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cKuponTyp']->value;?>
">
                <?php if (count($_smarty_tpl->tpl_vars['oKupon_arr']->value) > 0) {?>
                    <div class="table-responsive">
                        <table class="list table table-align-top">
                            <thead>
                                <tr>
                                    <th title="<?php echo __('active');?>
"></th>
                                    <th><?php echo __('name');?>
 <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'sortControls', array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'nSortBy'=>0), true);?>
</th>
                                    <?php if ($_smarty_tpl->tpl_vars['cKuponTyp']->value === $_smarty_tpl->tpl_vars['couponTypes']->value['standard'] || $_smarty_tpl->tpl_vars['cKuponTyp']->value === $_smarty_tpl->tpl_vars['couponTypes']->value['newCustomer']) {?><th><?php echo __('value');?>
</th><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['cKuponTyp']->value === $_smarty_tpl->tpl_vars['couponTypes']->value['standard'] || $_smarty_tpl->tpl_vars['cKuponTyp']->value === $_smarty_tpl->tpl_vars['couponTypes']->value['shipping']) {?>
                                        <th><?php echo __('code');?>
 <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'sortControls', array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'nSortBy'=>1), true);?>
</th>
                                    <?php }?>
                                    <th class="text-center"><?php echo __('mbw');?>
</th>
                                    <th class="text-center"><?php echo __('curmaxusage');?>
 <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'sortControls', array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'nSortBy'=>2), true);?>
</th>
                                    <th><?php echo __('restrictions');?>
</th>
                                    <th><?php echo __('validityPeriod');?>
</th>
                                    <th><?php echo __('valid');?>
</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oKupon_arr']->value, 'oKupon');
$_smarty_tpl->tpl_vars['oKupon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oKupon']->value) {
$_smarty_tpl->tpl_vars['oKupon']->do_else = false;
?>
                                    <tr<?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cAktiv === 'N') {?> class="text-danger"<?php }?>>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" name="kKupon_arr[]" id="kupon-<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->kKupon;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->kKupon;?>
">
                                                <label class="custom-control-label" for="kupon-<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->kKupon;?>
"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <label for="kupon-<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->kKupon;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cName;?>

                                            </label>
                                        </td>
                                        <?php if ($_smarty_tpl->tpl_vars['cKuponTyp']->value === $_smarty_tpl->tpl_vars['couponTypes']->value['standard'] || $_smarty_tpl->tpl_vars['cKuponTyp']->value === $_smarty_tpl->tpl_vars['couponTypes']->value['newCustomer']) {?>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cWertTyp === 'festpreis') {?>
                                                    <span data-toggle="tooltip" data-placement="right" data-html="true"
                                                          title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getCurrencyConversionSmarty'][0], array( array('fPreisBrutto'=>$_smarty_tpl->tpl_vars['oKupon']->value->fWert),$_smarty_tpl ) );?>
'>
                                                        <?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cLocalizedWert;?>

                                                    </span>
                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['oKupon']->value->fWert;?>
 %
                                                <?php }?>
                                            </td>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['cKuponTyp']->value === $_smarty_tpl->tpl_vars['couponTypes']->value['standard'] || $_smarty_tpl->tpl_vars['cKuponTyp']->value === $_smarty_tpl->tpl_vars['couponTypes']->value['shipping']) {?><td><?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cCode;?>
</td><?php }?>
                                        <td class="text-center">
                                            <span data-toggle="tooltip" data-placement="right" data-html="true"
                                                  title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getCurrencyConversionSmarty'][0], array( array('fPreisBrutto'=>$_smarty_tpl->tpl_vars['oKupon']->value->fMindestbestellwert),$_smarty_tpl ) );?>
'>
                                                <?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cLocalizedMBW;?>

                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $_smarty_tpl->tpl_vars['oKupon']->value->nVerwendungenBisher;?>

                                            <?php if ($_smarty_tpl->tpl_vars['oKupon']->value->nVerwendungen > 0) {?>
                                            <?php echo __('of');?>
 <?php echo $_smarty_tpl->tpl_vars['oKupon']->value->nVerwendungen;?>
</td>
                                            <?php }?>
                                        <td>
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['oKupon']->value->cKundengruppe;
$_prefixVariable1 = ob_get_clean();
if (!empty($_prefixVariable1)) {?>
                                                <?php echo __('only');?>
 <?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cKundengruppe;?>
<br>
                                            <?php }?>
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['oKupon']->value->cArtikelInfo;
$_prefixVariable2 = ob_get_clean();
if (!empty($_prefixVariable2)) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cArtikelInfo;?>
 <?php echo __('products');?>
<br>
                                            <?php }?>
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['oKupon']->value->cHerstellerInfo;
$_prefixVariable3 = ob_get_clean();
if (!empty($_prefixVariable3)) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cHerstellerInfo;?>
 <?php echo __('manufacturers');?>
<br>
                                            <?php }?>
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['oKupon']->value->cKategorieInfo;
$_prefixVariable4 = ob_get_clean();
if (!empty($_prefixVariable4)) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cKategorieInfo;?>
 <?php echo __('categories');?>
<br>
                                            <?php }?>
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['oKupon']->value->cKundenInfo;
$_prefixVariable5 = ob_get_clean();
if (!empty($_prefixVariable5)) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cKundenInfo;?>
 <?php echo __('customers');?>
<br>
                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php echo __('from');?>
: <?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cGueltigAbShort;?>
<br>
                                            <?php echo __('to');?>
: <?php echo $_smarty_tpl->tpl_vars['oKupon']->value->cGueltigBisShort;?>

                                        </td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['oKupon']->value->cAktiv === 'N') {?>
                                                <i class="fal fa-times"></i>
                                            <?php } else { ?>
                                                <i class="fal fa-check"></i>
                                            <?php }?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?kKupon=<?php echo $_smarty_tpl->tpl_vars['oKupon']->value->kKupon;?>
&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                   class="btn btn-link px-2"
                                                   title="<?php echo __('modify');?>
"
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
                <?php } elseif ($_smarty_tpl->tpl_vars['nKuponCount']->value > 0) {?>
                    <div class="alert alert-info" role="alert"><?php echo __('noFilterResults');?>
</div>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert">
                        <?php echo __('emptySetMessage1');?>
 <?php echo __($_smarty_tpl->tpl_vars['cKuponTypName']->value);?>
 <?php echo __('emptySetMessage2');?>

                    </div>
                <?php }?>
                <div class="card-footer save-wrapper">
                    <div class="row">
                        <div class="col-sm-6 col-xl-auto text-left">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="ALLMSGS" id="ALLMSGS_<?php echo $_smarty_tpl->tpl_vars['cKuponTyp']->value;?>
" onclick="AllMessages(this.form);">
                                <label class="custom-control-label" for="ALLMSGS_<?php echo $_smarty_tpl->tpl_vars['cKuponTyp']->value;?>
"><?php echo __('globalSelectAll');?>
</label>
                            </div>
                        </div>
                        <?php if (count($_smarty_tpl->tpl_vars['oKupon_arr']->value) > 0) {?>
                            <div class="ml-auto col-sm-6 col-xl-auto">
                                <button type="submit" class="btn btn-danger btn-block" name="action" value="loeschen">
                                    <i class="fas fa-trash-alt"></i> <?php echo __('delete');?>

                                </button>
                            </div>
                            <div class="col-sm-6 col-xl-auto">
                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/csv_export_btn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('exporterId'=>$_smarty_tpl->tpl_vars['cKuponTyp']->value), 0, false);
?>
                            </div>
                        <?php }?>
                        <div class="<?php if (count($_smarty_tpl->tpl_vars['oKupon_arr']->value) === 0) {?>ml-auto<?php }?> col-sm-6 col-xl-auto">
                            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/csv_import_btn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('importerId'=>"kupon_".((string)$_smarty_tpl->tpl_vars['cKuponTyp']->value),'importerType'=>"kupon"), 0, false);
?>
                        </div>
                        <div class="col-sm-6 col-xl-auto">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?kKupon=0&cKuponTyp=<?php echo $_smarty_tpl->tpl_vars['cKuponTyp']->value;?>
&token=<?php echo $_SESSION['jtl_token'];?>
"
                               class="btn btn-primary btn-block" title="<?php echo __('modify');?>
">
                                <i class="fa fa-share"></i> <?php echo __(($_smarty_tpl->tpl_vars['cKuponTypName']->value).('Create'));?>

                            </a>
                        </div>
                    </div>
                </div>
            </form>
            <?php if (count($_smarty_tpl->tpl_vars['oKupon_arr']->value) > 0) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'cParam_arr'=>array('tab'=>$_smarty_tpl->tpl_vars['cKuponTyp']->value),'isBottom'=>true), 0, true);
?>
            <?php }?>
        </div>
    </div>
<?php
}}
/*/ smarty_template_function_kupons_uebersicht_tab_127342222967ab2700073417_53946707 */
}
