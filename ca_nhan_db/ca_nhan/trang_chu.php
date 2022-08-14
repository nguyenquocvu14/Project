
<style>
  .content{
    display:flex;
    flex-wrap:wrap;
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
  table,th,td{
    border: 1px solid black;
  border-collapse: collapse;
  text-align:center;
 
  }
  h2{
    margin: 0 auto;
    margin-bottom: 1.5rem;
}
img{
  width: 100%;
  border-radius:1.2rem;

}
</style>
<div class="container-fluid">
  

<div class="row content">
  <div class="col-sm-3 sidenav">
    <h4>Thông Tin Cá Nhân</h4>
   
   <table style ="width: 100%;">
    <tr>
        <th>Họ Tên</th>
        <th>Hình Ảnh</th>
        <th>Sở Thích</th>
        <th>Kinh Nghệm Làm Việc</th>
     
    </tr>
    <?php

require ("./inc/conn.php");
$sql = "SELECT * FROM ca_nhan";
$relust = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($relust)){
    echo"<tr>
    
    <td>$row[ho_ten]</td>
    <td>$row[anh_dai_dien]</td>
    <td>$row[so_thich]</td>
    <td>$row[kinh_nghiem]</td>
    </tr>";
}
    ?>
   
   </table>
    </div>


  <div class="col-sm-9">
  <h2>Tin Tức Mới Nhất</h2>
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