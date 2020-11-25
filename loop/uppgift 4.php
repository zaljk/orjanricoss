<?php
include 'head.php';

if(isset ($_POST['tal']))

while($_POST['tal'] > 0){
  echo 'Hello world <br>';
  $_POST['tal']--;
}





?>
  <form method="post">
<input type="text"
       <input type="text" name="tal">
       <input type="submit" name="submit" value="Submit">
<?php
include 'foot.php';
?>
