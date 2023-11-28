<?php

spl_autoload_register(function($classname){
    $filename = "../app/Models/" . ucfirst($classname) . ".php";
    require $filename;
});

require 'functions.php';
require 'config.php';
require 'App.php';
require 'Database.php';
require 'Controller.php';
require 'Model.php';
