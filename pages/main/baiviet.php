<?php

$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id = '$_GET[id]' LIMIT 1";
$query_bv = mysqli_query($mysqli, $sql_bv);

$sql_bvm = "SELECT * FROM tbl_baiviet  ORDER BY tbl_baiviet.id DESC LIMIT 3";
$query_bvm = mysqli_query($mysqli, $sql_bvm);



$sql_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ";
$query_danhmucbv = mysqli_query($mysqli, $sql_danhmucbv);
?>

<section class="blog-details spad">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-5 order-md-1 order-2">

        <div class="blog__sidebar">


          <div class="blog__sidebar__item">

            <h4>Danh Muc</h4>


            <ul>
              <?php
              while ($row_danhmuc = mysqli_fetch_array($query_danhmucbv)) {
              ?>
              <li><a href="#"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></a></li>

              <?php
              }
              ?>
            </ul>

          </div>
          <div class="blog__sidebar__item">
            <h4>Tin Tức Mới Nhất</h4>
            <div class="blog__sidebar__recent">
              <?php
              while ($row_bvm = mysqli_fetch_array($query_bvm)) {
              ?>
              <a href="content.php?quanly=baiviet&id=<?php echo $row_bvm['id'] ?>" class="blog__sidebar__recent__item">
                <div class="blog__sidebar__recent__item__pic">
                  <img style="width:7rem;height:7rem"
                    src="admin/modules/quanlybaiviet/upload/<?php echo $row_bvm['hinhanh'] ?>">
                </div>
                <div class="blog__sidebar__recent__item__text">
                  <h6><?php echo $row_bvm['tenbaiviet'] ?></h6>
                  <span>MAR 05, 2019</span>
                </div>
              </a>
              <?php
              }
              ?>

            </div>

          </div>

        </div>

      </div>

      <?php
      while ($row_bv = mysqli_fetch_array($query_bv)) {
      ?>
      <div class="col-lg-8 col-md-7 order-md-1 order-1">
        <h3><?php echo $row_bv['tenbaiviet'] ?></h3>
        <div class="blog__details__text">
          <img src="admin/modules/quanlybaiviet/upload/<?php echo $row_bv['hinhanh'] ?>">
          <p><?php echo $row_bv['noidung'] ?></p>
          <!-- <h3>The corner window forms a place within a place that is a resting point within the large
            space.</h3>
          <p>The study area is located at the back with a view of the vast nature. Together with the other
            buildings, a congruent story has been managed in which the whole has a reinforcing effect on
            the components. The use of materials seeks connection to the main house, the adjacent
            stables</p> -->
        </div>

      </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>