<?php
include 'head.php';

if(isset($_POST['tal'])){
    $j = $_POST['tal'];

    $i = 1;
    while($j > $i){
        echo $i . '+';
        $i++;
        if($j == $i){
            echo $j . '=';
        }

    }


  $summa = 0;
$i = 0;
while($i < $j){
  $summa = $j + $summa;
  $j --;
}

echo $summa;








}
?>
<form method="post">
  <input type="text" name="tal" placeholder="Tal">
  <input type="submit" value="Submit">
<?php
include 'foot.php';
?>
