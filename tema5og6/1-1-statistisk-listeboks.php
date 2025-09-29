<?php /* statistisk listeboks */
/* Programmet lager et skjema med en statistisk listeboks med ukedager */
?>

<h3> Velg ukedag </h3>

<form method="post" action="" id="velgUkedagSkjema" name="velgUkedagSkjema">
    Ukedag
    <selct name="ukedag" id="ukedag">
        <option value="mandag">mandag</option>
        <option value="tirsdag">tirsdag</option>
        <option value="onsdag">onsdag</option>
        <option value="torsdag">torsdag</option>
        <option value="fredag">fredag</option>
    </selct> <br />
    <input type="submit" value="Velg ukedag" id="velgUkedagKnapp" name="velgUkedagKnapp" />
</form>

<?php
if (isset($_POST ["velgUkedagKnapp"]))
{
    $ukedag=$_POST ["ukedag"];
    print ("&oslash;lgende ukedag er valgt: $ukedag <br />");
}
?>