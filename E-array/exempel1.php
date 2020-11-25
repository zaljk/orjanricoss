<?php
include 'head.php';



$names = ['Zal', 'Amar', 'Fabian'];
$talarray = [5, 7, 8, 1, 9, 7];

// $echo $names: Fungerar inte att skriva hela på en gång.

print_r($names);  //För testning, ska ej vara med i slutliga programmet.

echo '<br>';
echo $names[1];
echo '<br>';

//En array skrivs ut med en loop
$i = 0;
while ($i < count($names)){   //Count räknar antal element i arrayen
  echo 'Namn' . $i . ' är ' . $names[$i] . '<br>';
  $i++;
}

$i=0;
while ($i < 11){
  $arr1[$i] = $i * 5;
  $i++;
}
print_r($arr1);

$arr2 = [0, 1, 2, 3, 4];
$j = 0;
while ($j < 11){
  $arr2[] = $j * 6;    //Tomma klamrar = Lägg in på nästa lediga position b
  $j++;
}
print_r($arr2);

$ages = [
  'Zal' => 16,
  'Amar' => 17,
  'Fabian' => 17
];
echo '<br>';
echo $ages['Amar'] . '<br>';



include 'foot.php';
