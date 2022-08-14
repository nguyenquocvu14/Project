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
    <!-- <link rel="stylesheet" href="./bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css"> -->
    <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: rgb(187, 213, 187);;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
  
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }

    .col-sm-3{
width: 70%;
    }
    .col-sm-9{
width: 30%;
background-color:rgb(156 162 168);;

    }
    .bg-light {
  
    background-color: #218C8D !important;
    font-size: 2rem;
    }
    .nav-link{
        color:#fff;
    }
  </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
<?php  include ("./inc/nav.php")?>

</nav>


  <?php
      $module = "ca_nhan";
      if(isset($_GET["module"])){
        $module = $_GET["module"];
      }
      $page = "trang_chu";
      if(isset($_GET["page"])){
        $page = $_GET["page"];
      }
      include("{$module}/{$page}.php");
      ?> 
       
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <script src="./bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
  </body>
</html>
