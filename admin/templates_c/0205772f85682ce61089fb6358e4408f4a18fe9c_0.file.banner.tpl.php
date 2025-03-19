<?php
/* Smarty version 4.5.4, created on 2025-02-05 13:20:11
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3577b755dc3_12222028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0205772f85682ce61089fb6358e4408f4a18fe9c' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/banner.tpl',
      1 => 1738748271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/fileupload.tpl' => 1,
    'file:snippets/daterange_picker.tpl' => 2,
    'file:tpl_inc/seiten_liste.tpl' => 3,
    'file:tpl_inc/pagination.tpl' => 2,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67a3577b755dc3_12222028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/includes/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bForceFluid'=>($_smarty_tpl->tpl_vars['action']->value === 'area')), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('banner'),'cBeschreibung'=>__('bannerDesc'),'cDokuURL'=>__('bannerURL')), 0, false);
?>
<div id="content">
<?php if ($_smarty_tpl->tpl_vars['action']->value === 'edit' || $_smarty_tpl->tpl_vars['action']->value === 'new') {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $('#nSeitenTyp').on('change', filterConfigUpdate);
            $('#cKey').on('change', filterConfigUpdate);

            filterConfigUpdate();
        });

        function filterConfigUpdate()
        {
            var $nSeitenTyp = $('#nSeitenTyp');
            var $type2      = $('#type2');
            var $nl         = $('.nl');
            var $cKey       = $('#cKey');

            $nl.hide();
            $('.key').hide();
            $type2.hide();

            switch ($nSeitenTyp.val()) {
                case '1':
                    $nl.show();
                    $('#keykArtikel').show();
                    $cKey.val('');
                    break;
                case '2':
                    $type2.show();
                    if ($cKey.val() !== '') {
                        $('#key' + $cKey.val()).show();
                        $nl.show();
                    }
                    break;
                case '31':
                    $nl.show();
                    $('#keykLink').show();
                    $cKey.val('');
                    break;
                default:
                    $cKey.val('');
                    break;
            }
        }
    <?php echo '</script'; ?>
>
    <div id="settings">
        <form name="banner" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post" enctype="multipart/form-data">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
            <?php if ($_smarty_tpl->tpl_vars['action']->value === 'edit') {?>
                <input type="hidden" name="kImageMap" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value->kImageMap;?>
" />
            <?php }?>

            <div class="card">
                <div class="card-header">
                    <div class="subheading1"><?php echo __('general');?>
</div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cName"><?php echo __('internalName');?>
 *:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input class="form-control" type="text" name="cName" id="cName" value="<?php if ((isset($_smarty_tpl->tpl_vars['cName']->value))) {
echo $_smarty_tpl->tpl_vars['cName']->value;
} elseif ((isset($_smarty_tpl->tpl_vars['banner']->value->cTitel))) {
echo $_smarty_tpl->tpl_vars['banner']->value->cTitel;
}?>" />
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center file-input">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="oFile"><?php echo __('banner');?>
 *:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <?php ob_start();
if (!empty($_smarty_tpl->tpl_vars['banner']->value->cBildPfad)) {
echo "
                                        '<img src=\"";
echo (string)$_smarty_tpl->tpl_vars['banner']->value->cBildPfad;
echo "\" class=\"mb-3\" />'
                                        ";
}
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/fileupload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fileID'=>'oFile','fileShowRemove'=>true,'fileInitialPreview'=>"[
                                        ".$_prefixVariable1."
                                    ]"), 0, false);
?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cPath">&raquo; <?php echo __('chooseAvailableFile');?>
:</label>
                        <span class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <?php if (count($_smarty_tpl->tpl_vars['bannerFiles']->value) > 0) {?>
                            <select id="cPath" name="cPath" class="custom-select">
                                <option value=""><?php echo __('chooseBanner');?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bannerFiles']->value, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" <?php if (((isset($_smarty_tpl->tpl_vars['banner']->value->cBildPfad)) && $_smarty_tpl->tpl_vars['file']->value === $_smarty_tpl->tpl_vars['banner']->value->cBildPfad) || ((isset($_smarty_tpl->tpl_vars['banner']->value->cBild)) && $_smarty_tpl->tpl_vars['file']->value === $_smarty_tpl->tpl_vars['banner']->value->cBild)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['file']->value;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        <?php } else { ?>
                            <?php echo sprintf(__('warningNoBannerInDir'),(defined('PFAD_BILDER_BANNER') ? constant('PFAD_BILDER_BANNER') : null));?>

                        <?php }?>
                        </span>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="vDatum"><?php echo __('activeFrom');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input class="form-control" type="text" name="vDatum" id="vDatum" autocomplete="off">
                        </div>
                        <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['vDatum']->value)) && $_smarty_tpl->tpl_vars['vDatum']->value > 0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vDatum']->value,'d.m.Y');
} elseif ((isset($_smarty_tpl->tpl_vars['banner']->value->vDatum)) && $_smarty_tpl->tpl_vars['banner']->value->vDatum > 0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['banner']->value->vDatum,'d.m.Y');
}
$_prefixVariable2=ob_get_clean();
ob_start();
echo __('datepickerSeparator');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:snippets/daterange_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('datepickerID'=>"#vDatum",'currentDate'=>$_prefixVariable2,'format'=>"DD.MM.YYYY",'separator'=>$_prefixVariable3,'single'=>true), 0, false);
?>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="bDatum"><?php echo __('activeTo');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input class="form-control" type="text" name="bDatum" id="bDatum" autocomplete="off">
                        </div>
                        <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['bDatum']->value)) && $_smarty_tpl->tpl_vars['bDatum']->value > 0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['bDatum']->value,'d.m.Y');
} elseif ((isset($_smarty_tpl->tpl_vars['banner']->value->bDatum)) && $_smarty_tpl->tpl_vars['banner']->value->bDatum > 0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['banner']->value->bDatum,'d.m.Y');
}
$_prefixVariable4=ob_get_clean();
ob_start();
echo __('datepickerSeparator');
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:snippets/daterange_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('datepickerID'=>"#bDatum",'currentDate'=>$_prefixVariable4,'format'=>"DD.MM.YYYY",'separator'=>$_prefixVariable5,'single'=>true), 0, true);
?>
                    </div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->

            
            <div class="card">
                <div class="card-header">
                    <div class="subheading1"><?php echo __('viewingOptions');?>
</div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="kSprache"><?php echo __('changeLanguage');?>
:</label>
                        <span class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select class="custom-select" id="kSprache" name="kSprache">
                                <option value="0"><?php echo __('all');?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value->getId();?>
" <?php if ((isset($_smarty_tpl->tpl_vars['kSprache']->value)) && $_smarty_tpl->tpl_vars['kSprache']->value === $_smarty_tpl->tpl_vars['language']->value->getId()) {?>selected="selected" <?php } elseif ((isset($_smarty_tpl->tpl_vars['oExtension']->value->kSprache)) && (int)$_smarty_tpl->tpl_vars['oExtension']->value->kSprache === $_smarty_tpl->tpl_vars['language']->value->getId()) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </span>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="kKundengruppe"><?php echo __('customerGroup');?>
:</label>
                        <span class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select class="custom-select" id="kKundengruppe" name="kKundengruppe">
                                <option value="0"><?php echo __('all');?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customerGroups']->value, 'customerGroup');
$_smarty_tpl->tpl_vars['customerGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customerGroup']->value) {
$_smarty_tpl->tpl_vars['customerGroup']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['customerGroup']->value->getID();?>
"
                                            <?php if ((isset($_smarty_tpl->tpl_vars['kKundengruppe']->value)) && $_smarty_tpl->tpl_vars['kKundengruppe']->value == $_smarty_tpl->tpl_vars['customerGroup']->value->getID()) {?>selected="selected"
                                            <?php } elseif ((isset($_smarty_tpl->tpl_vars['oExtension']->value->kKundengruppe)) && $_smarty_tpl->tpl_vars['oExtension']->value->kKundengruppe == $_smarty_tpl->tpl_vars['customerGroup']->value->getID()) {?>selected="selected"<?php }?>
                                    ><?php echo $_smarty_tpl->tpl_vars['customerGroup']->value->getName();?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </span>
                    </div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="nSeitenTyp"><?php echo __('pageType');?>
:</label>
                        <span class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select class="custom-select" id="nSeitenTyp" name="nSeitenTyp">
                                <?php if ((isset($_smarty_tpl->tpl_vars['nSeitenTyp']->value)) && intval($_smarty_tpl->tpl_vars['nSeitenTyp']->value) > 0) {?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seiten_liste.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nPage'=>$_smarty_tpl->tpl_vars['nSeitenTyp']->value), 0, false);
?>
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['oExtension']->value->nSeite))) {?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seiten_liste.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nPage'=>$_smarty_tpl->tpl_vars['oExtension']->value->nSeite), 0, true);
?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seiten_liste.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nPage'=>0), 0, true);
?>
                                <?php }?>
                            </select>
                        </span>
                    </div>
                    <div id="type2" class="custom">
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="cKey"><?php echo __('filter');?>
</label>
                            <span class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <select class="custom-select" id="cKey" name="cKey">
                                    <option value="" <?php if ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === '') {?>selected="selected"<?php }?>>
                                        <?php echo __('noFilter');?>

                                    </option>
                                    <option value="kMerkmalWert" <?php if ((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kMerkmalWert') {?>selected="selected" <?php } elseif ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kMerkmalWert') {?>selected="selected"<?php }?>>
                                        <?php echo __('attribute');?>

                                    </option>
                                    <option value="kKategorie" <?php if ((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kKategorie') {?>selected="selected" <?php } elseif ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kKategorie') {?>selected="selected"<?php }?>>
                                        <?php echo __('category');?>

                                    </option>
                                    <option value="kHersteller" <?php if ((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kHersteller') {?>selected="selected" <?php } elseif ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kHersteller') {?>selected="selected"<?php }?>>
                                        <?php echo __('manufacturer');?>

                                    </option>
                                    <option value="cSuche" <?php if ((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'cSuche') {?>selected="selected" <?php } elseif ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'cSuche') {?>selected="selected"<?php }?>>
                                        <?php echo __('searchTerm');?>

                                    </option>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="nl">
                        <div id="keykArtikel" class="form-group form-row align-items-center key">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="article_name"><?php echo __('product');?>
</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input type="hidden" name="article_key" id="article_key"
                                       value="<?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kArtikel') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kArtikel')) {
echo $_smarty_tpl->tpl_vars['oExtension']->value->cValue;
}?>">
                                <input class="form-control" type="text" name="article_name" id="article_name">
                                <i class="fas fa-spinner fa-pulse typeahead-spinner"></i>
                            </div>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('typeAheadProduct')),$_smarty_tpl ) );?>
</div>
                            <?php echo '<script'; ?>
>
                                enableTypeahead('#article_name', 'getProducts', 'cName', null, function(e, item) {
                                    $('#article_name').val(item.cName);
                                    $('#article_key').val(item.kArtikel);
                                }, $('#keykArtikel .fa-spinner'));
                                <?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kArtikel') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kArtikel')) {?>
                                    ioCall('getProducts', [[$('#article_key').val()]], function (data) {
                                        $('#article_name').val(data[0].cName);
                                    });
                                <?php }?>
                            <?php echo '</script'; ?>
>
                        </div>
                        <div id="keykLink" class="form-group form-row align-items-center key">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="link_name"><?php echo __('pageSelf');?>
</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input type="hidden" name="link_key" id="link_key"
                                       value="<?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kLink') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kLink')) {
echo $_smarty_tpl->tpl_vars['oExtension']->value->cValue;
}?>">
                                <input class="form-control" type="text" name="link_name" id="link_name">
                                <i class="fas fa-spinner fa-pulse typeahead-spinner"></i>
                            </div>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('typeAheadPage')),$_smarty_tpl ) );?>
</div>
                            <?php echo '<script'; ?>
>
                                enableTypeahead('#link_name', 'getPages', 'cName', null, function(e, item) {
                                    $('#link_name').val(item.cName);
                                    $('#link_key').val(item.kLink);
                                }, $('#keykLink .fa-spinner'));
                                <?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kLink') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kLink')) {?>
                                    ioCall('getPages', [[$('#link_key').val()]], function (data) {
                                        $('#link_name').val(data[0].cName);
                                    });
                                <?php }?>
                            <?php echo '</script'; ?>
>
                        </div>
                        <div id="keykMerkmalWert" class="form-group form-row align-items-center key">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="attribute_name"><?php echo __('attribute');?>
</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input type="hidden" name="attribute_key" id="attribute_key"
                                       value="<?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kMerkmalWert') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kMerkmalWert')) {
echo $_smarty_tpl->tpl_vars['oExtension']->value->cValue;
}?>">
                                <input class="form-control" type="text" name="attribute_name" id="attribute_name">
                                <i class="fas fa-spinner fa-pulse typeahead-spinner"></i>
                            </div>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('typeAheadAttribute')),$_smarty_tpl ) );?>
</div>
                            <?php echo '<script'; ?>
>
                                enableTypeahead('#attribute_name', 'getAttributes', 'cWert', null, function(e, item) {
                                    $('#attribute_name').val(item.cWert);
                                    $('#attribute_key').val(item.kMerkmalWert);
                                }, $('#keykMerkmalWert .fa-spinner'));
                                <?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kMerkmalWert') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kMerkmalWert')) {?>
                                    ioCall('getAttributes', [[$('#attribute_key').val()]], function (data) {
                                        $('#attribute_name').val(data[0].cWert);
                                    });
                                <?php }?>
                            <?php echo '</script'; ?>
>
                        </div>
                        <div id="keykKategorie" class="form-group form-row align-items-center key">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="categories_name"><?php echo __('category');?>
</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input type="hidden" name="categories_key" id="categories_key"
                                       value="<?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kKategorie') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kKategorie')) {
echo $_smarty_tpl->tpl_vars['oExtension']->value->cValue;
}?>">
                                <input class="form-control" type="text" name="categories_name" id="categories_name">
                                <i class="fas fa-spinner fa-pulse typeahead-spinner"></i>
                            </div>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('typeAheadCategory')),$_smarty_tpl ) );?>
</div>
                            <?php echo '<script'; ?>
>
                                enableTypeahead('#categories_name', 'getCategories', function(item) {
                                        var parentName = '';
                                        if (item.parentName !== null) {
                                            parentName = ' (' + item.parentName + ')';
                                        }
                                        return item.cName + parentName;
                                    }, null, function(e, item) {
                                    $('#categories_name').val(item.cName);
                                    $('#categories_key').val(item.kKategorie);
                                }, $('#keykKategorie .fa-spinner'));
                                <?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kKategorie') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kKategorie')) {?>
                                    ioCall('getCategories', [[$('#categories_key').val()]], function (data) {
                                        $('#categories_name').val(data[0].cName);
                                    });
                                <?php }?>
                            <?php echo '</script'; ?>
>
                        </div>
                        <div id="keykHersteller" class="form-group form-row align-items-center key">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="manufacturer_name"><?php echo __('manufacturer');?>
</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input type="hidden" name="manufacturer_key" id="manufacturer_key"
                                       value="<?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kHersteller') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kHersteller')) {
echo $_smarty_tpl->tpl_vars['oExtension']->value->cValue;
}?>">
                                <input class="form-control" type="text" name="manufacturer_name" id="manufacturer_name">
                                <i class="fas fa-spinner fa-pulse typeahead-spinner"></i>
                            </div>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('typeAheadManufacturer')),$_smarty_tpl ) );?>
</div>
                            <?php echo '<script'; ?>
>
                                enableTypeahead('#manufacturer_name', 'getManufacturers', 'cName', null, function(e, item) {
                                    $('#manufacturer_name').val(item.cName);
                                    $('#manufacturer_key').val(item.kHersteller);
                                }, $('#keykHersteller .fa-spinner'));
                                <?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kHersteller') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kHersteller')) {?>
                                    ioCall('getManufacturers', [[$('#manufacturer_key').val()]], function (data) {
                                        $('#manufacturer_name').val(data[0].cName);
                                    });
                                <?php }?>
                            <?php echo '</script'; ?>
>
                        </div>
                        <div id="keycSuche" class="key form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="ikeycSuche"><?php echo __('searchTerm');?>
</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <input class="form-control" type="text" id="ikeycSuche" name="keycSuche"
                                       value="<?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'cSuche') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'cSuche')) {
if ((isset($_smarty_tpl->tpl_vars['keycSuche']->value)) && $_smarty_tpl->tpl_vars['keycSuche']->value !== '') {
echo $_smarty_tpl->tpl_vars['keycSuche']->value;
} else {
echo $_smarty_tpl->tpl_vars['oExtension']->value->cValue;
}
}?>" />
                            </div>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('enterSearchTerm')),$_smarty_tpl ) );?>
</div>
                        </div>
                    </div>
                                    </div>
            </div>

            <div class="save-wrapper">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto">
                        <a class="btn btn-outline-primary btn-block" href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                            <?php echo __('cancelWithIcon');?>

                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <button type="submit" class="btn btn-primary btn-block" value="Banner speichern">
                            <i class="fa fa-save"></i> <?php echo __('saveBanner');?>

                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value === 'area') {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateBaseURL']->value;?>
js/clickareas.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateBaseURL']->value;?>
css/clickareas.css" type="text/css" media="screen">
    <?php echo '<script'; ?>
>
        $(() => {
            $.clickareas({
                'id': '#area_wrapper',
                'editor': '#area_editor',
                'save': '#area_save',
                'add': '#area_new',
                'info': '#area_info',
                'data': <?php echo json_encode($_smarty_tpl->tpl_vars['banner']->value);?>

            });

            $('#article_unlink').on('click', () => {
                $('#article_id').val(0);
                $('#article_name').val('');
                return false;
            });
        });
    <?php echo '</script'; ?>
>
    <div class="category clearall">
        <div class="left"><?php echo __('zones');?>
</div>
        <div class="right" id="area_info"></div>
    </div>
    <div id="area_container">
        <div id="area_wrapper">
            <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value->cBildPfad;?>
" title="" id="clickarea" alt="Banner">
        </div>
        <div id="area_editor" class="card">
            <div id="settings" class="card-body">
                <div class="save-wrapper btn-group">
                    <a href="#" class="btn btn-default" id="article_unlink"><?php echo __('deleteProduct');?>
</a>
                    <a href="#" class="btn btn-default" id="area_new">
                        <i class="fa fa-share"></i> <?php echo __('newZone');?>

                    </a>
                    <button type="button" class="btn btn-danger" id="remove">
                        <i class="fas fa-trash-alt"></i> <?php echo __('deleteZone');?>

                    </button>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="form-control" type="text" id="title" name="title" placeholder="<?php echo __('title');?>
">
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" id="url" name="url" placeholder="<?php echo __('url');?>
">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="form-control" type="text" id="style" name="style" placeholder="<?php echo __('cssClass');?>
">
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input type="hidden" name="article" id="article"
                                   value="<?php if ((isset($_smarty_tpl->tpl_vars['banner']->value->kArtikel))) {
echo $_smarty_tpl->tpl_vars['banner']->value->kArtikel;
}?>" />
                            <input type="text" name="article_name" id="article_name" value=""
                                   class="form-control" placeholder="<?php echo __('product');?>
">
                            <input type="hidden" name="article_id" id="article_id" value="">
                            <?php echo '<script'; ?>
>
                                enableTypeahead('#article_name', 'getProducts', 'cName', null, (e, item) => {
                                    $('#article_name').val(item.cName);
                                    $('#article_id').val(item.kArtikel);
                                });
                            <?php echo '</script'; ?>
>
                        </div>
                    </div>
                </div>
                <textarea class="form-control" id="desc" name="desc"
                          placeholder="<?php echo __('description');?>
"></textarea>
                <input type="hidden" name="id" id="id" />
            </div>
        </div>
    </div>
    <div class="save-wrapper">
        <div class="row">
            <div class="ml-auto col-sm-6 col-xl-auto">
                <a class="btn btn-outline-primary btn-block" href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" id="cancel">
                    <?php echo __('cancelWithIcon');?>

                </a>
            </div>
            <div class="col-sm-6 col-xl-auto">
                <a class="btn btn-primary btn-block" href="#" id="area_save">
                    <i class="fa fa-save"></i> <?php echo __('saveZones');?>

                </a>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div id="settings">
        <div class="card">
            <div class="card-header">
                <div class="subheading1"><?php echo __('availableBanner');?>
</div>
                <hr class="mb-n3">
            </div>
            <div class="card-body">
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value), 0, false);
?>
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th class="text-left" width="25%"><?php echo __('name');?>
</th>
                            <th width="20%" class="text-center"><?php echo __('active');?>
</th>
                            <th class="text-left" width="25%"><?php echo __('runTime');?>
</th>
                            <th width="30%" class="text-center"><?php echo __('action');?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
                            <tr>
                                <td class="text-left">
                                    <?php echo $_smarty_tpl->tpl_vars['banner']->value->cTitel;?>

                                </td>
                                <td class="text-center">
                                    <?php if ((int)$_smarty_tpl->tpl_vars['banner']->value->active === 1) {?>
                                        <i class="fal fa-check text-success"></i>
                                    <?php } else { ?>
                                        <i class="fal fa-times text-danger"></i>
                                    <?php }?>
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['banner']->value->vDatum !== null) {?>
                                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['banner']->value->vDatum,'d.m.Y');?>

                                    <?php }?> -
                                    <?php if ($_smarty_tpl->tpl_vars['banner']->value->bDatum !== null) {?>
                                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['banner']->value->bDatum,'d.m.Y');?>

                                    <?php }?>
                                </td>
                                <td class="text-center">
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post">
                                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value->kImageMap;?>
" />
                                        <div class="btn-group">
                                            <button class="btn btn-link px-2 delete-confirm"
                                                    type="submit"
                                                    name="action"
                                                    value="delete"
                                                    title="<?php echo __('delete');?>
"
                                                    data-toggle="tooltip"
                                                    data-modal-body="<?php echo $_smarty_tpl->tpl_vars['banner']->value->cTitel;?>
">
                                                <span class="icon-hover">
                                                    <span class="fal fa-trash-alt"></span>
                                                    <span class="fas fa-trash-alt"></span>
                                                </span>
                                            </button>
                                            <button class="btn btn-link px-2" name="action" value="area" title="<?php echo __('actionLink');?>
" data-toggle="tooltip">
                                                <span class="icon-hover">
                                                    <span class="fal fa-link"></span>
                                                    <span class="fas fa-link"></span>
                                                </span>
                                            </button>
                                            <button class="btn btn-link px-2" name="action" value="edit" title="<?php echo __('edit');?>
" data-toggle="tooltip">
                                                <span class="icon-hover">
                                                    <span class="fal fa-edit"></span>
                                                    <span class="fas fa-edit"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>

                </div>
            <?php if (count($_smarty_tpl->tpl_vars['banners']->value) === 0) {?>
                <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
            <?php }?>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'isBottom'=>true), 0, true);
?>
            </div>
            <div class="card-footer save-wrapper">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto">
                        <a class="btn btn-primary btn-block" href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?action=new&token=<?php echo $_SESSION['jtl_token'];?>
">
                            <i class="fa fa-share"></i> <?php echo __('addBanner');?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
