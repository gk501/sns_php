<?php

ini_set('display_errors', 1);

define('DSN', 'mysql:dbhost=localhost;dbname=dotinstall_php_sns');
define('DB_USER', 'dbuser');
define('DB_PASS', 'dotinstall_sns_php_pass');

require_once(__DIR__ . '/../lib/functions.php');
require_once(__DIR__ . '/autoload.php');

session_start();
