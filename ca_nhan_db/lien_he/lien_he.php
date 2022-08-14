

<div class="col-sm-9">
  <div class="container">
    <h2>Danh Sách Liên Hệ</h2>
    <div class="add">
    <a href="home.php?module=lien_he&page=form_lien_he">Thêm Mới</a>
    </div>

    <table>
      <tr>
        <th>Ngày</th>
        <th>Họ Tên</th>
        <th>Email</th>
        <th>Điện Thoai</th>
        <th>Nội Dung</th>
      </tr>
      <?php
      require ("./inc/conn.php");
      $sql = "SELECT * FROM lien_he";
      $relust = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($relust)){
          echo"<tr>
          
          <td>$row[ngay_gui]</td>
          <td>$row[ho_ten]</td>
          <td>$row[email]</td>
          <td>$row[dien_thoai]</td>
          <td>$row[noi_dung]</td>
          </tr>";
      }
      ?>
    </table>
  </div>
</div>
