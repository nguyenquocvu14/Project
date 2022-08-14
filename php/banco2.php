<?php
$banco = [
    [0,1,0,1,0,1,0,1],
    [1,0,1,0,1,0,1,0],
    [0,1,0,1,0,1,0,1],
    [1,0,1,0,1,0,1,0],
    [0,1,0,1,0,1,0,1],
    [1,0,1,0,1,0,1,0],
    [0,1,0,1,0,1,0,1],
    [1,0,1,0,1,0,1,0],
]
?>
<style>
    .trang{
        background-color:#fff;
    }
    .den{
        background-color:#000;
    }
    td{
        padding: 5px;
    }
</style>
<table border= "1">
<?php
    for($i=0;$i<count($banco);$i++)
    {
        echo"<tr>";

    for($j=0;$j<count($banco);$j++)
    {
            if($banco[$i][$j]==0){
                $cssclass = "trang";
            }
            else{
                $cssclass = "den";
            }
            echo"<td class = $cssclass></td>";
    }
            
       
       
}
?>
</table>