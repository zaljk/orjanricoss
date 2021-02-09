<?php
if(isset($_POST['h'], $_POST['r'])) {

    if (!is_numeric($_POST['r']) || !is_numeric($_POST['h'])) {
        echo 'Skriv en siffra';
    }

    else{
        $r = $_POST['r'];
        $h = $_POST['h'];

        $i = $r * $r * M_PI * $h;
        if ($r <= 0 || $h <= 0) {
            echo 'Ange ett rimligt tal';
        } else {
            echo 'Volymen är ' . $i;
        }
    }}


?>
<form method="post">
    <input type="text" name="r" placeholder="radie">
    <input type="text" name="h" placeholder="höjd">
    <input type="submit" value="Submit">
