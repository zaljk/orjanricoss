<?php
include 'head.php';

if (isset($_POST['text']))

  if($_POST['text'] <= 0){
    echo 'Fel';
  }
if($_POST['text'] > 12){
  echo 'Fel';
 }

$month_days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

$_POST['text'] = $_POST['text'] - 1;
echo $month_days[$_POST['text']];


include 'foot.php';
?>


<form method="post">
  <input type="text" name="text">
  <input type="submit" value="Submit" name="Submit">