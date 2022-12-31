<?php
$sql_lietke_dh = "SELECT * FROM tbl_cart order by id_cart DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>

<p>liet ke don hang</p>

<table id="customers">
  <tr>
    <th>id</th>
    <th>Mã Đơn Hàng </th>
    <th>Tình Trạng</th>
    <th>Ngày Đặt</th>
    <th colspan="2">Quản Lý</th>


  </tr>
  <?php

  $i = 0;
  while ($row = mysqli_fetch_array($query_lietke_dh)) {
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>




    <td><?php

          if ($row['cart_status'] == 1) {
            echo '<a href="modules/quanlydonhang/xuli.php?code=' . $row['code_cart'] . '">Đơn Hàng Mới</a>';
          } else {
            echo '<p style="color:green;">Đã Xử Lí</p>';
          }
          ?></td>
    <td><?php echo $row['cart_date'] ?></td>



    <td>
      <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem Đơn Hàng</a>
    </td>
    <td>
      <a href="modules/quanlydonhang/indonhang.php?code=<?php echo $row['code_cart'] ?>">In Đơn Hàng</a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>