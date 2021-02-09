<?php
if(isset($_POST['m1'], $_POST['l'], $_POST['m2'])) {

    is_int($_POST['m1'] && $_POST['m2']);

    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    $l = $_POST['l'];

    $i = $m2 - $m1;
    if ($i < 0) {
        echo 'Fel avstånd';
    } else {
        echo 'Du har kört ' . $i . ' mil under året';
        echo '<br>';
        $x = $l / $i;
        echo 'Genomsnittlig bensinförbrukning per mil: ' . $x;
    }

}
?>
<form method="post">
    <input type="number" name="m1" placeholder="mil, början">
    <input type="number" name="m2" placeholder="mil, slut">
    <input type="number" name="l" placeholder="liter">
    <input type="submit" value="Submit">

