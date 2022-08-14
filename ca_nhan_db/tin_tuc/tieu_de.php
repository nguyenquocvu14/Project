<style>

.content{
    display:flex;
    flex-wrap:wrap;
    
  }
  h2{

    margin-bottom: 1.5rem;
    text-align:center;
}
  
  .image{
    width: 35%;
  }
  .news{
    width: 60%;
    padding: 1.5rem 0rem;
  }
  .image span{
  width: 5rem;
  height:5rem;
  border:1px solid red;
  border-radius:1.2rem;
  display:block;
  }
  a{
    text-decoration: none;
    color:#000;
  }
  img{
  width: 100%;
  border-radius:1.2rem;

}
</style>
<div class="container-fluid">
<div class="row content">
  
  <div class="col-sm-3 sidenav">

  <div class="news">

  <?php

require ("./inc/conn.php");
$sql = "SELECT * FROM tin_tuc";
$relust = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($relust)){
            echo"<h5>$row[tieu_de]</h5>
            <p> Ngày Đăng: $row[ngay_dang]</p>
            <p>Nội Dung: $row[tom_tat]</p>";
      }
      ?>
      </div>
    </div>
  <div class="col-sm-9">
  <h2><a href="home.php?module=tin_tuc&page=ds_tin_tuc">Tin Tức Mới Nhất</a></h2>
  <div class="content">

  <?php
    require ("./inc/conn.php");
    $sql = "SELECT * FROM tin_tuc";
    $relust = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($relust))
    {?>
     <div class="image">;
             <span><img src="./image/<?php echo $row['anh']?>"></span>
       </div>
        <div class="news">
        <h5><?php echo $row['tieu_de']?></h5>
        <p><?php echo $row['ngay_dang']?></p>

        </div>
        <?php } ?>
        
      </div>
   
   
</div>
</div>