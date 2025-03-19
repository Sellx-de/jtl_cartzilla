<?php
/* Smarty version 4.5.4, created on 2025-02-11 12:19:39
  from '/www/htdocs/w01f28bd/waschi.sillytoots.de/admin/templates/bootstrap/tpl_inc/help_description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab324be83478_07052883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6802eb9558f0596c8ab7868634c04eebac603d58' => 
    array (
      0 => '/www/htdocs/w01f28bd/waschi.sillytoots.de/admin/templates/bootstrap/tpl_inc/help_description.tpl',
      1 => 1739261195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab324be83478_07052883 (Smarty_Internal_Template $_smarty_tpl) {
?><span data-html="true"
        data-toggle="tooltip"
        data-placement="<?php echo $_smarty_tpl->tpl_vars['placement']->value;?>
"
        title="<?php if ($_smarty_tpl->tpl_vars['description']->value !== null) {
echo $_smarty_tpl->tpl_vars['description']->value;
}
if ($_smarty_tpl->tpl_vars['cID']->value !== null && $_smarty_tpl->tpl_vars['description']->value !== null) {?><hr><?php }
if ($_smarty_tpl->tpl_vars['cID']->value !== null) {?><p><strong><?php echo __('settingValueName');?>
: </strong><code><?php echo $_smarty_tpl->tpl_vars['cID']->value;?>
</code></p><?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['iconQuestion']->value) {?>
        <span class="fas fa-question-circle fa-fw"></span>
    <?php } else { ?>
        <span class="fas fa-info-circle fa-fw"></span>
    <?php }?>
</span>
<?php }
}
