<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONCB GAP</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    @extends('layout.layout')

    @section('content')
        <div class="row" >
            <div class="col-lg-12 text-center">
                <label>จังหวัด</label>
                <select id="dropdownOptions_1">
                    <option selected disabled>เลือกจังหวัด</option>
                    <option value="1">ชลบุรี</option>
                </select>
                <br>
                <label>อำเภอ</label>
                <select id="dropdownOptions_2">
                    <option selected disabled>เลือกอำเภอ</option>
                    <option value="1">สัตหีบ</option>
                </select>
            </div>
        </div>

        <table id="myTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="7%">ลำดับ</th>
                    <th >หมายเลขบัตร</th>
                    <th>ชื่อ-สกุล</th>
                    <th>ตรวจสอบ</th>
                    <th>ยืนยัน</th>
                    <th>อนุมัติ</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($total_user as $item) --}}
                    <tr>
                        <td>1</td>
                        <td>1234567891234</td>
                        <td>ทดสอบ ใจเย็น</td>
                        <td><button type="button" class="btn btn-warning">  กำลังดำเนินการ...</button></td>
                        <td><button type="button" class="btn btn-secondary">ยืนยัน</button></td>
                        <td><button type="button" class="btn btn-secondary">อนุมัติ</button></td>
                        <td><button type="button" class="btn btn-info">แก้ไข</button></td>
                    </tr>   
                {{-- @endforeach --}}
                <tr>
                    <td>1</td>
                    <td>1234567891234</td>
                    <td>ทดสอบ ใจเย็น</td>
                    <td><button type="button" class="btn btn-success">สำเร็จ</button></td>
                    <td><button type="button" class="btn btn-primary">ยืนยัน</button></td>
                    <td><button type="button" class="btn btn-secondary">อนุมัติ</button></td>
                    <td><button type="button" class="btn btn-info">แก้ไข</button></td>
                </tr> 
            </tbody>
        </table>
    @endsection
</body>

</html>
