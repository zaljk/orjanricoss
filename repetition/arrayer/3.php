<?php
if(isset($_POST['x'])){
    $x = $_POST['x'];

    $arr = explode("@",$x);

    $i=0;
    $sum=0;
    while($i < count($arr)){
        $sum = $sum + $arr[$i];
        $i++;
    }

echo $sum;


}





?>

<form method="post">
<input type="text" name="x">
<input type="submit" value="Submit">

