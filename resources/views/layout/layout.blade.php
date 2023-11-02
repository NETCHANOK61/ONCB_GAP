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
    <!-- color css -->
    <link rel="stylesheet" href="template/css/colors.css" />
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
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="{{ route('main.index') }}"><img class="logo_icon img-responsive"
                                    src="template/images/logo/logo_icon.png" alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive"
                                    src="template/images/layout_img/user_img.jpg" alt="#" /></div>
                            <div class="user_info">
                                <h6>John David</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>General</h4>
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                            <ul class="collapse list-unstyled" id="dashboard">
                                <li>
                                    <a href="dashboard.html">> <span>Default Dashboard</span></a>
                                </li>
                                <li>
                                    <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a>
                        </li>
                        <li>
                            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                            <ul class="collapse list-unstyled" id="element">
                                <li><a href="general_elements.html">> <span>General Elements</span></a></li>
                                <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                                <li><a href="icons.html">> <span>Icons</span></a></li>
                                <li><a href="invoice.html">> <span>Invoice</span></a></li>
                            </ul>
                        </li>
                        <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                        <li>
                            <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                            <ul class="collapse list-unstyled" id="apps">
                                <li><a href="email.html">> <span>Email</span></a></li>
                                <li><a href="calendar.html">> <span>Calendar</span></a></li>
                                <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                            </ul>
                        </li>
                        <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing
                                    Tables</span></a></li>
                        <li>
                            <a href="contact.html">
                                <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                        </li>
                        <li class="active">
                            <a href="#additional_page" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional
                                    Pages</span></a>
                            <ul class="collapse list-unstyled" id="additional_page">
                                <li>
                                    <a href="profile.html">> <span>Profile</span></a>
                                </li>
                                <li>
                                    <a href="project.html">> <span>Projects</span></a>
                                </li>
                                <li>
                                    <a href="login.html">> <span>Login</span></a>
                                </li>
                                <li>
                                    <a href="404_error.html">> <span>404 Error</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                        <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i>
                                <span>Charts</span></a></li>
                        <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a>
                        </li>
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
                                <a href="{{ route('main.index') }}"><img class="img-responsive" src="template/images/logo/logo.png"
                                        alt="#" /></a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-bell-o"></i><span
                                                    class="badge">2</span></a></li>
                                        <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i><span
                                                    class="badge">3</span></a></li>
                                    </ul>
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                    class="img-responsive rounded-circle"
                                                    src="template/images/layout_img/user_img.jpg"
                                                    alt="#" /><span class="name_user">John David</span></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="profile.html">My Profile</a>
                                                <a class="dropdown-item" href="settings.html">Settings</a>
                                                <a class="dropdown-item" href="help.html">Help</a>
                                                <a class="dropdown-item" href="#"><span>Log Out</span> <i
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
                                        <div class="heading1 margin_0">
                                            @yield('content')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end table -->
                    </div>
                    <!-- footer -->
                    <div class="container-fluid">
                        <div class="footer">
                            <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                                Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                            </p>
                        </div>
                    </div>
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
    <script src="template/js/chart_custom_style1.js"></script>
</body>

</html>
