<?php
include 'head.php';

$tal = [41, 5, 26, 2, 88, 9, 38, 67, 14, 30, 25, 44, 11, 94, 58];

$i = 0;
while ($i < count($tal)){

    $j = $i +1;
    while ($j < count($tal)){

        $u = $j +1;
        while ($u < count($tal)){
            if($tal[$i] + $tal[$j] + $tal[$u] == 97){
                echo $tal[$i] . ' + ' . $tal[$j] . ' + ' . $tal[$u] . ' = 97 <br>';
            }
            $u++;
        }

        $j++;
    }

    $i++;
}

include 'foot.php';
?>