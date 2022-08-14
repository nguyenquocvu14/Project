<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'web';
// $conn = mysqli_connect($server ,$user ,$pass, $database);
$conn = new mysqLi ($server ,$user ,$pass, $database);
mysqli_set_charset($conn, 'UTF8');
if($conn){
    mysqLi_query($conn, "SET NAMES 'utf8'");
    echo "ket noi thanh cong <br>";
}
else{
    echo "ket noi khong thanh cong";
}
?>