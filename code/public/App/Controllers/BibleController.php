<?php 

namespace OTS\App\Controllers;

use OTS\Core\Controller;

class BibleController extends Controller {
   
    public function indexAction() {
        $this->view->render();
    }
}