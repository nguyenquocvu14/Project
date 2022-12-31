<?php
session_start();
?>

<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="header__logo">
          <a href="./index.html"><img src="images/logo.png" alt=""></a>
        </div>
      </div>
      <div class="col-lg-6">
        <nav class="header__menu">
          <ul>
            <li class="active"><a href="./index.php">TRANG CHỦ</a></li>
            <li><a href="content.php?quanly=cuahang">CỬA HÀNG</a></li>
            <li><a href="content.php?quanly=danhmucbaiviet">BLOG</a></li>
            <li><a href="content.php?quanly=lienhe">LIÊN HỆ</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-3">
        <div class="header__cart">
          <ul class="header__cart">
            <li>
              <!-- kiem tra neu nguoi dung co tkhoan moi cho dat hang -->
              <?php

              if (isset($_SESSION['dangky'])) {

              ?>
              <div class="show_user">TàiKhoản:
                <i style="font-size: 2rem;"><?php echo $_SESSION['dangky'] ?>
                </i>

                <div class="box">
                  <div class="box-container">
                    <a href="http://">Tài Khoản Của Tôi</a>
                    <a href="content.php?quanly=giohang">Đơn Hàng</a>
                    <!-- thuc hien dang xuat tai khoan khach hang -->
                    <?php

                      if (isset($_GET['action_logout']) == 'dangxuat') {
                        unset($_SESSION['dangky']);
                        header("Location:./index.php");
                      }
                      ?>
                    <a href="index.php?action_logout=dangxuat">Đăng Xuất</a>

                    <!-- end -->
                  </div>

                </div>
              </div>

              <?php
              } else {
              ?>
              <a href="./pages/loginkhachhang/dangnhap.php"><i class="fa-solid fa-user"></i></a>
              <?php
              }
              ?>
              <!-- end kiem tra dang ky dat hang -->


              <!-- <a href="#"><i class="fa-solid fa-user"></i></a>  -->
              <!-- <div class="box">
                <div class="box-container">
                  <div class="content"></div>
                </div>
              </div> -->
            </li>
            <li><a href="#"><i class="fa fa-heart"></i> </a></li>

            <!-- dem so luong san pham co trong gio hang -->
            <?php
            // session_start();
            if (isset($_SESSION['cart'])) {
              $count = count($_SESSION['cart']);
            ?>
            <li><a href="content.php?quanly=giohang"><i class="fa fa-shopping-bag"></i><span><?php echo $count ?></span>
              </a></li>
            <?php
            } else {
            ?>

            <li><a href="content.php?quanly=giohang"><i class="fa fa-shopping-bag"></i> </a></li>
            <?php
            }
            ?>

            <!-- end -->
          </ul>
          <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
        </div>
      </div>
    </div>
    <!-- <div class="humberger__open">
    <i class="fa fa-bars"></i>
  </div> -->
  </div>
</header>