<?php
/* Smarty version 4.5.4, created on 2025-02-05 13:47:42
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/vergleichsliste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a35dee19fc36_50723588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acf9fac15ad1137af179c7709f24cdcc8f877245' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/vergleichsliste.tpl',
      1 => 1738748273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 2,
    'file:tpl_inc/config_section.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67a35dee19fc36_50723588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('configureComparelist'),'cBeschreibung'=>__('configureComparelistDesc'),'cDokuURL'=>__('configureComparelistURL')), 0, false);
?>
<div id="content">
    <div class="tabs">
        <nav class="tabs-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'letztenvergleiche') {?> active<?php }?>" data-toggle="tab" role="tab" href="#letztenvergleiche">
                        <?php echo __('last20Compares');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'topartikel') {?> active<?php }?>" data-toggle="tab" role="tab" href="#topartikel">
                        <?php echo __('topCompareProducts');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'einstellungen') {?> active<?php }?>" data-toggle="tab" role="tab" href="#einstellungen">
                        <?php echo __('compareSettings');?>

                    </a>
                </li>
            </ul>
        </nav>
        <div class="tab-content">
            <div id="letztenvergleiche" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'letztenvergleiche') {?> active show<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['Letzten20Vergleiche']->value && count($_smarty_tpl->tpl_vars['Letzten20Vergleiche']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'cAnchor'=>'letztenvergleiche'), 0, false);
?>
                    <div class="settings table-responsive">
                        <table class="table table-striped table-align-top">
                            <thead>
                                <tr>
                                    <th class="th-1 text-center"><?php echo __('compareID');?>
</th>
                                    <th class="text-left"><?php echo __('compareProducts');?>
</th>
                                    <th class="th-3 text-center"><?php echo __('compareDate');?>
</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Letzten20Vergleiche']->value, 'oVergleichsliste20');
$_smarty_tpl->tpl_vars['oVergleichsliste20']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oVergleichsliste20']->value) {
$_smarty_tpl->tpl_vars['oVergleichsliste20']->do_else = false;
?>
                                <tr>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oVergleichsliste20']->value->kVergleichsliste;?>
</td>
                                    <td class="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oVergleichsliste20']->value->oLetzten20VergleichslistePos_arr, 'oVergleichslistePos20', true);
$_smarty_tpl->tpl_vars['oVergleichslistePos20']->iteration = 0;
$_smarty_tpl->tpl_vars['oVergleichslistePos20']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oVergleichslistePos20']->value) {
$_smarty_tpl->tpl_vars['oVergleichslistePos20']->do_else = false;
$_smarty_tpl->tpl_vars['oVergleichslistePos20']->iteration++;
$_smarty_tpl->tpl_vars['oVergleichslistePos20']->last = $_smarty_tpl->tpl_vars['oVergleichslistePos20']->iteration === $_smarty_tpl->tpl_vars['oVergleichslistePos20']->total;
$__foreach_oVergleichslistePos20_1_saved = $_smarty_tpl->tpl_vars['oVergleichslistePos20'];
?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/?a=<?php echo $_smarty_tpl->tpl_vars['oVergleichslistePos20']->value->kArtikel;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['oVergleichslistePos20']->value->cArtikelName;?>
</a><?php if (!$_smarty_tpl->tpl_vars['oVergleichslistePos20']->last) {
}?>
                                            <br />
                                        <?php
$_smarty_tpl->tpl_vars['oVergleichslistePos20'] = $__foreach_oVergleichslistePos20_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oVergleichsliste20']->value->Datum;?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'cAnchor'=>'letztenvergleiche','isBottom'=>true), 0, true);
?>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="topartikel" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'topartikel') {?> active show<?php }?>">
                <div>
                    <form id="postzeitfilter" name="postzeitfilter" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input type="hidden" name="zeitfilter" value="1" />
                        <input type="hidden" name="tab" value="topartikel" />
                        <div class="form-row">
                            <label class="col-sm-auto col-form-label" for="nZeitFilter"><?php echo __('compareTimeFilter');?>
:</label>
                            <div class="col-sm-auto mb-3">
                                <select class="custom-select" id="nZeitFilter" name="nZeitFilter" onchange="document.postzeitfilter.submit();">
                                    <option value="1"<?php if ((isset($_SESSION['Vergleichsliste']->nZeitFilter)) && $_SESSION['Vergleichsliste']->nZeitFilter == 1) {?> selected<?php }?>>
                                        <?php echo __('last');?>
 24 <?php echo __('hours');?>

                                    </option>
                                    <option value="7"<?php if ((isset($_SESSION['Vergleichsliste']->nZeitFilter)) && $_SESSION['Vergleichsliste']->nZeitFilter == 7) {?> selected<?php }?>>
                                        <?php echo __('last');?>
 7 <?php echo __('days');?>

                                    </option>
                                    <option value="30"<?php if ((isset($_SESSION['Vergleichsliste']->nZeitFilter)) && $_SESSION['Vergleichsliste']->nZeitFilter == 30) {?> selected<?php }?>>
                                        <?php echo __('last');?>
 30 <?php echo __('days');?>

                                    </option>
                                    <option value="365"<?php if ((isset($_SESSION['Vergleichsliste']->nZeitFilter)) && $_SESSION['Vergleichsliste']->nZeitFilter == 365) {?> selected<?php }?>>
                                        <?php echo __('lastYear');?>

                                    </option>
                                </select>
                            </div>
                            <label class="col-sm-auto col-form-label" for="nAnzahl"><?php echo __('compareTopCount');?>
:</label>
                            <div class="col-sm-auto mb-3 min-w-sm">
                                <select class="custom-select" id="nAnzahl" name="nAnzahl" onchange="document.postzeitfilter.submit();">
                                    <option value="10"<?php if ((isset($_SESSION['Vergleichsliste']->nAnzahl)) && $_SESSION['Vergleichsliste']->nAnzahl == 10) {?> selected<?php }?>>
                                        10
                                    </option>
                                    <option value="20"<?php if ((isset($_SESSION['Vergleichsliste']->nAnzahl)) && $_SESSION['Vergleichsliste']->nAnzahl == 20) {?> selected<?php }?>>
                                        20
                                    </option>
                                    <option value="50"<?php if ((isset($_SESSION['Vergleichsliste']->nAnzahl)) && $_SESSION['Vergleichsliste']->nAnzahl == 50) {?> selected<?php }?>>
                                        50
                                    </option>
                                    <option value="100"<?php if ((isset($_SESSION['Vergleichsliste']->nAnzahl)) && $_SESSION['Vergleichsliste']->nAnzahl == 100) {?> selected<?php }?>>
                                        100
                                    </option>
                                    <option value="-1"<?php if ((isset($_SESSION['Vergleichsliste']->nAnzahl)) && $_SESSION['Vergleichsliste']->nAnzahl == -1) {?> selected<?php }?>>
                                        <?php echo __('all');?>

                                    </option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <hr class="mb-3">
                </div>
                <div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['TopVergleiche']->value)) && count($_smarty_tpl->tpl_vars['TopVergleiche']->value) > 0) {?>
                        <div class="settings table-responsive">
                            <table class="bottom table table-striped table-align-top">
                                <thead>
                                    <tr>
                                        <th class="text-left"><?php echo __('compareProduct');?>
</th>
                                        <th class="th-2 text-center"><?php echo __('compareCount');?>
</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TopVergleiche']->value, 'oVergleichslistePosTop');
$_smarty_tpl->tpl_vars['oVergleichslistePosTop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oVergleichslistePosTop']->value) {
$_smarty_tpl->tpl_vars['oVergleichslistePosTop']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/?a=<?php echo $_smarty_tpl->tpl_vars['oVergleichslistePosTop']->value->kArtikel;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['oVergleichslistePosTop']->value->cArtikelName;?>
</a>
                                        </td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oVergleichslistePosTop']->value->nAnzahl;?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
                    <?php } else { ?>
                        <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                    <?php }?>
                </div>
            </div>
            <div id="einstellungen" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'einstellungen') {?> active show<?php }?>">
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'einstellen','action'=>($_smarty_tpl->tpl_vars['adminURL']->value).($_smarty_tpl->tpl_vars['route']->value),'buttonCaption'=>__('saveWithIcon'),'title'=>__('settings'),'tab'=>'einstellungen'), 0, false);
?>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
