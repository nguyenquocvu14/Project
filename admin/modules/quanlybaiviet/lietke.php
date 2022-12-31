<!-- <div class="col-md-12 text-right">

  <a href="index.php?action=quanlysanpham&query=them" class="btn btn-success">Them San Pham</a>
</div> -->

<?php

$sql_lietke_bv = "SELECT * FROM tbl_danhmucbaiviet,tbl_baiviet
WHERE tbl_danhmucbaiviet.id_baiviet=tbl_baiviet.id_danhmuc ORDER BY id DESC";
$query_lietke_bv = mysqli_query($mysqli, $sql_lietke_bv);
?>

<p>liet ke danh muc bai viet</p>

<table id="customers">
  <tr>
    <th>id</th>
    <th>Tên Sản Phẩm</th>
    <th>Hình Anh</th>
    <th>Danh Mục</th>
    <th>Tóm Tắt</th>
    <th>Trạng Thái</th>
    <th>Action</th>


  </tr>
  <?php

  $i = 0;
  while ($row = mysqli_fetch_array($query_lietke_bv)) {
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tenbaiviet'] ?></td>
    <td><img style="width:100%" src="modules/quanlybaiviet/upload/<?php echo $row['hinhanh'] ?>"> </td>
    <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php if ($row['tinhtrang'] == 1) {
            echo 'Kich hoat';
          } else {
            echo 'an';
          }
          ?></td>
    <td>
      <a href=" modules/quanlybaiviet/xuli.php?idbaiviet=<?php echo $row['id'] ?>">Xóa</a>
      <a href="?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row['id'] ?>">Sửa</a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>