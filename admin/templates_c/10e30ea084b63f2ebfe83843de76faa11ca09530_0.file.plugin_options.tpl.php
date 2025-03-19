<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:01:26
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/plugin_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab1ff6015d15_10273757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10e30ea084b63f2ebfe83843de76faa11ca09530' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/plugin_options.tpl',
      1 => 1738748473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/colorpicker.tpl' => 1,
  ),
),false)) {
function content_67ab1ff6015d15_10273757 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['oPlugin']->value !== null) {?>
    <div class="settings-content">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['pluginBackendURL']->value;?>
" class="navbar-form">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <input type="hidden" name="kPlugin" value="<?php echo $_smarty_tpl->tpl_vars['oPlugin']->value->getID();?>
" />
            <input type="hidden" name="kPluginAdminMenu" value="<?php echo $_smarty_tpl->tpl_vars['oPluginAdminMenu']->value->kPluginAdminMenu;?>
" />
            <input type="hidden" name="Setting" value="1" />
            <?php $_smarty_tpl->_assignInScope('open', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oPlugin']->value->getConfig()->getOptions(), 'confItem');
$_smarty_tpl->tpl_vars['confItem']->index = -1;
$_smarty_tpl->tpl_vars['confItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['confItem']->value) {
$_smarty_tpl->tpl_vars['confItem']->do_else = false;
$_smarty_tpl->tpl_vars['confItem']->index++;
$__foreach_confItem_0_saved = $_smarty_tpl->tpl_vars['confItem'];
?>
                <?php if ($_smarty_tpl->tpl_vars['oPluginAdminMenu']->value->kPluginAdminMenu !== $_smarty_tpl->tpl_vars['confItem']->value->menuID) {?>
                    <?php continue 1;?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['confItem']->value->confType === JTL\Plugin\Data\Config::TYPE_NOT_CONFIGURABLE) {?>
                    <?php if ($_smarty_tpl->tpl_vars['open']->value > 0) {?>
                        </div><!-- .panel-body -->
                        </div><!-- .panel -->
                    <?php }?>
                    <div class="panel-idx-<?php echo $_smarty_tpl->tpl_vars['confItem']->index;
if ($_smarty_tpl->tpl_vars['confItem']->index === 0) {?> first<?php }?> mb-3">
                    <div class="subheading1"><?php echo __($_smarty_tpl->tpl_vars['confItem']->value->niceName);?>

                        <?php if (strlen((string) $_smarty_tpl->tpl_vars['confItem']->value->description) > 0) {?>
                            <span class="card-title-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>$_smarty_tpl->tpl_vars['confItem']->value->description),$_smarty_tpl ) );?>
</span>
                        <?php }?>
                    </div>
                    <hr>
                    <div class="">
                    <?php $_smarty_tpl->_assignInScope('open', 1);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['confItem']->value->inputType === JTL\Plugin\Admin\InputType::NONE) {?>
                    <!-- not showing <?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
 -->
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['open']->value === 0 && $_smarty_tpl->tpl_vars['confItem']->index === 0) {?>
                        <div class="first">
                        <div class="subheading1"><?php echo __('settings');?>
</div>
                        <hr class="mb-3">
                        <div>
                        <?php $_smarty_tpl->_assignInScope('open', 1);?>
                    <?php }?>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
"><?php echo __($_smarty_tpl->tpl_vars['confItem']->value->niceName);?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2 <?php if ($_smarty_tpl->tpl_vars['confItem']->value->inputType === JTL\Plugin\Admin\InputType::NUMBER || $_smarty_tpl->tpl_vars['confItem']->value->inputType === 'zahl') {?>config-type-number<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['confItem']->value->inputType === JTL\Plugin\Admin\InputType::SELECT) {?>
                            <select id="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
"
                                    name="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;
if ($_smarty_tpl->tpl_vars['confItem']->value->confType === JTL\Plugin\Data\Config::TYPE_DYNAMIC) {?>[]<?php }?>"
                                    class="custom-select"<?php if ($_smarty_tpl->tpl_vars['confItem']->value->confType === JTL\Plugin\Data\Config::TYPE_DYNAMIC) {?> multiple="multiple"<?php }?>
                                    data-selected-text-format="count > 2"
                                    data-size="7"
                                    data-actions-box="true">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confItem']->value->options, 'option');
$_smarty_tpl->tpl_vars['option']->iteration = 0;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->iteration++;
$__foreach_option_1_saved = $_smarty_tpl->tpl_vars['option'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['confItem']->value->confType === JTL\Plugin\Data\Config::TYPE_DYNAMIC && is_array($_smarty_tpl->tpl_vars['confItem']->value->value)) {?>
                                        <?php $_smarty_tpl->_assignInScope('selected', (in_array($_smarty_tpl->tpl_vars['option']->value->value,$_smarty_tpl->tpl_vars['confItem']->value->value)));?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('selected', ($_smarty_tpl->tpl_vars['confItem']->value->value == $_smarty_tpl->tpl_vars['option']->value->value));?>
                                    <?php }?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->value;?>
"<?php if ($_smarty_tpl->tpl_vars['selected']->value) {?> selected<?php }?>><?php echo __($_smarty_tpl->tpl_vars['option']->value->niceName);?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['confItem']->value->inputType === JTL\Plugin\Admin\InputType::COLORPICKER) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:snippets/colorpicker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cpID'=>$_smarty_tpl->tpl_vars['confItem']->value->valueID,'cpName'=>$_smarty_tpl->tpl_vars['confItem']->value->valueID,'cpValue'=>$_smarty_tpl->tpl_vars['confItem']->value->value), 0, true);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['confItem']->value->inputType === JTL\Plugin\Admin\InputType::PASSWORD) {?>
                            <input autocomplete="off" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
" name="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
" type="password" value="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->value;?>
" />
                        <?php } elseif ($_smarty_tpl->tpl_vars['confItem']->value->inputType === JTL\Plugin\Admin\InputType::TEXTAREA) {?>
                            <textarea class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
" name="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
"><?php echo $_smarty_tpl->tpl_vars['confItem']->value->value;?>
</textarea>
                        <?php } elseif ($_smarty_tpl->tpl_vars['confItem']->value->inputType === JTL\Plugin\Admin\InputType::NUMBER || $_smarty_tpl->tpl_vars['confItem']->value->inputType === 'zahl') {?>
                            <div class="input-group form-counter">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                        <span class="fas fa-minus"></span>
                                    </button>
                                </div>
                                <input class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
" id="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
" value="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->value;?>
" />
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                        <span class="fas fa-plus"></span>
                                    </button>
                                </div>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['confItem']->value->inputType === JTL\Plugin\Admin\InputType::CHECKBOX) {?>
                            <div class="input-group-checkbox-wrap">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input form-control" id="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
"<?php if ($_smarty_tpl->tpl_vars['confItem']->value->value === 'on') {?> checked="checked"<?php }?>>
                                    <label class="custom-control-label" for="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
"></label>
                                </div>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['confItem']->value->inputType === JTL\Plugin\Admin\InputType::RADIO) {?>
                            <div class="input-group-checkbox-wrap">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confItem']->value->options, 'option');
$_smarty_tpl->tpl_vars['option']->iteration = 0;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->iteration++;
$__foreach_option_2_saved = $_smarty_tpl->tpl_vars['option'];
?>
                                <input id="opt-<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
-<?php echo $_smarty_tpl->tpl_vars['option']->iteration;?>
"
                                       type="radio" name="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
[]"
                                       value="<?php echo $_smarty_tpl->tpl_vars['option']->value->value;?>
"<?php if ($_smarty_tpl->tpl_vars['confItem']->value->value == $_smarty_tpl->tpl_vars['option']->value->value) {?> checked="checked"<?php }?> />
                                <label for="opt-<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
-<?php echo $_smarty_tpl->tpl_vars['option']->iteration;?>
">
                                    <?php echo __($_smarty_tpl->tpl_vars['option']->value->niceName);?>

                                </label> <br />
                            <?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <?php } elseif (in_array($_smarty_tpl->tpl_vars['confItem']->value->inputType,array(JTL\Plugin\Admin\InputType::COLOR,JTL\Plugin\Admin\InputType::EMAIL,JTL\Plugin\Admin\InputType::RANGE,JTL\Plugin\Admin\InputType::DATE,JTL\Plugin\Admin\InputType::MONTH,JTL\Plugin\Admin\InputType::WEEK,JTL\Plugin\Admin\InputType::TEL,JTL\Plugin\Admin\InputType::TIME,JTL\Plugin\Admin\InputType::URL),true)) {?>
                            <input class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
" name="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
" type="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->inputType;?>
" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['confItem']->value->value, ENT_QUOTES, 'utf-8', true);?>
" />
                        <?php } else { ?>
                            <input class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
" name="<?php echo $_smarty_tpl->tpl_vars['confItem']->value->valueID;?>
" type="text" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['confItem']->value->value, ENT_QUOTES, 'utf-8', true);?>
" />
                        <?php }?>
                        </div>
                        <?php if (strlen((string) $_smarty_tpl->tpl_vars['confItem']->value->description) > 0) {?>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__($_smarty_tpl->tpl_vars['confItem']->value->description)),$_smarty_tpl ) );?>
</div>
                        <?php }?>
                    </div>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['confItem'] = $__foreach_confItem_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['open']->value > 0) {?>
                </div><!-- .panel-body -->
                </div><!-- .panel -->
            <?php }?>
            <div class="save-wrapper">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto">
                           <button name="speichern" type="submit" value="<?php echo __('save');?>
" class="btn btn-primary btn-block">
                            <?php echo __('saveWithIcon');?>

                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php }
}
}
