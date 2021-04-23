<div class="row">
    <div class="col-xl-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Quản lý điện thoại </h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Quản lý điện thoại</a></li>
                <li class="breadcrumb-item active">Quản lý điện thoại</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="card-box">

    <div class="card-box px-0 pt-0 " style="min-height: 400px">
        <table class="table table-hover table-striped table-responsive-lg">
            <thead>
            <tr class="table-primary">
                <th scope="row">#</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Thời gian nhập</th>
                <th class="text-center">Hình ảnh</th>
                <th>Mô tả</th>
                <th class="text-center">Lượt xem</th>
                <th class="text-center">Lượt mua</th>
                <th class="text-center">Hot</th>
                <th class="text-center">Ẩn/Hiện</th>
                <th class="text-center">Thuộc tính</th>
                <th class="text-center">Sửa / Xóa</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            $count_AH = 0;
            $tonggia = 0;
            $count_LX = 0;
            foreach ($list as $row) {
                if ($row['AnHien'] != null && $row['AnHien'] != 0) {
                    $checked_anhien = '<i class="fa fa-check-circle text-success" aria-hidden="true"></i>';
                } else $checked_anhien = '-';
                ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td class="tendt-table"><?= $row['TenDT'] ?></td>
                    <td><?= number_format($row['Gia']) ?></td>
                    <td><?= $row['ThoiDiemNhap'] ?></td>
                    <td class="text-center img-phone-hover position-relative">
                        <i class="zmdi zmdi-smartphone-android">
                            <div class="img-phone position-absolute d-none p-2 bg-white border rounded shadow-lg"
                                 style="top: -70px; left: 70px; z-index: 1">
                                <img src="<?=PATHIMG_DT.$row['urlHinh'] ?>" width="200px" alt="" class="" >
                            </div>
                    </td>
                    <td class="" data-toggle="popover" data-placement="right" data-container="body"
                        data-content="<?= $row['MoTa'] ?>"
                        data-original-title="Mô tả"><?= substr($row['MoTa'], 0, 30) ?> ...
                    </td>
                    <td class="text-center"><?= $row['SoLanXem'] ?></td>
                    <td class="text-center"><?= $row['SoLanMua'] ?></td>
                    <td class="text-center"><?= $row['Hot'] ?></td>
                    <td class="text-center"><?= $checked_anhien ?></td>
                    <td class="text-center"><a onclick="thuoctinhdt(<?=$row['idDT']?>)" href="#custom-modal" class=" btn btn-outline-warning waves-effect waves-light " data-animation="swell" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a"><i class="zmdi zmdi-eye"></i></a></td>
                    <td class="text-center d-flex justify-content-center">
                        <a href="?ctrl=dienthoai&act=edit&id=<?=$row['idDT']?>" class="btn waves-effect waves-light btn-outline-info mr-2"><i class="icon-pencil"></i></a>
                        <a href="?ctrl=dienthoai&act=delete&id=<?=$row['idDT']?>" onclick="return confirm('Bạn có muốn xóa không ?')" class="btn waves-effect waves-light btn-outline-danger "><i class=" icon-trash"></i></a>
                    </td>
                </tr>
                <?php
                if ($row['AnHien'] == 1) $count_AH++;
                $i++;
                $tonggia += $row['Gia'];
                $count_LX += $row['SoLanXem'];
            }

            ?>
            </tbody>
        </table>

    </div>
    <div id="custom-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Thuộc tính điện thoại</h4>
        <div class="custom-modal-text">
<!--            <div class="row h5 bg-light p-3"> <span id="tendt-modal"></span></div>-->
            <table class="table font-italic" id="table-ttdt">

            </table>
        </div>
    </div>
    <div class="row m-t-20">
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3" >
                <div class="card-box tilebox-two ">
                    <i class=" ti-exchange-vertical float-right text-muted"></i>
                    <h6 class="text-success text-uppercase m-b-15 m-t-10"> Thêm mới</h6>
                    <h2 class="m-b-10 ">+ <a href="?ctrl=dienthoai&act=addnew" class="font-13">Thêm sản phẩm mới</a></h2>
                </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-two">
                <i class="icon-rocket float-right text-muted"></i>
                <h6 class="text-primary text-uppercase m-b-15 m-t-10"> Tổng sản phẩm</h6>
                <h2 class="m-b-10"><td data-plugin="counterup"><?= $i - 1 ?></td> <span
                            class="font-13">Sản phẩm</span></h2>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-two">
                <i class="icon-eye float-right text-muted"></i>
                <h6 class="text-warning text-uppercase m-b-15 m-t-10">Hiển thị</h6>
                <h2 class="m-b-10"><span data-plugin="counterup"><?= $count_AH ?></span> <span
                            class="font-13">Sản phẩm</span></h2>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-two">
                <i class="icon-chart float-right text-muted"></i>
                <h6 class="text-success text-uppercase m-b-15 m-t-10">Trung bình giá</h6>
                <h2 class="m-b-10"><span data-plugin="counterup"><?= number_format(($tonggia / ($i - 1))) ?></span>
                    <span class="font-13">/ SP</span></h2>
            </div>
        </div>
<!--            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">-->
<!--                <div class="card-box tilebox-two">-->
<!--                    <i class="icon-chart float-right text-muted"></i>-->
<!--                    <h6 class="text-pink text-uppercase m-b-15 m-t-10">Trung bình lượt xem</h6>-->
<!--                    <h2 class="m-b-10"><span data-plugin="counterup">--><?//= number_format(($count_LX / ($i - 1))) ?><!--</span>-->
<!--                        <span class="font-13">/ SP</span></h2>-->
<!--                </div>-->
<!--            </div>-->
    </div>

</div>
<script !src="">
    function thuoctinhdt(idDT) {
        $.ajax({
            type: "post",
            url: "?ctrl=dienthoai&act=detail",
            data: {idDT: idDT},
            success: function (response) {
                var ttdt =  $.parseJSON(response);
                $("#table-ttdt").html(`
                    <tr class="row"><td class="col-3">+ Màn hình:</td> <td class="text-danger col-9">${ttdt['ManHinh']}</td></tr>
                    <tr class="row"><td class="col-3">+ Hệ điều hành:</td>  <td class="text-danger col-9">${ttdt['HeDieuHanh']}</td> </tr>
                    <tr class="row"><td class="col-3">+ Camera sau:</td> <td class="text-danger col-9">${ttdt['CameraSau']}</td> </tr>
                    <tr class="row"><td class="col-3">+ Camera trước: </td><td class="text-danger col-9">${ttdt['CameraTruoc']}</td></tr>
                    <tr class="row"><td class="col-3">+ CPU:</td> <td class="text-danger col-9">${ttdt['CPU']}</td> </tr>
                    <tr class="row"><td class="col-3">+ RAM:</td> <td class="text-danger col-9">${ttdt['RAM']} </td></tr>
                    <tr class="row"><td class="col-3">+ Bộ nhớ trong:</td> <td class="text-danger col-9">${ttdt['BoNhoTrong']}</td> </tr>
                    <tr class="row"><td class="col-3">+ Thẻ nhớ: </td><td class="text-danger col-9">${ttdt['TheNho']}</td> </tr>
                    <tr class="row"><td class="col-3">+ Thẻ SIM: </td><td class="text-danger col-9">${ttdt['TheSim']}</td> </tr>
                    <tr class="row"><td class="col-3">+ Dung lượngPin:</td> <td class="text-danger col-9">${ttdt['DungLuongPin']}</td></tr>
                `);
            }
        });
    }
</script>