<?php

if (isset ($_POST['Usern'], $_POST['Pass'])) {

if ($_POST['Usern'] == 'ZalJK' && ($_POST ['Pass'] == 'vattenfall69'))
{
  echo 'Välkommen';
}

else
{
  echo 'Fel inloggning';
}
}







?>
<form method="post">
  <input type="text" name="Usern" placeholder="Användarnamn">
  <input type="password" name="Pass" placeholder="Lösenord">
  <input type="submit" name="submit" value="Logga in">
