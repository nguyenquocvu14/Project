<?php
session_start();
//xem session ton tai thi dang xuat no di
if(isset ($_SESSION['mySession'])){
    unset($_SESSION['mySession']);
    setcookie("checkname","on",time()- 3600);
    setcookie("tk",$username,time()- 3600);
    setcookie("pass",$password,time()- 3600);
}

    header("location:login.php");

?>
