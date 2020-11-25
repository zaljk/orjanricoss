<?php
include 'head.php';
$summa = 0;
$i = 1;
while($i < 31){
  $i = $i + 3;
  $summa = $i + $summa;
}
echo $summa;
