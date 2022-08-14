<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      table{
         background-color: while; 
      }
      table tr td{
         border: solid 2px #000;
      }
      td{
         text-align: center;
         width: 30px;
         height: 30px;
      }
   </style>
</head>
<body>
<table style="border-collapse:collapse">
   <?php
   for($i = 1; $i<=7 ; $i++)
   {
      echo"<tr>";
      for($j = 1; $j<=7; $j++)
      {    
        if(($i+$j)%2==0){
            echo '<td></td>';
          }
        else{
            echo'<td style="background-color:black"></td>';
        }
       
      }  

   }
   ?>
</table>
</body>
</html>