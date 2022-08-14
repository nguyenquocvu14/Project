<style>
    .col-sm-3 {
    width: 100%;
    padding: 0 30rem;
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
    margin-bottom: 0.5rem;
  }
  .sidenav {
    background-color: rgb(187, 213, 187); 
}
textarea{
  resize: none;
  height:10rem;
}
</style>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Form Liên Hệ</h4>
      <form class="form-horizontal" action="lien_he/xu_li_lien_he.php" method = "POST">
        <div class="form-group">
          <div class="col-sm-10">Họ Tên<input type="text" class="form-control" name="user" /></div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">Email<input type="email" class="form-control"name="email" /></div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">Điện Thoại<input type="text" class="form-control"name="phone" /></div>
        </div>
        <div class="form-group">
          Nội Dung<textarea  class="form-control" id="" cols="30" rows="10" name="content"></textarea>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="btn">Gửi</button>
          </div>
        </div>
      </form>
     
      </div>
  
 
  </div>