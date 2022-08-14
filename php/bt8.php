<?php
$QLVT = [
    ["MAVT"=>"VT01","TENVT"=>"XI MANG","DVT"=>"BAO","GIA MUA"=>"50000","SLTON"=>"5000"],
    ["MAVT"=>"VT02","TENVT"=>"CAT","DVT"=>"KHOI","GIA MUA"=>"45000","SLTON"=>"50000"],
    ["MAVT"=>"VT03","TENVT"=>"GACH ONG","DVT"=>"VIEN","GIA MUA"=>"120","SLTON"=>"800000"],
    ["MAVT"=>"VT04","TENVT"=>"GACH THE","DVT"=>"VIEN","GIA MUA"=>"110","SLTON"=>"800000"],
    ["MAVT"=>"VT05","TENVT"=>"DA LON","DVT"=>"KHOI","GIA MUA"=>"25000","SLTON"=>"1000000"],
    ["MAVT"=>"VT06","TENVT"=>"DA NHO","DVT"=>"KHOI","GIA MUA"=>"33000","SLTON"=>"1000000"],
    ["MAVT"=>"VT07","TENVT"=>"LAM GIO","DVT"=>"CAI","GIA MUA"=>"15000","SLTON"=>"50000"],
]
?>
<style>
    td{
        text-align:center;
        font-size:15px;
        
    }
    tr:first-child{
        background-color:#6a6a6a;
        font-size:20px;
    }
</style>


<table border = "1" cellspacing = "1">
    <tr>
    <td>MAVT</td>
    <td>TENVT</td>
    <td>DVT</td>
    <td>GIA MUA</td>
    <td>SLTON</td>
    </tr>
    
    
        <?php
   for($i = 0 ; $i<count($QLVT);$i++){
         ?>
         <tr>
      <td><?= $QLVT[$i]["MAVT"]?></td>
      <td><?= $QLVT[$i]["TENVT"]?></td>
      <td><?= $QLVT[$i]["DVT"]?></td>
      <td><?= $QLVT[$i]["GIA MUA"]?></td>
      <td><?= $QLVT[$i]["SLTON"]?></td>
      </tr>
        <?php
   }
   ?>
    
</table>