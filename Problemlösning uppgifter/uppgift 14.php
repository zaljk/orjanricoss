<?php
include 'head.php';
?>

    <form method="post">
        <input type="number" name="tal"
               placeholder="Skriv ett tal som är större eller lika med 20"><br>
        <input type="submit" name="submit" value="Skicka"><br>
    </form>

<?php

if (isset($_POST['tal'])) {

    if ($_POST['tal'] < 20) {
        echo 'Talet måste vara större eller lika med 20';
    }

    else {
        $arr1[0] = -1;
        $i = 0;
        while ($i < 10) {
            $u = mt_rand(0, $_POST['tal'] - 1);
            $fel = 0;
            $j = 0;
            while ($j < count($arr1)) {
                if ($u == $arr1[$j]) {
                    $fel = 1;
                }
                $j++;
            }
            if (!$fel == 1) {
                $arr1[$i] = $u;
                $i++;
            }
        }
        $arr2[0] = -1;
        $i = 0;
        while ($i < 10) {
            $u = mt_rand(0, $_POST['tal'] - 1);
            $fel = 0;
            $j = 0;
            while ($j < count($arr2)) {
                if ($u == $arr2[$j]) {
                    $fel = 1;
                }
                $j++;
            }
            if (!$fel == 1) {
                $arr2[$i] = $u;
                $i++;
            }
        }

        $arr3[0] = -1;
        $i = 0;
        while ($i < 10) {
            $u = mt_rand(0, $_POST['tal'] - 1);
            $fel = 0;
            $j = 0;
            while ($j < count($arr3)) {
                if ($u == $arr3[$j]) {
                    $fel = 1;
                }
                $j++;
            }
            if (!$fel == 1) {
                $arr3[$i] = $u;
                $i++;
            }
        }


        $i=0;
        while($i<count($arr1)){

            $u=0;
            while($u<count($arr2)){

                $y=0;
                while($y<count($arr3)){
                    if($arr1[$i] + $arr2[$u] + $arr3[$y] == $_POST['tal']){
                        echo $arr1[$i] . ' + ' . $arr2[$u] . ' + ' . $arr3[$y] . ' = ' . $_POST['tal'] . '<br>';
                    }
                    $y++;
                }
                $u++;
            }
            $i++;
        }







    }




}
include 'foot.php';
?>