<?php
require ("../inc/conn.php");
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
<a href="http://localhost/php_tuan11/index.php?module=loai_san_pham&page=danh_sach">Hien Thi</a>