<?php

if ($_SERVER['SERVER_NAME'] === 'localhost'){
    define('ROOT', 'http://localhost/src/');
}else{
    define('ROOT', 'https://'. $_SERVER['SERVER_NAME'] . '/src/');
}
