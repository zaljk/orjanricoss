<?php
include 'head.php';

$arr = file('nummer.txt'); // kan oxå skriva file('https://student.oedu.se/~jf/filer/tal.txt') för att ta direkt från sidan
$i = 0;
while($i < count($arr)){
    $x = $i + 1;
    echo "Tal " . $x . ": " . $arr[$i]  . "<br>";
    $i++;
}














include 'foot.php';
?>