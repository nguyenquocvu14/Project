<!-- <link rel="stylesheet" href="../../css/style.css"> -->
<section class="hero">
  <div class="container">
    <div class="hero_row">
      <div class="col-lg-3">
        <div class="hero__categories__all">
          <i class="fa fa-bars"></i>
          <span>Danh Mục Sản Phẩm</span>
        </div>
        <ul>
          <?php
          $sql_danhmuc = "SELECT * FROM tbl_danhmuc  ORDER BY id_danhmuc DESC";
          $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);

          while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
          ?>
          <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>">
              <?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
          <?php
          }
          ?>
          <!-- danh muc bai viet -->
          <!-- end ba bai viet -->
        </ul>
      </div>

      <div class="col-lg-9">
        <div class="hero__search">
          <div class="hero__search__form">

            <!-- Tim kiem san pham -->
            <form action="index.php?quanly=timkiem" method="POST">
              <div class="hero__search__categories">
                Tất Cả Danh Mục
                <!-- <span class="arrow_carrot-down"></span> -->
              </div>
              <input type="text" placeholder="Tìm Kiếm Sản Phẩm " name="tukhoa">
              <button type="submit" class="site-btn" name="timkiem" value="timkiem">TÌM KIẾM</button>
            </form>
            <!-- end tim kiem san pham -->
          </div>
        </div>
        <div class="hero__item set-bg" data-setbg="./images/banner.jpg"
          style="background-image: url(&quot;./images/banner.jpg&quot;);">
          <div class="hero__text">
            <span>TRÁI CÂY TƯƠI</span>
            <h2>Rau Qủa<br>100% Được Trồng Hữu Cơ</h2>
            <p>Miễn Phí Giao Hàng Cho Đơn Hàng Đầu Tiên</p>
            <a href="#" class="primary-btn">Mua Ngay</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>