<?php

require_once '../system/model_system.php';

class model_nhasanxuat extends model_system
{
    function store($ten_loai,$thu_tu,$an_hien) {
        $sql = "INSERT INTO nhasanxuat(TenNSX, ThuTu, AnHien) VALUES ('$ten_loai','$thu_tu','$an_hien')";
        $kq = $this->execute($sql);
    }

    function update($ten_loai,$thu_tu,$an_hien,$id) { //hàm cập nhật 1 record vào table
        $sql = "UPDATE nhasanxuat SET TenNSX = '$ten_loai', ThuTu = '$thu_tu', AnHien= '$an_hien' WHERE idNSX = ".$id;
        $kq = $this->execute($sql);
    }

    function delete($id) {  //hàm xóa 1 record khỏi table
        $sql = "DELETE FROM nhasanxuat WHERE idNSX = ".$id;
        $kq = $this->execute($sql);

    }

    function listrecords() { //hàm lấy các record trong table
        $sql = "SELECT * FROM nhasanxuat";
        $kq= $this->query($sql);
        return $kq;
    }

    function detailrecord($id) { //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM nhasanxuat WHERE idNSX=".$id;
        $kq= $this->queryOne($sql);
        return $kq;
    }
}