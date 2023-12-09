<?php

namespace OTS\App\Controllers;

use OTS\Core\{Controller, H, Session, Router};
use OTS\App\Models\Users;

class AuthController extends Controller
{
    public $role_options = [];

    public function registerAction($id = 'new'): void
    {
        if ($id === 'new') {
            $user = new Users();
        } else {
            $user = Users::findById($id);
        }

        if ($this->request->isPost()) {
            H::dnd($this->request->get());
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
