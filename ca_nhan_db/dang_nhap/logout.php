<?php session_start();
if(isset ($_SESSION['myS'])){
    unset($_SESSION['myS']);
    setcookie("name","on",time()- 3600);
    setcookie("taikhoan",$username,time()- 3600);
};
header("Location:./login.php");
?>