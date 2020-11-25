<?php
session_name('zk0002');
session_start();

include 'head.php';

if(!isset($_SESSION['arr1'])){  //Utropstecken = inte
  $_SESSION['arr1'] = [];       //Lägger in tom array
}

if (isset($_POST['inmatning'])){
  if ($_POST['inmatning'] == 'stopp'){
    $_SESSION['arr1'] = [];
  } else{
    $_SESSION['arr1'][] = $_POST['inmatning'];
  }
}

$i = 0;
while ($i < count($_SESSION['arr1'])){
  echo $_SESSION['arr1'][$i] . ' ';
  $i++;
}


?>
<form method="post">
Skriv nåt: <input type="text" name="inmatning"> <br>
<input type="submit" value="Skicka">
  </form>



<?php
include 'foot.php';