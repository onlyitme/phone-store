<?php


class home
{
    function __construct()
    {
//        $this->model = new model_nhasanxuat();
        $act = 'index';
        if (isset($_GET['act']) == true) $act = $_GET['act'];
        switch ($act) {
            case "index":
                $this->index();
                break;
            case "addnew":
                $this->addnew();
                break;
            case "store":
                $this->store();
                break;
            case "edit":
                $this->edit();
                break;
            case "update":
                $this->update();
                break;
            case "delete":
                $this->delete();
                break;
        }
//        $this->$act();
    }
    function index()
    {
        /*  Chức năng hiện danh sách record trong table
            1. Gọi hàm trong model lấy tất các các record từ db
            2. Nạp view hiện danh sách các record vừa lấy*/
        $page_title = "Trang chu";
        $viewFile = "views/src/home.php";
        require_once "layout.php";
//        echo __METHOD__;
    }
}