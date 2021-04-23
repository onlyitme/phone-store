<?php
require_once "models/model_donhang.php"; //nạp model để có các hàm tương tác db
class donhang
{
    function __construct()
    {
        $this->model = new model_donhang();
        $act = "index"; //chức năng mặc định
        if (isset($_GET["act"]) == true) {
            $act = $_GET["act"];
        } //tiếp nhận chức năng user request
        switch ($act) {
            case "index":
                $this->index();
                break;
            case "viewdonhang":
                $this->viewdonhang();
                break;
            case "hoanthanh":
                $this->hoanthanh();
                break;
            case "delete":
                $this->delete();
                break;
        }
    }
    function index()
    {
        $list = $this->model->listrecords();
        $page_title = "Danh sách đơn hàng";
        $viewFile = "views/src/donhang_index.php";
        require_once 'layout.php';
    }
    function viewdonhang()
    {
        if (isset($_GET['iddh'])) {
            $iddh = $_GET['iddh'];
            $detail = $this->model->detail($iddh);
            $detailDH = $this->model->detailDH($iddh);
            $page_title = "Chi tiết đơn hàng";
            $viewFile = "views/src/donhang_update.php";
            require_once 'layout.php';
        }
    }
    function hoanthanh()
    {
        if (isset($_POST['hoanthanh'])) {
            $id = $_POST ['id'];
            $trangthai = $_POST['trangthai'];
            if (isset($_POST['anhien'])) $anhien = 1;
            else $anhien = 0;
            $capnhat = $this->model->hoanthanh($trangthai,$anhien, $id);
            header('location: ?ctrl=donhang&act=index');
        }
    }
    function delete()
    {
        if (isset($_GET['iddh'])) {
            $id = $_GET['iddh'];
            $capnhat = $this->model->delete($id);
            header('location: ?ctrl=donhang&act=index');
        }
    }
}
