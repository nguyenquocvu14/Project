
<style>
     .col-sm-3 {
    width: 100%;
  }
  .content{
    display:flex;
    flex-wrap:wrap;
    align-items: center;
  }
  .image{
    width: 25%;
  }
  .news{
    width: 60%;
    padding: 1.5rem 0rem;
    
  }
  .image span{
  width: 5rem;
  height:5rem;
  border:1px solid red; 
  border-radius:2rem;
  display:block;
  }
  img{
    width: 100%;
    border-radius:1.2rem;
  }
  
</style>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Danh Sách Tin Tức</h4>
      <div class="content">
        <?php
      require ("./inc/conn.php");
    $sql = "SELECT * FROM tin_tuc";
    $relust = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($relust))
    {?>
     <div class="image">
     <span><img src="./image/<?php echo $row['anh']?>"></span>
       </div>
        <div class="news">
        <h5><?php echo $row['tieu_de']?></h5>
        <p><?php echo $row['tom_tat']?></p>

        </div>
        <?php } ?>
       
      </div>
   
</div>
</div>
  
 
  </div>