<?php
$id = $_GET['id'];
$localhost = 'localhost';
$username = 'root';
$pass = '';
$database = 'ql_san_pham_db';
$conn = mysqli_connect($localhost, $username, $pass,$database);
if($conn){
    echo"Ket Noi Thanh Cong";
}
$sql = "DELETE FROM san_pham WHERE id = $id ";
mysqli_query($conn, $sql);
header('location:danh_sach.php')
?>