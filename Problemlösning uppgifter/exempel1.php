<?php
include 'head.php';

// Dela upp ett tal i separata siffor.
$tal = mt_rand(1,9999);              // Slumpar ett tal mellan 1 och 9999.
echo 'Talet är: ' . $tal . '<br>';

$kvar = $tal;
while ($kvar > 0){                  // Fortsätter tills inget finns kvar i talet.
  $siffror[] = $kvar % 10;        // Resten vid division med 10 ger sista siffran.
  $kvar = (int)($kvar / 10);      // Heltalsdivision med 10 tar bort sista siffran.
}

$i = count($siffror) - 1;           // Sista index är ett mindre än antal tal i arrayen.
while ($i >= 0){                    // Skriver ut från slutet för att sista siffran ligger först.
  echo $siffror[$i] . ' ';
  $i--;
}
echo '<br>';

include 'foot.php';
