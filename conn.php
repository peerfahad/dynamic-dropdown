<?php
require __DIR__ . '/vendor/autoload.php';

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'pass4rd');
define('DB_DATABASE', 'categories');

$db2 = new MysqliDb (
    DB_SERVER,
    DB_USERNAME,
    DB_PASSWORD,
    DB_DATABASE);
