<style>
  /* .content {
  display: flex;
  flex-wrap: wrap;
} */
  form {
    display: flex;

    justify-content: space-between;
  }
  .formcontroll {
    width: 100%;

    height: 1500px;
  }
  .image {
    width: 30%;
  }
  .content {
    width: 100%;
  }
  .image span {
    width: 10rem;
    height: 10rem;

    display: block;
    margin: 0 auto;
    transform: translateY(60%);
  }
  .img {
    padding: 4rem 1rem;
    border: 1px solid;
    width: 100%;
    border-radius: 1rem;
  }
</style>
<div class="col-sm-9">
  <div class="container">
    <h2>Thông Tin Cá Nhân</h2>

    <div class="formcontroll">
      <form class="form-horizontal" action="ca_nhan/xu_li_ca_nhan.php" method = "POST" enctype = "multipart/form-data">
        <div class="content">
          <div class="form-group">
            <div class="col-sm-10">Họ Tên<input type="text" class="form-control" name="user" /></div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">Email<input type="text" class="form-control" name="email" /></div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">Điện Thoai<input type="text" class="form-control" name="phone" /></div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">Sở Thích <textarea name="interests" class="form-control" cols="30" rows="10"></textarea></div>
          </div>

          <div class="form-group">
            <div class="col-sm-10">Kinh Nghiệm Làm Việc<textarea name="experience" class="form-control" cols="30" rows="10"></textarea></div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default" name="btn">Lưu</button>
            </div>
          </div>
        </div>

        <div class="image">
          <span>Hình Ảnh<input type="file" class="img"    name ="hinh_anh" /></span>
        </div>
      </form>
    </div>
  </div>
</div>
