<?php

include("admin/config/config.php");
require("Carbon/autoload.php");

use Carbon\Carbon;
use Carbon\CarbonInterval;

$now = Carbon::now('Asia/Ho_Chi_Minh');
//insert vnpay
if (isset($_GET['vnp_Amount'])) {
  $vnp_Amount = $_GET['vnp_Amount'];
  $vnp_BankCode = $_GET['vnp_BankCode'];
  $vnp_BankTranNo = $_GET['vnp_BankTranNo'];
  $vnp_CardType = $_GET['vnp_CardType'];
  $vnp_OrderInfo = $_GET['vnp_OrderInfo'];
  $vnp_PayDate = $_GET['vnp_PayDate'];
  $vnp_TmnCode = $_GET['vnp_TmnCode'];
  $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
  $code_cart = $_SESSION['code_cart'];
  //them du lieu vnpay vao database
  $insert_vnpay = "INSERT INTO tbl_vnpay(
     vnp_amount,vnp_bankcode,vnp_banktranno,vnp_cardtype, vnp_orderinfo, vnp_paydate ,vnp_tmncode , vnp_transactionno,code_cart)
     VALUES('$vnp_Amount',' $vnp_BankCode','$vnp_BankTranNo',' $vnp_CardType','$vnp_OrderInfo','$vnp_PayDate ',' $vnp_TmnCode',' $vnp_TransactionNo','$code_cart')";
  $cart_query = mysqli_query($mysqli, $insert_vnpay);
  if ($cart_query) {
    echo '<h3>Giao Dịch VNPAY Thành Công</h3>';
    echo '<p>Vui Lòng Vào Trang <a target="_blank" href="#">Lịch Sử Đơn Hàng</a>Để Xem Chi Tiết Hóa Đơn Của Bạn</p>';
    unset($_SESSION['cart']);
  } else {
    echo 'Giao Dịch Thất Bại';
  }
} //
//insert momo
elseif ((isset($_GET['partnerCode']))) {
  $id_khachhang = $_SESSION['id_khachhang'];
  $momo_Amount = $_GET['amount'];
  $momo_partnerCode = $_GET['partnerCode'];
  $momo_orderId = $_GET['orderId'];
  $momo_OrderInfo = $_GET['orderInfo'];
  $momo_orderType = $_GET['orderType'];
  $momo_transId = $_GET['transId'];
  $momo_payType = $_GET['payType'];
  $code_order = rand(0, 9999);
  $cart_payment = 'momo';
  //them du lieu vnpay vao database
  $insert_momo = "INSERT INTO tbl_momo(partnercode,orderid,amount,orderinfo,
  ordertype,transid,paytype,code_cart)
    VALUES('$momo_partnerCode','$momo_orderId','$momo_Amount ','$momo_OrderInfo',
    '$momo_orderType ',' $momo_transId',' $momo_payType',' $code_order')";
  $cart_query = mysqli_query($mysqli, $insert_momo);
  //lay id shippng
  $sql_vanchuyen = mysqli_query($mysqli, "SELECT * FROM tbl_shipping WHERE id_dangky = '$id_khachhang' LIMIT 1");
  $row_vanchuyen = mysqli_fetch_array($sql_vanchuyen);
  $id_shipping = $row_vanchuyen['id_shipping'];
  if ($cart_query) {

    $insert_cart = "INSERT INTO tbl_cart (id_khachhang,code_cart,cart_status,cart_date,cart_payment,cart_shipping)
    VALUES('$id_khachhang','$code_order','1','$now','$cart_payment','$id_shipping')";
    $cart_query = mysqli_query($mysqli, $insert_cart);
    foreach ($_SESSION['cart'] as $key => $value) {
      $id_sanpham = $value['id'];
      $tensanpham = $value['tensanpham'];
      $soluong = $value['soluong'];

      $insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham,tensanpham,code_cart,soluongmua)
      VALUES('$id_sanpham','$tensanpham','$code_order','$soluong')";
      mysqli_query($mysqli, $insert_order_details);
    }
  }
  if ($cart_query) {
    echo '<h3>Giao Dịch MOMO Thành Công</h3>';
    echo '<p>Vui Lòng Vào Trang <a target="_blank" href="#">Lịch Sử Đơn Hàng</a>Để Xem Chi Tiết Hóa Đơn Của Bạn</p>';
    unset($_SESSION['cart']);
  } else {
    echo 'Giao Dịch Thất Bại';
  }
}
//insert thanh toan paypal
else {
  $id_khachhang = $_SESSION['id_khachhang'];
  $code_order = rand(0, 9999);
  $cart_payment = 'paypal';

  if (isset($_GET['thanhtoan']) == 'paypal') {
    //lay id shippng
    $sql_vanchuyen = mysqli_query($mysqli, "SELECT * FROM tbl_shipping WHERE id_dangky = '$id_khachhang' LIMIT 1");
    $row_vanchuyen = mysqli_fetch_array($sql_vanchuyen);
    $id_shipping = $row_vanchuyen['id_shipping'];
    //end
    $insert_cart = "INSERT INTO tbl_cart (id_khachhang,code_cart,cart_status,cart_date,cart_payment,cart_shipping)
  VALUES('$id_khachhang','$code_order','1','$now','$cart_payment','$id_shipping')";
    $cart_query = mysqli_query($mysqli, $insert_cart);
    if ($cart_query) {
      foreach ($_SESSION['cart'] as $key => $value) {
        $id_sanpham = $value['id'];
        $tensanpham = $value['tensanpham'];
        $soluong = $value['soluong'];

        $insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham,tensanpham,code_cart,soluongmua)
        VALUES('$id_sanpham','$tensanpham','$code_order','$soluong')";
        mysqli_query($mysqli, $insert_order_details);
      }
    }
    if ($cart_query) {
      echo '<h3>Giao Dịch PAYPAL Thành Công</h3>';
      echo '<p>Vui Lòng Vào Trang <a target="_blank" href="#">Lịch Sử Đơn Hàng</a>Để Xem Chi Tiết Hóa Đơn Của Bạn</p>';
      unset($_SESSION['cart']);
    } else {
      echo 'Giao Dịch Thất Bại';
    }
  }
}
?>
<style>
h3 {
  font-size: 2rem;
  text-align: center;

}

p {
  margin: 2rem 0;
  font-size: 2rem;
  text-align: center;
}
</style>
<h1 style="text-align:center;font-size:2rem">Đặt Hàng Thành Công</h1>