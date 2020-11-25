<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Mallsida</title>
</head>
<body>

<?php

echo '<h1> Nu skall vi lära oss lite om variabler </h1>';
echo '<br>';

$name1 = 'Fabbe';   //String - textsträng
$name2 = 'Örjan';
$name3 = 'Amar';

$tal1 = 5;          //integer (heltal)
$tal2 = 7;

echo $name3;        //skriver ut variablen
echo '<br>';

echo $name1 . ' & ' . $name2 . '<br>';  //Vi slår ihop strängarna

$tal1 + $tal2;     //Datorn räknar ut resultatet men sparar det inte

echo 'Beräkning: ' . ($tal1 + $tal2) . '<br>'; //OBS parantes runt beräkning

$tal3 = $tal1 + $tal2;   //Tal 3 kommer innehålla värdet 12 (5+7)

echo $tal3 . '<br>';

$tal3 = $tal1 + $tal2;

$tal4 = $tal3 / $tal2;  //tal4 blir ett flyttal (decimaltal)
echo $tal4 . '<br>';    //Skriver ut tal4

echo (int)$tal4 . '<br>';  //cast till int (heltal)

echo $tal4 . '<br>';      //fortfarande decimaltal

$tal4 = (int)$tal4;        //Här ändrar vi tal4


//villkorssatser
if (false)
{
  echo 'Det kommer aldrig att skrivas ut något här om det inte är true. <br>';
}

  if ($tal1 > 5)
  {
    echo 'Tal1 är större än fem <br>';
  }

  if ($tal2 <= 7)
  {
    echo 'Tal2 är mindre eller lika mycket som 7 <br>';
  }

  if ($tal3 == 57)
  {
    echo 'Tal3 är 57. Varken mer eller mindre <br>';
  }


  if($name1 == 'Fabbe' && $name2 == 'Örjan')
  {
      echo 'Båda villkoren är sanna. <br>';         //Name1 är Fabbe och name2 är Örjan.
  }

  if($tal1 == 5 || $tal2 < 2)
  {
      echo 'Minst ena villkoret är sant. <br>';     //Tal1 är 5 eller så är tal2 mindre än 2 (eller båda)
  }

  if(! ($tal1 == 6))
  {
      echo 'Tal 1 är inte 6 <br>';
  }


  if($tal1 == 100)
  {
      echo 'Tal1 är 100 <br>';
  }
  else
  {
      echo 'Tal1 är inte 100 <br>';
  }






  ?>





</body>
</html>

