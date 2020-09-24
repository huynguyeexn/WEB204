<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3 class="alert alert-success">QUẢN LÝ KHÁCH HÀNG</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>MÃ KHÁCH HÀNG</label>
                    <input name="ma_kh" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                    <label>HỌ VÀ TÊN</label>
                    <input name="ho_ten" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>MẬT KHẨU</label>
                    <input name="mat_khau" class="form-control" type="password">
                </div>
                <div class="form-group col-sm-6">
                    <label>XÁC NHẬN MẬT KHẨU</label>
                    <input name="mat_khau2" class="form-control" type="password">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>ĐỊA CHỈ EMAIL</label>
                    <input name="email" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                    <label>HÌNH ẢNH</label>
                    <input name="hinh" type="file" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>KÍCH HOẠT?</label>
                    <div class="form-control">
                        <label class="radio-inline"><input name="kich_hoat" value="0" type="radio">Chưa kích hoạt</label>
                        <label class="radio-inline"><input name="kich_hoat" value="1" type="radio" checked>Kích hoạt</label>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label>VAI TRÒ</label>
                    <div class="form-control">
                        <label class="radio-inline"><input name="vai_tro" value="0" type="radio">Khách hàng</label>
                        <label class="radio-inline"><input name="vai_tro" value="1" type="radio" checked>Nhân viên</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-12">
                    <button name="btn_insert" class="btn btn-default">Thêm mới</button>
                    <button type="reset" class="btn btn-default">Nhập lại</button>
                    <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
                </div>
            </div>
        </form>
    </body>
</html>
