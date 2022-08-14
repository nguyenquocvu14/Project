
<?php
$id = $_GET['this'];
var_dump($id);
$locahost = "localhost";
$username = "root";
$password = "";
$databasae = "ql_san_pham_db";
$conn = mysqli_connect($locahost, $username,$password,$databasae);
if(!$conn){
    echo "Ket Noi Khong Thanh Cong".mysqli_connect_error();
}
$sql = "SELECT * FROM loai_san_pham WHERE id = ".$id;
$relust = mysqli_query($conn , $sql);
$row =mysqli_fetch_assoc($relust);

if(isset($_POST['btn']))
{
$ten = $_POST['name'];
$ids = $_POST['id'];
$sql = "UPDATE loai_san_pham SET id = '$ids', ten = '$ten' WHERE id = ".$id;
mysqli_query($conn,$sql);
}
?>
<form action= "" method = "POST">
id<input type="text" name = "id" value = "<?php echo $row['id']?>" >
    Ten San Pham<input type="text" name="name" value = "<?php echo $row['ten']?>">
    <button type="submit" name = "btn">Gui</button>
    <a href="danh_sach.php">hien thi</a>
</form>