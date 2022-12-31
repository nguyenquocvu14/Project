<!-- XU LI LOGIN DANG NHAP Admin -->
<?php
include("./config/config.php");
session_start();
if (isset($_POST['dangnhap'])) {
  $taikhoan = $_POST['taikhoan'];
  $matkhau = md5($_POST['matkhau']);
  $sql = "SELECT * FROM tbl_admin WHERE username = '$taikhoan' AND password = '$matkhau' LIMIT 1 ";
  $row = mysqli_query($mysqli, $sql);
  $count = mysqli_num_rows($row);
  if ($count > 0) {
    $_SESSION['dangnhap'] = $taikhoan;

    header("Location:index.php");
  } else {
    echo ("dang nhap that bai");
    header("Location:login.php");
  }
}
// khong cho nguoi dung quay lai trang login khi chua bam dang xuat
if (isset($_SESSION['dangnhap'])) {
  header("Location:index.php");
}
//end quay lai trang
// EEND
?>

<link rel="stylesheet" href="./dist/css/adminlte.min.css">
<div class="card card-info" style="margin: 0 25rem;">
  <div class="card-header">
    <h3 class="card-title">Đăng Nhập</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form class="form-horizontal" action="login.php" method="POST">
    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" name="taikhoan" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" name="matkhau" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck2">
            <label class="form-check-label" for="exampleCheck2">Remember me</label>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-info" name="dangnhap">Đăng Nhập</button>

    </div>
    <!-- /.card-footer -->
  </form>
</div>