<?php

class UserModel {
    use Model;

    protected $table = "users";
    protected $allowedCollumns = [
        'updated_at',
        'created_at',
        'fname',
        'lname',
        'email',
        'password',
        'acl',
        'blocked',
    ];
}