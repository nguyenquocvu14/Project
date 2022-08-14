<?php
require ("../inc/conn.php");
if(isset($_POST['btn']))
{
$username = $_POST["user"];

$email = $_POST["email"];

$phone = $_POST["phone"];

$img =  $_FILES["hinh_anh"]["name"];

$interests = $_POST["interests"];

$experience = $_POST["experience"];


$sql = "INSERT INTO ca_nhan(ho_ten , email , dien_thoai ,so_thich , kinh_nghiem , anh_dai_dien)
VALUES('$username','$email','$phone','$interests','$experience','$img')";
mysqLi_query($conn , $sql);
header('location:/ca_nhan_db/home.php');
}

?>