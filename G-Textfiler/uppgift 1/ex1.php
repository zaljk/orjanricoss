<?php
include 'head.php';

file_put_contents('lek1.file.txt', "Nu har vi fjärrundervisning... \n", FILE_APPEND);

$textfil = 'text.txt';
$str = file_get_contents($textfil); // Läser in textfilen till en sträng
echo nl2br($str) . '<br>'; // nl2br gör \n till <br>

$arr = file('name.txt'); // Läser in textfilen till array

$i = 0;
while ($i < count($arr)){
    $row = explode(':', $arr[$i]);
    if(trim($row[2]) == 'Karkan'){ //trim() tar bort radbrytningar mm.
        $temp = 'Användarnamn: ' . $row[0] . ' Förnamn: ' . $row[1] . ' Efternamn: ' . trim($row[2]);
        file_put_contents('namnfil.txt', $temp . "\n", FILE_APPEND);
    }
    $i++;
}



include 'foot.php';