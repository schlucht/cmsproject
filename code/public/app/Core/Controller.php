<?php

class Controller{
    
    public function view($name) {
    
        $filename = '../app/Views/' . $name . 'View.php';
        if(file_exists($filename)){
            require $filename;
        }else {
            require '../app/Views/404View.php';
        }
    }
} 
