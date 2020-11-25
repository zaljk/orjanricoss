<?php
include 'head.php';

$summa = 0;                          // Startvärde
$antal = 0;
$i = 3;
while ($summa < 1000){                // Villkor
  $summa = $summa + $i;              // Förändra värdet
  $antal++;
  $i = $i + 3;
}

echo 'Antal tal för att summan av var tredje tal ska bli minst 1000 är: ' . $antal . '<br>';
echo 'Summan är: ' . $summa . '<br>';

include 'foot.php';
?>

//Summera alla positiva tal som är delbara med
3 tills summan blir mer än eller lika med 1000. Ange antal tal som behövs.
