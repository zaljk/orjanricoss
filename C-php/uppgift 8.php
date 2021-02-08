<?php
if(isset($_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'], $_POST['q5'])) {
    $arr = ['q1', 'q2', 'q3', 'q4', 'q5'];
    $i = 0;
    $p = 0;
    while ($i < 5) {
        if ($_POST[$arr[$i]] == 'r') {
            $p = $p + 1;
        }
        $i++;

    }

    echo $p . ' rätt av 5';

}



?>
<form method="post">
    <p> Vem vann valet i USA 2020? </p>
    <input type="radio" value="dt" name="q1"> Donald Trump    <br>
    <input type="radio" value="hc" name="q1"> Hillary Clinton    <br>
    <input type="radio" value="r" name="q1"> Joe Biden   <br>
    <br>

    <p> Vilken ädelgas är radioaktiv? </p>
    <input type="radio" value="ar" name="q2"> Argon <br>
    <input type="radio" value="r" name="q2"> Radon <br>
    <input type="radio" value="kr" name="q2"> Krypton <br>
    <br>

    <p> Vem har skrivit boken "Doktor Glas"? </p>
    <input type="radio" value="r" name="q3"> Hjalmar Söderberg <br>
    <input type="radio" value="sl" name="q3"> Selma Lagerlöf <br>
    <input type="radio" value="vm" name="q3"> Vilhelm Moberg <br>
    <br>

    <p> Vem är vinets gud i den romerska mytologin? </p>
    <input type="radio" value="te" name="q4"> Terminus <br>
    <input type="radio" value="dr" name="q4"> Drincus <br>
    <input type="radio" value="r" name="q4"> Bacchus <br>
    <br>

    <p> Vad är ett juridiskt begrepp för ett grovt formellt fel i en domstols dom eller beslut som en högre instans därmed kan ändra? </p>
    <input type="radio" value="r" name="q5"> Domvilla <br>
    <input type="radio" value="df" name="q5"> Domfel <br>
    <input type="radio" value="dr" name="q5"> Domresning <br>

    <input type="submit" value="Rätta">
</form>