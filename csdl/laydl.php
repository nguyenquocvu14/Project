<style>
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align:center;
}
</style>
<table>
<th>id</th>
<th>taikhoan</th>
<th>matkhau</th>
<th>level</th>

<?php
 include "connect.php";
 $sql = "SELECT * FROM thanhvien";
 $result = mysqLi_query($conn,$sql);

 while($row = mysqLi_fetch_array($result))
 { 
         echo"<tr>
         <td>$row[id]</td>
         <td>$row[taikhoan]</td>
         <td>$row[matkhau]</td>
         <td>$row[level]</td>
         </tr>";
 }
 ?>
</table>