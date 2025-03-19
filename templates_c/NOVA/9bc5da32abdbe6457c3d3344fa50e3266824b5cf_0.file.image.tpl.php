<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/jtlshop/scc/src/scc/templates/image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab31662e7693_74322162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc5da32abdbe6457c3d3344fa50e3266824b5cf' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/jtlshop/scc/src/scc/templates/image.tpl',
      1 => 1739260988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab31662e7693_74322162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/htdocs/w01f28bd/waschi.sillytoots.de/includes/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->_assignInScope('rounded', '');
$_smarty_tpl->_assignInScope('useWebP', $_smarty_tpl->tpl_vars['params']->value['webp']->getValue() === true && JTL\Media\Image::hasWebPSupport());
if ($_smarty_tpl->tpl_vars['params']->value['rounded']->getValue() !== false) {?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['rounded']->getValue() === true) {?>
        <?php $_smarty_tpl->_assignInScope('rounded', ' rounded');?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('rounded', (' rounded-').($_smarty_tpl->tpl_vars['params']->value['rounded']->getValue()));?>
    <?php }
}
$_smarty_tpl->_assignInScope('src', (($tmp = $_smarty_tpl->tpl_vars['params']->value['src']->getValue() ?? null)===null||$tmp==='' ? '' : $tmp));?>

<?php if (str_ends_with($_smarty_tpl->tpl_vars['src']->value,'keinBild.gif')) {?>
<img class="<?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();?>
 <?php echo $_smarty_tpl->tpl_vars['rounded']->value;?>
 img-fluid<?php if ($_smarty_tpl->tpl_vars['params']->value['fluid-grow']->getValue() === true) {?> w-100<?php }?>"
     height="<?php if ($_smarty_tpl->tpl_vars['params']->value['height']->hasValue() && !empty($_smarty_tpl->tpl_vars['params']->value['height']->getValue())) {
echo $_smarty_tpl->tpl_vars['params']->value['height']->getValue();
} else { ?>130<?php }?>"
     width="<?php if ($_smarty_tpl->tpl_vars['params']->value['width']->hasValue() && !empty($_smarty_tpl->tpl_vars['params']->value['width']->getValue())) {
echo $_smarty_tpl->tpl_vars['params']->value['width']->getValue();
} else { ?>130<?php }?>"
     <?php if ($_smarty_tpl->tpl_vars['params']->value['alt']->hasValue()) {?>alt="<?php echo $_smarty_tpl->tpl_vars['params']->value['alt']->getValue();?>
"<?php }?>
     src="<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
">
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['useWebP']->value && !str_ends_with($_smarty_tpl->tpl_vars['src']->value,'.svg')) {?>
    <picture>
        <source
            <?php if ($_smarty_tpl->tpl_vars['params']->value['srcset']->hasValue()) {?>
                srcset="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['params']->value['srcset']->getValue(),"/\.(?i)(jpg|jpeg|png|bmp) /",".webp ");?>
"
            <?php } elseif ($_smarty_tpl->tpl_vars['src']->value !== '') {?>
                srcset="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['src']->value,'/\.(?i)(jpg|jpeg|png|bmp)$/',".webp");?>
"
            <?php } else { ?>
                srcset=""
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['sizes']->hasValue()) {?>sizes="<?php echo $_smarty_tpl->tpl_vars['params']->value['sizes']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['width']->hasValue() && !empty($_smarty_tpl->tpl_vars['params']->value['width']->getValue())) {?>width="<?php echo $_smarty_tpl->tpl_vars['params']->value['width']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['height']->hasValue() && !empty($_smarty_tpl->tpl_vars['params']->value['height']->getValue())) {?>height="<?php echo $_smarty_tpl->tpl_vars['params']->value['height']->getValue();?>
"<?php }?>
            type="image/webp">
    <?php }?>
        <img
            src="<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
"
            <?php if ($_smarty_tpl->tpl_vars['params']->value['srcset']->hasValue() && !str_ends_with($_smarty_tpl->tpl_vars['src']->value,'.svg')) {?>srcset="<?php echo $_smarty_tpl->tpl_vars['params']->value['srcset']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['sizes']->hasValue() && !str_ends_with($_smarty_tpl->tpl_vars['src']->value,'.svg')) {?>sizes="<?php echo $_smarty_tpl->tpl_vars['params']->value['sizes']->getValue();?>
"<?php }?>
            class="<?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();
echo $_smarty_tpl->tpl_vars['rounded']->value;
if ($_smarty_tpl->tpl_vars['params']->value['fluid']->getValue() === true) {?> img-fluid<?php }
if ($_smarty_tpl->tpl_vars['params']->value['fluid-grow']->getValue() === true) {?> img-fluid w-100<?php }
if ($_smarty_tpl->tpl_vars['params']->value['thumbnail']->getValue() === true) {?> img-thumbnail<?php }
if ($_smarty_tpl->tpl_vars['params']->value['left']->getValue() === true) {?> float-left<?php }
if ($_smarty_tpl->tpl_vars['params']->value['right']->getValue() === true) {?> float-right<?php }
if ($_smarty_tpl->tpl_vars['params']->value['center']->getValue() === true) {?> mx-auto d-block<?php }?>"
            <?php if ($_smarty_tpl->tpl_vars['params']->value['lazy']->getValue() === true) {?>loading="lazy"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?>id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?>title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['alt']->hasValue()) {?>alt="<?php echo $_smarty_tpl->tpl_vars['params']->value['alt']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['width']->hasValue() && !empty($_smarty_tpl->tpl_vars['params']->value['width']->getValue())) {?>width="<?php echo $_smarty_tpl->tpl_vars['params']->value['width']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['height']->hasValue() && !empty($_smarty_tpl->tpl_vars['params']->value['height']->getValue())) {?>height="<?php echo $_smarty_tpl->tpl_vars['params']->value['height']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue()) {?>style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {?>role="<?php echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['aria']->hasValue()) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['aria']->getValue(), 'ariaVal', false, 'ariaKey');
$_smarty_tpl->tpl_vars['ariaVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ariaKey']->value => $_smarty_tpl->tpl_vars['ariaVal']->value) {
$_smarty_tpl->tpl_vars['ariaVal']->do_else = false;
?> aria-<?php echo $_smarty_tpl->tpl_vars['ariaKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['ariaVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['data']->hasValue()) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['data']->getValue(), 'dataVal', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataVal']->value) {
$_smarty_tpl->tpl_vars['dataVal']->do_else = false;
?> data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
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
    <?php if ($_smarty_tpl->tpl_vars['useWebP']->value && !str_ends_with($_smarty_tpl->tpl_vars['src']->value,'.svg')) {?>
    </picture>
    <?php }
}
}
}
