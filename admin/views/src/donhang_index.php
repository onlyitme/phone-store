<div class="row">
    <div class="col-xl-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Quản lý đơn hàng </h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active">Quản lý đơn hàng</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="card-box">

    <div class="card-box px-0 pt-0 " style="min-height: 400px">
        <table class="table table-hover table-striped table-responsive-lg">
            <thead>
                <tr>
                    <th scope="row">#</th>
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
                $i = 1;
                foreach ($list as $row) {
                    if ($row['AnHien'] != null && $row['AnHien'] != 0) {
                        $checked_anhien = '<i class="fa fa-check-circle text-success" aria-hidden="true"></i>';
                    } else $checked_anhien = '-';
                    if ($row['ThoiDiemGiaoHang'] == null ) {
                        $row['ThoiDiemGiaoHang'] = '-';}
                    if ($row['idUser'] == null ) {
                        $row['idUser'] = '-';}
                    if ($row['TrangThai'] == 0 ) {
                        $row['TrangThai'] = 'Chưa kiểm duyệt';}
                    elseif ($row['TrangThai'] == 1 ) {
                        $row['TrangThai'] = 'Đã xác thực';}
                    else  {
                        $row['TrangThai'] = 'Đã giao';}
                    ?>

                    <tr >
                        <th scope = "row" > <?=$i?></th >
                        <td class="text-center"> <?=$row['ThoiDiemDatHang']?></td>
                        <td class="text-center"><?=$row['ThoiDiemGiaoHang']?></td>
                        <td class="text-center"><?=$row['idUser']?></td>
                        <td><?=$row['TenNguoiNhan']?></td>
                        <td><?=$row['SDTNguoiNhan']?></td>
                        <td><?=$row['EmailNguoiNhan']?></td>
                        <td><?=$row['DiaChiNguoiNhan']?></td>
                        <td><?=$row['TrangThai']?></td>
                        <td class="text-center"><?= $checked_anhien ?></td>
                        <td class="text-center"><a href="?ctrl=donhang&act=viewdonhang&iddh=<?=$row['idDH']?>" class=" btn btn-outline-warning waves-effect waves-light "><i class="zmdi zmdi-eye"></i></a></td>
                        <td class="text-center d-flex justify-content-center">
                            <a href="?ctrl=donhang&act=delete&iddh=<?=$row['idDH']?>" onclick="return confirm('Bạn có muốn xóa không ?')" class="btn waves-effect waves-light btn-outline-danger "><i class=" icon-trash"></i></a>
                        </td>
                    </tr >
                <?php $i++; } ?>
            </tbody>
        </table>


    </div>

</div>