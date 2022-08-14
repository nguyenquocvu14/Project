<?php
require ("../inc/conn.php");
$id = $_GET['this'];
$sql = "DELETE FROM loai_san_pham  WHERE id = $id ";
mysqli_query($conn,$sql);
?>
<a href="http://localhost/php_tuan11/index.php?module=loai_san_pham&page=danh_sach">Hien Thi</a>