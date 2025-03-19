<?php
/* Smarty version 4.5.4, created on 2025-02-05 13:24:24
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/bewertung_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a35878ec1905_94918590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff25c367995576de5eb800c760a7946ec947e943' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/bewertung_uebersicht.tpl',
      1 => 1738748473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/language_switcher.tpl' => 1,
    'file:tpl_inc/csv_export_btn.tpl' => 1,
    'file:tpl_inc/csv_import_btn.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 4,
    'file:tpl_inc/config_section.tpl' => 1,
  ),
),false)) {
function content_67a35878ec1905_94918590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('votesystem'),'cBeschreibung'=>__('votesystemDesc'),'cDokuURL'=>__('votesystemURL')), 0, false);
?>
<div id="content">
    <div class="card">
        <div class="card-body">
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/language_switcher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>($_smarty_tpl->tpl_vars['adminURL']->value).($_smarty_tpl->tpl_vars['route']->value)), 0, false);
?>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 col-xl-auto">
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/csv_export_btn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('exporterId'=>'exportRatings'), 0, false);
?>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/csv_import_btn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('importerId'=>'importRatings'), 0, false);
?>
                </div>
            </div>
        </div>
    </div>

    <div class="tabs">
        <nav class="tabs-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'freischalten') {?> active<?php }?>" data-toggle="tab" role="tab" href="#freischalten">
                        <?php echo __('ratingsInaktive');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'letzten50') {?> active<?php }?>" data-toggle="tab" role="tab" href="#letzten50">
                        <?php echo __('ratingLast50');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'artikelbewertung') {?> active<?php }?>" data-toggle="tab" role="tab" href="#artikelbewertung">
                        <?php echo __('ratingForProduct');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'einstellungen') {?> active<?php }?>" data-toggle="tab" role="tab" href="#einstellungen">
                        <?php echo __('settings');?>

                    </a>
                </li>
            </ul>
        </nav>
        <div class="tab-content">
            <div id="freischalten" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'freischalten') {?> active show<?php }?>">
                <?php if (count($_smarty_tpl->tpl_vars['inactiveReviews']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiInaktiv']->value,'cAnchor'=>'freischalten'), 0, false);
?>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input type="hidden" name="bewertung_nicht_aktiv" value="1" />
                        <input type="hidden" name="tab" value="freischalten" />
                        <div>
                            <div class="subheading1"><?php echo __('ratingsInaktive');?>
</div>
                            <hr class="mb-3">
                            <div class="table-responsive">
                                <table  class="table table-striped table-align-top">
                                    <thead>
                                    <tr>
                                        <th class="check">&nbsp;</th>
                                        <th class="text-left"><?php echo __('productName');?>
</th>
                                        <th class="text-left"><?php echo __('customerName');?>
</th>
                                        <th class="text-left"><?php echo __('ratingText');?>
</th>
                                        <th class="th-5 text-center"><?php echo __('ratingStars');?>
</th>
                                        <th class="th-6 text-center"><?php echo __('date');?>
</th>
                                        <th class="th-7 text-center">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inactiveReviews']->value, 'review');
$_smarty_tpl->tpl_vars['review']->index = -1;
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
$_smarty_tpl->tpl_vars['review']->index++;
$__foreach_review_0_saved = $_smarty_tpl->tpl_vars['review'];
?>
                                            <tr>
                                                <td class="check">
                                                    <input type="hidden" name="kArtikel[<?php echo $_smarty_tpl->tpl_vars['review']->index;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->kArtikel;?>
"/>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" name="kBewertung[<?php echo $_smarty_tpl->tpl_vars['review']->index;?>
]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
" id="inactive-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
" />
                                                        <label class="custom-control-label" for="inactive-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label for="inactive-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value->ArtikelName;?>
</label>
                                                    &nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/?a=<?php echo $_smarty_tpl->tpl_vars['review']->value->kArtikel;?>
" target="_blank"><i class="fas fa fa-external-link"></i></a>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['review']->value->cName;?>
.</td>
                                                <td><b><?php echo $_smarty_tpl->tpl_vars['review']->value->cTitel;?>
</b><br /><?php echo $_smarty_tpl->tpl_vars['review']->value->cText;?>
</td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['review']->value->nSterne;?>
</td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['review']->value->Datum;?>
</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?a=editieren&kBewertung=<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
&tab=freischalten&token=<?php echo $_SESSION['jtl_token'];?>
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
$_smarty_tpl->tpl_vars['review'] = $__foreach_review_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer save-wrapper">
                                <div class="row">
                                    <div class="col-sm-4 col-xl-auto text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS" type="checkbox" onclick="AllMessages(this.form);">
                                            <label class="custom-control-label" for="ALLMSGS"><?php echo __('globalSelectAll');?>
</label>
                                        </div>
                                    </div>
                                    <div class="ml-auto col-sm-4 col-xl-auto">
                                        <button name="action" type="submit" value="delete" class="btn btn-danger btn-block">
                                            <i class="fas fa-trash-alt"></i> <?php echo __('delete');?>

                                        </button>
                                    </div>
                                    <div class="col-sm-4 col-xl-auto">
                                        <button name="action" type="submit" value="activate" class="btn btn-primary btn-block">
                                            <i class="fa fa-thumbs-up"></i> <?php echo __('activate');?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiInaktiv']->value,'cAnchor'=>'freischalten','isBottom'=>true), 0, true);
?>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="letzten50" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'letzten50') {?> active show<?php }?>">
                <?php if (count($_smarty_tpl->tpl_vars['activeReviews']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiAktiv']->value,'cAnchor'=>'letzten50'), 0, true);
?>
                    <form name="letzten50" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input type="hidden" name="bewertung_aktiv" value="1" />
                        <input type="hidden" name="tab" value="letzten50" />
                        <div>
                            <div class="subheading1"><?php echo __('ratingLast50');?>
</div>
                            <hr class="mb-3">
                            <div class="table-responsive">
                                <table class="table table-striped table-align-top">
                                    <thead>
                                    <tr>
                                        <th class="check">&nbsp;</th>
                                        <th class="text-left"><?php echo __('productName');?>
</th>
                                        <th class="text-left"><?php echo __('customerName');?>
</th>
                                        <th class="text-left"><?php echo __('ratingText');?>
</th>
                                        <th class="th-5 text-center"><?php echo __('ratingStars');?>
</th>
                                        <th class="th-6 text-center"><?php echo __('date');?>
</th>
                                        <th class="th-7 text-center min-w-sm"><?php echo __('actions');?>
</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeReviews']->value, 'review');
$_smarty_tpl->tpl_vars['review']->index = -1;
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
$_smarty_tpl->tpl_vars['review']->index++;
$__foreach_review_1_saved = $_smarty_tpl->tpl_vars['review'];
?>
                                        <tr>
                                            <td class="check">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" name="kBewertung[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
" id="l50-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
">
                                                    <label class="custom-control-label" for="l50-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
"></label>
                                                </div>
                                                <input type="hidden" name="kArtikel[]" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->kArtikel;?>
">
                                            </td>
                                            <td>
                                                <label for="l50-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value->ArtikelName;?>
</label>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['review']->value->cName;?>
</td>
                                            <td>
                                                <strong><?php echo $_smarty_tpl->tpl_vars['review']->value->cTitel;?>
</strong><br>
                                                <?php echo $_smarty_tpl->tpl_vars['review']->value->cText;?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['review']->value->cAntwort)) {?>
                                                    <blockquote class="review-reply">
                                                        <strong><?php echo __('ratingReply');?>
</strong><br>
                                                        <?php echo $_smarty_tpl->tpl_vars['review']->value->cAntwort;?>

                                                    </blockquote>
                                                <?php }?>
                                            </td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['review']->value->nSterne;?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['review']->value->Datum;?>
</td>
                                            <td class="text-center">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['review']->value->cAntwort)) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?a=delreply&kBewertung=<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
&tab=letzten50&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                       class="btn btn-link px-2 delete-confirm"
                                                       title="<?php echo __('removeReply');?>
"
                                                       data-toggle="tooltip"
                                                       data-modal-body="<?php echo __('removeReply');?>
 | <?php echo $_smarty_tpl->tpl_vars['review']->value->ArtikelName;?>
">
                                                        <span class="icon-hover">
                                                            <span class="fal fa-trash-alt"></span>
                                                            <span class="fas fa-trash-alt"></span>
                                                        </span>
                                                    </a>
                                                <?php }?>
                                                <a class="btn btn-link px-2"
                                                   href="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/?a=<?php echo $_smarty_tpl->tpl_vars['review']->value->kArtikel;?>
"
                                                   target="_blank"
                                                   title="<?php echo __('linkItemShop');?>
"
                                                   data-toggle="tooltip">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-external-link"></span>
                                                        <span class="fas fa-external-link"></span>
                                                    </span>
                                                </a>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?a=editieren&kBewertung=<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
&tab=letzten50&token=<?php echo $_SESSION['jtl_token'];?>
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
                                            </td>
                                        </tr>
                                    <?php
$_smarty_tpl->tpl_vars['review'] = $__foreach_review_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer save-wrapper">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-auto text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS3" type="checkbox" onclick="AllMessages(this.form);">
                                            <label class="custom-control-label" for="ALLMSGS3"><?php echo __('globalSelectAll');?>
</label>
                                        </div>
                                    </div>
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="action" type="submit" value="delete" class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i> <?php echo __('deleteSelected');?>
</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiAktiv']->value,'cAnchor'=>'letzten50','isBottom'=>true), 0, true);
?>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="artikelbewertung" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'artikelbewertung') {?> active show<?php }?>">
                <form name="artikelbewertung" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                    <div class="mb-3">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <div class="form-row">
                            <label class="col-sm-auto col-form-label" for="content"><?php echo __('ratingcArtNr');?>
:</label>
                            <input type="hidden" name="bewertung_aktiv" value="1" />
                            <input type="hidden" name="tab" value="artikelbewertung" />
                            <div class="col-sm-auto mb-3">
                                <input class="form-control" name="cArtNr" type="text" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['cArtNr']->value ?? null)===null||$tmp==='' ? '' : $tmp);?>
" />
                            </div>
                            <span class="col-sm-auto">
                                <button name="action" type="submit" value="search" class="btn btn-primary btn-block mb-3">
                                    <i class="fal fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <?php if ((isset($_smarty_tpl->tpl_vars['cArtNr']->value)) && strlen((string) $_smarty_tpl->tpl_vars['cArtNr']->value) > 0) {?>
                            <div class="alert alert-info"><?php echo __('ratingSearchedFor');?>
: <?php echo $_smarty_tpl->tpl_vars['cArtNr']->value;?>
</div>
                        <?php }?>
                        <?php if (!((isset($_smarty_tpl->tpl_vars['filteredReviews']->value)) && count($_smarty_tpl->tpl_vars['filteredReviews']->value) > 0)) {?>
                            <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                        <?php }?>
                    </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['filteredReviews']->value)) && count($_smarty_tpl->tpl_vars['filteredReviews']->value) > 0) {?>
                        <div>
                            <div class="subheading1"><?php echo $_smarty_tpl->tpl_vars['cArtNr']->value;?>
</div>
                            <hr class="mb-3">
                            <div class="table-responsive">
                                <table class="table table-striped table-align-top">
                                    <thead>
                                    <tr>
                                        <th class="th-1">&nbsp;</th>
                                        <th class="text-left"><?php echo __('productName');?>
</th>
                                        <th class="text-left"><?php echo __('customerName');?>
</th>
                                        <th class="text-left"><?php echo __('ratingText');?>
</th>
                                        <th class="th-5 text-center"><?php echo __('ratingStars');?>
</th>
                                        <th class="th-6 text-center"><?php echo __('date');?>
</th>
                                        <th class="th-7 text-center">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filteredReviews']->value, 'review');
$_smarty_tpl->tpl_vars['review']->index = -1;
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
$_smarty_tpl->tpl_vars['review']->index++;
$__foreach_review_2_saved = $_smarty_tpl->tpl_vars['review'];
?>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" name="kBewertung[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
" id="filtered-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
">
                                                    <label class="custom-control-label" for="filtered-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
"></label>
                                                </div>
                                                <input type="hidden" name="kArtikel[]" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->kArtikel;?>
">
                                            </td>
                                            <td>
                                                <label for="filtered-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value->ArtikelName;?>
</label>
                                                &nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/?a=<?php echo $_smarty_tpl->tpl_vars['review']->value->kArtikel;?>
" target="_blank"><i class="fas fa fa-external-link"></i></a>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['review']->value->cName;?>
.</td>
                                            <td><b><?php echo $_smarty_tpl->tpl_vars['review']->value->cTitel;?>
</b><br /><?php echo $_smarty_tpl->tpl_vars['review']->value->cText;?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['review']->value->nSterne;?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['review']->value->Datum;?>
</td>
                                            <td class="text-center">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?a=editieren&kBewertung=<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
&tab=artikelbewertung"
                                                   class="btn btn-link px-2"
                                                   title="<?php echo __('modify');?>
"
                                                   data-toggle="tooltip">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-edit"></span>
                                                        <span class="fas fa-edit"></span>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
$_smarty_tpl->tpl_vars['review'] = $__foreach_review_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer save-wrapper">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-auto text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS2" type="checkbox" onclick="AllMessages(this.form);">
                                            <label class="custom-control-label" for="ALLMSGS2"><?php echo __('globalSelectAll');?>
</label>
                                        </div>
                                    </div>
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="loeschen" type="submit" class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i> <?php echo __('delete');?>
</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </form>
            </div>
            <div id="einstellungen" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'einstellungen') {?> active show<?php }?>">
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'einstellen','action'=>($_smarty_tpl->tpl_vars['adminURL']->value).($_smarty_tpl->tpl_vars['route']->value),'buttonCaption'=>__('saveWithIcon'),'title'=>__('settings'),'tab'=>'einstellungen'), 0, false);
?>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value->getSubsections(), 'subsection');
$_smarty_tpl->tpl_vars['subsection']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subsection']->value) {
$_smarty_tpl->tpl_vars['subsection']->do_else = false;
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subsection']->value->getItems(), 'config');
$_smarty_tpl->tpl_vars['config']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['config']->value) {
$_smarty_tpl->tpl_vars['config']->do_else = false;
?>
                <?php if (strpos($_smarty_tpl->tpl_vars['config']->value->getValueName(),'_guthaben')) {?>
                    ioCall(
                        'getCurrencyConversion',
                        [0, $('#<?php echo $_smarty_tpl->tpl_vars['config']->value->getValueName();?>
').val(), 'EinstellungAjax_<?php echo $_smarty_tpl->tpl_vars['config']->value->getValueName();?>
'],
                        undefined,
                        undefined,
                        undefined,
                        true
                    );
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php }
}
