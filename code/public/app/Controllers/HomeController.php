<?php
    
class HomeController extends Controller {
    
    public function index() {
        $model = new Model();
        $arr = [
            'fname' => 'Claudia',
            'lname' => 'Wyssen',
            'email' => 'claudia@web.ch',
            'password' => 'claudia',
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        // $result2 = $model->insert($arr);
        // $result3 = $model->update(2, ['fname' => 'Janina']);
        $model->delete(7);
        $model->delete(8);
        $model->delete(9);
        // show($result2);
        $this->view('Home');
    }
}

