<?php
if(isset($_POST['x'])){
    $x = $_POST['x'];
$i = 0;
while($x > 0){
    $arr[] = $x % 10;
    $x = (int)($x / 10);
    echo $arr[$i];
    $i++;

}
}

?>
<form method="post">
    <input type="number" min="100" max="999" name="x">
    <input type="submit" value="Submit">
