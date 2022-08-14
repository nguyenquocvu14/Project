<?php
session_start();
unset($_SESSION["daDangNhap"]);
unset($_SESSION["pwd"]);
header("Location: login.php");
setcookie("name","",time()-3600);
 setcookie("danhnhap","",time()-3600);