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
    @extends('layout.two_table')

    @section('content')
        <div class="container mt-2">
            <div class="row ">
                <div class="col-lg-12 text-center">
                    <h5>จังหวัด</h5>
                </div>

                <select class="form-select col-lg-12" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

            </div>
            <hr>
            {{-- <div class="row">
                <div class="col-lg-12 text-center">
                    <h5><span class="able_animation"></span> ผู้ใช้งานที่เข้าใช้งานได้</h5>
                </div>
            </div> --}}
            <table id="myTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="15%">ลำดับ</th>
                        <th>หมายเลขบัตร</th>
                        <th>ชื่อ-สกุล</th>
                        <th>ตรวจสอบ</th>
                        <th>ยืนยัน</th>
                        <th>อนุมัติ</th>
                        <th width="15%"> </th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>123456</td>
                        <td>ทดสอบ1</td>
                        <td><button type="button" class="btn btn-warning">กำลังดำเนินการ...</button></td>
                        <td><button type="button" class="btn btn-secondary">ยืนยัน</button></td>
                        <td><button type="button" class="btn btn-secondary">อนุมัติ</button></td>
                        <td><button type="button" class="btn btn-info">แก้ไข</button></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>123456</td>
                        <td>ทดสอบ2</td>
                        <td><button type="button" class="btn btn-success">สำเร็จ</button></td>
                        <td><button type="button" class="btn btn-primary">ยืนยัน</button></td>
                        <td><button type="button" class="btn btn-secondary">อนุมัติ</button></td>
                        <td><button type="button" class="btn btn-info">แก้ไข</button></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>123456</td>
                        <td>ทดสอบ3</td>
                        <td><button type="button" class="btn btn-success">สำเร็จ</button></td>
                        <td><button type="button" class="btn btn-success">ยืนยัน</button></td>
                        <td><button type="button" class="btn btn-success">อนุมัติ</button></td>
                        <td><button type="button" class="btn btn-info">แก้ไข</button></td>
                    </tr>

                </tbody>
            </table>
        </div>
    @endsection
</body>

</html>
