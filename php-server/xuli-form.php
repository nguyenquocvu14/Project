<?php
//!empty kiem tra chuoi rong khong
if(isset( $_REQUEST['ten'])&&!empty( $_REQUEST['ten'])){
$ten = $_REQUEST['ten'];
echo "ten cua toi la : $ten";
}
else{
    echo"vui long nhap du lieu";
}
// ---------------------------------------------------
// $so1 = $_REQUEST['a'];
// $so2 = $_REQUEST['b'];
// $tong = $so1+$so2;
// echo "$so1+$so2 = $tong";
// ---------------------------------------------------
// $a = $_REQUEST['a'];
// $b = $_REQUEST['b'];
// $c = $_REQUEST['c'];
// function cv($a,$b,$c)
// {
//     if($a+$b>$c && $a+$c>$b && $b+$c>$a)
//     {
//         $cv = $a+$b+$c;
//         echo"chu vi tam giac la $cv";
//     }
//     else{
//         echo"khong phai lam tam giac";
//     }
// }
// $cv = cv($a,$b,$c);
// echo "$cv";
// echo"<br>";
// function dientich($a,$b,$c){
//     if($a+$b>$c && $a+$c>$b && $b+$c>$a){
//         $cv = $a+$b+$c;
//         $p = $cv/2;
//         $dientich = sqrt($p*($p-$a)*$p*($p-$b)*$p*($p-$c));
//         echo "dien tich tam giac $dientich";
//     }
//     else{
//     echo"khong phai lam tam giac";
// }
// }
// $i = dientich($a,$b,$c);
// echo"$i";
