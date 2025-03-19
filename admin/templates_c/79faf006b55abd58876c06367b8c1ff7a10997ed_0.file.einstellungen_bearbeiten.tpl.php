<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:56:39
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/einstellungen_bearbeiten.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a343e7648bd1_06839201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79faf006b55abd58876c06367b8c1ff7a10997ed' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/einstellungen_bearbeiten.tpl',
      1 => 1738748470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/config_sections.tpl' => 1,
    'file:snippets/buttons/saveButton.tpl' => 1,
  ),
),false)) {
function content_67a343e7648bd1_06839201 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['cSearch']->value)) && strlen((string) $_smarty_tpl->tpl_vars['cSearch']->value) > 0) {?>
    <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['cSearch']->value);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>$_smarty_tpl->tpl_vars['title']->value,'cBeschreibung'=>'','cDokuURL'=>$_smarty_tpl->tpl_vars['cPrefURL']->value), 0, false);
$_smarty_tpl->_assignInScope('search', (isset($_smarty_tpl->tpl_vars['cSuche']->value)) && !empty($_smarty_tpl->tpl_vars['cSuche']->value));
if ($_smarty_tpl->tpl_vars['search']->value) {?>
    <?php echo '<script'; ?>
>
        $(function() {
            var $element = $('.input-group.highlight');
            if ($element.length > 0) {
                var height = $element.height(),
                    offset = $element.offset().top,
                    wndHeight = $(window).height();
                if (height < wndHeight) {
                    offset = offset - ((wndHeight / 2) - (height / 2));
                }

                $('html, body').stop().animate({ scrollTop: offset }, 400);
            }
        });
    <?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
>
    $(highlightTargetFormGroup);
    window.addEventListener('hashchange', highlightTargetFormGroup);
<?php echo '</script'; ?>
>
<div id="content">
    <div id="settings">
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['testResult']->value ?? null)===null||$tmp==='' ? null : $tmp) !== null) {?>
            <div class="card">
                <div class="card-body">
                    <pre><?php echo $_smarty_tpl->tpl_vars['testResult']->value;?>
</pre>
                </div>
            </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['sections']->value)) && count($_smarty_tpl->tpl_vars['sections']->value) > 0) {?>
            <form name="einstellen" method="post" action="<?php echo (($tmp = $_smarty_tpl->tpl_vars['action']->value ?? null)===null||$tmp==='' ? '' : $tmp);?>
" class="settings navbar-form">
                <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                <input type="hidden" name="einstellungen_bearbeiten" value="1" />
                <?php if ($_smarty_tpl->tpl_vars['search']->value) {?>
                    <input type="hidden" name="cSuche" value="<?php echo $_smarty_tpl->tpl_vars['cSuche']->value;?>
" />
                    <input type="hidden" name="einstellungen_suchen" value="1" />
                <?php }?>
                <input type="hidden" name="kSektion" value="<?php echo $_smarty_tpl->tpl_vars['kEinstellungenSektion']->value;?>
" />
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_sections.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <div class="save-wrapper">
                    <div class="row">
                        <div class="ml-auto col-sm-6 col-xl-auto">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['section']->value->getID() === (defined('CONF_EMAILS') ? constant('CONF_EMAILS') : null)) {?>
                                    <?php echo '<script'; ?>
>
                                    $(function() {
                                        if ($('#email_methode').val() !== 'smtp') {
                                            $('#configTest').hide();
                                        }
                                        $('#email_methode').on('change', function () {
                                            var currentVal = $(this).val();
                                            if (currentVal === 'smtp') {
                                                $('#configTest').show();
                                            } else {
                                                $('#configTest').hide();
                                            }
                                        });
                                    });
                                    <?php echo '</script'; ?>
>
                                    <button type="submit" name="test_emails" value="1" class="btn btn-secondary btn-block" id="configTest">
                                        <?php echo __('saveWithconfigTest');?>

                                    </button>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="col-sm-6 col-xl-auto">
                            <?php ob_start();
echo __('savePreferences');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/buttons/saveButton.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_prefixVariable1,'scrollFunction'=>true), 0, false);
?>
                        </div>
                    </div>
                </div>
            </form>
        <?php } else { ?>
            <div class="alert alert-info"><?php echo __('noSearchResult');?>
</div>
        <?php }?>
    </div>
</div>
<?php }
}
