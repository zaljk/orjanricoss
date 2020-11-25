<?php
include 'head.php';
echo '<table style="width: 80px;">';


$i = 0;
while ($i < 11){
  $ut = $i * 7;
  echo '<tr><td>' . $i . 'x7</td><td>=</td><td>' . ($i*7) . '</td></tr>';

  $i++;
}
echo '</table>';
include 'foot.php';