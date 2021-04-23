<div class="shop-account">
    <div class="heading-container">
        <div class="container heading-standar">
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li><span><a href="#" class="home"><span>Trang chủ</span></a></span></li>
                    <li><span><a href="#" class="home"><span>Tài khoản</span></a></span></li>
                    <li><span>Đổi mật khẩu</span></li>
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
                            <h2 class="shop-account-heading">Thiết lập mật khẩu mới</h2>
                            <div class="user-login-or "><span>---</i></span></div>
                            <form action="<?=SITE_URL?>/?act=changepw" method="post" class="login">
                                <p class="form-row form-row-wide">
                                    <label>Mật khẩu cũ <span class="required">*</span></label>
                                    <?php
                                    if(isset($error_oldpw)) echo '<span class="font-italic text-danger">',$error_oldpw,'</span>';
                                    ?>
                                    <input type="password" class="input-text" name="oldpw" value="<?php if(isset($true_oldpw)) echo  $true_oldpw; ?>"/>
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Mật khẩu mới <span class="required">*</span></label>
                                    <?php
                                    if(isset($error_newpw)) echo '<span class="font-italic text-danger">',$error_newpw,'</span>';
                                    ?>
                                    <input type="password" class="input-text" name="newpw" value="<?php if(isset($true_newpw)) echo  $true_newpw; ?>"/>
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Nhập lại mật khẩu <span class="required">*</span></label>
                                    <?php
                                    if(isset($error_renewpw)) echo '<span class="font-italic text-danger">',$error_renewpw,'</span>';
                                    ?>
                                    <input type="password" class="input-text"  name="renewpw" value="<?php if(isset($true_renewpw)) echo  $true_renewpw; ?>"/>
                                </p>
                                <p class="form-row mt-4">
                                    <input type="submit" class="button" name="changepw" value="ĐỔI MẬT KHẨU"/>
                                    <a href="" class="" style="float: right">Quên mật khẩu? </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>