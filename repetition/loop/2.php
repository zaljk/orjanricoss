<?php
if(isset($_POST['x'])){
 $i = $_POST['x'];
$x = 1;
$sum = 0;
while($i > $x){
    $sum = $x + $sum;
$x = $x + 2;


 }
 echo $sum;
}
?>
<form method="post">
    <input type="text" name="x">
    <input type="submit" value="Submit">