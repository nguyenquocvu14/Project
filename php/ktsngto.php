<?php
function kiemtrasongto($n){
    if($n<2){
        return false;
    }
    for($i = 2 ; $i < $n ; $i++){
        if($n%$i==0){
            return false;
        }

    }
    return true;
}
//goi ham
for($i=1;$i<4;$i++){
if(kiemtrasongto($i)){
    echo"$i</br>";
}
}