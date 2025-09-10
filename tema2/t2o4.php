<?php  /* Tema 2 Oppgave 4 */
/* Programmet mottar fra et HTML-skjema et svar på spørsmålene
/* "Er du gift (j/n)?" og "Har du barn (j/n)?"
/* Programmet sjekker om det er svart j eller n på spørsmålene og skriver ut en passende melding
*/
$gift=$_POST ["gift"];
$barn=$_POST ["barn"];
if (!$gift || !$barn) /* Det er ikke svart på begge spørsmålene */
{
    print ("Du har ikke svar p&aring; begge sp&oslash;rsm&aring;lene<br/>");
}
else if ($gift == "j" && $barn == "j") /* Det er svart j på begge spørsmålene */
{
    print ("Du er gift og har barn!<br/>");
}
else if ($gift == "n" && $barn == "n") /* Det er svart n på begge spørsmålene */
{
    print ("Du er ikke gift og har ikke barn!<br/>");
}
else if ($gift == "j" && $barn == "n") /* Det er svart j på gift og n på barn */
{
    print ("Du er gift og har ikke barn!<br/>");
}
else if ($gift == "n" && $barn == "j") /* Det er svart n på gift og j på barn */
{
    print ("Du er ikke gift og har barn!<br/>");
}
else /* Det er ikke svart verken j eller n på begge spørsmålene */
{
    print ("Du har ikke svart j eller n p&aring; begge sp&oslash;rsm&aring;lene<br/>");
}
?>
