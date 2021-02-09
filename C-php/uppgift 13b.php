<?php
echo 'Gratis för barn under 5! <br>';


if(isset($_POST['u'], $_POST['v'], $_POST['f'], $_POST['p'])) {
    is_int($_POST['u'] && $_POST['v'] && $_POST['f']);
    $p = $_POST['p'];
    $f = $_POST['f'];
    $u = $_POST['u'];
    $v = $_POST['v'];
    $h = $u + $v;
    $t = $f - $h;
    $i = $v * 34;
    $x = $t * 67;
    $y = $x + $i;
    $p1 = $p - $y;
    if($u >= 0 && $v >= 0 && $f >= $h && $p >= $y) {

        ob_end_clean();

        echo 'Det kostar ' . $y . ' kr <br>';
        echo 'Du får tillbaka ' , $p1 . ' kr';
    }

    elseif($p < $y){
        ob_end_clean();

        echo 'DU HAR BETALAT FÖR LITE';
    }


    else{
        ob_end_clean();

        echo 'Ange rimliga heltal';
    }

}


?>
<form method="post">
    <input type="number" name="f" placeholder="personer i familjen">
    <input type="number" name="u" placeholder="0-4">
    <input type="number" name="v" placeholder="5-14">
    <input type="number" name="p" placeholder="para">
    <input type="submit" value="Submit">

