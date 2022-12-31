<?php
session_start();
include("../../admin/config/config.php");
//cong so luong

if (isset($_GET['cong'])) {

  $id = $_GET['cong'];
  foreach ($_SESSION['cart'] as $cart_item) {

    if ($cart_item['id'] != $id) {
      $product[] = array(
        'tensanpham' => $cart_item['tensanpham'],
        'id' => $cart_item['id'],
        'soluong' =>  $cart_item['soluong'],
        'giasp' => $cart_item['giasp'],
        'hinhanh' => $cart_item['hinhanh'],
        'masp' => $cart_item['masp']
      );
      $_SESSION['cart'] = $product;
    } else {
      if ($cart_item['soluong'] < 10) {
        $tangsoluong = $cart_item['soluong'] + 1;
        $product[] = array(
          'tensanpham' => $cart_item['tensanpham'],
          'id' => $cart_item['id'],
          'soluong' =>  $tangsoluong,
          'giasp' => $cart_item['giasp'],
          'hinhanh' => $cart_item['hinhanh'],
          'masp' => $cart_item['masp']
        );
      } else {
        $product[] = array(
          'tensanpham' => $cart_item['tensanpham'],
          'id' => $cart_item['id'],
          'soluong' =>  $cart_item['soluong'],
          'giasp' => $cart_item['giasp'],
          'hinhanh' => $cart_item['hinhanh'],
          'masp' => $cart_item['masp']
        );
      }
      $_SESSION['cart'] = $product;
    }
  }
  header("Location:../../content.php?quanly=giohang");
}

//end so luong


//tru so luong

if (isset($_GET['tru'])) {

  $id = $_GET['tru'];
  foreach ($_SESSION['cart'] as $cart_item) {

    if ($cart_item['id'] != $id) {
      $product[] = array(
        'tensanpham' => $cart_item['tensanpham'],
        'id' => $cart_item['id'],
        'soluong' =>  $cart_item['soluong'],
        'giasp' => $cart_item['giasp'],
        'hinhanh' => $cart_item['hinhanh'],
        'masp' => $cart_item['masp']
      );
      $_SESSION['cart'] = $product;
    } else {
      if ($cart_item['soluong'] > 1) {
        $tangsoluong = $cart_item['soluong'] - 1;
        $product[] = array(
          'tensanpham' => $cart_item['tensanpham'],
          'id' => $cart_item['id'],
          'soluong' =>  $tangsoluong,
          'giasp' => $cart_item['giasp'],
          'hinhanh' => $cart_item['hinhanh'],
          'masp' => $cart_item['masp']
        );
      } else {

        //nguoc lại nho hon 1 thi giu nguyen lai san pham
        $product[] = array(
          'tensanpham' => $cart_item['tensanpham'],
          'id' => $cart_item['id'],
          'soluong' =>  $cart_item['soluong'],
          'giasp' => $cart_item['giasp'],
          'hinhanh' => $cart_item['hinhanh'],
          'masp' => $cart_item['masp']
        );
      }
      $_SESSION['cart'] = $product;
    }
  }
  header("Location:../../content.php?quanly=giohang");
}

//end tru so luong
//xoa sp

if (isset($_SESSION['cart']) && isset($_GET['xoa'])) {

  $id = $_GET['xoa'];
  foreach ($_SESSION['cart'] as $cart_item) {
    if ($cart_item['id'] != $id) {
      $product[] = array(
        'tensanpham' => $cart_item['tensanpham'],
        'id' => $cart_item['id'],
        'soluong' =>  $cart_item['soluong'],
        'giasp' => $cart_item['giasp'],
        'hinhanh' => $cart_item['hinhanh'],
        'masp' => $cart_item['masp']
      );
    }
    $_SESSION['cart'] = $product;
  }
  header("Location:../../content.php?quanly=giohang");
}




//end xoa san pham 
//xoa tat ca

if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
  unset($_SESSION['cart']);
  header("Location:../../content.php?quanly=giohang");
}
//end xoa tat ca

//them san pham vao gio hang
//session_destroy();
if (isset($_POST['themgiohang'])) {
  $id = $_GET['idsanpham'];
  $soluong = 1;
  $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
  $query = mysqli_query($mysqli, $sql);
  $row = mysqli_fetch_array($query);
  // echo '<pre>';
  // print_r($row);
  // echo '<pre>';

  if ($row) {
    $new_product = array(array(
      'tensanpham' => $row['tensanpham'],
      'id' => $id,
      'soluong' => $soluong,
      'giasp' => $row['giasp'],
      'hinhanh' => $row['hinhanh'],
      'masp' => $row['masp']

    ));

    //kiem tra session gio hang ton tai

    if (isset($_SESSION['cart'])) {

      $found = false;
      foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] == $id) {

          $product[] = array(
            'tensanpham' => $cart_item['tensanpham'],
            'id' => $cart_item['id'],
            'soluong' => $soluong  = $cart_item['soluong'] + 1,
            'giasp' => $cart_item['giasp'],
            'hinhanh' => $cart_item['hinhanh'],
            'masp' => $cart_item['masp']
          );
          $found = true;
        } else {
          $product[] = array(
            'tensanpham' => $cart_item['tensanpham'],
            'id' => $cart_item['id'],
            'soluong' => $soluong =  $cart_item['soluong'],
            'giasp' => $cart_item['giasp'],
            'hinhanh' => $cart_item['hinhanh'],
            'masp' => $cart_item['masp']
          );
        }
      }
      if ($found == false) {
        $_SESSION['cart'] = array_merge($product, $new_product);
      } else {
        $_SESSION['cart'] = $product;
      }
    } else {

      $_SESSION['cart'] = $new_product;
    }
  }
  header("Location:../../content.php?quanly=giohang");
}