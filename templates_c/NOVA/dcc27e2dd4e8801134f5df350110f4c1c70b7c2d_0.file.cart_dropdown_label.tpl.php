<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:15:50
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/basket/cart_dropdown_label.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab3166347194_79251719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcc27e2dd4e8801134f5df350110f4c1c70b7c2d' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/basket/cart_dropdown_label.tpl',
      1 => 1739261159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:basket/cart_dropdown.tpl' => 1,
  ),
),false)) {
function content_67ab3166347194_79251719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39225790767ab31663458a8_55247444', 'basket-cart-dropdown-label');
?>

<?php }
/* {block 'basket-cart-dropdown-label-count'} */
class Block_160509240767ab31663462f7_88627141 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <i class='fas fa-shopping-cart cart-icon-dropdown-icon'>
                        <?php if ($_smarty_tpl->tpl_vars['WarenkorbArtikelAnzahl']->value >= 1) {?>
                        <span class="fa-sup" title="<?php echo $_smarty_tpl->tpl_vars['WarenkorbArtikelAnzahl']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['WarenkorbArtikelAnzahl']->value;?>

                        </span>
                        <?php }?>
                    </i>
                <?php
}
}
/* {/block 'basket-cart-dropdown-label-count'} */
/* {block 'basket-cart-dropdown-labelprice'} */
class Block_23005474667ab3166346867_11531657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <span class="cart-icon-dropdown-price"><?php echo $_smarty_tpl->tpl_vars['WarensummeLocalized']->value[0];?>
</span>
                <?php
}
}
/* {/block 'basket-cart-dropdown-labelprice'} */
/* {block 'basket-cart-dropdown-label-link'} */
class Block_21969504467ab3166345c99_77150020 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'basket'),$_smarty_tpl ) );
$_prefixVariable43 = ob_get_clean();
$_block_plugin64 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin64, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable43),'data'=>array('toggle'=>'dropdown')));
$_block_repeat=true;
echo $_block_plugin64->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable43),'data'=>array('toggle'=>'dropdown')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160509240767ab31663462f7_88627141', 'basket-cart-dropdown-label-count', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23005474667ab3166346867_11531657', 'basket-cart-dropdown-labelprice', $this->tplIndex);
?>

            <?php $_block_repeat=false;
echo $_block_plugin64->render(array('class'=>'nav-link','aria'=>array('expanded'=>'false','label'=>$_prefixVariable43),'data'=>array('toggle'=>'dropdown')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'basket-cart-dropdown-label-link'} */
/* {block 'basket-cart-dropdown-label-include-cart-dropdown'} */
class Block_82898946267ab3166346d82_07710427 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:basket/cart_dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'basket-cart-dropdown-label-include-cart-dropdown'} */
/* {block 'basket-cart-dropdown-label'} */
class Block_39225790767ab31663458a8_55247444 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'basket-cart-dropdown-label' => 
  array (
    0 => 'Block_39225790767ab31663458a8_55247444',
  ),
  'basket-cart-dropdown-label-link' => 
  array (
    0 => 'Block_21969504467ab3166345c99_77150020',
  ),
  'basket-cart-dropdown-label-count' => 
  array (
    0 => 'Block_160509240767ab31663462f7_88627141',
  ),
  'basket-cart-dropdown-labelprice' => 
  array (
    0 => 'Block_23005474667ab3166346867_11531657',
  ),
  'basket-cart-dropdown-label-include-cart-dropdown' => 
  array (
    0 => 'Block_82898946267ab3166346d82_07710427',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li class="cart-icon-dropdown nav-item dropdown <?php if ($_smarty_tpl->tpl_vars['WarenkorbArtikelAnzahl']->value != 0) {?>not-empty<?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21969504467ab3166345c99_77150020', 'basket-cart-dropdown-label-link', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82898946267ab3166346d82_07710427', 'basket-cart-dropdown-label-include-cart-dropdown', $this->tplIndex);
?>

    </li>
<?php
}
}
/* {/block 'basket-cart-dropdown-label'} */
}
