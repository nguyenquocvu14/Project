<script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
<section class="breadcrumb-section set-bg" data-setbg="images/breadcrumb.jpg"
  style="background-image: url(&quot;images/breadcrumb.jpg&quot;);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="breadcrumb__text">
          <h2>Vegetables Details</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="checkout spad">
  <div class="container">

    <div class="checkout__form">
      <h4>
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Chi Tiết Thanh Toán</font>
        </font>
      </h4>
      <form action="./pages/main/xulithanhtoan.php" method="POST">
        <div class="row">
          <div class="col-lg-8 col-md-6">
            <div class="row">
              <div class="col-lg-6">
                <div class="checkout__input">
                  <?php
                  $id_khachhang =  $_SESSION['id_khachhang'];
                  $sql = "SELECT * FROM tbl_dangky WHERE id_dangky = '$id_khachhang' LIMIT 1";
                  $query = mysqli_query($mysqli, $sql);
                  while ($row = mysqli_fetch_array($query)) {
                  ?>
                  <p>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Họ Và Tên </font>
                    </font><span>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">*</font>
                      </font>
                    </span>
                  </p>
                  <input type="text" name="hovaten" value="<?php echo $row['tenkhachhang'] ?>">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="checkout__input">
                  <p>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Phone </font>
                    </font><span>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">*</font>
                      </font>
                    </span>
                  </p>
                  <input type="text" maxlength="10" name="dienthoai" value="<?php echo $row['dienthoai'] ?>">
                </div>
              </div>
            </div>
            <div class=" checkout__input">
              <p>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Email </font>
                </font><span>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">*</font>
                  </font>
                </span>
              </p>
              <input type="email" name="email" value="<?php echo $row['email'] ?>">
            </div>
            <div class="checkout__input">
              <p>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Địa Chỉ </font>
                </font><span>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">*</font>
                  </font>
                </span>
              </p>
              <input type="text" name="diachi" value="<?php echo $row['diachi'] ?>" placeholder=" Địa chỉ đường phố"
                class="checkout__input__add">

            </div>

            <?php
                  }
          ?>

          </div>
          <div class="col-lg-4 col-md-6">
            <div class="checkout__order">
              <h4>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Đơn Đặt Hàng Của Bạn</font>
                </font>
              </h4>
              <div class="checkout__order__products">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Các sản phẩm</font>
                </font><span>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tổng cộng</font>
                  </font>
                </span>
              </div>
              <ul>
                <?php
                if (isset($_SESSION['cart'])) {

                  $tongtien = 0;
                  $thanhtien = 0;
                  foreach ($_SESSION['cart'] as $cart_item) {
                    $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
                    $tongtien +=  $thanhtien;

                ?>
                <li>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit; margin:1rem"><?php echo $cart_item['tensanpham'] ?></font>
                    <font style="vertical-align: inherit;">x<?php echo $cart_item['soluong'] ?></font>
                  </font><span>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">
                        <?php echo number_format($thanhtien, 0, ',', '.') . ' ' . 'VND' ?></font>
                    </font>
                  </span>
                </li>
                <?php
                  }
                }
                ?>

              </ul>
              <div class="checkout__order__subtotal">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Tổng Phụ</font>
                </font><span>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                      <?php echo number_format($tongtien, 0, ',', '.') . ' ' . 'VND' ?></font>
                  </font>
                </span>
              </div>
              <div class="checkout__order__total">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Tổng cộng</font>
                </font><span>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                      <?php echo number_format($tongtien, 0, ',', '.') . ' ' . 'VND' ?></font>
                  </font>
                </span>
              </div>

      </form>
      <h2 style="text-align: center; font-size:2rem;font-weight: 600;">Hình Thức Thanh Toán</h2>
      <div class="checkout__input__checkbox">

        <label for="payment">
          Tiền Mặt
          <input type="radio" id="payment" name="pay" value="tienmat">
          <span class="checkmark"></span>
        </label>
      </div>

      <div class="checkout__input__checkbox">
        <label for="chuyenkhoan">
          Chuyển Khoản
          <input type="radio" id="chuyenkhoan" name="pay" value="chuyenkhoan">
          <span class="checkmark"></span>
        </label>
      </div>


      <div class="checkout__input__checkbox">
        <label for="vnpay">

          <input type="radio" id="vnpay" name="pay" value="vnpay">
          <span class="checkmark"></span>
        </label>
        <div class="pay-img">
          <img src="./images/vnpay.png" alt="">
          <span>VNPAY</span>
        </div>

      </div>
      <?php
      $tongtien_vnd = $tongtien;
      $tongtien_usd = round($tongtien / 23000);
      ?>
      <div id="checkout__input__checkbox">
        <input type="hidden" id="tongtien" value="<?php echo $tongtien_usd ?>">
        <div id='paypal-button'></div>

      </div>
      <form action="pages/main/xulythanhtoanmomo.php" method="POST" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="tongtien_vnd" value="<?php echo $tongtien_vnd ?>">
        <button style="background-color: #d82d8b;color:#fff;border:none;padding:1rem" type="submit" name="momo">Thanh
          Toán MoMo Qua
          Mã
          QR</button>
      </form>
      <form action="pages/main/xulythanhtoanmomo_atm.php" method="POST" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="tongtien_vnd" value="<?php echo $tongtien_vnd ?>">
        <button style="background-color: #d82d8b;color:#fff;border:none;padding:1rem" type="submit"
          name="momo_qtm">Thanh Toán MOMO
          ATM</button>
      </form>
      <form action="pages/main/xulythanhtoanonepay.php" method="POST" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="tongtien_vnd" value="<?php echo $tongtien_vnd ?>">
        <button style="background-color: #d82d8b;color:#fff;border:none;padding:1rem" type="submit"
          name="momo_qtm">Thanh Toán
          OnePay</button>
      </form>
      <button type="submit" class="site-btn" name="redirect">
        <font name="redirect" style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">ĐẶT HÀNG</font>
        </font>
      </button>



    </div>
  </div>
  </div>
  <!-- </form> -->
  </div>
  </div>

</section>