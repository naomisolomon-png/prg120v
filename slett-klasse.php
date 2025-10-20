<?php  /* slett-klasse */
/*
/*  Programmet lager et skjema for å velge en eller flere klasser som skal slettes 
/* Programmet sjekker om det er studenter i klassen før sletting 
/*  Programmet sletter de valgte klassene */
?>

<script src="funksjoner.js"> </script>

<h3>Slett klasse</h3>

<form method="post" action="" id="slettKlasseSkjema" name="slettKlasseSkjema" onSubmit="return bekreft()">
  Klasse <br />
  <?php include("dynamiske-funksjoner.php"); sjekkbokserKlasse(); ?> <br/>
  <input type="submit" value="Slett klasse" name="slettKlasseKnapp" id="slettKlasseKnapp" />
</form>

<?php
  if (isset($_POST["slettKlasseKnapp"]))
    {
      @$klassekode = $_POST["klassekode"];
      $antall = is_array($klassekode) ? count($klassekode) : 0;

      if ($antall == 0)
        {
          print ("Ingen klasser er valgt. <br />");
        }
      else
        {
          include("db-tilkobling.php");
          for ($r = 0; $r < $antall; $r++)
            {
              $kk = mysqli_real_escape_string($db, $klassekode[$r]);

              /* Sjekk om det finnes studenter i klassen */
              $sjekkSql = "SELECT COUNT(*) AS cnt FROM klasse WHERE klassekode = '$kk';";
              $sjekkResult = mysqli_query($db, $sjekkSql) or die("Feil ved sjekk i databasen");
              $row = mysqli_fetch_assoc($sjekkResult);

              if ($row['cnt'] > 0)
                {
                  print ("Du kan ikke slette en klasse som har studenter i seg (klassekode: $kk) <br />");
                }
              else
                {
                  $sqlSetning = "DELETE FROM klasse WHERE klassekode='$kk';";
                  mysqli_query($db, $sqlSetning) or die ("Ikke mulig å slette data i databasen");
                }
            }
          print ("Operasjonen er ferdig <br />");
        }
    }
?>