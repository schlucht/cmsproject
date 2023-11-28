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

define('APP_NAME', 'My_Website');
define('APP_DESC', 'Die Beste Website der Welt!');

/** wenn true werde die Errormeldungen angezeigt */
define ('DEBUG', true);

