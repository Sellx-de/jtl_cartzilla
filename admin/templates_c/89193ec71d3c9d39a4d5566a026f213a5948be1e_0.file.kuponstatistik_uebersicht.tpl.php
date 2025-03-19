<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:31:41
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/kuponstatistik_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab270de49181_16148603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89193ec71d3c9d39a4d5566a026f213a5948be1e' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/kuponstatistik_uebersicht.tpl',
      1 => 1738748472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:snippets/daterange_picker.tpl' => 1,
  ),
),false)) {
function content_67ab270de49181_16148603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/includes/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('couponStatistic'),'cDokuURL'=>__('couponstatisticsURL')), 0, false);
?>
<div id="content">
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" class="form-inline">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <div class="row">
                        <div class="col-sm-6 col-xl-auto mb-3">
                            <div class="form-row">
                                <label class="col-sm-auto col-form-label" for="SelectFromDay"><?php echo __('fromUntilDate');?>
:</label>
                                <input type="hidden" name="formFilter" value="1" class="form-control"/>
                                <div class="col-sm-auto">
                                    <input type="text" size="21" name="daterange" class="form-control"/>
                                    <?php $_smarty_tpl->_subTemplateRender("file:snippets/daterange_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('datepickerID'=>'input[name="daterange"]','currentDate'=>((string)$_smarty_tpl->tpl_vars['startDate']->value)." - ".((string)$_smarty_tpl->tpl_vars['endDate']->value),'format'=>"YYYY-MM-DD",'separator'=>" - "), 0, false);
?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-auto mb-3">
                            <select id="kKupon" name="kKupon" class="combo custom-select">
                                <option value="-1"><?php echo __('all');?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coupons_arr']->value, 'coupon_arr');
$_smarty_tpl->tpl_vars['coupon_arr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['coupon_arr']->value) {
$_smarty_tpl->tpl_vars['coupon_arr']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['coupon_arr']->value['kKupon'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['coupon_arr']->value['aktiv'])) && $_smarty_tpl->tpl_vars['coupon_arr']->value['aktiv']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['coupon_arr']->value['cName'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="col-sm-6 col-xl-auto mb-3">
                            <button name="btnSubmit" type="submit" value="Filtern" class="btn btn-primary btn-block">
                                <span class="fal fa-filter"></span> <?php echo __('filtering');?>

                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td><?php echo __('countOrders');?>
:</td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['overview_arr']->value['nCountUsedCouponsOrder'];?>
</strong></td>
                    </tr>
                    <tr>
                        <td><?php echo __('countCustomers');?>
:</td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['overview_arr']->value['nCountCustomers'];?>
</strong></td>
                    </tr>
                    <tr>
                        <td><?php echo __('couponAmountAll');?>
:</td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['overview_arr']->value['nCouponAmountAll'];?>
</strong></td>
                    </tr>
                    <tr>
                        <td><?php echo __('shoppingCartAmountAll');?>
:</td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['overview_arr']->value['nShoppingCartAmountAll'];?>
</strong></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['usedCouponsOrder']->value) > 0) {?>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><?php echo __('coupon');?>
</th>
                            <th><?php echo __('customer');?>
</th>
                            <th class="text-center"><?php echo __('orderNumberShort');?>
</th>
                            <th class="text-center"><?php echo __('couponValue');?>
</th>
                            <th class="text-center"><?php echo __('orderValue');?>
</th>
                            <th><?php echo __('date');?>
</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usedCouponsOrder']->value, 'usedCouponOrder');
$_smarty_tpl->tpl_vars['usedCouponOrder']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usedCouponOrder']->value) {
$_smarty_tpl->tpl_vars['usedCouponOrder']->do_else = false;
?>
                            <tr>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['usedCouponOrder']->value['kKupon']) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?&kKupon=<?php echo $_smarty_tpl->tpl_vars['usedCouponOrder']->value['kKupon'];?>
&token=<?php echo $_SESSION['jtl_token'];?>
"><?php echo $_smarty_tpl->tpl_vars['usedCouponOrder']->value['cName'];?>
</a>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['usedCouponOrder']->value['cName'];?>

                                    <?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['usedCouponOrder']->value['cUserName'];?>
</td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['usedCouponOrder']->value['cBestellNr'];?>
</td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['usedCouponOrder']->value['nCouponValue'];?>
</td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['usedCouponOrder']->value['nShoppingCartAmount'];?>
</td>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['usedCouponOrder']->value['dErstellt'],'d.m.Y H:i:s');?>
</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#order_<?php echo $_smarty_tpl->tpl_vars['usedCouponOrder']->value['cBestellNr'];?>
">
                                            <span class="icon-hover">
                                                <span class="fal fa-info"></span>
                                                <span class="fas fa-info"></span>
                                            </span>
                                        </button>
                                    </div>

                                    <div class="modal fade bs-example-modal-lg" id="order_<?php echo $_smarty_tpl->tpl_vars['usedCouponOrder']->value['cBestellNr'];?>
" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <strong><?php echo __('order');?>
: </strong>
                                                    <span class="ml-2"><?php echo $_smarty_tpl->tpl_vars['usedCouponOrder']->value['cBestellNr'];?>
 (<?php echo $_smarty_tpl->tpl_vars['usedCouponOrder']->value['cUserName'];?>
)</span>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <i class="fal fa-times"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                            <tr>
                                                                <th><?php echo __('orderPosition');?>
</th>
                                                                <th><?php echo __('count');?>
</th>
                                                                <th><?php echo __('unitPrice');?>
</th>
                                                                <th><?php echo __('totalPrice');?>
</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usedCouponOrder']->value['cOrderPos_arr'], 'cOrderPos_arr');
$_smarty_tpl->tpl_vars['cOrderPos_arr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cOrderPos_arr']->value) {
$_smarty_tpl->tpl_vars['cOrderPos_arr']->do_else = false;
?>
                                                                <tr>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['cOrderPos_arr']->value['cName'];?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['cOrderPos_arr']->value['nAnzahl'];?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['cOrderPos_arr']->value['nPreis'];?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['cOrderPos_arr']->value['nGesamtPreis'];?>
</td>
                                                                </tr>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <td><?php echo __('totalAmount');?>
:</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['usedCouponOrder']->value['nShoppingCartAmount'];?>
</td>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php } else { ?>
        <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
    <?php }?>
</div>
<?php }
}
