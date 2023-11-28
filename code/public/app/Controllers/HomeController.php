<?php
    
class HomeController extends Controller {
    use Controller;    

    public function index() {
        $this->view('Home');
    }
}

