<?php
include 'head.php';
//12(*). Gör en sida som frågar efter en höjd på en rätvinklig triangel. Programmet skall skriva ut den rätvinkliga triangeln med en bas som är lika stor som höjden.
//Använd * - tecknet!
//
//Exempelkörning
//
//Triangelns höjd: 4
//*
//**
//***
//****

if (isset($_POST['höjd'])) {

    $i = 1;
    while ($i <= $_POST['höjd']){
        $j = 0;
        while ($j < $i){
            echo '*';
            $j++;
        }
        echo '<br>';
        $i++;
    }


}

?>
    <form method="post">
        <input type="number" min="2" name="höjd">
        <input type="submit" name="submit" value="Submit">
<?php
include 'foot.php';
?>