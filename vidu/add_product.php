<style>
    input{
        display:block;
    }
</style>
<?php
    include "connect.php";
if(isset($_POST['btn'])){
  $name = $_POST['name'];
  $img = $_FILES['hinh']['name'];
  $img_tmp = $_FILES['hinh']['tmp_name'];
  $price = $_POST['price'];
  $warranty = $_POST['warranty'];
  $sql = "INSERT INTO sanpham(name, img, price ,warranty)
  VALUES('$name', '$img', '$price', '$warranty')";
 move_uploaded_file($img_tmp ,'image/product/'. $img);
  mysqLi_query($conn, $sql);
  header('location:getdata.php');
}
?>
<form action="add_product.php" method = "POST" enctype = "multipart/form-data">
    <label for="">name</label>
    <input type="text" name = "name">
    <label for="">img</label>
    <input type="file" name = "hinh">
    <label for="">price</label>
    <input type="text" name = "price">
    <label for="">wanrranty</label>
    <input type="text" name = "warranty">
    <button name = "btn">GUI</button>
</form>