<?php

class model_profile extends Model
{
    private $userId;

    function __construct()
    {
        parent::__construct();
        Model::sesionInit();
        $userId = $this->userId = Model::sessionOnGet('UserId');
        if ($userId == false) {
            header('location:' . URL . 'login');
        }
    }

    function index()
    {

    }

    function getProfile()
    {
        $userId = $this->userId;
        $sql = 'SELECT * FROM users_tbl WHERE id=?';
        $params = [$userId];
        $result = $this->doSelect($sql, $params, 'fetch');
        return $result;
    }

    function getOrder()
    {
        $userId = $this->userId;
        $sql = 'SELECT * FROM order_tbl WHERE user_id=?';
        $param = [$userId];
        $result = $this->doSelect($sql, $param);
        $i = 0;
        foreach ($result as $row) {
            $i++;
        }
        return [$result, $i];

    }

    function getMessage()
    {
        $userId = $this->userId;
        $sql = 'SELECT * FROM message_tbl WHERE user_id=? ORDER BY id DESC';
        $params = [$userId];
        $result = $this->doSelect($sql, $params);
        return $result;
    }

    function getComment()
    {
        $userId = $this->userId;
        $sql = 'SELECT comment_tbl.*, product_tbl.title AS productTitle, product_tbl.idcategory FROM comment_tbl
                LEFT JOIN product_tbl ON comment_tbl.idproduct = product_tbl.id
                WHERE user_id=?';
        $result = $this->doSelect($sql, [$userId]);
        return $result;

    }

    function getProvince()
    {
        $sql = 'SELECT * FROM province';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getCity($data)
    {
        $provinceId = $data['province'];
        $sql = 'SELECT * FROM city WHERE province_id=?';
        $param = [$provinceId];
        $result = $this->doSelect($sql, $param);
        return $result;
    }

    function getUserInfo()
    {
        $userId = $this->userId;
        $sql = 'SELECT * FROM users_tbl WHERE id=?';
        $result = $this->doSelect($sql, [$userId], 'fetch');
        return $result;
    }

    function UpdateProfile($data)
    {
        $email = $data['email'];
        $family = $data['family'];
        $code_melli = $data['melliCode'];
        $tel = $data['tel'];
        $mobile = $data['mobile'];
        $birthday = $data['birthday'];
        $sex = $data['sex'];
        $province = $data['province'];
        $city = $data['city'];
        $credit_card = $data['creditCard'];
        $feed = $data['feed'];

        $sql = 'UPDATE users_tbl SET email=?, family=?, code_melli=?, tel=?, mobile=?, birthday=?, sex=?, province=?, city=?, credit_card=?, feed=?';
        $params = [$email, $family, $code_melli, $tel, $mobile, $birthday, $sex, $province, $city, $credit_card, $feed];
        $this->idu($sql, $params);
    }

    function ChangePass($data)
    {
        $newPass1 = $data['1NewPass'];
        $newPass2 = $data['2NewPass'];
        $oldPassResult = $this->getUserInfo();
        $userId = $this->userId;
        $error = '';
        $success = '';
        if ($oldPassResult['password'] == $data['oldPass']) {
            if ($newPass1 == $newPass2) {
                $sql = 'UPDATE users_tbl SET password=? WHERE id=?';
                $params = [$newPass1, $userId];
                $this->idu($sql, $params);
                $success = 'رمز با موفقیت تغییر یافت';
                header('location:ChangePass?success=' . $success);
            } else {
                $error = 'تاییدیه رمز جدید مطابقت ندارد';
                header('location:ChangePass?error=' . $error);
            }
        } else {
            $error = 'رمز عبور فعلی را اشتباه وارد کرده اید';
            header('location:ChangePass?error=' . $error);
        }
    }


}