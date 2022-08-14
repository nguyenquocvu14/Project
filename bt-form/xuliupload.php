<?php
// var_dump($_FILES['taptin']);
if(is_uploaded_file($_FILES['taptin']['tmp_name'])){
$file = $_FILES['taptin']['name'];
$filename = explode("." , $file);
$ten = $filename[0];
$mr = $filename[1];
$tg = time();
$t = "{$ten}_{$tg}.{$mr}";
$upload = "image/".$t;
move_uploaded_file($_FILES['taptin']['tmp_name'],$upload);
echo"<img src='$upload' alt=''style='width:50px;heigth:50px';>";
// echo"tai tep thanh cong";
}
else
echo"tai tep that bai";
