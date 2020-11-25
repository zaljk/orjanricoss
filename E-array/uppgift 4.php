<?php
include 'head.php';
if(isset($_POST['tal'])){

  $i = $_POST['tal'];
  while($i > 0){
    $slump = mt_rand(-100, 100);
    $arr[] = $slump;
    $i --;
  }

  echo 'Talen är ';
  rsort ($arr);
  $i = 0;
  while($i < count($arr)) {
    echo $arr[$i] . ', ';
    $i++;
  }

  $summa = 0;
  $i = 0;
  while ($i < count($arr)) {
        $summa = $summa + $arr[$i];
    $i++;
  }
  echo '<br> Summan är ' . $summa . '<br>';

  $u = count($arr) - 1;
  echo 'Det minsta talet är ';
 echo $arr[$u] . '<br>';

 $r = 0;
 echo 'Det största talet är ' . $arr[$r] . '<br>';

 $m = $summa / (count($arr));
 echo 'Medelvärdet är ' . $m . '<br>';


if (count($arr) % 2 == 1) {
    $median = (count($arr) - 1)/2;
    echo 'Median: ' . $arr[$median];
}
elseif (count($arr) % 2 == 0) {
    $median1 = (count($arr) - 2)/2;
    $median2 = (count($arr))/2;
    echo 'Medianen är  ' . ($arr[$median1] + $arr[$median2])/2;
}
















}














?>
<form method="post">
  <input type="text" name="tal">
  <input type="submit" value="Submit">
<?php
include 'foot.php';
?>
