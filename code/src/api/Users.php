<?php

namespace ots\api;

use ots\core\{Request, F};
use ots\models\UserModel;

class Users
{

    public static function getUsers(Request $request)
    {
        $user = new UserModel();
        return F::message('success', $user->users());
    }
}