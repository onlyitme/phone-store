<?php

require_once "models/model_dienthoai.php";
require_once "models/model_nhasanxuat.php";

class dienthoai
{
    function __construct() {
        $this->model = new model_dienthoai();
        $this->NSX = new model_nhasanxuat();
        $act = 'index';
        if (isset($_GET['act']) == true) $act = $_GET['act'];
        switch ($act) {
            case "index":
                $this->index();
                break;
            case "detail":
                $this->detail();
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

    function index() {
        $list = $this->model->listrecords();
        $page_title = "Quản lý điện thoại";
        $viewFile = "views/src/dienthoai_index.php";
        require_once "layout.php";
//        echo __METHOD__;

    }
    function  detail(){
        $idDT = $_POST['idDT'];
        $detail = $this->model->detailrecord_ttdt($idDT);
        echo json_encode($detail);
    }
    function addnew() {
        /*Chức năng nạp view thêm record,
           1.Nạp form,form này phải có method="post",action của form => store */
        $nhasanxuat = $this->NSX->listrecords();
        $page_title = "Thêm nhà sản phẩm mới";
        $viewFile = "views/src/dienthoai_addnew.php";
        require_once "layout.php";

//        echo __METHOD__;
    }

    function store() {
        /* Đây là chức năng tiếp nhận dữ liệu từ form addnew (method POST)
          1. Tiếp nhận các giá trị từ form addnew
          2. Kiểm tra hợp lệ các giá trị nhận được
          3. Gọi hàm chèn vào db
          4. Tạo thông báo
          5. Chuyển hướng đến trang cần thiết*/
//        echo __METHOD__;
        if (isset($_POST['submit'])) {
            //Thuộc tính cơ bản
            $idNSX = strip_tags(trim($_POST['idNSX']));
            $ThoiDiemNhap = date("Y-m-d H:i:s");
            $TenDT = strip_tags(trim($_POST['TenDT']));
            $mota = strip_tags(trim($_POST['mota']));
            $SoLuongTonKho = strip_tags(trim($_POST['SoLuongTonKho']));
            $Gia = strip_tags(trim($_POST['Gia']));

            if (isset($_FILES['urlHinh']['name'])) {
                $pathimg = PATHIMG_DT;
                $hinh = $_FILES['urlHinh']['name'];
                $target_file = $pathimg . basename($hinh);
                if (move_uploaded_file($_FILES["urlHinh"]["tmp_name"], $target_file)) {
                    $err_img = "OKE";
                } else {
                    $hinh = "";
                }
            }//Hình
            else $hinh = "";

            if (isset($_POST['anhien'])) $anhien = 1;
            else $anhien = 0;
            if (isset($_POST['hot'])) $hot = 1;
            else $hot = 0;
            //Thuộc tính bổ sung
            $ManHinh = strip_tags(trim($_POST['ManHinh']));
            $HeDieuHanh = strip_tags(trim($_POST['HeDieuHanh']));
            $CPU = strip_tags(trim($_POST['CPU']));
            $RAM = strip_tags(trim($_POST['RAM']));
            $TheSim = strip_tags(trim($_POST['TheSim']));
            $TheNho = strip_tags(trim($_POST['TheNho']));
            $CameraTruoc = strip_tags(trim($_POST['CameraTruoc']));
            $CameraSau = strip_tags(trim($_POST['CameraSau']));
            $BoNhoTrong = strip_tags(trim($_POST['BoNhoTrong']));
            $DungLuongPin = strip_tags(trim($_POST['DungLuongPin']));
            $this->model->store( $idNSX, $ThoiDiemNhap ,$TenDT,$Gia,$mota,$SoLuongTonKho,$hinh,$anhien,$hot,$ManHinh, $HeDieuHanh, $CPU, $RAM, $TheSim, $TheNho, $CameraTruoc, $CameraSau,$BoNhoTrong,$DungLuongPin);
//
//            echo $ManHinh, $HeDieuHanh, $CPU, $RAM, $TheSim, $TheNho, $CameraTruoc, $CameraSau,$BoNhoTrong,$DungLuongPin;
//            echo $ThoiDiemNhap;
            header("location: ".ADMIN_URL."/?ctrl=dienthoai");
        }
    }

    function edit() {
        /* Chức năng hiện form edit 1 record
          1. Tiếp nhận biến id của record cần chỉnh (ma_hh, ma_loai,...)
          2. Kiểm tra hợp lệ giá trị id
          3. Gọi hàm lấy record cần chỉnh (1 record)
          4. Nạp form chỉnh, trong form hiện thông tin của record,
          5. Form này cũng phải có method là Post, action trỏ lên act update*/
//        echo __METHOD__;
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $nhasanxuat = $this->NSX->listrecords();
            $DT_detail = $this->model->detailrecord($id);
            $TTDT_detail = $this->model->detailrecord_ttdt($id);
            $page_title = "Sửa thông tin sản phẩm";
            $viewFile = "views/src/dienthoai_edit.php";
            require_once "layout.php";
        }
    }

    function update() {
        /* Đây là chức năng  tiếp nhận dữ liệu từ form edit (method POST)
         1. Tiếp nhận các giá trị từ form edit
         2. Kiểm tra hợp lệ các giá trị nhận được
         3. Gọi hàm cập nhật vào db
         4. Tạo thông báo
         5. Chuyển hướng đến trang cần thiết */
//        echo __METHOD__;
        if (isset($_POST['submit'])) {
            //Thuộc tính cơ bản
            $idDT = $_POST['id'];
            $idNSX = strip_tags(trim($_POST['idNSX']));
            $ThoiDiemNhap = date("Y-m-d H:i:s");
            $TenDT = strip_tags(trim($_POST['TenDT']));
            $mota = strip_tags(trim($_POST['mota']));
            $SoLuongTonKho = strip_tags(trim($_POST['SoLuongTonKho']));
            $Gia = strip_tags(trim($_POST['Gia']));

            if (isset($_FILES['urlHinh']['name'])) {
                $pathimg = PATHIMG_DT;
                $hinh = $_FILES['urlHinh']['name'];
                $target_file = $pathimg . basename($hinh);
                if (move_uploaded_file($_FILES["urlHinh"]["tmp_name"], $target_file)) {
                    $err_img = "OKE";
                } else {
                    $hinh = "";
                }
            }//Hình
            else $hinh = "";

            if (isset($_POST['anhien'])) $anhien = 1;
            else $anhien = 0;
            if (isset($_POST['hot'])) $hot = 1;
            else $hot = 0;
            //Thuộc tính bổ sung
            $ManHinh = strip_tags(trim($_POST['ManHinh']));
            $HeDieuHanh = strip_tags(trim($_POST['HeDieuHanh']));
            $CPU = strip_tags(trim($_POST['CPU']));
            $RAM = strip_tags(trim($_POST['RAM']));
            $TheSim = strip_tags(trim($_POST['TheSim']));
            $TheNho = strip_tags(trim($_POST['TheNho']));
            $CameraTruoc = strip_tags(trim($_POST['CameraTruoc']));
            $CameraSau = strip_tags(trim($_POST['CameraSau']));
            $BoNhoTrong = strip_tags(trim($_POST['BoNhoTrong']));
            $DungLuongPin = strip_tags(trim($_POST['DungLuongPin']));
            $this->model->update($idDT, $idNSX ,$TenDT,$Gia,$mota,$SoLuongTonKho,$hinh,$anhien,$hot,$ManHinh, $HeDieuHanh, $CPU, $RAM, $TheSim, $TheNho, $CameraTruoc, $CameraSau,$BoNhoTrong,$DungLuongPin);
//
//            echo $ManHinh, $HeDieuHanh, $CPU, $RAM, $TheSim, $TheNho, $CameraTruoc, $CameraSau,$BoNhoTrong,$DungLuongPin;
//            echo $ThoiDiemNhap;
            header("location: ".ADMIN_URL."/?ctrl=dienthoai");
        }
    }

    function delete() {
        /* Chức năng xóa record
         1. Tiếp nhận biến id của record cần xóa
         2. Gọi hàm xóa
         3. Tạo thông báo
         4. Chuyển đến trang cần thiết*/

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->model->delete($id);
            header("location: " . ADMIN_URL . "/?ctrl=dienthoai");
        }
        echo __METHOD__;
    }

}
