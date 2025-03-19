<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/jtlshop/scc/src/scc/templates/formgroup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab3166324f64_00433658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faef15761a79200b47c2446de3f4409ae4fce939' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/jtlshop/scc/src/scc/templates/formgroup.tpl',
      1 => 1739260988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab3166324f64_00433658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['params']->value['id']->getValue() ?? null)===null||$tmp==='' ? uniqid() : $tmp));
$_smarty_tpl->_assignInScope('breakPoint', $_smarty_tpl->tpl_vars['params']->value['breakpoint']->getValue());
if ($_smarty_tpl->tpl_vars['params']->value['label-for']->hasValue()) {?>
    <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" aria-labelledby="form-group-label-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-group <?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();?>
"
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?> title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }?>
        role="<?php if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {
echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();
} else { ?>group<?php }?>"
        <?php if ($_smarty_tpl->tpl_vars['params']->value['aria']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['aria']->getValue(), 'ariaVal', false, 'ariaKey');
$_smarty_tpl->tpl_vars['ariaVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ariaKey']->value => $_smarty_tpl->tpl_vars['ariaVal']->value) {
$_smarty_tpl->tpl_vars['ariaVal']->do_else = false;
?>aria-<?php echo $_smarty_tpl->tpl_vars['ariaKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['ariaVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['data']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['data']->getValue(), 'dataVal', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataVal']->value) {
$_smarty_tpl->tpl_vars['dataVal']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['attribs']->hasValue()) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['attribs']->getValue(), 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    >
        <?php if ($_smarty_tpl->tpl_vars['params']->value['horizontal']->getValue() === true) {?>
            <div class="form-row">
                <label id="form-group-label-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" for="<?php echo $_smarty_tpl->tpl_vars['params']->value['label-for']->getValue();?>
" class="col-form-label pt-0 col-<?php echo $_smarty_tpl->tpl_vars['breakPoint']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['params']->value['label-cols']->getValue();
if ($_smarty_tpl->tpl_vars['params']->value['label-size']->hasValue()) {?> col-form-label-<?php echo $_smarty_tpl->tpl_vars['params']->value['label-size']->getValue();
}?>">
                    <?php echo $_smarty_tpl->tpl_vars['params']->value['label']->getValue();?>

                </label>
                <div class="col-<?php echo $_smarty_tpl->tpl_vars['breakPoint']->value;?>
-<?php echo 12-$_smarty_tpl->tpl_vars['params']->value['label-cols']->getValue();?>
">
                    <?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

                    <?php if ($_smarty_tpl->tpl_vars['params']->value['description']->hasValue()) {?>
                        <small id="form-group-description-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['params']->value['description']->getValue();?>
</small>
                    <?php }?>
                </div>
            </div>
        <?php } else { ?>
            <div class="d-flex flex-column-reverse">
                <?php if ($_smarty_tpl->tpl_vars['params']->value['description']->hasValue()) {?>
                    <small id="form-group-description-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['params']->value['description']->getValue();?>
</small>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

                <label id="form-group-label-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" for="<?php echo $_smarty_tpl->tpl_vars['params']->value['label-for']->getValue();?>
" class="col-form-label pt-0<?php if ($_smarty_tpl->tpl_vars['params']->value['label-size']->hasValue()) {?> col-form-label-<?php echo $_smarty_tpl->tpl_vars['params']->value['label-size']->getValue();
}?>">
                    <?php echo $_smarty_tpl->tpl_vars['params']->value['label']->getValue();?>

                </label>
            </div>
        <?php }?>
    </div>
<?php } else { ?>
    <fieldset class="form-group <?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();?>
"
        id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
        <?php if ($_smarty_tpl->tpl_vars['params']->value['label']->hasValue()) {?>aria-labelledby="form-group-label-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {?>role="<?php echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['aria']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['aria']->getValue(), 'ariaVal', false, 'ariaKey');
$_smarty_tpl->tpl_vars['ariaVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ariaKey']->value => $_smarty_tpl->tpl_vars['ariaVal']->value) {
$_smarty_tpl->tpl_vars['ariaVal']->do_else = false;
?>aria-<?php echo $_smarty_tpl->tpl_vars['ariaKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['ariaVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['data']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['data']->getValue(), 'dataVal', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataVal']->value) {
$_smarty_tpl->tpl_vars['dataVal']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
    >
        <?php if ($_smarty_tpl->tpl_vars['params']->value['horizontal']->getValue() === true) {?>
            <div class="form-row">
        <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['label']->hasValue()) {?>
                <legend
                        id="form-group-label-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
                        class="col-form-label<?php if ($_smarty_tpl->tpl_vars['params']->value['horizontal']->getValue() === true) {?> col-<?php echo $_smarty_tpl->tpl_vars['breakPoint']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['params']->value['label-cols']->getValue();
}
if ($_smarty_tpl->tpl_vars['params']->value['label-size']->hasValue()) {?> col-form-label-<?php echo $_smarty_tpl->tpl_vars['params']->value['label-size']->getValue();
}?> pt-0">
                    <?php echo $_smarty_tpl->tpl_vars['params']->value['label']->getValue();?>

                </legend>
            <?php }?>
            <div<?php if ($_smarty_tpl->tpl_vars['params']->value['horizontal']->getValue() === true) {?> class="col-<?php echo $_smarty_tpl->tpl_vars['breakPoint']->value;?>
-<?php echo 12-$_smarty_tpl->tpl_vars['params']->value['label-cols']->getValue();?>
"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['params']->value['description']->hasValue()) {?>
                    <small id="form-group-description-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['params']->value['description']->getValue();?>
</small>
                <?php }?>
            </div>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['horizontal']->getValue() === true) {?>
            </div>
        <?php }?>
    </fieldset>
<?php }
}
}
