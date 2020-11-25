<?php

if (isset($_POST['Tal1'], $_POST['Tal2'])) {


if ($_POST['Tal1'] > ($_POST['Tal2']))
{
    echo ($_POST['Tal1'] . ', ' .  ($_POST['Tal2']));
}
if ($_POST['Tal2'] > ($_POST['Tal1']))
{
    echo ($_POST['Tal2'] . ', ' . ($_POST['Tal1']));
}
else
{
    echo ($_POST['Tal1'] . ', ' . ($_POST['Tal2']));
}
}


?>
<form method="post">
<input type="text" name=Tal1>
    <input type="text" name="Tal2">
    <input type="submit" name="submit" value="Störst först">


