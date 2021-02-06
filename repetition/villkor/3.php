<?php
if(isset($_GET['t'], $_GET['y'])){
    $t = $_GET['t'];
    $y = $_GET['y'];
    if(is_numeric($y) && is_numeric($t)) {

        if ($t < 0 || $y < 0) {
            echo 'Hej';
        }
    }
}
?>

