<?php
/* Smarty version 4.5.4, created on 2025-02-05 13:24:39
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/newsletter_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3588719cd37_13599397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88ffdad8a594b4ed9c29385352373c55779ae387' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/newsletter_uebersicht.tpl',
      1 => 1738748465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/language_switcher.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 10,
    'file:tpl_inc/config_section.tpl' => 1,
  ),
),false)) {
function content_67a3588719cd37_13599397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('newsletteroverview'),'cBeschreibung'=>__('newsletterdesc'),'cDokuURL'=>__('newsletterURL')), 0, false);
?>
<div id="content">
    <div class="alert alert-warning" role="alert"">
        <?php echo __('newsletterWarning');?>

    </div>
    <div class="card">
        <div class="card-body">
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/language_switcher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>($_smarty_tpl->tpl_vars['adminURL']->value).($_smarty_tpl->tpl_vars['route']->value)), 0, false);
?>
        </div>
    </div>
    <div class="tabs">
        <nav class="tabs-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'inaktiveabonnenten') {?> active<?php }?>" data-toggle="tab" role="tab" href="#inaktiveabonnenten">
                        <?php echo __('newsletterSubscripterNotActive');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'alleabonnenten') {?> active<?php }?>" data-toggle="tab" role="tab" href="#alleabonnenten">
                        <?php echo __('newsletterAllSubscriber');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'neuerabonnenten') {?> active<?php }?>" data-toggle="tab" role="tab" href="#neuerabonnenten">
                        <?php echo __('newsletterNewSubscriber');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'newsletterqueue') {?> active<?php }?>" data-toggle="tab" role="tab" href="#newsletterqueue">
                        <?php echo __('newsletterqueue');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'newslettervorlagen') {?> active<?php }?>" data-toggle="tab" role="tab" href="#newslettervorlagen">
                        <?php echo __('newsletterdraft');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'newslettervorlagenstd') {?> active<?php }?>" data-toggle="tab" role="tab" href="#newslettervorlagenstd">
                        <?php echo __('newsletterdraftStd');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'newsletterhistory') {?> active<?php }?>" data-toggle="tab" role="tab" href="#newsletterhistory">
                        <?php echo __('newsletterhistory');?>

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
            <div id="inaktiveabonnenten" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'inaktiveabonnenten') {?> active show<?php }?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['oNewsletterEmpfaenger_arr']->value)) && count($_smarty_tpl->tpl_vars['oNewsletterEmpfaenger_arr']->value) > 0) {?>
                    <div class="search-toolbar mb-3">
                        <form name="suche" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                            <input type="hidden" name="inaktiveabonnenten" value="1" />
                            <input type="hidden" name="tab" value="inaktiveabonnenten" />
                            <?php if ((isset($_smarty_tpl->tpl_vars['cSucheInaktiv']->value)) && strlen((string) $_smarty_tpl->tpl_vars['cSucheInaktiv']->value) > 0) {?>
                                <input type="hidden" name="cSucheInaktiv" value="<?php echo $_smarty_tpl->tpl_vars['cSucheInaktiv']->value;?>
" />
                            <?php }?>
                            <div class="form-row">
                                <label class="col-sm-auto col-form-label" for="cSucheInaktiv"><?php echo __('newslettersubscriberSearch');?>
:</label>
                                <div class="col-sm-auto mb-3">
                                    <input class="form-control" id="cSucheInaktiv" name="cSucheInaktiv" type="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['cSucheInaktiv']->value)) && strlen((string) $_smarty_tpl->tpl_vars['cSucheInaktiv']->value) > 0) {
echo $_smarty_tpl->tpl_vars['cSucheInaktiv']->value;
}?>" />
                                </div>
                                <span class="col-sm-auto">
                                    <button name="submitInaktiveAbonnentenSuche" type="submit" class="btn btn-primary btn-block" value="<?php echo __('newsletterSearchBTN');?>
">
                                        <i class="fal fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiInaktiveAbos']->value,'cAnchor'=>'inaktiveabonnenten'), 0, false);
?>
                    <div id="newsletter-inactive-content">
                        <form name="inaktiveabonnentenForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                            <input type="hidden" name="inaktiveabonnenten" value="1" />
                            <input type="hidden" name="tab" value="inaktiveabonnenten" />
                            <?php if ((isset($_smarty_tpl->tpl_vars['cSucheInaktiv']->value)) && strlen((string) $_smarty_tpl->tpl_vars['cSucheInaktiv']->value) > 0) {?>
                                <input type="hidden" name="cSucheInaktiv" value="<?php echo $_smarty_tpl->tpl_vars['cSucheInaktiv']->value;?>
" />
                            <?php }?>
                            <div>
                                <div class="subheading1"><?php echo __('newsletterSubscripterNotActive');?>
</div>
                                <hr class="mb-3">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="th-1">&nbsp;</th>
                                                <th class="text-left"><?php echo __('firstName');?>
</th>
                                                <th class="text-left"><?php echo __('lastName');?>
</th>
                                                <th class="text-left"><?php echo __('customerGroup');?>
</th>
                                                <th class="text-left"><?php echo __('email');?>
</th>
                                                <th class="text-center"><?php echo __('newslettersubscriberdate');?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsletterEmpfaenger_arr']->value, 'oNewsletterEmpfaenger');
$_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value) {
$_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->do_else = false;
?>
                                            <tr>
                                                <td class="text-left">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" name="kNewsletterEmpfaenger[]" type="checkbox" id="newsletter-recipient-id-<?php echo $_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->kNewsletterEmpfaenger;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->kNewsletterEmpfaenger;?>
">
                                                        <label class="custom-control-label" for="newsletter-recipient-id-<?php echo $_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->kNewsletterEmpfaenger;?>
"></label>
                                                    </div>
                                                </td>
                                                <td class="text-left"><?php if ($_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->cVorname != '') {
echo $_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->cVorname;
} else {
echo $_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->newsVorname;
}?></td>
                                                <td class="text-left"><?php if ($_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->cNachname != '') {
echo $_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->cNachname;
} else {
echo $_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->newsNachname;
}?></td>
                                                <td class="text-left"><?php if ((isset($_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->cName)) && strlen((string) $_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->cName) > 0) {
echo $_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->cName;
} else {
echo __('NotAvailable');
}?></td>
                                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->cEmail;
if ($_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->nAktiv == 0) {?> *<?php }?></td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oNewsletterEmpfaenger']->value->Datum;?>
</td>
                                            </tr>
                                        <?php
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
                                            <button class="btn btn-danger btn-block" name="abonnentloeschenSubmit" type="submit" value="<?php echo __('delete');?>
">
                                                <i class="fas fa-trash-alt"></i> <?php echo __('marked');?>
 <?php echo __('delete');?>

                                            </button>
                                        </div>
                                        <div class="col-sm-6 col-xl-auto">
                                            <button name="abonnentfreischaltenSubmit" type="submit" value="<?php echo __('newsletterUnlock');?>
" class="btn btn-primary btn-block">
                                                <i class="fa fa-thumbs-up"></i> <?php echo __('newsletterUnlock');?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiInaktiveAbos']->value,'cAnchor'=>'inaktiveabonnenten','isBottom'=>true), 0, true);
?>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="alleabonnenten" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'alleabonnenten') {?> active show<?php }?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['oAbonnenten_arr']->value)) && count($_smarty_tpl->tpl_vars['oAbonnenten_arr']->value) > 0) {?>
                    <div class="search-toolbar mb-3">
                        <form name="suche" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                            <input type="hidden" name="Suche" value="1" />
                            <input type="hidden" name="tab" value="alleabonnenten" />
                            <?php if ((isset($_smarty_tpl->tpl_vars['cSucheAktiv']->value)) && strlen((string) $_smarty_tpl->tpl_vars['cSucheAktiv']->value) > 0) {?>
                                <input type="hidden" name="cSucheAktiv" value="<?php echo $_smarty_tpl->tpl_vars['cSucheAktiv']->value;?>
" />
                            <?php }?>
                            <div id="newsletter-all-search">
                                <div class="form-row">
                                    <label class="col-sm-auto col-form-label" for="cSucheAktiv"><?php echo __('newslettersubscriberSearch');?>
:</label>
                                    <div class="col-sm-auto mb-3">
                                        <input id="cSucheAktiv" name="cSucheAktiv" class="form-control" type="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['cSucheAktiv']->value)) && strlen((string) $_smarty_tpl->tpl_vars['cSucheAktiv']->value) > 0) {
echo $_smarty_tpl->tpl_vars['cSucheAktiv']->value;
}?>" />
                                    </div>
                                    <span class="col-sm-auto">
                                        <button name="submitSuche" type="submit" value="<?php echo __('newsletterSearchBTN');?>
" class="btn btn-primary btn-block">
                                            <i class="fal fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiAlleAbos']->value,'cAnchor'=>'alleabonnenten'), 0, true);
?>
                    <!-- Uebersicht Newsletterhistory -->
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input name="newsletterabonnent_loeschen" type="hidden" value="1">
                        <input type="hidden" name="tab" value="alleabonnenten">
                        <div id="newsletter-all-content">
                            <div>
                                <div class="subheading1"><?php echo __('newsletterAllSubscriber');?>
</div>
                                <hr class="mb-3">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="th-1">&nbsp;</th>
                                                <th class="text-left"><?php echo __('newslettersubscribername');?>
</th>
                                                <th class="text-left"><?php echo __('customerGroup');?>
</th>
                                                <th class="text-left"><?php echo __('email');?>
</th>
                                                <th class="text-center"><?php echo __('newslettersubscriberdate');?>
</th>
                                                <th class="text-center"><?php echo __('newslettersubscriberLastNewsletter');?>
</th>
                                                <th class="text-left"><?php echo __('newsletterOptInIp');?>
</th>
                                                <th class="text-center"><?php echo __('newsletterOptInDate');?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oAbonnenten_arr']->value, 'oAbonnenten');
$_smarty_tpl->tpl_vars['oAbonnenten']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oAbonnenten']->value) {
$_smarty_tpl->tpl_vars['oAbonnenten']->do_else = false;
?>
                                            <tr>
                                                <td class="text-left">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" name="kNewsletterEmpfaenger[]" type="checkbox" id="newsletter-abo-id-<?php echo $_smarty_tpl->tpl_vars['oAbonnenten']->value->kNewsletterEmpfaenger;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oAbonnenten']->value->kNewsletterEmpfaenger;?>
" />
                                                        <label class="custom-control-label" for="newsletter-abo-id-<?php echo $_smarty_tpl->tpl_vars['oAbonnenten']->value->kNewsletterEmpfaenger;?>
"></label>
                                                    </div>
                                                </td>
                                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['oAbonnenten']->value->cVorname;?>
 <?php echo $_smarty_tpl->tpl_vars['oAbonnenten']->value->cNachname;?>
</td>
                                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['oAbonnenten']->value->cName;?>
</td>
                                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['oAbonnenten']->value->cEmail;?>
</td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oAbonnenten']->value->dEingetragen_de;?>
</td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oAbonnenten']->value->dLetzterNewsletter_de;?>
</td>
                                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['oAbonnenten']->value->cOptIp;?>
</td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oAbonnenten']->value->optInDate;?>
</td>
                                            </tr>
                                        <?php
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
                                            <button name="loeschen" type="submit" class="btn btn-danger btn-block">
                                                <i class="fas fa-trash-alt"></i> <?php echo __('deleteSelected');?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiAlleAbos']->value,'cAnchor'=>'alleabonnenten','isBottom'=>true), 0, true);
?>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['cSucheAktiv']->value)) && strlen((string) $_smarty_tpl->tpl_vars['cSucheAktiv']->value) > 0) {?>
                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                            <input name="tab" type="hidden" value="alleabonnenten" />
                            <div class="row">
                                <div class="col-sm-6 col-xl-auto">
                                    <input name="submitAbo" type="submit" value="<?php echo __('newsletterNewSearch');?>
" class="btn btn-primary btn-block" />
                                </div>
                            </div>
                        </form>
                    <?php }?>
                <?php }?>
            </div>
            <div id="neuerabonnenten" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'neuerabonnenten') {?> active show<?php }?>">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <input type="hidden" name="newsletterabonnent_neu" value="1">
                    <input name="tab" type="hidden" value="neuerabonnenten">
                    <div class="settings">
                        <div class="subheading1"><?php echo __('newsletterNewSubscriber');?>
</div>
                        <hr class="mb-3">
                        <div>
                            <div class="form-group form-row align-items-center">
                                <label class="col col-sm-4 col-form-label text-sm-right" for="cVorname"><?php echo __('firstName');?>
:</label>
                                <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                    <input class="form-control" type="text" name="cVorname" id="cVorname" value="<?php if ((isset($_smarty_tpl->tpl_vars['oNewsletter']->value->cVorname))) {
echo $_smarty_tpl->tpl_vars['oNewsletter']->value->cVorname;
}?>" />
                                </div>
                            </div>

                            <div class="form-group form-row align-items-center">
                                <label class="col col-sm-4 col-form-label text-sm-right" for="cNachname"><?php echo __('lastName');?>
:</label>
                                <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                    <input class="form-control" type="text" name="cNachname" id="cNachname" value="<?php if ((isset($_smarty_tpl->tpl_vars['oNewsletter']->value->cNachname))) {
echo $_smarty_tpl->tpl_vars['oNewsletter']->value->cNachname;
}?>" />
                                </div>
                            </div>

                            <div class="form-group form-row align-items-center">
                                <label class="col col-sm-4 col-form-label text-sm-right" for="cEmail"><?php echo __('email');?>
:</label>
                                <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                    <input class="form-control" type="text" name="cEmail" id="cEmail" value="<?php if ((isset($_smarty_tpl->tpl_vars['oNewsletter']->value->cEmail))) {
echo $_smarty_tpl->tpl_vars['oNewsletter']->value->cEmail;
}?>" />
                                </div>
                            </div>

                            <div class="form-group form-row align-items-center">
                                <label class="col col-sm-4 col-form-label text-sm-right" for="kSprache"><?php echo __('language');?>
:</label>
                                <span class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                    <select class="custom-select" name="kSprache" id="kSprache">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class="card-footer save-wrapper">
                            <div class="row">
                                <div class="ml-auto col-sm-6 col-xl-auto">
                                    <button name="speichern" type="submit" value="<?php echo __('save');?>
" class="btn btn-primary btn-block">
                                        <?php echo __('saveWithIcon');?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="newsletterqueue" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'newsletterqueue') {?> active show<?php }?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['oNewsletterQueue_arr']->value)) && count($_smarty_tpl->tpl_vars['oNewsletterQueue_arr']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiWarteschlange']->value,'cAnchor'=>'newsletterqueue'), 0, true);
?>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input name="newsletterqueue" type="hidden" value="1">
                        <input name="tab" type="hidden" value="newsletterqueue">
                        <div id="newsletter-queue-content">
                            <div>
                                <div class="subheading1"><?php echo __('newsletterqueue');?>
</div>
                                <hr class="mb-3">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="th-1" style="width: 4%;">&nbsp;</th>
                                                <th class="th-2" style="width: 40%;"><?php echo __('subject');?>
</th>
                                                <th class="th-3" style="width: 30%;"><?php echo __('newsletterqueuedate');?>
</th>
                                                <th class="th-4" style="width: 26%;"><?php echo __('newsletterqueueimprovement');?>
</th>
                                                <th class="th-5" style="width: 26%;"><?php echo __('newsletterqueuecount');?>
</th>
                                                <th class="th-6" style="width: 26%;"><?php echo __('newsletterqueuecustomergrp');?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsletterQueue_arr']->value, 'oNewsletterQueue');
$_smarty_tpl->tpl_vars['oNewsletterQueue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNewsletterQueue']->value) {
$_smarty_tpl->tpl_vars['oNewsletterQueue']->do_else = false;
?>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" name="kNewsletterQueue[]" type="checkbox" id="newsletter-queue-id-<?php echo $_smarty_tpl->tpl_vars['oNewsletterQueue']->value->kNewsletterQueue;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oNewsletterQueue']->value->kNewsletterQueue;?>
">
                                                        <label class="custom-control-label" for="newsletter-queue-id-<?php echo $_smarty_tpl->tpl_vars['oNewsletterQueue']->value->kNewsletterQueue;?>
"></label>
                                                    </div>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['oNewsletterQueue']->value->cBetreff;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['oNewsletterQueue']->value->Datum;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['oNewsletterQueue']->value->nLimitN;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['oNewsletterQueue']->value->nAnzahlEmpfaenger;?>
</td>
                                                <td>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsletterQueue']->value->cKundengruppe_arr, 'cKundengruppe', true);
$_smarty_tpl->tpl_vars['cKundengruppe']->iteration = 0;
$_smarty_tpl->tpl_vars['cKundengruppe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cKundengruppe']->value) {
$_smarty_tpl->tpl_vars['cKundengruppe']->do_else = false;
$_smarty_tpl->tpl_vars['cKundengruppe']->iteration++;
$_smarty_tpl->tpl_vars['cKundengruppe']->last = $_smarty_tpl->tpl_vars['cKundengruppe']->iteration === $_smarty_tpl->tpl_vars['cKundengruppe']->total;
$__foreach_cKundengruppe_4_saved = $_smarty_tpl->tpl_vars['cKundengruppe'];
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['cKundengruppe']->value == '0') {
echo __('newsletterNoAccount');
if (!$_smarty_tpl->tpl_vars['cKundengruppe']->last) {?>, <?php }
}?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customerGroups']->value, 'customerGroup', true);
$_smarty_tpl->tpl_vars['customerGroup']->iteration = 0;
$_smarty_tpl->tpl_vars['customerGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customerGroup']->value) {
$_smarty_tpl->tpl_vars['customerGroup']->do_else = false;
$_smarty_tpl->tpl_vars['customerGroup']->iteration++;
$_smarty_tpl->tpl_vars['customerGroup']->last = $_smarty_tpl->tpl_vars['customerGroup']->iteration === $_smarty_tpl->tpl_vars['customerGroup']->total;
$__foreach_customerGroup_5_saved = $_smarty_tpl->tpl_vars['customerGroup'];
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['cKundengruppe']->value == $_smarty_tpl->tpl_vars['customerGroup']->value->getID()) {
echo $_smarty_tpl->tpl_vars['customerGroup']->value->getName();
if (!$_smarty_tpl->tpl_vars['customerGroup']->last) {?>, <?php }
}?>
                                                        <?php
$_smarty_tpl->tpl_vars['customerGroup'] = $__foreach_customerGroup_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php
$_smarty_tpl->tpl_vars['cKundengruppe'] = $__foreach_cKundengruppe_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer save-wrapper">
                                    <div class="row">
                                        <div class="col-sm-6 col-xl-auto text-left">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS4" type="checkbox" onclick="AllMessages(this.form);">
                                                <label class="custom-control-label" for="ALLMSGS4"><?php echo __('globalSelectAll');?>
</label>
                                            </div>
                                        </div>
                                        <div class="ml-auto col-sm-6 col-xl-auto">
                                            <button name="loeschen" type="submit" value="<?php echo __('delete');?>
" class="btn btn-danger btn-block">
                                                <i class="fas fa-trash-alt"></i> <?php echo __('delete');?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiWarteschlange']->value,'cAnchor'=>'newsletterqueue','isBottom'=>true), 0, true);
?>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="newslettervorlagen" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'newslettervorlagen') {?> active show<?php }?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['oNewsletterVorlage_arr']->value)) && count($_smarty_tpl->tpl_vars['oNewsletterVorlage_arr']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiVorlagen']->value,'cAnchor'=>'newslettervorlagen'), 0, true);
?>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input name="newslettervorlagen" type="hidden" value="1">
                        <input name="tab" type="hidden" value="newslettervorlagen">
                        <div id="newsletter-vorlagen-content">
                            <div>
                                <div class="subheading1"><?php echo __('marked');?>
</div>
                                <hr class="mb-3">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="th-1">&nbsp;</th>
                                                <th class="th-2"><?php echo __('newsletterdraftname');?>
</th>
                                                <th class="th-3"><?php echo __('subject');?>
</th>
                                                <th class="th-4 text-center"><?php echo __('newsletterdraftStdShort');?>
</th>
                                                <th class="th-5 text-center" style="width: 385px;"><?php echo __('options');?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsletterVorlage_arr']->value, 'oNewsletterVorlage');
$_smarty_tpl->tpl_vars['oNewsletterVorlage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNewsletterVorlage']->value) {
$_smarty_tpl->tpl_vars['oNewsletterVorlage']->do_else = false;
?>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" name="kNewsletterVorlage[]" type="checkbox" id="newsletter-template-id-<?php echo $_smarty_tpl->tpl_vars['oNewsletterVorlage']->value->kNewsletterVorlage;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oNewsletterVorlage']->value->kNewsletterVorlage;?>
">
                                                        <label class="custom-control-label" for="newsletter-template-id-<?php echo $_smarty_tpl->tpl_vars['oNewsletterVorlage']->value->kNewsletterVorlage;?>
"></label>
                                                    </div>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['oNewsletterVorlage']->value->cName;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['oNewsletterVorlage']->value->cBetreff;?>
</td>
                                                <td class="text-center">
                                                    <?php if ($_smarty_tpl->tpl_vars['oNewsletterVorlage']->value->kNewslettervorlageStd > 0) {?>
                                                        <?php echo __('yes');?>

                                                    <?php } else { ?>
                                                        <?php echo __('no');?>

                                                    <?php }?>
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-link px-2"
                                                           href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?&vorschau=<?php echo $_smarty_tpl->tpl_vars['oNewsletterVorlage']->value->kNewsletterVorlage;?>
&iframe=1&tab=newslettervorlagen&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                           title="<?php echo __('preview');?>
"
                                                           data-toggle="tooltip">
                                                            <span class="icon-hover">
                                                                <span class="fal fa-eye"></span>
                                                                <span class="fas fa-eye"></span>
                                                            </span>
                                                        </a>
                                                        <?php if ($_smarty_tpl->tpl_vars['oNewsletterVorlage']->value->kNewslettervorlageStd > 0) {?>
                                                            <a class="btn btn-link px-2"
                                                               href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?newslettervorlagenstd=1&editieren=<?php echo $_smarty_tpl->tpl_vars['oNewsletterVorlage']->value->kNewsletterVorlage;?>
&tab=newslettervorlagen&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                               title="<?php echo __('modify');?>
"
                                                               data-toggle="tooltip">
                                                                <span class="icon-hover">
                                                                    <span class="fal fa-edit"></span>
                                                                    <span class="fas fa-edit"></span>
                                                                </span>
                                                            </a>
                                                        <?php } else { ?>
                                                            <a class="btn btn-link px-2"
                                                               href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?newslettervorlagen=1&editieren=<?php echo $_smarty_tpl->tpl_vars['oNewsletterVorlage']->value->kNewsletterVorlage;?>
&tab=newslettervorlagen&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                               title="<?php echo __('modify');?>
"
                                                               data-toggle="tooltip">
                                                                <span class="icon-hover">
                                                                    <span class="fal fa-edit"></span>
                                                                    <span class="fas fa-edit"></span>
                                                                </span>
                                                            </a>
                                                        <?php }?>
                                                        <a class="btn btn-link px-2"
                                                           href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?newslettervorlagen=1&vorbereiten=<?php echo $_smarty_tpl->tpl_vars['oNewsletterVorlage']->value->kNewsletterVorlage;?>
&tab=newslettervorlagen&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                           title="<?php echo __('newsletterprepare');?>
"
                                                           data-toggle="tooltip">
                                                            <span class="icon-hover">
                                                                <span class="fal fa-newspaper"></span>
                                                                <span class="fas fa-newspaper"></span>
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
                                <div class="card-footer save-wrapper">
                                    <div class="row">
                                        <div class="col-sm-6 col-xl-auto text-left">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS5" type="checkbox" onclick="AllMessages(this.form);">
                                                <label class="custom-control-label" for="ALLMSGS5"><?php echo __('globalSelectAll');?>
</label>
                                            </div>
                                        </div>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['oNewsletterVorlage_arr']->value)) && count($_smarty_tpl->tpl_vars['oNewsletterVorlage_arr']->value) > 0) {?>
                                            <div class="ml-auto col-sm-6 col-xl-auto">
                                                <button class="btn btn-danger btn-block" name="loeschen" type="submit" value="<?php echo __('delete');?>
">
                                                    <i class="fas fa-trash-alt"></i> <?php echo __('delete');?>

                                                </button>
                                            </div>
                                        <?php }?>
                                        <div class="<?php if (!((isset($_smarty_tpl->tpl_vars['oNewsletterVorlage_arr']->value)) && count($_smarty_tpl->tpl_vars['oNewsletterVorlage_arr']->value) > 0)) {?>ml-auto<?php }?> col-sm-6 col-xl-auto">
                                            <button name="vorlage_erstellen" class="btn btn-primary btn-block" type="submit">
                                                <?php echo __('newsletterdraftcreate');?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiVorlagen']->value,'cAnchor'=>'newslettervorlagen','isBottom'=>true), 0, true);
?>
                <?php } else { ?>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input name="newslettervorlagen" type="hidden" value="1">
                        <input name="tab" type="hidden" value="newslettervorlagen">
                            <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                            <div class="submit <?php if ((isset($_smarty_tpl->tpl_vars['oNewsletterVorlage_arr']->value)) && count($_smarty_tpl->tpl_vars['oNewsletterVorlage_arr']->value) > 0) {?>btn-group<?php }?>">
                                <button name="vorlage_erstellen" class="btn btn-primary" type="submit"><?php echo __('newsletterdraftcreate');?>
</button>
                                <?php if ((isset($_smarty_tpl->tpl_vars['oNewsletterVorlage_arr']->value)) && count($_smarty_tpl->tpl_vars['oNewsletterVorlage_arr']->value) > 0) {?>
                                    <button class="btn btn-danger" name="loeschen" type="submit" value="<?php echo __('delete');?>
"><i class="fas fa-trash-alt"></i> <?php echo __('delete');?>
</button>
                                <?php }?>
                            </div>
                    </form>
                <?php }?>
            </div>
            <div id="newslettervorlagenstd" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'newslettervorlagenstd') {?> active show<?php }?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['oNewslettervorlageStd_arr']->value)) && count($_smarty_tpl->tpl_vars['oNewslettervorlageStd_arr']->value) > 0) {?>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input name="newslettervorlagenstd" type="hidden" value="1" />
                        <input name="vorlage_std_erstellen" type="hidden" value="1" />
                        <input name="tab" type="hidden" value="newslettervorlagenstd" />

                        <div id="newsletter-vorlage-std-content">
                            <div>
                                <div class="subheading1"><?php echo __('newsletterdraftStd');?>
</div>
                                <hr class="mb-3">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="th-1"><?php echo __('newsletterdraftname');?>
</th>
                                                <th class="th-2"><?php echo __('preview');?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewslettervorlageStd_arr']->value, 'oNewslettervorlageStd');
$_smarty_tpl->tpl_vars['oNewslettervorlageStd']->iteration = 0;
$_smarty_tpl->tpl_vars['oNewslettervorlageStd']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNewslettervorlageStd']->value) {
$_smarty_tpl->tpl_vars['oNewslettervorlageStd']->do_else = false;
$_smarty_tpl->tpl_vars['oNewslettervorlageStd']->iteration++;
$__foreach_oNewslettervorlageStd_7_saved = $_smarty_tpl->tpl_vars['oNewslettervorlageStd'];
?>
                                            <tr>
                                                <td>
                                                    <input name="kNewsletterVorlageStd" id="knvls-<?php echo $_smarty_tpl->tpl_vars['oNewslettervorlageStd']->iteration;?>
" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['oNewslettervorlageStd']->value->kNewslettervorlageStd;?>
" /> <label for="knvls-<?php echo $_smarty_tpl->tpl_vars['oNewslettervorlageStd']->iteration;?>
"><?php echo $_smarty_tpl->tpl_vars['oNewslettervorlageStd']->value->cName;?>
</label>
                                                </td>
                                                <td valign="top"><?php echo $_smarty_tpl->tpl_vars['oNewslettervorlageStd']->value->cBild;?>
</td>
                                            </tr>
                                        <?php
$_smarty_tpl->tpl_vars['oNewslettervorlageStd'] = $__foreach_oNewslettervorlageStd_7_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer save-wrapper">
                                    <div class="row">
                                        <div class="ml-auto col-sm-6 col-xl-auto">
                                            <button name="submitVorlageStd" type="submit" value="<?php echo __('newsletterdraftStdUse');?>
" class="btn btn-primary btn-block">
                                                <i class="fa fa-share"></i> <?php echo __('newsletterdraftStdUse');?>

                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="newsletterhistory" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'newsletterhistory') {?> active show<?php }?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['oNewsletterHistory_arr']->value)) && count($_smarty_tpl->tpl_vars['oNewsletterHistory_arr']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiHistory']->value,'cAnchor'=>'newsletterhistory'), 0, true);
?>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input name="newsletterhistory" type="hidden" value="1">
                        <input name="tab" type="hidden" value="newsletterhistory">
                        <div id="newsletter-history-content">
                            <div>
                                <div class="subheading1"><?php echo __('newsletterhistory');?>
</div>
                                <hr class="mb-3">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="th-1">&nbsp;</th>
                                                <th class="text-left"><?php echo __('newsletterhistorysubject');?>
</th>
                                                <th class="text-left"><?php echo __('newsletterhistorycount');?>
</th>
                                                <th class="text-left"><?php echo __('newsletterqueuecustomergrp');?>
</th>
                                                <th class="text-center"><?php echo __('newsletterhistorydate');?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNewsletterHistory_arr']->value, 'oNewsletterHistory');
$_smarty_tpl->tpl_vars['oNewsletterHistory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNewsletterHistory']->value) {
$_smarty_tpl->tpl_vars['oNewsletterHistory']->do_else = false;
?>
                                            <tr>
                                                <td class="text-left">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" name="kNewsletterHistory[]" type="checkbox" id="newsletter-history-id-<?php echo $_smarty_tpl->tpl_vars['oNewsletterHistory']->value->kNewsletterHistory;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oNewsletterHistory']->value->kNewsletterHistory;?>
">
                                                        <label class="custom-control-label" for="newsletter-history-id-<?php echo $_smarty_tpl->tpl_vars['oNewsletterHistory']->value->kNewsletterHistory;?>
"></label>
                                                    </div>
                                                </td>
                                                <td class="text-left">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?newsletterhistory=1&anzeigen=<?php echo $_smarty_tpl->tpl_vars['oNewsletterHistory']->value->kNewsletterHistory;?>
&tab=newsletterhistory&token=<?php echo $_SESSION['jtl_token'];?>
"><?php echo $_smarty_tpl->tpl_vars['oNewsletterHistory']->value->cBetreff;?>
</a>
                                                </td>
                                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['oNewsletterHistory']->value->nAnzahl;?>
</td>
                                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['oNewsletterHistory']->value->cKundengruppe;?>
</td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oNewsletterHistory']->value->Datum;?>
</td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer save-wrapper">
                                    <div class="row">
                                        <div class="col-sm-6 col-xl-auto text-left">
                                            <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS" type="checkbox" onclick="AllMessages(this.form);">
                                            <label class="custom-control-label" for="ALLMSGS"><?php echo __('globalSelectAll');?>
</label>
                                        </div>
                                        </div>
                                        <div class="ml-auto col-sm-6 col-xl-auto">
                                            <button name="loeschen" type="submit" class="btn btn-danger btn-block" value="<?php echo __('delete');?>
">
                                                <i class="fas fa-trash-alt"></i> <?php echo __('delete');?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiHistory']->value,'cAnchor'=>'newsletterhistory','isBottom'=>true), 0, true);
?>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="einstellungen" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'einstellungen') {?> active show<?php }?>">
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'einstellen','action'=>($_smarty_tpl->tpl_vars['adminURL']->value).($_smarty_tpl->tpl_vars['route']->value),'buttonCaption'=>__('saveWithIcon'),'skipHeading'=>true,'title'=>__('settings'),'tab'=>'einstellungen'), 0, false);
?>
            </div>
        </div>
    </div><!-- .tab-content-->
</div><!-- #content -->
<?php }
}
