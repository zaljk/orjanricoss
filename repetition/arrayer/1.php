<?php
$i = 0;
while($i < 10){
$slump = mt_rand(1, 1000);
$arr[] = $slump;
$i++;
}

$summa = 0;
$i = 0;
while ($i < count($arr)) {
    $summa = $summa + $arr[$i];
    $i++;
}
echo $summa . ' är summan' . '<br>';
echo '<br>';

$sum = 0;
$i = 9;
while($i >= 0){
    if($arr[$i] > 600){
        $sum = $sum + 1;
}
    $i--;
}
echo $sum . ' tal är större än 600' . '<br>';

$sum = 0;
$i = 9;
while($i >= 0){
    if($arr[$i] > 400 && $arr[$i] < 500){
        $sum = $sum + 1;
    }
    $i--;
}
echo $sum . ' tal är större än 400 men mindre än 500' . '<br>';

$sum = 0;
$i = 9;
while($i >= 0){
    if($arr[$i] < 100){
        $sum = $sum + 1;
    }
    $i--;
}
echo $sum . ' tal är inte större än 100' . '<br>';

$m = $summa / 10;
echo $m . ' är medelvärdet' . '<br>';

asort($arr);
print_r($arr);
echo '<br>' . '<br>';

rsort($arr);
print_r($arr);
echo '<br>';
$i = 0;
while($i < 9){
    echo $arr[$i] . '+';
    $i++;
}
echo $arr[9] . '=' . $summa;
?>

