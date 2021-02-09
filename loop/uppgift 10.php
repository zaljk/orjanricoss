<?php
if(isset($_POST['r'])){
    $i = $_POST['r'];
    $sum = 1;
$y = 1;
while($y <= $i){
    $sum = $sum * $y;

$y++;
}

echo $sum;
}

?>
<form method="post">
    <input type="number"  min="1" name="r">
    <input type="submit" name="submit" value="Submit">

