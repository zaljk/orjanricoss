<?php
include 'head.php';

$summa = 0;               // Startvärde för summan
$i = 3;                   // Startvärde för loopen
while ($i < 100){          // Villkor för loopen
  $summa = $summa + $i;   // Nya summan = Gamla summan + Det som ska läggas till
  $i = $i + 3;            // Förändring av loopvariabeln
}
echo '<br>Summan av var tredje tal under 100 blir: ' . $summa . '<br>';

include 'foot.php';
?>

//Summera alla positiva tal
som är delbara med 3 och mindre än 100, d.v.s 3 + 6 + 9 + 12 + … + 99.
