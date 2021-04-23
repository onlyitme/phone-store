<?php

require_once '../system/model_system.php';

class model_dienthoai extends model_system
{

    function slugify($str) {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }

    function store($idNSX, $ThoiDiemNhap, $TenDT, $Gia, $mota, $SoLuongTonKho, $hinh, $anhien, $hot, $ManHinh, $HeDieuHanh, $CPU, $RAM, $TheSim, $TheNho, $CameraTruoc, $CameraSau, $BoNhoTrong, $DungLuongPin) {
        $slug = $this->slugify($TenDT);
        $sql = "INSERT INTO dienthoai(idNSX, ThoiDiemNhap ,TenDT,slug,Gia,mota,SoLuongTonKho,urlHinh,AnHien,Hot) VALUES ('$idNSX','$ThoiDiemNhap','$TenDT','$slug','$Gia','$mota','$SoLuongTonKho','$hinh','$anhien','$hot')";
        $kq = $this->execute($sql);
        //Chèn Data thuoctinhdt
        $idDT = $this->lastId();
        $sql_ttdt = "INSERT INTO thuoctinhdt(idDT,ManHinh, HeDieuHanh, CPU, RAM, TheSim, TheNho, CameraTruoc, CameraSau,BoNhoTrong,DungLuongPin) VALUES ('$idDT','$ManHinh', '$HeDieuHanh', '$CPU', '$RAM', '$TheSim', '$TheNho', '$CameraTruoc', '$CameraSau','$BoNhoTrong','$DungLuongPin')";
        $kq_ttdt = $this->execute($sql_ttdt);
    }

    function update($idDT, $idNSX, $TenDT, $Gia, $mota, $SoLuongTonKho, $hinh, $anhien, $hot, $ManHinh, $HeDieuHanh, $CPU, $RAM, $TheSim, $TheNho, $CameraTruoc, $CameraSau, $BoNhoTrong, $DungLuongPin) { //hàm cập nhật 1 record vào table
        $slug = $this->slugify($TenDT);
        if ($hinh == "") $sql = "UPDATE dienthoai SET idNSX = '$idNSX', TenDT = '$TenDT',slug = '$slug',Gia = '$Gia',MoTa = '$mota',SoLuongTonKho = '$SoLuongTonKho',AnHien = '$anhien',Hot = '$hot' WHERE idDT =  " . $idDT;
        else            $sql = "UPDATE dienthoai SET idNSX = '$idNSX', TenDT = '$TenDT',slug = '$slug',Gia = '$Gia',MoTa = '$mota',SoLuongTonKho = '$SoLuongTonKho',urlHinh = '$hinh',AnHien = '$anhien' ,Hot = '$hot' WHERE idDT =  " . $idDT;
        $kq = $this->execute($sql);
        $sql_ttdt = "UPDATE  thuoctinhdt SET ManHinh = '$ManHinh', HeDieuHanh = '$HeDieuHanh', CPU = '$CPU', RAM = '$RAM', TheSim = '$TheSim', TheNho = '$TheNho', CameraTruoc = '$CameraTruoc', CameraSau ='$CameraSau',BoNhoTrong = '$BoNhoTrong',DungLuongPin = '$DungLuongPin' WHERE idDT = " . $idDT;
        $kq_ttdt = $this->execute($sql_ttdt);
    }

    function delete($id) {  //hàm xóa 1 record khỏi table
        $sql = "DELETE FROM dienthoai WHERE idDT = " . $id;
        $kq = $this->execute($sql);
        $sql_ttdt = "DELETE FROM thuoctinhdt WHERE idDT = " . $id;
        $kq_ttdt = $this->execute($sql_ttdt);
    }

    function listrecords() { //hàm lấy các record trong table
        $sql = "SELECT * FROM dienthoai";
        $kq = $this->query($sql);
        return $kq;
    }

    function detailrecord($id) { //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM dienthoai WHERE idDT=" . $id;
        $kq = $this->queryOne($sql);
        return $kq;
    }

    function detailrecord_ttdt($id) {
        $sql = "SELECT * FROM thuoctinhdt WHERE idDT=" . $id;
        $kq = $this->queryOne($sql);
//        echo var_dump($kq);
        return $kq;
    }
}