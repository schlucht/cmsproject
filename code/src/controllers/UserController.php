<?php

namespace ots\controllers;

use ots\core\{Request,F};
use ots\models\User;

class UserController
{
    
    public static function getUsers(Request $request)
    {       
        $user = new User();
        return json_encode($user->users());
    }
}