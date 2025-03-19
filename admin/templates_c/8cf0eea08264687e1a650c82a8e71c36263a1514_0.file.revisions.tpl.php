<?php
/* Smarty version 4.5.4, created on 2025-02-05 12:29:05
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/revisions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a34b81224827_98403563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cf0eea08264687e1a650c82a8e71c36263a1514' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/revisions.tpl',
      1 => 1738748470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a34b81224827_98403563 (Smarty_Internal_Template $_smarty_tpl) {
?><hr>
<div class="card">
    <div class="card-header">
        <div class="subheading1"><?php echo __('revisions');?>
</div>
        <hr class="mb-n3">
    </div>
    <div class="card-body">
        <?php if (count($_smarty_tpl->tpl_vars['revisions']->value) > 0) {?>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['secondary']->value === true) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'localized', false, 'foreignKey');
$_smarty_tpl->tpl_vars['localized']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['foreignKey']->value => $_smarty_tpl->tpl_vars['localized']->value) {
$_smarty_tpl->tpl_vars['localized']->do_else = false;
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['show']->value, 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
                            <div class="d-none" id="original-<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'utf-8', true);?>
-<?php echo $_smarty_tpl->tpl_vars['foreignKey']->value;?>
"><?php if ((($_smarty_tpl->tpl_vars['localized']->value->{$_smarty_tpl->tpl_vars['attribute']->value} !== null ))) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['localized']->value->{$_smarty_tpl->tpl_vars['attribute']->value}, ENT_QUOTES, 'utf-8', true);
} elseif (is_string($_smarty_tpl->tpl_vars['localized']->value)) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['localized']->value, ENT_QUOTES, 'utf-8', true);
}?></div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } else { ?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['show']->value, 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
                        <div class="d-none original" id="original-<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'utf-8', true);?>
" data-references="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'utf-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['data']->value->{$_smarty_tpl->tpl_vars['attribute']->value}, ENT_QUOTES, 'utf-8', true);?>
</div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php }?>
            <div id="accordion" role="tablist" aria-multiselectable="true">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['revisions']->value, 'revision');
$_smarty_tpl->tpl_vars['revision']->iteration = 0;
$_smarty_tpl->tpl_vars['revision']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['revision']->value) {
$_smarty_tpl->tpl_vars['revision']->do_else = false;
$_smarty_tpl->tpl_vars['revision']->iteration++;
$__foreach_revision_11_saved = $_smarty_tpl->tpl_vars['revision'];
?>
                    <div class="card mb-2">
                        <div class="card-header py-2" role="tab" data-idx="<?php echo $_smarty_tpl->tpl_vars['revision']->iteration;?>
" id="heading-revision-<?php echo $_smarty_tpl->tpl_vars['revision']->iteration;?>
">
                            <a class="align-items-center text-decoration-none" data-toggle="collapse" data-parent="#accordion" href="#revision-<?php echo $_smarty_tpl->tpl_vars['revision']->iteration;?>
" aria-expanded="true" aria-controls="profile-<?php echo $_smarty_tpl->tpl_vars['revision']->iteration;?>
">
                                <span class="badge"><?php echo $_smarty_tpl->tpl_vars['revision']->value->timestamp;?>
</span>
                                <span> | <?php echo $_smarty_tpl->tpl_vars['revision']->value->author;?>
</span>
                                <i class="fas fa-plus float-right"></i>
                            </a>
                        </div>
                        <div id="revision-<?php echo $_smarty_tpl->tpl_vars['revision']->iteration;?>
" data-idx="<?php echo $_smarty_tpl->tpl_vars['revision']->iteration;?>
" class="collapse" role="tabpanel" aria-labelledby="heading-revision-<?php echo $_smarty_tpl->tpl_vars['revision']->iteration;?>
">
                            <div class="card-body">
                                <div class="list-group revision-content">
                                    <?php if ($_smarty_tpl->tpl_vars['secondary']->value === true && (isset($_smarty_tpl->tpl_vars['revision']->value->content->references))) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['revision']->value->content->references, 'ref', false, 'secondaryKey');
$_smarty_tpl->tpl_vars['ref']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['secondaryKey']->value => $_smarty_tpl->tpl_vars['ref']->value) {
$_smarty_tpl->tpl_vars['ref']->do_else = false;
?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['show']->value, 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
                                                <?php if ((($_smarty_tpl->tpl_vars['ref']->value->{$_smarty_tpl->tpl_vars['attribute']->value} !== null ))) {?>
                                                    <div class="subheading2 mt-4"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'utf-8', true);?>
 (<?php echo $_smarty_tpl->tpl_vars['secondaryKey']->value;?>
):</div>
                                                    <div id="diff-<?php echo $_smarty_tpl->tpl_vars['revision']->iteration;?>
-<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'utf-8', true);?>
-<?php echo $_smarty_tpl->tpl_vars['secondaryKey']->value;?>
"></div>
                                                    <div class="d-none" data-references="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'utf-8', true);?>
" data-references-secondary="<?php echo $_smarty_tpl->tpl_vars['secondaryKey']->value;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['ref']->value->{$_smarty_tpl->tpl_vars['attribute']->value}, ENT_QUOTES, 'utf-8', true);?>
</div>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php } else { ?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['show']->value, 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
                                            <?php if ((($_smarty_tpl->tpl_vars['revision']->value->content->{$_smarty_tpl->tpl_vars['attribute']->value} !== null ))) {?>
                                                <div class="subheading2 mt-4"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'utf-8', true);?>
</div>
                                                <div id="diff-<?php echo $_smarty_tpl->tpl_vars['revision']->iteration;?>
-<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'utf-8', true);?>
"></div>
                                                <div class="d-none" data-references="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'utf-8', true);?>
" data-references-secondary=""><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['revision']->value->content->{$_smarty_tpl->tpl_vars['attribute']->value}, ENT_QUOTES, 'utf-8', true);?>
</div>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <form class="restore-revision" method="post">
                                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['revision']->value->id;?>
" name="revision-id" />
                                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['revision']->value->type;?>
" name="revision-type" />
                                    <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['secondary']->value === true) {?>1<?php } else { ?>0<?php }?>" name="revision-secondary" />
                                    <div class="row">
                                        <div class="ml-auto col-sm-6 col-xl-auto">
                                            <button type="submit" class="btn btn-danger" name="revision-action" value="delete">
                                                <i class="fas fa-trash-alt"></i> <?php echo __('revisionDelete');?>

                                            </button>
                                        </div>
                                        <div class="col-sm-6 col-xl-auto">
                                            <button type="submit" class="btn btn-primary" name="revision-action" value="restore">
                                                <i class="fa fa-refresh"></i> <?php echo __('revisionRestore');?>

                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['revision'] = $__foreach_revision_11_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php } else { ?>
            <div class="alert alert-info"><?php echo __('noRevisions');?>
</div>
        <?php }?>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateBaseURL']->value;?>
js/diff_match_patch.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/<?php echo (defined('PFAD_CODEMIRROR') ? constant('PFAD_CODEMIRROR') : null);?>
/addon/merge/merge.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/<?php echo (defined('PFAD_CODEMIRROR') ? constant('PFAD_CODEMIRROR') : null);?>
/addon/merge/merge.css" />


<?php echo '<script'; ?>
 type="text/javascript">

    /**
     * @param target
     * @param original
     * @param modified
     */
    function initUI(target, original, modified) {
        target.innerHTML = '';
        dv = CodeMirror.MergeView(target, {
            highlightDifferences: true,
            collapseIdentical:    false,
            revertButtons:        false,
            value:                modified,
            origLeft:             null,
            orig:                 original,
            lineNumbers:          true,
            mode:                 'smartymixed',
            connect:              null
        });
    }

    /**
     * @param mergeView
     * @returns {number}
     */
    function mergeViewHeight(mergeView) {
        function editorHeight(editor) {
            if (!editor) {
                return 0;
            }
            return editor.getScrollInfo().height;
        }
        return Math.max(editorHeight(mergeView.leftOriginal()),
                editorHeight(mergeView.editor()),
                editorHeight(mergeView.rightOriginal()));
    }

    /**
     * @param mergeView
     */
    function resize(mergeView) {
        var height = mergeViewHeight(mergeView),
            newHeight;
        for(;;) {
            if (mergeView.leftOriginal()) {
                mergeView.leftOriginal().setSize(null, height);
            }
            mergeView.editor().setSize(null, height);
            if (mergeView.rightOriginal()) {
                mergeView.rightOriginal().setSize(null, height);
            }
            newHeight = mergeViewHeight(mergeView);
            if (newHeight >= height) {
                break;
            } else {
                height = newHeight;
            }
        }
        mergeView.wrap.style.height = height + 'px';
    }

    $(document).ready(function () {
        $('.collapse').on('shown.bs.collapse', function (a,b) {
            var id               = $(this).attr('data-idx'),
                collapsedElement = $('#revision-' + id),
                closed           = collapsedElement.hasClass('in'),
                hasDiff          = false,
                revisionContent  = collapsedElement.find('.revision-content .d-none');
            revisionContent.each(function(idx, elem) {
                var jelem,
                    reference,
                    secondary,
                    selector,
                    target,
                    originalSelector;
                jelem     = $(elem);
                reference = jelem.attr('data-references');
                secondary = jelem.attr('data-references-secondary');
                selector  = (typeof secondary !== 'undefined' && secondary !== '' && secondary !== null)
                    ? ('diff-' + id + '-' + reference + '-' + secondary)
                    : ('diff-' + id + '-' + reference);
                target    = document.getElementById(selector);
                originalSelector = (typeof secondary !== 'undefined' && secondary !== '' && secondary !== null)
                    ? ('#original-' + reference + '-' + secondary)
                    : ('#original-' + reference);
                initUI(target, $(originalSelector).text(), jelem.text());
            })
        });
    });
<?php echo '</script'; ?>
>

<?php }
}
