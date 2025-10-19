<?php  /* slett-flere-studenter */
/*
/*  Programmet lager et skjema for å velge en eller flere studenter som skal slettes  
/*  Programmet sletter de valgte studentene */
?>

<script src="funksjoner.js"> </script>

<h3>Slett studenter</h3>

<form method="post" action="" id="slettStudenerSkjema" name="slettStudenterSkjema" onSubmit="return bekreft()">
  Student <br />
  <?php include("dynamiske-funksjoner.php"); sjekkbokserStudent(); ?> <br/>
  <input type="submit" value="Slett student" name="slettStudenterKnapp" id="slettStudenterKnapp" /> 
</form>

<?php
  if (isset($_POST ["slettStudenterKnapp"]))
    {
      @$brukernavn=$_POST ["brukernavn"];
      $antall=count($brukernavn);

      if ($antall==0)
        {
          print ("Ingen studenter ble valgt <br />");
        }
      else
        {
          include("db-tilkobling.php");  	
          for ($r=0;$r<$antall;$r++)
            {
              $sqlSetning="DELETE FROM student WHERE brukernavn='$brukernavn[$r]';";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
            }
          print ("De valgte studentene er n&aring; slettet <br />");
        }
    }
?> 