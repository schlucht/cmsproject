<?php
    
class HomeController extends Controller {
    
    public function index() {
        $user = new UserModel;
        $result = $user->findAll();
        show($result);
        $this->view('Home');
    }
}

