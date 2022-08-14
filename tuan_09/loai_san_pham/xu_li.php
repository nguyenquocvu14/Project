<?php
$locahost = "localhost";
$username = "root";
$password = "";
$databasae = "ql_san_pham_db";
$conn = mysqli_connect($locahost, $username,$password,$databasae);
if(!$conn){
    echo "Ket Noi Khong Thanh Cong".mysqli_connect_error();
}
if(!empty($_POST["ten"]))
{
$ten = $_POST["ten"];
$sql = "INSERT INTO loai_san_pham (ten)
VALUES('$ten')";
mysqli_query($conn,$sql);
}
else{
    echo "Vui Long Nhap San Pham";
}
?>
<a href="danh_sach.php">Hien Thi</a>