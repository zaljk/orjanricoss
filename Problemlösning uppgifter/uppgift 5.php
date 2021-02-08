<?php
$tal = [12,9,5,13,67,7,2,36,47,5,23,4,20,9,47,13,14,7,48];

//$i = 0;
//while($i < count($tal)){
//    if($i < count($tal) - 1){
//        echo $tal[$i] . ', ';
//    } else{
//        echo $tal[$i];
//    }
//$i++;
//}

$i = 0;
while($i < count($tal) - 1){
    echo $tal[$i] . ', ';
$i++;
    if($i == count($tal) - 1){
        echo $tal[$i];
    }
}


echo '<br>';

$sum = 0;
$i = 0;
while($i < count($tal)){
    $sum = $tal[$i] + $sum;
    $i++;
}
echo $sum;

echo '<br>';

$min = $tal[0];
$max = $tal[0];
$i = 1;
while($i < count($tal)){
    if($tal[$i] < $min){
        $min = $tal[$i];
    }
    if($tal[$i] > $max){
        $max = $tal[$i];
    }
    $i++;
}
echo $max . ' och ' . $min;
