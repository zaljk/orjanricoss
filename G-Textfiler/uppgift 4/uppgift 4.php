<?php
include 'head.php';


if(isset($_POST['tal1'], $_POST['tal2'], $_POST['tal3'])) {

    file_put_contents('produkt.txt', $_POST['tal1'] . ' ' . $_POST['tal2'] . ' ' . $_POST['tal3'] . "\n", FILE_APPEND);
}
$arr = file('produkt.txt');
$summa = 0;
$i = 2;
while ($i < count($arr)) {
$row = explode(' ', $arr[$i]);

$summa = $summa + $row[1] * (trim($row[2]));
$i++;
}
echo 'Lagersoldet är ' . $summa  . ' kr';




include 'foot.php';
?>
<form method="post">
    <input type="text" name="tal1" placeholder="Produkt">
    <input type="text" name="tal2" placeholder="Antal">
    <input type="text" name="tal3" placeholder="Pris">
    <input type="submit" value="Submit">


