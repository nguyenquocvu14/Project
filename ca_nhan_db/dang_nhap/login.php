<?php
session_start();

if(isset($_COOKIE["name"]) && $_COOKIE["name"]=="on")
{
    $_SESSION["myS"] = TRUE;
    $_SESSION["myS"]= $_COOKIE["taikhoan"];
}
//kiem tra session da toan tai thi o trang index kh dc ve login
if(isset($_SESSION['myS'])){
  header('location:/ca_nhan_db/index.php');
}

if(isset($_POST['user']) && isset($_POST['pwd'])){
 
  $username = $_POST['user'];
  $password = $_POST['pwd'];
  if($username == 'quocvu' && $password == "12345"){
    $_SESSION['myS'] = "$username";

    if(isset($_POST['box']) && $_POST['box']=='on'){
      setcookie("name","on",time()+ 3600);
      setcookie("taikhoan",$username,time()+ 3600);
    }
    header("location:/ca_nhan_db/index.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <style>
  body {
    background-color: rgb(187, 213, 187);
  }
  .container {
    width: 30%;
    margin: 7rem auto;
    background-color: rgba(190, 27, 227, 0.2);
    border-radius: 0.5rem;
    padding: 2rem 2rem;
  }
  .col-sm-10 {
    width: 100%;
  }
  .btn {
    width: 100%;
    background-color: rgb(212, 74, 155);
    color: #000;
  }
  .btn:hover {
    background-color: rgb(244, 100, 223);
    color: #fff;
  }
  h2 {
    text-align: center;
  }
  .form-group {
    margin-bottom: 1.5rem;
  }
</style>
  </head>
  <body>
    <div class="container">
      <h2>Đăng Nhập</h2>
      <form class="form-horizontal" action="login.php" method ="POST">
        <div class="form-group">
          <div class="col-sm-10">Tên Đăng Nhập<input type="text" class="form-control"name="user"/></div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">Mật Khẩu<input type="password" class="form-control"name="pwd"/></div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label><input type="checkbox"name="box"/> Ghi Nhớ Đăng Nhập</label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="btn">Đăng Nhập</button>
          </div>
        </div>
      </form>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


