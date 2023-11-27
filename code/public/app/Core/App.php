<?php

class App {
    
    private $controller = 'Home';
    private $method = 'index';

    private function splitURL() {
        $URL = $_GET['url'] ?? 'home';
        $URL = explode('/', $URL);
        return $URL;
    }

    public function loadController() {
        $URL = $this->splitURL();
        $FILE = ucfirst($URL[0]);

        $filename = '../app/Controllers/' . $FILE . 'Controller.php';
        if(file_exists($filename)){
            require $filename;
            $this->controller =  $FILE; 
        }else {
            require '../app/Controllers/_404Controller.php';
            $this->controller = '_404';
        }
        $controllerName = $this->controller . "Controller";
        $controller = new $controllerName;
        call_user_func_array([$controller, $this->method],[]);
    }
}
