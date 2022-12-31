<link rel="stylesheet" href="../../admin/dist/css/adminlte.min.css">
<div class="card card-info" style="margin: 0 25rem;">
  <div class="card-header">
    <h3 class="card-title">Đoi mat khau</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form class="form-horizontal" action="./xuli.php" method="POST">
    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tai Khoan</label>
        <div class="col-sm-10">
          <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Mat Khau Cu</label>
        <div class="col-sm-10">
          <input type="password" name="matkhaucu" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Mat Khau Moi</label>
        <div class="col-sm-10">
          <input type="password" name="matkhaumoi" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-info" name="doimatkhau">DOI MAT KHAU</button>

    </div>
    <!-- /.card-footer -->
  </form>
</div>