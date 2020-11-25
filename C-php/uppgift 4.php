<?php

echo 'Vad gör en tandläkare under lunchen?' . '<br>';

if (isset ($_POST ['Svar'])){

if ($_POST ['Svar'] == 'Käkar')
{
  echo 'Haha, nice';
}
else
  {
  echo 'Svaret är Käkar';
}
}








?>
<form method="post">
  <input type="text" name="Svar">
  <input type="submit" name="submit" value="Svar">