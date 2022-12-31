<p>Xem don hang</p>

<?php
$code = $_GET['code'];
$sql_lietke_dh = "SELECT * FROM  tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham
AND tbl_cart_details.code_cart='$code' ORDER BY tbl_cart_details.id_cart_details";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>

<!-- <p>liet ke don hang</p> -->

<table id="customers">
  <tr>
    <th>id</th>
    <th>Mã Đơn Hàng</th>
    <th>Tên Sản Phẩm</th>
    <th>Hình</th>
    <th>Số Lượng</th>
    <th>Đơn Gía</th>
    <th>Thành Tiền</th>
    <!-- <th>tinh trang</th> -->



  </tr>
  <?php
  $tongtien = 0;
  $i = 0;
  while ($row = mysqli_fetch_array($query_lietke_dh)) {
    $i++;
    $tongtien += $row['giasp'] * $row['soluongmua'];
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img style="width:100%" src="modules/quanlysp/upload/<?php echo $row['hinhanh'] ?>"></td>
    <td><?php echo $row['soluongmua'] ?></td>
    <td><?php echo number_format($row['giasp'], 0, ',', '.') . 'VND' ?></td>
    <td><?php echo number_format($row['giasp'] * $row['soluongmua'], 0, ',', '.') . ' ' . 'VND' ?></td>




  </tr>
  <?php
  }
  ?>
  <tr>
    <td colspan="8" style="text-align: center;">
      <p>tong tien: <?php echo number_format($tongtien, 0, ',', '.') . ' ' . 'VND' ?></p>
    </td>
  </tr>
</table>