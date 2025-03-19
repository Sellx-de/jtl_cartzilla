<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:39:38
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/shoptemplate_detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33feae96cd0_56917836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0c4310532d84debcd1c3ff47fc9c04154fd187c' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/shoptemplate_detail.tpl',
      1 => 1738748468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/option_select.tpl' => 1,
    'file:tpl_inc/option_optgroup.tpl' => 1,
    'file:snippets/colorpicker.tpl' => 1,
    'file:tpl_inc/option_number.tpl' => 1,
    'file:tpl_inc/option_radio.tpl' => 1,
    'file:tpl_inc/option_textarea.tpl' => 1,
    'file:tpl_inc/option_upload.tpl' => 1,
    'file:tpl_inc/option_generic.tpl' => 1,
    'file:snippets/buttons/saveAndContinueButton.tpl' => 1,
  ),
),false)) {
function content_67a33feae96cd0_56917836 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(highlightTargetFormGroup);
    window.addEventListener('hashchange', highlightTargetFormGroup);
<?php echo '</script'; ?>
>
<form action="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post" enctype="multipart/form-data" id="form_settings">
    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

    <div id="settings" class="settings">
        <?php if ($_smarty_tpl->tpl_vars['template']->value->getType() === 'admin' || ($_smarty_tpl->tpl_vars['template']->value->getType() !== 'mobil' && $_smarty_tpl->tpl_vars['template']->value->isResponsive())) {?>
            <input type="hidden" name="eTyp" value="<?php if (!empty($_smarty_tpl->tpl_vars['template']->value->getType())) {
echo $_smarty_tpl->tpl_vars['template']->value->getType();
} else { ?>standard<?php }?>" />
        <?php } else { ?>
            <div class="card">
                <div class="card-header">
                    <div class="subheading1"><?php echo __('mobile');?>
</div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <?php if ($_smarty_tpl->tpl_vars['template']->value->getType() === 'mobil' && $_smarty_tpl->tpl_vars['template']->value->isResponsive()) {?>
                        <div class="alert alert-warning"><?php echo __('warning_responsive_mobile');?>
</div>
                    <?php }?>
                    <div class="item form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="eTyp"><?php echo __('standardTemplateMobil');?>
</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select class="custom-select" name="eTyp" id="eTyp">
                                <option value="standard" <?php if ($_smarty_tpl->tpl_vars['template']->value->getType() === 'standard') {?>selected="selected"<?php }?>>
                                    <?php echo __('optimizeBrowser');?>

                                </option>
                                <option value="mobil" <?php if ($_smarty_tpl->tpl_vars['template']->value->getType() === 'mobil') {?>selected="selected"<?php }?>>
                                    <?php echo __('optimizeMobile');?>

                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templateConfig']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
            <div class="card">
                <div class="card-header">
                    <div class="subheading1"><?php echo __($_smarty_tpl->tpl_vars['section']->value->name);?>
</div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <?php if ($_smarty_tpl->tpl_vars['section']->value->key === 'header') {?>
                        <style>
                            .preset-button {
                                border: 5px solid transparent;
                                max-width: 222px;
                            }
                            .preset-button.selected { border: 5px solid; }
                        </style>
                        <?php echo '<script'; ?>
>
                            
                            $(document).ready(function(){
                                let $menuTemplate       = $('#header_menu_template'),
                                    $allSettings        = $('[id^="header_"]'),
                                    settingPrefix       = 'header_',
                                    settingPrefixID     = '#' + settingPrefix,
                                    menuTemplateCurrent = $menuTemplate.val(),
                                    settings = {
                                        menu_single_row: {},
                                        menu_multiple_rows: {disableOptionWhen: {
                                                'menu_single_row': 'N'
                                            }
                                        },
                                        menu_center: {disableOptionWhen: {
                                                'menu_multiple_rows':'scroll',
                                                'menu_single_row': 'N'
                                            }
                                        },
                                        menu_scroll: { disableOptionWhen: {
                                                'menu_single_row': 'N'
                                            }
                                        },
                                        menu_logoheight: {},
                                        menu_logo_centered: { disableOptionWhen: {
                                                'menu_single_row': 'N'
                                            }
                                        },
                                        menu_search_width: { disableOptionWhen: {
                                                'menu_single_row': 'N'
                                            }
                                        },
                                        menu_search_position: { disableOptionWhen: {
                                                'menu_single_row': 'N'
                                            }
                                        },
                                        header_full_width: {},
                                        menu_show_topbar: {},
                                };
                                let presets = [
                                    {
                                        name: 'headerStandard',
                                        settings: {
                                            menu_single_row: 'N',
                                            menu_multiple_rows: 'multiple',
                                            menu_center: 'center',
                                            menu_scroll: 'menu',
                                            menu_logoheight: '49',
                                            menu_logo_centered: 'Y',
                                            menu_search_width: '0',
                                            menu_search_position: 'right',
                                            header_full_width: 'N',
                                            menu_show_topbar: 'Y',
                                        }
                                    },
                                    {
                                        name: 'headerLogo',
                                        settings: {
                                            menu_single_row: 'Y',
                                            menu_multiple_rows: 'scroll',
                                            menu_center: 'center',
                                            menu_scroll: 'menu',
                                            menu_logoheight: '110',
                                            menu_logo_centered: 'Y',
                                            menu_search_width: '240',
                                            menu_search_position: 'right',
                                            header_full_width: 'N',
                                            menu_show_topbar: 'Y',
                                        }
                                    },
                                    {
                                        name: 'headerSingle',
                                        settings: {
                                            menu_single_row: 'Y',
                                            menu_multiple_rows: 'scroll',
                                            menu_center: 'center',
                                            menu_scroll: 'menu',
                                            menu_logoheight: '80',
                                            menu_logo_centered: 'N',
                                            menu_search_width: '0',
                                            menu_search_position: 'right',
                                            header_full_width: 'N',
                                            menu_show_topbar: 'Y',
                                        }
                                    },
                                    {
                                        name: 'headerBoxed',
                                        settings: {
                                            menu_single_row: 'Y',
                                            menu_multiple_rows: 'multiple',
                                            menu_center: 'space-between',
                                            menu_scroll: 'menu',
                                            menu_logoheight: '80',
                                            menu_logo_centered: 'N',
                                            menu_search_width: '500',
                                            menu_search_position: 'left',
                                            header_full_width: 'B',
                                            menu_show_topbar: 'Y',
                                        }
                                    },
                                    {
                                        name: 'headerTopbar',
                                        settings: {
                                            menu_single_row: 'Y',
                                            menu_multiple_rows: 'scroll',
                                            menu_center: 'center',
                                            menu_scroll: 'all',
                                            menu_logoheight: '80',
                                            menu_logo_centered: 'N',
                                            menu_search_width: '700',
                                            menu_search_position: 'left',
                                            header_full_width: 'Y',
                                            menu_show_topbar: 'N',
                                        }
                                    },
                                ];
                                $.each(presets, function (key, value) {
                                    let isSelected = value.name === menuTemplateCurrent ? 'selected' : '';
                                    $('#preset-items').append(
                                        '<div class="col col-auto">' +
                                        '<img src="<?php echo $_smarty_tpl->tpl_vars['templateBaseURL']->value;?>
gfx/header/' + value.name + '.png" id="' + value.name + '" class="preset-button ' + isSelected + '"/>'  +
                                        '</div>')
                                });
                                let $presetButtons = $('.preset-button');
                                $presetButtons.on('click', function () {
                                    setSettings($(this).prop('id'));
                                });
                                $menuTemplate.on('change', function () {
                                    setSettings($(this).val());
                                });
                                $('[id^=' + settingPrefix).on('change', function() {
                                    disableSettings();
                                });
                                //TODO: Generate disabled messages from javascript settings object above
                                $allSettings.on('change', function () {
                                        if (!$menuTemplate.is(this)) {
                                            $presetButtons.removeClass('selected');
                                            $menuTemplate.val('headerCustom');
                                        }
                                    });
                                $allSettings.parent().prop('toggle', 'tooltip');
                                $allSettings.parent().prop('title', '<?php echo __('tooltipWithoutMenuSingleRow');?>
');
                                $(settingPrefixID + 'menu_center').parent().prop('title', '<?php echo __('tooltipDisabledMenuCenter');?>
')
                                function disableSettings() {
                                    $.each(settings, function (key, value) {
                                        if (value.disableOptionWhen !== undefined) {
                                            $.each(value.disableOptionWhen, function (keyOption, valueOption) {
                                                let $settingID = $(settingPrefixID + key);
                                                if ($(settingPrefixID + keyOption).val() === valueOption) {
                                                    $settingID.prop('disabled', true).css('pointer-events', 'none');
                                                    $settingID.parent().tooltip('enable');
                                                    return false;
                                                } else {
                                                    $settingID.prop('disabled', false).css('pointer-events', 'initial');
                                                    $settingID.parent().tooltip('disable');
                                                }
                                            });
                                        }
                                    });
                                }
                                function setSettings(presetId) {
                                    $.each(presets, function (key, value) {
                                        if (presetId === value.name) {
                                            $.each(value.settings, function (presetKey, presetValue) {
                                                $(settingPrefixID + presetKey).val(presetValue);
                                            });
                                        }
                                    });

                                    $menuTemplate.val(presetId);
                                    disableSettings();

                                    $presetButtons.removeClass('selected');
                                    $('#' + presetId).addClass('selected');
                                }
                                disableSettings();

                                $('.fa-desktop')
                                    .prop('toggle', 'tooltip')
                                    .prop('title', '<?php echo __('tooltipDesktop');?>
')
                                    .tooltip('enable');
                                $('.fa-mobile-alt')
                                    .prop('toggle', 'tooltip')
                                    .prop('title', '<?php echo __('tooltipMobile');?>
')
                                    .tooltip('enable');

                                $('#form_settings').on('submit', function () {
                                    $allSettings.prop('disabled', false);
                                });
                            });
                            
                        <?php echo '</script'; ?>
>

                        <div id="preset-wrapper">
                            <div id="preset-description">
                                <?php echo __('chooseLayout');?>

                            </div>
                            <div id="preset-items" class="row mt-3 mb-4">

                            </div>
                        </div>
                    <a class="btn btn-primary mb-5" data-toggle="collapse" href="#header-settings" aria-controls="header-settings">
                        <?php echo __('buttonCustomLayout');?>

                    </a>
                    <div class="collapse" id="header-settings">
                    <?php } elseif ($_smarty_tpl->tpl_vars['section']->value->key === 'customsass') {?>
                        <div class="underline-links mb-5"><?php echo __('Custom Sass Description');?>
</div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['section']->value->key === 'colors') {?>
                        <div id="color-info" class="mb-5 text-warning"><?php echo __('The color settings might not work as expected in this theme.');?>
</div>
                    <?php }?>
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value->settings, 'setting');
$_smarty_tpl->tpl_vars['setting']->iteration = 0;
$_smarty_tpl->tpl_vars['setting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->do_else = false;
$_smarty_tpl->tpl_vars['setting']->iteration++;
$__foreach_setting_1_saved = $_smarty_tpl->tpl_vars['setting'];
?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['Subheader'])) {?>
                            <div class="col-11 ml-auto">
                                <div class="subheading1 mb-2"><?php echo __($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['Subheader']);?>
</div>
                                <hr>
                            </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['setting']->value->key === 'theme_default' && (isset($_smarty_tpl->tpl_vars['themePreviews']->value)) && $_smarty_tpl->tpl_vars['themePreviews']->value !== null) {?>
                                <div class="col-sm-8 ml-auto">
                                    <div class="item form-group form-row align-items-center" id="theme-preview-wrap" style="display: none;">
                                        <span class="input-group-addon"><strong><?php echo __('preview');?>
</strong></span>
                                        <img id="theme-preview" alt="" />
                                    </div>
                                    <?php echo '<script'; ?>
 type="text/javascript">
                                        var previewJSON = <?php echo $_smarty_tpl->tpl_vars['themePreviewsJSON']->value;?>
;
                                        
                                        setPreviewImage = function () {
                                            var currentTheme = $('#theme-theme_default').val(),
                                                previewImage = $('#theme-preview'),
                                                previewImageWrap = $('#theme-preview-wrap');
                                            if (typeof previewJSON[currentTheme] !== 'undefined') {
                                                previewImage.attr('src', previewJSON[currentTheme]);
                                                previewImageWrap.show();
                                            } else {
                                                previewImageWrap.hide();
                                            }
                                        };
                                        $(document).ready(function () {
                                            setPreviewImage();
                                            $('#theme-theme_default').on('change', function () {
                                                setPreviewImage();
                                            });
                                        });
                                        
                                    <?php echo '</script'; ?>
>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['setting']->value->key === 'theme_default') {?>
                                <?php echo '<script'; ?>
>
                                    $(document).ready(function () {
                                        $('#theme_theme_default').on('change', function () {
                                            if ($(this).val() === 'blackline') {
                                                $('#color-info').show();
                                            } else {
                                                $('#color-info').hide();
                                            }
                                        }).change();
                                    });
                                <?php echo '</script'; ?>
>
                            <?php }?>
                            <div class="col-xs-12 col-md-12 <?php if (!empty($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['MarginBottom'])) {?>mb-5<?php }?>">
                                <div class="item form-group form-row align-items-center" id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->key;?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['setting']->value->isEditable) {?>
                                        <label class="col col-sm-4 col-form-label text-sm-right" for="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['setting']->value->key === 'use_minify' && $_smarty_tpl->tpl_vars['action']->value === 'setPreview') {?>
                                                <span class="badge badge-warning"><?php echo __('Might not work correctly in preview mode');?>
</span>
                                            <?php }?>
                                            <?php echo __($_smarty_tpl->tpl_vars['setting']->value->name);?>
:
                                        </label>
                                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2 <?php if ($_smarty_tpl->tpl_vars['setting']->value->cType === 'number') {?>config-type-number<?php }?>">
                                            <?php if ($_smarty_tpl->tpl_vars['setting']->value->cType === 'select') {?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/option_select.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>$_smarty_tpl->tpl_vars['setting']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value), 0, true);
?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cType === 'optgroup') {?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/option_optgroup.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>$_smarty_tpl->tpl_vars['setting']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value), 0, true);
?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cType === 'colorpicker') {?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/colorpicker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cpID'=>((string)$_smarty_tpl->tpl_vars['setting']->value->elementID),'cpName'=>((string)$_smarty_tpl->tpl_vars['setting']->value->elementID),'useAlpha'=>true,'cpValue'=>$_smarty_tpl->tpl_vars['setting']->value->value), 0, true);
?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cType === 'number') {?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/option_number.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>$_smarty_tpl->tpl_vars['setting']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value), 0, true);
?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cType === 'radio') {?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/option_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>$_smarty_tpl->tpl_vars['setting']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value), 0, true);
?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cType === 'textarea') {?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/option_textarea.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>$_smarty_tpl->tpl_vars['setting']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value), 0, true);
?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value->cType === 'upload' && (isset($_smarty_tpl->tpl_vars['setting']->value->rawAttributes['target']))) {?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/option_upload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>$_smarty_tpl->tpl_vars['setting']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value,'iteration'=>$_smarty_tpl->tpl_vars['setting']->iteration), 0, true);
?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/option_generic.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>$_smarty_tpl->tpl_vars['setting']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value,'iteration'=>$_smarty_tpl->tpl_vars['setting']->iteration), 0, true);
?>
                                            <?php }?>
                                        </div>
                                    <?php } else { ?>
                                        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['setting']->value->elementID;?>
" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['setting']->value->value, ENT_QUOTES, 'utf-8', true);?>
" />
                                    <?php }?>
                                </div>
                            </div>
                        <?php
$_smarty_tpl->tpl_vars['setting'] = $__foreach_setting_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>                    <?php if ($_smarty_tpl->tpl_vars['section']->value->key === 'header') {?>
                        </div>
                    <?php }?>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div class="save-wrapper">
            <div class="row">
                <div class="ml-auto col-sm-6 col-xl-auto">
                    <a class="btn btn-outline-primary btn-block" href="<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
">
                        <?php echo __('cancelWithIcon');?>

                    </a>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/buttons/saveAndContinueButton.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <?php if ((isset($_GET['activate']))) {?>
                        <input type="hidden" name="activate" value="1" />
                    <?php }?>
                    <input type="hidden" name="type" value="settings" />
                    <input type="hidden" name="dir" value="<?php echo $_smarty_tpl->tpl_vars['template']->value->getDir();?>
" />
                    <input type="hidden" name="admin" value="0" />
                    <button type="submit" class="btn btn-primary btn-block" name="action" value="<?php if ((isset($_GET['activate']))) {?>activate<?php } else { ?>save-config<?php }?>">
                        <?php if ((isset($_GET['activate']))) {?><i class="fa fa-share"></i> <?php echo __('activateTemplate');
} else {
echo __('saveWithIcon');
}?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php }
}
