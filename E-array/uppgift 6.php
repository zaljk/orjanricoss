<?php
session_name('zk0002');
session_start();

include 'head.php';

if(!isset($_SESSION['$arr'])){
$_SESSION['$arr'] = [];
}

if(isset($_POST['inmatning'])) {


    if ($_POST['inmatning'] == 'c'){
        $_SESSION['$arr'] = [];
        echo 'Arrayen är rensad';
    }
    elseif (is_numeric($_POST['inmatning'])){
        $_SESSION['$arr'][] = $_POST['inmatning'];
        $i = 0;
        while($i < count($_SESSION['$arr'])){
            echo $_SESSION['$arr'][$i] . ' ';
            $i++;
        }}


        elseif($_POST['inmatning'] == 'm'){
            $x = count($_SESSION['$arr']);
            $m = array_sum($_SESSION['$arr'])/$x;
        echo 'Medelvärdet är ' . $m;
    }

    elseif($_POST['inmatning'] == 'n'){
        $x = count($_SESSION['$arr']);
        echo $x . ' värden';
    }

    elseif($_POST['inmatning'] == 's'){
        sort($_SESSION['$arr']);
$i = 0;
while($i < count($_SESSION['$arr'])){
    echo $_SESSION['$arr'][$i] . ' ';
    $i++;
}
    }
else{
    echo 'Fel inmatning. <br>';
}


}
?>
    <form method="post">
        <input type="text" name="inmatning">
        <input type="submit" value="Skicka">
    </form>



<?php
include 'foot.php';