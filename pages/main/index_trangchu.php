<?php
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc
WHERE  tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 6";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>

<!-- product section starts  -->
<section class="product" id="product">

  <h1 class="heading">Sản Phẩm <span>Mới Nhất</span></h1>
  <div class="featured__controls">

  </div>

  <div class="box-container">
    <?php
    while ($row = mysqli_fetch_array($query_pro)) {
    ?>
    <div class="box">
      <span class="discount">-33%</span>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="admin/modules/quanlysp/upload/<?php echo $row['hinhanh'] ?>" alt="">
      <h3><?php echo $row['tensanpham'] ?></h3>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <div class="price"><?php echo number_format($row['giasp'], 0, ',', ' .') . ' /kg' ?><span> 80.000 </span> </div>
      <div class="quantity">
        <span><?php echo $row['tendanhmuc'] ?> </span>
        <!-- <input type="number" min="1" max="1000" value="1">-->
        <!-- <span> /kg </span> -->
      </div>
      <!-- <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="btn">xem chi tiet</a> -->
      <a href="content.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="btn">Xem Chi Tiết</a>

    </div>





    <?php
    }
    ?>

  </div>
</section>