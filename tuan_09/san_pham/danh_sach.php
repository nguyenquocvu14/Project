<?php
$locahost = "localhost";
$username = "root";
$password = "";
$databasae = "ql_san_pham_db";
$conn = mysqli_connect($locahost, $username,$password,$databasae);
if(!$conn){
    echo "Ket Noi Khong Thanh Cong".mysqli_connect_error();
}
?>
<style>
    table, th, td
     {
  border: 1px solid black;
  border-collapse: collapse;
  text-align:center;
  width: 35%;
     }
  img{
      width: 80%;
  }
    
</style>

<table>
   <th>id</th>
   <th>ten</th>
   <th>loaisp</th>
   <th>hinh_anh</th>
   <th>don_gia</th>
   <th>so_luong</th>
   <th>mo_ta</th>
<?php
$sql = "SELECT * FROM san_pham";
$relust = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($relust);
if($rows > 0){
while($row = mysqli_fetch_assoc($relust))
{
    $id = $row['id'];
    echo"<tr>
   <td>$id</td>
   <td>$row[ten]</td>
   <td>$row[loai_san_pham_id]</td>
   <td><img src='image/$row[hinh_anh]'></td>
   <td>$row[don_gia] VND</td>
   <td>$row[so_luong]</td>
   <td>$row[mo_ta]</td>
   <td><a href='xoa.php ?id=$id'>Xoa</a></td>
   <td><a href='sua.php ?id=$id'>Sua</a></td>
   </tr>";
}

}
else{
    echo"<tr><td colspan ='7'>Khong Co San Pham</td></tr>";
}
?>
</table>
<a href="them_moi.php">Them</a>
