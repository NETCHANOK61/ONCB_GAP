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
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h2>คำขอสร้างบัญชีใหม่</h2>
                    </div>
                </div>
            </div>
            <!-- table -->
            <div class="row column2 graph margin_bottom_30">
                <div class="col-md-l2 col-lg-12">
                    <div class="white_shd full">
                        <div class="full graph_head">
                            <div class="row">
                                <div class="col-lg-10 text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3>จังหวัด</h3>
                                        </div>
                                        <div class="col-6"><select class="form-select" aria-label="Default select example">
                                                <option selected>นนทบุรี</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <h3>อำเภอ</h3>
                                        </div>
                                        <div class="col-6"><select class="form-select" aria-label="Default select example">
                                                <option selected>ทั้งหมด</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <table id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="15%">ลำดับ</th>
                                        <th>หมายเลขบัตร</th>
                                        <th>ชื่อ-สกุล</th>
                                        <th>ตรวจสอบ</th>
                                        <th>ยืนยัน</th>
                                        <th>อนุมัติ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1234567891234</td>
                                        <td>ทดสอบ ใจเย็นเย็น</td>
                                        <td><button type="button" class="btn btn-warning"><i class="fa fa-clock-o"></i>
                                                กำลังดำเนินการ...</button>
                                        </td>
                                        <td><button type="button" class="btn btn-secondary"><i
                                                    class="fa fa-check-circle"></i> ยืนยัน</button></td>
                                        <td><button type="button" class="btn btn-secondary"><i
                                                    class="fa fa-check-circle"></i> อนุมัติ</button></td>
                                        <td><button type="button" class="btn btn-info"><i
                                                    class="fa fa-pencil">แก้ไข</i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
</body>

</html>
