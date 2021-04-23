<div class="row">
    <div class="col-xl-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Cập nhật đơn hàng</h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Quản lý đơn hàng</a></li>
                <li class="breadcrumb-item active">Cập nhật đơn hàng</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="card-box">
    <form action="?ctrl=donhang&act=hoanthanh" method="post">
    <div class="card-box px-0 pt-0 " >
        <table class="table table-hover table-striped table-responsive-lg">
            <thead>
            <tr>
                <th class="text-center">Thời gian đặt hàng</th>
                <th class="text-center">Thời điểm giao hàng</th>
                <th class="text-center">IdUser</th>
                <th>Tên người nhận</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Trạng thái</th>
                <th class="text-center">Ẩn/Hiện</th>
                <th class="text-center">Chi tiết</th>
                <th class="text-center">Xóa</th>
            </tr>
            </thead>
            <tbody>
            <?php

                if ($detail['ThoiDiemGiaoHang'] == null ) {
                    $detail['ThoiDiemGiaoHang'] = '-';}
                if ($detail['idUser'] == null ) {
                    $detail['idUser'] = '-';}
                if ($detail['TrangThai'] == 0 ) {
                    $detail['TrangThai'] = 'Chưa kiểm duyệt';}
                elseif ($detail['TrangThai'] == 1 ) {
                    $detail['TrangThai'] = 'Đã xác thực';}
                else  {
                    $detail['TrangThai'] = 'Đã giao';} 
                ?>

                <tr >
                    <td class="text-center"> <?=$detail['ThoiDiemDatHang']?></td>
                    <td class="text-center"><?=$detail['ThoiDiemGiaoHang']?></td>
                    <td class="text-center"><?=$detail['idUser']?></td>
                    <td><?=$detail['TenNguoiNhan']?></td>
                    <td><?=$detail['SDTNguoiNhan']?></td>
                    <td><?=$detail['EmailNguoiNhan']?></td>
                    <td><?=$detail['DiaChiNguoiNhan']?></td>
                    <td><?=$detail['TrangThai']?></td>
                    <td class="text-center">
                        <?php
                        if ($detail['AnHien'] == 1) $checked_anhien = "checked";
                        else $checked_anhien = "";
                        ?>
                        <input type="checkbox" <?= $checked_anhien ?> data-plugin="switchery" data-size="small" name="anhien" data-color="#3db9dc"/>
                    </td>
                    <td class="text-center"><a href="?ctrl=donhang&act=viewdonhang&iddh=<?=$detail['idDH']?>" class=" btn btn-outline-warning waves-effect waves-light "><i class="zmdi zmdi-eye"></i></a></td>
                    <td class="text-center d-flex justify-content-center">
                        <a href="?ctrl=donhang&act=delete&iddh=<?=$detail['idDH']?>" onclick="return confirm('Bạn có muốn xóa không ?')" class="btn waves-effect waves-light btn-outline-danger "><i class=" icon-trash"></i></a>
                    </td>
                </tr >
            </tbody>
        </table>
    </div>
        <div class="card m-b-20">
            <h6 class="card-header">Chi tiết đơn hàng</h6>
            <div class="card-body row">
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                    <?php $tongtien = 0; foreach ($detailDH as $row){ ?>
                        <div class="card p-3 mb-3">
                            <div class="form-group">
                                <label for="CameraTruoc" class="form-control-label text-right">Tên Điện Thoại</label>
                                <input class="form-control" type="text" id="CameraTruoc" name="CameraTruoc" value="<?= $row['TenDT'] ?> " readonly>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="CameraSau" class="form-control-label text-right">Số Lượng</label>
                                        <input class="form-control" type="text"  id="CameraSau" name="CameraSau" value="<?= $row['SoLuong'] ?>" readonly>
                                    </div>
                                    <div class="col-6">
                                        <label for="CameraSau" class="form-control-label text-right">Giá</label>
                                        <input class="form-control" type="text"  id="CameraSau" name="CameraSau" value="<?= $row['Gia'] ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $tongtien+=($row['Gia']*$row['SoLuong']); } ?>
                </div>
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                    <div class="card p-3">
                        <table class="table ">
                            <thead class="thead-light">
                            <tr>
                                <th colspan="2" class="h3">Tổng đơn hàng</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Tổng tiền hàng</th>
                                <td><?=number_format($tongtien)?> vnđ</td>

                            </tr>
                            <tr>
                                <th scope="row">Giao hàng</th>
                                <td>35,000 vnđ</td>


                            </tr>
                            <tr>
                                <th scope="row">Tổng tiền đơn hàng</th>
                                <td><?=number_format($tongtien +35000)?> vnđ</td>

                            </tr>
                            </tbody>
                        </table>


                    </div>

                    <div class="card p-3 bg-light mt-3">
                        <div class="form-group">
                            <label for="ChuyenTrangThai" class="form-control-label text-right">Chuyển trạng thái </label>
                            <select class="custom-select mb-3" name="trangthai">
                                <option value="0" selected>Chưa xác thực</option>
                                <option value="1" >Đã xác thực</option>
                                <option value="2">Đã giao hàng</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class=" form-group text-right m-b-0 mt-5 ">
            <input type="hidden" name="id" value="<?=$detail['idDH']?>">
            <button class="btn btn-success waves-effect waves-light  m-l-5" type="submit" name="hoanthanh">
                <i class="ti-save mr-2"></i> Cập nhật đơn hàng
            </button>
        </div>
    </form>
</div>