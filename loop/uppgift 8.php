<?php
$sum = 0;
$i = 0;
while($sum < 1000000){
    $sum = $sum + (pow(2, $i));
    $i++;
    $x++;
}
echo $i;
?>

