<?php
$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc
    WHERE  tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
<section class="breadcrumb-section set-bg" data-setbg="images/breadcrumb.jpg"
  style="background-image: url(&quot;images/breadcrumb.jpg&quot;);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="breadcrumb__text">
          <h2>Vegetables Package</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // -->
<form action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method='POST'>
  <section class="product-details spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="product__details__pic">
            <div class="product__details__pic__item">
              <img class="product__details__pic__item--large"
                src="admin/modules/quanlysp/upload/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="product__details__text">
            <!-- form  -->

            <h3><?php echo $row_chitiet['tensanpham'] ?></h3>
            <div class="product__details__rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
              <span>(18 đánh giá)</span>
            </div>
            <div class="product__details__price">
              <?php echo number_format($row_chitiet['giasp'], 0, ',', ' .') . ' vnd' ?></div>
            <!-- <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam
              vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet
              quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p> -->
            <p><?php echo $row_chitiet['tomtat'] ?></p>
            <div class="product__details__quantity">
              <div class="quantity">
                <div class="pro-qty"><span class="dec qtybtn">-</span>
                  <input type="text" value=<?php echo $row_chitiet['soluong'] ?>>

                  <span class="inc qtybtn">+</span>
                </div>
              </div>
            </div>
            <a href="#"><input class="primary-btn" class="themgiohang" name="themgiohang" type="submit"
                value="Thêm Vào Giỏ Hàng"></a>

            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
            <ul>
              <li><b>Tình Trạng </b> <span>Còn Hàng</span></li>
              <!-- <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li> -->
              <li><b>Cân Nặng</b> <span>1.5 kg</span></li>
              <li><b>Chia Sẻ</b>
                <div class="share">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
</form>
</section>





<?php

}
?>