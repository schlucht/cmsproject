<?php

session_start();

use OTS\Core\{Config, Router};

//define constants 
define('PROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);


require_once PROOT . DS . 'Core/autoload.php';
require_once PROOT . DS . 'Core/functions.php';

$rootDir = Config::get('root_dir');
define('ROOT', $rootDir);

$url = $_SERVER['REQUEST_URI'];
$url = trim($url, '/');
$url = str_replace(ROOT, '', $url);
$url = preg_replace('/(\?.+)/', '', $url);
Router::route($url);