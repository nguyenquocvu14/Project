 <?php 
 require("../inc/conn.php");
$id = $_GET['this_id'];
$sql = "SELECT * FROM tin_tuc WHERE id =".$id;
$relust = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($relust);
  ?>  

<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../index.css">
</style>
<div class="col-sm-9">
                <div class="container">
                <h2>Thêm Tin Tức</h2>              
                    <form class="form-horizontal" action="tin_tuc/update.php" method = "POST" enctype = "multipart/form-data">
                      <div class="form-group">
                  <div class="col-sm-10">Tiêu Đề<input type="text" class="form-control"  name="" value="<?php echo $row['tieu_de']?>"/></div>
                      </div>
                      <div class="form-group">
                   <div class="col-sm-10">Hình Ảnh<input type="file" class="form-control"   name="img" /></div>
               </div>
                      <div class="form-group">
                        <div class="col-sm-10">Nội Dung Tóm Tắt <textarea name="summary" class="form-control" cols="30" rows="10"><?php echo $row['tom_tat']?></textarea></div>     

                  <div class="form-group">
                        <div class="col-sm-10">Nội Dung Đầy Đủ<textarea name="full" class="form-control" cols="30" rows="10"><?php echo $row['noi_dung']?></textarea></div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default" name="btn">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  </div>
                  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>