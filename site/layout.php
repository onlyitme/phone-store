<!doctype html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>Phone Store</title>
    <base href="http://localhost/PHP-2/asm/site/">
    <link rel="shortcut icon" href="views/assets/images/favicon.ico">
<!--    Temphate CSS-->
    <link rel='stylesheet' href='views/assets/css/settings.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='views/assets/css/swatches-and-photos.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='views/assets/css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;' type='text/css'
          media='all'/>
    <link rel='stylesheet' href='views/assets/css/elegant-icon.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='views/assets/css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='views/assets/css/shop.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='views/assets/css/magnific-popup.css' type='text/css' media='all'/>
<!--My CSS-->
    <link rel='stylesheet' href='views/assets/css/layout.css' type='text/css' media='all'/>
</head>

<body>
<div id="wrapper" class="wide-wrap">
    <div class="offcanvas-overlay"></div>
    <header class="header-type-classic <?php if (file_exists($viewFile) == true && $viewFile === "views/src/home.php") echo('header-absolute header-transparent'); ?> ">
        <div class="topbar">
            <div class="container topbar-wap">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="left-topbar">
                            <div class="topbar-social">
                                <a href="#" title="Facebook" target="_blank">
                                    <i class="fa fa-facebook facebook-bg-hover"></i>
                                </a>
                                <a href="#" title="Twitter" target="_blank">
                                    <i class="fa fa-twitter twitter-bg-hover"></i>
                                </a>
                                <a href="#" title="Google+" target="_blank">
                                    <i class="fa fa-google-plus google-plus-bg-hover"></i>
                                </a>
                                <a href="#" title="Pinterest" target="_blank">
                                    <i class="fa fa-pinterest pinterest-bg-hover"></i>
                                </a>
                                <a href="#" title="RSS" target="_blank">
                                    <i class="fa fa-rss rss-bg-hover"></i>
                                </a>
                                <a href="#" title="Instagram" target="_blank">
                                    <i class="fa fa-instagram instagram-bg-hover"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="right-topbar">
                            <div class="user-wishlist">
                                <a href="wishlist.html"><i class="fa fa-heart-o"></i> Yêu thích</a>
                            </div>
                            <div class="user-login">
                                <ul class="nav top-nav">
                                    <li class="menu-item">
                                        <?php if(isset($_SESSION['sid'])){ ?>
                                            <div class="dropdown">
                                                <a class="btn btn-secondary dropdown-toggle" href="<?=SITE_URL?>?act=myaccount" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                     <i class="fa fa-user"></i> <?=$_SESSION['sname']?>
                                                </a>

                                                <div class="dropdown-menu p-3" style="width: 250px" aria-labelledby="dropdownMenuLink" >
                                                    <p><a class="dropdown-item " href="<?=SITE_URL?>?act=myaccount" style="color: #0b0b0b"> Thông tin tài khoản</a></p>
                                                    <p><a class="dropdown-item " href="<?=SITE_URL?>?act=changepw" style="color: #0b0b0b">Đổi mật khẩu</a></p>
                                                    <hr>
                                                    <a class="dropdown-item" href="<?=SITE_URL?>?act=login&what=logout" style="color: #0b0b0b">Đăng xuất</a>
                                                </div>
                                            </div>
                                        <?php } else { ?>

                                            <a data-rel="loginModal" href="#"><i class="fa fa-user"></i> Đăng nhập</a>
                                        <?php }?>

                                    </li>
                                </ul>
                            </div>
                            <div class="language-switcher">
                                <div class="wpml-languages disabled">
                                    <a class="active" href="#" data-toggle="dropdown">
                                        <!--<img src="views/assets/images/vn.png" alt="Vietnamese" width="25px"/>--> (VN: +84) 327-000-483
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-container">
            <div class="navbar navbar-default  navbar-scroll-fixed">
                <div class="navbar-default-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 navbar-default-col">
                                <div class="navbar-wrap">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar bar-top"></span>
                                            <span class="icon-bar bar-middle"></span>
                                            <span class="icon-bar bar-bottom"></span>
                                        </button>
                                        <a class="navbar-search-button search-icon-mobile" href="#">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a class="cart-icon-mobile" href="<?=ROOT_URL?>/gio-hang/">
                                            <i class="elegant_icon_bag"></i><span>0</span>
                                        </a>
                                        <a class="navbar-brand" href="<?=ROOT_URL?>/phone-store/">
                                            <h3  class="logo " style="<?php if (file_exists($viewFile) == true && $viewFile === "views/src/home.php") echo ('color:white'); ?>">PHONE STORE</h3>
                                            <h3  class="logo-fixed">PHONE STORE</h3>
                                            <h3  class="logo-mobile">PHONE STORE</h3>
                                        </a>
                                    </div>
                                    <nav class="collapse navbar-collapse primary-navbar-collapse">
                                        <ul class="nav navbar-nav primary-nav">
                                            <li class="menu-item-has-children ">
                                                <a href="<?=ROOT_URL?>/phone-store/" class="dropdown-hover">
                                                    <span class="underline">Trang chủ</span> <span class="caret"></span>
                                                </a>
                                            </li>
                                            <li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
                                                <a href="<?=ROOT_URL?>/tat-ca-san-pham/trang-1" class="dropdown-hover">
                                                    <span class="underline">Cửa hàng</span> <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="menu-item-has-children mega-col-3 dropdown-submenu">
                                                        <h3 class="megamenu-title">
                                                            Sản phẩm<span class="caret"></span>
                                                        </h3>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="shop-by-category.html">Hàng mới về</a></li>
                                                            <li><a href="shop-by-category.html">Dưới < 10triệu</a></li>
                                                            <li><a href="shop-by-category.html">Trên > 10 triệu</a></li>
                                                            <li><a href="shop-by-category.html">Điện thoại cao cấp</a>
                                                            </li>
                                                            <li><a href="shop-by-category.html">Điện thoại phổ thông</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children mega-col-3 dropdown-submenu">
                                                        <h3 class="megamenu-title">
                                                            Nhãn hàng <span class="caret"></span>
                                                        </h3>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="shop-by-category.html">Iphone</a></li>
                                                            <li><a href="shop-by-category.html">SamSung</a></li>
                                                            <li><a href="shop-by-category.html">Xiaomi</a></li>
                                                            <li><a href="shop-by-category.html">Oppo</a></li>
                                                            <li><a href="shop-by-category.html">Vivo</a></li>
                                                            <li><a href="shop-by-category.html">Asus</a></li>
                                                            <li><a href="shop-by-category.html">Nokia</a></li>
                                                            <li><a href="shop-by-category.html">Huawei</a></li>
                                                            <li><a href="shop-by-category.html">Pocophone</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children mega-col-3 dropdown-submenu">
                                                        <h3 class="megamenu-title">
                                                            Đồng hồ đeo tay <span class="caret"></span>
                                                        </h3>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="shop-by-collection.html">Apple Watch</a></li>
                                                            <li><a href="shop-by-collection.html">Iphone</a></li>
                                                            <li><a href="shop-by-collection.html">SamSung</a></li>
                                                            <li><h3 class="megamenu-title">Laptop</h3></li>
                                                            <li><a href="shop-by-collection.html">Macbook</a></li>
                                                            <li><a href="shop-by-collection.html">Subface</a></li>
                                                            <li><a href="#">ASUS</a></li>
                                                            <li><a href="#">ACER</a></li>
                                                            <li><a href="#">Lenovo</a></li>

                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children mega-col-3 dropdown-submenu">
                                                        <h3 class="megamenu-title">
                                                            Phụ kiện <span class="caret"></span>
                                                        </h3>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="shop-masonry.html">Bao da ốp lưng</a></li>
                                                            <li><a href="shop-detail.html">Sạc dự phòng</a></li>
                                                            <li><a href="my-account.html">Thẻ nhớ</a></li>
                                                            <li><a href="cart.html">Phụ kiện Apple</a></li>
                                                            <li><a href="#">Phụ kiện Apple</a></li>
                                                            <li><a href="#">Miếng dán màn hình</a></li>
                                                            <li><a href="#">Tai nghe</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="collection.html"><span class="underline">CỘNG ĐỒNG</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="about-us.html">Facebook</a></li>
                                                    <li><a href="contact-us.html">Instagram</a></li>
                                                    <li><a href="faq.html">Tiktok</a></li>
                                                    <li><a href="faq.html">Skype</a></li>
                                                    <li><a href="faq.html">Switter</a></li>
                                                    <li><a href="faq.html">Pinterest</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children ">
                                                <a href="#" class="dropdown-hover">
                                                    <span class="underline">Blog</span> <span class="caret"></span>
                                                </a>
                                            </li>
                                            <li class="menu-item-has-children dropdown">
                                                <a href="#" class="dropdown-hover">
                                                    <span class="underline">Liên lạc</span> <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="about-us.html">Về chúng tôi</a></li>
                                                    <li><a href="contact-us.html">Liên lạc</a></li>
                                                    <li><a href="faq.html">Hỗ trợ</a></li>
                                                </ul>
                                            </li>
                                            <li class="navbar-search">
                                                <a class="navbar-search-button" href="#">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </li>
                                            <li class="navbar-minicart navbar-minicart-nav">
                                                <a class="minicart-link" href="<?=ROOT_URL?>/gio-hang/">
															<span class="minicart-icon">
																<i class="minicart-icon-svg elegant_icon_bag"></i>
																<span><?php
                                                                        if(isset($_SESSION['cart'])){
                                                                            $count =0;
                                                                            foreach ($_SESSION['cart'] as $row){
                                                                                $count += $row['soLuong'];
                                                                            }
                                                                            echo $count;
                                                                        }
                                                                        else echo '0';
                                                                    ?></span>
															</span>
                                                </a>
                                                <div class="minicart">
                                                    <?php if(isset($_SESSION['cart'])) {
                                                        $tongtien =0;
                                                        ?>
                                                        <div class="minicart-header">Có <?=sizeof($_SESSION['cart'])?> sản phẩm</div>
                                                        <div class="minicart-body">
                                                            <?php  foreach ($_SESSION['cart'] as $idProduct=>$product){
                                                            $sp1 = $this->model->detail($idProduct);
                                                            ?>
                                                            <div class="cart-product clearfix">
                                                                <div class="cart-product-image">
                                                                    <a class="cart-product-img" href="<?=ROOT_URL?>/chi-tiet-san-pham/<?=$idProduct?>">
                                                                        <img width="100" height="150" src="<?=PATHIMG_DT.$sp1['urlHinh']?>" alt="Product-1"/>
                                                                    </a>
                                                                </div>
                                                                <div class="cart-product-details">
                                                                    <div class="cart-product-title">
                                                                        <a href="<?=ROOT_URL?>/chi-tiet-san-pham/<?=$idProduct?>"><?php echo substr($sp1['TenDT'],0,30); if (strlen($sp1['TenDT']) > 30) echo " ...";?></a>
                                                                    </div>
                                                                    <div class="cart-product-quantity-price">
                                                                        2 x <span class="amount"><?=number_format($sp1['Gia'])?> vnđ</span>
                                                                    </div>
                                                                </div>
<!--                                                                <a href=""  class="remove" title="Remove this item">&times;</a>-->
                                                            </div>
                                                                <?php $tongtien += $product['soLuong']*$sp1['Gia']; } ?>
                                                        </div>
                                                        <div class="minicart-footer">
                                                            <p style="border-top: 1px solid #d5d5d5; padding: 5px 0">Tổng cộng: <strong class="text-danger ml-3"><?=number_format($tongtien) ?> vnđ</strong></p>

                                                            <div class="minicart-actions clearfix">
                                                                <a class="checkout-button button" href=<?=ROOT_URL?>/gio-hang/>
                                                                    <span class="text">Kiểm tra </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="minicart-header no-items show">
                                                            Không có sản phẩm nào
                                                        </div>
                                                        <div class="minicart-footer">
                                                            <div class="minicart-actions clearfix">
                                                                <a class="button" href="<?=ROOT_URL?>/tat-ca-san-pham/">
                                                                    <span class="text">Đi tới cửa hàng</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-search-overlay hide">
                    <div class="container">
                        <div class="header-search-overlay-wrap">
                            <form action="<?=ROOT_URL?>/tim-kiem/" method="post" class="searchform">
                                <input type="search" class="searchinput" name="data-search" value="" placeholder="Tìm kiếm..."/>
                                <input type="submit" class="searchsubmit hidden" name="search" value="Search"/>
                            </form>
                            <button type="button" class="close">
                                <span aria-hidden="true" class="fa fa-times"></span>
                                <span class="sr-only">Đóng</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php if (file_exists($viewFile) == true) require_once "$viewFile"; ?>
    <div class="footer-widget">
        <div class="container">
            <div class="footer-widget-wrap">
                <div class="row">
                    <div class="footer-widget-col col-md-2 col-sm-6">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title"><span>Thông tin</span></h3>
                            <ul class="menu">
                                <li><a href="#">Giới thiệu</a></li>
                                <li><a href="#">Làm việc ở đây</a></li>
                                <li><a href="#">Những đồng nghiệp</a></li>
                                <li><a href="#">Vị trí đại lý</a></li>
                                <li><a href="#">Những hoạt động</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-widget-col col-md-2 col-sm-6">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title"><span>Chăm sóc khách hàng</span></h3>
                            <ul class="menu">
                                <li><a href="#">Hỗ trợ</a></li>
                                <li><a href="#">Liên lạc</a></li>
                                <li><a href="#">Trung tâm bảo trì</a></li>
                                <li><a href="#">Cách thức liên lạc</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-widget-col col-md-2 col-sm-6">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title"><span>Đặt hàng Online </span></h3>
                            <ul class="menu">
                                <li><a href="#">Tình trạng đặt hàng</a></li>
                                <li><a href="#">Chính sách vận chuyển</a></li>
                                <li><a href="#">Chính sách đổi trả</a></li>
                                <li><a href="#">Quà khuyến mãi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-widget-col col-md-2 col-sm-6">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title"><span>Hỗ trợ</span></h3>
                            <ul class="menu">
                                <li><a href="#">Riêng tư</a></li>
                                <li><a href="#">Các điều khoản</a></li>
                                <li><a href="#">Trách nhiệm xã hội</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-widget-col col-md-4 col-sm-6">
                        <div class="widget widget_text">
                            <h3 class="widget-title"><span>Cửa hàng</span></h3>
                            <div class="textwidget">
                                <p class=""> Số 68/12, Nguyễn Thị Minh Khai, Quận 1, TP. Hồ Chí Minh</p>
                                <p><i class="fa fa-phone"></i> (+84) 1234 7824</p>
                                <p><i class="fa fa-envelope"></i> <a href="mailto:email@domain.com">email@domain.com</a>
                                </p>
                                </p>
                                <p class="payment"><img src="views/assets/images/footer-payment-color.png" alt=""></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" class="footer">
        <div class="footer-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer-info-logo">
                            <a href="#" class="h3">PHONE STORE</a>
                        </div>
                        <div class="copyright text-center">Copyright right © 2021 BAOKUN. All Rights Reserved.</div>
                        <div class="footer-social">
                            <a href="#" title="Facebook" target="_blank">
                                <i class="fa fa-facebook facebook-bg-hover"></i>
                            </a>
                            <a href="#" title="Twitter" target="_blank">
                                <i class="fa fa-twitter twitter-bg-hover"></i>
                            </a>
                            <a href="#" title="Google+" target="_blank">
                                <i class="fa fa-google-plus google-plus-bg-hover"></i>
                            </a>
                            <a href="#" title="Pinterest" target="_blank">
                                <i class="fa fa-pinterest pinterest-bg-hover"></i>
                            </a>
                            <a href="#" title="RSS" target="_blank">
                                <i class="fa fa-rss rss-bg-hover"></i>
                            </a>
                            <a href="#" title="Instagram" target="_blank">
                                <i class="fa fa-instagram instagram-bg-hover"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?=ROOT_URL?>/dang-nhap/" method="post" id="userloginModalForm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span>
                    </button>
                    <h4 class="modal-title">Đăng Nhập</h4>
                </div>
                <div class="modal-body">
                    <div class="user-login-facebook">
                        <button class="btn-login-facebook" type="button">
                            <i class="fa fa-facebook"></i>Đăng nhập với Facebook
                        </button>
                    </div>
                    <div class="user-login-or " ><span class="w-auto ">hoặc</span></div>
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input type="text" id="username" name="log" required class="form-control" value="" placeholder="NguyenVanTeo">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" id="password" required value="" name="pwd" class="form-control" placeholder="******">
                    </div>
                    <div class="checkbox clearfix">
                        <div class="form-flat-checkbox pull-left">
                            <input type="checkbox" name="rememberme" id="rememberme" value="forever"><i></i>&nbsp;Lưu đăng nhập
                        </div>
                        <span class="lostpassword-modal-link pull-right">
									<a href="#" data-rel="lostpasswordModal">Quên mật khẩu?</a>
								</span>
                    </div>
                </div>
                <div class="modal-footer">
							<span class="user-login-modal-register pull-left">
								<a data-rel="registerModal" href="#">Chưa có tài khoản?</a>
							</span>
                    <button type="submit" name="login" class="btn btn-default btn-outline">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="userregisterModalForm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Register account</h4>
                </div>
                <div class="modal-body">
                    <div class="user-login-facebook">
                        <button class="btn-login-facebook" type="button">
                            <i class="fa fa-facebook"></i>Sign in with Facebook
                        </button>
                    </div>
                    <div class="user-login-or"><span>or</span></div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user_login" required class="form-control" value="" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="user_email">Email</label>
                        <input type="email" id="user_email" name="user_email" required class="form-control" value="" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="user_password">Password</label>
                        <input type="password" id="user_password" required value="" name="user_password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="user_password">Retype password</label>
                        <input type="password" id="cuser_password" required value="" name="cuser_password" class="form-control" placeholder="Retype password">
                    </div>
                </div>
                <div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
                    <button type="submit" class="btn btn-default btn-outline">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?=ROOT_URL?>/quen-mat-khau/" method="post" id="userlostpasswordModalForm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Quên Mật Khẩu</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tài Khoản hoặc E-mail</label>
                        <input type="text" name="infuser"  class="form-control" required value="" placeholder="Tài Khoản hoặc E-mail">
                    </div>
                </div>
                <div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Bạn chưa có tài khoản ?</a>
							</span>
                    <button type="submit" name="forgotpw" class="btn btn-default btn-outline">Kiểm tra</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade shop product-quickview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div class="modal-body">
                <div class="product-quickview-content">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-product-images">
                                <div class="single-product-images-slider">
                                    <img width="800" height="850" src="views/assets/images/product/product-detail/product-1.jpg" alt="Product-1">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="summary entry-summary">
                                <h1 class="product_title entry-title">Cras rhoncus duis viverra</h1>
                                <div class="shop-product-rating">
                                    <div class="star-rating">
                                        <span style="width:80%"></span>
                                    </div>
                                    <a href="#reviews" class="shop-review-link">(<span class="count">1</span> customer review)</a>
                                </div>
                                <p class="price">
                                    <span class="amount">$12.00</span>–<span class="amount">$23.00</span>
                                </p>
                                <div class="product-excerpt">
                                    <p>
                                        Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id metus eget nibh imperdiet fermentum non in metus.
                                    </p>
                                </div>
                                <div class="product-actions res-color-attr">
                                    <form class="cart">
                                        <div class="product-options-outer">
                                            <div class="variation_form_section">
                                                <div class="product-options icons-lg">
                                                    <table class="variations-table">
                                                        <tbody>
                                                        <tr>
                                                            <td><label>Color</label></td>
                                                            <td>
                                                                <div class="select-option swatch-wrapper">
                                                                    <a href="#" title="Green" class="swatch-color green">Green</a>
                                                                </div>
                                                                <div class="select-option swatch-wrapper selected">
                                                                    <a href="#" title="Red" class="swatch-color red">Red</a>
                                                                </div>
                                                                <div class="select-option swatch-wrapper">
                                                                    <a href="#" title="White" class="swatch-color white">White</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><label>Size</label></td>
                                                            <td>
                                                                <div class="select-option swatch-wrapper selected">
                                                                    <a href="#" title="Extra Large" class="swatch-anchor">
                                                                        <img src="views/assets/images/sizes/XL.jpg" alt="thumbnail" width="35" height="35"/>
                                                                    </a>
                                                                </div>
                                                                <div class="select-option swatch-wrapper">
                                                                    <a href="#" title="Extra Extra Large" class="swatch-anchor">
                                                                        <img src="views/assets/images/sizes/XXL.jpg" alt="thumbnail" width="35" height="35"/>
                                                                    </a>
                                                                </div>
                                                                <div class="select-option swatch-wrapper">
                                                                    <a href="#" title="Medium" class="swatch-anchor">
                                                                        <img src="views/assets/images/sizes/M.jpg" alt="thumbnail" width="35" height="35"/>
                                                                    </a>
                                                                </div>
                                                                <div class="select-option swatch-wrapper">
                                                                    <a href="#" title="Small" class="swatch-anchor">
                                                                        <img src="views/assets/images/sizes/S.jpg" alt="thumbnail" width="35" height="35"/>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_variation_wrap">
                                            <div class="single_variation">
                                                <span class="price"><span class="amount">$20.00</span></span>
                                            </div>
                                            <div class="variations_button">
                                                <div class="quantity">
                                                    <input type="number" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                                                </div>
                                                <button type="submit" class="button">Add to cart</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="yith-wcwl-add-to-wishlist">
                                    <a href="#" class="add_to_wishlist">
                                        Add to Wishlist
                                    </a>
                                </div>
                                <div class="product_meta">
                                    <span class="sku_wrapper">SKU: <span class="sku">N/A</span></span>
                                    <span class="posted_in">Category: <a href="#">Aliquam</a></span>
                                    <span class="tagged_as">Tags: <a href="#">Men</a>, <a href="#">Women</a></span>
                                    <span class="posted_in">Brand: <a href="#">Adesso</a>, <a href="#">Carvela</a>.</span>
                                </div>
                                <div class="share-links">
                                    <div class="share-icons">
												<span class="facebook-share">
													<a href="#" title="Share on Facebook"><i class="fa fa-facebook"></i></a>
												</span>
                                        <span class="twitter-share">
													<a href="#" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
												</span>
                                        <span class="google-plus-share">
													<a href="#" title="Share on Google +"><i class="fa fa-google-plus"></i></a>
												</span>
                                        <span class="linkedin-share">
													<a href="#" title="Share on Linked In"><i class="fa fa-linkedin"></i></a>
												</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type='text/javascript' src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
<script type='text/javascript' src='views/assets/js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='views/assets/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='views/assets/js/jquery.themepunch.revolution.min.js'></script>
<script type='text/javascript' src='views/assets/js/easing.min.js'></script>
<script type='text/javascript' src='views/assets/js/imagesloaded.pkgd.min.js'></script>
<script type='text/javascript' src='views/assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='views/assets/js/superfish-1.7.4.min.js'></script>
<script type='text/javascript' src='views/assets/js/jquery.appear.min.js'></script>
<script type='text/javascript' src='views/assets/js/script.js'></script>
<script type='text/javascript' src='views/assets/js/swatches-and-photos.js'></script>
<script type='text/javascript' src='views/assets/js/jquery.prettyPhoto.min.js'></script>
<script type='text/javascript' src='views/assets/js/jquery.prettyPhoto.init.min.js'></script>
<script type='text/javascript' src='views/assets/js/jquery.selectBox.min.js'></script>
<script type='text/javascript' src='views/assets/js/jquery.parallax.js'></script>
<script type='text/javascript' src='views/assets/js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='views/assets/js/jquery.transit.min.js'></script>
<script type='text/javascript' src='views/assets/js/jquery.carouFredSel.min.js'></script>
<script type='text/javascript' src='views/assets/js/isotope.pkgd.min.js'></script>
<script type='text/javascript' src='views/assets/js/core.min.js'></script>
<script type='text/javascript' src='views/assets/js/widget.min.js'></script>
<script type='text/javascript' src='views/assets/js/mouse.min.js'></script>
<script type='text/javascript' src='views/assets/js/slider.min.js'></script>
<script type='text/javascript' src='views/assets/js/jquery-ui-touch-punch.min.js'></script>
<script type='text/javascript' src='views/assets/js/price-slider.js'></script>
<script type='text/javascript' src='views/assets/js/jquery.magnific-popup.min.js'></script>
<script type='text/javascript' src='views/assets/js/baokun.js'></script>

</body>
</html>