<?php
include 'head.php';

file_put_contents('namn.txt', $_POST['text'] .  "\n", FILE_APPEND);





















include 'foot.php';
?>
<form method="post">
    <input type="text" name="text">
    <input type="submit" value="Submit">
