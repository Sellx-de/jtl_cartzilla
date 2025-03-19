<?php
define('PFAD_ROOT', '/home/sellx-waschi/htdocs/waschi.sellx.studio/');
define('URL_SHOP', 'https://waschi.sellx.studio');
define('DB_HOST','localhost');
define('DB_NAME','waschitest');
define('DB_USER','testwaschi');
define('DB_PASS','CR5OlmJTNUYyCOv25F6i');

define('BLOWFISH_KEY', '790d5ca70802f5ab18f9cc4591675a');
// enables printing of warnings/infos/errors for the shop frontend
define('SHOP_LOG_LEVEL', E_ALL);
// enables printing of warnings/infos/errors for the dbeS sync
define('SYNC_LOG_LEVEL', E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
// enables printing of warnings/infos/errors for the admin backend
define('ADMIN_LOG_LEVEL', E_ALL);
// enables printing of warnings/infos/errors for the smarty templates
define('SMARTY_LOG_LEVEL', E_ALL);
// excplicitly show/hide errors
ini_set('display_errors', 0);
ini_set('show_debug_bar', 0);
ini_set('PLUGIN_DEV_MODE', 0);
