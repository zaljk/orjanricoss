<?php
include 'head.php';

if (isset ($_GET['tal'])) {
  $i = ($_GET['tal']);

  while ($i <= ($_GET['tal'] * 10)) {
    echo $i . '<br>';
    $i = $i + $_GET['tal'];
  }
}
?>

//Skriv "?tal='x'" i linken
