<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>

<link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <div class="wraprap">
      <div class="banner">Banner</div>
      <div class="content">
        <div class="menu">
        <?php include ("inc/menu.php");?>
        </div>
        <div class="mainContent">
      <?php
      $module = "san_pham";
      if(isset($_GET["module"])){
        $module = $_GET["module"];
      }
      $page = "them_moi";
      if(isset($_GET["page"])){
        $page = $_GET["page"];
      }
      include("{$module}/{$page}.php");
      ?>
        </div>
       
      </div>
      <div class="footer">Footer</div>
    </div>
  </body>
</html>
