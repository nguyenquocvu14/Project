<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">List</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">menu</a></li>
            <li class="breadcrumb-item active">List</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- <div class="col-md-12 text-right">

          <a href="" class="btn btn-success">Add</a>
        </div> -->
        <div class="col-md-12">
          <?php
          if (isset($_GET['action']) && isset($_GET['query'])) {
            $tam = $_GET['action'];
            $query = $_GET['query'];
          } else {
            $tam = '';
            $query = '';
          }

          if ($tam == 'quanlydanhmucsanpham' && $query == 'them') {

            include("modules/quanlydanhmucsp/them.php");
            // include("modules/quanlydanhmucsp/lietke.php");
          } elseif ($tam == 'quanlydanhmucsanpham' && $query == 'lietke') {
            include("modules/quanlydanhmucsp/lietke.php");
            //
          } elseif ($tam == 'quanlydanhmucsanpham' && $query == 'sua') {

            //quanlysp
            include("modules/quanlydanhmucsp/sua.php");
          } elseif ($tam == 'quanlysanpham' && $query == 'them') {

            include("modules/quanlysp/them.php");
            // include("modules/quanlysp/lietke.php");


          } elseif ($tam == 'quanlysanpham' && $query == 'lietke') {
            include("modules/quanlysp/lietke.php");
            //end quanlysp
          } elseif ($tam == 'quanlysanpham' && $query == 'sua') {
            include("modules/quanlysp/sua.php");
          } elseif ($tam == 'quanlydonhang' && $query == 'lietke') {


            include("modules/quanlydonhang/lienke.php");
          } elseif ($tam == 'donhang' && $query == 'xemdonhang') {


            include("modules/quanlydonhang/xemdonhang.php");
          } elseif ($tam == 'quanlydanhmucbaiviet' && $query == 'them') {
            include("modules/quanlydanhmucbaiviet/lietke.php");
            include("modules/quanlydanhmucbaiviet/them.php");
          } elseif ($tam == 'quanlydanhmucbaiviet' && $query == 'sua') {


            include("modules/quanlydanhmucbaiviet/sua.php");
          } elseif ($tam == 'quanlybaiviet' && $query == 'them') {
            include("modules/quanlybaiviet/lietke.php");
            include("modules/quanlybaiviet/them.php");
          } elseif ($tam == 'quanlybaiviet' && $query == 'sua') {


            include("modules/quanlybaiviet/sua.php");
          } elseif ($tam == 'quanlyweb' && $query == 'capnhat') {


            include("modules/quanlylienhe/quanly.php");
          } else {

            include("modules/dashboard.php");
          }
          ?>
        </div>
        <!-- link phan trang category danh muc san pham -->
        <div class="col-md-12">

        </div>


      </div>

    </div>
  </div>

</div>