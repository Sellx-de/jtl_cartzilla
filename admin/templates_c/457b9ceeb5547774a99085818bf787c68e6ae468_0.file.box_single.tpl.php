<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:32:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/box_single.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34c4e658e70_73521820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '457b9ceeb5547774a99085818bf787c68e6ae468' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/box_single.tpl',
      1 => 1738748469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a34c4e658e70_73521820 (Smarty_Internal_Template $_smarty_tpl) {
?><tr class="<?php if ((isset($_smarty_tpl->tpl_vars['borderTop']->value))) {?>tr-divider-top <?php } elseif ((isset($_smarty_tpl->tpl_vars['borderBottom']->value)) && $_smarty_tpl->tpl_vars['borderBottom']->value) {?>tr-divider-bottom<?php }?> <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>text-muted<?php }?>"
    <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>data-toggle="tooltip" title="<?php echo __('notAllowedForPage');?>
"<?php }?>>
    <?php $_smarty_tpl->_assignInScope('isActive', $_smarty_tpl->tpl_vars['oBox']->value->getFilter($_smarty_tpl->tpl_vars['nPage']->value) === true || is_array($_smarty_tpl->tpl_vars['oBox']->value->getFilter($_smarty_tpl->tpl_vars['nPage']->value)));?>
    <?php if ($_smarty_tpl->tpl_vars['oBox']->value->getBaseType() === (defined('BOX_CONTAINER') ? constant('BOX_CONTAINER') : null)) {?>
        <td class="<?php if (!$_smarty_tpl->tpl_vars['isActive']->value) {?> inactive text-muted<?php }?>">
            <b>Container #<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
</b>
        </td>
        <td></td>
        <td></td>
    <?php } else { ?>
        <td class="<?php if (!$_smarty_tpl->tpl_vars['isActive']->value) {?> inactive text-muted<?php }
if ($_smarty_tpl->tpl_vars['oBox']->value->getContainerID() > 0) {?> boxSubName<?php }?>">
            <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['oBox']->value->getTitle(), ENT_QUOTES, 'utf-8', true);?>

        </td>
        <td class="<?php if (!$_smarty_tpl->tpl_vars['isActive']->value) {?> inactive text-muted<?php }?>">
            <?php echo ucfirst($_smarty_tpl->tpl_vars['oBox']->value->getType());?>

        </td>
        <td class="<?php if (!$_smarty_tpl->tpl_vars['isActive']->value) {?> inactive text-muted<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['oBox']->value->getName();?>

        </td>
    <?php }?>
    <td>
        <div class="custom-control custom-checkbox d-inline-block">
            <input class="custom-control-input <?php if (($_smarty_tpl->tpl_vars['nPage']->value !== 0 && is_array($_smarty_tpl->tpl_vars['oBox']->value->getFilter($_smarty_tpl->tpl_vars['nPage']->value))) || ($_smarty_tpl->tpl_vars['nPage']->value === 0 && !Functional\true($_smarty_tpl->tpl_vars['oBox']->value->getFilter()) && !Functional\false($_smarty_tpl->tpl_vars['oBox']->value->getFilter()))) {?> tristate<?php }?>"
                   type="checkbox"
                   name="aktiv[]"
                   id="box-id-<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
"
                   data-box-id="<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
"
                   <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?>
                   <?php if (($_smarty_tpl->tpl_vars['nPage']->value !== 0 && $_smarty_tpl->tpl_vars['oBox']->value->isVisibleOnPage($_smarty_tpl->tpl_vars['nPage']->value)) || ($_smarty_tpl->tpl_vars['nPage']->value === 0 && Functional\true($_smarty_tpl->tpl_vars['oBox']->value->getFilter()))) {?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
">
            <label class="custom-control-label" for="box-id-<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
"></label>
        </div>
        <input type="hidden" name="box[]" value="<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
" <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['nPage']->value === 0 && !Functional\true($_smarty_tpl->tpl_vars['oBox']->value->getFilter()) && !Functional\false($_smarty_tpl->tpl_vars['oBox']->value->getFilter())) {?>
            <input type="hidden" name="ignore[]" value="<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
" id="boxIgnore<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
">
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['nPage']->value === 0) {?>
            <?php if (Functional\true($_smarty_tpl->tpl_vars['oBox']->value->getFilter())) {?>
                <?php echo __('visibleOnAllPages');?>

            <?php } elseif (Functional\false($_smarty_tpl->tpl_vars['oBox']->value->getFilter())) {?>
                <?php echo __('deactivatedOnAllPages');?>

            <?php } else { ?>
                <?php echo __('visibleOnSomePages');?>

            <?php }?>
        <?php } else { ?>
            <ul class="box-active-filters" id="box-active-filters-<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
">
                <?php if ($_smarty_tpl->tpl_vars['oBox']->value->getContainerID() === 0 && is_array($_smarty_tpl->tpl_vars['oBox']->value->getFilter($_smarty_tpl->tpl_vars['nPage']->value))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oBox']->value->getFilter($_smarty_tpl->tpl_vars['nPage']->value), 'pageID', true);
$_smarty_tpl->tpl_vars['pageID']->iteration = 0;
$_smarty_tpl->tpl_vars['pageID']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pageID']->value) {
$_smarty_tpl->tpl_vars['pageID']->do_else = false;
$_smarty_tpl->tpl_vars['pageID']->iteration++;
$_smarty_tpl->tpl_vars['pageID']->last = $_smarty_tpl->tpl_vars['pageID']->iteration === $_smarty_tpl->tpl_vars['pageID']->total;
$__foreach_pageID_13_saved = $_smarty_tpl->tpl_vars['pageID'];
?>
                        <li class="selected-item"><i class="fa fa-filter"></i> <?php echo $_smarty_tpl->tpl_vars['filterMapping']->value[$_smarty_tpl->tpl_vars['pageID']->value];?>
</li>
                    <?php
$_smarty_tpl->tpl_vars['pageID'] = $__foreach_pageID_13_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </ul>
        <?php }?>
    </td>
    <td>
        <div class="input-group form-counter min-w-sm">
            <div class="input-group-prepend">
                <button type="button" class="btn btn-outline-secondary border-0" data-count-down <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?>>
                    <span class="fas fa-minus"></span>
                </button>
            </div>
            <input class="form-control text-right" type="number" name="sort[]" value="<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getSort($_smarty_tpl->tpl_vars['nPage']->value);?>
"
                   autocomplete="off" id="<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getSort($_smarty_tpl->tpl_vars['nPage']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?>>
            <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary border-0" data-count-up <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?>>
                    <span class="fas fa-plus"></span>
                </button>
            </div>
        </div>
    </td>
    <td class="text-center">
        <div class="btn-group">
            <?php if ($_smarty_tpl->tpl_vars['oBox']->value->getBaseType() === (defined('BOX_CONTAINER') ? constant('BOX_CONTAINER') : null)) {?>
                <?php $_smarty_tpl->_assignInScope('boxToDelete', "Container #".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('boxToDelete', htmlentities(htmlspecialchars((string)$_smarty_tpl->tpl_vars['oBox']->value->getTitle(), ENT_QUOTES, 'utf-8', true)));?>
            <?php }?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?action=del&page=<?php echo $_smarty_tpl->tpl_vars['nPage']->value;?>
&position=<?php echo $_smarty_tpl->tpl_vars['position']->value;?>
&item=<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
&token=<?php echo $_SESSION['jtl_token'];?>
"
               title="<?php echo __('remove');?>
"
               class="btn btn-link px-2 delete-confirm <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?>"
               data-modal-body="<?php echo sprintf(__('confirmDeleteBox'),$_smarty_tpl->tpl_vars['boxToDelete']->value);?>
"
               data-toggle="tooltip">
                <span class="icon-hover">
                    <span class="fal fa-trash-alt"></span>
                    <span class="fas fa-trash-alt"></span>
                </span>
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?action=edit_mode&page=<?php echo $_smarty_tpl->tpl_vars['nPage']->value;?>
&position=<?php echo $_smarty_tpl->tpl_vars['position']->value;?>
&item=<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
&token=<?php echo $_SESSION['jtl_token'];?>
"
               title="<?php echo __('edit');?>
"
               data-toggle="tooltip"
               class="btn btn-link px-2<?php if ($_smarty_tpl->tpl_vars['disabled']->value || empty($_smarty_tpl->tpl_vars['oBox']->value->getType()) || ($_smarty_tpl->tpl_vars['oBox']->value->getType() !== JTL\Boxes\Type::TEXT && $_smarty_tpl->tpl_vars['oBox']->value->getType() !== JTL\Boxes\Type::LINK && $_smarty_tpl->tpl_vars['oBox']->value->getType() !== JTL\Boxes\Type::CATBOX)) {?> disabled<?php }?>">
                <span class="icon-hover">
                    <span class="fal fa-edit"></span>
                    <span class="fas fa-edit"></span>
                </span>
            </a>
            <?php if ($_smarty_tpl->tpl_vars['oBox']->value->getContainerID() === 0) {?>
                <?php if ($_smarty_tpl->tpl_vars['nPage']->value === (defined('PAGE_ARTIKEL') ? constant('PAGE_ARTIKEL') : null) || $_smarty_tpl->tpl_vars['nPage']->value === (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) || $_smarty_tpl->tpl_vars['nPage']->value === (defined('PAGE_HERSTELLER') ? constant('PAGE_HERSTELLER') : null) || $_smarty_tpl->tpl_vars['nPage']->value === (defined('PAGE_EIGENE') ? constant('PAGE_EIGENE') : null)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['nPage']->value === (defined('PAGE_ARTIKEL') ? constant('PAGE_ARTIKEL') : null)) {?>
                        <?php $_smarty_tpl->_assignInScope('picker', 'articlePicker');?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['nPage']->value === (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null)) {?>
                        <?php $_smarty_tpl->_assignInScope('picker', 'categoryPicker');?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['nPage']->value === (defined('PAGE_HERSTELLER') ? constant('PAGE_HERSTELLER') : null)) {?>
                        <?php $_smarty_tpl->_assignInScope('picker', 'manufacturerPicker');?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['nPage']->value === (defined('PAGE_EIGENE') ? constant('PAGE_EIGENE') : null)) {?>
                        <?php $_smarty_tpl->_assignInScope('picker', 'pagePicker');?>
                    <?php }?>
                    <?php if (!is_array($_smarty_tpl->tpl_vars['oBox']->value->getFilter($_smarty_tpl->tpl_vars['nPage']->value)) || Functional\true($_smarty_tpl->tpl_vars['oBox']->value->getFilter())) {?>
                        <input type="hidden" id="box-filter-<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
" name="box-filter-<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
" value="" <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?>>
                    <?php } else { ?>
                        <input type="hidden" id="box-filter-<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
" name="box-filter-<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
" <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?>
                               value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oBox']->value->getFilter($_smarty_tpl->tpl_vars['nPage']->value), 'pageID', true);
$_smarty_tpl->tpl_vars['pageID']->iteration = 0;
$_smarty_tpl->tpl_vars['pageID']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pageID']->value) {
$_smarty_tpl->tpl_vars['pageID']->do_else = false;
$_smarty_tpl->tpl_vars['pageID']->iteration++;
$_smarty_tpl->tpl_vars['pageID']->last = $_smarty_tpl->tpl_vars['pageID']->iteration === $_smarty_tpl->tpl_vars['pageID']->total;
$__foreach_pageID_14_saved = $_smarty_tpl->tpl_vars['pageID'];
if (!empty($_smarty_tpl->tpl_vars['pageID']->value)) {
echo $_smarty_tpl->tpl_vars['pageID']->value;
}
if (!$_smarty_tpl->tpl_vars['pageID']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['pageID'] = $__foreach_pageID_14_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
                    <?php }?>
                    <button type="button" class="btn btn-link px-2 <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?>"
                            onclick="openFilterPicker(<?php echo $_smarty_tpl->tpl_vars['picker']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
)" data-toggle="tooltip">
                        <span class="icon-hover">
                            <span class="fal fa-filter"></span>
                            <span class="fas fa-filter"></span>
                        </span>
                    </button>
                <?php }?>
            <?php }?>
        </div>
    </td>
</tr>
<?php }
}
