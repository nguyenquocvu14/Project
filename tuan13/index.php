<?php
session_start();
#kiem tra da dang nhap chua
#da bam ghi nho dang nhap


if(!isset($_SESSION["daDangNhap"]) || $_SESSION["daDangNhap"]== false){
    header("Location: login.php");
}

?>
<h1>Trang chu</h1>
<p>Xin chào bạn : <?= $_SESSION["user"]; ?> ,<br><a href="logout.php">Thoát</a> </p>
<h1>
<!-- daDangNhap -->