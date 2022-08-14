<?php
//$thanghientai = date("m",time());
$thanghientai = date("F",time());
echo $thanghientai;
echo "<br>";
echo gettype($thanghientai);
echo "<br>";
if($thanghientai=="August"){
    echo"It's August, so it'sreally hot.";
}
else{
echo "Not August, so at least not in the peak of the heat.";
}
?>