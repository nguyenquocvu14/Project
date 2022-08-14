<?php
$localhost = "localhost";
$username = "root";
$pass = "";
$database = "ql_san_pham_db";
$id = $_GET['id'];
var_dump($id);
$conn = mysqli_connect($localhost,$username,$pass,$database);
if(!$conn){
    echo "Ket Noi Khong Thanh Cong".mysqli_connect_error();
}
else{
    
}

$sql = "SELECT * FROM san_pham WHERE id = $id";
$relust = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($relust);
if(!empty($_POST['ten'])&& !empty($_POST['loaisp']) && !empty($_POST['dongia'])&&!empty($_POST['soluong'])&& !empty($_POST['mota']) && is_uploaded_file($_FILES['hinh']['tmp_name'])){
$ten = $_POST['ten'];
$loaisp = $_POST['loaisp'];
$hinh = $_FILES['hinh']['name'];
$tmp_name = $_FILES['hinh']['tmp_name'];
$dongia = $_POST['dongia'];
$soluong = $_POST['soluong'];
$mota = $_POST['mota'];

$query = "UPDATE san_pham 
SET ten = '$ten',loai_san_pham_id = '$loaisp', hinh_anh = '$hinh', don_gia= '$dongia', so_luong = '$soluong', mo_ta= '$mota' WHERE id = $id";
move_uploaded_file($tmp_name,"image/".$hinh);
mysqli_query($conn,$query);
    
}
else{
    echo"vui long dien thong tin";
}
?>
<style>
    input{
        display:block;
    }
</style>
<form action="" method="POST" enctype = "multipart/form-data">
<label>Ten</label>
    <input type="text" name = "ten" value="<?php echo $row['ten']?>">
    <label>Loai San Pham</label>
    <input type="text" name = "loaisp" value="<?php echo $row['loai_san_pham_id']?>">
    <label>Hinh anh</label>
    <input type="file" name = "hinh">
    <label>Don Gia</label>
    <input type="text" name = "dongia" value="<?php echo $row['don_gia']?>">
    <label>So Luong</label>
    <input type="text" name = "soluong" value="<?php echo $row['so_luong']?>">
    <label>Mo ta</label>
    <br>
    <textarea name="mota" id="" cols="30" rows="10" value="<?php echo $row['mo_ta']?>"></textarea>
    <br>
    <button type = "submit" name ="btn">Gui</button>
</form>