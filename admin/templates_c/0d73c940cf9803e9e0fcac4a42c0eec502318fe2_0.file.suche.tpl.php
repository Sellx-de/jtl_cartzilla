<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:56:33
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/suche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a343e1d23769_94023171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d73c940cf9803e9e0fcac4a42c0eec502318fe2' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/suche.tpl',
      1 => 1738748274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:img/icons/".((string)$_smarty_tpl->tpl_vars[\'item\']->value->icon).".svg' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67a343e1d23769_94023171 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['standalonePage']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_assignInScope('cTitel', sprintf(__('searchResultsFor'),$_smarty_tpl->tpl_vars['query']->value));?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>$_smarty_tpl->tpl_vars['cTitel']->value), 0, false);
?>
    <div class="card">
        <div class="card-body search-page">
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['adminMenuItems']->value)) {?>
    <div class="dropdown-header"><?php echo __('pagesMenu');?>
</div>
    <ul class="backend-search-section">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminMenuItems']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <li class="has-icon" tabindex="-1">
                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['item']->value->link;?>
">
                    <span class="title">
                        <span class="icon-wrapper"><?php $_smarty_tpl->_subTemplateRender("file:img/icons/".((string)$_smarty_tpl->tpl_vars['item']->value->icon).".svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></span>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>

                    </span>
                </a>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <div class="dropdown-divider dropdown-divider-light"></div>
<?php }
if (count($_smarty_tpl->tpl_vars['settings']->value)) {?>
    <div class="dropdown-header"><?php echo __('content');?>
</div>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value->getSubsections(), 'sub');
$_smarty_tpl->tpl_vars['sub']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['sub']->value->show() === true) {?>
                    <li>
                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['sub']->value->getURL();?>
">
                            <span class="title"><?php echo __($_smarty_tpl->tpl_vars['sub']->value->getHighlightedName());?>
</span>
                            <span class="path"><?php echo $_smarty_tpl->tpl_vars['sub']->value->getPath();?>
</span>
                        </a>
                        <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub']->value->getItems(), 'setting');
$_smarty_tpl->tpl_vars['setting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->do_else = false;
?>
                            <li tabindex="-1">
                                <a class="dropdown-item value" href="<?php echo $_smarty_tpl->tpl_vars['setting']->value->getURL();?>
">
                                    <span class="title"><?php echo $_smarty_tpl->tpl_vars['setting']->value->getHighlightedName();?>
</span>
                                    <span class="path"><code><?php echo $_smarty_tpl->tpl_vars['setting']->value->getValueName();?>
</code></span>
                                </a>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </li>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
if ((isset($_smarty_tpl->tpl_vars['shippings']->value))) {?>
    <div class="dropdown-divider dropdown-divider-light"></div>
    <div class="dropdown-header"><a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/shippingmethods" class="value"><?php echo __('shippingTypesOverview');?>
</a></div>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shippings']->value, 'shipping');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
            <li class="dropdown-item is-form-submit" tabindex="-1">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/shippingmethods">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <input type="hidden" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['shipping']->value->kVersandart;?>
">
                    <button type="submit" class="btn btn-link p-0"><?php echo $_smarty_tpl->tpl_vars['shipping']->value->cName;?>
</button>
                </form>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
if ((isset($_smarty_tpl->tpl_vars['paymentMethods']->value))) {?>
    <div class="dropdown-divider dropdown-divider-light"></div>
    <div class="dropdown-header"><a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/paymentmethods" class="value"><?php echo __('paymentTypesOverview');?>
</a></div>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paymentMethods']->value, 'paymentMethod');
$_smarty_tpl->tpl_vars['paymentMethod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paymentMethod']->value) {
$_smarty_tpl->tpl_vars['paymentMethod']->do_else = false;
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/paymentmethods?kZahlungsart=<?php echo $_smarty_tpl->tpl_vars['paymentMethod']->value->kZahlungsart;?>
&token=<?php echo $_SESSION['jtl_token'];?>
" class="dropdown-item value">
                    <?php echo $_smarty_tpl->tpl_vars['paymentMethod']->value->cName;?>

                </a>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
if ($_smarty_tpl->tpl_vars['plugins']->value->isNotEmpty()) {?>
    <div class="dropdown-divider dropdown-divider-light"></div>
    <div class="dropdown-header">
        <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/pluginmanager" class="value"><?php echo __('Plug-in manager');?>
</a>
    </div>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value, 'plugin');
$_smarty_tpl->tpl_vars['plugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->do_else = false;
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/<?php echo JTL\Router\Route::PLUGIN;?>
/<?php echo $_smarty_tpl->tpl_vars['plugin']->value->id;?>
?token=<?php echo $_SESSION['jtl_token'];?>
" class="dropdown-item value">
                    <span class="title">
                        <?php echo $_smarty_tpl->tpl_vars['plugin']->value->highlightedName;?>

                    </span>
                </a>
                <?php if ($_smarty_tpl->tpl_vars['plugin']->value->matchingOptions->isNotEmpty()) {?>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin']->value->matchingOptions, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['option']->value->url;?>
" class="dropdown-item"><?php echo $_smarty_tpl->tpl_vars['option']->value->name;?>
</a>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php }?>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['tplSettings']->value)) {?>
    <div class="dropdown-divider dropdown-divider-light"></div>
    <div class="dropdown-header">
        <?php echo __('Template-Einstellungen');?>

    </div>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tplSettings']->value, 'tplSetting');
$_smarty_tpl->tpl_vars['tplSetting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tplSetting']->value) {
$_smarty_tpl->tpl_vars['tplSetting']->do_else = false;
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/template?action=config&dir=<?php echo $_smarty_tpl->tpl_vars['tplSetting']->value->dir;?>
&token=<?php echo $_SESSION['jtl_token'];?>
#<?php echo $_smarty_tpl->tpl_vars['tplSetting']->value->key;?>
"
                   class="dropdown-item">
                    <span class="title">
                        <?php echo $_smarty_tpl->tpl_vars['tplSetting']->value->name;?>

                    </span>
                </a>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }?>

<?php if (empty($_smarty_tpl->tpl_vars['adminMenuItems']->value) && empty($_smarty_tpl->tpl_vars['settings']->value) && empty($_smarty_tpl->tpl_vars['shippings']->value) && empty($_smarty_tpl->tpl_vars['paymentMethods']->value) && $_smarty_tpl->tpl_vars['plugins']->value->isEmpty() && empty($_smarty_tpl->tpl_vars['tplSettings']->value)) {?>
    <span class="<?php if (!$_smarty_tpl->tpl_vars['standalonePage']->value) {?>ml-3<?php }?>"><?php echo __('noSearchResult');?>
</span>
<?php }
if ($_smarty_tpl->tpl_vars['standalonePage']->value) {?>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
