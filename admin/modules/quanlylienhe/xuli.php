<?php
include("../../config/config.php");
$thongtinlh = $_POST['thongtinlienhe'];
$id = $_GET['id'];

if (isset($_POST['submitlienhe'])) {

  $sql_update = "UPDATE tbl_lienhe SET thongtinlienhe ='$thongtinlh' WHERE id= $id";

  mysqli_query($mysqli, $sql_update);

  header('Location:../../index.php?action=quanlyweb&query=capnhat');
}