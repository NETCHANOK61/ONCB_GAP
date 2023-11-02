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
        jQuery(document).ready(function($) {
            $("#menu-toggle").click(function(e) {
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
                <hr>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('religiousReportZone.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> ศาสนสถาน -> ผลการดําเนินงานระดับภาค</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('religiousReportProvince.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> ศาสนสถาน -> ผลการดําเนินงานระดับจังหวัด</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('religiousReportOverview.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> ศาสนสถาน -> ผลการดําเนินงานภาพรวม</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('religiousReportDistrict.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> ศาสนสถาน -> ผลการดําเนินงานระดับอำเภอ/เขต</a>
                <hr>
                <a class="list-group-item list-group-item-action bg-light" href="{{ route('cbtxesReport.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> มาตราการการบําบัดยาเสพติด ->
                    รายงานผลการดําเนินงานการบําบัดฟื้นฟูผู้ใช้ยาเสพติดโดยชุมชนเป็นศูนย์กลาง (CBTx)</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('cbtxesReportSpecific.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> มาตราการการบําบัดยาเสพติด ->
                    รายงานผลการดําเนินงานการบําบัดฟื้นฟูผู้ใช้ยาเสพติดโดยชุมชนเป็นศูนย์กลาง (CBTx) รายบุคคล</a>
                <hr>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('youthOutReportSum.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> มาตราการป้องกันยาเสพติด (เยาวชนนอกสถานศึกษา) -> สรุปผลปฏิบัติงาน</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('youthOutReportOverview.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> มาตราการป้องกันยาเสพติด (เยาวชนนอกสถานศึกษา) ->
                    ผลการดําเนินงานภาพรวม</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('youthOutReportProvince.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> มาตราการป้องกันยาเสพติด (เยาวชนนอกสถานศึกษา) ->
                    ผลการดําเนินงานระดับจังหวัด</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('youthOutReportDistrict.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> มาตราการป้องกันยาเสพติด (เยาวชนนอกสถานศึกษา) ->
                    ผลการดําเนินงานระดับอำเภอ/เขต</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('youthOutReportSubDistrict.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> มาตราการป้องกันยาเสพติด (เยาวชนนอกสถานศึกษา) ->
                    ผลการดําเนินงานระดับตำบล/แขวง</a>
                <hr>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('riskAreaReportTypeSubdistrict.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> พื้นที่เสี่ยง -> ผลการดําเนินงานแยกตามประเภทระดับตําบล/แขวง</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('riskAreaReportTypeDistrict.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> พื้นที่เสี่ยง -> ผลการดําเนินงานแยกตามประเภทระดับอำเภอ/เขต</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('riskAreaReportTypeProvince.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> พื้นที่เสี่ยง -> ผลการดําเนินงานแยกตามประเภทระดับจังหวัด</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('riskAreaReportResultDistrict.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> พื้นที่เสี่ยง -> ผลการดําเนินงานระดับอําเภอ/เขต</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('riskAreaReportResultSubdistrict.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> พื้นที่เสี่ยง -> ผลการดําเนินงานระดับตำบล/แขวง</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('riskAreaReportOverview.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> พื้นที่เสี่ยง -> ผลการดําเนินงานภาพรวม</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('riskAreaReportSum.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> พื้นที่เสี่ยง -> สรุปผลปฏิบัติงาน</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('villageTrainingSum.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> พื้นที่เสี่ยง -> สรุปผลปฏิบัติงาน</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('villageTrainingOverview.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> พื้นที่เสี่ยง -> ผลการดําเนินงานภาพรวม</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('villageTrainingProvince.index') }}">
                    รายงานผลการดําเนินงานรายวัน -> พื้นที่เสี่ยง -> ผลการดําเนินงานระดับจังหวัด</a>
                <hr>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('schoolReportStratigic.index') }}">
                    ผลการดําเนินงานในสถานศึกษา ->
                    รายงานผลการดําเนินงานตามแผนยุทธศาสตร์การป้องกันยาเสพติดในสถานศึกษาประจำปี</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('schoolReportChildren.index') }}">
                    ผลการดําเนินงานในสถานศึกษา ->
                    รายงานผลการดําเนินงานภาพรวมด้านการป้องกันยาเสพติดในศูนย์พัฒนาเด็กเล็ก (ศพด.)</a>
                <a class="list-group-item list-group-item-action bg-light" href="{{ route('schoolReport.index') }}">
                    ผลการดําเนินงานในสถานศึกษา ->
                    ผลการดําเนินงานป้องกันและแก้ไขปัญหายาเสพติดในสถานศึกษา</a>
                <hr>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('communityReportRequest.index') }}">
                    ผลแบบสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน -> รายชื่อลงทะเบียนขอใช้สิทธิ์</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('communityReportPerson.index') }}">
                    ผลแบบสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน -> รายชื่อผู้เกี่ยวข้องกับยาเสพติด</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('communityReportStatistical.index') }}">
                    ผลแบบสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน -> ผลการประเมินส่งสํานักงานสถิติฯ</a>
                <hr>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('communityReportOverviewSub.index') }}">
                    ผลแบบสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน -> แบบสรุปภาพรวม จําแนกรายตําบล</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('communityReportOverviewProvince.index') }}">
                    ผลแบบสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน -> แบบสรุปภาพรวม จําแนกรายจังหวัด</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('communityReportDetailVillage.index') }}">
                    ผลแบบสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน -> แบบละเอียด จําแนกรายหมู่บ้าน/ชุมชน</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('communityReportOverviewDistrict.index') }}">
                    ผลแบบสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน -> แบบสรุปภาพรวม จําแนกรายอําเภอ/เขต</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('communityReportOverviewVillage.index') }}">
                    ผลแบบสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน -> แบบสรุปภาพรวม จําแนกรายหมู่บ้าน/ชุมชน</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('communityReportAmountSubdistrict.index') }}">
                    ผลแบบสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน -> รายงานสรุปจํานวน หมู่บ้าน/ชุมชน ระดับตําบล</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('communityReportAmountProvince.index') }}">
                    ผลแบบสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน -> รายงานสรุปจํานวน หมู่บ้าน/ชุมชน
                    ระดับจังหวัด</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('communityReportAmountDistrict.index') }}">
                    ผลแบบสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน -> รายงานสรุปจํานวน หมู่บ้าน/ชุมชน
                    ระดับอำเภอ</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('communityReportVillage.index') }}">
                    ผลแบบสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน ->
                    รายชื่อหมู่บ้าน/ชุมชนทั้งหมดที่ยังไม่ส่งแบบประเมิน</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('communityReportProblem.index') }}">
                    ผลแบบสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน ->
                    จําแนกสภาพปัญหาและสถานะความเข้มแข็ง จําแนกรายหมู่บ้าน/ชุมชน</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('communityReportVillageCompare.index') }}">
                    ผลแบบสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน ->
                    ตารางเปรียบเทียบผลการสํารวจสภาพปัญหายาเสพติดในระดับหมู่บ้าน/ชุมชน เปรียบเทียบระหว่างปีงบประมาณ</a>
                <hr>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('monthReportHighlight.index') }}">
                    ผลการดําเนินงานรายเดือน -> โครงการสําคัญ (Highlight) -> รายงานโครงการสําคัญ (Highlight)</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('monthReportBudProvince.index') }}">
                    ผลการดําเนินงานรายเดือน -> แผนบริหารจัดการ -> รายงานผลการใช้จ่ายงบประมาณจําแนกตามมาตรการ
                    ระดับจังหวัด</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('monthReportBudZone.index') }}">
                    ผลการดําเนินงานรายเดือน -> แผนบริหารจัดการ -> รายงานผลการใช้จ่ายงบประมาณจําแนกตามมาตรการ
                    ระดับภาค</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('monthReportMeetingProvince.index') }}">
                    ผลการดําเนินงานรายเดือน -> แผนบริหารจัดการ -> ผลการดําเนินงานจัดประชุม ศอ.ปส.จ/กทม. ระดับจังหวัด</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('monthReportMeetingZone.index') }}">
                    ผลการดําเนินงานรายเดือน -> แผนบริหารจัดการ -> ผลการดําเนินงานจัดประชุม ศอ.ปส.จ/กทม. ระดับภาค</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('monthReportNewsProvince.index') }}">
                    ผลการดําเนินงานรายเดือน -> แผนบริหารจัดการ -> รายงานสถานการณ์ยาเสพติด (โต๊ะข่าว) ระดับจังหวัด</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('monthReportNewsZone.index') }}">
                    ผลการดําเนินงานรายเดือน -> แผนบริหารจัดการ -> รายงานสถานการณ์ยาเสพติด (โต๊ะข่าว) ระดับภาค</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('monthReportSpendingZone.index') }}">
                    ผลการดําเนินงานรายเดือน -> แผนบริหารจัดการ -> รายงานผลการใช้จ่ายงบประมาณ ระดับภาค</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('monthReportSpendingProvince.index') }}">
                    ผลการดําเนินงานรายเดือน -> แผนบริหารจัดการ -> รายงานผลการใช้จ่ายงบประมาณ ระดับจังหวัด</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('monthReportOverviewProvince.index') }}">
                    ผลการดําเนินงานรายเดือน -> แผนบริหารจัดการ -> ผลการดําเนินงานภาพรวม ระดับจังหวัด</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('monthReportOverviewZone.index') }}">
                    ผลการดําเนินงานรายเดือน -> แผนบริหารจัดการ -> ผลการดําเนินงานภาพรวม ระดับภาค</a>
                <a class="list-group-item list-group-item-action bg-light"
                    href="{{ route('monthReportMeetingDoc.index') }}">
                    ผลการดําเนินงานรายเดือน -> แผนบริหารจัดการ -> เอกสารแนบการประชุมศอ.ปส.จ.</a>
            </div>

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
