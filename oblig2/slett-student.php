<?php /* Slett student */
/* Programmet lager et skjema for å velge en student som skal slettes */
?>

<script src="funksjoner.js"> </script>

<h3> Velg student som skal slettes </h3>

<form method="post" action="" id="slettStudentSkjema" name="slettStudentSkjema" onSubmit="return bekreft()"></form>
    Studentens brukernavn
    <select name="brukernavn" id="brukernavn">
    <option value="">velg brukernavn</option>
    <?php include("dynamiske-funksjoner.php"); listeboksStudent(); ?>
    </select> <br />
    <input type="submit" value="Slett student" id="slettStudentKnapp" name="slettStudentKnapp" />
</form>

<?php
if (isset($_POST ["slettStudentKnapp"]))
{
    $brukernavn=$_POST ["brukernavn"];
    if (!$brukernavn)
    {
        print ("Student er ikke valgt <br />");
    }
    else
    {
        include ("db-tilkobling.php"); /* Tilkobling til database-server utført og valg av database foretatt */

        $sqlSetning="DELETE FROM student WHERE brukernavn='$brukernavn';";
        mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
        /* SQL-setning sendt til database-serveren */

        print ("F&oslash;lgende student er n&aring; slettet: $student <br />");
    }
}
?>