<?php
if(isset($_POST['x'])) {
$i = $_POST['x'];

echo $i . '<br>';

    while($i > 0){
        $i = $i - 1;
        echo $i . '<br>';
    }
}
?>
<form method="post">
    <input type="text" name="x">
    <input type="submit" value="xd">
</form>