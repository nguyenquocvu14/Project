<?php
//kiem tra phai dang nhap moi duoc den trang chu
session_start();
if(!isset($_SESSION['mySession'])){
    header('location:login.php');
}

// if(isset($_COOKIE['check'])&& $_COOKIE['check']=='on')
// {
//     header('location:index.php');
    
//     $_SESSION["username"] = true;
//     $_SESSION["mySession"]= $_COOKIE['tk'];
// }
?>
<h1>day la trang chu</h1>
<a href="logout.php"><button>dang xuat</button></a>
<p> Xin chao: <?php echo $_SESSION['mySession'];?> 