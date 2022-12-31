<?php
// include("../../admin/config/config.php");
$sql_bv = "SELECT * FROM tbl_baiviet  ORDER BY id DESC";
$query_bv = mysqli_query($mysqli, $sql_bv);

?>

<section class="breadcrumb-section set-bg" data-setbg="images/breadcrumb.jpg"
  style="background-image: url(&quot;images/breadcrumb.jpg&quot;);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="breadcrumb__text">
          <h2>Vegetables Blog</h2>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="blogs">
  <h1 class="title">Blog </h1>

  <div class="box-container">

    <?php
    while ($row_bv = mysqli_fetch_array($query_bv)) {
    ?>


    <div class="box">
      <!-- <a href="content.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>"> -->
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
      </a>
    </div>

    <?php
    }
    ?>
    <!-- <div class="box">
      <div class="image">
        <img src="./images/blog-3.jpg" alt="">
      </div>
      <div class="content">
        <div class="icons">
          <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
          <a href="#"> <i class="fas fa-user"></i> by admin </a>
        </div>
        <h3>blogs title goes here</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, dolor!</p>
        <a href="#" class="btn">read more</a>
      </div>
    </div> -->

    <!-- <div class="box">
      <div class="image">
        <img src="./images/blog-4.jpg" alt="">
      </div>
      <div class="content">
        <div class="icons">
          <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
          <a href="#"> <i class="fas fa-user"></i> by admin </a>
        </div>
        <h3>blogs title goes here</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, dolor!</p>
        <a href="#" class="btn">read more</a>
      </div>
    </div> -->



  </div>

</section>