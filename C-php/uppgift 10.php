<?php
//Uppgift vid tid över: Ta reda på hur php-funktionen mail() fungerar.
//Gör sedan en sida som skickar iväg ett mail.
//På sidan ska man ange en mottagaradress, ett ämne och ett meddelande.
//Sidan ska ge ett felmeddelande och inte skicka iväg mailet om något av fälten i formuläret är tomt.
//(Bonus: Få mailet att hantera svenska bokstäver (ÅÄÖ))


$to = '';
$subject = 'göre före money lyrics';
$arr = ['munano@hotmail.com', 'donkey@hotmail.com', 'googleads@hotmail.com', 'VIRUS131@hotmail.com', 'ISEEYOU@hotmail.com', 'ikwereulive@hotmail.com', 'malhpite@hotmail.com', 'would@hotmail.com', 'you@hotmail.com', 'rather@hotmail.com', 'have@hotmail.com', 'a@hotmail.com', 'that@hotmail.com', 'daughter@hotmail.com', 'or@hotmail.com', 'a@hotmail.com', 'gay@hotmail.com', 'son@hotmail.com', 'UP@hotmail.com', 'skrt@hotmail.com', 'pow@hotmail.com', 'imma skip@hotmail.com', 'see@hotmail.com', 'my@hotmail.com', 'wrist@hotmail.com', 'drown@hotmail.com', 'anybody@hotmail.com', 'wanna@hotmail.com', 'GÖRE@hotmail.com', 'FÖREMONEY@hotmail.com'];
$i = 30;
$x=0;
while($i > 0) {
    $message = 'Gö-gör det for the money, gör det för the cash
Gör det for the hoes, jag gillar slap ass
Gör det for the money, gör det för the cash
Gör det for the hoes, jag gillar slap ass
Laddar kallen, skjut ett skott (Su-suwoop)
Banana clip mot din kropp (Su-suwoop-woop)
Missar allt men träffar snopp (Su-suwoop-woop)
(Su-suwoop-woop)

Wallahi, Wallaha, mannen, gra-ta-ta-ta
Diamanter på oystern är allt jag vill ha (Den är äkta)
Det får mig må bra, det får mig bli glad
Maraboun delas, de vill ha choklad, mhm
Lite mera Ms här i livet
Tabben är laddad, tar inget för givet
Delar på brödet (Kropp), delar på vinet (Blod)
Kalla mig Jesus när jag tjall dig på ditt liv, bror
Foten på ratten med Glocken i handen
Det är mot en, yäni, skiter i matten
Fuck skolan, benim jagar para
Räknar mina cash på götten av din chagga

Gö-gör det for the money, gör det för the cash
Gör det for the hoes, jag gillar slap ass
Gör det for the money, gör det för the cash
Gör det for the hoes, jag gillar slap ass
Laddar kallen, skjut ett skott (Su-suwoop)
Banana clip mot din kropp (Su-suwoop-woop)
Missar allt men träffar snopp (Su-suwoop-woop)
(Su-suwoop-woop)

Vi har guzzar på hotellet, det är gähda hela kvällen
Sjuttiotusen förra helgen
Grabbar redo när det gäller (Shh)
Om du kan det som jag kan
Inga problem vi gör lakan på gatan (Uh)
Din kahba, du pratar
Aldrig whippat Audi, aldrig känt skiten starta
Hon vill käka min banan
Hon vill softa hon och jag
Hon vill flyga med ett plan
Hon vill mysa där i France

Gö-gör det for the money, gör det för the cash
Gör det for the hoes, jag gillar slap ass
Gör det for the money, gör det för the cash
Gör det for the hoes, jag gillar slap ass
Laddar kallen, skjut ett skott (Su-suwoop)
Banana clip mot din kropp (Su-suwoop-woop)
Missar allt men träffar snopp (Su-suwoop-woop)
(Su-suwoop-woop)';

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers  .= "From: $arr[$x]r\n";
    mail($to, $subject, $message, $headers)or die("mail error");
$i--;
$x++;
}

?>