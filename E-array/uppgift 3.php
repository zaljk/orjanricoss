<?php
include 'head.php';
if (isset($_POST['tal1'])) {
  $i = $_POST['tal1'];
  while($i > 0){
    $slump = mt_rand(1, 1000);
    $sarr[] = $slump;
    $i --;
  }

  rsort ($sarr);
  $i=0;
  while($i < count($sarr)){
    echo $sarr[$i] . '<br>';
    $i++;
  }
}
?>
<form method="post">
  <input type="text" name="tal1">
  <input type="submit" value="Submit">
<?php
include 'foot.php';
?>