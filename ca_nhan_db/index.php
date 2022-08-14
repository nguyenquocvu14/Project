
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
    <link rel="stylesheet" href="./index.css">
<style>
p {
  text-align: right;
  padding: 0 2rem;
  font-size: 1.5rem;
  cursor: pointer;
}
.box{
  width: 20%;
  height:15rem;
  background-color:#e9ecef;
  position:fixed;
  top:3rem;
  right: 3rem;
  bottom: 0;
  display: none;
  border-radius: 2%;
  text-align: center;
  padding: 1rem 0;
  z-index: 1;
}
.mystyle{
  display: block;
}
header {
          background-color: #218C8D;
          color: white;
          padding: 6px;
        }
        .box img{
          width: 30%;
    border-radius: 50%;
        }
        .box a{
        
      margin-top: 2rem;
      display: inline-block;
      font-size: 1rem;
      background-color: #218C8D;
         padding: 0.5rem 2rem;
         border-radius: 2%;
          
        }
        .box h5{
          margin: 1rem 0;
          
        }
        .imgtext img{
          width: 4%;
          border-radius: 50%;
        }
      </style> 
  </head>
  <?php
//kiem tra session ton tai chua quay ve trang dang nhap
     session_start();
  if(!isset($_SESSION['myS'])){
    header('Location:/ca_nhan_db/dang_nhap/login.php');
}
?>
  <body>
        <header class="container-fluid">
          <div class="imgtext">
            <p><img src="./image/nobita.png"></p>
            </div>
          </header>
          <div class="box">
                <img src="./image/nobita.png" alt="">
                <h5><?php echo $_SESSION['myS']?></h5>
                <a href="./dang_nhap/logout.php">Đăng Xuất</a>
                 </div>
          <div class="container-fluid">
            <div class="row content">
              <div class="col-sm-3 sidenav">
               <h1>My Menu</h1>
               <?php include ("./inc/menu.php")?> 
              </div>
               <?php
      $module = "ca_nhan";
      if(isset($_GET["module"])){
        $module = $_GET["module"];
      }
      $page = "ca_nhan";
      if(isset($_GET["page"])){
        $page = $_GET["page"];
      }
      include("{$module}/{$page}");
      ?>    
    </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>

    <script src="index.js"></script>
  </body>
</html>
