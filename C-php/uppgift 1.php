<?php
// Om man vill slippa se en massa NOTICE meddelanden:
error_reporting(E_ALL ^E_NOTICE);
// Tips!

if ($_POST['passwd'] == 'vattenfall69' && ($_POST['login'] == 'glizzy')) {
  echo 'Grattis, du har knäckt koden';
} else {
  echo 'Du kan inte det hemliga lösenordet';
}





?>
<form method="post">
  <input type="text" name="login">
  <input type="password" name="passwd">
  <input type="submit" name="submit" value="Login">
</form>