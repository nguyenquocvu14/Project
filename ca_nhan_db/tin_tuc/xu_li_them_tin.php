<?php
require ("./inc/conn.php");
if(isset($_POST['btn']))
{
$name = $_POST["td"];
$img =  $_FILES["img"]["name"];
$summary = $_POST["summary"];
$full = $_POST["full"];
date_default_timezone_set('asia/ho_chi_minh');
$date = (date("Y-m-d - H:i:s"));
$sql = "INSERT INTO tin_tuc(tieu_de,tom_tat ,anh ,noi_dung,ngay_dang)
VALUES('$name','$summary','$img','$full','$date')";
mysqLi_query($conn , $sql);
header("location:/ca_nhan_db/home.php?module=tin_tuc&page=tieu_de");
}

?>