<p>them san pham</p>
<table id="customers">
  <form action="modules/quanlysp/xuli.php" method="POST" enctype="multipart/form-data">
    <tr>
      <th colspan="2">Form Them san pham</th>

    </tr>
    <tr>
      <td>Tên Sản Phẩm</td>
      <td><input type="text" name="tensanpham" /></td>

    </tr>

    <tr>
      <td>Mã SP</td>
      <td><input type="text" name="masp" /></td>

    </tr>
    <tr>
      <td>Gía</td>
      <td><input type="text" name="gia" /></td>

    </tr>
    <tr>
      <td>Số Lượng</td>
      <td><input type="text" name="soluong" /></td>

    </tr>
    <tr>
      <td>Hình Anh</td>
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
      <td>Danh Mục Sản Phẩm</td>
      <td>
        <select name="danhmuc">
          <?php
          $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC ";
          $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
          while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
          ?>
          <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
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

      <td colspan="2"><input type="submit" name="themsanpham" value="Thêm Sản Phẩm" /></td>

    </tr>
  </form>
</table>