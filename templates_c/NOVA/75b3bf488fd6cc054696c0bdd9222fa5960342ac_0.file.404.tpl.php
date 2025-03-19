<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:39:31
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/page/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab36f34f48f2_92468457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75b3bf488fd6cc054696c0bdd9222fa5960342ac' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/templates/NOVA/page/404.tpl',
      1 => 1739261170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page/sitemap.tpl' => 1,
  ),
),false)) {
function content_67ab36f34f48f2_92468457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84218670567ab36f34f4303_56532551', 'page-404');
?>

<?php }
/* {block 'page-404-include-sitemap'} */
class Block_210856915267ab36f34f44a6_41059201 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:page/sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'page-404-include-sitemap'} */
/* {block 'page-404'} */
class Block_84218670567ab36f34f4303_56532551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-404' => 
  array (
    0 => 'Block_84218670567ab36f34f4303_56532551',
  ),
  'page-404-include-sitemap' => 
  array (
    0 => 'Block_210856915267ab36f34f44a6_41059201',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="page-not-found">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210856915267ab36f34f44a6_41059201', 'page-404-include-sitemap', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'page-404'} */
}
