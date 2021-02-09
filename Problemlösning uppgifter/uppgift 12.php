<?php
include "head.php";
//Skriv ett program som läser in ett heltal (maximalt 2 000 000 000) och avgör om det är en palindrom.
//OBS! Man får inte använda sig av strängar för att lösa uppgiften.
if (isset($_POST['tal1'])) {


    $kvar = $_POST['tal1'];
    while ($kvar > 0){
        $siffror[] = $kvar % 10;
        $kvar = (int)($kvar / 10);
    }

    $palindrom = 0;
    $i = 0;
    while ($i < count($siffror)) {  //31232
        $palindrom = $palindrom * 10 + $siffror[$i];
        $i++;
    }
    // 2 = 0 * 10 + 2
    // 23 = 2 * 10 + 3

    $mitttal = $_POST['tal1'];

    if ($mitttal == $palindrom) {
        echo 'Talet du angav: ' . $mitttal . ' är en palindrom';
    } else {
        echo 'Talet du angav: ' . $mitttal . ' är inte en palindrom';

    }


}



?>
    <form method="post">
        <input type="number" placeholder="Skriv ett tal" max="2000000000" name="tal1">
        <input type="submit" name="Skicka">
    </form>
<?php
include "foot.php";
?>