<div class="shop-account">
    <div class="heading-container">
        <div class="container heading-standar">
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li><span><a href="#" class="home"><span>Trang chủ</span></a></span></li>
                    <li><span>Đăng nhập</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 main-wrap">
                    <div class="main-content">
                        <div class="shop">
                            <h2 class="shop-account-heading">Đăng nhập</h2>
                            <div class="user-login-or "><span>---</i></span></div>
                            <form action="<?=ROOT_URL?>/dang-nhap/" method="post" class="login">
                                <p class="form-row form-row-wide">
                                    <?php
                                    if(isset($error_message)) echo '<span class="font-italic text-danger">',$error_message,'</span>';
                                    ?>
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Tên đăng nhập <span class="required">*</span></label>
                                    <?php
                                    if(isset($error_username)) echo '<span class="font-italic text-danger">',$error_username,'</span>';
                                    ?>
                                    <input type="text" id="username" name="log" required class="form-control" value="" placeholder="NguyenVanTeo">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label for="password">Mật khẩu <span class="required">*</span></label>
                                    <?php
                                    if(isset($error_password)) echo '<span class="font-italic text-danger">',$error_password,'</span>';
                                    ?>
                                    <input type="password" id="password" required value="" name="pwd" class="form-control" placeholder="******">
                                </p>
                                <p class="form-row mt-4">
                                    <input type="submit" class="button" name="page-login" value="ĐĂNG NHẬP"/>
                                    <a href="" data-rel="lostpasswordModal" class="" style="float: right">Quên mật khẩu? </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>