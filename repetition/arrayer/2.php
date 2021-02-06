<?php
if(isset($_POST['t'])) {
    $i = $_POST['t'];



while($i > 1) {
    $arr[] = $i % 10;
    $i = (int)$i / 10;
}
$sum = 0;
$i = 0;
while($i > count($arr)){
    $sum = $arr[$i] + $sum;
    $i++;

}
}
?>
<form method="post">
    <input type="text" name="t">
    <input type="submit" value="XD">