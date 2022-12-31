<?php
$mysqli = new mysqli("localhost", "root", "", "shop_products");

// Check connection
if ($mysqli->connect_errno) {
  echo "Ket Noi Khong Thanh Cong " . $mysqli->connect_error;
  exit();
}