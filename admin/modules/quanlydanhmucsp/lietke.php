<div class="col-md-12 text-right">

  <a href="index.php?action=quanlydanhmucsanpham&query=them" class="btn btn-success">Thêm Danh Mục</a>
</div>

<?php
$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
$query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>

<p>liet ke danh muc san pham</p>

<table id="customers">
  <tr>
    <th>id</th>
    <th>Tên Danh Mục</th>
    <th>Action</th>


  </tr>
  <?php

  $i = 0;
  while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
    $i++;
  ?>
  <tr>
    <td><?php echo $row['id_danhmuc'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td>
      <a href="modules/quanlydanhmucsp/xuli.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a>
      <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>