<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:29:05
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/links_neuer_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34b811eda87_70517179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a47ad270c5b7241f6f87e6a64fe4fe7a94503d5b' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/links_neuer_link.tpl',
      1 => 1738748473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/fileupload.tpl' => 1,
  ),
),false)) {
function content_67a34b811eda87_70517179 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    $(function () {
        $('input[name="nLinkart"]').on('change', function () {
            var lnk = $('input[name="nLinkart"]:checked').val();
            if (lnk == '1') {
                $('#option_isActive').slideDown("slow");
            } else {
                $('#option_isActive').slideUp("slow");
                $('#option_isActive select').val(1);
            }
        }).trigger('change');
    });
    $(window).on('load', function () {
        $('#specialLinkType, #cKundengruppen').change(function () {
            ioCall('isDuplicateSpecialLink', [
                    parseInt($('#specialLinkType').val()),
                    parseInt($('input[name="kLink"]').val()) || 0,
                    $('#cKundengruppen').val()
                ],
                function (result) {
                    if (result) {
                        $('#specialLinkType-error').removeClass('hidden-soft');
                    } else {
                        $('#specialLinkType-error').addClass('hidden-soft');
                    }
                }
            );
        }).trigger('change');
    });
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['Link']->value->getID() > 0 && !empty($_smarty_tpl->tpl_vars['Link']->value->getName())) {?>
    <?php $_smarty_tpl->_assignInScope('description', ((($_smarty_tpl->tpl_vars['Link']->value->getName()).(' (ID ')).($_smarty_tpl->tpl_vars['Link']->value->getID())).(')'));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('description', '');
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('newLinks'),'cBeschreibung'=>$_smarty_tpl->tpl_vars['description']->value), 0, false);
?>
<div id="content">
    <div id="settings">
        <form id="create_link" name="link_erstellen" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" enctype="multipart/form-data">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <input type="hidden" name="action" value="create-or-update-link" />
            <input type="hidden" name="kLinkgruppe" value="<?php echo $_smarty_tpl->tpl_vars['Link']->value->getLinkGroupID();?>
" />
            <input type="hidden" name="kLink" value="<?php if ($_smarty_tpl->tpl_vars['Link']->value->getID() > 0) {
echo $_smarty_tpl->tpl_vars['Link']->value->getID();
}?>" />
            <input type="hidden" name="kPlugin" value="<?php if ($_smarty_tpl->tpl_vars['Link']->value->getPluginID() > 0) {
echo $_smarty_tpl->tpl_vars['Link']->value->getPluginID();
}?>" />
            <div class="card">
                <div class="card-header">
                    <div class="subheading1"><?php echo __('general');?>
</div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <div class="form-group form-row align-items-center<?php if ((isset($_smarty_tpl->tpl_vars['xPlausiVar_arr']->value['cName']))) {?> form-error<?php }?>">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cName"><?php echo __('name');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input required type="text" name="cName" id="cName" class="form-control" value="<?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['cName'])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value['cName']) {
echo $_smarty_tpl->tpl_vars['xPostVar_arr']->value['cName'];
} elseif (!empty($_smarty_tpl->tpl_vars['Link']->value->getDisplayName())) {
echo $_smarty_tpl->tpl_vars['Link']->value->getDisplayName();
}?>" tabindex="1" />
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center<?php if ((isset($_smarty_tpl->tpl_vars['xPlausiVar_arr']->value['nLinkart'])) || (isset($_smarty_tpl->tpl_vars['xPlausiVar_arr']->value['nSpezialseite']))) {?> form-error<?php }?>">
                        <label class="col col-sm-4 col-form-label text-sm-right"><?php echo __('linkType');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <?php if ($_smarty_tpl->tpl_vars['Link']->value->getPluginID() > 0) {?>
                            <p class="multi_input">
                                <input type="hidden" name="nLinkart" value="25" />
                                <input type="radio" id="nLink3" name="nLinkart" checked="checked" disabled="disabled" />
                                <label for="nLink3"><?php echo __('linkToSpecalPage');?>
:</label>
                                <select class="custom-select" id="specialLinkType" name="nSpezialseite" disabled="disabled">
                                    <option selected="selected" value="0"><?php echo __('plugin');?>
</option>
                                </select>
                            </p>
                        <?php } else { ?>
                            <p class="multi_input" style="margin-top: 10px;">
                                <input type="radio" id="nLink1" name="nLinkart" value="1" tabindex="2" <?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['nLinkart'])) && (int)$_smarty_tpl->tpl_vars['xPostVar_arr']->value['nLinkart'] === 1) {?>checked<?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === 1) {?>checked<?php }
if ($_smarty_tpl->tpl_vars['Link']->value->isSystem()) {?> disabled<?php }?> />
                                <label for="nLink1"><?php echo __('linkWithOwnContent');?>
:</label>
                            </p>
                            <p class="multi_input">
                                <input type="radio" id="nLink2" name="nLinkart" value="2" onclick="$('#nLinkInput2').val('http://')" tabindex="3" <?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['nLinkart'])) && (int)$_smarty_tpl->tpl_vars['xPostVar_arr']->value['nLinkart'] === 2) {?>checked<?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === 2) {?>checked<?php }
if ($_smarty_tpl->tpl_vars['Link']->value->isSystem()) {?> disabled<?php }?> />
                                <label for="nLink2"><?php echo __('linkToExternalURL');?>
 <?php echo __('createWithSearchEngineName');?>
:</label>
                            </p>
                            <p class="multi_input" style="margin-bottom: 10px;">
                                <input type="radio" id="nLink3" name="nLinkart" value="3" <?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['nLinkart'])) && (int)$_smarty_tpl->tpl_vars['xPostVar_arr']->value['nLinkart'] === 3) {?>checked<?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() > 2) {?>checked<?php }?> />
                                <label for="nLink3"><?php echo __('linkToSpecalPage');?>
:</label>
                                <select class="custom-select" id="specialLinkType" name="nSpezialseite"<?php if ($_smarty_tpl->tpl_vars['Link']->value->isSystem()) {?> disabled<?php }?>>
                                    <option value="0"><?php echo __('choose');?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['specialPages']->value, 'specialPage');
$_smarty_tpl->tpl_vars['specialPage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['specialPage']->value) {
$_smarty_tpl->tpl_vars['specialPage']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['specialPage']->value->nLinkart;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['nSpezialseite'])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value['nSpezialseite'] === $_smarty_tpl->tpl_vars['specialPage']->value->nLinkart) {?>selected<?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === $_smarty_tpl->tpl_vars['specialPage']->value->nLinkart) {?>selected<?php }?>><?php echo __($_smarty_tpl->tpl_vars['specialPage']->value->cName);?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                <?php if ($_smarty_tpl->tpl_vars['Link']->value->isSystem()) {?>
                                    <input type="hidden" name="nSpezialseite" value="<?php echo $_smarty_tpl->tpl_vars['Link']->value->getLinkType();?>
">
                                <?php }?>
                                <span id="specialLinkType-error" class="hidden-soft error"> <i title="<?php echo __('isDuplicateSpecialLink');?>
" class="fal fa-exclamation-triangle error"></i></span>
                            </p>
                        <?php }?>
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center<?php if ((isset($_smarty_tpl->tpl_vars['xPlausiVar_arr']->value['cKundengruppen']))) {?> form-error<?php }?>">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cKundengruppen"><?php echo __('restrictedToCustomerGroups');?>
:</label>
                        <?php $_smarty_tpl->_assignInScope('activeGroups', $_smarty_tpl->tpl_vars['Link']->value->getCustomerGroups());?>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select required name="cKundengruppen[]"
                                    class="selectpicker custom-select"
                                    multiple="multiple"
                                    size="6"
                                    id="cKundengruppen"
                                    data-selected-text-format="count > 2"
                                    data-size="7">
                                <option value="-1"
                                    <?php if ((($_smarty_tpl->tpl_vars['Link']->value->getID() !== null )) && $_smarty_tpl->tpl_vars['Link']->value->getID() > 0 && count($_smarty_tpl->tpl_vars['activeGroups']->value) === 0) {?> selected
                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['cKundengruppen']))) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xPostVar_arr']->value['cKundengruppen'], 'cPostKndGrp');
$_smarty_tpl->tpl_vars['cPostKndGrp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cPostKndGrp']->value) {
$_smarty_tpl->tpl_vars['cPostKndGrp']->do_else = false;
?>
                                            <?php if ((int)$_smarty_tpl->tpl_vars['cPostKndGrp']->value === -1) {?> selected<?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php } elseif (!$_smarty_tpl->tpl_vars['Link']->value->getID() > 0) {?> selected<?php }?>
                                ><?php echo __('all');?>
</option>
                                <option data-divider="true"></option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kundengruppen']->value, 'kundengruppe');
$_smarty_tpl->tpl_vars['kundengruppe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kundengruppe']->value) {
$_smarty_tpl->tpl_vars['kundengruppe']->do_else = false;
?>
                                    <?php $_smarty_tpl->_assignInScope('kKundengruppe', (int)$_smarty_tpl->tpl_vars['kundengruppe']->value->kKundengruppe);?>
                                    <?php $_smarty_tpl->_assignInScope('postkndgrp', 0);?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['cKundengruppen']))) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xPostVar_arr']->value['cKundengruppen'], 'cPostKndGrp');
$_smarty_tpl->tpl_vars['cPostKndGrp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cPostKndGrp']->value) {
$_smarty_tpl->tpl_vars['cPostKndGrp']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['cPostKndGrp']->value == $_smarty_tpl->tpl_vars['kKundengruppe']->value) {
$_smarty_tpl->_assignInScope('postkndgrp', 1);
}?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['kundengruppe']->value->kKundengruppe;?>
"
                                        <?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value)) && (isset($_smarty_tpl->tpl_vars['postkndgrp']->value)) && $_smarty_tpl->tpl_vars['postkndgrp']->value == 1) {?>selected
                                        <?php } elseif (in_array($_smarty_tpl->tpl_vars['kKundengruppe']->value,$_smarty_tpl->tpl_vars['activeGroups']->value,true)) {?>selected
                                        <?php }?>
                                    ><?php echo $_smarty_tpl->tpl_vars['kundengruppe']->value->cName;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('multipleChoice')),$_smarty_tpl ) );?>
</div>
                    </div>
                    <div class="form-group form-row align-items-center" id="option_isActive">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="bIsActive"><?php echo __('active');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select class="custom-select" type="selectbox" name="bIsActive" id="bIsActive">
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['Link']->value->getIsEnabled() || ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['bIsActive'])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value['bIsActive'] === '1')) {?>selected<?php }?>><?php echo __('activated');?>
</option>
                                <option value="0" <?php if (!$_smarty_tpl->tpl_vars['Link']->value->getIsEnabled() || ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['bIsActive'])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value['bIsActive'] === '0')) {?>selected<?php }?>><?php echo __('deactivated');?>
</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center" id="option_target">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="linkTarget"><?php echo __('linkTarget');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select class="custom-select" type="selectbox" name="linkTarget" id="linkTarget">
                                <option value="_self" <?php if ((!(isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['linkTarget'])) && $_smarty_tpl->tpl_vars['Link']->value->getTarget() === '_self') || ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['linkTarget'])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value['linkTarget'] === '_self')) {?>selected<?php }?>><?php echo __('targetSelf');?>
</option>
                                <option value="_blank" <?php if ((!(isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['linkTarget'])) && $_smarty_tpl->tpl_vars['Link']->value->getTarget() === '_blank') || ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['linkTarget'])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value['linkTarget'] === '_blank')) {?>selected<?php }?>><?php echo __('targetBlank');?>
</option>
                            </select>
                        </div>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('targetDesc')),$_smarty_tpl ) );?>

                        </div>
                    </div>
                    <?php if (!(($_smarty_tpl->tpl_vars['Link']->value->getLinkType() !== null )) || $_smarty_tpl->tpl_vars['Link']->value->getLinkType() != LINKTYP_LOGIN) {?>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cSichtbarNachLogin"><?php echo __('visibleAfterLogin');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" class="form-control2" type="checkbox" name="cSichtbarNachLogin" id="cSichtbarNachLogin" value="Y" <?php if ($_smarty_tpl->tpl_vars['Link']->value->getVisibleLoggedInOnly() === true || ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['cSichtbarNachLogin'])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value['cSichtbarNachLogin'])) {?>checked<?php }?> />
                                <label class="custom-control-label" for="cSichtbarNachLogin"></label>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="bSSL">SSL:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select id="bSSL" class="custom-select" name="bSSL">
                                <option value="0"<?php if ($_smarty_tpl->tpl_vars['Link']->value->getSSL() === false || ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['bSSL'])) && ($_smarty_tpl->tpl_vars['xPostVar_arr']->value['bSSL'] == 0 || $_smarty_tpl->tpl_vars['xPostVar_arr']->value['bSSL'] == 1))) {?> selected="selected"<?php }?>><?php echo __('standard');?>
</option>
                                <option value="2"<?php if ($_smarty_tpl->tpl_vars['Link']->value->getSSL() === true || ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['bSSL'])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value['bSSL'] == 2)) {?> selected="selected"<?php }?>><?php echo __('forced');?>
</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cNoFollow"><?php echo __('noFollow');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" class="form-control2" type="checkbox" name="cNoFollow" id="cNoFollow" value="Y" <?php if ($_smarty_tpl->tpl_vars['Link']->value->getNoFollow() === true || ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['cNoFollow'])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value['cNoFollow'])) {?>checked<?php }?> />
                                <label class="custom-control-label" for="cNoFollow"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="nSort"><?php echo __('sortNo');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input class="form-control" type="text" name="nSort" id="nSort" value="<?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['nSort'])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value['nSort']) {
echo $_smarty_tpl->tpl_vars['xPostVar_arr']->value['nSort'];
} elseif ($_smarty_tpl->tpl_vars['Link']->value->getSort()) {
echo $_smarty_tpl->tpl_vars['Link']->value->getSort();
}?>" tabindex="6" />
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="Bilder_0"><?php echo __('images');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <?php ob_start();
if (!empty($_smarty_tpl->tpl_vars['cDatei_arr']->value)) {
echo "
                                        ";
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cDatei_arr']->value, 'cDatei');
$_smarty_tpl->tpl_vars['cDatei']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cDatei']->value) {
$_smarty_tpl->tpl_vars['cDatei']->do_else = false;
echo "
                                            '";
echo (string)$_smarty_tpl->tpl_vars['cDatei']->value->cURL;
echo "<a href=\"";
echo (string)$_smarty_tpl->tpl_vars['adminURL']->value;
echo (string)$_smarty_tpl->tpl_vars['route']->value;
echo "?action=edit-link&kLink=";
echo (string)$_smarty_tpl->tpl_vars['Link']->value->getID();
echo "&token=";
echo (string)$_SESSION['jtl_token'];
echo "&delpic=1&cName=";
echo (string)$_smarty_tpl->tpl_vars['cDatei']->value->cNameFull;
if ((($_smarty_tpl->tpl_vars['Link']->value->getPluginID() !== null )) && $_smarty_tpl->tpl_vars['Link']->value->getPluginID() > 0) {
echo (string)$_smarty_tpl->tpl_vars['Link']->value->getPluginID();
}
echo "\"><i class=\"fas fa-trash\"></i></a>',
                                        ";
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo "
                                    ";
}
$_prefixVariable1=ob_get_clean();
ob_start();
if (!empty($_smarty_tpl->tpl_vars['cDatei_arr']->value)) {
echo "
                                            ";
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cDatei_arr']->value, 'cDatei');
$_smarty_tpl->tpl_vars['cDatei']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cDatei']->value) {
$_smarty_tpl->tpl_vars['cDatei']->do_else = false;
echo "
                                                ";
echo "{
                                                ";
echo "caption: '";
echo "$";
echo "#";
echo (string)$_smarty_tpl->tpl_vars['cDatei']->value->cName;
echo "#";
echo "$";
echo "',
                                                width:   '120px'
                                                },
                                            ";
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo "
                                        ";
}
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/fileupload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fileID'=>'Bilder_0','fileName'=>'Bilder[]','fileMaxSize'=>1000,'fileIsSingle'=>false,'fileInitialPreview'=>"[
                                    ".$_prefixVariable1."
                                    ]",'fileInitialPreviewConfig'=>"[
                                        ".$_prefixVariable2."
                                    ]"), 0, false);
?>
                        </div>

                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="bIsFluid"><?php echo __('bIsFluidText');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" class="form-control2" type="checkbox" name="bIsFluid" id="bIsFluid" value="1" <?php if ($_smarty_tpl->tpl_vars['Link']->value->getIsFluid() === true || ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['bIsFluid'])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value['bIsFluid'] === '1')) {?>checked<?php }?> />
                                <label class="custom-control-label" for="bIsFluid"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cIdentifier"><?php echo __('cIdentifierText');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input class="form-control" type="text" name="cIdentifier" id="cIdentifier" value="<?php if ($_smarty_tpl->tpl_vars['Link']->value->getIdentifier()) {
echo $_smarty_tpl->tpl_vars['Link']->value->getIdentifier();
} elseif ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['bIsFluid']))) {?>$xPostVar_arr.bIsFluid<?php }?>" />
                        </div>
                    </div>
                </div>
            </div>
            <?php $_smarty_tpl->_assignInScope('errorAtLanguage', null);?>
            <?php if ((isset($_smarty_tpl->tpl_vars['xPlausiVar_arr']->value['lang']))) {?>
                <?php $_smarty_tpl->_assignInScope('errorAtLanguage', $_smarty_tpl->tpl_vars['xPlausiVar_arr']->value['lang']);?>
            <?php }?>
            <nav class="tabs-nav">
                <ul class="nav nav-tabs" role="tablist">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language', false, 'i');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                        <li class="nav-item">
                            <a class="nav-link <?php if (($_smarty_tpl->tpl_vars['errorAtLanguage']->value === null && $_smarty_tpl->tpl_vars['i']->value === 0) || ($_smarty_tpl->tpl_vars['errorAtLanguage']->value !== null && $_smarty_tpl->tpl_vars['errorAtLanguage']->value === $_smarty_tpl->tpl_vars['language']->value->getIso())) {?>active<?php }?>" data-toggle="tab" role="tab"
                               href="#lang_<?php echo $_smarty_tpl->tpl_vars['language']->value->getIso();?>
" aria-expanded="false">
                                <?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>

                                <?php if ($_smarty_tpl->tpl_vars['language']->value->getShopDefault() === 'Y') {?>(<?php echo __('standard');?>
)<?php }?>
                            </a>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </nav>
            <div class="tab-content">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language', false, 'i');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                    <div id="lang_<?php echo $_smarty_tpl->tpl_vars['language']->value->getIso();?>
"
                         class="tab-pane fade <?php if (($_smarty_tpl->tpl_vars['errorAtLanguage']->value === null && $_smarty_tpl->tpl_vars['i']->value === 0) || ($_smarty_tpl->tpl_vars['errorAtLanguage']->value !== null && $_smarty_tpl->tpl_vars['errorAtLanguage']->value === $_smarty_tpl->tpl_vars['language']->value->getIso())) {?>active show<?php }?>">
                        <?php $_smarty_tpl->_assignInScope('cISO', $_smarty_tpl->tpl_vars['language']->value->getIso());?>
                        <?php $_smarty_tpl->_assignInScope('langID', $_smarty_tpl->tpl_vars['language']->value->getId());?>
                        <div id="iso_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
" class="iso_wrapper">
                            <div class="card">
                                <div class="card-header">
                                    <div class="subheading1"><?php echo __('metaSeo');?>
 (<?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
)</div>
                                    <hr class="mb-n3">
                                </div>
                                <div class="card-body">
                                    <div class="form-group form-row align-items-center">
                                        <label class="col col-sm-4 col-form-label text-sm-right" for="cName_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
">
                                            <?php echo __('showedName');?>
:
                                        </label>
                                        <?php $_smarty_tpl->_assignInScope('cName_ISO', ('cName_').($_smarty_tpl->tpl_vars['cISO']->value));?>
                                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                            <input class="form-control" type="text" name="cName_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"
                                                   id="cName_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"
                                                   value="<?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cName_ISO']->value])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cName_ISO']->value]) {
echo $_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cName_ISO']->value];
} elseif (!empty($_smarty_tpl->tpl_vars['Link']->value->getName($_smarty_tpl->tpl_vars['langID']->value))) {
echo $_smarty_tpl->tpl_vars['Link']->value->getName($_smarty_tpl->tpl_vars['langID']->value);
}?>" tabindex="7" />
                                        </div>
                                    </div>
                                    <?php $_smarty_tpl->_assignInScope('hasError', false);?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['xPlausiVar_arr']->value['scheme'])) || (isset($_smarty_tpl->tpl_vars['xPlausiVar_arr']->value['cSeo']))) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['xPlausiVar_arr']->value['lang'])) && $_smarty_tpl->tpl_vars['xPlausiVar_arr']->value['lang'] == $_smarty_tpl->tpl_vars['cISO']->value) {?>
                                            <?php $_smarty_tpl->_assignInScope('hasError', true);?>
                                        <?php } elseif (!(isset($_smarty_tpl->tpl_vars['xPlausiVar_arr']->value['lang']))) {?>
                                            <?php $_smarty_tpl->_assignInScope('hasError', true);?>
                                        <?php }?>
                                    <?php }?>
                                    <div class="form-group form-row align-items-center<?php if ($_smarty_tpl->tpl_vars['hasError']->value) {?> form-error<?php }?>">
                                        <label class="col col-sm-4 col-form-label text-sm-right" for="cSeo_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
">
                                            <?php echo __('linkSeo');?>
:
                                        </label>
                                        <?php $_smarty_tpl->_assignInScope('cSeo_ISO', ("cSeo_").($_smarty_tpl->tpl_vars['cISO']->value));?>
                                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                            <input class="form-control" type="text" name="cSeo_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"
                                                   id="cSeo_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"
                                                   value="<?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cSeo_ISO']->value])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cSeo_ISO']->value]) {
echo $_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cSeo_ISO']->value];
} elseif (!empty($_smarty_tpl->tpl_vars['Link']->value->getSEO($_smarty_tpl->tpl_vars['langID']->value))) {
echo $_smarty_tpl->tpl_vars['Link']->value->getSEO($_smarty_tpl->tpl_vars['langID']->value);
}?>"
                                                   tabindex="7" />
                                        </div>
                                        <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('cSeoDescription')),$_smarty_tpl ) );?>

                                        </div>
                                    </div>
                                    <?php $_smarty_tpl->_assignInScope('cTitle_ISO', ('cTitle_').($_smarty_tpl->tpl_vars['cISO']->value));?>
                                    <div class="form-group form-row align-items-center">
                                        <label class="col col-sm-4 col-form-label text-sm-right"
                                               for="cTitle_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
">
                                            <?php echo __('linkTitle');?>
:
                                        </label>
                                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                            <input class="form-control" type="text" name="cTitle_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"
                                                   id="cTitle_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"
                                                   value="<?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cTitle_ISO']->value])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cTitle_ISO']->value]) {
echo $_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cTitle_ISO']->value];
} elseif (!empty($_smarty_tpl->tpl_vars['Link']->value->getTitle($_smarty_tpl->tpl_vars['langID']->value))) {
echo $_smarty_tpl->tpl_vars['Link']->value->getTitle($_smarty_tpl->tpl_vars['langID']->value);
}?>"
                                                   tabindex="8" />
                                        </div>
                                    </div>
                                    <div class="form-group form-row align-items-center">
                                        <?php $_smarty_tpl->_assignInScope('cContent_ISO', ('cContent_').($_smarty_tpl->tpl_vars['cISO']->value));?>
                                        <label class="col col-sm-4 col-form-label text-sm-right"
                                               for="cContent_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
">
                                            <?php echo __('content');?>
:
                                        </label>
                                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cContent_ISO']->value])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cContent_ISO']->value]) {?>
                                                <?php $_smarty_tpl->_assignInScope('textareaContent', $_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cContent_ISO']->value]);?>
                                            <?php } elseif (!empty($_smarty_tpl->tpl_vars['Link']->value->getContent($_smarty_tpl->tpl_vars['langID']->value))) {?>
                                                <?php $_smarty_tpl->_assignInScope('textareaContent', $_smarty_tpl->tpl_vars['Link']->value->getContent($_smarty_tpl->tpl_vars['langID']->value));?>
                                            <?php }?>
                                            <textarea class="form-control tinymce" id="cContent_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"
                                                      name="cContent_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
" rows="10"
                                                      cols="40"><?php echo htmlentities((($tmp = $_smarty_tpl->tpl_vars['textareaContent']->value ?? null)===null||$tmp==='' ? '' : $tmp));?>
</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group form-row align-items-center">
                                        <?php $_smarty_tpl->_assignInScope('cMetaTitle_ISO', ('cMetaTitle_').($_smarty_tpl->tpl_vars['cISO']->value));?>
                                        <label class="col col-sm-4 col-form-label text-sm-right"
                                               for="cMetaTitle_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
">
                                            <?php echo __('metaTitle');?>
:
                                        </label>
                                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                            <input class="form-control" type="text" name="cMetaTitle_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"
                                                   id="cMetaTitle_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"
                                                   value="<?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cMetaTitle_ISO']->value])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cMetaTitle_ISO']->value]) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cMetaTitle_ISO']->value]);
} elseif (!empty($_smarty_tpl->tpl_vars['Link']->value->getMetaTitle($_smarty_tpl->tpl_vars['langID']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['Link']->value->getMetaTitle($_smarty_tpl->tpl_vars['langID']->value));
}?>"
                                                   tabindex="9" />
                                        </div>
                                        <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('metaTitleDesc')),$_smarty_tpl ) );?>

                                        </div>
                                    </div>
                                    <div class="form-group form-row align-items-center">
                                        <?php $_smarty_tpl->_assignInScope('cMetaKeywords_ISO', ('cMetaKeywords_').($_smarty_tpl->tpl_vars['cISO']->value));?>
                                        <label class="col col-sm-4 col-form-label text-sm-right"
                                               for="cMetaKeywords_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
">
                                            <?php echo __('metaKeywords');?>
:
                                        </label>
                                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                            <input class="form-control" type="text"
                                                   name="cMetaKeywords_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
" id="cMetaKeywords_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"
                                                   value="<?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cMetaKeywords_ISO']->value])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cMetaKeywords_ISO']->value]) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cMetaKeywords_ISO']->value]);
} elseif (!empty($_smarty_tpl->tpl_vars['Link']->value->getMetaKeyword($_smarty_tpl->tpl_vars['langID']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['Link']->value->getMetaKeyword($_smarty_tpl->tpl_vars['langID']->value));
}?>"
                                                   tabindex="9" />
                                        </div>
                                        <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('metaKeywordsDesc')),$_smarty_tpl ) );?>

                                        </div>
                                    </div>
                                    <div class="form-group form-row align-items-center">
                                        <?php $_smarty_tpl->_assignInScope('cMetaDescription_ISO', ('cMetaDescription_').($_smarty_tpl->tpl_vars['cISO']->value));?>
                                        <label class="col col-sm-4 col-form-label text-sm-right"
                                               for="cMetaDescription_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
">
                                            <?php echo __('metaDescription');?>
:
                                        </label>
                                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                            <input class="form-control" type="text"
                                                   name="cMetaDescription_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
" id="cMetaDescription_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"
                                                   value="<?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cMetaDescription_ISO']->value])) && $_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cMetaDescription_ISO']->value]) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['xPostVar_arr']->value[$_smarty_tpl->tpl_vars['cMetaDescription_ISO']->value]);
} elseif (!empty($_smarty_tpl->tpl_vars['Link']->value->getMetaDescription($_smarty_tpl->tpl_vars['langID']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['Link']->value->getMetaDescription($_smarty_tpl->tpl_vars['langID']->value));
}?>"
                                                   tabindex="9" />
                                        </div>
                                        <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('metaDescriptionDesc')),$_smarty_tpl ) );?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="card-footer save-wrapper">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto">
                        <a class="btn btn-outline-primary btn-block" href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                            <?php echo __('cancelWithIcon');?>

                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <button type="submit" name="continue" value="1" class="btn btn-outline-primary btn-block" id="save-and-continue">
                            <i class="fal fa-save"></i> <?php echo __('newLinksSaveContinueEdit');?>

                        </button>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <button type="submit" value="<?php echo __('newLinksSave');?>
" class="btn btn-primary btn-block">
                            <i class="far fa-save"></i> <?php echo __('newLinksSave');?>

                        </button>
                    </div>
                </div>
            </div>
        </form>
        <?php if ((($_smarty_tpl->tpl_vars['Link']->value->getID() !== null ))) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getRevisions'][0], array( array('type'=>'link','key'=>$_smarty_tpl->tpl_vars['Link']->value->getID(),'show'=>array('cContent'),'secondary'=>true,'data'=>$_smarty_tpl->tpl_vars['Link']->value->getData()),$_smarty_tpl ) );?>

        <?php }?>
    </div>
</div>
<?php }
}
