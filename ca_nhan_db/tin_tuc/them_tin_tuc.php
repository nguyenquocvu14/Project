
  </style>
<div class="col-sm-9">
                <div class="container">
                <h2>Thêm Tin Tức</h2>              
                    <form class="form-horizontal" action="tin_tuc/xu_li_them_tin.php" method = "POST" enctype = "multipart/form-data">
                      <div class="form-group">
                  <div class="col-sm-10">Tiêu Đề<input type="text" class="form-control"  name="td" /></div>
                      </div>
                      <div class="form-group">
                   <div class="col-sm-10">Hình Ảnh<input type="file" class="form-control"   name="img" /></div>
               </div>
                      <div class="form-group">
                        <div class="col-sm-10">Nội Dung Tóm Tắt <textarea name="summary" class="form-control" cols="30" rows="10"></textarea></div>               </div>

                  <div class="form-group">
                        <div class="col-sm-10">Nội Dung Đầy Đủ<textarea name="full" class="form-control" cols="30" rows="10"></textarea></div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default" name="btn">Thêm Mới</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  </div>
