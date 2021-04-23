<?php

session_start();
require_once "../system/config.php";

define('ARR_CONTROLLER', ["home", "nhasanxuat", "dienthoai", "binhluan", "users", "donhang","login"]);
if(isset($_SESSION['admin']) === true ){
    $ctrl = 'home';
    if (isset($_GET['ctrl']) == true) $ctrl = $_GET['ctrl'];
}else $ctrl = 'login';
if(in_array($ctrl, ARR_CONTROLLER) == false) /*die("Không tồn tại địa chỉ");*/ header("location: pages-404.html");
$pathFile = "controllers/$ctrl.php";

if (file_exists($pathFile) == true) {
    require_once $pathFile;
    $controller = new $ctrl;
//} else echo "Controller $ctrl không tồn tại";
} else header("location: pages-404.html");