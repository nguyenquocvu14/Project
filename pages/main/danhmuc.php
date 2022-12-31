<?php
$sql_pro = "SELECT * FROM tbl_sanpham
WHERE  tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);
// get lay ten danh muc
$sql_cate = "SELECT * FROM tbl_danhmuc WHERE  tbl_danhmuc.id_danhmuc='$_GET[id]'";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);
?>
<!-- <h3>danh muc san pham:<?php echo $row_title['tendanhmuc'] ?></h3>
<ul class="products-list">
  <?php
  // while ($row_pro = mysqli_fetch_array($query_pro)) {
  ?>
  <li>
    <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
      <img src="admin/modules/quanlysp/upload/<?php echo $row_pro['hinhanh'] ?>" alt="">
      <p class="title-product"><?php echo $row_pro['tensanpham'] ?></p>
      <p class="price-product">gia:<?php echo number_format($row_pro['giasp'], 0, ',', ' .') . ' vnd' ?></p>
    </a>

  </li>

  <?php
  // }
  ?>

</ul> -->


<section class="product" id="product">

  <h1 class="heading">latest<span><?php echo $row_title['tendanhmuc'] ?></span></h1>

  <div class="box-container">
    <?php
    while ($row_pro = mysqli_fetch_array($query_pro)) {
    ?>



    <div class="box">
      <span class="discount">-33%</span>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="admin/modules/quanlysp/upload/<?php echo $row_pro['hinhanh'] ?>" alt="">
      <h3><?php echo $row_pro['tensanpham'] ?></h3>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <div class="price"><?php echo number_format($row_pro['giasp'], 0, ',', ' .') . ' /kg' ?><span> $13.20 </span>
      </div>
      <div class="quantity">
        <span><?php echo $row_title['tendanhmuc'] ?> </span>
      </div>
      <a href="content.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" class="btn">xem chi tiet</a>
    </div>

    <?php
    }
    ?>

  </div>
</section>