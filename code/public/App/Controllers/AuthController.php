<?php

namespace OTS\App\Controllers;

use OTS\Core\{Controller, H, Session, Router};

class AuthController extends Controller
{

    public function registerAction(string $id = 'new'): void
    {
        $this->view->errors = [];
        $this->view->render();
    }
}
