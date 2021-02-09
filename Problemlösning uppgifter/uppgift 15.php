<?php
session_name('zk0002');
session_start();
include 'head.php';

?>

    <form method="post">
        <input type="number" name="tal"
               placeholder="Gissa talet mellan 0-100"><br>
        <input type="submit" name="submit" value="submit"><br>
    </form>

<?php

if (!isset($_SESSION['arr1'])) {
    $_SESSION['arr1'] = [];
}
else {
    if (isset($_POST['tal'])) {

        $_SESSION['arr1'][0] = mt_rand(0, 100);

        if ($_POST['tal'] < $_SESSION['arr1'][0]) {
            echo 'Talet är större än ' . $_POST['tal'];
        }

        elseif ($_POST['tal'] > $_SESSION['arr1'][0]) {
            echo 'Talet är mindre än ' . $_POST['tal'];
        }

        elseif ($_POST['tal'] == $_SESSION['arr1'][0]){
            echo 'Grattis du gissade rätt';
            $_SESSION['arr1']=[];
        }
    }
}

include 'foot.php';