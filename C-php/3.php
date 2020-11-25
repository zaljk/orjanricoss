<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Mallsida</title>
</head>
<body>
<?php

print_r($_GET);   //Felsökning querystring
echo '<br>';
print_r($_POST);  //Felsökning från method-post
echo '<br>';


if(isset ($_POST['fname'], $_POST['lname']))
{
  echo $_POST ['fname'] . ' ' , $_POST['lname'] . ' heter du! <br>';
 }
  if($_POST['fname'] == 'Zal' || ($_POST['fname'] == Örjan))
{
  echo 'Vilket fint namn <br>';
}

else
  {
    echo 'Vilket fult namn <br>';
  }









?>

<form method="post">
  First name: <input type="text" name="fname"> <br>
  Last name: <input type="text" name="lname"> <br>
  <input type="submit" name="submit" value="Skicka">


</body>
</html>







