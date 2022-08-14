<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "ql_san_pham_db";
$conn = mysqli_connect($localhost,$username,$password,$database);
if($conn){
    echo"ket noi thanh cong";
}
?>