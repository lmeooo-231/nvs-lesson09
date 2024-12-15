<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thêm mới sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        input{
            border-radius: 0 !important;
        }
    </style>
</head>
<body>
    <section class="container">
        <form action="{{route('NvsSinhVien.nvsCreateSubmit')}}" method="post">
        <div class="card">
            <div class="card-header">
                <h1>thêm mới sinh viên</h1>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="nvsMaSV"class="col-sm-2 col-form-label">mã sinh viên</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nvsMaSV" name="nvsMaSV">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nvsHoSV"class="col-sm-2 col-form-label">họ sinh viên</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nvsHoSV" name="nvsHoSV">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nvsTenSV"class="col-sm-2 col-form-label">tên sinh viên</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nvsTenSV" name="nvsTenSV">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nvsPhai"class="col-sm-2 col-form-label">giới tính</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nvsPhai" name="nvsPhai">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nvsNgaySinh"class="col-sm-2 col-form-label">Ngày Sinh</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="nvsNgaySinh" name="nvsNgaySinh">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nvsNoiSinh"class="col-sm-2 col-form-label">nơi sinh</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nvsNoiSinh" name="nvsNoiSinh">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nvsMaKH"class="col-sm-2 col-form-label">khoa</label>
                    <div class="col-sm-10">
                        <select name="nvsMaKH" id="nvsMaKH">
                            <option value="">--chọn khoa</option>
                            <option value="">Anh Văn</option>
                            <option value="">tin học</option>
                            <option value="">triết học</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">thêm mới</button>
                <a href="/nvs-sinhvien" class="btn btn-secondary">quay lại</a>
            </div>
        </div>
        </form>
    </section>
</body>
</html>