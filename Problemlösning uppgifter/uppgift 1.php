<?php
include 'head.php';

if(isset($_POST['tal'])){

  $summa = 0;
$j = $_POST['tal'];
$i = 0;
while($i < $j){
  $summa = $j + $summa;
  $j --;
}
  echo 'Summan blir ' . $summa;








}
?>
<form method="post">
  <input type="text" name="tal" placeholder="Tal">
  <input type="submit" value="Submit">
<?php
include 'foot.php';
?>
