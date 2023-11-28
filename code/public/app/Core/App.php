<?php

class App {
    
    private $controller = 'Home';
    private $method = 'index';

    private function splitURL() {
        $URL = $_GET['url'] ?? 'home';
        $URL = explode('/', trim($URL,"/"));
        return $URL;
    }

    public function loadController() {
        $URL = $this->splitURL();
        $FILE = ucfirst($URL[0]);

        $filename = '../app/Controllers/' . $FILE . 'Controller.php';
        if(file_exists($filename)){
            require $filename;
            $this->controller =  $FILE; 
            unset($URL[0]);
        }else {
            require '../app/Controllers/_404Controller.php';
            $this->controller = '_404';
        }
        $controllerName = $this->controller . "Controller";
        $controller = new $controllerName;
       /** Die Methode im Controller auswählen **/ 
        if(!empty($URL[1])) {
            if(method_exists($controller, $URL[1])) {
                $this->method = $URL[1];
                unset($URL[1]);
            }
        }
        call_user_func_array([$controller, $this->method],$URL);
    }
}
