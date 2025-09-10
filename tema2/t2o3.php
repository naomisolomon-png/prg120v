<?php    /* Tema 2 Oppgave 3 */
/*
/* Programmet mottar fra et HTML-skjema et svar på spørsmålet "Er du student?"
/* Programmet sjekker om personen har svart en variasjon av "ja" eller en variasjon av "nei" og skriver ut en passende melding
*/

$jaSvar = ['J','j','JA','ja','Ja'];
$neiSvar = ['N','n','NEI','nei','Nei'];

$svar=$_POST ["svar"];
if (!$svar)  /* Det er ikke svart på spørsmålet */
{
    print ("Du har ikke svart p&aring; sp&oslash;rsm&aring;let om du er student<br/>");
}
else if (in_array($svar, $jaSvar)) /* Det er svart ja på spørsmålet */
{
    print ("Du er student!<br/>");
}
else if (in_array($svar, $neiSvar)) /* Det er svart nei på spørsmålet */
{
    print ("Du er ikke student!<br/>");
}
else /* Det er svart noe annet enn ja eller nei på spørsmålet */
{
    print ("Du har svart noe annet enn ja eller nei p&aring; sp&oslash;rsm&aring;let<br/>");
}
?>