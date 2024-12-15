<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>danh sách sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <h1>danh sách sinh viên</h1>
        <div class="card">
            <div class="card-header">
                <h1>danh sách sinh viên</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>mã sinh viên</th>
                            <th>họ sinh viên</th>
                            <th>tên sin viên</th>
                            <th>giới tính</th>
                            <th>ngày sinh</th>
                            <th>nơi sinh</th>
                            <th>mã khoa</th>
                            <th>học bổng</th>
                            <th>chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt=0
                        @endphp
                        @foreach ($nvsSinhVien as $item)
                            @php
                                $stt++;
                            @endphp
                            <tr>
                                <td class="text-center">{{$stt}}</td>
                                <td>{{$item->nvsMaSV}}</td>
                                <td>{{$item->nvsHoSV}}</td>
                                <td>{{$item->nvsTenSV}}</td>
                                <td>{{$item->nvsPhai}}</td>
                                <td>{{$item->nvsNgaySinh}}</td>
                                <td>{{$item->nvsNoiSinh}}</td>
                                <td>{{$item->nvsMaKH}}</td>
                                <td class="text-right">{{$item->nvsHocBong}}</td>
                                <td class="text-center">
                                    View/Edit/Delete
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <h3>tổng số sinh viên: {{$nvsSinhVien->count()}}</h3>
                <a href="/nvs-sinhviens/create" class="btn btn-primary">thêm mới</a>
            </div>
        </div>
    </section>
</body>
</html>
