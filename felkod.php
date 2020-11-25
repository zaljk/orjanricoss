<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Hitta fel</title>
</head>
<body>

<?php

if (isset($_POST ['tal1'], $_POST['tal2'])) {

  $tal1 = $_POST['tal1'];

  $tal2 = $_POST['tal2'];

  if ($tal1 == $tal2){

    echo 'Talen är lika stora. Talen har värdet ' .  ($_POST ['tal1']);
}
  else {

      echo 'Talen är olika';

  }

  echo '<br>';

  $tal3 = $tal1 + $tal2;

  echo $tal3;

  $tal4 = 5;

  if ($tal4 > $tal1){

    echo 'Hej';

  }

}



?>


</body>
</html>

<form method="post">
    Tal1: <input type="text" name="tal1"><br>
    Tal2: <input type="text" name="tal2"><br>
  <input type="submit" name="submit" value="Skicka">
</form>

