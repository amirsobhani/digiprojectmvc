<?php

class model_login extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function checkUser($data = [])
    {
        $email = $data['email'];
        $password = $data['pass'];
        $sql = 'SELECT * FROM users_tbl WHERE email=? AND password=?';
        $param = [$email, $password];
        $result = $this->doSelect($sql, $param);
        if (sizeof($result) > 0 and !empty($email) and !empty($password)) {
            echo 'password correct';
            Model::sesionInit();
            Model::sessionOnSet('UserId', $result[0]['id']);
        } else {
            echo 'wrong password';
        }
    }
}