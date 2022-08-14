<?php
session_start();
if(isset($_COOKIE['name']) && $_COOKIE['name']=='on')
{
    $_SESSION["daDangNhap"] = true;
    $_SESSION["user"]= $_COOKIE['danhnhap'];
}

if (isset($_SESSION["daDangNhap"]) && $_SESSION["daDangNhap"]){
    header( "Location: index.php");
}

if(isset($_POST["username"]) && isset($_POST["pwd"])){
    $username= $_POST["username"];
    $password = $_POST["pwd"];
    
    if($username== "admin" && $password== "123456"){
        $_SESSION["daDangNhap"] = true;
        $_SESSION["user"]= $username;
        if(isset($_POST['name'])&& $_POST['name']=='on' ){

            setcookie("name","on",time()+3600);
            setcookie("danhnhap","$username",time()+3600);
        }
        header("Location: index.php");
    }else{
        echo "Dang nhap that bai";
    }
}else {
?>
<form action="login.php" method="post">
    <table border=0>
        <tr>
            <td>Ten dang nhap: </td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Mat khau: </td>
            <td><input type="password" name="pwd"></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="name"> ghi nho dang nhap <br>
            <button type="submit">Dang nhap</button></td>
        </tr>
    </table>
</form>
<?php
}
?>