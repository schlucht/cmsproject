<?php
    
class HomeController {
    use Controller;    

    public function index() {
        $this->view('Home');
    }
}

