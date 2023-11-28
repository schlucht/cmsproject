<?php
    session_start();

require "../app/Core/init.php";

if(DEBUG){
    ini_set('display_errors', 1);
} else {
    ini_set('display_error', 0);   
}
$app = new App();
$app->loadController();
