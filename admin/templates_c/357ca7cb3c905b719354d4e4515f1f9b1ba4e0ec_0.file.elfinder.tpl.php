<?php
/* Smarty version 4.5.4, created on 2025-02-06 08:57:49
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/elfinder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a46b7d32bc08_83851563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '357ca7cb3c905b719354d4e4515f1f9b1ba4e0ec' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/elfinder.tpl',
      1 => 1738748271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a46b7d32bc08_83851563 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
        <title><?php echo $_smarty_tpl->tpl_vars['mediafilesSubdir']->value;?>
 - Media Browser</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateUrl']->value;?>
/css/jquery-ui.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateUrl']->value;?>
/css/jquery-ui.theme.min.css">
        <style>
            body, html {
                margin: 0;
                padding: 0;
                height: 100%;
                overflow: hidden;
            }
        </style>
        <?php echo '<script'; ?>
 data-main="<?php echo $_smarty_tpl->tpl_vars['templateUrl']->value;?>
/js/elfinder.client.js" src="<?php echo $_smarty_tpl->tpl_vars['templateUrl']->value;?>
/js/require.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            define('elFinderConfig', {
                elementId: 'elfinder',
                // Documentation for elFinder client options:
                // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
                options: {
                    // connector URL (REQUIRED)
                    url : '<?php echo $_smarty_tpl->tpl_vars['adminURL']->value;
echo $_smarty_tpl->tpl_vars['route']->value;?>
',
                    defaultView: 'icons',
                    height: '100%',
                    resizable: false,
                    customData: {
                        token: '<?php echo $_SESSION['jtl_token'];?>
',
                        jtl_token: '<?php echo $_SESSION['jtl_token'];?>
',
                        mediafilesType: '<?php echo $_smarty_tpl->tpl_vars['mediafilesType']->value;?>
',
                    },
                    commandsOptions : {
                        upload: {
                            ui: 'uploadbutton',
                        },
                    },
                    uiOptions: {
                        toolbar: [
                            ['mkdir'],
                            ['info', 'quicklook', 'upload'],
                            ['rm', 'duplicate', 'rename'],
                            ['view'],
                            ['help']
                        ]
                    },
                    contextmenu: {
                        navbar: [],
                        cwd: ['reload', 'back', '|', 'upload', 'paste', '|', 'info'],
                        files: [
                            'getfile', 'quicklook', '|', 'download', '|', 'duplicate', 'rm', 'rename', '|', 'info'
                        ],
                    },
                    getFileCallback: function(file, fm) {
                        window.opener.elfinder.getFileCallback(file, '<?php echo $_smarty_tpl->tpl_vars['mediafilesBaseUrlPath']->value;?>
');
                        window.close();
                    },
                },
            });
        <?php echo '</script'; ?>
>
    </head>
    <body>
        <!-- Element where elFinder will be created (REQUIRED) -->
        <div id="elfinder"></div>
    </body>
</html>
<?php }
}
