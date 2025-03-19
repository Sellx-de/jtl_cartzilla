<?php
/* Smarty version 4.5.4, created on 2025-02-06 08:55:59
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.textlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a46b0fd0ef44_44832709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00d6d457eb7ee7faacd63e8e99f61412f17295b7' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.textlist.tpl',
      1 => 1738748451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a46b0fd0ef44_44832709 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group" id="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-slides">
    <label><?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>
</label>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propval']->value, 'text', false, 'i');
$_smarty_tpl->tpl_vars['text']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->do_else = false;
?>
        <div class="input-group">
            <div class="input-group-prepend">
                <button type="button" class="btn"
                        onclick="removeLine_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
(this);">
                    <i class="fas fa-times fa-fw"></i>
                </button>
            </div>
            <label class="sr-only" for="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></label>
            <input type="text" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[]"
                   value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'utf-8', true);?>
" id="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
            <div class="input-group-append">
                <span class="btn secondary btn-slide-mover">
                    <i class="fas fa-arrows-alt fa-fw"></i>
                </span>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div class="input-group" id="new-input-group-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">
    <div class="input-group-prepend">
        <button type="button" class="btn primary"
                onclick="addNewLine_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
()">
            <i class="fas fa-plus fa-fw"></i>
        </button>
    </div>
    <label class="sr-only" for="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-new"></label>
    <input type="text" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-new" disabled>
    <div class="input-group-append">
        <span type="button" class="btn secondary btn-slide-mover">
            <i class="fas fa-arrows-alt fa-fw invisible"></i>
        </span>
    </div>
</div>
<?php echo '<script'; ?>
>
    $('#<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-slides').sortable({
        handle: '.btn-slide-mover'
    });

    function getNewDataIndex_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
()
    {
        let maxIndex = 0;

        for(const input of $('#<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-slides input[data-index]')) {
            if(parseInt(input.dataset.index) > maxIndex) {
                maxIndex = parseInt(input.dataset.index);
            }
        }

        return maxIndex + 1;
    }

    function removeLine_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
(elm)
    {
        $(elm).closest('.input-group').remove();
    }

    function addNewLine_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
()
    {
        let newInputGroup      = $('#new-input-group-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        let newInputGroupClone = newInputGroup.clone();

        newInputGroupClone.attr('id', '');
        newInputGroupClone.find('button')
            .removeClass('primary')
            .attr('onclick', 'removeLine_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
(this);');
        newInputGroupClone.find('button i')
            .removeClass('fa-plus')
            .addClass('fa-times');
        newInputGroupClone.find('.btn-slide-mover i')
            .removeClass('invisible');
        newInputGroupClone.find('input')
            .prop('disabled', false)
            .attr('name', '<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[]')
            .attr('data-index', getNewDataIndex_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
());
        newInputGroupClone.appendTo('#<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-slides');
    }
<?php echo '</script'; ?>
><?php }
}
