<?php
if (isset($_POST['text'])) {
    if (is_numeric($_POST['text'])) {
        $i = $_POST['text'];

        if ($i >= 0 && $i < 21) {
            echo 'Du är en junior';
        } elseif ($i > 20 && $i < 50) {
            echo 'Du är en senior';
        } elseif ($i > 49) {
            echo 'Du är en oldboy';
        } else {
            echo 'Error';
        }
    }
}
?>
<form method="post">
    <input type="text" name="text" placeholder="Ålder">
    <input type="submit" value="Submit">
</form>