<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:32:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/boxen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34c4e535ea2_50709852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88c291cdcbab3aac69b3a61043fa0a4951967bb8' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/boxen.tpl',
      1 => 1738748274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/searchpicker_modal.tpl' => 4,
    'file:snippets/buttons/saveAndContinueButton.tpl' => 1,
    'file:tpl_inc/seiten_liste.tpl' => 1,
    'file:tpl_inc/boxen_side.tpl' => 1,
    'file:tpl_inc/boxen_middle.tpl' => 1,
    'file:tpl_inc/config_section.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67a34c4e535ea2_50709852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('boxen'),'cBeschreibung'=>__('boxenDesc'),'cDokuURL'=>__('boxenURL')), 0, false);
?>

<?php ob_start();
echo __('titleChooseProducts');
$_prefixVariable1=ob_get_clean();
ob_start();
echo __('labelSearchProduct');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/searchpicker_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('searchPickerName'=>'articlePicker','modalTitle'=>$_prefixVariable1,'searchInputLabel'=>$_prefixVariable2), 0, false);
ob_start();
echo __('titleChooseCategory');
$_prefixVariable3=ob_get_clean();
ob_start();
echo __('labelSearchCategory');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/searchpicker_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('searchPickerName'=>'categoryPicker','modalTitle'=>$_prefixVariable3,'searchInputLabel'=>$_prefixVariable4), 0, true);
ob_start();
echo __('titleChooseManufacturer');
$_prefixVariable5=ob_get_clean();
ob_start();
echo __('labelSearchManufacturer');
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/searchpicker_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('searchPickerName'=>'manufacturerPicker','modalTitle'=>$_prefixVariable5,'searchInputLabel'=>$_prefixVariable6), 0, true);
ob_start();
echo __('titleChoosePage');
$_prefixVariable7=ob_get_clean();
ob_start();
echo __('labelSearchPage');
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/searchpicker_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('searchPickerName'=>'pagePicker','modalTitle'=>$_prefixVariable7,'searchInputLabel'=>$_prefixVariable8), 0, true);
?>

<?php echo '<script'; ?>
>
    $(function () {
        window.articlePicker = new SearchPicker({
            searchPickerName:  'articlePicker',
            getDataIoFuncName: 'getProducts',
            keyName:           'kArtikel',
            renderItemCb:      renderItemName
        });
        window.categoryPicker = new SearchPicker({
            searchPickerName:  'categoryPicker',
            getDataIoFuncName: 'getCategories',
            keyName:           'kKategorie',
            renderItemCb:      renderItemName
        });
        window.manufacturerPicker = new SearchPicker({
            searchPickerName:  'manufacturerPicker',
            getDataIoFuncName: 'getManufacturers',
            keyName:           'kHersteller',
            renderItemCb:      renderItemName
        });
        window.pagePicker = new SearchPicker({
            searchPickerName:  'pagePicker',
            getDataIoFuncName: 'getPages',
            keyName:           'kLink',
            renderItemCb:      renderItemName
        });
    });

    function renderItemName(item)
    {
        return '<p class="list-group-item-text">' + item.cName + '</p>';
    }

    function openFilterPicker(picker, kBox)
    {
        picker
            .setOnApplyBefore(
                function () { onApplyBeforeFilterPicker(kBox) }
            )
            .setOnApply(
                function (selectedKeys, selectedItems) { onApplyFilterPicker(kBox, selectedKeys, selectedItems) }
            )
            .setSelection($('#box-filter-' + kBox).val().split(',').filter(Boolean))
            .show();
    }

    function onApplyBeforeFilterPicker(kBox)
    {
        $('#box-active-filters-' + kBox)
            .empty()
            .append(
                '<li class="selected-item"><i class="fa fa-spinner fa-pulse"></i></li>'
            );
    }

    function onApplyFilterPicker(kBox, selectedKeys, selectedItems)
    {
        var $activeFilterList = $('#box-active-filters-' + kBox);

        $('#box-filter-' + kBox).val(selectedKeys.join(','));
        $activeFilterList.empty();

        selectedItems.forEach(function (item) {
            $activeFilterList.append(
                '<li class="selected-item"><i class="fa fa-filter"></i> ' + item.cName + '</li>'
            );
        });
    }
<?php echo '</script'; ?>
>

<div id="content">
    <div class="tabs">
        <nav class="tabs-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-items">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'uebersicht') {?> active<?php }?>" data-toggle="tab" role="tab" href="#overview">
                        <?php echo __('boxen');?>

                    </a>
                </li>
                <li class="nav-items">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'einstellungen') {?> active<?php }?>" data-toggle="tab" role="tab" href="#config">
                        <?php echo __('settings');?>

                    </a>
                </li>
            </ul>
        </nav>
        <div class="tab-content">
            <div id="overview" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'uebersicht') {?> active show<?php }?>">
                <?php if (count($_smarty_tpl->tpl_vars['invisibleBoxes']->value) > 0) {?>
                    <div class="alert alert-danger"><?php echo __('warningInvisibleBoxes');?>
</div>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post" class="block">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <div class="card editorInner">
                            <div class="card-header">
                                <div class="subheading1"><?php echo __('invisibleBoxes');?>
</div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-align-top">
                                        <tr class="boxRow">
                                            <th class="check">&nbsp;</th>
                                            <th>
                                                <strong><?php echo __('boxTitle');?>
</strong>
                                            </th>
                                            <th>
                                                <strong><?php echo __('boxLabel');?>
</strong>
                                            </th>
                                            <th>
                                                <strong><?php echo __('boxTemplate');?>
</strong>
                                            </th>
                                            <th>
                                                <strong><?php echo __('position');?>
</strong>
                                            </th>
                                        </tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invisibleBoxes']->value, 'invisibleBox');
$_smarty_tpl->tpl_vars['invisibleBox']->index = -1;
$_smarty_tpl->tpl_vars['invisibleBox']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invisibleBox']->value) {
$_smarty_tpl->tpl_vars['invisibleBox']->do_else = false;
$_smarty_tpl->tpl_vars['invisibleBox']->index++;
$__foreach_invisibleBox_0_saved = $_smarty_tpl->tpl_vars['invisibleBox'];
?>
                                            <tr>
                                                <td class="check">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" name="kInvisibleBox[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['invisibleBox']->value->kBox;?>
" id="kInvisibleBox-<?php echo $_smarty_tpl->tpl_vars['invisibleBox']->index;?>
">
                                                        <label class="custom-control-label" for="kInvisibleBox-<?php echo $_smarty_tpl->tpl_vars['invisibleBox']->index;?>
"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label for="kInvisibleBox-<?php echo $_smarty_tpl->tpl_vars['invisibleBox']->index;?>
"><?php echo $_smarty_tpl->tpl_vars['invisibleBox']->value->cTitel;?>
</label>
                                                </td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['invisibleBox']->value->cName;?>

                                                </td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['invisibleBox']->value->cTemplate;?>

                                                </td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['invisibleBox']->value->ePosition;?>

                                                </td>
                                            </tr>
                                        <?php
$_smarty_tpl->tpl_vars['invisibleBox'] = $__foreach_invisibleBox_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <tr>
                                            <td class="check">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS" type="checkbox" onclick="AllMessages(this.form);">
                                                    <label class="custom-control-label" for="ALLMSGS"></label>
                                                </div>
                                            </td>
                                            <td colspan="4" class="text-left"><label for="ALLMSGS"><?php echo __('globalSelectAll');?>
</label></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button name="action" type="submit" class="btn btn-danger" value="delete-invisible"><i class="fas fa-trash-alt"></i> <?php echo __('deleteSelected');?>
</button>
                            </div>
                        </div>
                    </form>
                <?php }?>
                <?php if (!is_array($_smarty_tpl->tpl_vars['oBoxenContainer']->value) || count($_smarty_tpl->tpl_vars['oBoxenContainer']->value) == 0) {?>
                    <div class="alert alert-danger"><?php echo __('noTemplateConfig');?>
</div>
                <?php } elseif (!$_smarty_tpl->tpl_vars['oBoxenContainer']->value['left'] && !$_smarty_tpl->tpl_vars['oBoxenContainer']->value['right'] && !$_smarty_tpl->tpl_vars['oBoxenContainer']->value['top'] && !$_smarty_tpl->tpl_vars['oBoxenContainer']->value['bottom']) {?>
                    <div class="alert alert-danger"><?php echo __('noBoxActivated');?>
</div>
                <?php } else { ?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['oEditBox']->value)) && $_smarty_tpl->tpl_vars['oEditBox']->value) {?>
                        <div id="editor" class="editor">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post">
                                <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                                <div class="card editorInner">
                                    <div class="card-header">
                                        <div class="subheading1"><?php echo __('boxEdit');?>
</div>
                                        <hr class="mb-n3">
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group form-row align-items-center">
                                            <label class="col col-sm-4 col-form-label text-sm-right" for="boxtitle"><?php echo __('boxTitle');?>
:</label>
                                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                                <input class="form-control" id="boxtitle" type="text" name="boxtitle" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['oEditBox']->value->cTitel, ENT_QUOTES, 'utf-8', true);?>
" />
                                            </div>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['oEditBox']->value->eTyp === 'text') {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                                <div class="form-group form-row align-items-center">
                                                    <label class="col col-sm-4 col-form-label text-sm-right" for="title-<?php echo $_smarty_tpl->tpl_vars['language']->value->getIso();?>
"><?php echo __('boxTitle');?>
 <?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
</label>
                                                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                                        <input class="form-control" id="title-<?php echo $_smarty_tpl->tpl_vars['language']->value->getIso();?>
" type="text" name="title[<?php echo $_smarty_tpl->tpl_vars['language']->value->getIso();?>
]" value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oEditBox']->value->oSprache_arr, 'oBoxSprache');
$_smarty_tpl->tpl_vars['oBoxSprache']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oBoxSprache']->value) {
$_smarty_tpl->tpl_vars['oBoxSprache']->do_else = false;
if ($_smarty_tpl->tpl_vars['language']->value->getIso() === $_smarty_tpl->tpl_vars['oBoxSprache']->value->cISO) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['oBoxSprache']->value->cTitel, ENT_QUOTES, 'utf-8', true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>" />
                                                    </div>
                                                </div>
                                                <?php $_smarty_tpl->_assignInScope('textareaContent', '');?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oEditBox']->value->oSprache_arr, 'oBoxSprache');
$_smarty_tpl->tpl_vars['oBoxSprache']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oBoxSprache']->value) {
$_smarty_tpl->tpl_vars['oBoxSprache']->do_else = false;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['language']->value->getIso() === $_smarty_tpl->tpl_vars['oBoxSprache']->value->cISO) {?>
                                                        <?php $_smarty_tpl->_assignInScope('textareaContent', $_smarty_tpl->tpl_vars['oBoxSprache']->value->cInhalt);?>
                                                        <?php break 1;?>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <textarea id="text-<?php echo $_smarty_tpl->tpl_vars['language']->value->getIso();?>
" name="text[<?php echo $_smarty_tpl->tpl_vars['language']->value->getIso();?>
]"
                                                          class="form-control tinymce" rows="15"
                                                          cols="60"><?php echo htmlentities($_smarty_tpl->tpl_vars['textareaContent']->value);?>
</textarea>
                                                <hr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['oEditBox']->value->eTyp === 'catbox') {?>
                                            <div class="form-group form-row align-items-center">
                                                <label class="col col-sm-4 col-form-label text-sm-right" for="linkID"><?php echo __('catBoxNum');?>
:</label>
                                                <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                                    <input class="form-control" id="linkID" type="text" name="linkID" value="<?php echo $_smarty_tpl->tpl_vars['oEditBox']->value->kCustomID;?>
">
                                                </div>
                                                <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('catBoxNumTooltip')),$_smarty_tpl ) );?>

                                                </div>
                                            </div>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                                <div class="form-group form-row align-items-center">
                                                    <label class="col col-sm-4 col-form-label text-sm-right" for="title-<?php echo $_smarty_tpl->tpl_vars['language']->value->getIso();?>
"><?php echo __('boxTitle');?>
 <?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
:</label>
                                                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                                        <input class="form-control" id="title-<?php echo $_smarty_tpl->tpl_vars['language']->value->getIso();?>
" type="text"
                                                               name="title[<?php echo $_smarty_tpl->tpl_vars['language']->value->getIso();?>
]"
                                                               value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oEditBox']->value->oSprache_arr, 'oBoxSprache');
$_smarty_tpl->tpl_vars['oBoxSprache']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oBoxSprache']->value) {
$_smarty_tpl->tpl_vars['oBoxSprache']->do_else = false;
if ($_smarty_tpl->tpl_vars['language']->value->getIso() === $_smarty_tpl->tpl_vars['oBoxSprache']->value->cISO) {
echo $_smarty_tpl->tpl_vars['oBoxSprache']->value->cTitel;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
                                                    </div>
                                                </div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['oEditBox']->value->eTyp === 'link') {?>
                                            <div class="form-group form-row align-items-center">
                                                <label class="col col-sm-4 col-form-label text-sm-right" for="linkID"><?php echo __('linkgroup');?>
:</label>
                                                <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                                    <select class="custom-select" id="linkID" name="linkID" required>
                                                        <option value="" <?php if ($_smarty_tpl->tpl_vars['oEditBox']->value->kCustomID == 0) {?>selected="selected"<?php }?>><?php echo __('FillOut');?>
</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oLink_arr']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['link']->value->getID();?>
" <?php if ($_smarty_tpl->tpl_vars['link']->value->getID() == $_smarty_tpl->tpl_vars['oEditBox']->value->kCustomID) {?>selected="selected"<?php }?>>
                                                                <?php echo $_smarty_tpl->tpl_vars['link']->value->getName();?>

                                                            </option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                                <div class="form-group form-row align-items-center">
                                                    <label class="col col-sm-4 col-form-label text-sm-right" for="title-<?php echo $_smarty_tpl->tpl_vars['language']->value->getIso();?>
"><?php echo __('boxTitle');?>
 (<?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
):</label>
                                                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                                        <input class="form-control" id="title-<?php echo $_smarty_tpl->tpl_vars['language']->value->getIso();?>
" type="text" name="title[<?php echo $_smarty_tpl->tpl_vars['language']->value->getIso();?>
]" value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oEditBox']->value->oSprache_arr, 'oBoxSprache');
$_smarty_tpl->tpl_vars['oBoxSprache']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oBoxSprache']->value) {
$_smarty_tpl->tpl_vars['oBoxSprache']->do_else = false;
if ($_smarty_tpl->tpl_vars['language']->value->getIso() === $_smarty_tpl->tpl_vars['oBoxSprache']->value->cISO) {
echo $_smarty_tpl->tpl_vars['oBoxSprache']->value->cTitel;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>" />
                                                    </div>
                                                </div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                        <input type="hidden" name="item" id="editor_id" value="<?php echo $_smarty_tpl->tpl_vars['oEditBox']->value->kBox;?>
" />
                                        <input type="hidden" name="action" value="edit" />
                                        <input type="hidden" name="typ" value="<?php echo $_smarty_tpl->tpl_vars['oEditBox']->value->eTyp;?>
" />
                                        <input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['nPage']->value;?>
" />
                                        <?php if (!empty($_smarty_tpl->tpl_vars['oEditBox']->value->kBox) && $_smarty_tpl->tpl_vars['oEditBox']->value->supportsRevisions === true) {?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getRevisions'][0], array( array('type'=>'box','key'=>$_smarty_tpl->tpl_vars['oEditBox']->value->kBox,'show'=>array('cTitel','cInhalt'),'secondary'=>true,'data'=>$_smarty_tpl->tpl_vars['revisionData']->value),$_smarty_tpl ) );?>

                                        <?php }?>
                                    </div>
                                    <div class="card-footer save-wrapper">
                                        <div class="row">
                                            <div class="ml-auto col-sm-6 col-xl-auto">
                                                <button type="button" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
'" class="btn btn-outline-primary btn-block">
                                                    <?php echo __('cancelWithIcon');?>

                                                </button>
                                            </div>
                                            <div class="col-sm-6 col-xl-auto">
                                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/buttons/saveAndContinueButton.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                            </div>
                                            <div class="col-sm-6 col-xl-auto">
                                                <button type="submit" value="<?php echo __('save');?>
" class="btn btn-primary btn-block">
                                                    <?php echo __('saveWithIcon');?>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['nPage']->value === 0) {?>
                            <div class="alert alert-info"><?php echo __('warningChangesForAllPages');?>
</div>
                        <?php }?>
                        <div class="card">
                            <div class="card-body">
                                <form name="boxen" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                                    <div class="input-group left">
                                        <span class="input-group-addon">
                                            <label for="<?php echo __('page');?>
"><?php echo __('page');?>
:</label>
                                        </span>
                                        <span class="label-wrap last">
                                            <select name="page" class="selectBox custom-select" id="<?php echo __('page');?>
" onchange="document.boxen.submit();">
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seiten_liste.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                            </select>
                                        </span>
                                        <input type="hidden" name="boxen" value="1" />
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="boxWrapper row">
                            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/boxen_side.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/boxen_middle.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        </div>
                    <?php }?>
                <?php }?>
            </div>
            <div id="config" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'einstellungen') {?> active show<?php }?>">
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'einstellen','a'=>'saveSettings','action'=>($_smarty_tpl->tpl_vars['adminURL']->value).($_smarty_tpl->tpl_vars['route']->value),'buttonCaption'=>__('save'),'title'=>__('settings'),'tab'=>'einstellungen','showNonConf'=>true), 0, false);
?>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
