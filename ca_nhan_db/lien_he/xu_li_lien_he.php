<?php
require ("../inc/conn.php");
if(isset($_POST['btn']))
{
$username = $_POST["user"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$text = $_POST["content"];
var_dump($username);
date_default_timezone_set('asia/ho_chi_minh');
$date = (date("Y-m-d - H:i:s"));
        $sql = "INSERT INTO lien_he (ho_ten ,email ,dien_thoai, noi_dung,ngay_gui)
        VALUES('$username','$email','$phone','$text','$date')";
if(mysqLi_query($conn,$sql)){
      echo"them tc";
}
else{
        die("them that bai " .mysqli_error($conn));
}
header('location:/ca_nhan_db/index.php?module=lien_he&page=lien_he');
}

?>