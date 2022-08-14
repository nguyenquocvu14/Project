<?php
var_dump($_FILES['hinh']);
foreach($_FILES['hinh']['name'] as $key=>$value){
 move_uploaded_file($_FILES['hinh']['tmp_name'][$key],"image/".$value);
 echo"<img src='image/$value' style='width:50px;heigth:50px'>";
}
?>
