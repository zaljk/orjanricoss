<?php
if(isset($_POST['x'])) {
    $i = $_POST['x'];

while ($i > 0) {
    $siffror[] = $i % 10;
    $i = (int)($i / 10);
}

$reverted = $siffror[0] * 10000 + $siffror[1] * 1000 + $siffror[2] * 100 +$siffror[3] * 10 + $siffror[4];

if($_POST['x'] == $reverted){
    echo 'bra';
}
else{
    echo 'fel';
}
}
?>
<form method="post">
    <input type="number" name="x" min="10000" max="99999">
    <input type="submit" value="submit">