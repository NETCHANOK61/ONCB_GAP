<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="template/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="template/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="template/css/responsive.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="template/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="template/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="template/css/custom.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Krub:300" />
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div class="sidebar_blog_2">
                    <ul class="list-unstyled components">
                        <h4>การจัดการผู้ใช้งาน</h4>
                        <li><a href="#"><i class="fa fa-table yellow_color"></i>
                                <span>ระดับจังหวัด</span></a></li>
                        <li><a href="#"><i class="fa fa-table yellow_color"></i>
                                <span>ระดับอำเภอ</span></a></li>
                    </ul>
                </div>
                <div class="sidebar_blog_2">
                    <ul class="list-unstyled components">
                        <h4>การจัดการคำขอสร้างบัญชีใหม่</h4>
                        <li><a href="{{ route('test2') }}"><i class="fa fa-table yellow_color"></i>
                                <span>ระดับจังหวัด</span></a></li>
                        <li><a href="#"><i class="fa fa-table yellow_color"></i>
                                <span>ระดับอำเภอ</span></a></li>
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                                    class="fa fa-bars"></i></button>
                            <div class="logo_section">
                                {{-- <a href="{{ route('main.index') }}"><img class="img-responsive"
                                        src="template/images/logo/logo.png" alt="#" /></a> --}}
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    {{-- <ul>
                                        <li><a href="#"><i class="fa fa-bell-o"></i><span
                                                    class="badge">2</span></a></li>
                                        <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i><span
                                                    class="badge">3</span></a></li>
                                    </ul> --}}
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                    class="img-responsive rounded-circle"
                                                    src="template/images/layout_img/user_img.jpg" alt="#" /><span
                                                    class="name_user">John David</span></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="profile.html">ประวัติผู้ใช้งาน</a>
                                                {{-- <a class="dropdown-item" href="settings.html">Settings</a>
                                                <a class="dropdown-item" href="help.html">Help</a> --}}
                                                <a class="dropdown-item" href="{{ route('out') }}">ออกจากระบบ <i
                                                        class="fa fa-sign-out"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Dashboard</h2>
                                </div>
                            </div>
                        </div>
                        <!-- table -->
                        <div class="row column2 graph margin_bottom_30">
                            <div class="col-md-l2 col-lg-12">
                                <div class="white_shd full">
                                    <div class="full graph_head">
                                        <div class="">
                                            @yield('content')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end table -->
                    </div>
                    <!-- footer -->
                    {{-- <div class="container-fluid">
                        <div class="footer">
                            <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                                Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                            </p>
                        </div>
                    </div> --}}
                </div>
                <!-- end dashboard inner -->
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="template/js/jquery.min.js"></script>
    <script src="template/js/popper.min.js"></script>
    <script src="template/js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="template/js/animate.js"></script>
    <!-- select country -->
    <script src="template/js/bootstrap-select.js"></script>
    <!-- owl carousel -->
    <script src="template/js/owl.carousel.js"></script>
    <!-- chart js -->
    <script src="template/js/Chart.min.js"></script>
    <script src="template/js/Chart.bundle.min.js"></script>
    <script src="template/js/utils.js"></script>
    <script src="template/js/analyser.js"></script>
    <!-- nice scrollbar -->
    <script src="template/js/perfect-scrollbar.min.js"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="template/js/custom.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let table = new DataTable('#myTable', {
                language: {
                    info: "แสดงรายการที่ _START_ ถึง _END_ จาก _TOTAL_ รายการ",
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/th.json',
                },
            });
        });
    </script>
    {{-- <script src="template/js/chart_custom_style1.js"></script> --}}
</body>

</html>
