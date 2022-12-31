<?php
$id = $_GET['idsanpham'];
$sql_sua_sanpham = "SELECT * FROM tbl_sanpham WHERE id_sanpham=$id ";
$query_sua_sanpham = mysqli_query($mysqli, $sql_sua_sanpham);
?>
<p>sua san pham</p>
<table id="customers">
  <form action="modules/quanlysp/xuli.php?idsanpham=<?php echo  $_GET['idsanpham']  ?>" method="POST"
    enctype="multipart/form-data">

    <?php
    while ($row = mysqli_fetch_array($query_sua_sanpham)) {
    ?>
    <tr>
      <th colspan="2">Sửa Sản Phẩm</th>

    </tr>
    <tr>
      <td>Tên Sản Phẩm</td>
      <td><input type="text" name="tensanpham" value="<?php echo $row['tensanpham'] ?>" /></td>

    </tr>

    <tr>
      <td>Mã SP</td>
      <td><input type="text" name="masp" value="<?php echo $row['masp'] ?>" /></td>

    </tr>
    <tr>
      <td>Gía</td>
      <td><input type="text" name="gia" value="<?php echo $row['giasp'] ?>" /></td>

    </tr>
    <tr>
      <td>Số Lượng</td>
      <td><input type="text" name="soluong" value="<?php echo $row['soluong'] ?>" /></td>

    </tr>
    <tr>
      <td>Hình Anh</td>
      <td><input type="file" name="hinhanh" /></td>
      <td><img style="width:100%" src="modules/quanlysp/upload/<?php echo $row['hinhanh'] ?>"></td>

    </tr>
    <tr>
      <td>Tóm Tắt</td>
      <td><textarea name="tomtat" rows="10"><?php echo $row['tomtat'] ?></textarea></td>

    </tr>
    <tr>
      <td>Nội Dung</td>
      <td><textarea name="noidung" rows="10"><?php echo $row['noidung'] ?></textarea></td>

    </tr>


    <tr>
      <td>Danh Mục Sản Phẩm</td>
      <td>
        <select name="danhmuc">
          <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC ";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {

              if ($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']) {
            ?>
          <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?>
          </option>
          <?php
              } else {
              ?>

          <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>


          <?php
              }
            } ?>
        </select>
      </td>

    </tr>















    <tr>
      <td>tinh trang</td>
      <td>
        <select name="tinhtrang">
          <?php
            if ($row['tinhtrang'] == 1) {
            ?>
          <option value="1" selected>kich hoat</option>
          <option value="0">an</option>
          <?php
            } else {
            ?>
          <option value="1">kich hoat</option>
          <option value="0" selected>an</option>

          <?php
            }

            ?>

        </select>
      </td>

    </tr>
    <tr>

      <td colspan="2"><input type="submit" name="suasanpham" value="sua san pham" /></td>

    </tr>
    <?php
    }
    ?>
  </form>
</table>