<?php  /* slett-klasse */
/*
/*  Programmet lager et skjema for å velge en eller flere klasser som skal slettes  
/*  Programmet sletter de valgte klassene */
?>

<script src="funksjoner.js"> </script>

<h3>Slett klasse</h3>

<form method="post" action="" id="slettKlasseSkjema" name="slettKlasseSkjema" onSubmit="return bekreft()">
  Student <br />
  <?php include("dynamiske-funksjoner.php"); sjekkbokserKlasse(); ?> <br/>
  <input type="submit" value="Slett klasse" name="slettKlasseKnapp" id="slettKlasseKnapp" /> 
</form>

<?php
  if (isset($_POST ["slettKlasseKnapp"]))
    {
      @$klassekode=$_POST ["klassekode"];
      $antall=count($klassekode);

      if ($antall==0)
        {
          print ("Ingen klasser ble valgt <br />");
        }
      else
        {
          include("db-tilkobling.php");  	
          for ($r=0;$r<$antall;$r++)
            {
              $sqlSetning="DELETE FROM klasse WHERE klassekode='$klassekode[$r]';";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
            }
          print ("Valgte klasse eller klasser er n&aring; slettet <br />");
        }
    }
?> 