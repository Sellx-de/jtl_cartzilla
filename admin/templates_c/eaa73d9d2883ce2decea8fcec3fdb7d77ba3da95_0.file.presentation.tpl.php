<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:01:26
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/plugins/jtl_gpsr/adminmenu/template/presentation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab1ff60392a4_27218706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaa73d9d2883ce2decea8fcec3fdb7d77ba3da95' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/plugins/jtl_gpsr/adminmenu/template/presentation.tpl',
      1 => 1739268050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab1ff60392a4_27218706 (Smarty_Internal_Template $_smarty_tpl) {
?><form name="presentations" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" enctype="multipart/form-data">
    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

    <input type="hidden" name="kPlugin" value="<?php echo $_smarty_tpl->tpl_vars['kPlugin']->value;?>
">
    <input type="hidden" name="kPluginAdminMenu" value="<?php echo $_smarty_tpl->tpl_vars['kPluginAdminMenu']->value;?>
">
    <div class="subheading1">
        <label class="" for="template_manufacturer"><?php echo __('Darstellung des Herstelllers');?>
:</label>
        <hr />
    </div>
    <textarea class="codemirrorHidden smarty" id="template_manufacturer" name="template_manufacturer" rows="20"><?php echo $_smarty_tpl->tpl_vars['gpsr_presentation']->value['manufacturer'];?>
</textarea>
    <div class="subheading1 mt-5">
        <label class="" for="template_responsibleperson"><?php echo __('Darstellung der verantwortlichen Person');?>
:</label>
        <hr />
    </div>
    <textarea class="codemirrorHidden smarty" id="template_responsibleperson" name="template_responsibleperson" rows="20"><?php echo $_smarty_tpl->tpl_vars['gpsr_presentation']->value['responsibleperson'];?>
</textarea>
    <div class="save-wrapper">
        <div class="row">
            <div class="ml-auto col-sm-6 col-xl-auto">
                <button type="submit" name="task" value="resetPresentation" class="btn btn-danger btn-block btn-reset-all">
                    <i class="fas fa-refresh"></i> <?php echo __('reset');?>

                </button>
            </div>
            <div class="col-sm-6 col-xl-auto">
                <button type="submit" name="task" value="savePresentation" class="btn btn-primary btn-block">
                    <?php echo __('saveWithIcon');?>

                </button>
            </div>
        </div>
    </div>
</form>

<?php echo '<script'; ?>
>
    (function() {
        let editorSmarty = null;

        function initCodemirror() {
            if (editorSmarty === null) {
                editorSmarty = [];
                (['template_manufacturer', 'template_responsibleperson']).forEach(function (elem, idx) {
                    editorSmarty[idx] = CodeMirror.fromTextArea(document.getElementById(elem), {
                        lineNumbers: true,
                        lineWrapping: true,
                        mode: 'smartymixed',
                        scrollbarStyle: 'simple',
                        extraKeys: {
                            'Ctrl-Space': function (cm) {
                                cm.setOption('fullScreen', !cm.getOption('fullScreen'));
                            },
                            'Esc': function (cm) {
                                if (cm.getOption('fullScreen')) cm.setOption('fullScreen', false);
                            }
                        }
                    });
                });
            }
        }

        $(window).on('load', function() {
            let $tab  = $('.tab-link-<?php echo $_smarty_tpl->tpl_vars['presentationTabId']->value;?>
[data-toggle="tab"]'),
                $form = $('#plugin-tab-<?php echo $_smarty_tpl->tpl_vars['presentationTabId']->value;?>
 form');
            if ($tab.hasClass('active')) {
                initCodemirror();
            } else {
                $('.tab-link-<?php echo $_smarty_tpl->tpl_vars['presentationTabId']->value;?>
[data-toggle="tab"]').on('shown.bs.tab', function () {
                    initCodemirror();
                });
            }

            $form.on('submit', function (e) {
                if ($(e.originalEvent.submitter).val() === 'resetPresentation') {
                    return (window.confirm('<?php echo __('Wollen Sie die Darstellung der Herstellerinformationen zurücksetzen?');?>
'));
                }

                return true;
            });
        });
    })();
<?php echo '</script'; ?>
><?php }
}
