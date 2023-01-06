<?php

if (isset($_POST['submit'])) {

  $var = $_POST['filter'];
  if ($var == "0") {
    $sql_locsp = "SELECT * FROM tbl_sanpham,tbl_danhmuc
     WHERE  tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";
    $query_locsp = mysqli_query($mysqli, $sql_locsp);
    $row = mysqli_fetch_all($query_locsp);

    // $_SESSION['choose'] = "0";
  } else if ($var == "1") {
    $sql_locsp = "SELECT * FROM tbl_sanpham,tbl_danhmuc
      WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc  ORDER BY tbl_sanpham.giasp DESC";
    $query_locsp = mysqli_query($mysqli, $sql_locsp);
    $row = mysqli_fetch_all($query_locsp);
    // $_SESSION['choose'] = "1";
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";

    // header("Location:content.php?quanly=cuahang");
  } else if (($var == "2")) {
    $sql_locsp = "SELECT * FROM tbl_sanpham,tbl_danhmuc
      WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc  ORDER BY tbl_sanpham.giasp ASC";
    $query_locsp = mysqli_query($mysqli, $sql_locsp);
    $row = mysqli_fetch_all($query_locsp);

    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
  }
  $_SESSION['choose'] = $var;
  $_SESSION['filter'] = $row;
  header("Location:content.php?quanly=cuahang");
}