<div class="main-content">

  <?php
  if (isset($_GET['quanly'])) {
    $tam = $_GET['quanly'];
  } else {
    $tam = '';
  }

  if ($tam == 'danhmucsanpham') {

    include("main/danhmuc.php");
  } elseif ($tam == 'giohang') {

    include("main/giohang.php");
  } elseif ($tam == 'tintuc') {

    include("main/tintuc.php");
  } elseif ($tam == 'lienhe') {

    include("main/lienhe.php");
  } elseif ($tam == 'cuahang') {
    include("main/cuahang.php");
  } elseif ($tam == 'sanpham') {
    include("main/ctsanpham.php");
  } elseif ($tam == 'thanhtoan') {
    include("main/thanhtoan.php");
  } elseif ($tam == 'camon') {
    include("main/camon.php");
  } elseif ($tam == 'timkiem') {
    include("main/timkiem.php");
  } elseif ($tam == 'danhmucbaiviet') {
    include("main/danhmucbaiviet.php");
  } elseif ($tam == 'baiviet') {
    include("main/baiviet.php");
  } else {

    include("main/index_trangchu.php"); //trang chu
  }
  ?>

</div>