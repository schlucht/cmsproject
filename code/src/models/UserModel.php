<?php
namespace ots\models;

use ots\core\Model;

class UserModel extends Model
{
    public $allowedColumns = [
        'user_id',
        'user_fname',
        'user_lname',
        'user_email',
        'user_pw',
        'user_rule_id',
        'user_token',
        'updated_at',
        'created_at',        
    ];

    public function __construct()
    {
        parent::__construct('users', $this->allowedColumns);

    }

    public function users()
    {
        return $this->findAll();
    }
}