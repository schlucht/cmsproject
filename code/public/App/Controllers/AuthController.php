<?php

namespace OTS\App\Controllers;

use OTS\Core\{Controller, H, Session, Router};
use OTS\App\Models\Users;

class AuthController extends Controller
{

    public function registerAction(string $id = 'new'): void
    {
        if ($id == 'new') {
            $user = new Users();
        } else {
            $user = Users::findById($id);
        }
        $this->view->user = $user;
        $this->view->role_options = [
            '' => '',
            Users::AUTHOR_PERMISSION => 'Author',
            Users::ADMIN_PERMISSION => 'Admin',
        ];
        $this->view->errors = $user->getErrors();
        $this->view->render();
    }
}
