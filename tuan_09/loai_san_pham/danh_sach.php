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
    }
</style>

<table>
   <th>id</th>
   <th>ten</th>
<?php
$sql = "SELECT * FROM loai_san_pham";
$relust = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($relust)){
$id = $row ['id'];


    echo"<tr>
    <td>$id</td>
    <td>$row[ten]</td>
    <td><a href='xoa.php ?this= $id'>XOA</a></td>
    <td><a href='sua.php ?this= $id'>sua</a></td>
    </tr>";
}
?>
</table>
<a href="them_moi.php">Them</a>



