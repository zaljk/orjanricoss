<?php
include 'head.php';

$arr = [5, 0, 45, 15, -25, 20, 3, 16];

$i = 0;   // första talets index
while ($i < count($arr) - 1) {
  $j = $i + 1;     // andra talets index
  while ($j < count($arr)) {
    if ($arr[$i] + $arr[$j] == 20) {
      echo $arr[$i] . ' + ' . $arr[$j] . ' = 20<br>';
    }
    $j++;
  }
  $i++;
}

include 'foot.php';