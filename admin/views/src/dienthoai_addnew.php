<div class="row">
    <div class="col-xl-12">
        <div class="page-title-box">
            <h4 class="page-title text-muted float-left">Thêm điện thoại </h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Quản lý điện thoại</a></li>
                <li class="breadcrumb-item active">Thêm điện thoại</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="card-box">
    <form action="?ctrl=dienthoai&act=store" method="post" enctype="multipart/form-data">
        <div class="row align-items-center">
            <div class="col  m-b-0 ">
                <h5 class="text-custom "><i class="zmdi zmdi-border-color mr-2"></i> Chèn dữ liệu cho sản phẩm</h5>
            </div>
            <div class="col form-group text-right m-b-0 ">
                <button type="reset" class="btn btn-secondary waves-effect">
                    <i class="icon-refresh"></i> Làm mới
                </button>
                <button class="btn btn-success waves-effect waves-light  m-l-5" type="submit" name="submit">
                    <i class="ti-save mr-2"></i> Lưu & Thêm mới
                </button>
            </div>
        </div>
        <hr>
        <div class="card m-b-20">
            <div class="card-header d-flex justify-content-between">
                <h6>Thông tin cơ bản </h6>
                <div>
                    <label for="hot" class="form-control-label text-right mr-2">HOT:</label>
                    <input type="checkbox" checked data-plugin="switchery" data-size="small" name="hot"
                           data-color="red"/>
                    <label for="anhien" class="form-control-label text-right ml-5 mr-2">Hiển thị:</label>
                    <input type="checkbox" checked data-plugin="switchery" data-size="small" name="anhien"
                           data-color="#3db9dc"/>
                </div>

            </div>

            <div class="card-body">
                <div class="form-group row">
                    <label for="nhasanxuat" class="col-sm-3 form-control-label text-right">Nhà sản xuất<span
                                class="text-danger">*</span>:</label>
                    <div class="col-sm-9">
                        <select id="nhasanxuat" name="idNSX" required class="custom-select w-50">
                            <!--                            <option selected="">Chọn nhà sản xuất</option>-->
                            <?php foreach ($nhasanxuat as $row) { ?>
                                <option value="<?= $row['idNSX'] ?>"><?= $row['TenNSX'] ?></option>
                            <?php } ?>
                        </select>

                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="ThoiDiemNhap " class="col-sm-3 form-control-label text-right">Thời điểm nhập<span
                                class="text-danger">*</span>:</label>
                    <div class="col-sm-9">
                        <?php /*$date = date("Y-m-d");
                        $time = date("H:i:s"); */ ?>
                        <input class="form-control w-auto" name="ThoiDiemNhap" type="datetime-local"
                               value="" placeholder="<? /*= $date */ ?>T<? /*= $time */ ?>" id="ThoiDiemNhap">
                    </div>
                </div>-->
                <div class="form-group row">
                    <label for="tensanpham" class="col-sm-3 form-control-label text-right">Tên sản phẩm<span
                                class="text-danger">*</span>:</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="TenDT" placeholder="Redmi Note 9s 4G 64GB"
                               id="tensanpham">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mota" class="col-sm-3 form-control-label text-right">Mô tả:</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="ckeditor" rows="3" name="mota"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="SoLuongTonKho" class="col-sm-3 form-control-label text-right">Số lượng tồn kho:</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="number" placeholder="42000" id="SoLuongTonKho"
                               name="SoLuongTonKho">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Gia" class="col-sm-3 form-control-label text-right">Giá sản phẩm<span
                                class="text-danger">*</span>:</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="number" placeholder="42000000" id="Gia" name="Gia">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="urlHinh" class="col-sm-3 form-control-label text-right">Hình ảnh<span
                                class="text-danger"></span>:</label>

                    <div class="col-sm-9">
                        <div class="card-box border">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="urlHinh" class=" form-control-label font-italic text-muted">Ảnh
                                        chính<span class="text-danger"></span>:</label>
                                    <input type="file" id="urlHinh" name="urlHinh" class="dropify" data-height="450"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class=" form-control-label font-italic text-muted">Ảnh phụ<span
                                                class="text-danger"></span>:</label>

                                    <div class="d-flex">
                                        <input type="file" id="" name="" class="dropify" data-height="150"/>
                                        <input type="file" id="" name="" class="dropify" data-height="150"/>
                                        <input type="file" id="" name="" class="dropify" data-height="150"/>
                                    </div>
                                    <div class="d-flex">
                                        <input type="file" id="" name="" class="dropify" data-height="150"/>
                                        <input type="file" id="" name="" class="dropify" data-height="150"/>
                                        <input type="file" id="" name="" class="dropify" data-height="150"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card m-b-20">
            <h6 class="card-header">Bổ sung thuộc tính</h6>
            <div class="card-body row">
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                    <div class="form-group">
                        <label for="ManHinh" class="form-control-label text-right">Màn hình</label>
                        <input class="form-control" type="text" placeholder="6.8 inches" id="ManHinh" name="ManHinh">
                    </div>
                    <div class="form-group">
                        <label for=" " class="form-control-label text-right">Hệ Điều Hành</label>
                        <select id="HeDieuHanh" name="HeDieuHanh" class="custom-select  ">
                            <!--                            <option selected="">Chọn hệ điều hành</option>-->
                            <option value="Android">Android</option>
                            <option value="IOS">IOS</option>
                            <option value="Window Phone">Window Phone</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="CPU" class="form-control-label text-right">CPU</label>
                        <input class="form-control" type="text"
                               placeholder="Octa-core (2x2.3 GHz Kryo 465 Gold & 6x1.8 GHz Kry" id="CPU" name="CPU">
                    </div>
                    <div class="form-group">
                        <label for="RAM" class="form-control-label text-right">RAM</label>
                        <select id="RAM" name="RAM" class="custom-select  ">
                            <!--                            <option selected="">Chọn kích cỡ RAM</option>-->
                            <option value="2 GB">2 GB</option>
                            <option value="4 GB">4 GB</option>
                            <option value="6 GB">6 GB</option>
                            <option value="8 GB">8 GB</option>
                            <option value="16 GB">16 GB</option>
                            <option value="32 GB">32 GB</option>
                            <option value="64 GB">64 GB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="TheSim" class="form-control-label text-right">Thẻ Sim</label>
                        <select id="TheSim" name="TheSim" class="custom-select  ">
                            <option value="1 SIM (Nano-SIM)">1 SIM (Nano-SIM)</option>
                            <option value="2 SIM (Nano-SIM)" selected>2 SIM (Nano-SIM)</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                    <div class="form-group">
                        <label for="CameraTruoc" class="form-control-label text-right">Camera Trước</label>
                        <input class="form-control" type="text" placeholder="44 MP, F/2.4, Cảm biến thông minh AI"
                               id="CameraTruoc" name="CameraTruoc">
                    </div>
                    <div class="form-group">
                        <label for="CameraSau" class="form-control-label text-right">Camera Sau</label>
                        <input class="form-control" type="text" placeholder="64 MP + 8 MP + 2 MP + 2 MP" id="CameraSau"
                               name="CameraSau">
                    </div>
                    <div class="form-group">
                        <label for="BoNhoTrong" class="form-control-label text-right">Bộ Nhớ Trong</label>
                        <select id="BoNhoTrong" name="BoNhoTrong" class="custom-select  ">
                            <!--                            <option selected="">Chọn kích cỡ bộ nhớ trong</option>-->
                            <option value="8 GB">8 GB</option>
                            <option value="16 GB">16 GB</option>
                            <option value="32 GB">32 GB</option>
                            <option value="64 GB">64 GB</option>
                            <option value="128 GB">128 GB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="DungLuongPin" class="form-control-label text-right">Dung Lượng Pin</label>
                        <input class="form-control" type="text" placeholder="Li-Po 4500 mAh battery, Fast charging 18W"
                               id="DungLuongPin" name="DungLuongPin">
                    </div>
                    <div class="form-group">
                        <label for="TheNho" class="form-control-label text-right">Thẻ Nhớ</label>
                        <select id="TheNho" name="TheNho" class="custom-select  ">
                            <!--                            <option selected="">Không</option>-->
                            <option value="8 GB">8 GB</option>
                            <option value="16 GB">16 GB</option>
                            <option value="32 GB">32 GB</option>
                            <option value="64 GB">64 GB</option>
                            <option value="128 GB">128 GB</option>
                        </select>
                    </div>

                </div>

            </div>

        </div>
        <div class=" form-group text-right m-b-0 mt-5 ">
            <button class="btn btn-success waves-effect waves-light  m-l-5" type="submit" name="submit">
                <i class="ti-save mr-2"></i> Lưu & Thêm mới
            </button>
        </div>
    </form>
</div>
