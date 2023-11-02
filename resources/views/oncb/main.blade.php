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
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>ข้อมูลใช้งานทั้งหมด (TEST)</h3>
            </div>
        </div>
        <hr>
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
    @endsection
</body>

</html>
