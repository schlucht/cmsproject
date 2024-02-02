<?php
namespace ots\models;
use ots\core\Model;
class User extends Model
{
    protected $allowedColumns = [
        'user_id',
        'user_fname',
        'user_lname',
        'user_email',
        'user_pw',
        'user_rule_id',
        'user_tocken',
        'updated_at',
        'created_at',
,    ];
    protected $table = 'users';
    public function __construct()
    {
        parent::__construct($this->table, $this->allowedColumns);
    }

    public function users() {
        return $this->findAll();
    }
}