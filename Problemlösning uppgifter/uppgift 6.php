<?php
if(isset($_POST['t'], $_POST['n'])){

    $t = $_POST['t'];
    $n = $_POST['n'];

    $x = (int)($t/$n);
    $i = $t % $n;


echo $x . '+' . $i . '/' . $n;





}
?>
<form method="post">
    <input type="text" name="t" placeholder="täljare">
    <input type="text" name="n" placeholder="nämnare">
    <input type="submit" value="Submit">
