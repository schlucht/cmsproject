<?php
    session_start();

$minPHPVersion = '8.0';
if(phpversion() < $minPHPVersion){
    die("Your php Version must be {$minPHPVersion} or higher.");
}

define('ROOTPATH', __DIR__ . DIRECTORY_SEPARATOR);

require "../app/Core/init.php";

DEBUG ? ini_set('display_errors', 1): ini_set('display_error', 0);   

$app = new App();
$app->loadController();
