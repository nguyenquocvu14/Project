<?php
include "connect.php";

if(isset($_POST["btn"])){

    $ten = $_POST['ten'];
    $mk = $_POST['matkhau'];
    $level = 4;
    $sql = "INSERT INTO thanhvien (username, password, level)
    VALUES ('$ten', '$mk', '$level')";

    mysqli_query($conn, $sql);
    header("location:login.php");
}
?>
<form action="signup.php" method = "POST" enctype = "multipart/form-data">
    <label for="">username</label>
    <input type="text" name = "ten">
    <label for="">matkhau</label>
    <input type="password" name="matkhau">
    <button type = "submit" name ="btn">dang ky</button>
</form>