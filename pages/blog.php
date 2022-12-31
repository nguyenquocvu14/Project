<?php
// include("../../admin/config/config.php");
$sql_bv = "SELECT * FROM tbl_baiviet  ORDER BY id DESC LIMIT 3";
$query_bv = mysqli_query($mysqli, $sql_bv);

?>

<section class="blogs">
  <h1 class="title">Blog </h1>

  <div class="box-container">

    <?php
    while ($row_bv = mysqli_fetch_array($query_bv)) {
    ?>

    <div class="box">
      <div class="image">
        <img style="width:100%" src="admin/modules/quanlybaiviet/upload/<?php echo $row_bv['hinhanh'] ?>">
      </div>
      <div class="content">
        <div class="icons">
          <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
          <a href="#"> <i class="fas fa-user"></i> by admin </a>
        </div>
        <h3><?php echo $row_bv['tenbaiviet'] ?></h3>
        <span><?php echo $row_bv['tomtat'] ?></span>
        <a href="content.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>" class="btn">Đọc Thêm</a>
      </div>
    </div>
    <?php
    }
    ?>



  </div>

</section>