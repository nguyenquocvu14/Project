<style>
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align:center;
  width: 50%;
  height:40%;
  font-size: 35px;
}
img{
    width: 90%;
    height:90%;
}
</style>
<table>
<th>id</th>
<th>name</th>
<th>img</th>
<th>price</th>
<th>warranty</th>
<span><?php  ?></span>
 <?php 
include "connect.php";

$sql = "SELECT * FROM sanpham";
$result = mysqLi_query($conn , $sql);
$rows = mysqli_num_rows($result);
echo"<span>$rows Gio Hang</span>";
echo"<br>";
echo"<a href='add_product.php'>Them</a>";
echo"<br>";

while($row = mysqLi_fetch_assoc($result))
{
?>
  
   <tr>
    <td> <?php echo $row['id'] ?> </td>
    <td>  <?php echo $row['name'] ?></td>
    <td>  <img src="./image/product/<?php echo $row['img'] ?>"/></td>
    <td>  <?php echo $row['price']?></td>
    <td>  <?php echo $row['warranty']?></td>
    <td><a href="dele.php?this_id=<?php echo $row['id']?>">Xoa</a></td>
    <td><a href="edit.php?this_id=<?php echo $row['id']?>">Sua</a></td>

   
 <?php } ?>




</table>



