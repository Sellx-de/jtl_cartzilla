<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:29:00
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/links_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34b7c6c4f53_61960712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41d1ed05a8fe8cc712ae0b4ac1367c1facff365b' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/links_uebersicht.tpl',
      1 => 1738748465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/links_uebersicht_item.tpl' => 1,
    'file:tpl_inc/links_action_modal.tpl' => 1,
  ),
),false)) {
function content_67a34b7c6c4f53_61960712 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $('.duplicate-special-link').closest('.link-group-wrapper').find('.duplicate-special-page-warning')
            .removeClass('d-none');
    });

    function onSelectVaterLink(e, item) {
        $(e.target).closest("form").find("input[name='kVaterLink']").val(item.kLink);
        $(e.target).trigger("change");
    }

    function confirmLinkAction(elem, formID, title="") {
        let modalMSG = "";
        if ($(elem).val() < 0) {
            return false;
        }
        if (title.length > 0) {
            let val = "";
            if ($(elem).find("option:selected").length > 0) {
                val = $(elem).find("option:selected").html();
            } else {
                let suggestions = [];
                let typeahead = $(elem).closest(".twitter-typeahead");

                if (typeahead.length) {
                    typeahead.find(".tt-suggestion.tt-selectable").each(function(){
                        suggestions.push($(this).text());
                    });
                }
                if (suggestions.indexOf($(elem).val()) > -1) {
                    val = $(elem).val();
                }
            }
            if (val === '') {
                return false;
            }
            modalMSG = title + ": " + val;
            $("#areYouSureModal .modal-body").html(modalMSG);
        }
        $("#areYouSureModal")
            .attr("data-form-id", formID)
            .modal("show");
    }
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('links'),'cBeschreibung'=>__('linksDesc'),'cDokuURL'=>__('linksUrl')), 0, false);
?>
<div id="content">
    <?php if ($_smarty_tpl->tpl_vars['missingSystemPages']->value->count() > 0) {?>
        <div class="alert alert-danger">
            <?php echo __('The following special pages are missing:');?>

            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['missingSystemPages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                    <li><?php echo __($_smarty_tpl->tpl_vars['page']->value->cName);?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <p><?php echo __('Please create the missing pages manually.');?>
</p>
        </div>
    <?php }?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <div class="row no-gutters">
            <div class="col-sm-6 col-xl-auto">
                <button class="btn btn-primary add btn-block mb-4" name="action" value="create-linkgroup">
                    <i class="fa fa-share"></i> <?php echo __('newLinkGroup');?>

                </button>
            </div>
        </div>
    </form>
    <div class="accordion" id="accordion2" role="tablist" aria-multiselectable="true">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkgruppen']->value, 'linkgruppe');
$_smarty_tpl->tpl_vars['linkgruppe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkgruppe']->value) {
$_smarty_tpl->tpl_vars['linkgruppe']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['linkgruppe']->value->getID() < 0 && $_smarty_tpl->tpl_vars['linkgruppe']->value->getLinks()->count() === 0) {?>
                <?php continue 1;?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('lgName', ('linkgroup-').($_smarty_tpl->tpl_vars['linkgruppe']->value->getID()));?>
            <?php $_smarty_tpl->_assignInScope('missingTranslations', $_smarty_tpl->tpl_vars['linkAdmin']->value->getMissingLinkGroupTranslations($_smarty_tpl->tpl_vars['linkgruppe']->value->getID()));?>
            <div class="card panel-<?php if ($_smarty_tpl->tpl_vars['linkgruppe']->value->getID() > 0) {?>default<?php } else { ?>danger<?php }?> link-group-wrapper">
                <?php $_smarty_tpl->_assignInScope('show', false);?>
                <?php if ($_smarty_tpl->tpl_vars['kPlugin']->value > 0) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkgruppe']->value->getLinks(), 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['kPlugin']->value === $_smarty_tpl->tpl_vars['l']->value->getPluginID()) {?>
                            <?php $_smarty_tpl->_assignInScope('show', true);?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <div class="card-header row accordion-heading">
                    <div class="subheading1 col-md-6" id="heading-<?php echo $_smarty_tpl->tpl_vars['lgName']->value;?>
">
                        <span class="pull-left">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#collapse<?php echo $_smarty_tpl->tpl_vars['lgName']->value;?>
">
                                <span class="accordion-toggle-icon">
                                    <?php if ($_smarty_tpl->tpl_vars['show']->value === true) {?><i class="fal fa-minus"></i><?php } else { ?><i class="fal fa-plus"></i><?php }?>
                                </span>
                                <?php if ($_smarty_tpl->tpl_vars['linkgruppe']->value->getID() > 0) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['linkgruppe']->value->getName();?>
 (<?php echo __('linkGroupTemplatename');?>
: <?php echo $_smarty_tpl->tpl_vars['linkgruppe']->value->getTemplate();?>
)
                                <?php } else { ?>
                                    <?php echo __('linksWithoutLinkGroup');?>

                                <?php }?>
                            </a>
                            <?php if (count($_smarty_tpl->tpl_vars['missingTranslations']->value) > 0) {?>
                                <i class="fal fa-exclamation-triangle text-warning"
                                      data-toggle="tooltip"
                                      data-placement="top"
                                      title="<?php echo __('missingTranslations');?>
: <?php echo count($_smarty_tpl->tpl_vars['missingTranslations']->value);?>
"></i>
                            <?php }?>
                            <i title="<?php echo __('hasAtLeastOneDuplicateSpecialLink');?>
"
                               class="d-none duplicate-special-page-warning fal fa-exclamation-triangle text-danger"
                               data-toggle="tooltip"
                               data-placement="top"></i>
                        </span>
                    </div>
                    <div class="col-md-6">
                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                            <?php if ($_smarty_tpl->tpl_vars['linkgruppe']->value->getID() > 0) {?>
                                <input type="hidden" name="kLinkgruppe" value="<?php echo $_smarty_tpl->tpl_vars['linkgruppe']->value->getID();?>
">
                            <?php }?>
                            <div class="btn-group float-right">
                                <?php if ($_smarty_tpl->tpl_vars['linkgruppe']->value->getID() > 0) {?>
                                    <button name="action" value="delete-linkgroup" class="btn btn-link px-2" title="<?php echo __('linkGroup');?>
 <?php echo __('delete');?>
" data-toggle="tooltip"<?php if ($_smarty_tpl->tpl_vars['linkgruppe']->value->isSystem()) {?> disabled<?php }?>>
                                        <span class="icon-hover">
                                            <span class="fal fa-trash-alt"></span>
                                            <span class="fas fa-trash-alt"></span>
                                        </span>
                                    </button>
                                    <button name="action" value="add-link-to-linkgroup" class="btn btn-link px-2 add" title="<?php echo __('addLink');?>
" data-toggle="tooltip">
                                        <span class="icon-hover">
                                            <span class="fal fa-plus"></span>
                                            <span class="fas fa-plus"></span>
                                        </span>
                                    </button>
                                    <button name="action" value="edit-linkgroup" class="btn btn-link px-2" title="<?php echo __('modify');?>
" data-toggle="tooltip">
                                        <span class="icon-hover">
                                            <span class="fal fa-edit"></span>
                                            <span class="fas fa-edit"></span>
                                        </span>
                                    </button>
                                <?php }?>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="collapse<?php echo $_smarty_tpl->tpl_vars['lgName']->value;?>
" class="card-body collapse<?php if ($_smarty_tpl->tpl_vars['show']->value === true) {?> show<?php }?>" role="tabpanel" aria-labelledby="heading-<?php echo $_smarty_tpl->tpl_vars['lgName']->value;?>
" data-parent="#accordion2">
                    <?php if ($_smarty_tpl->tpl_vars['linkgruppe']->value->getLinks()->count() > 0) {?>
                        <div class="table-responsive">
                            <table class="table">
                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_uebersicht_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('list'=>$_smarty_tpl->tpl_vars['linkgruppe']->value->getLinks(),'id'=>$_smarty_tpl->tpl_vars['linkgruppe']->value->getID()), 0, true);
?>
                            </table>
                        </div>
                    <?php } else { ?>
                        <p class="alert alert-info" style="margin:10px;"><i class="fal fa-info-circle"></i> <?php echo __('noData');?>
</p>
                    <?php }?>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>    <form action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <div class="row no-gutters">
            <div class="col-sm-6 col-xl-auto mb-4">
                <button class="btn btn-primary add btn-block" name="action" value="create-linkgroup">
                    <i class="fa fa-share"></i> <?php echo __('newLinkGroup');?>

                </button>
            </div>
        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_action_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
