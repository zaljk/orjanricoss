<?php

for($i = 0; $i < 10; $i++){

    echo 'Zal <br>';
}

for($i = 1; 10>=$i; $i++){
 $x = $i * 10;

    echo $x . '<br>';

}

if(isset($_POST ['tal1'], $_POST ['tal2'])) {
    $i = $_POST ['tal1'];

    for($i = $_POST ['tal1']; $i <= $_POST ['tal2']; $i++){

        echo $i;

    }
}

?>
<form method="post">
    <input type="text" name="tal1" placeholder="Minsta talet">
    <input type="text" name="tal2" placeholder="Största talet">
    <input type="submit" name="Submit">

