<?php

require_once "models/model_nhasanxuat.php";
class nhasanxuat
{
    function __construct()
    {
        $this->model = new model_nhasanxuat();
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
        $list = $this->model->listrecords();
        $page_title = "Nhà sản xuất";
        $viewFile = "views/nhasanxuat_index.php";
        require_once "layout.php";
        echo __METHOD__;
    }

    function addnew()
    {
        /*Chức năng nạp view thêm record,
           1.Nạp form,form này phải có method="post",action của form => store */
        $page_title = "Thêm nhà sản xuất";
        $viewFile = "views/nhasanxuat_addnew.php";
        require_once "layout.php";

        echo __METHOD__;
    }
    function store(){
        /* Đây là chức năng tiếp nhận dữ liệu từ form addnew (method POST)
          1. Tiếp nhận các giá trị từ form addnew
          2. Kiểm tra hợp lệ các giá trị nhận được
          3. Gọi hàm chèn vào db
          4. Tạo thông báo
          5. Chuyển hướng đến trang cần thiết*/
//        echo __METHOD__;
        if(isset($_POST['submit'])){
            $ten_loai = strip_tags(trim($_POST['TenNSX']));
            $thu_tu = strip_tags(trim($_POST['ThuTu']));
            $an_hien = strip_tags(trim($_POST['AnHien']));

            if($ten_loai !=""   && (is_numeric($an_hien) && ($an_hien == 0 || $an_hien == 1)) && ($thu_tu == "" || is_numeric($thu_tu))){
                echo "OKE";
                $this->model->store($ten_loai,$thu_tu,$an_hien);
                header("location: ".ADMIN_URL."/?ctrl=nhasanxuat");

            }
            else echo "no OKE";
        }
    }
    function edit(){
        /* Chức năng hiện form edit 1 record
          1. Tiếp nhận biến id của record cần chỉnh (ma_hh, ma_loai,...)
          2. Kiểm tra hợp lệ giá trị id
          3. Gọi hàm lấy record cần chỉnh (1 record)
          4. Nạp form chỉnh, trong form hiện thông tin của record,
          5. Form này cũng phải có method là Post, action trỏ lên act update*/
//        echo __METHOD__;
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $NSX_detail = $this->model->detailrecord($id);
            $page_title = "Sửa nhà sản xuất";
            $viewFile = "views/nhasanxuat_edit.php";
            require_once "layout.php";
        }
    }
    function update(){
        /* Đây là chức năng tiếp nhận dữ liệu từ form edit (method POST)
         1. Tiếp nhận các giá trị từ form edit
         2. Kiểm tra hợp lệ các giá trị nhận được
         3. Gọi hàm cập nhật vào db
         4. Tạo thông báo
         5. Chuyển hướng đến trang cần thiết */
//        echo __METHOD__;
        if(isset($_POST['submit'])){
            $ten_loai = strip_tags(trim($_POST['TenNSX']));
            $thu_tu = strip_tags(trim($_POST['ThuTu']));
            $an_hien = strip_tags(trim($_POST['AnHien']));
            $id = $_POST['id'];
            if($ten_loai !=""   && (is_numeric($an_hien) && ($an_hien == 0 || $an_hien == 1)) && ($thu_tu == "" || is_numeric($thu_tu))){
                $this->model->update($ten_loai,$thu_tu,$an_hien,$id);
                header("location: ".ADMIN_URL."/?ctrl=nhasanxuat");
            }
            else echo "no OKE";
        }
    }
    function delete(){
        /* Chức năng xóa record
         1. Tiếp nhận biến id của record cần xóa
         2. Gọi hàm xóa
         3. Tạo thông báo
         4. Chuyển đến trang cần thiết*/

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $this->model->delete($id);
            header("location: ".ADMIN_URL."/?ctrl=nhasanxuat");
        }
        echo __METHOD__;
    }
}