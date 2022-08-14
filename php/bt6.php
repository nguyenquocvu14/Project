<?php
for($i=1; $i<=12 ;$i++)
{
    //$binhphuong = $i*$i;
    $binhphuong = pow($i,2);
    echo "$i*$i = $binhphuong<br>";
}
echo "<br>";
$i = 1;
while($i<=12)
{
    //$binhphuong = $i*$i;
    $binhphuong = pow($i,2);
    echo "$i*$i = $binhphuong<br>";
    $i++;  
}
echo "<br>";
$i=1;
do {
    //$binhphuong = $i*$i;
    $binhphuong = pow($i,2);
    echo "$i*$i = $binhphuong<br>";
    $i++;    
} while ($i <= 12);
echo "<br>";
//bang cuu chuong
for($i=1; $i<=12 ;$i++)
{
    $binhphuong = 10*$i;
    echo "10*$i = $binhphuong<br>";
}