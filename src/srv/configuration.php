<?php
define('INSTALLED', 1);
define('SVMC_VERSION', '3.2 Beta');

$config['dbHost'] = getenv('DB_HOST');
$config['dbUser'] = getenv('DB_USER');
$config['dbPass'] = getenv('DB_PASS');
$config['dbName'] = getenv('DB_NAME');
$config['language'] = 'en-us';
?>
