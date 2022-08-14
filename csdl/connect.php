<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'web';

$conn = new mysqLi ($server ,$user ,$pass, $database);
if($conn){
    mysqLi_query($conn, "SET NAMES 'utf8'");
    echo "ket noi thanh cong <br>";
}
else{
    echo "ket noi khong thanh cong";
}
?>