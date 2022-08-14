<?php
include "connect.php";
// them du lieu
 $id = "";
 $username ='admin';
 $password ='123456';
 $level = 1;
 $sql = "INSERT INTO thanhvien (username, password, level)
             VALUES('$username', '$password', '$level')";

 if ($conn->query($sql) === TRUE) {
       echo "thanh cong";
     } else {
       echo "that bai";
     }
 //var_dump($row);
//  xoa du lieu
  // $sql = "DELETE FROM thanhvien WHERE id = '4'";
  // mysqLi_query($conn,$sql);

//sua du lieu

// $id = 3;
//  $taikhoan ='phuong';
//  $matkhau ='56565';
//  $level = 6;
//  $sql = " UPDATE thanhvien SET id = '$id', 
//  taikhoan ='$taikhoan', matkhau= '$matkhau', level='$level'
//  WHERE id =3 ";

//  if (mysqLi_query($conn, $sql)) {
//        echo "thanh cong";
//      } else {
//        echo "that bai";
//      }
 
