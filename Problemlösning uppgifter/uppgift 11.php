<?php
if(isset($_POST['x'])){
    $i = $_POST['x'];

    while ($i> 0){
        $siffror[] = $i % 10;
        $i = (int)($i / 10);
    }
    $x = $i % 100;
    $z = (int)($x/10);

    if(
        $i % 10 == $siffror[4] && $z == $siffror[3]){
echo 'ratata';
    }
else{
    echo 'noob';
}
echo $siffror[3];

}
?>
<form method="post">
    <input type="number" name="x" min="10000" max="99999">
    <input type="submit" value="submit">