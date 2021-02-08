<?php
if(isset($_POST['x'], $_POST['y'], $_POST['z'])) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];


    $i = $x + $y + $z;

    if($x == $y || $x == $z ||  $y == $z){
        echo 'Error';
    }

    else{
        echo $i;
    }

}
?>
<form method="post">
    <input type="text" name="x">
    <input type="text" name="y">
    <input type="text" name="z">
    <input type="submit" value="Submit">
