<!-- <div class="col-md-12 text-right"> -->

<!-- <a href="index.php?action=quanlydanhmucsanpham&query=them" class="btn btn-success">Them Danh Muc</a>
</div> -->

<?php
$sql_lietke_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
$query_lietke_danhmucbv = mysqli_query($mysqli, $sql_lietke_danhmucbv);
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
  while ($row = mysqli_fetch_array($query_lietke_danhmucbv)) {
    $i++;
  ?>
  <tr>
    <td><?php echo $row['id_baiviet'] ?></td>
    <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
    <td>
      <a href="modules/quanlydanhmucbaiviet/xuli.php?idbaiviet=<?php echo $row['id_baiviet'] ?>">Xóa</a>
      <a href="index.php?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>">Sửa</a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>