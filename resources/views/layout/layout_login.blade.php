<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="login_template/fonts/icomoon/style.css">

    <link rel="stylesheet" href="login_template/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login_template/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="login_template/css/style.css">

    <title>Login #6</title>
</head>

<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('login_template/images/ONCB.jpg');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <center><img src="login_template/images/logo.png" width="150" height="150">
                            <div class="mb-4">
                                <h5>การบริหารจัดการการเข้าถึงข้อมูล ส่วนบุคคลของผู้ใช้งานระบบ NISPA <br>(User
                                    access management)</h5>
                            </div>
                        </center>
                        {{-- <form action="#" method="post"> --}}
                        <div class="form-group first">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username">

                        </div>
                        <div class="form-group last mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password">

                        </div>

                        <div class="d-flex mb-5 align-items-center">
                            <span class="ml-auto"><a href="#" class="forgot-pass">ลืมรหัสผ่าน</a></span>
                        </div>

                        {{-- <input type="submit" value="เข้าสู่ระบบ" class="btn btn-block btn-primary"> --}}
                        <a href="{{ route('main.index') }}" class="btn btn-block btn-primary d-flex justify-content-center align-items-center" style="color: #fff;text-decoration:none;">
                            เข้าสู่ระบบ
                        </a>

                        <span class="d-block text-center my-4 text-muted">&mdash; หรือ &mdash;</span>

                        <div class="social-login">
                            {{-- <a href="#" class="facebook btn d-flex justify-content-center align-items-center">
                  <span class="icon-facebook mr-3"></span> Login with Facebook
                </a> --}}
                            {{-- <a href="#" class="twitter btn d-flex justify-content-center align-items-center">
                  <span class="icon-twitter mr-3"></span> Login with  Twitter
                </a> --}}
                            <a href="#" class="google btn d-flex justify-content-center align-items-center">
                                <span class="icon-google mr-3"></span> Login with Google
                            </a>
                        </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="login_template/js/jquery-3.3.1.min.js"></script>
    <script src="login_template/js/popper.min.js"></script>
    <script src="login_template/js/bootstrap.min.js"></script>
    <script src="login_template/js/main.js"></script>
</body>

</html>
