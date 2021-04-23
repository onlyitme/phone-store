<div class="shop-account">
    <div class="heading-container">
        <div class="container heading-standar">
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li><span><a href="<?=SITE_URL?>" class="home"><span>Trang chủ</span></a></span></li>
                    <li><span>Thông báo</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 main-wrap">
                    <div class="main-content">
                        <?php  if(isset($checkout) && $checkout=="OKE"){ ?>
                            <div class="row about-content mt-0">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <div class="row inner">
                                        <div class="col-sm-12">
                                            <div class="icon_element icon_element-outer icon_element-align-center">
                                                <div class="icon_element-inner icon_element-color-green  icon_element-style- icon_element-background-color-grey">
                                                    <span class="icon_element-icon fa fa-check-circle "  style="font-size: 5em"></span>
                                                </div>
                                                    <p class="mt-5" >
                                                        Đơn hàng của bạn đã đc xử lý
                                                    </p>
                                            </div>
                                            <div class="content_element">
                                                <p class="mt-5"> Xin cảm ơn ! </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                        <?php } ?>
                        <div class="shop">
                            <?php  if(isset($error_message)) echo '<p class="cart-empty">',$error_message,'</p>'; ?>
                            <p class="return-to-shop">
                                <a class="button wc-backward" href="<?=ROOT_URL?>/phone-store/">Quay lại cửa hàng</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>