<?php
include 'head.php';

if (isset ($_POST['täljare'], $_POST ['nämnare'])) {

  $i = ($_POST['täljare']) / ($_POST['nämnare']);
  echo $i;










}













include 'foot.php';
?>
<form method="post">
  <input type="text" name="täljare" placeholder="Täljare">
  <input type="text" name="nämnare" placeholder="Nämnare">
  <input type="submit" value="Räkna">
