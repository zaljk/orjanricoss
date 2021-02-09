<?php
echo 'Gratis för barn under 5! <br>';


if(isset($_POST['u'], $_POST['v'], $_POST['p'])) {
is_int($_POST['u'] && $_POST['v']);

$u = $_POST['u'];
$v = $_POST['v'];
    $p = $_POST['p'];
    $i = $u * 34;
    $x = $v * 67;
    $y = $x + $i;
$p1 = $p - $y;
    if($u > 0 && $v > 0 && $p >= $y) {


        ob_end_clean();

        echo 'Det kostar ' . $y . ' kr <br>';
        echo 'Du får tillbaka ' . $p1 . ' kr';
    }
    elseif ($y > $p){
        ob_end_clean();

        echo 'DU HAR BETALAT FÖR LITE';

    }
    else{
        ob_end_clean();

        echo 'Ange positiva heltal';
        }
}


?>
<form method="post">
    <input type="number" name="u" placeholder="5-14 år">
    <input type="number" name="v" placeholder="15+ år">
    <input type="number" name="p" placeholder="para">
    <input type="submit" value="Submit">

