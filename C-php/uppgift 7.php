<?php

if (isset ($_POST['Tal1'], $_POST ['Tal2'])) {


if ($_POST['Tal1'] > 100 || ($_POST['Tal2'] > 100))
{
  echo ($_POST ['text']);
}

else
  echo 'Inget tal är större än 100';
}



?>

<form method="post">
  <input type="text" name="Tal1">
  <input type="text" name="Tal2">
  <input type="text" name="text">
<input type="submit" name="submit" value="Om ett av talen är över 100 kan du ange en text">