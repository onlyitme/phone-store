<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="views/assets/images/favicon.ico">

    <!-- App title -->
    <title>Dashboard Phone Strore</title>

     <!--    Form    -->
    <link href="views/assets/plugins/fileuploads/css/dropify.min.css" rel="stylesheet" type="text/css"/>
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="views/assets/plugins/morris/morris.css">
    <!--    sweet-alert JS  -->
    <link href="views/assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css"/>
    <!-- Switchery css -->
    <link href="views/assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>
    <!-- Custom box css -->
    <link href="views/assets/plugins/custombox/css/custombox.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="views/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- App CSS -->
    <link href="views/assets/css/style.css" rel="stylesheet" type="text/css"/>
      <!-- Modernizr js -->
    <script src="views/assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="<?=ADMIN_URL?>" class="logo">
                <i class="zmdi  zmdi-smartphone-iphone icon-c-logo"></i>
                <span>Phone Store</span></a>
        </div>

        <nav class="navbar-custom">

            <ul class="list-inline float-right mb-0">
                <li class="list-inline-item dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                       href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <i class="zmdi zmdi-notifications-none noti-icon"></i>
                        <span class="noti-icon-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5><small><span class="label label-danger pull-xs-right">7</span>Notification</small></h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                            <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1min
                                    ago</small></p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                            <p class="notify-details">New user registered.<small class="text-muted">1min ago</small></p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1min
                                    ago</small></p>
                        </a>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                            View All
                        </a>

                    </div>
                </li>

                <li class="list-inline-item dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                       href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <i class="zmdi zmdi-email noti-icon"></i>
                        <span class="noti-icon-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg"
                         aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title bg-success">
                            <h5><small><span class="label label-danger pull-xs-right">7</span>Messages</small></h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="views/assets/images/users/avatar-2.jpg" alt="img"
                                     class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>Robert Taylor</b>
                                <span>New tasks needs to be done</span>
                                <small class="text-muted">1min ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="views/assets/images/users/avatar-3.jpg" alt="img"
                                     class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>Carlos Crouch</b>
                                <span>New tasks needs to be done</span>
                                <small class="text-muted">1min ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="views/assets/images/users/avatar-4.jpg" alt="img"
                                     class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>Robert Taylor</b>
                                <span>New tasks needs to be done</span>
                                <small class="text-muted">1min ago</small>
                            </p>
                        </a>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                            View All
                        </a>

                    </div>
                </li>

                <li class="list-inline-item dropdown notification-list">
                    <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                        <i class="zmdi zmdi-format-subject noti-icon"></i>
                    </a>
                </li>

                <li class="list-inline-item dropdown notification-list">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                       href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <img src="views/assets/images/users/avt.png" alt="user" class="rounded-circle bg-white">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="text-overflow"><small>Chào ! <?=$_SESSION['sname']?> </small></h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="zmdi zmdi-account-circle"></i> <span>Hồ sơ cá nhân</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="zmdi zmdi-settings"></i> <span>Cài đặt</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="zmdi zmdi-lock-open"></i> <span>Khóa màn hình</span>
                        </a>

                        <!-- item-->
                        <a href="<?=ADMIN_URL?>/?ctrl=login&act=logout" class="dropdown-item notify-item">
                            <i class="zmdi zmdi-power"></i> <span>Đăng xuất</span>
                        </a>

                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left waves-light waves-effect">
                        <i class="zmdi zmdi-menu"></i>
                    </button>
                </li>
                <li class="hidden-mobile app-search">
                    <form role="search" class="">
                        <input type="text" placeholder="Tìm kiếm ..." class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>

        </nav>

    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>
                    <li class="text-muted menu-title">Menu</li>

                    <li class="has_sub">
                        <a href="index.php" class="waves-effect"><span
                                    class="label label-pill label-primary float-right">1</span><i
                                    class="zmdi zmdi-view-dashboard"></i><span> Trang chủ </span> </a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-local-library"></i>
                            <span> Quản lý </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled ">
                            <li><a href="ui-buttons.html">Nhà sản xuất</a></li>
                            <li><a href="<?= ADMIN_URL ?>?ctrl=dienthoai ">Điện thoại</a></li>
                            <li><a href="<?= ADMIN_URL ?>?ctrl=donhang">Đơn hàng</a></li>
                            <li><a href="ui-checkbox-radio.html">Tài khoản</a></li>
                            <li><a href="ui-navs.html">Bình luận</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-album"></i> <span> Thống kê </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="components-grid.html">Người dùng</a></li>
                            <li><a href="components-range-sliders.html">Đơn hàng</a></li>
                            <li><a href="components-sweet-alert.html">Doanh thu</a></li>
                            <li><a href="components-ratings.html">Sản phẩm</a></li>
                            <li><a href="components-treeview.html">Vận chuyển</a></li>
                            <li><a href="components-tour.html">Phản hồi</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="calendar.html" class="waves-effect"><i
                                    class="zmdi zmdi-calendar"></i><span> Lịch trình </span> </a>
                    </li>

                    <li class="text-muted menu-title">More</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i
                                    class="zmdi zmdi-collection-item"></i><span> Cài đặt </span></a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-blur-linear"></i><span>Tài khoản </span>
                            <span class="menu-arrow"></span></a>
                        <ul>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><span
                                            class="zmdi zmdi-accounts-list"> Thông tin </span> <span
                                            class="menu-arrow"></span> </a>
                                <ul>
                                    <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                    <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                    <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><span
                                            class="text-danger zmdi zmdi-power"> Đăng xuất </span></a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>

    </div>
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <?php if (file_exists($viewFile) == true) require_once "$viewFile"; ?>

            </div> <!-- container -->

        </div> <!-- content -->


    </div>
    <!-- End content-page -->


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class="side-bar right-bar">
        <div class="nicescroll">
            <ul class="nav nav-pills nav-justified text-xs-center">
                <li class="nav-item">
                    <a href="#home-2" class="nav-link active" data-toggle="tab" aria-expanded="false">
                        Activity
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                        Settings
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade active show" id="home-2">
                    <div class="timeline-2">
                        <div class="time-item">
                            <div class="item-info">
                                <small class="text-muted">5 minutes ago</small>
                                <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong>
                                </p>
                            </div>
                        </div>

                        <div class="time-item">
                            <div class="item-info">
                                <small class="text-muted">30 minutes ago</small>
                                <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus
                                        ut tincidunt euismod. "</em></p>
                            </div>
                        </div>

                        <div class="time-item">
                            <div class="item-info">
                                <small class="text-muted">59 minutes ago</small>
                                <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#"
                                                                                                    class="text-success">John
                                        Doe</a>.</p>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus
                                        ut tincidunt euismod. "</em></p>
                            </div>
                        </div>

                        <div class="time-item">
                            <div class="item-info">
                                <small class="text-muted">1 hour ago</small>
                                <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                            </div>
                        </div>

                        <div class="time-item">
                            <div class="item-info">
                                <small class="text-muted">3 hours ago</small>
                                <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus
                                        ut tincidunt euismod. "</em></p>
                            </div>
                        </div>

                        <div class="time-item">
                            <div class="item-info">
                                <small class="text-muted">5 hours ago</small>
                                <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#"
                                                                                                    class="text-success">John
                                        Doe</a>.</p>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus
                                        ut tincidunt euismod. "</em></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="messages-2">

                    <div class="row m-t-10">
                        <div class="col-8">
                            <h5 class="m-0">Thông báo</h5>
                            <p class="text-muted m-b-0"><small>Bạn có cần chúng không?</small></p>
                        </div>
                        <div class="col-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a"
                                   data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-10">
                        <div class="col-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Bật / Tắt quyền truy cập</small></p>
                        </div>
                        <div class="col-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a"
                                   data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-10">
                        <div class="col-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Cập nhật thường xuyên</small></p>
                        </div>
                        <div class="col-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a"
                                   data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-10">
                        <div class="col-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Hiển thị trạng thái của bạn cho tất cả</small></p>
                        </div>
                        <div class="col-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a"
                                   data-size="small"/>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end nicescroll -->
    </div>
    <!-- /Right-bar -->

    <footer class="footer text-right">
        Begin editing 2021 © BAOKUN.
    </footer>


</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="views/assets/js/jquery.min.js"></script>
<script src="views/assets/js/popper.min.js"></script>
<!-- Tether for Bootstrap -->
<script src="views/assets/js/bootstrap.min.js"></script>
<script src="views/assets/js/detect.js"></script>
<script src="views/assets/js/fastclick.js"></script>
<script src="views/assets/js/jquery.blockUI.js"></script>
<script src="views/assets/js/waves.js"></script>
<script src="views/assets/js/jquery.nicescroll.js"></script>
<script src="views/assets/js/jquery.scrollTo.min.js"></script>
<script src="views/assets/js/jquery.slimscroll.js"></script>
<script src="views/assets/plugins/switchery/switchery.min.js"></script>

<!--Morris Chart-->
<script src="views/assets/plugins/morris/morris.min.js"></script>
<script src="views/assets/plugins/raphael/raphael-min.js"></script>

<!-- Counter Up  -->
<script src="views/assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="views/assets/plugins/counterup/jquery.counterup.min.js"></script>

<!-- App js -->
<script src="views/assets/js/jquery.core.js"></script>
<script src="views/assets/js/jquery.app.js"></script>

<!-- Page specific js -->
<script src="views/assets/pages/jquery.dashboard.js"></script>
<!-- Sweet Alert js -->
<script src="views/assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
<script src="views/assets/pages/jquery.sweet-alert.init.js"></script>
<!-- Modal-Effect -->
<script src="views/assets/plugins/custombox/js/custombox.min.js"></script>
<script src="views/assets/plugins/custombox/js/legacy.min.js"></script>
<!-- file uploads js -->
<script src="views/assets/plugins/fileuploads/js/dropify.min.js"></script>
<!--MY JS-->
<script src="views/assets/js/baokun.js"></script>
<!--CK editor-->
<script src="views/ckeditor/ckeditor.js"></script>
<script>
    var ckeditor = CKEDITOR.replace("ckeditor");
</script>
</body>
</html>