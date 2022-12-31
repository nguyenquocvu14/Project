<?php
include("../../config/config.php");
$tenbaiviet = $_POST['tenbaiviet'];
$hinhanh_name = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
echo ($_FILES['hinhanh']['name']);
$hinhanh = time() . '_' . $hinhanh_name;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];
//
//them san pham
if (isset($_POST['thembaiviet'])) {

  $sql_them = "INSERT INTO tbl_baiviet(tenbaiviet,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) 
  VALUES('$tenbaiviet','$hinhanh','$tomtat','$noidung','$tinhtrang','$danhmuc')";
  mysqli_query($mysqli, $sql_them);
  move_uploaded_file($hinhanh_tmp, 'upload/' . $hinhanh);
  header('Location:../../index.php?action=quanlybaiviet&query=them');
  //sua san pham
} elseif (isset($_POST['suabaiviet'])) {
  //kiem tra neu nguoi nguoi tai anh va  kh tai anh
  //neu cos hinh anh 
  if (!empty($_FILES['hinhanh']['name'])) {
    move_uploaded_file($hinhanh_tmp, 'upload/' . $hinhanh);
    $sql_update = "UPDATE tbl_baiviet SET tenbaiviet='$tenbaiviet'
      ,hinhanh='$hinhanh',tomtat='$tomtat',noidung='$noidung',tinhtrang='$tinhtrang',id_danhmuc='$danhmuc'
       WHERE id= '$_GET[idbaiviet]'";
    //xoa hinh anh cu
    $sql = "SELECT * FROM tbl_baiviet WHERE id='$_GET[idbaiviet] 'LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
      unlink('upload/' . $row['hinhanh']);
    }
  } else {

    $sql_update = "UPDATE tbl_baiviet SET tenbaiviet='$tenbaiviet'
  ,tomtat='$tomtat',noidung='$noidung',tinhtrang='$tinhtrang',id_danhmuc='$danhmuc' WHERE id= '$_GET[idbaiviet]'";
  }
  mysqli_query($mysqli, $sql_update);
  header('Location:../../index.php?action=quanlybaiviet&query=them');
  //xoa san pham
} else {

  $id = $_GET['idbaiviet'];
  $sql = "SELECT * FROM tbl_baiviet WHERE id= $id  LIMIT 1";
  $query = mysqli_query($mysqli, $sql);
  while ($row = mysqli_fetch_array($query)) {
    unlink('upload/' . $row['hinhanh']);
  }
  $sql_xoa = "DELETE FROM tbl_baiviet WHERE id=$id";
  mysqli_query($mysqli, $sql_xoa);

  header('Location:../../index.php?action=quanlybaiviet&query=them');
}