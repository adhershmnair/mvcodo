<?php
if (file_exists('vendor/autoload.php')) {
    require 'vendor/autoload.php';
}
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('ROOT_PATH', dirname(__FILE__));
define('APP_PATH', ROOT_PATH. '/application/');
define('CONFIG_PATH', APP_PATH. '/config/');


require CONFIG_PATH.'config.php';
require CORE_PATH.'Main.php';
require CORE_PATH.'Application.php';
require CORE_PATH.'Controller.php';
require CORE_PATH.'Model.php';
$app = new Main();
