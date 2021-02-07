<?php
include 'head.php';
$i = 1;
$sum = 1;

while($i < 10){
    $sum = $sum * $i;
    $i++;

}
echo $sum;

?>