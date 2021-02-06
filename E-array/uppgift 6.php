<?php
session_name('zk0002');
session_start();

include 'head.php';
if(!isset($_SESSION['arr1'])){
    $_SESSION['arr1'] = [];
}

if(isset($_POST['tal'])) {
    if ($_POST['tal'] == 'munano') {
        $_SESSION['arr1'] = [];
    } elseif (is_numeric($_POST['tal'])) {
        $_SESSION['arr1'][] = $_POST['tal'];
        $i = 0;
        while ($i < count($_SESSION['arr1'])) {
            echo $_SESSION['arr1'][$i] . ' ';
            $i++;
        }
    } elseif ($_POST['tal'] == 'n') {
        echo 'Det finns ' . count($_SESSION['arr1']) . ' värden i arrayen';
    } elseif ($_POST['tal'] == 'm') {
        $summa = 0;
        $i = 0;
        while ($i < count($_SESSION['arr1'])) {
            $summa = $summa + $_SESSION['arr1'][$i];
            $i++;
        }
        echo $summa / count($_SESSION['arr1']);
    }


    elseif ($_POST['tal'] == 's'){
        rsort($_SESSION['arr1']);
        $i = 0;
        while($i < count($_SESSION['arr1'])){
            echo ' ' . ($_SESSION['arr1'][$i]) ;
            $i++;
        }
    }













}













?>
  <form method="post">
    <input type="text" name="tal">
    <input type="submit" value="Submit">
<?php
include 'foot.php';
?>
