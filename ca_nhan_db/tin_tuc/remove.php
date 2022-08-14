<?php
require ("../inc/conn.php");
$id = $_GET["this_id"];
$sql = "DELETE FROM tin_tuc WHERE id = $id";
mysqli_query($conn,$sql);
header("location:/ca_nhan_db/index.php?module=tin_tuc&page=tin_tuc");
?>