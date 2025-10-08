<?php /* Slett klasse */
/* Programmet lager et skjema for å velge en klasse som skal slettes */
?>

<script src="funksjoner.js"> </script>

<h3> Velg klasse som skal slettes </h3>

<form method="post" action="" id="slettKlasseSkjema" name="slettKlasseSkjema" onSubmit="return bekreft()"></form>
    Klassens klassekode
    <select name="klassekode" id="klassekode">
    <option value="">velg klasse</option>
    <?php include("dynamiske-funksjoner.php"); listeboksKlasse(); ?>
    </select> <br />
    <input type="submit" value="Slett klasse" id="slettKlasseKnapp" name="slettKlasseKnapp" />
</form>

<?php
if (isset($_POST ["slettKlasseKnapp"]))
{
    $klassekode=$_POST ["klassekode"];
    if (!$klassekode)
    {
        print ("Klasse er ikke valgt <br />");
    }
    else
    {
        include ("db-tilkobling.php"); /* Tilkobling til database-server utført og valg av database foretatt */

        $sqlSetning="DELETE FROM klasse WHERE klassekode='$klassekode';";
        mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
        /* SQL-setning sendt til database-serveren */

        print ("F&oslash;lgende klasse er n&aring; slettet: $klassekode <br />");
    }
}
?>