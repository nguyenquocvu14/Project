<link rel="stylesheet" href="../../admin/dist/css/adminlte.min.css">
<div class="card card-info" style="margin: 0 25rem;">
  <div class="card-header">
    <h3 class="card-title">Đăng Nhập Khach Hang</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form class="form-horizontal" action="./xuli.php" method="POST">
    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" name="taikhoankhachhang" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" name="matkhaukhachhang" class="form-control" id="inputPassword3"
            placeholder="Password">
        </div>
      </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-info" name="dangnhapkhachhang">Đăng Nhập</button>
      <button style="border:none"><a href="./dangky.php">Đăng Ký</a></button>
      <button style="border:none"><a href="./thaydoimatkhau.php">Đổi Mật Khẩu</a></button>
      <button style="border:none"><a href="../../admin/index.php">Đăng Nhập Admin</a></button>
    </div>
    <!-- /.card-footer -->
  </form>

</div>