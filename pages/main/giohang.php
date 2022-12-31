<!-- <p>gio hang</p> -->

<?php


?>

<section class="breadcrumb-section set-bg" data-setbg="images/breadcrumb.jpg"
  style="background-image: url(&quot;images/breadcrumb.jpg&quot;);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="breadcrumb__text">
          <h2>Vegetables Cart</h2>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="shoping-cart spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="shoping__cart__table">
          <table>
            <thead>
              <tr>
                <th class="shoping__product">Tên Sản Phẩm</th>
                <!-- <th>Id</th> -->
                <!-- <th>Ma sp</th> -->
                <!-- <th>ten sp</th> -->
                <!-- <th>hinh anh</th> -->
                <th>Gía Sản Phẩm</th>
                <th>Số Lượng</th>

                <th>Thành Tiền</th>
              </tr>
              <?php
              // session_start();
              if (isset($_SESSION['cart'])) {
                $i = 0;
                $tongtien = 0;
                $thanhtien = 0;
                foreach ($_SESSION['cart'] as $cart_item) {
                  $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
                  $tongtien +=  $thanhtien;
                  $i++;
              ?>
            </thead>
            <tbody>
              <tr>
                <td class="shoping__cart__item">
                  <img src="admin/modules/quanlysp/upload/<?php echo $cart_item['hinhanh'] ?>" alt="">
                  <h5><?php echo $cart_item['tensanpham'] ?></h5>
                </td>
                <td class="shoping__cart__price">
                  <?php echo number_format($cart_item['giasp'], 0, ',', ' .') . ' VND' ?>
                </td>
                <td class="shoping__cart__quantity">
                  <div class="quantity">
                    <div class="pro-qty">
                      <!-- tang vs giam -->
                      <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">
                        <i class="fa-solid fa-plus"></i>
                      </a>
                      <input type="text" value="<?php echo $cart_item['soluong'] ?>">
                      <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">
                        <i class="fa-solid fa-minus"></i>
                      </a>
                    </div>
                  </div>
                </td>
                <td class="shoping__cart__total">
                  <?php echo number_format($thanhtien, 0, ',', ' .') . ' VND'  ?>
                </td>
                <!-- xoa san pham -->
                <td class="shoping__cart__item__close">
                  <a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"> <span
                      class="fa-solid fa-xmark"></span></a>
                </td>
              </tr>

            </tbody>

            <?php
                }
              } else {

          ?>
            <tr>
              <td colspan="2">
                <p>Không Có Sản Phẩm</p>
              </td>
            </tr>

            <?php
              }
        ?>
            <p><a href="pages/main/themgiohang.php?xoatatca=1">Xóa Tất Cả</a></p>
          </table>


        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="shoping__cart__btns">
          <a href="#" class="primary-btn cart-btn">Tiếp Tục Mua Sắm</a>
          <!-- <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
            Upadate Cart</a> -->
        </div>
      </div>
      <!-- <div class="col-lg-6">
        <div class="shoping__continue">
          <div class="shoping__discount">
            <h5>Mã Giam Gía</h5>
            <form action="#">
              <input type="text" placeholder="Enter your coupon code">
              <button type="submit" class="site-btn">Áp Dụng Mã Giam Gía</button>
            </form>
          </div>
        </div>
      </div> -->

      <div class="col-lg-6">
        <div class="shoping__checkout">
          <h5>Cart Total</h5>
          <ul>
            <?php
            if (isset($tongtien)) {

            ?>
            <li>Subtotal <span><?php echo number_format($tongtien, 0, ',', ' .') . 'VND' ?></span></li>
            <li>Total <span><?php echo number_format($tongtien, 0, ',', ' .') . ' VND' ?></span></li>
            <?php
            } else {
            ?>
            <li>Subtotal <span><?php echo 0 ?></span></li>
            <li>Total <span><?php echo 0 ?></span></li>
            <?php
            }
            ?>
          </ul>

          <!-- kiem tra neu nguoi dung dang ky roi thi moi cho dat hang -->
          <?php
          if (isset($_SESSION['dangky']) && isset($_SESSION['cart'])) {
          ?>
          <a href="content.php?quanly=thanhtoan" class="primary-btn">Tiến Hành Thanh Toán
          </a>
          <?php

          } elseif (!isset($_SESSION['cart'])) {
          ?>

          <a href="index.php" class="primary-btn">Vui Lòng Mua Sản Phẩm
          </a>
          <?php
          } else {
          ?>
          <a href="./pages/loginkhachhang/dangnhap.php" class="primary-btn">Vui Lòng Đăng Nhập Mua Hàng</a>
          <?php
          }
          ?>
          <!-- end kiem tra dang ky dat hang -->

        </div>
      </div>



    </div>
  </div>
</section>