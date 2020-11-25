<?php
include 'head.php';

echo '<table>';
$i = 0;  //Tiotal
while ($i < 10){    // Loopa $i från 0 - 9
  echo '<tr>';      // Ny rad
  $j = 1;           // Ental
  while ($j < 11){  // För varje värde på $i loopas $j från 1 - 10
    $ut = $i * 10 + $j;
    echo '<td>' . $ut . '</td>';  // En cell för varje varv i loopen
    $j++;
  }
  echo '</tr>';     // Slut på rad
  $i++;
}
echo '</table>';

include 'foot.php';
?>
//Gör en tabell som skriver ut tal 1 - 100 i en tabell med tio tal på varje rad.
