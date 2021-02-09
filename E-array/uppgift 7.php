<?php
include 'head.php';

if(isset ($_POST['kast'])){

    $i = 0;
    while($i < 6){
        $arr[] = 0;
        $i++;
    }

    $i = 0;
    while($i < $_POST['kast']){
        $slump = mt_rand(1, 6);
        $slump = $slump - 1;
        $arr[$slump] = $arr[$slump] + 1;

        $i++;
    }

    $y = 0;
    $i = 1;
    while($i <= count($arr)){
        echo $i . ':or : ' . $arr[$y]/$_POST['kast']*100 . '% <br>';
        $y++;
        $i++;
    }




}
?>
<form method="post">
        Antal kast: <input type="text" name="kast">
        <input type="submit" name="submit" value="Kasta!">
    </form>
<?php
include 'foot.php';
?>