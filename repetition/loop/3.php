<?php
if (isset($_POST['x'], $_POST['y'])){

    $x = $_POST['x'];
    $y = $_POST['y'];

    $z = $x * pow(0.85, $y);
echo $z;


}


?>
<form method="post">
    <input type="submit" value="Submit">
    <input type="text" name="x" placeholder="Nypris">
    <input type="text" name="y" placeholder="Ålder">