<?php
require_once "models/model_home.php"; //nạp model để có các hàm tương tác db
class home {
    function __construct()   {
        $this->model = new model_home();
        $act = "home";//chức năng mặc định
        if(isset($_GET["act"])==true) $act=$_GET["act"];//chức năng user request

        switch ($act) {
            case "home": $this->home(); break;
            case "search": $this->search(); break;
            case "comment": $this->comment(); break;
            case "detail": $this->detail(); break;
            case "cat": $this->cat(); break;
            case "cart": $this->cart(); break;
            case "cartview": $this->cartview(); break;
            case "checkout": $this->checkout(); break;
            case "login": $this->login(); break;
            case "forgotpw": $this->forgotpw(); break;
            case "changepw": $this->changepw(); break;
            case "myaccount": $this->myaccount(); break;
            case "message": $this->message(); break;             //Case message

            default: header("location: ".ROOT_URL."/pages-404.html");
        }
        //$this->$act();
    }
    function home(){
        $listSPHot = $this->model->sanphamHot();
        $viewFile = "views/src/home.php";
        require_once "layout.php";
//        echo __METHOD__;
    }
    function  search(){
        $NSX = $this->model->NSX();
        if(isset($_POST['search'])){
            $data_search = trim(strip_tags(strtolower($_POST['data-search'])));
            $listSP = $this->model->search($data_search,0);
            if(count($listSP) > 1){
                $viewFile = "views/src/cat.php";
                require_once "layout.php";
            }
            elseif(count($listSP) == 1){
                $id = $listSP[0]['idDT'];
                $sp = $this->model->detail($id,0);
                $NSXbyId = $this->model->NSXbyId($sp['idNSX']);
                $thuoctinh = $this->model->thuoctinhdt($sp['idDT']);
                $listSPHot = $this->model->sanphamHot(4);
                $viewFile = "views/src/detail.php";
                require_once "layout.php";
            }
            else {
                $listSP = $this->model->search($data_search, 1);
                    if($listSP == FALSE || count($listSP) <= 0){
                        header("location: " . ROOT_URL . "/does-not-exist/");
                    }
                    else {
                        $viewFile = "views/src/cat.php";
                        require_once "layout.php";
                    }

                }

        }
        else header("location: " . ROOT_URL . "/warning-access/");
    }
    function detail_modal(){
        $id = $_POST['idDT'];
        $detail = $this->model->detail_modal($id);
        if($detail==FALSE) {
            header("location: ". SITE_URL);
            exit();
        }
        echo json_encode($detail);
    }
    function comment(){
        if(isset($_POST['comment'])){
            $idUser = $_SESSION['sid'];
            $idDT = $_POST['idDT'];
            $sp = $this->model->detail($idDT,0);
            $ThoigianBL = date("Y-m-d H:i:s");
            $comment = trim(strip_tags($_POST['comment']));
            $comment = $this->model->comment($comment,$ThoigianBL,$idDT,$idUser);
            if($comment == FALSE) header("location: " . ROOT_URL . "/warning-access/");
            else {
                header("location: " . ROOT_URL . "/chi-tiet-san-pham/".$sp['slug']);
            }
        }
    }

    function detail(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            if(preg_match("/^[0-9]+$/",$id)){
                settype($id, "int");
                $sp = $this->model->detail($id,0);
            }
            else  $sp = $this->model->detail($id,1);
            if($sp==FALSE) {
                header("location: " . ROOT_URL . "/warning-access/");
            }
            else{
                $NSXbyId = $this->model->NSXbyId($sp['idNSX']);
                $thuoctinh = $this->model->thuoctinhdt($sp['idDT']);
                $listSPHot = $this->model->sanphamHot(4);
            }
            if($this->model->commentByID($sp['idDT'])) $commentDT = $this->model->commentByID($sp['idDT']);
            $viewFile = "views/src/detail.php";
            require_once "layout.php";
        }else header("location: " . ROOT_URL . "/warning-access/");
    }
    function cat(){
        $NSX = $this->model->NSX();
        if(isset($_GET['page_num'])) $page_num = $_GET['page_num'];
        else $page_num = 1;
        if(isset($_GET['id'])){
            if(preg_match("/^[0-9]+$/",$_GET['id'])){
                $idNSX = $_GET['id'];
                settype($idNSX, "int");
                $listSP = $this->model->sanphamtheoNSX($idNSX,0);
            }
            else{
                $listSP = $this->model->sanphamtheoNSX($_GET['id'],1);
            }
        }
        else{
            $tongSP = $this->model->tatcasanpham();
            $listSP = $this->model->tatcasanpham($page_num);
        }
        if($listSP==FALSE) {
            header("location: ". ROOT_URL."/warning-access/");
            exit();
        }
        $viewFile = "views/src/cat.php";
        require_once "layout.php";
    }
    function cart(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];  settype($id, "int");
        }
        $what ="add";
        if(isset($_GET['what'])) $what = $_GET['what'];
        if ($what=="add"){
            if (isset($_SESSION['cart'])==false) $_SESSION['cart']=[];
            ///tạo mảng rổng nếu chưa có
            $spFromDB = $this->model->detail($id);  //if ($spFromDB==null) ...
            if($spFromDB == false){
                $error_message = "Sản phẩm bạn muốn mua hiện không còn!";
                $viewFile = "views/src/message.php";
                require_once "layout.php";
                exit();
            }
                if(isset($_POST['soluong'])) {
                    if (isset($_SESSION['cart'][$id])) $soluong=$_SESSION['cart'][$id]['soLuong']+$_POST['soluong'];
                    else $soluong= $_POST['soluong'];
                }
                else {
                    if (isset($_SESSION['cart'][$id])) $soluong=$_SESSION['cart'][$id]['soLuong']+1;
                    else $soluong = 1;
                }
            $_SESSION['cart'][$id]=[
                'soLuong' =>$soluong
            ];
        }//if what=="add"
        if ($what=="remove"){
            unset($_SESSION['cart'][$id]);
        }//$what=="remove"
        if ($what=="removeAll"){
            unset($_SESSION['cart']);
        }//$what=="removeAll"
        $viewFile = "views/src/cartview.php";
        require_once "layout.php";
    }
    function cartview(){
        if(isset($_POST['update_cart'])){
            foreach ($_SESSION['cart'] as $idProduct => $product){
                $_SESSION['cart'][$idProduct] = [
                    'soLuong' => $_POST['soluong'.$idProduct]
                ];
                if($_SESSION['cart'][$idProduct]['soLuong'] == 0) unset($_SESSION['cart'][$idProduct]);
            };
        }
        $viewFile = "views/src/cartview.php";
        require_once "layout.php";
    }
    function checkout(){
        if(isset($_POST['checkout'])){
            $hoten = trim(strip_tags($_POST['your-name']));
            $sdt = trim(strip_tags($_POST['your-phone']));
            $email = trim(strip_tags($_POST['your-email']));
            $diachi = trim(strip_tags($_POST['your-address']));
            $loinhan = trim(strip_tags($_POST['your-message']));
//            $pttt = trim(strip_tags($_POST['phuongthucthanhtoan']));
//            $ptgh = trim(strip_tags($_POST['phuongthucgiaohang']));
//            echo $hoten," ",$sdt," ",$diachi," ",$loinhan," ",$pttt," ",$ptgh;
            if (isset($_SESSION['idDH'])) $idDH= $_SESSION['idDH'];
            else $idDH="-1";
            $idDH = $this->model->luudonhang($idDH, $hoten, $email,$sdt,$diachi,$loinhan);
            if ($idDH){
                $_SESSION['idDH'] = $idDH;
                $giohang = $_SESSION['cart'];
                $this->model->luugiohang($idDH, $giohang);
                unset($_SESSION['cart']);
                $checkout = "OKE";
                $viewFile = "views/src/message.php";
            }//if ($idDH)
            else {
                $error_message = "Đã xảy xa lỗi vui lòng thử lại.!";
                $viewFile = "views/src/message.php";
            }
        }
        else{
            $viewFile = "views/src/checkout.php";
        }
        require_once "layout.php";
    }// checkout
    function login(){
        if(isset($_POST['login'])){
            $username = trim(strip_tags($_POST['log']));
            $password = trim(strip_tags($_POST['pwd']));
            if(is_array($this->model->checkuser($username,$password))){
                $user = $this->model->checkuser($username,$password);
                $_SESSION['sid'] = $user['idUser'];
                $_SESSION['sname'] = $user['HoTen'];

                header("location: ".$_SERVER['HTTP_REFERER']);
            }
            else{
                $error_message = "Sai tài khoản hoặc mật khẩu !";
                $viewFile = "views/src/login.php";
                require_once "layout.php";
            }
        }
        elseif (isset($_GET["what"]) && $_GET["what"]=="logout") {
            unset($_SESSION['sid']);
            unset($_SESSION['sname']);

            header("location: ".$_SERVER['HTTP_REFERER']);
        }
        else {
            if(isset($_POST['page-login'])){
                $username = trim(strip_tags($_POST['log']));
                $password = trim(strip_tags($_POST['pwd']));
                if($username == "") $error_username = "Hãy nhập tài khoản của bạn";
                elseif($password == "") $error_password = "Hãy nhập mật khẩu của bạn";
                elseif(is_array($this->model->checkuser($username,$password))){
                    $user = $this->model->checkuser($username,$password);
                    $_SESSION['sid'] = $user['idUser'];
                    $_SESSION['sname'] = $user['HoTen'];

                    header("location: ".ROOT_URL."/phone-store/");
                }
                else{
                    $error_message = "Sai tài khoản hoặc mật khẩu !";
                }
            }
            $viewFile = "views/src/login.php";
            require_once "layout.php";
        }

    } //login
      function forgotpw(){
            if(isset($_POST['forgotpw'])){
                $infuser = trim(strip_tags($_POST['infuser']));
                if($infuser != ""){
                    if(preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/",$infuser)){
                        $user = $this->model->checkuser(1,$infuser);
                    }
                    else $user = $this ->model->checkuser(2,$infuser);

                    if(is_array($user)) {
                        $newpw =  mt_rand(100000,999999);
                        if($this->model->updatePW($user['idUser'],$newpw)){
                            require "views/assets/PHPMailer-master/src/PHPMailer.php";  //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
                            require "views/assets/PHPMailer-master/src/SMTP.php"; //nhúng thư viện vào để dùng
                            require 'views/assets/PHPMailer-master/src/Exception.php'; //nhúng thư viện vào để dùng
                            $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
                            try {
                                $mail->SMTPDebug = 2;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
                                $mail->isSMTP();
                                $mail->CharSet = "utf-8";
                                $mail->Host = 'smtp.gmail.com';  //SMTP servers
                                $mail->SMTPAuth = true; // Enable authentication
                                $nguoigui = 'testmycode.baokun@gmail.com';
                                $matkhau = 'Superman@123';
                                $tennguoigui = 'CỬA HÀNG PHONESTORE';
                                $mail->Username = $nguoigui; // SMTP username
                                $mail->Password = $matkhau;   // SMTP password
                                $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL
                                $mail->Port = 465;  // port to connect to
                                $mail->setFrom($nguoigui, $tennguoigui);
                                $to = $user['Email']; // Email người nhận
                                $to_name = $user['HoTen']; // Họ tên người nhận

                                $mail->addAddress($to, $to_name); //mail và tên người nhận
                                $mail->isHTML(true);  // Set email format to HTML
                                $mail->Subject = 'Gửi thư từ php';
                                $noidungthu = '
                                    <p> Chào bạn, Chúng tôi đã nhận được yêu cầu của bạn </p>
                                    <p> Chúng tôi đã thay đổi mật khẩu cho bạn.</p>
                                    <h3> ' . $newpw . ' </h3>
                                ';
                                $mail->Body = $noidungthu;
                                $mail->smtpConnect(array(
                                    "ssl" => array(
                                        "verify_peer" => false,
                                        "verify_peer_name" => false,
                                        "allow_self_signed" => true
                                    )
                                ));
                                $mail->send();
                                header("location: " . ROOT_URL . "/success-send-email/");
                            } catch (Exception $e) {
                                header("location: " . ROOT_URL . "/warning-access/");
                            }
                        }
                        else header("location: " . ROOT_URL . "/warning-access/");
                    }
                    else  header("location: ".ROOT_URL."/warning-your-inf/");
                }
                else header("location: ".ROOT_URL."/warning-access/");
            }
      }
    function  changepw(){
        if(isset($_SESSION['sid'])){
            if(isset($_POST['changepw'])) {
                $password = trim(strip_tags($_POST['oldpw']));
                $newpw = trim(strip_tags($_POST['newpw']));
                $renewpw = trim(strip_tags($_POST['renewpw']));

                if ($password != "") {
                    if(is_array($this->model->checkuser(0,$password))){
                        $true_oldpw = $password;
                        if ($newpw == "") {$error_newpw = "Nhập mật khẩu bạn muốn đổi!";}
                        elseif ($renewpw == "") $error_renewpw = "Hãy xác nhận mật khẩu mới";
                        else {
                            $true_newpw = $newpw;
                            $true_renewpw = $renewpw;
                            if($newpw === $renewpw) {
                                $user = $this->model->checkuser(0,$password);
                                if($this->model->updatePW($user['idUser'],$renewpw)){
                                    header("location: ".ROOT_URL."/success-password/");
                                }
                                else header("location: ".ROOT_URL."/warning-your-inf/");
                            }
                            else $error_renewpw = "Mật khẩu mới chưa trùng khớp!";
                        }
                    }
                    else $error_oldpw = "Mật khẩu chưa chính xác!";
                }
                else $error_oldpw = "Hãy nhập lại mật khẩu cũ của bạn!";

            }
            $viewFile = "views/src/changepw.php";
            require_once "layout.php";
        }
        else header("location: ".ROOT_URL."/dang-nhap/");
    }//changepw
    function myaccount(){

        $viewFile = "views/src/myaccount.php";
        require_once "layout.php";
    }//myaccount
    function  message(){
        if(isset($_GET['error']) && $_GET['error'] == 1099){
            $error_message = "Đã xảy ra sự cố, xin vui lòng thử lại sau!";
        }
        if(isset($_GET['error']) && $_GET['error'] == 100){
            $error_message = "Đã thay đổi mật khẩu thành công!";
        }
        if(isset($_GET['error']) && $_GET['error'] == 101){
            $error_message = "Mật khẩu mới đã được gửi vào email của bạn!";
        }
        if(isset($_GET['error']) && $_GET['error'] == 102){
            $error_message = "Thông tin của bạn không chính xác";
        }
        if(isset($_GET['error']) && $_GET['error'] == 103){
            $error_message = "Không có kết quả tìm kiếm nào";
        }
        $viewFile = "views/src/message.php";
        require_once "layout.php";
    }
} //class home