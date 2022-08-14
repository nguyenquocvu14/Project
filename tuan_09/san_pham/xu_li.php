<?php
$locahost = "localhost";
$username = "root";
$password = "";
$databasae = "ql_san_pham_db";
$conn = mysqli_connect($locahost, $username,$password,$databasae);
if(!$conn){
    echo "Ket Noi Khong Thanh Cong".mysqli_connect_error();
}
if(!empty($_POST['ten'])&&!empty($_POST['loaisp'])&&!empty($_POST['dongia'])&&!empty($_POST['soluong'])&&!empty($_POST['mota'])
 && is_uploaded_file($_FILES['hinh']['tmp_name']))
{


$ten = $_POST['ten'];
$loaisp = $_POST['loaisp'];
$hinh = $_FILES['hinh']['name'];
$tmp_name = $_FILES['hinh']['tmp_name'];
$dongia = $_POST['dongia'];
$soluong = $_POST['soluong'];
$mota = $_POST['mota'];
$sql = "INSERT INTO san_pham(ten, loai_san_pham_id, hinh_anh, don_gia, so_luong, mo_ta)
VALUES('$ten', '$loaisp', '$hinh', '$dongia', '$soluong','$mota')";
move_uploaded_file($tmp_name,"image/".$hinh);
mysqli_query($conn,$sql);
}
else{
    echo"vui long dien thong tin san pham";
}
?>
<a href="danh_sach.php">Hien Thi</a>