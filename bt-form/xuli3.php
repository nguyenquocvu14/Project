<?php
//  && $ns > 0 && $ns > 1000 && $ns < 10000
$ns = $_POST['ns'];
$namhientai = date('Y',time());
// echo "$namhientai";
if(!empty($_POST['ns'])  &&  $ns > 0){
    $namsinh = $namhientai - (int)$ns;
    if($namsinh > 0){
     
        echo " so tuoi cua ban la $namsinh tuoi";

    }
    else{
       
        echo " ban chua co tuoi";
}

}else{
    echo " ban chua co tuoi";
}