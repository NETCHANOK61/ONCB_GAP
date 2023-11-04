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
                            <div class="user_img">
                                <img class="img-responsive" src="template/images/logo/logo.png" alt="#" />
                            </div>
                            <div class="user_info">
                                <h6>ระบบสารสนเทศ <br>ยาเสพติดจังหวัด <br> NISPA</h6>
                                {{-- <h6>John David</h6> --}}
                                {{-- <p><span class="online_animation"></span> Online</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <ul class="list-unstyled components">
                        <h4>สถานะการนําเข้าข้อมูล</h4>
                        <li><a href="{{ route('importRoutine.index') }}"><i class="fa fa-table yellow_color"></i>
                                <span>รายวัน</span></a></li>
                        <li><a href="{{ route('importMonths.index') }}"><i class="fa fa-table yellow_color"></i>
                                <span>รายเดือน</span></a>
                        </li>

                        <h4>รายงาน</h4>
                        <li class="active">
                            <a href="#dashboard2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <i class="fa fa-dashboard yellow_color"></i>
                                <span>รายงานผลการดําเนินงานรายวัน</span></a>
                            <ul class="collapse list-unstyled" id="dashboard2">
                                <li class="active">
                                    <a data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                        <i class="fa fa-dashboard yellow_color"></i>
                                        <span>ศาสนสถาน</span></a>
                                    <ul class="collapse list-unstyled" id="dashboard3">
                                        <li><a href="{{ route('religiousReportZone.index') }}">>
                                                <span>ผลการดําเนินงานระดับภาค</span></a></li>
                                        <li><a href="{{ route('religiousReportProvince.index') }}">>
                                                <span>ผลการดําเนินงานระดับจังหวัด</span></a>
                                        </li>
                                        <li><a href="{{ route('religiousReportOverview.index') }}">>
                                                <span>ผลการดําเนินงานภาพรวม</span></a></li>
                                        <li><a href="{{ route('religiousReportDistrict.index') }}">>
                                                <span>ผลการดําเนินงานระดับอำเภอ/เขต</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                        <i class="fa fa-dashboard yellow_color"></i>
                                        <span>มาตราการการบําบัดยาเสพติด</span></a>
                                    <ul class="collapse list-unstyled" id="dashboard4">
                                        <li><a href="{{ route('cbtxesReport.index') }}">>
                                                <span>รายงานผลการดําเนินงานการบําบัดฟื้นฟูผู้ใช้ยาเสพติดโดยชุมชนเป็นศูนย์กลาง(CBTx)</span></a>
                                        </li>
                                        <li><a href="{{ route('cbtxesReportSpecific.index') }}">>
                                                <span>รายงานผลการดําเนินงานการบําบัดฟื้นฟูผู้ใช้ยาเสพติดโดยชุมชนเป็นศูนย์กลาง(CBTx)
                                                    รายบุคคล</span></a></li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                        <i class="fa fa-dashboard yellow_color"></i>
                                        <span>มาตราการการบําบัดยาเสพติด<br>(เยาวชนนอกสถานศึกษา)</span></a>
                                    <ul class="collapse list-unstyled" id="dashboard5">
                                        <li><a href="{{ route('youthOutReportSum.index') }}">>
                                                <span>สรุปผลปฏิบัติงาน</span></a></li>
                                        <li><a href="{{ route('youthOutReportOverview.index') }}">>
                                                <span>ผลการดําเนินงานภาพรวม</span></a></li>
                                        <li><a href="{{ route('youthOutReportProvince.index') }}">>
                                                <span>ผลการดําเนินงานระดับจังหวัด</span></a>
                                        </li>
                                        <li><a href="{{ route('youthOutReportDistrict.index') }}">>
                                                <span>ผลการดําเนินงานระดับอำเภอ/เขต</span></a>
                                        </li>
                                        <li><a href="{{ route('youthOutReportSubDistrict.index') }}">>
                                                <span>ผลการดําเนินงานระดับตำบล/แขวง</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                        <i class="fa fa-dashboard yellow_color"></i>
                                        <span>พื้นที่เสี่ยง</span></a>
                                    <ul class="collapse list-unstyled" id="dashboard6">
                                        <li><a href="{{ route('riskAreaReportTypeSubdistrict.index') }}">>
                                                <span>ผลการดําเนินงานแยกตามประเภทระดับตําบล/แขวง</span></a></li>
                                        <li><a href="{{ route('riskAreaReportTypeDistrict.index') }}">>
                                                <span>ผลการดําเนินงานแยกตามประเภทระดับอำเภอ/เขต</span></a></li>
                                        <li><a href="{{ route('riskAreaReportTypeProvince.index') }}">>
                                                <span>ผลการดําเนินงานแยกตามประเภทระดับจังหวัด</span></a></li>
                                        <li><a href="{{ route('riskAreaReportResultDistrict.index') }}">>
                                                <span>ผลการดําเนินงานระดับอําเภอ/เขต</span></a></li>
                                        <li><a href="{{ route('riskAreaReportResultSubdistrict.index') }}">>
                                                <span>ผลการดําเนินงานระดับตำบล/แขวง</span></a>
                                        </li>
                                        <li><a href="{{ route('riskAreaReportOverview.index') }}">>
                                                <span>ผลการดําเนินงานภาพรวม</span></a></li>
                                        <li><a href="{{ route('riskAreaReportSum.index') }}">>
                                                <span>สรุปผลปฏิบัติงาน</span></a></li>
                                        <li><a href="{{ route('villageTrainingSum.index') }}">>
                                                <span>สรุปผลปฏิบัติงาน</span></a></li>
                                        <li><a href="{{ route('villageTrainingOverview.index') }}">>
                                                <span>ผลการดําเนินงานภาพรวม</span></a></li>
                                        <li><a href="{{ route('villageTrainingProvince.index') }}">>
                                                <span>ผลการดําเนินงานระดับจังหวัด</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        <li class="active">
                            <a data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <i class="fa fa-dashboard yellow_color"></i>
                                <span>ผลการดําเนินงานในสถานศึกษา</span></a>
                            <ul class="collapse list-unstyled" id="dashboard7">
                                <li><a href="{{ route('schoolReportStratigic.index') }}">>
                                        <span>รายงานผลการดําเนินงานตามแผนยุทธศาสตร์การป้องกันยาเสพติดในสถานศึกษาประจำปี</span></a>
                                </li>
                                <li><a href="{{ route('schoolReportChildren.index') }}">>
                                        <span>รายงานผลการดําเนินงานภาพรวมด้านการป้องกันยาเสพติดในศูนย์พัฒนาเด็กเล็ก(ศพด.)</span></a>
                                </li>
                                <li><a href="{{ route('schoolReport.index') }}">>
                                        <span>ผลการดําเนินงานป้องกันและแก้ไขปัญหายาเสพติดในสถานศึกษา</span></a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <i class="fa fa-dashboard yellow_color"></i>
                                <span>ผลแบบสํารวจสภาพปัญหายาเสพติด<br>ในระดับหมู่บ้าน/ชุมชน</span></a>
                            <ul class="collapse list-unstyled" id="dashboard8">
                                <li><a href="{{ route('communityReportRequest.index') }}">>
                                        <span>รายชื่อลงทะเบียนขอใช้สิทธิ์</span></a></li>
                                <li><a href="{{ route('communityReportPerson.index') }}">>
                                        <span>รายชื่อผู้เกี่ยวข้องกับยาเสพติด</span></a></li>
                                <li><a href="{{ route('communityReportStatistical.index') }}">>
                                        <span>ผลการประเมินส่งสํานักงานสถิติฯ</span></a></li>
                                <li><a href="{{ route('communityReportOverviewSub.index') }}">> <span>แบบสรุปภาพรวม
                                            จําแนกรายตําบล</span></a></li>
                                <li><a href="{{ route('communityReportOverviewProvince.index') }}">>
                                        <span>แบบสรุปภาพรวม จําแนกรายจังหวัด</span></a></li>
                                <li><a href="{{ route('communityReportDetailVillage.index') }}">> <span>แบบละเอียด
                                            จําแนกรายหมู่บ้าน/ชุมชน</span></a>
                                </li>
                                <li><a href="{{ route('communityReportOverviewDistrict.index') }}">>
                                        <span>แบบสรุปภาพรวม จําแนกรายอําเภอ/เขต</span></a>
                                </li>
                                <li><a href="{{ route('communityReportOverviewVillage.index') }}">>
                                        <span>แบบสรุปภาพรวม จําแนกรายหมู่บ้าน/ชุมชน</span></a>
                                </li>
                                <li><a href="{{ route('communityReportAmountSubdistrict.index') }}">>
                                        <span>รายงานสรุปจํานวน หมู่บ้าน/ชุมชน
                                            ระดับตําบล</span></a></li>
                                <li><a href="{{ route('communityReportAmountProvince.index') }}">>
                                        <span>รายงานสรุปจํานวน หมู่บ้าน/ชุมชน
                                            ระดับจังหวัด</span></a></li>
                                <li><a href="{{ route('communityReportAmountDistrict.index') }}">>
                                        <span>รายงานสรุปจํานวน หมู่บ้าน/ชุมชน
                                            ระดับอำเภอ</span></a></li>
                                <li><a href="{{ route('communityReportVillage.index') }}">>
                                        <span>รายชื่อหมู่บ้าน/ชุมชนทั้งหมดที่ยังไม่ส่งแบบประเมิน</span></a></li>
                                <li><a href="{{ route('communityReportProblem.index') }}">>
                                        <span>จําแนกสภาพปัญหาและสถานะความเข้มแข็ง
                                            จําแนกรายหมู่บ้าน/ชุมชน</span></a></li>
                                <li><a href="{{ route('communityReportVillageCompare.index') }}">>
                                        <span>ตารางเปรียบเทียบผลการสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน
                                            เปรียบเทียบระหว่างปีงบประมาณ</span></a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="#dashboard9" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">
                                <i class="fa fa-dashboard yellow_color"></i>
                                <span>ผลการดําเนินงานรายเดือน</span></a>
                            <ul class="collapse list-unstyled" id="dashboard9">
                                <li class="active">
                                    <a data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                        <i class="fa fa-dashboard yellow_color"></i>
                                        <span>โครงการสําคัญ(Highlight)</span></a>
                                    <ul class="collapse list-unstyled" id="dashboard11">
                                        <li><a href="{{ route('monthReportHighlight.index') }}">>
                                                <span>รายงานโครงการสําคัญ(Highlight)</a></span></a></li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                        <i class="fa fa-dashboard yellow_color"></i>
                                        <span>แผนบริหารจัดการ</span></a>
                                    <ul class="collapse list-unstyled" id="dashboard10">
                                        <li><a href="{{ route('monthReportBudProvince.index') }}">>
                                                <span>รายงานผลการใช้จ่ายงบประมาณจําแนกตามมาตรการ
                                                    ระดับจังหวัด</a></span></a></li>
                                        <li><a href="{{ route('monthReportBudZone.index') }}">>
                                                <span>รายงานผลการใช้จ่ายงบประมาณจําแนกตามมาตรการ
                                                    ระดับภาค</a></span></a></li>
                                        <li><a href="{{ route('monthReportMeetingProvince.index') }}">>
                                                <span>ผลการดําเนินงานจัดประชุม ศอ.ปส.จ/กทม.
                                                    ระดับจังหวัด</a></span></a></li>
                                        <li><a href="{{ route('monthReportMeetingZone.index') }}">>
                                                <span>ผลการดําเนินงานจัดประชุม ศอ.ปส.จ/กทม.
                                                    ระดับภาค</a></span></a></li>
                                        <li><a href="{{ route('monthReportNewsProvince.index') }}">>
                                                <span>รายงานสถานการณ์ยาเสพติด(โต๊ะข่าว)
                                                    ระดับจังหวัด</a></span></a></li>
                                        <li><a href="{{ route('monthReportNewsZone.index') }}">>
                                                <span>รายงานสถานการณ์ยาเสพติด(โต๊ะข่าว)
                                                    ระดับภาค</a></span></a></li>
                                        <li><a href="{{ route('monthReportSpendingZone.index') }}">>
                                                <span>รายงานผลการใช้จ่ายงบประมาณ
                                                    ระดับภาค</a></span></a></li>
                                        <li><a href="{{ route('monthReportSpendingProvince.index') }}">>
                                                <span>รายงานผลการใช้จ่ายงบประมาณ
                                                    ระดับจังหวัด</a></span></a></li>
                                        <li><a href="{{ route('monthReportOverviewProvince.index') }}">>
                                                <span>ผลการดําเนินงานภาพรวม
                                                    ระดับจังหวัด</a></span></a></li>
                                        <li><a href="{{ route('monthReportOverviewZone.index') }}">>
                                                <span>ผลการดําเนินงานภาพรวม
                                                    ระดับภาค</a></span></a></li>
                                        <li><a href="{{ route('monthReportMeetingDoc.index') }}">>
                                                <span>เอกสารแนบการประชุมศอ.ปส.จ.</a></span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <h4>การบันทึกข้อมูล</h4>
                        <li><a href="{{ route('riskArea.index') }}"><i
                                    class="fa fa-clock-o yellow_color"></i><span>พื้นที่เสี่ยง</span></a>
                        <li><a href="{{ route('religiouses.index') }}"><i class="fa fa-clock-o yellow_color"></i>
                                <span>ศาสนสถาน</span></a>
                        <li><a href="{{ route('schoolTarget.index') }}"><i
                                    class="fa fa-clock-o yellow_color"></i><span>เป้าหมายโรงเรียน</span></a>
                        <li><a href="{{ route('businesses.index') }}"><i
                                    class="fa fa-clock-o yellow_color"></i><span>สถานประกอบกิจการ</span></a>
                        <li><a href="{{ route('policeSchool.index') }}"><i class="fa fa-clock-o yellow_color"></i>
                                <span>ตํารวจประสานโรงเรียน</span></a>
                        <li><a href="{{ route('youthOut.index') }}"><i class="fa fa-clock-o yellow_color"></i>
                                <span>เยาวชนนอกสถานศึกษา</span></a>
                        <li><a href="{{ route('cooperatePeople.index') }}"><i class="fa fa-clock-o yellow_color"></i>
                                <span>การมีส่วนร่วมภาคประชาชน</span></a>
                        <li><a href="{{ route('villageTraining.index') }}"><i class="fa fa-clock-o yellow_color"></i>
                                <span>การอบรมเครือข่ายหมู่บ้าน/<br>ชุมชนร่วมใจต้านยาเสพติด</span></a>
                        <li><a href="{{ route('cbTx.index') }}"><i class="fa fa-clock-o yellow_color"></i>
                                <span>ชุมชนเป็นศูนย์กลาง(CBTx)</span></a>
                        <li><a href="{{ route('cooperation.index') }}"><i class="fa fa-clock-o yellow_color"></i>
                                <span>ความร่วมมือระหว่างประเทศ</span></a>
                        <li><a href="{{ route('mangeIntegration.index') }}"><i
                                    class="fa fa-clock-o yellow_color"></i>
                                <span>มาตราการการบริหารจัดการ<br>อย่างบูรณาการ</span></a></li>
                        <li class="active">
                            <a href="#dashboard" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">
                                <i class="fa fa-clock-o yellow_color"></i>
                                <span>ข้อมูลบุคลากร<br>ที่ปฏิบัติภารกิจด้านยาเสพติด</span></a>
                            <ul class="collapse list-unstyled" id="dashboard">
                                <li><a href="{{ route('staffSum.index') }}">> <span>รายงานสรุปจำนวน</span></a></li>
                                <li><a href="{{ route('staffEmployees.index') }}">>
                                        <span>รายงานรายชื่อลูกจ้าง</span></a></li>
                                <li><a href="{{ route('staffNewcontracts.index') }}">>
                                        <span>กรณีต่อสัญญาฉบับใหม่</span></a></li>
                                <li><a href="{{ route('staffInfos.index') }}">>
                                        <span>การบันทึกข้อมูลบุคลากร</span></a>
                                </li>
                                <li><a href="{{ route('staffPerformances.index') }}">>
                                        <span>รายงานสรุปผลการปฏิบัติงาน</span></a></li>
                                <li><a href="{{ route('staffStatistics.index') }}">>
                                        <span>รายงานสถิตินําเข้าผลการปฏิบัติงาน</span></a></li>
                                <li><a href="{{ route('staffDetails.index') }}">>
                                        <span>รายงานรายละเอียดผลการปฏิบัติงาน</span></a></li>
                            </ul>
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
                                                    src="template/images/layout_img/user_img.jpg"
                                                    alt="#" /><span class="name_user">John David</span></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="profile.html">ประวัติผู้ใช้งาน</a>
                                                {{-- <a class="dropdown-item" href="settings.html">Settings</a>
                                                <a class="dropdown-item" href="help.html">Help</a> --}}
                                                <a class="dropdown-item" href="#">ออกจากระบบ <i
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
            let table_1 = new DataTable('#myTable', {
                language: {
                    info: "แสดงรายการที่ _START_ ถึง _END_ จาก _TOTAL_ รายการ",
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/th.json',
                },
            });
            let table_2 = new DataTable('#myGroup', {
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
