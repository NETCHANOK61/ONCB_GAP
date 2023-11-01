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
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h5>รายงาน -> รายงานผลการดําเนินงานรายวัน -> พื้นที่เสี่ยง -> ผลการดําเนินงานระดับตําบล/แขวง</h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h5>ผู้ใช้งานที่เข้าใช้งานได้</h5>
                </div>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Group ID</th>
                    <th>username</th>
                    <th>กลุ่มผู้ใช้งาน</th>
                    <th>แผนก หรือหน่วยงาน</th>
                </tr>
                @foreach ($total_user as $item)
                    <tr>
                        <td>{{ $item->group_id }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->user_type }}</td>
                        <td>{{ $item->department }}</td>
                    </tr>
                @endforeach
            </table>
            <hr>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h5>ผู้ใช้งานในกลุ่มเดียวกัน <span class="text-danger">ที่ไม่สามารถเข้าใช้งานได้</span></h5>
                </div>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Group ID</th>
                    <th>username</th>
                    <th>กลุ่มผู้ใช้งาน</th>
                    <th>แผนก หรือหน่วยงาน</th>
                </tr>
                @foreach ($unable as $item)
                    <tr>
                        <td>{{ $item->group_id }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->user_type }}</td>
                        <td>{{ $item->department }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endsection
</body>

</html>
