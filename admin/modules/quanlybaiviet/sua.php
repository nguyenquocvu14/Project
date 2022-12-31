<?php
$id = $_GET['idbaiviet'];
$sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id=$id ";
$query_sua_bv = mysqli_query($mysqli, $sql_sua_bv);
?>
<p>sua san pham</p>
<table id="customers">
  <form action="modules/quanlybaiviet/xuli.php?idbaiviet=<?php echo  $_GET['idbaiviet'] ?>" method="POST"
    enctype="multipart/form-data">
    <?php
    while ($row = mysqli_fetch_array($query_sua_bv)) {
    ?>
    <tr>
      <th colspan="2">Sửa Bài Viết</th>

    </tr>
    <tr>
      <td>Tên Bài Viết</td>
      <td><input type="text" name="tenbaiviet" value="<?php echo $row['tenbaiviet'] ?>" /></td>

    </tr>

    <tr>
      <td>Hình Anh</td>
      <td><input type="file" name="hinhanh" /></td>
      <td><img style="width:100%" src="modules/quanlybaiviet/upload/<?php echo $row['hinhanh'] ?>"></td>

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
      <td>Danh Mục Bài Viết</td>
      <td>
        <select name="danhmuc">
          <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC ";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {

              if ($row_danhmuc['id_baiviet'] == $row['id_danhmuc']) {
            ?>
          <option selected value="<?php echo $row_danhmuc['id_baiviet'] ?>">
            <?php echo $row_danhmuc['tendanhmuc_baiviet'] ?>
          </option>
          <?php
              } else {
              ?>

          <option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?>
          </option>


          <?php
              }
            } ?>
        </select>
      </td>

    </tr>



    <tr>
      <td>Tình Trạng</td>
      <td>
        <select name="tinhtrang">
          <?php
            if ($row['tinhtrang'] == 1) {
            ?>
          <option value="1" selected>Kích Hoạt</option>
          <option value="0">ẩn</option>
          <?php
            } else {
            ?>
          <option value="1">Kích Hoạt</option>
          <option value="0" selected>ẩn</option>

          <?php
            }

            ?>

        </select>
      </td>

    </tr>
    <tr>

      <td colspan="2"><input type="submit" name="suabaiviet" value="Sửa Bài Viết" /></td>

    </tr>
    <?php
    }
    ?>
  </form>
</table>