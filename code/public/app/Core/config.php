<?php

if ($_SERVER['SERVE_NAME'] === 'localhost'){
    define('ROOT', 'http://localhost/src/');
}else{
    define('ROOT', 'http://www.jagolo.ch/code/public/src/');
}
