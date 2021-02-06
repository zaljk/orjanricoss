<?php
echo 'Äpplen kostar 3 kr styck, päron kostar 5 och bananer kostar 7 <br>';
if(isset($_POST["apple"], $_POST["pear"], $_POST["banana"])) {

    if(is_numeric($_POST["apple"]) && is_numeric($_POST["pear"]) && is_numeric($_POST["banana"])) {

        $x = $_POST["apple"] * 3;
        $z = $_POST["pear"] * 5;
        $t = $_POST["banana"] * 7;
        $i = $x + $z + $t;

        echo 'Du har köpt ' . $_POST["apple"] . ' äpplen, ' . $_POST["pear"] . ' päron och ' . $_POST['banana'] . ' bananer' . '<br>';
        echo 'Det kostar totalt ' . $i . ' kr';
    }
    else {
        echo 'Vänligen mata in ett heltal.';
    }
}







?>
<form method="post">
    <input type="text1" name="apple" placeholder="Äpple">
    <input type="text2" name="pear" placeholder="Päron">
    <input type="text3" name="banana" placeholder="Banan">
    <input type="submit" name="Submit" value="Submit">
</form>