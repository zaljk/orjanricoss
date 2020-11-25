<?php
include 'head.php';

if(isset($_POST ['tal1'], $_POST ['tal2'])) {
  $i = $_POST ['tal1'];
  while ($i <= $_POST ['tal2']) {
    echo $i;
    $i++;
  }
}





?>
<form method="post">
  <input type="text" name="tal1" placeholder="Minsta talet">
  <input type="text" name="tal2" placeholder="Största talet">
  <input type="submit" name="Submit">
<?php
include 'foot.php';
?>
