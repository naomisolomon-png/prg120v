<?php  /*  dynamiske funksjoner */
/*
/*  denne filen inneholder følgende dynamiske funksjoner:
/*    listeboksStudent()
/*    listeboksKlasse()
*/

function listeboksStudent()
{
  include("db-tilkobling.php");  /* tilkobling til database-server og valg av database utført */
      
  $sqlSetning="SELECT * FROM student ORDER BY brukernavn;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");  
    /* SQL-setning sendt til database-serveren */
      
  $antallRader=mysqli_num_rows($sqlResultat);  /* antall rader i resultatet beregnet */

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spørringsresultatet */
      $brukernavn=$rad["brukernavn"];       

      print("<input type='checkbox' id='brukernavn' name='brukernavn[]' value='$brukernavn' /> $brukernavn <br/>");  
        /* ny sjekkboks laget */
    }
}

function listevboksKlasse()
{
  include("db-tilkobling.php");  /* tilkobling til database-server og valg av database utført */
      
  $sqlSetning="SELECT * FROM klasse ORDER BY klassekode;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");  
    /* SQL-setning sendt til database-serveren */
      
  $antallRader=mysqli_num_rows($sqlResultat);  /* antall rader i resultatet beregnet */

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spørringsresultatet */
      $klassekode=$rad["klassekode"];       

      print("<input type='checkbox' id='klassekode' name='klassekode[]' value='$klassekode' /> $klassekode <br/>");  
        /* ny sjekkboks laget */
    }
}


?>