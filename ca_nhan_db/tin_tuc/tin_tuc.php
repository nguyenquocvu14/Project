<style>
  a {
    font-size: 1.8rem;
  }
</style>
<div class="col-sm-9">
  <div class="container">
    <h2>Danh Sách Tin Tức</h2>
    <div class="add">
      <a href="index.php?module=tin_tuc&page=them_tin_tuc.php">Thêm Mới</a>
    </div>
    <table>
      <tr>
        <th>Ngày Đăng</th>
        <th>Tiêu Đề</th>
        <th>Nội Dung Tóm Tắt</th>
        <th colspan="2">Sửa / Xóa</th>
      </tr>
      <?php
      require ("./inc/conn.php");
      $sql = "SELECT * FROM tin_tuc";
      $relust = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($relust))
      {?>

      <tr>
        <td><?php echo $row['ngay_dang']?></td>
        <td><?php echo $row['tieu_de']?></td>
        <td><?php echo $row['tom_tat']?></td>
        <td><a href="tin_tuc/remove.php?this_id=<?php echo $row['id']?>">Xóa</a></td>
        <td ><a href="tin_tuc/update.php?this_id=<?php echo $row['id']?>">Sua</a>
    
      </td>
      </tr>

      <?php }
      ?>
    </table>
  </div>
</div>
<a href=""></a>