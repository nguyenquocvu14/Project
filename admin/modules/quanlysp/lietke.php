<div class="col-md-12 text-right">

  <a href="index.php?action=quanlysanpham&query=them" class="btn btn-success">Thêm Sản Phẩm</a>
</div>

<?php

$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc 
WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>

<p>liet ke danh muc san pham</p>

<table id="customers">
  <tr>
    <th>id</th>
    <th>Tên Sản Phẩm</th>
    <th>Hình Anh</th>
    <th>Gía Sản Phẩm</th>
    <th>Số Lượng</th>
    <th>Danh Mục</th>
    <th>Mã Sản Phẩm</th>
    <th>Tóm Tắt</th>
    <th>Trạng Thái</th>
    <th>Action</th>


  </tr>
  <?php

  $i = 0;
  while ($row = mysqli_fetch_array($query_lietke_sp)) {
    $i++;
  ?>
  <tr>
    <td><?php echo $row['id_sanpham'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img style="width:100%" src="modules/quanlysp/upload/<?php echo $row['hinhanh'] ?>"> </td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php if ($row['tinhtrang'] == 1) {
            echo 'Kich hoat';
          } else {
            echo 'an';
          }
          ?></td>
    <td>
      <a href=" modules/quanlysp/xuli.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a>
      <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>