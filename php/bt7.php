
<!-- // echo"nguyen \"quoc\" vu";
// echo "<br>";
// $a = "quoc vu";
// echo $a;
// echo is_string($a);
// echo gettype($a);
// $b=1;
// while($b<=6)
// {
//     echo $b;
//     $b++;
// }
// echo "<br>";
// function name($c,$d){
//     echo $c+$d;
// }
// name(7,9); -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      table{
         background-color: yellow;
        
      }
      table tr td{
         border:solid 2px #000;
   
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
   ?>
      <tr>
      <?php
      for($j = 1; $j<=7; $j++)
      {
         
         ?>  
      
         <td><?php echo $i*$j ?></td>
      <?php
      }
      ?>
   </tr>
   <?php
   }
   ?>
</table>
</body>
</html>


