<?php
include 'head.php';

echo '<table>';

$i = 0;
while ($i < 10) { //tiotal

  echo '<tr>';

  $j = 1; //ental
  while ($j < 11) {
    $ut = $i * 10 + $j;

    echo '<td>' . $ut . '</td>';

    $j++;


  }

  echo '</tr>';

  $i++;

}


echo '</table>';

include 'foot.php';
