<p>Quan Ly Bai Viet</p>

<p>them Bai Viet</p>
<table id="customers">
  <form action="modules/quanlybaiviet/xuli.php" method="POST" enctype="multipart/form-data">
    <tr>
      <th colspan="2">Form Thêm Bài Viết</th>

    </tr>
    <tr>
      <td>Tên Bài Viết</td>
      <td><input type="text" name="tenbaiviet" /></td>

    </tr>

    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhanh" /></td>

    </tr>
    <tr>
      <td>Tóm Tắt</td>
      <td><textarea name="tomtat" cols="30" rows="10"></textarea></td>

    </tr>
    <tr>
      <td>Nội Dung</td>
      <td><textarea name="noidung" cols="30" rows="10"></textarea></td>

    </tr>

    <tr>
      <td>Danh Mục Bài Viết</td>
      <td>
        <select name="danhmuc">
          <?php
          $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC ";
          $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
          while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
          ?>
          <option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?>
          </option>
          <?php
          }

          ?>


        </select>
      </td>

    </tr>


    <tr>
      <td>Tình Trạng</td>
      <td>
        <select name="tinhtrang">
          <option value="1">Kích Hoạt</option>
          <option value="0">ẩn</option>
        </select>
      </td>

    </tr>
    <tr>

      <td colspan="2"><input type="submit" name="thembaiviet" value="Thêm Bài Viết" /></td>

    </tr>
  </form>
</table>