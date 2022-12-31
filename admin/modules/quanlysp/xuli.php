<?php
include("../../config/config.php");
$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['gia'];
$soluong = $_POST['soluong'];
$hinhanh_name = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh_name;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];
//
//them san pham
if (isset($_POST['themsanpham'])) {

  $sql_them = "INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) 
  VALUES('$tensanpham','$masp','$giasp','$soluong','$hinhanh','$tomtat','$noidung','$tinhtrang','$danhmuc')";
  mysqli_query($mysqli, $sql_them);
  move_uploaded_file($hinhanh_tmp, 'upload/' . $hinhanh);
  header('Location:../../index.php?action=quanlysanpham&query=them');
  //sua san pham
} elseif (isset($_POST['suasanpham'])) {
  //kiem tra neu nguoi nguoi tai anh va  kh tai anh
  if (!empty($_FILES['hinhanh']['name'])) {
    move_uploaded_file($hinhanh_tmp, 'upload/' . $hinhanh);
    $sql_update = "UPDATE tbl_sanpham SET tensanpham='$tensanpham',masp='$masp'
      ,giasp='$giasp',soluong='$soluong',hinhanh='$hinhanh',tomtat='$tomtat',noidung='$noidung',tinhtrang='$tinhtrang',id_danhmuc='$danhmuc' WHERE id_sanpham= '$_GET[idsanpham]'";

    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham] 'LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
      unlink('upload/' . $row['hinhanh']);
    }
  } else {
    $sql_update = "UPDATE tbl_sanpham SET tensanpham='$tensanpham',masp='$masp'
  ,giasp='$giasp',soluong='$soluong',tomtat='$tomtat',noidung='$noidung',tinhtrang='$tinhtrang',id_danhmuc='$danhmuc' WHERE id_sanpham= '$_GET[idsanpham]'";
  }
  mysqli_query($mysqli, $sql_update);
  header('Location:../../index.php?action=quanlysanpham&query=them');
  //xoa san pham
} else {

  $id = $_GET['idsanpham'];
  $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham= $id  LIMIT 1";
  $query = mysqli_query($mysqli, $sql);
  while ($row = mysqli_fetch_array($query)) {
    unlink('upload/' . $row['hinhanh']);
  }
  $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham=$id";
  mysqli_query($mysqli, $sql_xoa);

  header('Location:../../index.php?action=quanlysanpham&query=them');
}