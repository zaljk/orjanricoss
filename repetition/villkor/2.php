<?php
if(isset($_POST['t'], $_POST['t1'])) {
$i = $_POST['t'];
$y = $_POST['t1'];
if(is_numeric($i) && is_numeric($y)) {
    if ($i < 0 && $y < 0) {
        echo 'Hej';
    }
}
}
?>
<form method="post">
    <input type="text" name="t">
    <input type="text" name="t1">
    <input type="submit" value="XD">
</form>