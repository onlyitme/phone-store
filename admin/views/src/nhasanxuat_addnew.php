<form method="post" action="<?=ADMIN_URL?>/?ctrl=nhasanxuat&act=store">
    <div class="mb-3 row">
        <label for="TenNSX" class="col-sm-2 col-form-label">Tên Nhà Sản Xuất</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="TenNSX" id="TenNSX" value="" placeholder="Samsung, Lenovo, Apple, ...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="AnHien" class="col-sm-2 col-form-label">Ẩn = 0 / Hiện = 1</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="AnHien" id="AnHien" value="1">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="AnHien" class="col-sm-2 col-form-label">Thứ tự xuất hiện</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="ThuTu" id="ThuTu" placeholder="">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-3 ms-auto">
            <input type="submit" class="form-control btn btn-outline-info" name="submit" value="Thêm Dữ Liệu">
        </div>
    </div>
</form>
