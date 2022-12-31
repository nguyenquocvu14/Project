<?php
$id = $_GET['idbaiviet'];
$sql_sua_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet=$id ";
$query_sua_danhmucbv = mysqli_query($mysqli, $sql_sua_danhmucbv);
?>
<p>Sửa Danh Mục Bài Viết</p>
<table id="customers">
  <form action="modules/quanlydanhmucbaiviet/xuli.php?idbaiviet=<?php echo  $_GET['idbaiviet']  ?>" method="POST">

    <?php
    while ($dong = mysqli_fetch_array($query_sua_danhmucbv)) {
    ?>
    <tr>
      <th colspan="2">Form Sửa Danh Mục Bài Viết</th>

    </tr>
    <tr>
      <td>Tên Danh Mục</td>
      <td><input type="text" name="tendanhmucbaiviet" value="<?php echo $dong['tendanhmuc_baiviet'] ?>" /></td>

    </tr>
    <tr>
      <td>Thứ Tự</td>
      <td><input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>" /></td>

    </tr>
    <tr>

      <td colspan="2"><input type="submit" name="suadanhmucbv" value="Sửa Danh Mục Bài Viết" /></td>

    </tr>
    <?php
    }
    ?>
  </form>
</table>