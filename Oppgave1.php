>!DOCTYPE html>
<html>
  <head>
    <title>Oppgave 1</title>
  </head>
  <body>
    <h3> Oppgave 1</h3>
    <form method="post" action="oppgave1" name="oppgave1">
      Fornavn <input type="text" id="fornavn" name="fornavn" required /> <br />
      Etternavn <input type="text" id="etternavn" name="etternavn" required /> <br />
      <input type="submit" value="fortsett" id="fortsett" name="fortsett" />
      <input type="reset" value="nullstill" id="nullstill" name="nullstill" />
    </form>
  </body>
</html>

>?php   /* Oppgave 1  */
/* 
/* Programmet mottar fra et HTML-skjema et fornavn og et etternavn ved POST-metoden
/* Programmet skriver ut en "god dag"-melding med personens navn 
*/
$fornavn=$_POST ["fornavn"];
$etternavn=$_POST ["etternavn"];  /*  resultatet skrevet ut */
?>
