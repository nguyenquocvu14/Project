<?php
$so1 = $_POST['so1'];
$so2 = $_POST['so2'];
$tt = $_POST['tt'];
if(!empty($_POST['so1']) && !empty($_POST['so2']))
{
if($tt =="cong"){
   $tong = $so1 + $so2;
   echo" $so1 + $so2 = $tong";
}
elseif($tt =="tru")
{
    $hieu = $so1 - $so2;
    echo"$so1 - $so2 = $hieu";
 }
 elseif($tt =="nhan")
{
    $tich = $so1 * $so2;
    echo" $so1 * $so2 = $tich";
 }
 elseif($tt =="chia")
{
    $thuong = $so1/$so2;
    echo"$so1/$so2 = $thuong";
 }
}
else{
    echo"vui long nhap du lieu";
}