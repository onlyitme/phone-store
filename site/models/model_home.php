<?php
require_once '../system/model_system.php';

class model_home extends model_system
{
    function search($data,$kind ){
        if($kind == 1) {
            $NSX = $this->NSXbyId($data,3);
            if($NSX == FALSE){
                return FALSE;
            }
            $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND idNSX = ".$NSX['idNSX'];
        }else $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND TenDT like '%$data%' ";


        $kq = $this->queryAll($sql);
        return $kq;
    }
    function comment($comment,$ThoigianBL,$idDT,$idUser){
        $sql = "INSERT INTO binhluan(NoiDungBL,ThoigianBL ,idDT,idUser,AnHien) VALUES ('$comment','$ThoigianBL','$idDT','$idUser','1')";
        $kq = $this->execute($sql);
        return $kq;
    }
    function commentByID($id,$kind =0){
        if($kind == 1) $sql = "SELECT * FROM binhluan WHERE AnHien=1 AND idUser = ".$id;
        else $sql = "SELECT * FROM binhluan WHERE AnHien=1 AND idDT = ".$id;
        $kq = $this->queryAll($sql);
        return $kq;
    }
    function tatcasanpham($page_num = 0){
        if($page_num != 0){
            $start_row = ($page_num - 1) * 9;
            $sql = "SELECT * FROM dienthoai WHERE AnHien=1"
                ." ORDER BY  ThoiDiemNhap DESC LIMIT $start_row, 9";
            $kq = $this->query($sql);
        }
        else {
            $sql = "SELECT * FROM dienthoai WHERE AnHien=1";
            $kq = $this->queryAll($sql);
        }
        return $kq;
    }
    function sanphamHot($soSp = NULL) {
        if ($soSp != NULL) $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND Hot = 1 LIMIT 0, $soSp";
        else $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND Hot = 1 ";
        $kq = $this->query($sql);
        return $kq;
    }

    function sanphamtheoNSX($idNSX,$slug) {
        if($slug == 0 ) $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND idNSX=$idNSX ORDER BY ThoiDiemNhap DESC";
        else {
            $slugNSX = $this->NSXbyId($idNSX,1);
            //            echo var_dump($slugNSX);
            //            exit();
            if($slugNSX == FALSE) return FALSE;
            else $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND idNSX=".$slugNSX['idNSX']." ORDER BY ThoiDiemNhap DESC";
        }
        $kq = $this->query($sql);
        return $kq;
    }

    function detail_modal($id = 0) {
        $sql = "SELECT * FROM dienthoai INNER JOIN thuoctinhdt ON dienthoai.idDT = thuoctinhdt.idDT WHERE idDT = " . $id;
        $kq = $this->query($sql);
        if (!$kq) return FALSE;
        $row = $kq->fetch();
        return $row;
    }

    function detail($id = 0, $slug=0) {
        if($slug == 0) $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND idDT=$id";
        else $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND slug like '$id' ";
//            echo $sql;
//            exit();
        $kq = $this->query($sql);
        if (!$kq) return FALSE;
        $row = $kq->fetch();
        return $row;
    }

    function thuoctinhdt($id = 0) {
        $sql = "SELECT * FROM thuoctinhdt WHERE idDT=$id";
        $kq = $this->query($sql);
        if (!$kq) return FALSE;
        $row = $kq->fetch();
        return $row;
    }

    function NSX() {
        $sql = "SELECT * FROM nhasanxuat";
        $kq = $this->query($sql);
        return $kq;
    }
    function NSXbyId($id,$a = 0) { //hàm lấy chi tiết 1 record trong table
        if($a == 0) $sql = "SELECT * FROM nhasanxuat WHERE idNSX=".$id;
        elseif($a == 3) $sql = "SELECT * FROM nhasanxuat WHERE AnHien=1 AND TenNSX like '%$id%' ";
        else $sql = "SELECT * FROM nhasanxuat WHERE slug like '$id'  ";

        $kq= $this->queryOne($sql);
        return $kq;
    }
    function countofNSX($idNSX){
        $sql = "SELECT COUNT(*) as soluong FROM dienthoai WHERE idNSX=$idNSX";
        $kq = $this->queryOne($sql);
        return $kq;
    }
    function luudonhang($idDH, $hoten, $email,$sdt,$diachi,$loinhan){
        if ($idDH==-1){
            $sql = "INSERT INTO donhang SET TenNguoiNhan='{$hoten}', emailNguoiNhan='{$email}',"
                . "SDTNguoiNhan='{$sdt}',DiaChiNguoiNhan='{$diachi}',GhiChuCuaKhach='{$loinhan}',"
                . "ThoiDiemDatHang=Now(), AnHien=1";
            $kq= $this->query($sql);
            if (!$kq) return FASLSE;
            else return $this->conn->lastInsertId();
        } else {
            $sql = "UPDATE donhang SET TenNguoiNhan='{$hoten}', emailNguoiNhan='{$email}',"
                ."SDTNguoiNhan='{$sdt}',DiaChiNguoiNhan='{$diachi}',GhiChuCuaKhach='{$loinhan}',"
                . "ThoiDiemDatHang=Now(), AnHien=1 where idDH=$idDH";
            $kq= $this->query($sql);
            if (!$kq) return FASLSE;
            else return $idDH;
        }
    }
    function luugiohang($idDH, $giohang){
        $sql = "DELETE FROM donhangchitiet WHERE idDH='$idDH'";
        $this->query($sql);
        foreach ($giohang as $idDT=>$dt){
            $dtfromDB = $this->detail($idDT);
            $soluong= $dt['soLuong'];
            $sql = "INSERT INTO donhangchitiet SET idDH='$idDH', idDT= '$idDT', "
                . "TenDT='{$dtfromDB['TenDT']}', Gia='{$dtfromDB['Gia']}', SoLuong='$soluong    '";
            $kq= $this->query($sql);
        }//foreach
    }
    function checkuser($username, $password) {
        if($username == 0)          $sql = "SELECT * FROM user WHERE  Password =BINARY '$password' AND VaiTro = 2";
        elseif($username == 1)          $sql = "SELECT * FROM user WHERE  Email =  '$password' AND VaiTro = 2";
        elseif($username == 2)          $sql = "SELECT * FROM user WHERE  Username =  '$password' AND VaiTro = 2";
        elseif ($username == 3)     $sql = "SELECT * FROM user WHERE  idUser =  '$password' AND VaiTro = 2";
        else $sql = "SELECT * FROM user WHERE   UserName=BINARY '$username' AND   Password =BINARY '$password' AND VaiTro = 2";
//        echo $sql;
//        exit();
        $kq = $this->queryOne($sql);
        return $kq;
    }//checkuser
    function updatePW($idUser,$password){
        $sql = "UPDATE user SET Password='{$password}'where idUser=$idUser";
        $kq= $this->query($sql);
        if (!$kq) return FASLSE;
        else return true;
    }//updatePW



}//class