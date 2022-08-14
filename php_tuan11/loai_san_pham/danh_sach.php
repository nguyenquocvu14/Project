<?php
require ("./inc/conn.php");
?>
<h1>Danh Dach Cac Loai San Pham</h1>
<style>
td,
tr,
th {
  text-align: center;
  width: 20%; 
  font-size:20px;
  
 }
table{
  margin: 0 auto;
  border-collapse: collapse;

}
h1{
    text-align:center;
}
a{
    text-decoration: none;
}
</style>
<table border = "2">
    <th>id</th>
    <th>ten san pham</th>
    <th colspan="2">Chinh Sua</th>
    <?php
    $sql = "SELECT * FROM loai_san_pham";
    $relust = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($relust)){
        $id = $row['id'];
        echo"<tr>
        <td>$id</td>
        <td>$row[ten]</td>
        <td><a href='loai_san_pham/xoa.php?this=$id'>Xoa</a></td>
        <td><a href='loai_san_pham/capnhat.php?this=$id'>Cap Nhat</a></td>
        </tr>";
    }
    ?>
</table>
