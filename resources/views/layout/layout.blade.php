<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        })
    </script>
    <style>
        body {
            overflow-x: hidden;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin .25s ease-out;
            -moz-transition: margin .25s ease-out;
            -o-transition: margin .25s ease-out;
            transition: margin .25s ease-out;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">NISPA</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action bg-light" href="{{ route('main.index') }}">หน้าแรก</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('riskArea.index') }}">การบันทึกข้อมูล -> พื้นที่เสี่ยง</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('religiouses.index') }}">การบันทึกข้อมูล -> ศาสนสถาน</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('schoolTarget.index') }}">การบันทึกข้อมูล -> เป้าหมายโรงเรียน</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('businesses.index') }}">การบันทึกข้อมูล -> สถานประกอบกิจการ</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('policeSchool.index') }}">การบันทึกข้อมูล -> ตํารวจประสานโรงเรียน</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('youthOut.index') }}">การบันทึกข้อมูล -> เยาวชนนอกสถานศึกษา</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('cooperatePeople.index') }}">การบันทึกข้อมูล -> การมีส่วนร่วมภาคประชาชน</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('villageTraining.index') }}">การบันทึกข้อมูล ->
                    การอบรมเครือข่ายหมู่บ้าน/ชุมชนร่วมใจต้านยาเสพติด</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('cbTx.index') }}">การบันทึกข้อมูล ->
                    ชุมชนเป็นศูนย์กลาง (CBTx)</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('cooperation.index') }}">การบันทึกข้อมูล ->
                    ความร่วมมือระหว่างประเทศ</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('mangeIntegration.index') }}">การบันทึกข้อมูล ->
                    มาตราการการบริหารจัดการอย่างบูรณาการ</a>
                <hr>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('staffSum.index') }}">การบันทึกข้อมูล ->
                    ข้อมูลบุคลากรที่ปฏิบัติภารกิจด้านยาเสพติด -> รายงานสรุปจํานวน</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('staffEmployees.index') }}">การบันทึกข้อมูล ->
                    ข้อมูลบุคลากรที่ปฏิบัติภารกิจด้านยาเสพติด -> รายงานรายชื่อลูกจ้าง</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('staffNewcontracts.index') }}">การบันทึกข้อมูล ->
                    ข้อมูลบุคลากรที่ปฏิบัติภารกิจด้านยาเสพติด -> กรณีต่อสัญญาฉบับใหม่</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('staffInfos.index') }}">การบันทึกข้อมูล ->
                    ข้อมูลบุคลากรที่ปฏิบัติภารกิจด้านยาเสพติด -> การบันทึกข้อมูลบุคลากร</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('staffPerformances.index') }}">การบันทึกข้อมูล ->
                    ข้อมูลบุคลากรที่ปฏิบัติภารกิจด้านยาเสพติด -> รายงานสรุปผลการปฏิบัติงาน</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('staffStatistics.index') }}">การบันทึกข้อมูล ->
                    ข้อมูลบุคลากรที่ปฏิบัติภารกิจด้านยาเสพติด -> รายงานสถิตินําเข้าผลการปฏิบัติงาน</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('staffDetails.index') }}">การบันทึกข้อมูล ->
                    ข้อมูลบุคลากรที่ปฏิบัติภารกิจด้านยาเสพติด -> รายงานรายละเอียดผลการปฏิบัติงาน</a>
                <hr>
                <a class="list-group-item list-group-item-action bg-light" href="{{ route('importRoutine.index') }}">
                    สถานะการนําเข้าข้อมูล -> รายวัน</a>
                <a class="list-group-item list-group-item-action bg-light" href="{{ route('importMonths.index') }}">
                    สถานะการนําเข้าข้อมูล -> รายเดือน</a>

            </div>

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>

            <div class="content">
                @yield('content') <!-- This will display the content from child views -->
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>

</html>