<?php
/* Smarty version 4.5.4, created on 2025-02-07 10:35:23
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/sucheinstellungen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a5d3db948518_09471736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edb6592be936c2b32dbb5fbff5c89c6b1aab2b86' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/sucheinstellungen.tpl',
      1 => 1738748272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/einstellungen_bearbeiten.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67a5d3db948518_09471736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/einstellungen_bearbeiten.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>__('Sucheinstellungen')), 0, false);
if ($_smarty_tpl->tpl_vars['createIndex']->value !== false) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        var createIndex = '<?php echo $_smarty_tpl->tpl_vars['createIndex']->value;?>
';
        var createCount = 0;
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        function showIndexNotification(pResult) {
            var type = 'info';
            var msg  = '';

            if (pResult && pResult.error) {
                type = 'danger';
                msg  = pResult.error.message;
            } else if (pResult && pResult.hinweis) {
                msg  = pResult.hinweis;
                createCount++;
            } else {
                return null;
            }

            createNotify({
                title: '<?php echo __('useFulltextSearch');?>
',
                message: msg
            }, {
                type: type
            });

            if (createCount >= 2) {
                $('.alert.alert-danger').hide(300);
                updateNotifyDrop();
                ioCall('clearSearchCache', [], showCacheNotification, showCacheNotification);
            }
        }

        function showCacheNotification(pResult) {
            var isError = pResult && pResult.error;
            createNotify({
                title: '<?php echo __('searchSettingsChange');?>
',
                message: isError ? pResult.error.message : pResult.hinweis
            }, {
                type: isError ? 'danger' : 'info'
            });
        }

        ioCall('createSearchIndex', ['tartikel', createIndex], showIndexNotification, showIndexNotification);
        ioCall('createSearchIndex', ['tartikelsprache', createIndex], showIndexNotification, showIndexNotification);
    <?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['supportFulltext']->value === false) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $('#suche_fulltext').val('N')
            .prop('disabled', 'disabled')
            .prop('title', '<?php echo __('fulltextSearchMysql');?>
');
    });
<?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
