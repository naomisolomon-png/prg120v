<?php    /* Tema 2 Oppgave 2 */
/*
/* Programmet mottar fra et HTML-skjema et svar på spørsmålet "Er du student? (ja/nei)"
/* Programmet sjekker om personen har svart "ja" eller "nei" og skriver ut en passende melding
*/
$svar=$_POST ["svar"];
if (!$svar)  /* Det er ikke svart på spørsmålet */
{
    print ("Du har ikke svart p&aring; sp&oslash;rsm&aring;let om du er student<br/>");
}
else if ($svar == "j") /* Det er svart ja på spørsmålet */
{
    print ("Du er student!<br/>");
}
else if ($svar == "n") /* Det er svart nei på spørsmålet */
{
    print ("Du er ikke student!<br/>");
}
else /* Det er svart noe annet enn ja eller nei på spørsmålet */
{
    print ("Du har svart noe annet enn j eller n p&aring; sp&oslash;rsm&aring;let<br/>");
}
?>