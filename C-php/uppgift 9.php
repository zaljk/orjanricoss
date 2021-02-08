<?php
if(isset($_POST['x'], $_POST['y'], $_POST['z'])){

    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];
    $arr = [$x, $y, $z];
    if($arr[0] > $arr[1] && $arr[0] > $arr[2] && $arr[1] > $arr[2]){
        echo $arr[0] . ' ' . $arr[1] . ' ' . $arr[2];
    }
    elseif ($arr[0] > $arr[1] && $arr[0] > $arr[2] && $arr[2] > $arr[1]){
        echo $arr[0] . ' ' . $arr[2] . ' ' . $arr[1];
    }
elseif ($arr[1] > $arr[0] && $arr[1] > $arr[2] && $arr[0] > $arr[2]){
    echo $arr[1] . ' ' . $arr[0] . ' ' . $arr[2];
}
    elseif ($arr[1] > $arr[0] && $arr[1] > $arr[2] && $arr[2] > $arr[0]){
        echo $arr[1] . ' ' . $arr[2] . ' ' . $arr[0];
}
    elseif ($arr[2] > $arr[1] && $arr[2] > $arr[0] && $arr[0] > $arr[1]){
        echo $arr[2] . ' ' . $arr[0] . ' ' . $arr[1];
    }
    elseif ($arr[2] > $arr[1] && $arr[2] > $arr[0] && $arr[1] > $arr[0]){
        echo $arr[2] . ' ' . $arr[1] . ' ' . $arr[0];
    }
    elseif($arr[0] > $arr[1] && $arr[0] == $arr[2]){
        echo $arr[0] . ' ' . $arr[0] . ' ' . $arr[1];
    }
    elseif($arr[0] > $arr[2] && $arr[0] == $arr[1]){
        echo $arr[0] . ' ' . $arr[0] . ' ' . $arr[2];
    }
    elseif($arr[2] > $arr[1] && $arr[0] == $arr[1]){
        echo $arr[2] . ' ' . $arr[1] . ' ' . $arr[1];
    }
    elseif($arr[1] > $arr[2] && $arr[0] == $arr[2]){
        echo $arr[1] . ' ' . $arr[2] . ' ' . $arr[2];
    }
    elseif($arr[1] > $arr[0] && $arr[1] == $arr[2]){
        echo $arr[1] . ' ' . $arr[1] . ' ' . $arr[0];
    }
    elseif($arr[1] > $arr[2] && $arr[1] == $arr[0]){
        echo $arr[1] . ' ' . $arr[1] . ' ' . $arr[2];
    }
    elseif($arr[2] > $arr[1] && $arr[2] == $arr[0]){
        echo $arr[2] . ' ' . $arr[2] . ' ' . $arr[1];
    }
    elseif($arr[2] > $arr[0] && $arr[1] == $arr[2]){
        echo $arr[2] . ' ' . $arr[2] . ' ' . $arr[0];
    }
    else{
        echo $arr[0] . ' ' . $arr[0] . ' ' . $arr[0];
    }
}
?>
<form method="post">
    <input type="text" name="x">
    <input type="text" name="y">
    <input type="text" name="z">
    <input type="submit" value="Submit">