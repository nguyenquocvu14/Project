<link rel="stylesheet" href="../../admin/dist/css/adminlte.min.css">
<style>
.card {
  margin: 0 25rem;
  font-size: 1.5rem;
}
</style>
</head>

<body>
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Dang Ky</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="./xuli.php" method="POST">
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Ten Khach Hang</label>
          <input type="text" class="form-control" name="hovaten" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email </label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Dien Thoai</label>
          <input type="text" class="form-control" name="dienthoai" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Dia Chi</label>
          <input type="text" class="form-control" name="diachi" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mat Khau</label>
          <input type="password" name="matkhau" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" name="dangkykhachhang" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>