<?php
session_start();
include("../../admin/config/config.php");
?>
<!-- dangky -->
<?php
if (isset($_POST['dangkykhachhang'])) {
  $hovaten = $_POST['hovaten'];
  $email = $_POST['email'];
  $diachi = $_POST['diachi'];
  $matkhau = md5($_POST['matkhau']);
  $dienthoai = $_POST['dienthoai'];
  $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai)
  VALUES('$hovaten','$email','$diachi','$matkhau','$dienthoai')");

  if ($sql_dangky) {
    $_SESSION['dangky'] = $hovaten;
    $_SESSION['email'] =  $email;
    $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);

    header("Location:../../index.php");
  }
}
//dangnhap
if (isset($_POST['dangnhapkhachhang'])) {
  $taikhoan = $_POST['taikhoankhachhang'];
  $matkhau = md5($_POST['matkhaukhachhang']);
  $sql = "SELECT * FROM tbl_dangky WHERE email = '$taikhoan' AND matkhau = '$matkhau' LIMIT 1 ";

  $row = mysqli_query($mysqli, $sql);
  // foreach ($row as $name) {
  //   $name = $name['tenkhachhang'];
  // }
  $row_data = mysqli_fetch_array($row);
  $count = mysqli_num_rows($row);
  if ($count > 0) {
    $_SESSION['dangky'] = $row_data['tenkhachhang'];
    $_SESSION['email'] = $row_data['email'];
    $_SESSION['id_khachhang'] = $row_data['id_dangky'];
    header("Location:../../content.php?quanly=giohang");
  } else {

    header("Location:./dangnhap.php");
  }
}
//doi mat khau
?>
<?php

if (isset($_POST['doimatkhau'])) {
  $taikhoan = $_POST['email'];
  $matkhaucu = md5($_POST['matkhaucu']);
  $matkhaumoi = md5($_POST['matkhaumoi']);

  $sql = "SELECT * FROM tbl_dangky WHERE email='$taikhoan' AND matkhau = '$matkhaucu'";


  $row = mysqli_query($mysqli, $sql);
  $count = mysqli_num_rows($row);
  if ($count > 0) {
    $sql_update = mysqli_query($mysqli, "UPDATE tbl_dangky SET matkhau='$matkhaumoi'");
    echo '<p style="color:green";>Mat khau da duoc thay doi</p>';
  } else {
    echo '<p style="color:red";>Mat khau chua duoc thay doi</p>';
  }
}
?>