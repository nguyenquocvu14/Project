<?php
$id = $_GET['this'];
$locahost = "localhost";
$username = "root";
$password = "";
$databasae = "ql_san_pham_db";
$conn = mysqli_connect($locahost, $username,$password,$databasae);
if(!$conn){
    echo "Ket Noi Khong Thanh Cong".mysqli_connect_error();
}

var_dump($id);
$sql = "DELETE FROM loai_san_pham  WHERE id = $id ";
mysqli_query($conn,$sql);
?>
