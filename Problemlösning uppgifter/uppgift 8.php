<?php
if(isset($_POST['x'], $_POST['y'], $_POST['z'])) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];


    $i = $x + $y + $z;

    if($x == 13 || 13 == $z ||  $y == 13){
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
