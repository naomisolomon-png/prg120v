<?php     /* Tema 2 Oppgave 1 */
/* Programmet mottar fra et HTML-skjema et svar på spørsmålet "Hva er 3 ganger 3?"
/* Programmet sjekker om svaret er riktig og skriver ut en avhengig av om svaret er riktig eller galt
*/
if (isset($_POST["svar"])) /* Svar-knappen er trykket */
{
    $svar = $_POST["svar"];
if ($svar == 9)  /* Angitt svar er riktig */
{

    print ("Riktig. 3 ganger 3 er 9! <br/>");
}
else  /* Angitt svar er galt */
{
    print ("Feil. 3 ganger 3 er 9! <br/>");
}
}
?>