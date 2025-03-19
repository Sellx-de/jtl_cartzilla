<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:36:57
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/dbupdater_scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33f4969aee3_90187954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f21fb1728a87c26a0e6a0afa2572fa82a01cf368' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/dbupdater_scripts.tpl',
      1 => 1738748471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33f4969aee3_90187954 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    var adminPath = '<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;?>
/';
    

    function backup($element)
    {
        disableUpdateControl(true);

        var url = $element.attr('href'),
            download = !!$element.data('download');

        pushEvent('Starte Sicherungskopie');
        ioManagedCall(
            adminPath, 'dbupdaterBackup', [],
            function (result, error) {
                disableUpdateControl(false);

                var message = error
                    ? '<?php echo __('errorSaveCopy');?>
'
                    : (download
                        ? '<?php echo __('saveCopy');?>
' + '"<strong>' + result.file + '</strong>"' + '<?php echo __('isDownloaded');?>
'
                        : '<?php echo __('saveCopy');?>
' + '"<strong>' + result.file + '</strong>"' + '<?php echo __('createSuccess');?>
');

                showNotify(error ? 'danger' : 'success', 'Sicherungskopie', message);
                pushEvent(message);

                if (!error && download) {
                    ioDownload('dbupdaterDownload', [result.file]);
                }
            }
        );
    }

    function doUpdate(callback)
    {
        ioManagedCall(
            adminPath, 'dbUpdateIO', [],
            function (result, error) {
                if (!error) {
                    callback(result);

                    if (result.availableUpdate) {
                        doUpdate(callback);
                    } else {
                        location.reload();
                    }
                } else {
                    callback(undefined, error);
                }
            }
        );
    }

    function update($element)
    {
        var url = $element.attr('href');
        disableUpdateControl(true);
        pushEvent('Starte Update');

        doUpdate(function(data, error) {
            var _once = function() {
                var message = error
                    ? '<?php echo __('infoUpdatePause');?>
' + error.message
                    : '<?php echo __('successUpdate');?>
'
                showNotify(error ? 'danger' : 'success', 'Update', message);
                disableUpdateControl(false);
            };

            if (error) {
                pushEvent('Fehler bei Update: ' + error.message);
                _once();
            } else {
                pushEvent('     Update auf ' + formatVersion(data.result) + ' erfolgreich');
                if (!data.availableUpdate) {
                    //pushEvent('Update beendet');
                    updateStatusTpl(null);
                    _once();
                }
            }
        });
    }

    function updateStatusTpl(plugin)
    {
        ioManagedCall(adminPath, 'dbupdaterStatusTpl', [plugin], function(result, error) {
            if (error) {
                pushEvent(error.message);
            } else {
                $('#update-status').html(result.tpl);
                init_bindings();
            }
        });

        // update notifications
        updateNotifyDrop();
    }

    function toggleDirection($element)
    {
        $element.parent()
            .children()
            .attr('disabled', false)
            .toggle();
    }

    function migration($element)
    {
        var id = $element.data('id'),
            url = $element.attr('href'),
            dir = $element.data('dir'),
            plugin = $element.data('plugin'),
            params = {dir: dir};

        $element.attr('disabled', true);

        if (id !== undefined) {
            params = $.extend({}, { id: id }, params);
        }
        if (plugin === undefined) {
            plugin = null;
        }

        ioManagedCall(adminPath, 'dbupdaterMigration', [id, dir, plugin], function(result, error) {
            $element
                .attr('disabled', false)
                .closest('tr')
                .find('.migration-created')
                .fadeOut();

            if (!error) {
                toggleDirection($element);
            }

            var message = error
                ? error.message
                : '<?php echo __('successMigration');?>
';

            showNotify(error ? 'danger' : 'success', 'Migration', message);

            if (!error) {
                if (result.forceReload === true) {
                    location.reload();
                }
                updateStatusTpl(plugin);
                if (dir === 'up') {
                    pushEvent(sprintf('<?php echo __('updateTosuccessfull');?>
', formatVersion(result.result)));
                }
            }

            if (dir === 'down') {
                $('#resultLog').show();
            }
        });
    }

    function pushEvent(message)
    {
        $('#debug').append($('<div/>').html(message));
    }

    function formatVersion(version)
    {
        var v = parseInt(version);
        if (v >= 300 && v < 500) {
            return v / 100;
        }
        return version;
    }

    function disableUpdateControl(disable)
    {
        var $buttons = $('#btn-update-group a.btn'),
            $resultLog = $('#resultLog');

        if (!!disable) {
            $buttons.attr('disabled', true);
            $resultLog.show();
        } else {
            $buttons.attr('disabled', false);
        }
    }

    function init_bindings()
    {
        $('[data-callback]').on('click', function(e) {
            e.preventDefault();
            var $element = $(this);
            if ($element.attr('disabled') !== undefined) {
                return false;
            }
            var callback = $element.data('callback');
            if (!$(e.target).attr('disabled')) {
                window[callback]($element);
            }
        });
    }

    $(function() {
        init_bindings();
    });

    
<?php echo '</script'; ?>
>
<?php }
}
