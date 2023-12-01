<?php

session_start();

use OTS\Core\{Config, Router};

//define constants 
define('PROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

define('CSS', 'https://'. $_SERVER['SERVER_NAME'] . "/App/css/main.css");
define('JS', 'https://'. $_SERVER['SERVER_NAME'] . "/App/js/main.js");

require_once PROOT . DS . 'Core/autoload.php';

$rootDir = Config::get('root_dir');
define('ROOT', $rootDir);

$url = $_SERVER['REQUEST_URI'];
$url = trim($url, '/');
$url = str_replace(ROOT, '', $url);
$url = preg_replace('/(\?.+)/', '', $url);
Router::route($url);