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
    <title>PHONE STORE - Đăng nhập</title>

    <!-- Bootstrap CSS -->
    <link href="views/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="views/assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- Modernizr js -->
    <script src="views/assets/js/modernizr.min.js"></script>

</head>


<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">

    <div class="account-bg">
        <div class="card-box mb-0">
            <div class="text-center m-t-20">
                <a href="index.html" class="logo">
                    <i class="zmdi zmdi-smartphone-android"></i>
                    <span>PHONE STORE</span>
                </a>
            </div>
            <div class="m-t-10 p-20">
                <div class="row">
                    <div class="col-12 text-center">
                        <h6 class="text-muted text-uppercase m-b-0 m-t-0">Đăng Nhập</h6>
                    </div>
                </div>
                <form class="m-t-20" action="<?=ADMIN_URL?>/?ctrl=login&act=checkuser" method="post">

                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control" type="text" required="" name="taikhoan" placeholder="Tài khoản">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control" type="password" required="" name="matkhau" placeholder="Mật khẩu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <p class="text-danger font-italic"><?php if(isset($error_login)) echo $error_login; ?></p>
                        </div>
                    </div>

                    <div class="form-group row ">
                        <div class="col-12">
                            <div class="checkbox checkbox-custom">
                                <input id="checkbox-signup" type="checkbox" name="nhomatkhau">
                                <label for="checkbox-signup">
                                    Nhớ mật khẩu
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center row m-t-10">
                        <div class="col-12">
                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit" name="submit">Đăng nhập</button>
                        </div>
                    </div>

                    <div class="form-group row m-t-30 mb-0">
                        <div class="col-12">
                            <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i>Quên mật khẩu ?</a>
                        </div>
                    </div>





                </form>

            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end card-box-->

    <div class="m-t-20">
        <div class="text-center">
            <p class="text-white">Chưa có tài khoản ? <a href="pages-register.html" class="text-white m-l-5"><b>Đăng ký</b></a></p>
        </div>
    </div>

</div>
<!-- end wrapper page -->


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

<!-- App js -->
<script src="views/assets/js/jquery.core.js"></script>
<script src="views/assets/js/jquery.app.js"></script>
ư
</body>

</html>