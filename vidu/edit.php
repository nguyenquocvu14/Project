<?php
include "connect.php";

$this_id = $_GET['this_id'];
$sql = "SELECT * FROM sanpham WHERE id = ".$this_id;
$relust = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($relust);
var_dump($this_id);
if(isset($_POST['btn'])){
$name = $_POST['name'];
$price = $_POST['price'];
$warranty = $_POST['warranty'];
$img = $_FILES['hinh']['name'];
$img_tmp_name = $_FILES ['hinh']['tmp_name'];

$sql = "UPDATE sanpham SET name = '$name', img = '$img' , price = '$price',
warranty = '$warranty' WHERE id =".$this_id;
move_uploaded_file($img_tmp_name ,'image/product/'. $img);
mysqLi_query($conn, $sql);
header("location:getdata.php");
}
?>


<style>
    input{
        display:block;
    }
</style>
<h1>San Pham :<?php echo $row['name']?></h1>
<form method = "POST" enctype = "multipart/form-data">
    <label for="">name</label>
    <input type="text" name ="name" value = "<?php echo $row['name']?>">
    <label for="">img</label>
    <img src="./image/product/<?php echo $row['img']?>" alt=""style = "width :50px;">
    <input type="file" name ="hinh">
    <label for="">price</label>
    <input type="text" name ="price"value = "<?php echo $row['price']?>">
    <label for="">wanrranty</label>
    <input type="text" name ="warranty" value ="<?php echo $row['warranty']?>">
    <button name = "btn">EDIT</button>;
</form>