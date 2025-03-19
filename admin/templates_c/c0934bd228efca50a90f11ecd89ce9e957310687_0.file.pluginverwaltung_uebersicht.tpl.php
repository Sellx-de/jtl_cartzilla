<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:25:29
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33c99a550b3_73428706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0934bd228efca50a90f11ecd89ce9e957310687' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/pluginverwaltung_uebersicht.tpl',
      1 => 1738748472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/pluginverwaltung_uebersicht_aktiviert.tpl' => 1,
    'file:tpl_inc/pluginverwaltung_uebersicht_deaktiviert.tpl' => 1,
    'file:tpl_inc/pluginverwaltung_uebersicht_probleme.tpl' => 1,
    'file:tpl_inc/pluginverwaltung_uebersicht_verfuegbar.tpl' => 1,
    'file:tpl_inc/pluginverwaltung_uebersicht_fehlerhaft.tpl' => 1,
    'file:tpl_inc/pluginverwaltung_upload.tpl' => 1,
    'file:tpl_inc/pluginverwaltung_scripts.tpl' => 1,
    'file:tpl_inc/exstore_banner.tpl' => 1,
  ),
),false)) {
function content_67a33c99a550b3_73428706 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    function ackCheck(kPlugin, hash)
    {
        var bCheck = confirm('<?php echo __('surePluginUpdate');?>
');
        var href = '';

        if (bCheck) {
            href += '<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
?pluginverwaltung_uebersicht=1&updaten=1&token=<?php echo $_SESSION['jtl_token'];?>
&kPlugin=' + kPlugin;
            if (hash && hash.length > 0) {
                href += '#' + hash;
            }
            window.location.href = href;
        }
    }

    <?php if ((isset($_smarty_tpl->tpl_vars['bReload']->value)) && $_smarty_tpl->tpl_vars['bReload']->value) {?>
    window.location.href = window.location.href + "?h=<?php echo $_smarty_tpl->tpl_vars['hinweis64']->value;?>
";
    <?php }
echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('pluginverwaltung'),'cBeschreibung'=>__('pluginverwaltungDesc'),'cDokuURL'=>__('pluginverwaltungURL')), 0, false);
?>

<div id="content">
    <div id="settings">
        <div class="tabs">
            <nav class="tabs-nav">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'aktiviert') {?> active<?php }?>" data-toggle="tab" role="tab" href="#aktiviert">
                            <?php echo __('activated');?>
<span class="badge"><?php echo $_smarty_tpl->tpl_vars['pluginsInstalled']->value->count();?>
</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'deaktiviert') {?> active<?php }?>" data-toggle="tab" role="tab" href="#deaktiviert">
                            <?php echo __('deactivated');?>
 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['pluginsDisabled']->value->count();?>
</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'probleme') {?> active<?php }?>" data-toggle="tab" role="tab" href="#probleme">
                            <?php echo __('problems');?>
 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['pluginsProblematic']->value->count();?>
</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'verfuegbar') {?> active<?php }?>" data-toggle="tab" role="tab" href="#verfuegbar">
                            <?php echo __('available');?>
 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['pluginsAvailable']->value->count();?>
</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'fehlerhaft') {?> active<?php }?>" data-toggle="tab" role="tab" href="#fehlerhaft">
                            <?php echo __('faulty');?>
 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['pluginsErroneous']->value->count();?>
</span>
                        </a>
                    </li>
                    <?php if ((defined('SAFE_MODE') ? constant('SAFE_MODE') : null) === false) {?>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'upload') {?> active<?php }?>" data-toggle="tab" role="tab" href="#upload"><?php echo __('upload');?>
</a>
                    </li>
                    <?php }?>
                </ul>
            </nav>
            <div class="tab-content">
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_uebersicht_aktiviert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_uebersicht_deaktiviert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_uebersicht_probleme.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_uebersicht_verfuegbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_uebersicht_fehlerhaft.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php if ((defined('SAFE_MODE') ? constant('SAFE_MODE') : null) === false) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_upload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pluginverwaltung_scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/exstore_banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
