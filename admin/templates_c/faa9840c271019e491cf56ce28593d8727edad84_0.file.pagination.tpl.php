<?php
/* Smarty version 4.5.4, created on 2025-02-05 13:20:11
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3577b817b81_90241857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faa9840c271019e491cf56ce28593d8727edad84' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pagination.tpl',
      1 => 1738748465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3577b817b81_90241857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'pageButtons' => 
  array (
    'compiled_filepath' => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates_c/faa9840c271019e491cf56ce28593d8727edad84_0.file.pagination.tpl.php',
    'uid' => 'faa9840c271019e491cf56ce28593d8727edad84',
    'call_name' => 'smarty_template_function_pageButtons_169983727667a3577b78d607_50723568',
  ),
  'itemsPerPageOptions' => 
  array (
    'compiled_filepath' => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates_c/faa9840c271019e491cf56ce28593d8727edad84_0.file.pagination.tpl.php',
    'uid' => 'faa9840c271019e491cf56ce28593d8727edad84',
    'call_name' => 'smarty_template_function_itemsPerPageOptions_169983727667a3577b78d607_50723568',
  ),
  'sortByDirOptions' => 
  array (
    'compiled_filepath' => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates_c/faa9840c271019e491cf56ce28593d8727edad84_0.file.pagination.tpl.php',
    'uid' => 'faa9840c271019e491cf56ce28593d8727edad84',
    'call_name' => 'smarty_template_function_sortByDirOptions_169983727667a3577b78d607_50723568',
  ),
));
if (!(isset($_smarty_tpl->tpl_vars['cParam_arr']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('cParam_arr', array());
}?>

<?php $_smarty_tpl->_assignInScope('cUrlAppend', http_build_query($_smarty_tpl->tpl_vars['cParam_arr']->value));?>

<?php if ((isset($_smarty_tpl->tpl_vars['cAnchor']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('cUrlAppend', (($_smarty_tpl->tpl_vars['cUrlAppend']->value).('#')).($_smarty_tpl->tpl_vars['cAnchor']->value));
}?>

<?php $_smarty_tpl->_assignInScope('bItemsAvailable', $_smarty_tpl->tpl_vars['pagination']->value->getItemCount() > 0);
$_smarty_tpl->_assignInScope('bMultiplePages', $_smarty_tpl->tpl_vars['pagination']->value->getPageCount() > 1);
$_smarty_tpl->_assignInScope('bSortByOptions', count($_smarty_tpl->tpl_vars['pagination']->value->getSortByOptions()) > 0);
$_smarty_tpl->_assignInScope('isBottom', (($tmp = $_smarty_tpl->tpl_vars['isBottom']->value ?? null)===null||$tmp==='' ? false : $tmp));?>







<?php if ($_smarty_tpl->tpl_vars['bItemsAvailable']->value) {?>
    <div class="pagination-toolbar">
        <form action="<?php if ((isset($_smarty_tpl->tpl_vars['cAnchor']->value))) {?>#<?php echo $_smarty_tpl->tpl_vars['cAnchor']->value;
}?>" method="post" name="<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
" id="<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();
if ($_smarty_tpl->tpl_vars['isBottom']->value) {?>-bottom<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <div class="row mb-5">
                <div class="col-12 col-md-4">
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'pageButtons', array(), true);?>

                </div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cParam_arr']->value, 'cParamValue', false, 'cParamName');
$_smarty_tpl->tpl_vars['cParamValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cParamName']->value => $_smarty_tpl->tpl_vars['cParamValue']->value) {
$_smarty_tpl->tpl_vars['cParamValue']->do_else = false;
?>
                    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['cParamName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cParamValue']->value;?>
">
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if (!$_smarty_tpl->tpl_vars['isBottom']->value) {?>
                    <div class="col-12 col-md-4 col-lg-3 col-xl-2 ml-lg-auto">
                        <div class="form-group">
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'itemsPerPageOptions', array(), true);?>

                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['bSortByOptions']->value) {?>
                        <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                            <div class="form-group">
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'sortByDirOptions', array(), true);?>

                            </div>
                        </div>
                    <?php }?>
                <?php }?>
            </div>
        </form>
    </div>
<?php }
}
/* smarty_template_function_pageButtons_169983727667a3577b78d607_50723568 */
if (!function_exists('smarty_template_function_pageButtons_169983727667a3577b78d607_50723568')) {
function smarty_template_function_pageButtons_169983727667a3577b78d607_50723568(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if (!$_smarty_tpl->tpl_vars['isBottom']->value) {?>
    <span class="font-weight-bold d-block mb-3">
        <?php if ($_smarty_tpl->tpl_vars['bMultiplePages']->value) {?>
            <?php echo __('entries');?>
 <?php echo $_smarty_tpl->tpl_vars['pagination']->value->getFirstPageItem()+1;?>

            - <?php echo $_smarty_tpl->tpl_vars['pagination']->value->getFirstPageItem()+$_smarty_tpl->tpl_vars['pagination']->value->getPageItemCount();?>

            <?php echo __('of');?>
 <?php echo $_smarty_tpl->tpl_vars['pagination']->value->getItemCount();?>

        <?php } else { ?>
            <?php echo __('allEntries');?>

        <?php }?>
    </span>
    <?php }?>
    <nav aria-label="Page navigation example">
    <?php if ($_smarty_tpl->tpl_vars['bMultiplePages']->value) {?>
        <ul class="pagination justify-content-between justify-content-md-start mb-5 mb-md-0">
            <li class="page-item">
                <a class="page-link" <?php if ($_smarty_tpl->tpl_vars['pagination']->value->getPrevPage() != $_smarty_tpl->tpl_vars['pagination']->value->getPage()) {?>href="?<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
_nPage=<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getPrevPage();?>
&<?php echo $_smarty_tpl->tpl_vars['cUrlAppend']->value;?>
"<?php }?>>
                    <span class="fal fa-long-arrow-left"></span>
                </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['pagination']->value->getLeftRangePage() > 0) {?>
                <li class="page-item">
                    <a class="page-link" href="?<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
_nPage=0&<?php echo $_smarty_tpl->tpl_vars['cUrlAppend']->value;?>
">1</a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['pagination']->value->getLeftRangePage() > 1) {?>
                <li class="page-item">
                    <span class="page-text">&hellip;</span>
                </li>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pagination']->value->getRightRangePage()+1 - ($_smarty_tpl->tpl_vars['pagination']->value->getLeftRangePage()) : $_smarty_tpl->tpl_vars['pagination']->value->getLeftRangePage()-($_smarty_tpl->tpl_vars['pagination']->value->getRightRangePage())+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['pagination']->value->getLeftRangePage(), $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <li class="page-item<?php if ($_smarty_tpl->tpl_vars['pagination']->value->getPage() == $_smarty_tpl->tpl_vars['i']->value) {?> active<?php }?>">
                    <a class="page-link" href="?<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
_nPage=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['cUrlAppend']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</a>
                </li>
            <?php }
}
?>
            <?php if ($_smarty_tpl->tpl_vars['pagination']->value->getRightRangePage() < $_smarty_tpl->tpl_vars['pagination']->value->getPageCount()-2) {?>
                <li class="page-item">
                    <span class="page-text">&hellip;</span>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['pagination']->value->getRightRangePage() < $_smarty_tpl->tpl_vars['pagination']->value->getPageCount()-1) {?>
                <li class="page-item">
                    <a class="page-link" href="?<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
_nPage=<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getPageCount()-1;?>
&<?php echo $_smarty_tpl->tpl_vars['cUrlAppend']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pagination']->value->getPageCount();?>
</a>
                </li>
            <?php }?>
            <li class="page-item">
                <a class="page-link" <?php if ($_smarty_tpl->tpl_vars['pagination']->value->getNextPage() != $_smarty_tpl->tpl_vars['pagination']->value->getPage()) {?>href="?<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
_nPage=<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getNextPage();?>
&<?php echo $_smarty_tpl->tpl_vars['cUrlAppend']->value;?>
"<?php }?>>
                    <span class="fal fa-long-arrow-right"></span>
                </a>
            </li>
        </ul>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['bMultiplePages']->value || !$_smarty_tpl->tpl_vars['isBottom']->value) {?>
            <ul class="pagination">
                <li>
                    <a><?php echo $_smarty_tpl->tpl_vars['pagination']->value->getItemCount();?>
</a>
                </li>
            </ul>
        <?php }?>
    <?php }?>
    </nav>
<?php
}}
/*/ smarty_template_function_pageButtons_169983727667a3577b78d607_50723568 */
/* smarty_template_function_itemsPerPageOptions_169983727667a3577b78d607_50723568 */
if (!function_exists('smarty_template_function_itemsPerPageOptions_169983727667a3577b78d607_50723568')) {
function smarty_template_function_itemsPerPageOptions_169983727667a3577b78d607_50723568(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <label for="<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
_nItemsPerPage"><?php echo __('entriesPerPage');?>
</label>
    <select class="custom-select" name="<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
_nItemsPerPage" id="<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
_nItemsPerPage"
            onchange="this.form.submit()">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value->getItemsPerPageOptions(), 'nItemsPerPageOption');
$_smarty_tpl->tpl_vars['nItemsPerPageOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nItemsPerPageOption']->value) {
$_smarty_tpl->tpl_vars['nItemsPerPageOption']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['nItemsPerPageOption']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['pagination']->value->getItemsPerPage() == $_smarty_tpl->tpl_vars['nItemsPerPageOption']->value) {?> selected="selected"<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['nItemsPerPageOption']->value === -1) {?>
                    <?php echo __('all');?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['nItemsPerPageOption']->value;?>

                <?php }?>
            </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
<?php
}}
/*/ smarty_template_function_itemsPerPageOptions_169983727667a3577b78d607_50723568 */
/* smarty_template_function_sortByDirOptions_169983727667a3577b78d607_50723568 */
if (!function_exists('smarty_template_function_sortByDirOptions_169983727667a3577b78d607_50723568')) {
function smarty_template_function_sortByDirOptions_169983727667a3577b78d607_50723568(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <label for="<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
_nSortByDir"><?php echo __('sorting');?>
</label>
    <select class="custom-select" name="<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
_nSortByDir" id="<?php echo $_smarty_tpl->tpl_vars['pagination']->value->getId();?>
_nSortByDir"
            onchange="this.form.submit()">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value->getSortByOptions(), 'cSortByOption', false, 'i');
$_smarty_tpl->tpl_vars['cSortByOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['cSortByOption']->value) {
$_smarty_tpl->tpl_vars['cSortByOption']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value*2;?>
"
                    <?php if ($_smarty_tpl->tpl_vars['i']->value*2 == $_smarty_tpl->tpl_vars['pagination']->value->getSortByDir()) {?> selected="selected"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['cSortByOption']->value[1];?>
 <?php echo __('ascending');?>

            </option>
            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value*2+1;?>
"
                    <?php if ($_smarty_tpl->tpl_vars['i']->value*2+1 == $_smarty_tpl->tpl_vars['pagination']->value->getSortByDir()) {?> selected="selected"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['cSortByOption']->value[1];?>
 <?php echo __('descending');?>

            </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
<?php
}}
/*/ smarty_template_function_sortByDirOptions_169983727667a3577b78d607_50723568 */
}
