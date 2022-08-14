<?php
//ket noi database
include "connect.php";
//tao database
// $sql = "CREATE DATABASE web";

// //truy van database
// if(mysqLi_query($conn , $sql)){
//     echo"tao thanh cong";
// }
// else{
//     echo"tao khong thanh cong";

// }
// -----------------------------------------------
// tao bang
 $sql = "CREATE TABLE thanhvien(
   
    id INT(6) UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
     username VARCHAR(20) NOT NULL,
     password VARCHAR(20) NOT NULL,
     level INT(6)
 )";

   //truy van database
 if($conn->query($sql) == TRUE){
     echo"tao thanh cong";
 }
 else{
     echo"tao khong thanh cong";
  }

// -----------------------------------------------

