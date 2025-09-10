<!DOCTYPE html>
<html>
    <head>
        <title> Tema 2 Oppgave 1</title>
    </head>
    <body>
        <h3> Tema 2 Oppgave 1</h3>
            <p> Hva er 3 ganger 3? </p>
          <form method="post" action="t2o1.php" id="t2o1" name="t2o1">
            <input type="text" id="svar" name="svar" required />
            <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
            <input type="reset" value="Nullstill" name="nullstill" id="nullstill" /> <br />
          </form>  
    </body>
</html>

<?php     /* Tema 2 Oppgave 1 */
/* Programmet mottar fra et HTML-skjema et svar på spørsmålet "Hva er 3 ganger 3?" */
/* Programmet sjekker om svaret er riktig og skriver ut en avhengig av om svaret er riktig eller galt */

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
?>