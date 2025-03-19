<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:22:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/widgets/visitors_online.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33be60db597_76644782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fb3b749eb8ded966fb0a6060a674f8074eeb00e' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/widgets/visitors_online.tpl',
      1 => 1738748651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33be60db597_76644782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/includes/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="widget-custom-data widget-visitors">
    <?php if ($_smarty_tpl->tpl_vars['oVisitorsInfo']->value->nAll > 0) {?>
        <div class="row mb-3">
            <div class="col-auto mr-auto"><i class="fa fa-users" aria-hidden="true"></i> <?php echo __('customers');?>
: <span class="value"><?php echo $_smarty_tpl->tpl_vars['oVisitorsInfo']->value->nCustomer;?>
</span></div>
            <div class="col-auto mr-auto"><i class="fa fa-user-secret mr-2" aria-hidden="true"></i> <?php echo __('guests');?>
: <span class="value"><?php echo $_smarty_tpl->tpl_vars['oVisitorsInfo']->value->nUnknown;?>
</span></div>
            <div class="col-auto text-right"><?php echo __('overall');?>
: <span class="value"><?php echo $_smarty_tpl->tpl_vars['oVisitorsInfo']->value->nAll;?>
</span></div>
        </div>
    <?php } else { ?>
        <div class="widget-container"><div class="alert alert-info"><?php echo __('noVisitorsATM');?>
</div></div>
    <?php }?>

    <?php if (is_array($_smarty_tpl->tpl_vars['oVisitors_arr']->value) && count($_smarty_tpl->tpl_vars['oVisitors_arr']->value) > 0) {?>
        <table class="table table-border-light table-sm">
            <thead>
                <tr>
                    <th><?php echo __('customer');?>
</th>
                    <th><?php echo __('info');?>
</th>
                    <th class="text-center"><?php echo __('lastActivity');?>
</th>
                    <th class="text-right"><?php echo __('lastPurchase');?>
</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oVisitors_arr']->value, 'oVisitor');
$_smarty_tpl->tpl_vars['oVisitor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oVisitor']->value) {
$_smarty_tpl->tpl_vars['oVisitor']->do_else = false;
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['oVisitor']->value->kKunde)) {?>
                    <tr>
                        <td class="customer" onclick="$(this).parent().toggleClass('active')">
                            <?php echo $_smarty_tpl->tpl_vars['oVisitor']->value->cVorname;?>
 <?php echo $_smarty_tpl->tpl_vars['oVisitor']->value->cNachname;?>

                        </td>
                        <td>
                            <?php if (strlen((string) $_smarty_tpl->tpl_vars['oVisitor']->value->cBrowser) > 0) {?>
                                <span data-toggle="tooltip" data-placement="top" title="<?php if (strlen((string) $_smarty_tpl->tpl_vars['oVisitor']->value->dErstellt) > 0) {?>Kunde seit <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oVisitor']->value->dErstellt,'d.m.Y');
}?> | Browser: <?php echo $_smarty_tpl->tpl_vars['oVisitor']->value->cBrowser;
if (strlen((string) $_smarty_tpl->tpl_vars['oVisitor']->value->cIP) > 0) {?> | IP: <?php echo $_smarty_tpl->tpl_vars['oVisitor']->value->cIP;
}?>">
                                    <i class="fa fa-user"></i><span class="sr-only"><?php echo __('details');?>
</span>
                                </span>
                            <?php }?>
                            <?php if (strlen((string) $_smarty_tpl->tpl_vars['oVisitor']->value->cEinstiegsseite) > 0) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['oVisitor']->value->cEinstiegsseite;?>
"  target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo __('entryPage');?>
: <?php echo $_smarty_tpl->tpl_vars['oVisitor']->value->cEinstiegsseite;
if (strlen((string) $_smarty_tpl->tpl_vars['oVisitor']->value->cReferer) > 0) {?> | <?php echo __('origin');?>
: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['oVisitor']->value->cReferer, ENT_QUOTES, 'utf-8', true);
}?>">
                                    <i class="fa fa-globe"></i><span class="sr-only"><?php echo __('entryPage');?>
</span>
                                </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['oVisitor']->value->cNewsletter === 'Y') {?>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Newsletter-Abonnent">
                                    <i class="far fa-envelope"></i><span class="sr-only"><?php echo __('newsletterSubscriber');?>
</span>
                                </a>
                            <?php }?>
                        </td>
                        <td class="text-muted text-center">
                            <?php if (strlen((string) $_smarty_tpl->tpl_vars['oVisitor']->value->dLetzteAktivitaet) > 0) {?>
                                 <?php if (strlen((string) $_smarty_tpl->tpl_vars['oVisitor']->value->cAusstiegsseite) > 0) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['oVisitor']->value->cAusstiegsseite;?>
" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['oVisitor']->value->cAusstiegsseite;?>
">
                                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oVisitor']->value->dLetzteAktivitaet,'H:i:s');?>

                                     </a>
                                 <?php } else { ?>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oVisitor']->value->dLetzteAktivitaet,'H:i:s');?>

                                 <?php }?>
                            <?php }?>
                        </td>
                        <td class="basket text-right">
                            <?php if ($_smarty_tpl->tpl_vars['oVisitor']->value->kBestellung > 0) {?>
                                <span title="Letzter Einkauf vom <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oVisitor']->value->dErstellt,'d.m.Y');?>
">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['oVisitor']->value->fGesamtsumme;?>

                                </span>
                            <?php } else { ?>
                                <span class="text-muted"><i class="fa fa-shopping-cart" aria-hidden="true"></i> -</span>
                            <?php }?>
                        </td>
                    </tr>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    <?php }?>
</div>
<?php }
}
