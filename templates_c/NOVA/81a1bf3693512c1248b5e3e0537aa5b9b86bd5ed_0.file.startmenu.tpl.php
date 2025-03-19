<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/admin/opc/tpl/startmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31662ba465_71424556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1bf3693512c1248b5e3e0537aa5b9b86bd5ed' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/admin/opc/tpl/startmenu.tpl',
      1 => 1739261214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab31662ba465_71424556 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['opc']->value->isEditMode() === false && $_smarty_tpl->tpl_vars['opc']->value->isPreviewMode() === false && JTL\Shop::isAdmin(true)) {?>
    <?php $_smarty_tpl->_assignInScope('shopHasUpdates', $_smarty_tpl->tpl_vars['opc']->value->shopHasUpdates());?>
    <?php ob_start();
echo JTL\Router\Route::OPC;
$_prefixVariable13=ob_get_clean();
$_smarty_tpl->_assignInScope('opcStartUrl', ((string)$_smarty_tpl->tpl_vars['ShopURL']->value)."/".((string)(defined('PFAD_ADMIN') ? constant('PFAD_ADMIN') : null)).$_prefixVariable13);?>
    <?php $_smarty_tpl->_assignInScope('curPageUrl', $_smarty_tpl->tpl_vars['opcPageService']->value->getCurPageUri());?>

    <?php if ($_smarty_tpl->tpl_vars['opcPageService']->value->isCurPageModifiable()) {?>
        <?php $_smarty_tpl->_assignInScope('curPageId', $_smarty_tpl->tpl_vars['opcPageService']->value->createCurrentPageId());?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('curPageId', '');?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('publicDraft', $_smarty_tpl->tpl_vars['opcPageService']->value->getPublicPage($_smarty_tpl->tpl_vars['curPageId']->value));?>

    <?php if ($_smarty_tpl->tpl_vars['publicDraft']->value === null) {?>
        <?php $_smarty_tpl->_assignInScope('publicDraftKey', 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('publicDraftKey', $_smarty_tpl->tpl_vars['publicDraft']->value->getKey());?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('pageDrafts', $_smarty_tpl->tpl_vars['opcPageService']->value->getDrafts($_smarty_tpl->tpl_vars['curPageId']->value));?>
    <?php $_smarty_tpl->_assignInScope('adminSessionToken', $_smarty_tpl->tpl_vars['opc']->value->getAdminSessionToken());?>
    <?php $_smarty_tpl->_assignInScope('languages', $_SESSION['Sprachen']);?>
    <?php $_smarty_tpl->_assignInScope('currentLanguage', $_SESSION['currentLanguage']);?>

    <?php $_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0] : null;
if (!is_callable($_block_plugin21)) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin21(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
        let languages = [
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
                {
                    id:      <?php echo $_smarty_tpl->tpl_vars['lang']->value->id;?>
,
                    nameDE:  '<?php echo $_smarty_tpl->tpl_vars['lang']->value->nameDE;?>
',
                    pageId:  '<?php echo $_smarty_tpl->tpl_vars['opcPageService']->value->createCurrentPageId($_smarty_tpl->tpl_vars['lang']->value->id);?>
',
                    pageUri: '<?php echo $_smarty_tpl->tpl_vars['opcPageService']->value->getCurPageUri($_smarty_tpl->tpl_vars['lang']->value->id);?>
',
                },
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        ];

        let currentLanguage = {
            id: <?php echo $_smarty_tpl->tpl_vars['currentLanguage']->value->id;?>
,
        };

        $(updateTooltips);

        function openOpcStartMenu()
        {
            $('#opcSidebar').addClass('opc-open');
            $('#opc-startmenu').addClass('opc-close');
            $('#opc-page-wrapper').addClass('opc-shifted');
        }

        function closeOpcStartMenu()
        {
            $('#opcSidebar').removeClass('opc-open');
            $('#opc-startmenu').removeClass('opc-close');
            $('#opc-page-wrapper').removeClass('opc-shifted');
        }

        function opcConfirm(draftName, text, yesCB)
        {
            $('#opcDeleteModalTitle').text(draftName);
            $('#opcDeleteModalText').text(text);
            $('#opcDeleteModal').modal('show');
            $('#opcDeleteBtnYes').on('click', yesCB);
        }

        function deleteOpcDraft(draftKey, draftName)
        {
            opcConfirm(draftName, '<?php echo __('draftDeleteSure');?>
', () => {
                $.ajax({
                    method: 'post',
                    url: '<?php echo $_smarty_tpl->tpl_vars['opcStartUrl']->value;?>
',
                    data: {
                        action: 'discard',
                        pageKey: draftKey,
                        jtl_token: '<?php echo $_smarty_tpl->tpl_vars['adminSessionToken']->value;?>
'
                    },
                    success: function(jqxhr) {
                        if (jqxhr === 'ok') {
                            let draftItem = $('#opc-draft-' + draftKey);
                            draftItem.animate({ opacity: 'toggle' }, 500, () => draftItem.remove());
                            window.localStorage.removeItem('opcpage.' + draftKey);
                        }
                    }
                });
            });
        }

        function getSelectedOpcDraftkeys()
        {
            return $('.draft-checkbox')
                .filter(':checked')
                .closest('.opc-draft')
                .map((i,elm) => $(elm).data('draft-key'))
                .get();
        }

        function deleteSelectedOpcDrafts()
        {
            let draftKeys = getSelectedOpcDraftkeys();

            opcConfirm('<?php echo __('warning');?>
', draftKeys.length + ' <?php echo __('deleteDraftsContinue');?>
', () => {
                $.ajax({
                    method: 'post',
                    url: '<?php echo $_smarty_tpl->tpl_vars['opcStartUrl']->value;?>
',
                    data: {
                        action: 'discard-bulk',
                        draftKeys: draftKeys,
                        jtl_token: '<?php echo $_smarty_tpl->tpl_vars['adminSessionToken']->value;?>
'
                    },
                    success: function(jqxhr) {
                        if (jqxhr === 'ok') {
                            draftKeys.forEach(draftKey => {
                                let draftItem = $('#opc-draft-' + draftKey);
                                draftItem.animate({ opacity: 'toggle' }, 500, () => draftItem.remove());
                                window.localStorage.removeItem('opcpage.' + draftKey);
                            });
                        }
                    }
                });
            });
        }

        function filterOpcDrafts()
        {
            let searchTerm = $('#opc-filter-search').val().toLowerCase();

            $('#opc-draft-list').children().each((i, item) => {
                item = $(item);
                item.find('.draft-checkbox').prop('checked', false);

                let draftName = item.find('.opc-draft-name')[0].innerText.toLowerCase();

                if (draftName.indexOf(searchTerm) === -1) {
                    item.hide();
                    item.find('.draft-checkbox').removeClass('filtered-draft');
                } else {
                    item.show();
                    item.find('.draft-checkbox').addClass('filtered-draft');
                }
            });
            opcDraftCheckboxChanged();
            $('#check-all-drafts').prop('checked', false);
        }

        function orderOpcDraftsBy(criteria)
        {
            let draftsList  = $('#opc-draft-list');
            let draftsArray = draftsList.children().toArray();

            if (criteria === 0) {
                $('#opc-filter-status .opc-dropdown-btn').text('Status');
                draftsArray.sort((a, b) => a.dataset.draftStatus - b.dataset.draftStatus);
            } else if(criteria === 1) {
                $('#opc-filter-status .opc-dropdown-btn').text('Name');
                draftsArray.sort((a, b) => {
                    if (a.dataset.draftName < b.dataset.draftName) {
                        return -1;
                    }
                    if (a.dataset.draftName > b.dataset.draftName) {
                        return +1;
                    }
                    return 0;
                });
            }
            draftsArray.forEach(draft => draftsList.append(draft));
        }

        function checkAllOpcDrafts()
        {
            $('.draft-checkbox.filtered-draft').prop(
                'checked',
                $('#check-all-drafts').prop('checked')
            );
            opcDraftCheckboxChanged();
        }

        function duplicateOpcDraft(draftKey)
        {
            $.ajax({
                method: 'post',
                url: '<?php echo $_smarty_tpl->tpl_vars['opcStartUrl']->value;?>
',
                data: {
                    action: 'duplicate-bulk',
                    draftKeys: [draftKey],
                    jtl_token: '<?php echo $_smarty_tpl->tpl_vars['adminSessionToken']->value;?>
'
                },
                success: function(jqxhr) {
                    if (jqxhr === 'ok') {
                        $.evo.io().call(
                            'getOpcDraftsHtml',
                            ['<?php echo $_smarty_tpl->tpl_vars['curPageId']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['adminSessionToken']->value;?>
', languages, currentLanguage],
                            { },
                            () => {
                                opcDraftCheckboxChanged();
                                updateTooltips();
                            }
                        );
                    }
                }
            });
        }

        function duplicateSelectedOpcDrafts()
        {
            let draftKeys = getSelectedOpcDraftkeys();

            $.ajax({
                method: 'post',
                url: '<?php echo $_smarty_tpl->tpl_vars['opcStartUrl']->value;?>
',
                data: {
                    action: 'duplicate-bulk',
                    draftKeys: draftKeys,
                    jtl_token: '<?php echo $_smarty_tpl->tpl_vars['adminSessionToken']->value;?>
'
                },
                success: function(jqxhr) {
                    if (jqxhr === 'ok') {
                        $.evo.io().call(
                            'getOpcDraftsHtml',
                            ['<?php echo $_smarty_tpl->tpl_vars['curPageId']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['adminSessionToken']->value;?>
', languages, currentLanguage],
                            { },
                            () => {
                                opcDraftCheckboxChanged();
                                updateTooltips();
                            }
                        );
                    }
                }
            });
        }

        function opcDraftCheckboxChanged()
        {
            let draftKeys = getSelectedOpcDraftkeys();
            $('#opc-bulk-actions').attr('disabled', draftKeys.length === 0);
        }

        function updateTooltips()
        {
            $('.tooltip').remove();

            $('.opc-draft-actions [data-toggle="tooltip"]').tooltip({
                placement: 'bottom',
                trigger: 'hover',
            });

            $('.opc-draft-actions [data-toggle="dropdown"]').tooltip({
                placement: 'bottom',
                trigger: 'hover',
            }).on('click', function() {
                $(this).tooltip('hide');
            });
        }
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_block_plugin21(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <div id="opc">
        <?php if ($_smarty_tpl->tpl_vars['opcPageService']->value->isCurPageModifiable() === false) {?>
            <nav id="opc-startmenu">
                <button type="button" class="opc-btn-primary" onclick="openOpcStartMenu()">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo (defined('PFAD_ADMIN') ? constant('PFAD_ADMIN') : null);?>
opc/gfx/icon-opc.svg" alt="OPC Start Icon"
                         id="opc-start-icon">
                    <span id="opc-start-label"><?php echo __('onPageComposer');?>
</span>
                </button>
            </nav>
            <div id="opcSidebar">
                <header id="opcHeader">
                    <h1 id="opcSidebarTitle">
                        <?php echo __('editPage');?>

                    </h1>
                    <button onclick="closeOpcStartMenu()" class="opc-float-right opc-header-btn"
                            title="<?php echo __('Close OnPage-Composer');?>
">
                        <i class="fa fas fa-times"></i>
                    </button>
                </header>
                <?php $_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('variant'=>'danger'));
$_block_repeat=true;
echo $_block_plugin22->render(array('variant'=>'danger'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php echo __('opcNotSupportedPage');?>

                <?php $_block_repeat=false;
echo $_block_plugin22->render(array('variant'=>'danger'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        <?php } elseif (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['pageDrafts']->value )) === 0 && $_smarty_tpl->tpl_vars['shopHasUpdates']->value === false) {?>
            <nav id="opc-startmenu">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['opcStartUrl']->value;?>
">
                    <input type="hidden" name="jtl_token" value="<?php echo $_smarty_tpl->tpl_vars['adminSessionToken']->value;?>
">
                    <input type="hidden" name="pageId" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['curPageId']->value);?>
">
                    <input type="hidden" name="pageUrl" value="<?php echo $_smarty_tpl->tpl_vars['curPageUrl']->value;?>
">
                    <button type="submit" name="action" value="extend" class="opc-btn-primary">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo (defined('PFAD_ADMIN') ? constant('PFAD_ADMIN') : null);?>
opc/gfx/icon-opc.svg" alt="OPC Start Icon"
                             id="opc-start-icon">
                        <span id="opc-start-label"><?php echo __('onPageComposer');?>
</span>
                    </button>
                </form>
            </nav>
        <?php } else { ?>
            <nav id="opc-startmenu">
                <button type="button" class="opc-btn-primary" onclick="openOpcStartMenu()">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['ShopURL']->value;?>
/<?php echo (defined('PFAD_ADMIN') ? constant('PFAD_ADMIN') : null);?>
opc/gfx/icon-opc.svg" alt="OPC Start Icon"
                         id="opc-start-icon">
                    <span id="opc-start-label"><?php echo __('onPageComposer');?>
</span>
                </button>
            </nav>
            <div id="opcSidebar">
                <header id="opcHeader">
                    <h1 id="opcSidebarTitle">
                        <?php echo __('editPage');?>

                    </h1>
                    <button onclick="closeOpcStartMenu()" class="opc-float-right opc-header-btn"
                            title="<?php echo __('Close OnPage-Composer');?>
">
                        <i class="fa fas fa-times"></i>
                    </button>
                </header>
                <?php if ($_smarty_tpl->tpl_vars['shopHasUpdates']->value) {?>
                    <div class="alert alert-danger" id="errorAlert">
                        <?php echo sprintf(__('dbUpdateNeeded'),$_smarty_tpl->tpl_vars['ShopURL']->value);?>

                    </div>
                <?php } else { ?>
                    <div id="opc-sidebar-tools">
                        <h2 id="opc-sidebar-second-title"><?php echo __('allDrafts');?>
</h2>
                        <div class="opc-group">
                            <input type="search" class="opc-filter-control float-left" aria-label="<?php echo __('search');?>
" placeholder="&#xF002; <?php echo __('search');?>
"
                                   oninput="filterOpcDrafts()" id="opc-filter-search">
                            <div class="opc-filter-control opc-dropdown float-left" id="opc-filter-status">
                                <button class="opc-dropdown-btn" data-toggle="dropdown">
                                    <?php echo __('status');?>

                                </button>
                                <div class="dropdown-menu opc-dropdown-menu">
                                    <button class="opc-dropdown-item" onclick="orderOpcDraftsBy(0);return false"><?php echo __('status');?>
</button>
                                    <button class="opc-dropdown-item" onclick="orderOpcDraftsBy(1);return false"><?php echo __('name');?>
</button>
                                </div>
                            </div>
                        </div>
                        <input type="checkbox" id="check-all-drafts" onchange="checkAllOpcDrafts()">
                        <label for="check-all-drafts" class="opc-check-all">
                            <?php echo __('selectAll');?>

                        </label>
                        <div class="opc-dropdown" id="opc-bulk-actions-dropdown">
                            <button type="button" id="opc-bulk-actions" data-toggle="dropdown" disabled>
                                <span id="opc-bulk-actions-label">
                                    <?php echo __('actions');?>

                                </span>
                                <i class="fa fas fa-fw fa-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu opc-dropdown-menu" id="opc-bulk-dropdown">
                                <a href="#" onclick="duplicateSelectedOpcDrafts();return false" class="opc-dropdown-item">
                                    <?php echo __('duplicate');?>

                                </a>
                                <a href="#" onclick="deleteSelectedOpcDrafts();return false" class="opc-dropdown-item">
                                    <?php echo __('delete');?>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="opc-sidebar-content">
                        <ul id="opc-draft-list">
                            <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['opcDir']->value).('tpl/draftlist.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </ul>
                    </div>
                    <div id="opc-sidebar-footer">
                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['opcStartUrl']->value;?>
">
                            <input type="hidden" name="jtl_token" value="<?php echo $_smarty_tpl->tpl_vars['adminSessionToken']->value;?>
">
                            <input type="hidden" name="pageId" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['curPageId']->value);?>
">
                            <input type="hidden" name="pageUrl" value="<?php echo $_smarty_tpl->tpl_vars['curPageUrl']->value;?>
">
                            <button type="submit" name="action" value="extend" class="opc-btn-primary opc-full-width">
                                <?php echo __('newDraft');?>

                            </button>
                        </form>
                    </div>
                <?php }?>
            </div>
            <div class="modal fade" id="opcDeleteModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="opcDeleteModalTitle"></h5>
                            <button type="button" class="opc-header-btn" data-dismiss="modal">
                                <i class="fa fas fa-times"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p id="opcDeleteModalText"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="opcDeleteBtnYes"
                                    class="opc-btn-primary opc-small-btn" data-dismiss="modal">
                                <?php echo __('yes');?>

                            </button>
                            <button type="button" class="opc-btn-secondary opc-small-btn" data-dismiss="modal">
                                <?php echo __('no');?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
<?php }
}
}
