<?php
define('PFAD_ROOT', '/home/waschi-ssh/htdocs/waschi.sellx.studio/');
define('URL_SHOP', 'https://waschi.sellx.studio');
define('DB_HOST','127.0.0.1');
define('DB_PORT','3306');
define('DB_NAME','waschitest');
define('DB_USER','testwaschi');
define('DB_PASS','CR5OlmJTNUYyCOv25F6i');

define('BLOWFISH_KEY', '65b41597a54ff44789de265f5a736a');
// enables printing of warnings/infos/errors for the shop frontend
define('SHOP_LOG_LEVEL', E_ALL);
// enables printing of warnings/infos/errors for the dbeS sync
ini_set('display_errors', 0);
ini_set('log_errors', 1); 
ini_set('error_log', __DIR__ . '/error_log.txt');
ini_set('show_debug_bar', 1);
ini_set('PLUGIN_DEV_MODE', 1);