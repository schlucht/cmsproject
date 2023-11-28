<?php

class _404Controller {
    use Controller;
    
    public function index() {
        $this->view('404');
    }
}
