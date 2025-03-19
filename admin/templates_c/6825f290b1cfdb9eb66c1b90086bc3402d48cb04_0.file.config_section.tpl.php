<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:57:14
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/config_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3440aed59d2_80623656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6825f290b1cfdb9eb66c1b90086bc3402d48cb04' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/config_section.tpl',
      1 => 1738748468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/config_sections.tpl' => 1,
  ),
),false)) {
function content_67a3440aed59d2_80623656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('skipHeading', (($tmp = $_smarty_tpl->tpl_vars['skipHeading']->value ?? null)===null||$tmp==='' ? false : $tmp));?>
<form<?php if (!empty($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?> method="<?php if (!empty($_smarty_tpl->tpl_vars['method']->value)) {
echo $_smarty_tpl->tpl_vars['method']->value;
} else { ?>post<?php }?>"<?php if (!empty($_smarty_tpl->tpl_vars['action']->value)) {?> action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }?>>
    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

    <input type="hidden" name="einstellungen" value="1" />
    <?php if (!empty($_smarty_tpl->tpl_vars['a']->value)) {?>
        <input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
" />
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['tab']->value)) {?>
        <input type="hidden" name="tab" value="<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
" />
    <?php }?>
    <div class="settings">
        <?php if (!empty($_smarty_tpl->tpl_vars['title']->value)) {?>
            <span class="subheading1"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
            <hr class="mb-3">
        <?php }?>
        <div>
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_sections.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sections'=>(($tmp = $_smarty_tpl->tpl_vars['sections']->value ?? null)===null||$tmp==='' ? (array($_smarty_tpl->tpl_vars['section']->value)) : $tmp)), 0, false);
?>
            <?php echo (($tmp = $_smarty_tpl->tpl_vars['additional']->value ?? null)===null||$tmp==='' ? '' : $tmp);?>

        </div>
        <div class="save-wrapper card-footer">
            <div class="row">
                <?php echo (($tmp = $_smarty_tpl->tpl_vars['additionalButtons']->value ?? null)===null||$tmp==='' ? '' : $tmp);?>

                <div class="ml-auto col-sm-6 col-xl-auto">
                    <button name="speichern" type="submit" class="btn btn-primary btn-block">
                        <?php if (!empty($_smarty_tpl->tpl_vars['buttonCaption']->value)) {
echo $_smarty_tpl->tpl_vars['buttonCaption']->value;
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
