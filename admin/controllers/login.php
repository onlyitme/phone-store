<?php
require_once "models/model_login.php";
class login
{
    function __construct()
    {
        $this->model = new model_login();
        $act = 'index';
        if (isset($_GET['act']) == true) $act = $_GET['act'];
        switch ($act) {
            case "index":
                $this->index();
                break;
            case "checkuser":
                $this->checkuser();
                break;
            case "logout":
                unset($_SESSION['admin']);
                unset($_SESSION['sid']) ;
                unset($_SESSION['sname']) ;
                header("location: ".ADMIN_URL);
                break;
        }
    }
    function index()
    {
        require_once "./login.php";
    }
    function checkuser()
    {
        if(isset($_POST['submit'])){
            $username = strip_tags(trim($_POST['taikhoan']));
            $password = strip_tags(trim($_POST['matkhau']));

            if(is_array($this->model->checkuser($username,$password))){
                $admin = $this->model->checkuser($username,$password);
                $_SESSION['admin'] = true;
                $_SESSION['sid'] = $admin['idUser'];
                $_SESSION['sname'] = $admin['HoTen'];

                header("location: ".ADMIN_URL);
            }
            else{
                $error_login = "Sai tài khoản hoặc mật khẩu !";
                require_once "./login.php";
            }


        }
    }
}