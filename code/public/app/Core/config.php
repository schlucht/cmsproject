<?php

if ($_SERVER['SERVER_NAME'] === 'localhost'){
    define('ROOT', 'http://localhost/src/');
}else{
    define('ROOT', 'https://'. $_SERVER['SERVER_NAME'] . '/src/');
}
    define('DBNAME', 'schmidschluch7');
    define('DBHOST', 'db8.hostpark.net');
    define('DBUSER', 'schmidschluch7');
    define('DBPW', '3903Schlucht');

