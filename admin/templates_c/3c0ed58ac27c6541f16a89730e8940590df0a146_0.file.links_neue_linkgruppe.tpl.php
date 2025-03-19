<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:41:59
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/links_neue_linkgruppe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34e879f0d56_80441172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c0ed58ac27c6541f16a89730e8940590df0a146' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/links_neue_linkgruppe.tpl',
      1 => 1738748468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
  ),
),false)) {
function content_67a34e879f0d56_80441172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('cTitel', __('newLinkGroupTitle'));
if ($_smarty_tpl->tpl_vars['linkGroup']->value !== null) {?>
    <?php $_smarty_tpl->_assignInScope('cTitel', __('saveLinkGroup'));
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>$_smarty_tpl->tpl_vars['cTitel']->value), 0, false);
?>

<div id="content">

    <form name="linkgruppe_erstellen" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
        <div class="card">
            <div class="card-body">
                <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                <input type="hidden" name="kLinkgruppe" value="<?php if ($_smarty_tpl->tpl_vars['linkGroup']->value !== null) {
echo $_smarty_tpl->tpl_vars['linkGroup']->value->getID();
}?>" />

                <div class="settings">
                    <div class="form-group form-row align-items-center<?php if ((isset($_smarty_tpl->tpl_vars['xPlausiVar_arr']->value['cName']))) {?> form-error<?php }?>">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cName"><?php echo __('linkGroup');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input type="text" name="cName" id="cName"  class="form-control" value="<?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['cName']))) {
echo $_smarty_tpl->tpl_vars['xPostVar_arr']->value['cName'];
} elseif ($_smarty_tpl->tpl_vars['linkGroup']->value !== null) {
echo $_smarty_tpl->tpl_vars['linkGroup']->value->getGroupName();
}?>" />
                        </div>
                    </div>

                    <div class="form-group form-row align-items-center<?php if ((isset($_smarty_tpl->tpl_vars['xPlausiVar_arr']->value['cTemplatename']))) {?> form-error<?php }?>">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cTemplatename"><?php echo __('linkGroupTemplatename');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input type="text" name="cTemplatename" id="cTemplatename" class="form-control" value="<?php if ((isset($_smarty_tpl->tpl_vars['xPostVar_arr']->value['cTemplatename']))) {
echo $_smarty_tpl->tpl_vars['xPostVar_arr']->value['cTemplatename'];
} elseif ($_smarty_tpl->tpl_vars['linkGroup']->value !== null) {
echo $_smarty_tpl->tpl_vars['linkGroup']->value->getTemplate();
}?>" />
                        </div>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('cISO', $_smarty_tpl->tpl_vars['language']->value->getIso());?>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="cName_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"><?php echo __('showedName');?>
 (<?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
):</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input class="form-control" type="text" name="cName_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
" id="cName_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
" value="<?php if ($_smarty_tpl->tpl_vars['linkGroup']->value !== null) {
echo $_smarty_tpl->tpl_vars['linkGroup']->value->getName($_smarty_tpl->tpl_vars['language']->value->getId());
}?>" />
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

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
                        <button type="submit" class="btn btn-primary btn-block" name="action" value="save-linkgroup"><i class="fa fa-save"></i> <?php echo $_smarty_tpl->tpl_vars['cTitel']->value;?>
</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php }
}
