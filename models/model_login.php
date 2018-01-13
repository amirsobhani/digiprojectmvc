<?php

class model_login extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    function getUser($data = [])
    {
        $email = $data['email'];
        $password = $data['pass'];
        $sql = 'SELECT * FROM users_tbl WHERE email=? AND password=?';
        $param = [$email, $password];



    }
}