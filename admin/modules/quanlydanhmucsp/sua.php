<?php
$id = $_GET['iddanhmuc'];
$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc=$id ";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>
<p>sua danh muc san pham</p>
<table id="customers">
  <form action="modules/quanlydanhmucsp/xuli.php?iddanhmuc=<?php echo  $_GET['iddanhmuc']  ?>" method="POST">

    <?php
    while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
    ?>
    <tr>
      <th colspan="2">Form Them danh muc san pham</th>

    </tr>
    <tr>
      <td>Tên Danh Mục Sản Phẩm</td>
      <td><input type="text" name="tendanhmuc" value="<?php echo $dong['tendanhmuc'] ?>" /></td>

    </tr>
    <tr>
      <td>Thứ Tự</td>
      <td><input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>" /></td>

    </tr>
    <tr>

      <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa Danh Mục" /></td>

    </tr>
    <?php
    }
    ?>
  </form>
</table>