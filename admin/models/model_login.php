<?php

require_once '../system/model_system.php';

class model_login extends model_system
{
    function checkuser($username, $password) {
        $sql = "SELECT * FROM user 
                WHERE   UserName=BINARY '$username' AND   Password =BINARY '$password' AND VaiTro = 0";
//        echo $sql;
//        exit();
        $kq = $this->queryOne($sql);
        return $kq;
    }
}