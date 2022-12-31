<?php
// 
session_start();
include("../../admin/config/config.php");
require("../../Carbon/autoload.php");
require("../../mail/sendmail.php");
require_once("config_vnpay.php");

use Carbon\Carbon;
use Carbon\CarbonInterval;

$now = Carbon::now('Asia/Ho_Chi_Minh');


//
//import gui gmail thanh toan
if (isset($_POST['redirect'])) {
  $id_khachhang = $_SESSION['id_khachhang'];
  $code_order = rand(0, 9999);
  $hovaten = $_POST['hovaten'];
  $dienthoai = $_POST['dienthoai'];
  $email = $_POST['email'];
  $diachi = $_POST['diachi'];
  $cart_payment = $_POST['pay'];
  //insert thong tin van chuyen
  $insert_shipping = mysqli_query($mysqli, "INSERT INTO tbl_shipping(name,phone,email,address,id_dangky)
  VALUES( '$hovaten','$dienthoai','$email','$diachi','$id_khachhang')");
  //end thong tin van chuyen
  //gui tong tien vnpay 
  $tongtien = 0;
  foreach ($_SESSION['cart'] as $key => $value) {
    $thanhtien = $value['soluong'] * $value['giasp'];
    $tongtien +=  $thanhtien;
  }
  //
  if ($cart_payment == 'tienmat' || $cart_payment == 'chuyenkhoan') {
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
      unset($_SESSION['cart']);
      header("Location:../../content.php?quanly=camon");
    }
  } elseif ($cart_payment == 'vnpay') {
    //thanh toan vnpay

    $vnp_TxnRef = $code_order; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
    $vnp_OrderInfo = 'Thanh Toan Don Hang';
    $vnp_OrderType = 'billpayment';
    $vnp_Amount = $tongtien * 100;
    $vnp_Locale = 'vn';
    $vnp_BankCode = 'NCB';
    $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
    //Add Params of 2.0.1 Version
    $vnp_ExpireDate = $expire;

    $inputData = array(
      "vnp_Version" => "2.1.0",
      "vnp_TmnCode" => $vnp_TmnCode,
      "vnp_Amount" => $vnp_Amount,
      "vnp_Command" => "pay",
      "vnp_CreateDate" => date('YmdHis'),
      "vnp_CurrCode" => "VND",
      "vnp_IpAddr" => $vnp_IpAddr,
      "vnp_Locale" => $vnp_Locale,
      "vnp_OrderInfo" => $vnp_OrderInfo,
      "vnp_OrderType" => $vnp_OrderType,
      "vnp_ReturnUrl" => $vnp_Returnurl,
      "vnp_TxnRef" => $vnp_TxnRef,
      "vnp_ExpireDate" => $vnp_ExpireDate,

    );

    if (isset($vnp_BankCode) && $vnp_BankCode != "") {
      $inputData['vnp_BankCode'] = $vnp_BankCode;
    }
    if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
      $inputData['vnp_Bill_State'] = $vnp_Bill_State;
    }

    //var_dump($inputData);
    ksort($inputData);
    $query = "";
    $i = 0;
    $hashdata = "";
    foreach ($inputData as $key => $value) {
      if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
      } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
      }
      $query .= urlencode($key) . "=" . urlencode($value) . '&';
    }

    $vnp_Url = $vnp_Url . "?" . $query;
    if (isset($vnp_HashSecret)) {
      $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
      $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
    }
    $returnData = array(
      'code' => '00', 'message' => 'success', 'data' => $vnp_Url
    );
    if (isset($_POST['redirect'])) {
      $_SESSION['code_cart'] = $code_order;
      //
      $sql_vanchuyen = mysqli_query($mysqli, "SELECT * FROM tbl_shipping WHERE id_dangky = '$id_khachhang' LIMIT 1");
      $row_vanchuyen = mysqli_fetch_array($sql_vanchuyen);
      $id_shipping = $row_vanchuyen['id_shipping'];
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
      //

      header('Location: ' . $vnp_Url);
      die();
    } else {
      echo json_encode($returnData);
    }
    // vui lòng tham khảo thêm tại code demo
  } else if ($cart_payment == 'paypal') {
    //thanh toan paypal
    echo 'thanh toan paypal';
  } else if ($cart_payment == 'momo') {
    echo 'thanh toan momo';
    //thanh toan momo
  }
  // ---------------------------------------------------------
  // xu li dat hang qua mail
  if ($cart_query) {
    // $maildathang =  $_SESSION['email'];
    // $tieude = "Dat Hang Tai Shop Nguyen Vu Thanh Cong";
    // $noidung = "<p>Cam On Ban Da Dat Hang.Ma don hang:" . $code_order . "</p>";
    // $noidung .= "<h4>Don Hang Bao Gom Cac San Pham :</h4>";
    // foreach ($_SESSION['cart'] as $key => $value) {
    //   $thanhtien = $value['soluong'] * $value['giasp'];
    //   $tongtien +=  $thanhtien;
    //   $noidung .=
    //     "<ul>
    //    <li>ten san pham : " . $value['tensanpham'] . "</li>
    //    <li>masp : " . $value['masp'] . "</li>
    //    <li>soluong : " . $value['soluong'] . "</li>
    //    <li>gia san pham :" . number_format($value['giasp'], 0, ',', ' .') . ' VND' . "</li>
    //    </ul>";
    // $mail = new Mailer();
    // $mail->dathang($tieude, $noidung, $maildathang);
    // }
    //end
    // unset($_SESSION['cart']);
  }
}