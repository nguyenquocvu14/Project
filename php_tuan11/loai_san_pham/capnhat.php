<?php
require ("../inc/conn.php");
$this_id = $_GET['this'];
$sql = "SELECT * FROM loai_san_pham WHERE id = $this_id";
$relust = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($relust);
var_dump($row);
?>
<form action="">
    <label>id</label>
    <input type="text" name = "id" value = "<?php echo $row ['id']?>">
    <label>Ten San Pham</label>
    <input type="text" name = "ten"value = "<?php echo $row ['ten']?>">
    <button>Cap Nhat</button>
</form>
<a href="http://localhost/php_tuan11/index.php?module=loai_san_pham&page=danh_sach">Hien Thi</a>