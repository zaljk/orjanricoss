<?php
if(isset($_POST['r'])){
    $i = $_POST['r'];
    $x = 0;
    while((pow($i, $x)) < 2){
        $x = $x + 0.01;
    }
echo 'Cirka ' . $x . ' år';

}
?>


<form method="post">
    <input type="number" step=".0001" min="1.001" name="r" placeholder="räntesats">
    <input type="submit" name="submit" value="Submit">
