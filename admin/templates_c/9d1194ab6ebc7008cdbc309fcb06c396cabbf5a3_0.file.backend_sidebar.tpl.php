<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:22:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/backend_sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33be62e9501_30414760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d1194ab6ebc7008cdbc309fcb06c396cabbf5a3' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/backend_sidebar.tpl',
      1 => 1738748469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:img/icons/".((string)$_smarty_tpl->tpl_vars[\'oLinkOberGruppe\']->value->icon).".svg' => 1,
  ),
),false)) {
function content_67a33be62e9501_30414760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/includes/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),1=>array('file'=>'/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/includes/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div class="collapse" id="sidebar">
    <div class="row no-gutters align-items-center flex-nowrap topbar px-3">
        <div class="col">
            <a href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/" title="<?php echo __('dashboard');?>
">
                <img class="brand-logo" width="101" height="32" src="<?php echo $_smarty_tpl->tpl_vars['templateBaseURL']->value;?>
gfx/JTL-Shop-Logo-rgb.png" alt="JTL-Shop">
                <img class="brand-logo brand-logo-white" width="101" height="32" src="<?php echo $_smarty_tpl->tpl_vars['templateBaseURL']->value;?>
gfx/JTL-Shop-Logo-rgb-white.png" alt="JTL-Shop">
            </a>
        </div>
        <div class="col-auto ml-auto">
            <button type="button" class="btn btn-link btn-sm text-primary" data-toggle="sidebar-collapse">
                <span class="fal fa-angle-double-left"></span>
            </button>
        </div>
    </div>
    <div class="navigation pb-4">
        <ul class="nav categories">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oLinkOberGruppe_arr']->value, 'oLinkOberGruppe', true);
$_smarty_tpl->tpl_vars['oLinkOberGruppe']->iteration = 0;
$_smarty_tpl->tpl_vars['oLinkOberGruppe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oLinkOberGruppe']->value) {
$_smarty_tpl->tpl_vars['oLinkOberGruppe']->do_else = false;
$_smarty_tpl->tpl_vars['oLinkOberGruppe']->iteration++;
$_smarty_tpl->tpl_vars['oLinkOberGruppe']->last = $_smarty_tpl->tpl_vars['oLinkOberGruppe']->iteration === $_smarty_tpl->tpl_vars['oLinkOberGruppe']->total;
$__foreach_oLinkOberGruppe_5_saved = $_smarty_tpl->tpl_vars['oLinkOberGruppe'];
?>
                <?php $_smarty_tpl->_assignInScope('rootEntryName', mb_strtolower((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->cName,'/[^a-zA-Z0-9]/','-'), 'utf-8'));?>
                <?php if (count($_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->oLinkGruppe_arr) === 0 && count($_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->oLink_arr) === 1) {?>
                    <li class="nav-item <?php if ((isset($_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->class))) {
echo $_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->class;
}?>
                               <?php if ($_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->active === true) {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->oLink_arr[0]->cURL;?>
" class="nav-link">
                            <span class="category-icon">
                                <i class="fa fa-2x fa-fw backend-root-menu-icon-<?php echo $_smarty_tpl->tpl_vars['rootEntryName']->value;?>
"></i>
                            </span>
                            <span class="category-title"><?php echo $_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->oLink_arr[0]->cLinkname;?>
</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li id="root-menu-entry-<?php echo $_smarty_tpl->tpl_vars['rootEntryName']->value;?>
"
                        class="nav-item <?php if ((isset($_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->class))) {
echo $_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->class;
}?>
                               <?php if ($_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->active === true) {?>active<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['oLinkOberGruppe']->last) {?> mb-5<?php }?>">
                        <a href="#" class="nav-link <?php if ($_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->active === false) {?> collapsed<?php }?>">
                            <span class="category-icon"><?php $_smarty_tpl->_subTemplateRender("file:img/icons/".((string)$_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->icon).".svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></span>
                            <span class="category-title"><?php echo $_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->cName;?>
</span>
                        </a>
                        <ul class="nav submenu" id="group-<?php echo $_smarty_tpl->tpl_vars['rootEntryName']->value;?>
">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->oLinkGruppe_arr, 'oLinkGruppe');
$_smarty_tpl->tpl_vars['oLinkGruppe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oLinkGruppe']->value) {
$_smarty_tpl->tpl_vars['oLinkGruppe']->do_else = false;
?>
                                <?php $_smarty_tpl->_assignInScope('entryName', mb_strtolower((string) smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['oLinkGruppe']->value->cName,' ','-'),'&',''), 'utf-8'));?>
                                <?php if (is_object($_smarty_tpl->tpl_vars['oLinkGruppe']->value->oLink_arr)) {?>
                                    <li id="dropdown-header-<?php echo $_smarty_tpl->tpl_vars['entryName']->value;?>
"
                                        class="nav-item <?php if ($_smarty_tpl->tpl_vars['oLinkGruppe']->value->active === true) {?>active current-item<?php }?>">
                                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['oLinkGruppe']->value->oLink_arr->cURL;?>
"
                                            <?php if (!empty($_smarty_tpl->tpl_vars['oLinkGruppe']->value->oLink_arr->target)) {?>
                                                target="<?php echo $_smarty_tpl->tpl_vars['oLinkGruppe']->value->oLink_arr->target;?>
"<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['oLinkGruppe']->value->cName;?>

                                        </a>
                                    </li>
                                <?php } elseif (count($_smarty_tpl->tpl_vars['oLinkGruppe']->value->oLink_arr) > 0) {?>
                                    <li id="dropdown-header-<?php echo $_smarty_tpl->tpl_vars['entryName']->value;?>
"
                                        class="nav-item <?php if ($_smarty_tpl->tpl_vars['oLinkGruppe']->value->active === true) {?> active<?php }?>">
                                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['oLinkGruppe']->value->active === false) {?>collapsed<?php }?>"
                                           href="#"
                                           data-toggle="collapse"
                                           data-target="#collapse-<?php echo $_smarty_tpl->tpl_vars['entryName']->value;?>
"
                                           aria-controls="collapse-<?php echo $_smarty_tpl->tpl_vars['entryName']->value;?>
"
                                           aria-expanded="<?php if ($_smarty_tpl->tpl_vars['oLinkGruppe']->value->active === true) {?>true<?php } else { ?>false<?php }?>">
                                            <span><?php echo $_smarty_tpl->tpl_vars['oLinkGruppe']->value->cName;?>
</span>
                                            <i class="far fa-chevron-down rotate-180"></i>
                                        </a>
                                        <ul class="nav submenu collapse <?php if ($_smarty_tpl->tpl_vars['oLinkGruppe']->value->active === true) {?>show<?php }?>"
                                            id="collapse-<?php echo $_smarty_tpl->tpl_vars['entryName']->value;?>
"
                                            data-parent="#sidebar">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oLinkGruppe']->value->oLink_arr, 'oLink');
$_smarty_tpl->tpl_vars['oLink']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oLink']->value) {
$_smarty_tpl->tpl_vars['oLink']->do_else = false;
?>
                                                <li class="nav-item <?php if ($_smarty_tpl->tpl_vars['oLink']->value->active === true) {?>active current-item<?php }?>">
                                                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['oLink']->value->cURL;?>
"><?php echo $_smarty_tpl->tpl_vars['oLink']->value->cLinkname;?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oLinkOberGruppe']->value->oLink_arr, 'oLink');
$_smarty_tpl->tpl_vars['oLink']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oLink']->value) {
$_smarty_tpl->tpl_vars['oLink']->do_else = false;
?>
                                <li class="nav-item <?php if ($_smarty_tpl->tpl_vars['oLink']->value->active === true) {?>active<?php }?>">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['oLink']->value->cURL;?>
" class="nav-link"><?php echo $_smarty_tpl->tpl_vars['oLink']->value->cLinkname;?>
</a>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </li>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['oLinkOberGruppe'] = $__foreach_oLinkOberGruppe_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    <div class="opaque-background"></div>
    <?php echo '<script'; ?>
>
        let curItem = $('.current-item');

        if(curItem.length) {
            curItem[0].scrollIntoView();
        }
    <?php echo '</script'; ?>
>
</div>
<?php }
}
