<?php
include 'head.php';

$tal = [12,9,5,13,67,7,2,36,47,5,23,4,20,9,47,13,14,7,48];

$i = 0;
while($i < (count($tal))) {
  echo $tal[$i] . ' ';
  $i++;
  }

 echo '<br>';

$summa = 0;
$y = 0;
while($y < (count($tal))){
  $summa = $summa + $tal[$y];
  $y++;
}
echo $summa;

echo '<br>';

$max = $tal[0];
$i = 0;
while($i < (count($tal))){
  if($tal[$i] > $max){
    $max = $tal[$i];
  }
  $i++;
}
echo $max;
