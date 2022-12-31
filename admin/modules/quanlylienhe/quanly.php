<p>Thông Tin Liên Hệ</p>
<?php

$sql_lh = "SELECT * FROM tbl_lienhe WHERE id = 1";
$query_lh = mysqli_query($mysqli, $sql_lh);
?>
<table id="customers">
  <?php


  while ($row = mysqli_fetch_array($query_lh)) {

  ?>
  <form action="modules/quanlylienhe/xuli.php?id=<?php echo $row['id'] ?>" method="POST" enctype="multipart/form-data">


    <tr>
      <td>Thông Tin Liên Hệ</td>
      <td><textarea name="thongtinlienhe" rows="20" cols="50"><?php echo $row['thongtinlienhe'] ?></textarea></td>

    </tr>
    <tr>

      <td colspan="2"><input type="submit" name="submitlienhe" value="Cập Nhật" /></td>
    </tr>
    <?php

  }
    ?>
  </form>
</table>