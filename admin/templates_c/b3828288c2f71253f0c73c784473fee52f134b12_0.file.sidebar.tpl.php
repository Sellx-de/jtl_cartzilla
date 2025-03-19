<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:10:04
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3470cb48d07_89510038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3828288c2f71253f0c73c784473fee52f134b12' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/sidebar.tpl',
      1 => 1738748258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./draftstatus.tpl' => 1,
  ),
),false)) {
function content_67a3470cb48d07_89510038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/includes/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>
<div id="opcSidebar">
    <header id="opcHeader">
        <div class="opc-dropdown" id="opcMenuBtnDropdown">
            <button type="button" id="opcMenuBtn" data-toggle="dropdown" class="opc-header-btn">
                <i class="fa fas fa-ellipsis-v"></i>
            </button>
            <div class="dropdown-menu opc-dropdown-menu">
                <button type="button" class="opc-dropdown-item" onclick="opc.gui.importDraft()">
                    <i class="fa fas fa-upload fa-fw"></i> <?php echo __('Import');?>

                </button>
                <button type="button" class="opc-dropdown-item" onclick="opc.gui.exportDraft()">
                    <i class="fa fas fa-download fa-fw"></i> <?php echo __('Export');?>

                </button>
                <button type="button" class="opc-dropdown-item" id="btnHelp" onclick="opc.tutorial.start()">
                    <i class="fa fas fa-question-circle fa-fw"></i> <?php echo __('help');?>

                </button>
            </div>
        </div>
        <h1 id="opcSidebarTitle">
            <?php echo __('editPortletPrefix');?>

            &bdquo;<span id="titlePageName"><?php echo $_smarty_tpl->tpl_vars['pageName']->value;?>
</span>&ldquo;
            <?php echo __('editPortletPostfix');?>

        </h1>
        <button type="button" onclick="opc.gui.closeEditor()" class="opc-float-right opc-header-btn"
                data-toggle="tooltip" data-placement="bottom" title="<?php echo __('Close OnPage-Composer');?>
">
            <i class="fa fas fa-times"></i>
        </button>
    </header>

    <div id="editorNavbar">
        <button class="nav-link d-none" id="navScrollLeft"><i class="fas fa-angle-double-left"></i></button>
        <ul class="nav nav-tabs flex-nowrap" id="opcTabs">
            <li class="nav-item">
                <a class="nav-link active" href="#portlets" data-toggle="tab"><?php echo __('Portlets');?>
</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#blueprints" data-toggle="tab"><?php echo __('Blueprints');?>
</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#revisions" data-toggle="tab"><?php echo __('Revisions');?>
</a>
            </li>
            <li class="nav-item" id="btnPagetree">
                <a class="nav-link" href="#pagetree" data-toggle="tab"><?php echo __('Page structure');?>
</a>
            </li>
        </ul>
        <button class="nav-link d-none" id="navScrollRight"><i class="fas fa-angle-double-right"></i></button>
    </div>

    <div id="sidebarInnerPanel">
        <div class="tab-content">
            <div class="tab-pane show active" id="portlets">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opc']->value->getPortletGroups(), 'group', true);
$_smarty_tpl->tpl_vars['group']->iteration = 0;
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_smarty_tpl->tpl_vars['group']->iteration++;
$_smarty_tpl->tpl_vars['group']->last = $_smarty_tpl->tpl_vars['group']->iteration === $_smarty_tpl->tpl_vars['group']->total;
$__foreach_group_1_saved = $_smarty_tpl->tpl_vars['group'];
?>
                    <?php $_smarty_tpl->_assignInScope('groupId', mb_strtolower((string) smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['group']->value->getName(),'/[^a-zA-Z0-9]/','-'), 'utf-8'));?>
                    <button class="portletGroupBtn" type="button"
                            data-toggle="collapse" data-target="#collapse-<?php echo $_smarty_tpl->tpl_vars['groupId']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['group']->value->getName();?>
 <i class="fas fa-chevron-up"></i>
                    </button>
                    <div class="collapse show" id="collapse-<?php echo $_smarty_tpl->tpl_vars['groupId']->value;?>
">
                        <div class="portlet-group">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value->getPortlets(), 'portlet', false, 'i');
$_smarty_tpl->tpl_vars['portlet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['portlet']->value) {
$_smarty_tpl->tpl_vars['portlet']->do_else = false;
?>
                                <button type="button" class="portletButton" draggable="true"
                                        data-portlet-class="<?php echo $_smarty_tpl->tpl_vars['portlet']->value->getClass();?>
"
                                        data-portlet-group="<?php echo $_smarty_tpl->tpl_vars['groupId']->value;?>
"
                                        data-portlet-css="<?php echo $_smarty_tpl->tpl_vars['portlet']->value->getCssFile(true);?>
">
                                    <span class="portletBtnInner">
                                        <?php echo $_smarty_tpl->tpl_vars['portlet']->value->getButtonHtml();?>

                                    </span>
                                </button>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                    <?php if (!$_smarty_tpl->tpl_vars['group']->last) {?>
                        <hr>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="tab-pane" id="blueprints">
                <div id="blueprintList"></div>
                <button type="button" class="opc-btn-secondary opc-small-btn" onclick="opc.gui.importBlueprint()"
                        id="btnImportBlueprint">
                    <i class="fa fa-upload"></i> <span><?php echo __('Import blueprint');?>
</span>
                </button>
            </div>
            <div class="tab-pane" id="revisions">
                <a class="revisionBtn" href="#" data-revision-id="-1" id="unsavedRevision">
                    <i><?php echo __('Unsaved revision');?>
</i>
                </a>
                <a class="revisionBtn" href="#" data-revision-id="0">
                    <div>
                        <span id="currentDraftName"></span>
                        <span class="opc-status-draft">(<?php echo __('Current revision');?>
)</span>
                    </div>
                    <div id="currentLastModified"></div>
                </a>
                <div id="revisionList"></div>
            </div>
            <div class="tab-pane" id="pagetree">
                <div id="pageTreeView"></div>
            </div>
        </div>
    </div>

    <div id="sidebarFooter">
        <div id="savePublishPanel">
            <label for="footerDraftNameInput" id="footerDraftName" onclick="opc.gui.onBeginEditDraftName()">
                <span>
                    <?php if ((isset($_smarty_tpl->tpl_vars['page']->value))) {?>
                        <?php echo $_smarty_tpl->tpl_vars['page']->value->getName();?>

                    <?php } else { ?>
                        No Page
                    <?php }?>
                </span>
                <i class="fas fa-pencil-alt"></i>
            </label>
            <input type="text" id="footerDraftNameInput" onblur="opc.gui.onFinishEditDraftName()"
                   onkeydown="opc.gui.onDraftNameInputKeydown()" style="display:none">
            <div class="opc-draft-status" id="opcDraftStatus">
                <?php if ((isset($_smarty_tpl->tpl_vars['page']->value))) {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:./draftstatus.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } else { ?>
                    No Page
                <?php }?>
            </div>
            <div id="savePublishButtons">
                <button type="button" class="opc-btn-secondary opc-small-btn" onclick="opc.gui.savePage()">
                    <?php echo __('save');?>
 <i class="fas fa-asterisk" id="unsavedState" style="display: none"></i>
                </button>
                <button type="button" class="opc-btn-primary opc-small-btn" onclick="opc.gui.publishDraft()"
                        id="btnPublishDraft">
                    <?php echo __('Publish');?>

                </button>
            </div>
        </div>
        <div id="previewToolbar">
            <label class="toggle-switch">
                <?php echo __('preview');?>

                <input type="checkbox" onchange="opc.gui.onBtnPreview()">
                <span class="toggle-slider"></span>
            </label>
            <ul id="displayWidths">
                <li>
                    <button onclick="opc.gui.setDisplayWidthXS()" title="<?php echo __('setDisplayWidthXS');?>
">
                        <i class="fas fa-mobile-alt"></i>
                    </button>
                </li>
                <li>
                    <button onclick="opc.gui.setDisplayWidthSM()" title="<?php echo __('setDisplayWidthSM');?>
">
                        <i class="fas fa-tablet-alt"></i>
                    </button>
                </li>
                <li>
                    <button onclick="opc.gui.setDisplayWidthMD()" title="<?php echo __('setDisplayWidthMD');?>
">
                        <i class="fas fa-laptop"></i>
                    </button>
                </li>
                <li>
                    <button onclick="opc.gui.setDisplayWidthLG()" title="<?php echo __('setDisplayWidthLG');?>
">
                        <i class="fas fa-desktop"></i>
                    </button>
                </li>
                <li>
                    <button onclick="opc.gui.setDisplayWidthXL()" class="active" title="<?php echo __('setDisplayWidthXL');?>
">
                        <i class="fas fa-expand"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>

    <div id="disableVeil" style="display: none"></div>
</div>

<div class="blueprintButton" style="display:none" id="blueprintBtnBlueprint" draggable="true" data-blueprint-id="42">
    <i class="blueprint-icon fas fa-puzzle-piece"></i>
    <div class="blueprint-btn-actions float-right">
        <button type="button" class="blueprintExport" data-blueprint-id="999" title="Vorlage exportieren">
            <i class="fas fa-download fa-fw"></i>
        </button>
        <button type="button" class="blueprintDelete" data-blueprint-id="999" title="Vorlage löschen">
            <i class="fas fa-trash fa-fw"></i>
        </button>
    </div>
    <span class="blueprintTitle mr-5"><?php echo __('templateTitle');?>
</span>
</div>

<a class="revisionBtn" href="#" data-revision-id="999"
   style="display:none" id="revisionBtnBlueprint"></a>
<?php }
}
