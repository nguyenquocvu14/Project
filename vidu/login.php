<?php
include "connect.php";

session_start();
//kiem tra cookie 

if(isset($_COOKIE['checkname'])&& $_COOKIE['checkname']=='on')
{
    $_SESSION["mySession"] = TRUE;
    $_SESSION["mySession"]= $_COOKIE['tk'];
}
//kiem tra session da toan tai thi o trang index kh dc ve login
if(isset($_SESSION['mySession'])){
    header('location:index.php');
}
//---------------------------------------------

if(isset($_POST['dangnhap'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];
$sql = "SELECT * FROM thanhvien WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn,$sql);

if( mysqli_num_rows($result) == TRUE){
  
    echo"dang nhap thanh cong";
    $_SESSION['mySession'] = $username;
 

    if(isset($_POST['check']) && $_POST['check']=='on'){
        setcookie("checkname","on",time()+ 3600);
        setcookie("tk",$username,time()+ 3600);
        setcookie("pass",$password,time()+ 3600);
      
 }

 header("location:index.php");

}
else{
    echo"dang nhap that bai";
}
}
?>





<style>
    input{
        display:block;
    }
</style>
<form action="login.php" method ="POST" enctype = "multipart/form-data">
    <label>username</label>
    <input type="text"name="user">
    <label>password</label>
    <input type="password" name="pass">
    <input type="checkbox"  name="check">Ghi Nho Dang Nhap
    <br>
    <button type = "submit" name ="dangnhap">Dang Nhap</button>
    <a href="signup.php">dang ky</a>
</form>
