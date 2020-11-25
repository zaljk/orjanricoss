<?php

if (isset($_POST['Tal1'], $_POST ['Tal2'])) {

  if ($_POST ['Tal1'] > ($_POST['Tal2'])) {
    echo 'Tal1 är större än Tal2';
  }

  if ($_POST ['Tal2'] > ($_POST['Tal1'])) {
    echo 'Tal2 är större än Tal1';
  }

  if ($_POST ['Tal1'] == ($_POST['Tal2'])) {
    echo 'Talen är lika stora';
  }
}

?>
<form method="post">
    <input type="text" name="Tal1"> <br>
    <input type="text" name="Tal2">
    <input type="submit" name="submit" value="Räkna ut det största talet">
</form>