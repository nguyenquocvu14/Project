<?php
//xu li mssv
$mssv = $_POST['mssv'];
if(preg_match ("/^[0-9]*$/",$mssv)&& !empty($_POST['mssv'])){
echo "MSSV : $mssv";
}
else{
    echo"hay nhap du lieu";
}
echo "<br>";

//xu li ten


$ten = $_POST['ten'];
if(!empty($_POST['ten']) && preg_match("/^[a-zA-Z ]*$/",$ten)){
  
    echo "Ho va Ten la:$ten";
    }
    else{
        echo"hay nhap du lieu";
    }


    //xu li gioi tinh
    echo "<br>";
    if(!empty($_POST['gioitinh'])){
    $gt = $_POST['gioitinh'];
    if($gt =='nam'){
    echo"Gioi tinh :Nam";
    }
    else{
    echo"Gioi tinh :Nu" ;
    }
}
else{
    
     echo"vui long chon";
    
}   
    //xu li ngon ngu
    echo "<br>";
    $nn = " ";
//     if(!isset($_POST['c++']))
//     {
    
//         $nn.= "c++";
// }
//         if(isset($_POST["php"]))
//         {
//             if(!empty($nn))

//             {

//             $nn.= " ,";

//         }
//             $nn.= "php";
//     }
$nn = "";
if(isset($_POST['c++']))
    {
    
       echo"c++";
    }
   
    if(isset($_POST['php']))
    {
    
       echo "php";
    }
    //xu li thanh pho
    echo "<br>";
    $tp = $_POST['thanhpho'];
    if(!empty($_POST['thanhpho']))
    {
 
            if($tp =="hcm")
            {
                echo "Thanh Pho HCM";
            } elseif($tp =="hn"){
                echo "Thanh Pho Ha Noi";
            }
            else{
                echo "Thanh Pho Can Tho";
            }
    }
    else{
         echo"vui long chon";
    }
//xu li tin nhan
        echo "<br>";
        $tn = $_POST['content'];
        echo "Tin Nhan : $tn";
       
        
    