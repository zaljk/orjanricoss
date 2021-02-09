<?php
$h1 = 0;
$h2 = 0;
$m1 = 0;
$m2 = 0;
$s1 = 0;
$s2 = 0;
if(isset($_POST['h1'], $_POST['m1'], $_POST['s1'], $_POST['h2'], $_POST['m2'], $_POST['s2'])) {
    $h1 = $_POST['h1'];
    $h2 = $_POST['h2'];
    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];

     $h = $h1 + $h2;
        $m = $m1 + $m2;
        $s = $s1 + $s2;
        $h3 = $m/60;
        $x = $m - 60;
        $x1 = ($x-1)*60;
        $s3 = $s/60;
        $y = $s - 60;
        $y2 = ($y-1)*60;

        if($m > 59) {
            $h = $h + (int)$h3;
            $m = (int)$x;


        }
        if($s > 59){
            $m = $m + (int)$s3;
            $s = (int)$y;
        }


        echo $h . ' timmar, ' . $m . ' minuter, ' . $s . ' sekunder';



}


?>
<form method="post">
  Tävling 1  <input type="number" min="0" name="h1" placeholder="h" required>
    <input type="number" name="m1" min="0" placeholder="m" required>
    <input type="number" name="s1" min="0" placeholder="s" required> <br>
   Tävling 2 <input type="number" min="0" name="h2" placeholder="h" required>
    <input type="number" name="m2" min="0" placeholder="m" required>
    <input type="number" name="s2" min="0" placeholder="s" required> <br>
    <input type="submit" value="Submit">

