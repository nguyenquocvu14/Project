<?php
// if(isset($_REQUEST['ten'])){
// $ten = $_REQUEST['ten'];
// echo"<h1>toi ten la:$ten </h1>";
// }
// else{
//     echo"hay nhap du lieu vao day";
// }
// echo"</br>";
// if(isset($_REQUEST['a'])&&isset($_REQUEST['b'])){
//     $so1 = $_REQUEST['a'];
//     $so2 = $_REQUEST['b'];
//     $tong = $so1 + $so2;
//     echo"tong la : $tong";
//     }
//     else{
//         echo"hay nhap du lieu vao day";
//     }

//     echo"</br>";

    // if(isset($_REQUEST['n'])){
    //     $n = $_REQUEST['n'];
    //         if($n>=0){
    //             echo"do la so nguyen";
    //             }
    //             else{
    //                 echo"do khong phai la so nguyen"; 
    //             }
    // }else
    //         echo"hay nhap du lieu vao day";
    //     echo"</br>";
// $tong = 0;
//     if(isset($_REQUEST['n'])){
//         $n = $_REQUEST['n'];
//             for($i= 1 ; $i<=$n ;$i++){
//                 $tong+=$i; 
            
//             }
//             echo"$tong";
//     }else
//             echo"hay nhap du lieu vao day";
//         echo"</br>";

    function ktsngto($n){
        if($n<2)
        {
            return false;
        }
            for($i=2;$i<$n ;$i++){
                if($n%$i==0)
                {
                    return false;
                }     
            }
            return true;

        }    //goi ham
    if(isset($_REQUEST['n'])){
     $n = $_REQUEST['n'];
     if(ktsngto($n)){
         echo"so nguyen to";
     }

     else{
        echo"khong phai la so nguyen to"; 
    }

    }else
    {
            echo"hay nhap du lieu vao day";
    }
      echo"</br>";
// -----------------------------------------------------
//    if(isset($_REQUEST['n'])){
//      $n = $_REQUEST['n'];
//             for($i= 1 ; $i<=$n ;$i++){
//               if($n%$i==0)
            //   {
            //   $max = $i;
            //   }
    
    //     echo"$i ";
    //         }
    // }else
    //         echo"hay nhap du lieu vao day";
    //     echo"</br>";


    